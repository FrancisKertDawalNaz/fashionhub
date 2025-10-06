<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digital Fashion Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    @include('user.shoppartial.topbar')
    @include('user.shoppartial.nav')

    
    <main class="container my-4">
        @yield('content')
    </main>

    @include('user.partials.footer')
     @include('user.shoppartial.cart.cartshop')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: {!! json_encode(session('success')) !!},
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

    @if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: {!! json_encode($errors->first()) !!},
        });
    </script>
    @endif

    <script>
// Guard DOM lookups to prevent errors on pages that don't include the chatbot elements.
;(function () {
    const aiChatBtn = document.getElementById('aiChatBtn');
    const fashionBot = document.getElementById('fashionBot');
    const closeBot = document.getElementById('closeBot');
    const sendBotBtn = document.getElementById('sendBotBtn');
    const botInput = document.getElementById('botInput');
    const botBody = document.getElementById('botBody');

    if (!aiChatBtn) return; // nothing to wire on this page

    aiChatBtn.addEventListener('click', function() {
        if (fashionBot) fashionBot.style.display = 'flex';
        else alert('AI Chatbot will open here!'); // fallback behavior
    });

    if (closeBot && fashionBot) {
        closeBot.addEventListener('click', () => {
            fashionBot.style.display = 'none';
        });
    }

    async function sendMessage() {
        if (!botInput || !botBody || !sendBotBtn) return;
        const msg = botInput.value.trim();
        if (!msg) return;

        sendBotBtn.disabled = true;
        const userMsg = document.createElement('div');
        userMsg.classList.add('bot-message');
        userMsg.style.background = '#ffecd1';
        userMsg.style.alignSelf = 'flex-end';
        userMsg.textContent = msg;
        botBody.appendChild(userMsg);
        botBody.scrollTop = botBody.scrollHeight;
        botInput.value = '';

        const botReply = document.createElement('div');
        botReply.classList.add('bot-message');
        botReply.textContent = "Fashionbot is typing...";
        botBody.appendChild(botReply);
        botBody.scrollTop = botBody.scrollHeight;

        try {
            const response = await fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message: msg })
            });

            const data = await response.json();
            botReply.textContent = data.reply;
            botBody.scrollTop = botBody.scrollHeight;

        } catch (err) {
            botReply.textContent = "Fashionbot: Sorry, something went wrong 😔";
        } finally {
            sendBotBtn.disabled = false;
        }
    }

    if (sendBotBtn) sendBotBtn.addEventListener('click', sendMessage);
    if (botInput) botInput.addEventListener('keypress', function(e){ if(e.key === 'Enter') sendMessage(); });
})();
</script>
    @stack('scripts')

</body>

</html>
