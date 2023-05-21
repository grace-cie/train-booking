<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include_once('config/config.php') ?>
</head>

<body>
     <section class="bg-gray-50 dark:bg-gray-900">
          <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
               <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="./img/train-svgrepo-com.svg" alt="logo">
                    Train Booking
               </a>
               <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                         <h1
                              class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                              Create account
                         </h1>
                         <form class="space-y-4 md:space-y-6" action="controllers/RegisterImpl.php" method="POST">
                              <div>
                                   <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                        User name</label>
                                   <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="user name" required="">
                              </div>
                              <div class="flex">
                                   <div class="mr-2">
                                        <label for="fname"
                                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                             First name</label>
                                        <input type="text" name="fname" id="fname"
                                             class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                             placeholder="first name" required="">
                                   </div>
                                   <div>
                                        <label for="lname"
                                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                             Last name</label>
                                        <input type="text" name="lname" id="lname"
                                             class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                             placeholder="last name" required="">
                                   </div>
                              </div>
                              <div>
                                   <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                        email</label>
                                   <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" required="">
                              </div>
                              <div>
                                   <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                   <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                              </div>
                              <div>
                                   <label for="confirm-password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                        password</label>
                                   <input type="password" name="confirm-password" id="confirm-password"
                                        placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                              </div>
                              <div class="flex items-start">
                                   <?php if (isset($_GET['error'])) { ?>
                                        <div class="ml-3 text-sm">
                                             <p class="text-gray-500 dark:text-red-300">
                                                  <?php echo $_GET['error']; ?>
                                             </p>
                                        </div>
                                   <?php } ?>
                              </div>
                              <button type="submit" name="register"
                                   class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
                                   an account</button>
                              <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                   Already have an account? <a href="./index.php"
                                        class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                        here</a>
                              </p>
                         </form>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>