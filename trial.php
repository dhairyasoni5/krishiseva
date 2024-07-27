<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishi Seva</title>
    <meta name="description" content="Krishi Seva - A platform for farmers and distributors.">
    <meta property="og:title" content="Krishi Seva">
    <meta property="og:description" content="A platform for farmers and distributors to manage their produce and stay updated.">
    <meta property="og:image" content="/path/to/image.jpg">
    <meta property="og:url" content="https://example.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Additional CSS for the chatbot */
        #chat-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            max-height: 400px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }
        #chat-output {
            flex: 1;
            padding: 8px;
            overflow-y: auto;
        }
        #chat-input {
            border-top: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    ?>

    <div class="flex flex-col w-full min-h-screen">
        <header class="flex items-center h-16 px-4 border-b shrink-0 md:px-6 bg-[#1e293b] text-white">
            <div class="flex items-center gap-4">
                <img
                    src="/placeholder.svg"
                    alt="Logo"
                    class="h-10 w-10"
                    width="40"
                    height="40"
                    style="aspect-ratio: 40 / 40; object-fit: cover;"
                />
                <h1 class="text-xl font-bold">Krishi Seva</h1>
            </div>
            <form class="flex-1 ml-auto sm:flex-initial max-w-[300px]">
                <div class="relative">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground"
                    >
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input
                        class="flex h-10 w-full rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8 bg-[#334155] text-white placeholder:text-gray-400 focus:bg-[#475569]"
                        placeholder="Search"
                        type="search"
                    />
                </div>
            </form> 
            <nav class="flex items-center gap-6 ml-auto">
                <a class="text-white hover:text-gray-300" href="#">
                    Home
                </a>
                <a class="text-white hover:text-gray-300" href="includes/schemes.php">
                    Govt. Schemes
                </a>
                <a class="text-white hover:text-gray-300" href="#">
                    Rewards
                </a>
                <a class="flex items-center gap-2 text-white hover:text-gray-300" href="includes/profiledetails.php">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-4 w-4"
                    >
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Profile
                </a>
            </nav>
        </header>
        <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-10 bg-[#f1f5f9]">
            <section class="p-4 bg-white rounded-md shadow-md">
                <h2 class="text-xl font-bold">
                    <?php echo isset($_SESSION['name']) ? "Welcome, " . htmlspecialchars($_SESSION['name']) . " (" . htmlspecialchars($_SESSION['type']) . ")" : "Welcome to Krishi Seva"; ?>
                </h2>
                <div class="flex items-center justify-center gap-4 mt-4">
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9] px-6 py-3"
                        onclick="window.location.href='includes/SellProduce.html'"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
                            <path d="M15 18H9"></path>
                            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
                            <circle cx="17" cy="18" r="2"></circle>
                            <circle cx="7" cy="18" r="2"></circle>
                        </svg>
                        Sell Produce
                    </button>
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:text-accent-foreground h-10 flex items-center gap-2 text-[#4f46e5] hover:bg-[#f1f5f9] px-6 py-3"
                        onclick="window.location.href='includes/submit_crop.php'"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <circle cx="8" cy="21" r="1"></circle>
                            <circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Buy Produce
                    </button>
                </div>
            </section>
            <section
                class="relative w-full h-[300px] bg-cover bg-center"
                style="background-image: url('photos/banner2.jpg');"
            >
                <div class="absolute inset-0 bg-[#1e293b] bg-opacity-50"></div>
            </section>
            <section class="p-4 bg-white rounded-md shadow-md">
                <h2 class="text-xl font-bold">Recent News and Updates</h2>
                <div class="flex items-center gap-4 mt-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-4 w-4 text-gray-500"
                    >
                        <path d="M4 4h16v16H4z"></path>
                        <path d="M4 9h16"></path>
                        <path d="M4 15h16"></path>
                    </svg>
                    <div class="flex flex-col">
                        <h3 class="text-lg font-semibold">New Scheme Announced</h3>
                        <p class="text-gray-600">
                            The government has announced a new scheme to support organic farming...
                        </p>
                    </div>
                </div>
            </section>
            <section class="p-4 bg-white rounded-md shadow-md">
                <h2 class="text-xl font-bold">Weather Updates</h2>
                <div class="flex items-center gap-4 mt-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-4 w-4 text-gray-500"
                    >
                        <path d="M12 2a5 5 0 0 0-4.33 7.54A8 8 0 0 0 4 19a8 8 0 0 0 16 0 8 8 0 0 0-3.67-6.46A5 5 0 0 0 12 2z"></path>
                    </svg>
                    <div class="flex flex-col">
                        <h3 class="text-lg font-semibold">Rainfall Expected</h3>
                        <p class="text-gray-600">
                            Heavy rainfall is expected in the northern regions over the next few days...
                        </p>
                    </div>
                </div>
            </section>
            <section class="p-4 bg-white rounded-md shadow-md">
                <h2 class="text-xl font-bold">Market Prices</h2>
                <div class="flex items-center gap-4 mt-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-4 w-4 text-gray-500"
                    >
                        <path d="M2 12l2 2 4-4"></path>
                        <path d="M20 12l-2-2-4 4"></path>
                        <path d="M2 12h16"></path>
                        <path d="M20 12h2"></path>
                        <path d="M2 22l2-2 4 4"></path>
                        <path d="M20 22l-2-2-4 4"></path>
                        <path d="M2 22h16"></path>
                        <path d="M20 22h2"></path>
                    </svg>
                    <div class="flex flex-col">
                        <h3 class="text-lg font-semibold">Wheat Prices Soar</h3>
                        <p class="text-gray-600">
                            The price of wheat has increased significantly due to recent climate conditions...
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Chatbot Section -->
    <div id="chat-container" class="hidden">
        <h2 class="text-xl font-bold p-4 bg-gray-800 text-white">Ask Our AI Assistant</h2>
        <div id="chat-output" class="flex-1 p-2 bg-gray-100 overflow-y-auto"></div>
        <input
            id="chat-input"
            class="p-2 border-t border-gray-300"
            placeholder="Ask a question..."
            type="text"
            onkeypress="if(event.key === 'Enter') sendMessage()"
        />
    </div>

    <script>
        function sendMessage() {
            const input = document.getElementById('chat-input');
            const output = document.getElementById('chat-output');
            const userMessage = input.value.trim();
            if (userMessage === '') return;

            // Display user's message
            output.innerHTML += `<div class="text-right text-blue-500">${userMessage}</div>`;
            input.value = '';

            // Send user's message to the server
            fetch('includes/chatbot.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(response => response.json())
            .then(data => {
                // Display AI's response
                const aiResponse = data.response;
                output.innerHTML += `<div class="text-left text-green-500">${aiResponse}</div>`;
                output.scrollTop = output.scrollHeight;
            })
            .catch(error => {
                console.error('Error:', error);
                output.innerHTML += `<div class="text-left text-red-500">Error: Unable to get response.</div>`;
            });
        }
    </script>
</body>
</html>
