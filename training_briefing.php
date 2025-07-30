<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone 1 Kick-off Sprint: Task Manager</title>
    <script src="timer.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #session-timer-display {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; /* Or a specific height like 150px */
            font-size: 4.5rem; /* Large font size */
            font-weight: 700; /* Bold */
            color: #22d3ee; /* Tailwind cyan-400 */
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-300 font-sans antialiased">

    <!-- Fullscreen Timer Modal -->
    <div id="fullscreen-timer-modal"
         class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-90 p-4 transition-opacity duration-300 hidden"
         style="opacity: 0;">
        <div class="relative w-full max-w-4xl aspect-square flex flex-col items-center justify-center">
            <button id="close-fullscreen-timer-btn" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div id="fullscreen-timer-display-modal" class="text-white font-extrabold"
                 style="font-size: clamp(3rem, 15vw, 8rem);"></div>
        </div>
    </div>

    <div class="container mx-auto p-4 md:p-8 max-w-7xl">

    <div class="container mx-auto p-4 md:p-8 max-w-7xl">

        <!-- Header Section -->
        <header class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-2">Capstone Kick-off Sprint</h1>
            <p class="text-lg text-cyan-400">Building Momentum & Learning AI Coding</p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Project Vision & Tech -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Project Vision Card -->
                <div class="bg-gray-800 rounded-lg shadow-xl p-8">
                    <h2 class="text-3xl font-bold text-white mb-4 border-b-2 border-cyan-500 pb-2">Our Project: Task Manager App</h2>
                    <p class="text-gray-400 mb-6">Our goal for this quick ~3.5-hour sprint is to build a <strong>Task Manager app</strong> that saves tasks right in your browser (using Local Storage). This quick session is a great chance to build team spirit and get better at using AI to help us code fast.</p>
                    
                    <!-- Modern Project Mockup -->
                    <h3 class="text-2xl font-bold text-white mb-3 mt-6">What the App Will Look Like & Do</h3>
                    <p class="text-gray-400 mb-6">This is how our Task Manager will appear and work. You'll be able to type a task, add it to the list, mark tasks as complete, and delete them. All your tasks will stay saved in your browser even if you close the page!</p>
                    <div class="bg-gray-900/70 p-6 rounded-lg border border-gray-700">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-white">Pro-Tasker</h3>
                            <div class="flex space-x-1.5">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <!-- Input Form -->
                            <div class="bg-gray-800 p-4 rounded-md">
                                <input type="text" placeholder="Task Title (e.g., 'Deploy to production')" class="w-full bg-gray-700 border-gray-600 rounded p-2 text-white placeholder-gray-500 focus:ring-2 focus:ring-cyan-500 focus:outline-none">
                                <button class="mt-2 w-full bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">Add Task</button>
                            </div>
                            <!-- Task List -->
                            <div class="space-y-3">
                                <!-- Task Item 1 (Completed) -->
                                <div class="flex items-center justify-between bg-gray-800 p-3 rounded-md opacity-60">
                                    <div class="flex items-center">
                                        <input type="checkbox" checked class="form-checkbox h-5 w-5 bg-gray-700 border-gray-600 text-green-500 rounded focus:ring-green-500">
                                        <label class="ml-3 text-gray-400 line-through">Finish Capstone briefing document</label>
                                    </div>
                                    <button class="text-gray-500 hover:text-red-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                                </div>
                                <!-- Task Item 2 -->
                                <div class="flex items-center justify-between bg-gray-800 p-3 rounded-md">
                                    <div class="flex items-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 bg-gray-700 border-gray-600 text-cyan-600 rounded focus:ring-cyan-500">
                                        <label class="ml-3 text-white">Develop the backend API endpoints</label>
                                    </div>
                                    <button class="text-gray-500 hover:text-red-500 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI Prompting Card -->
                <div class="bg-gray-800 rounded-lg shadow-xl p-8">
                    <h2 class="text-3xl font-bold text-white mb-4 border-b-2 border-cyan-500 pb-2">Using AI: Our Smart Assistant</h2>
                    <p class="text-gray-400 mb-6">Think of AI as your smart coding helper. It helps us work faster, but we still need to guide it. Learn how to ask AI for help effectively.</p>
                    <h3 class="text-xl font-semibold text-white mb-3">Good Questions to Ask AI</h3>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-start"><span class="text-cyan-400 mr-3 mt-1">❯</span><div><strong>HTML/Tailwind UI:</strong> <code class="text-sm bg-gray-700 text-yellow-300 rounded px-2 py-1">Using TailwindCSS, create the HTML for a task item with a checkbox, task text, and a delete button (SVG icon).</code></div></li>
                        <li class="flex items-start"><span class="text-cyan-400 mr-3 mt-1">❯</span><div><strong>Core JS Logic:</strong> <code class="text-sm bg-gray-700 text-yellow-300 rounded px-2 py-1">Write a vanilla JavaScript function that takes task text, creates a new list item (li) element, and appends it to my tasks list in the DOM.</code></div></li>
                        <li class="flex items-start"><span class="text-cyan-400 mr-3 mt-1">❯</span><div><strong>Local Storage Persistence:</strong> <code class="text-sm bg-gray-700 text-yellow-300 rounded px-2 py-1">How do I save an array of task objects to browser localStorage and retrieve it when the page loads? Provide code examples.</code></div></li>
                        <li class="flex items-start"><span class="text-cyan-400 mr-3 mt-1">❯</span><div><strong>Event Handling:</strong> <code class="text-sm bg-gray-700 text-yellow-300 rounded px-2 py-1">Write a JavaScript event listener for the 'Add Task' button that gets the input value, creates a new task, and adds it to the list.</code></div></li>
                        <li class="flex items-start"><span class="text-cyan-400 mr-3 mt-1">❯</span><div><strong>Debugging:</strong> <code class="text-sm bg-gray-700 text-yellow-300 rounded px-2 py-1">My tasks disappear on page refresh. Here is my JavaScript for adding and loading tasks [PASTE CODE]. What's wrong with the persistence logic?</code></div></li>
                    </ul>
                    <div class="mt-6 border-t border-gray-700 pt-4">
                        <p class="font-bold text-green-400">Tip: Tell AI Who It Is!</p>
                        <p class="text-gray-400 text-sm">Don't just ask for code. Tell AI its job. For example: <code class="text-xs bg-gray-700 text-yellow-300 rounded px-1 py-0.5">"You are an expert front-end developer. Look at my JavaScript code for deleting tasks. How can I make it better for updating the website and saving data?"</code></p>
                    </div>
                </div>

            </div>

            <!-- Right Column: Goals, Schedule, Tech Stack -->
            <div class="lg:col-span-1 space-y-8">

                <!-- Session Goals Card -->
                <div class="bg-gray-800 rounded-lg shadow-xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">Our Main Goals</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center"><svg class="h-6 w-6 text-green-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Ignite Team Momentum</li>
                        <li class="flex items-center"><svg class="h-6 w-6 text-green-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Build Team Cohesion</li>
                        <li class="flex items-center"><svg class="h-6 w-6 text-green-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Sharpen AI Prompting Skills</li>
                        <li class="flex items-center"><svg class="h-6 w-6 text-green-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Gain Practical Frontend Experience</li>
                        <li class="flex items-center"><svg class="h-6 w-6 text-green-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Work Together to Solve Problems</li>
                    </ul>
                </div>

                <!-- Proposed Schedule Card -->
                <div class="bg-gray-800 rounded-lg shadow-xl p-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold text-white">Sprint Session Timer</h3>
                        <button id="fullscreen-timer-btn" class="text-gray-400 hover:text-cyan-400 focus:outline-none">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-cyan-400 transition-colors duration-300">
  <rect width="200" height="200" fill="none"/>
  <g stroke="currentColor" stroke-width="15" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path d="M50 50h100v100H50z"/>
    <path d="M75 75h50v50H75z"/>
  </g>
</svg>
                        </button>
                    </div>
                <div class="bg-gray-700 rounded-lg shadow-lg p-6 mb-4 text-center">
                    <p id="session-timer-display" class="text-5xl font-extrabold text-cyan-400">12:00:00</p>
                    <p class="text-gray-400 mt-2">Remaining Time</p>
                </div>
                <button id="start-sprint-timer" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Start 3.5 Hour Timer</button>

                <h3 class="text-2xl font-bold text-white mb-4 mt-8">Our 3.5-Hour Plan</h3>
                    <ol class="relative border-l border-gray-700 space-y-6">
                        <li class="ml-4"><div class="absolute w-3 h-3 bg-cyan-500 rounded-full mt-1.5 -left-1.5 border border-gray-900"></div><time class="mb-1 text-sm font-normal leading-none text-gray-400">0:00 - 0:15</time><h4 class="text-lg font-semibold text-white">Briefing & Setup</h4><p class="text-sm font-normal text-gray-500">Understand the plan, check tools, and set up files.</p></li>
                        <li class="ml-4"><div class="absolute w-3 h-3 bg-cyan-500 rounded-full mt-1.5 -left-1.5 border border-gray-900"></div><time class="mb-1 text-sm font-normal leading-none text-gray-400">0:15 - 1:00</time><h4 class="text-lg font-semibold text-white">HTML & Static UI</h4><p class="text-sm font-normal text-gray-500">Create the full website layout (form, list) and add styles using TailwindCSS.</p></li>
                        <li class="ml-4"><div class="absolute w-3 h-3 bg-cyan-500 rounded-full mt-1.5 -left-1.5 border border-gray-900"></div><time class="mb-1 text-sm font-normal leading-none text-gray-400">1:00 - 2:30</time><h4 class="text-lg font-semibold text-white">Core JS Logic (CRUD without persistence)</h4><p class="text-sm font-normal text-gray-500">Make tasks add, show, and delete on the website. Focus on making them work.</p></li>
                        <li class="ml-4"><div class="absolute w-3 h-3 bg-cyan-500 rounded-full mt-1.5 -left-1.5 border border-gray-900"></div><time class="mb-1 text-sm font-normal leading-none text-gray-400">2:30 - 3:15</time><h4 class="text-lg font-semibold text-white">Persistence & State Management</h4><p class="text-sm font-normal text-gray-500">Use 'local storage' to save and load tasks. Make 'mark as complete' also save.</p></li>
                        <li class="ml-4"><div class="absolute w-3 h-3 bg-cyan-500 rounded-full mt-1.5 -left-1.5 border border-gray-900"></div><time class="mb-1 text-sm font-normal leading-none text-gray-400">3:15 - 3:30</time><h4 class="text-lg font-semibold text-white">Final Debug & Demo Prep</h4><p class="text-sm font-normal text-gray-500">Fix any last bugs, clean up code, and get ready to show what we built.</p></li>
                    </ol>
                </div>

                <!-- Tech Stack Card -->
                <div class="bg-gray-800 rounded-lg shadow-xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-4">Tools We'll Use</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-900/50 text-blue-300 text-sm font-medium px-3 py-1 rounded-full">HTML5</span>
                        <span class="bg-yellow-900/50 text-yellow-300 text-sm font-medium px-3 py-1 rounded-full">Vanilla JavaScript</span>
                        <span class="bg-sky-900/50 text-sky-300 text-sm font-medium px-3 py-1 rounded-full">TailwindCSS</span>
                        <span class="bg-purple-900/50 text-purple-300 text-sm font-medium px-3 py-1 rounded-full">Browser Local Storage</span>
                        <span class="bg-gray-700/50 text-white text-sm font-medium px-3 py-1 rounded-full">GitHub (Version Control)</span>
                    </div>
                    <h4 class="font-bold text-cyan-400 mt-6 mb-2">Team Collaboration</h4>
                    <p class="text-gray-400 text-sm">For this quick project, everyone will be actively working on the <strong>app's main code</strong> from the start. While individual 'Primary Coding Focus' areas are listed for different phases, this doesn't mean you wait to contribute!</p>
                    <p class="text-gray-400 text-sm mt-2"><strong>What to do if your 'Primary Coding Focus' phase hasn't started:</strong></p>
                    <ul class="list-disc list-inside text-gray-400 text-sm ml-4">
                        <li><strong>Prepare:</strong> Dive deep into the requirements for your upcoming phase. Think about how you'll approach it and what AI prompts you might use.</li>
                        <li><strong>Review Code:</strong> Look at the code being written by teammates in earlier phases. Offer feedback, spot potential issues, or suggest improvements.</li>
                        <li><strong>Support & Collaborate:</strong> If a teammate is stuck, jump in to help. Discuss ideas, brainstorm solutions, or pair program on a challenging section.</li>
                        <li><strong>General Setup/Refinements:</strong> Look for small tasks that can be done at any time, like setting up basic file structures, adding comments, or minor styling tweaks.</li>
                    </ul>
                    <p class="text-gray-400 text-sm mt-2">We highly encourage working together and sharing ideas constantly! Our goal is continuous collaboration and learning throughout the entire 3.5-hour sprint.</p>

                    <h4 class="font-bold text-cyan-400 mt-6 mb-2">Using GitHub for Our Sprint</h4>
                    <p class="text-gray-400 text-sm">For this sprint, we will also use GitHub. This is super important for actual development work. It lets us keep track of all changes, work on code at the same time without messing things up, and learn how to use version control as a team. Consider this a practical training for future projects where professional GitHub use is a must.</p>
                </div>



            </div>
        </div>

        <!-- Our Team & Roles Card -->
        <div class="bg-gray-800 rounded-lg shadow-xl p-8 mt-12">
            <h3 class="text-2xl font-bold text-white mb-4">Our Team & Roles</h3>
            <div class="space-y-4">
                <div class="bg-gray-700 p-3 rounded-lg flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="mb-2 sm:mb-0">
                        <h5 class="text-lg font-semibold text-white">Justine Carcueva <span class="ml-2 px-2 py-0.5 bg-green-700 text-green-200 text-xs font-bold rounded-full">Score: 88.3</span></h5>
                        <p class="text-gray-400 text-sm mt-1">
                            <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full mr-2">Developer</span>
                            <span class="inline-block bg-purple-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Secondary Role: Local Storage Manager</span>
                        </p>
                        <p class="text-gray-400 text-sm mt-2 leading-tight"><strong>Focus:</strong> Will primarily code the <strong>task persistence logic</strong> (saving/loading tasks to browser local storage), ensuring tasks are saved and retrieved correctly. Also, will help with general JavaScript features.<br><strong class="text-cyan-400">Primary Coding Focus:</strong> <span class="text-cyan-300">Phase 4 (2:30 - 3:15) - Persistence & State Management</span></p>
                    </div>
                </div>
                <div class="bg-gray-700 p-3 rounded-lg flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="mb-2 sm:mb-0">
                        <h5 class="text-lg font-semibold text-white">Joedemar Rosero <span class="ml-2 px-2 py-0.5 bg-green-700 text-green-200 text-xs font-bold rounded-full">Score: 87.5</span></h5>
                        <p class="text-gray-400 text-sm mt-1">
                            <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full mr-2">Developer</span>
                            <span class="inline-block bg-purple-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Secondary Role: Local Storage Manager</span>
                        </p>
                        <p class="text-gray-400 text-sm mt-2 leading-tight"><strong>Focus:</strong> Will primarily code the <strong>task management logic</strong> (add/edit/delete tasks) and help integrate with local storage to keep our task list organized.<br><strong class="text-cyan-400">Primary Coding Focus:</strong> <span class="text-cyan-300">Phase 3 (1:00 - 2:30) - Core JS Logic</span></p>
                    </div>
                </div>
                <div class="bg-gray-700 p-3 rounded-lg flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="mb-2 sm:mb-0">
                        <h5 class="text-lg font-semibold text-white">Harres Uba <span class="ml-2 px-2 py-0.5 bg-green-700 text-green-200 text-xs font-bold rounded-full">Score: 85.0</span></h5>
                        <p class="text-gray-400 text-sm mt-1">
                            <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full mr-2">Developer</span>
                            <span class="inline-block bg-red-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Secondary Role: QA</span>
                        </p>
                        <p class="text-gray-400 text-sm mt-2 leading-tight"><strong>Focus:</strong> Will actively code <strong>core task features</strong> like adding/deleting tasks. Their secondary role is to immediately test new additions for correct functionality and report any bugs found.<br><strong class="text-cyan-400">Primary Coding Focus:</strong> <span class="text-cyan-300">Phase 3 (1:00 - 2:30) - Core JS Logic</span></p>
                    </div>
                </div>
                <div class="bg-gray-700 p-3 rounded-lg flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="mb-2 sm:mb-0">
                        <h5 class="text-lg font-semibold text-white">Rhiyo Tahari <span class="ml-2 px-2 py-0.5 bg-green-700 text-green-200 text-xs font-bold rounded-full">Score: 84.8</span></h5>
                        <p class="text-gray-400 text-sm mt-1">
                            <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full mr-2">Developer</span>
                            <span class="inline-block bg-yellow-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Secondary Role: UI/UX Designer</span>
                        </p>
                        <p class="text-gray-400 text-sm mt-2 leading-tight"><strong>Focus:</strong> Will lead the <strong>initial UI coding</strong> using TailwindCSS, setting up the main structure for tasks and ensuring a great user experience.<br><strong class="text-cyan-400">Primary Coding Focus:</strong> <span class="text-cyan-300">Phase 2 (0:15 - 1:00) - HTML & Static UI</span></p>
                    </div>
                </div>
                <div class="bg-gray-700 p-3 rounded-lg flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="mb-2 sm:mb-0">
                        <h5 class="text-lg font-semibold text-white">Jayvin Andsza <span class="ml-2 px-2 py-0.5 bg-orange-700 text-orange-200 text-xs font-bold rounded-full">Score: 67.9</span></h5>
                        <p class="text-gray-400 text-sm mt-1">
                            <span class="inline-block bg-blue-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full mr-2">Developer</span>
                            <span class="inline-block bg-red-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Secondary Role: QA</span>
                        </p>
                        <p class="text-gray-400 text-sm mt-2 leading-tight"><strong>Focus:</strong> Will code various <strong>task interaction features</strong> (e.g., marking complete). Their secondary role is to test for overall usability and cross-browser compatibility throughout development.<br><strong class="text-cyan-400">Primary Coding Focus:</strong> <span class="text-cyan-300">Phase 3 (1:00 - 2:30) - Core JS Logic</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center mt-12 pt-6 border-t border-gray-800">
            <p class="text-gray-500">Let's build something awesome and set the tone for a successful semester.</p>
            <p class="text-xs text-gray-600 mt-2">&copy; Capstone 1 Lead - First Semester, 4th Year College</p>
        </footer>

<!-- Watermark -->
        <div class="fixed bottom-4 left-4 text-xs text-gray-500 opacity-50 z-50">This project is created on Honoedc</div>

    </div>
</body>
</html>