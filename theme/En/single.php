<?php get_header(); the_post(); ?>
<div class="single_width_1025_wrap">
   <article class="single_width_1025">
      <div class="single_title ">
         <h1><?php the_title()?></h1>
      </div>
      <!-- post publication date --> 
      <div class="single_post_date_views_wrap">
         <div class="single_post_date_views">
            <div class="single_post_date_wrap">
               <?php
                  $published = get_the_time('U');
                  $updated = get_the_modified_time('U');
                  $current_year = date('Y');
                  
                  $pub_year = date('Y', $published);
                  $upd_year = date('Y', $updated);
                  
                  $pub_format = ($pub_year === $current_year) ? 'F j' : 'F j, Y';
                  $upd_format = ($upd_year === $current_year) ? 'F j' : 'F j, Y';
                  
                  $pub_date = date_i18n($pub_format, $published);
                  $upd_date = date_i18n($upd_format, $updated);
                  ?>
               <?php if ($published === $updated) : ?>
               <div class="single_post_date">
                  <p><?php echo $pub_date; ?></p>
               </div>
               <?php else : ?>
               <div class="single_post_date">
                  <p>add: <?php echo $pub_date; ?></p>
                  <div class="single_post_date_upd_wrap">
                     <div class="single_post_date_upd">
                        <div class="single_post_date_upd_separator_wrap">
                           <span class="single_post_date_upd_separator_svg" aria-hidden="true">
                              <svg viewBox="0 0 297 297" class="heartbeat_single">
                                 <path
                                    d="M277.47,49.459c-13.551-13.78-33.892-21.064-58.824-21.064c-30.677,0-57.294,17.727-70.144,43.475
                                    c-12.85-25.748-39.466-43.475-70.144-43.475c-23.853,0-44.62,7.79-58.475,21.934C6.41,64.085-0.458,83.648,0.024,106.902
                                    c0.273,13.19,3.447,26.465,9.483,39.782h51.16l18.615-55.847c1.115-3.345,4.247-5.602,7.773-5.602s6.658,2.256,7.773,5.602
                                    l33.193,99.58l12.71-38.131c1.115-3.345,4.247-5.602,7.773-5.602H287.38c5.831-12.691,9.37-26.022,9.602-39.815
                                    C297.393,82.359,290.828,63.043,277.47,49.459z"
                                    fill="currentColor"
                                    />
                                 <path
                                    d="M135.792,218.917c-1.115,3.345-4.247,5.602-7.773,5.602c-3.526,0-6.658-2.256-7.773-5.602l-33.193-99.58l-12.71,38.131
                                    c-1.115,3.345-4.247,5.602-7.773,5.602H18.377c12.35,19.664,30.885,39.377,55.545,58.996
                                    c35.138,27.955,69.518,44.986,70.965,45.697c1.14,0.561,2.377,0.841,3.616,0.841c1.252,0,2.503-0.287,3.654-0.86
                                    c4.537-2.26,88.196-44.559,126.254-104.674H154.407L135.792,218.917z"
                                    fill="currentColor"
                                    />
                              </svg>
                           </span>
                        </div>
                        <p>upd: <?php echo $upd_date; ?></p>
                     </div>
                  </div>
               </div>
               <?php endif; ?>
            </div>
            <div class="single_post_views_wrap">
               <div class="single_post_eye">
                  <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                  <svg  viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                     <g stroke="none" stroke-width="1"   fill-rule="evenodd">
                        <path d="M14,5.25 C8.16666667,5.25 3.185,8.87833333 1.16666667,14 C3.185,19.1216667 8.16666667,22.75 14,22.75 C19.8333333,22.75 24.815,19.1216667 26.8333333,14 C24.815,8.87833333 19.8333333,5.25 14,5.25 L14,5.25 L14,5.25 Z M14,19.8333333 C10.78,19.8333333 8.16666667,17.22 8.16666667,14 C8.16666667,10.78 10.78,8.16666667 14,8.16666667 C17.22,8.16666667 19.8333333,10.78 19.8333333,14 C19.8333333,17.22 17.22,19.8333333 14,19.8333333 L14,19.8333333 L14,19.8333333 Z M14,10.5 C12.0633333,10.5 10.5,12.0633333 10.5,14 C10.5,15.9366667 12.0633333,17.5 14,17.5 C15.9366667,17.5 17.5,15.9366667 17.5,14 C17.5,12.0633333 15.9366667,10.5 14,10.5 L14,10.5 L14,10.5 Z">
                        </path>
                     </g>
                  </svg>
               </div>
               <div class="single_post_number_views">
                  <?php
                     $views = get_post_meta($post->ID, "views", true);
                     echo format_number_short((int)$views);
                     ?>
               </div>
            </div>
         </div>
      </div>
      <!-- / post publication date -->
      <div class="single_wrap">
         <?php the_content() ?>
         <div class="add_comment__on__social_networks___wrap">
            <div class="add_comment__on__social_networks">
               <div class="add_comment__on__social_networks___text_wrap">
                  <p>Comment on</p>
               </div>
               <div class="add_comment__on__social_networks____socials_wrap">
                  <div class="add_comment__on__social_networks___discord">
                     <a href="https://discord.gg/ENB7RbxVZE" target="blank" rel="noopener" aria-label="link to discord channel">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127.14 96.36">
                           <path d="M107.7,8.07A105.15,105.15,0,0,0,81.47,0a72.06,72.06,0,0,0-3.36,6.83A97.68,97.68,0,0,0,49,6.83,72.37,72.37,0,0,0,45.64,0,105.89,105.89,0,0,0,19.39,8.09C2.79,32.65-1.71,56.6.54,80.21h0A105.73,105.73,0,0,0,32.71,96.36,77.7,77.7,0,0,0,39.6,85.25a68.42,68.42,0,0,1-10.85-5.18c.91-.66,1.8-1.34,2.66-2a75.57,75.57,0,0,0,64.32,0c.87.71,1.76,1.39,2.66,2a68.68,68.68,0,0,1-10.87,5.19,77,77,0,0,0,6.89,11.1A105.25,105.25,0,0,0,126.6,80.22h0C129.24,52.84,122.09,29.11,107.7,8.07ZM42.45,65.69C36.18,65.69,31,60,31,53s5-12.74,11.43-12.74S54,46,53.89,53,48.84,65.69,42.45,65.69Zm42.24,0C78.41,65.69,73.25,60,73.25,53s5-12.74,11.44-12.74S96.23,46,96.12,53,91.08,65.69,84.69,65.69Z"></path>
                        </svg>
                        Discord
                     </a>
                  </div>
                  <div class="add_comment__on__social_networks___telegram">
                     <a href="https://t.me/ShedovChat" target="blank" rel="noopener" aria-label="link to chat in telegram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 20">
                           <path d="m488.649875 44.6098697c6.442438-2.8224615 10.738405-4.6832009 12.887902-5.5822181 6.137252-2.5668769 7.41252-3.0127709 8.243723-3.0276516.182815-.0030813.591576.0424775.856354.2585203.223574.1824224.285088.428849.314524.6018054.029436.1729565.066092.5669556.036954.874815-.33258 3.5138587-1.771648 12.041067-2.503764 15.9766489-.309785 1.6652923-.919763 2.2236562-1.510292 2.2782995-1.283356.1187526-2.257879-.8528431-3.500872-1.6721675-1.945039-1.2820809-3.043862-2.0801802-4.931859-3.3312543-2.181908-1.4458326-.767468-2.2404874.475995-3.5391756.32542-.3398729 5.979917-5.5116482 6.08936-5.9808093.013687-.0586764.02639-.2773944-.102829-.3928855-.129218-.1154911-.319934-.0759976-.457559-.0445881-.195081.044522-3.302306 2.1096922-9.321675 6.1955107-.881976.6089971-1.680842.9057209-2.396598.8901714-.789064-.017142-2.306907-.4486274-3.435267-.8174505-1.38398-.4523766-2.48394-.6915513-2.388158-1.4598267.049889-.4001653.59791-.8094133 1.644061-1.227744z" fill-rule="evenodd" transform="translate(-487 -36)"></path>
                        </svg>
                        Telegram
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="single_share_post_wrap">
            <div class="single_share_post">
               <div class="single_share_post_title">
                  <p>Share</p>
               </div>
               <div class="single_share_post_social_links">
                  <div class="single_share_post_social_links__icon_wrap single_share_post_social_links__telegram_icon">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 26 20">
                        <path d="m488.649875 44.6098697c6.442438-2.8224615 10.738405-4.6832009 12.887902-5.5822181 6.137252-2.5668769 7.41252-3.0127709 8.243723-3.0276516.182815-.0030813.591576.0424775.856354.2585203.223574.1824224.285088.428849.314524.6018054.029436.1729565.066092.5669556.036954.874815-.33258 3.5138587-1.771648 12.041067-2.503764 15.9766489-.309785 1.6652923-.919763 2.2236562-1.510292 2.2782995-1.283356.1187526-2.257879-.8528431-3.500872-1.6721675-1.945039-1.2820809-3.043862-2.0801802-4.931859-3.3312543-2.181908-1.4458326-.767468-2.2404874.475995-3.5391756.32542-.3398729 5.979917-5.5116482 6.08936-5.9808093.013687-.0586764.02639-.2773944-.102829-.3928855-.129218-.1154911-.319934-.0759976-.457559-.0445881-.195081.044522-3.302306 2.1096922-9.321675 6.1955107-.881976.6089971-1.680842.9057209-2.396598.8901714-.789064-.017142-2.306907-.4486274-3.435267-.8174505-1.38398-.4523766-2.48394-.6915513-2.388158-1.4598267.049889-.4001653.59791-.8094133 1.644061-1.227744z" fill-rule="evenodd" transform="translate(-487 -36)"></path>
                     </svg>
                     <a href="https://telegram.me/share/url?url=<?php the_permalink() ?>"
                        onclick="window.open(this.href, this.title, ); return false" target="_parent" aria-label="Share on Telegram">
                     </a>
                  </div>
                  <div class="single_share_post_social_links__icon_wrap single_share_post_social_links__vk_icon">
                     <svg viewBox="-8 -7 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.52944 7.02944C0.5 14.0589 0.5 25.3726 0.5 48V52C0.5 74.6274 0.5 85.9411 7.52944 92.9706C14.5589 100 25.8726 100 48.5 100H52.5C75.1274 100 86.4411 100 93.4706 92.9706C100.5 85.9411 100.5 74.6274 100.5 52V48C100.5 25.3726 100.5 14.0589 93.4706 7.02944C86.4411 0 75.1274 0 52.5 0H48.5C25.8726 0 14.5589 0 7.52944 7.02944ZM17.3752 30.4169C17.9168 56.4169 30.9167 72.0418 53.7084 72.0418H55.0003V57.1668C63.3753 58.0001 69.7082 64.1252 72.2498 72.0418H84.0835C80.8335 60.2085 72.2914 53.6668 66.9581 51.1668C72.2914 48.0835 79.7915 40.5835 81.5831 30.4169H70.8328C68.4995 38.6669 61.5836 46.1668 55.0003 46.8751V30.4169H44.2499V59.2501C37.5833 57.5835 29.1668 49.5002 28.7918 30.4169H17.3752Z"></path>
                     </svg>
                     <a href="http://vk.com/share.php?url=<?php the_permalink() ?>" title=""
                        onclick="window.open(this.href, this.title, ); return false" target="_parent" aria-label="Share on VK">
                     </a>
                  </div>
                  <div class="single_share_post_social_links__icon_wrap single_share_post_social_links__x_icon">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" version="1.1">
                        <path style=" stroke:none;fill-rule:nonzero; fill-opacity:1;" d="M 11.90625 8.476562 L 19.351562 0 L 17.585938 0 L 11.117188 7.359375 L 5.957031 0 L 0 0 L 7.808594 11.128906 L 0 20.015625 L 1.765625 20.015625 L 8.589844 12.242188 L 14.042969 20.015625 L 20 20.015625 M 2.402344 1.300781 L 5.109375 1.300781 L 17.585938 18.777344 L 14.875 18.777344 "/>
                     </svg>
                     <a href="http://twitter.com/share?&url=<?php the_permalink() ?>"
                        onclick="window.open(this.href, this.title, ); return false" target="_parent" aria-label="Share to X">
                     </a>
                  </div>
                  <div class="single_share_copy_notification_wrap">
                     <div class="single_share_copy_notification">
                        <p>Copy</p>
                     </div>
                     <div class="single_share_copy_icon" 
                        data-href="<?php the_permalink() ?>">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M10.975 14.51a1.05 1.05 0 0 0 0-1.485 2.95 2.95 0 0 1 0-4.172l3.536-3.535a2.95 2.95 0 1 1 4.172 4.172l-1.093 1.092a1.05 1.05 0 0 0 1.485 1.485l1.093-1.092a5.05 5.05 0 0 0-7.142-7.142L9.49 7.368a5.05 5.05 0 0 0 0 7.142c.41.41 1.075.41 1.485 0zm2.05-5.02a1.05 1.05 0 0 0 0 1.485 2.95 2.95 0 0 1 0 4.172l-3.5 3.5a2.95 2.95 0 1 1-4.171-4.172l1.025-1.025a1.05 1.05 0 0 0-1.485-1.485L3.87 12.99a5.05 5.05 0 0 0 7.142 7.142l3.5-3.5a5.05 5.05 0 0 0 0-7.142 1.05 1.05 0 0 0-1.485 0z"/>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="single_sub_wrap">
            <div class="single_sub_icons">
               <div class="single_orcid">
                  <a rel="noreferrer noopener" href="https://orcid.org/0009-0001-9559-1696" target="_blank" aria-label="link to ORCID">ORCID: 0009-0001-9559-1696</a>
               </div>
               <div class="single_sub_icons_level_4">
                  <div class="sub_icon_single_wrap  single_sub_icons_level_4__crystal_icon">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-5 15 520 477.06" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                        <g transform="matrix(1 0 0 0.949513 0 12.924693)">
                           <g transform="matrix(.938948 0 0 1 15.629278 0)">
                              <path d="M510.141,143.979L424.63,41.365c-1.523-1.828-3.78-2.885-6.159-2.885h-324.883c-.182-.001-.363.003-.545.015-.004,0-.009,0-.01,0-.229.014-.455.039-.68.072-1.877.277-3.664,1.217-4.977,2.787-.002.003-.005.008-.009.011L1.857,143.978c-.005.005-.011.012-.016.018-.001.002-.003.004-.005.006-.003.004-.006.009-.01.013-.002.002-.004.005-.006.009-.002.003-.005.006-.008.01-.002.003-.005.006-.009.011-.001.002-.003.004-.005.006-.003.004-.006.009-.011.013c0,0-.001.001-.001.002-1.203,1.485-1.788,3.273-1.786,5.051c0,.105.002.209.006.314.026.645.129,1.287.31,1.912.294,1.019.792,1.985,1.487,2.836L249.691,470.45c1.519,1.939,3.846,3.071,6.31,3.071s4.79-1.133,6.31-3.071L510.294,154.058c2.329-2.977,2.266-7.176-.153-10.079ZM418.802,59.416l68.064,81.677h-129.322l61.258-81.677Zm-16.365-4.903L341.179,136.19L273.115,54.513h129.322Zm-78.043,86.581h-136.79l68.395-82.075l68.395,82.075ZM238.883,54.513L170.819,136.19L109.561,54.513h129.322ZM93.196,59.416l61.258,81.677h-129.322L93.196,59.416ZM24.485,157.127h139.865l73.614,272.368L24.485,157.127Zm231.514,277.65l-75.041-277.65h150.082l-75.041,277.65Zm18.036-5.281l73.613-272.369h139.865L274.035,429.496Z"></path>
                           </g>
                        </g>
                     </svg>
                     <a href="https://crysty.ru/AndrewShedov" target="_blank" rel="noopener" aria-label="link to Crystal">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap single_sub_icons_level_4__discord_icon">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127.14 96.36">
                        <path d="M107.7,8.07A105.15,105.15,0,0,0,81.47,0a72.06,72.06,0,0,0-3.36,6.83A97.68,97.68,0,0,0,49,6.83,72.37,72.37,0,0,0,45.64,0,105.89,105.89,0,0,0,19.39,8.09C2.79,32.65-1.71,56.6.54,80.21h0A105.73,105.73,0,0,0,32.71,96.36,77.7,77.7,0,0,0,39.6,85.25a68.42,68.42,0,0,1-10.85-5.18c.91-.66,1.8-1.34,2.66-2a75.57,75.57,0,0,0,64.32,0c.87.71,1.76,1.39,2.66,2a68.68,68.68,0,0,1-10.87,5.19,77,77,0,0,0,6.89,11.1A105.25,105.25,0,0,0,126.6,80.22h0C129.24,52.84,122.09,29.11,107.7,8.07ZM42.45,65.69C36.18,65.69,31,60,31,53s5-12.74,11.43-12.74S54,46,53.89,53,48.84,65.69,42.45,65.69Zm42.24,0C78.41,65.69,73.25,60,73.25,53s5-12.74,11.44-12.74S96.23,46,96.12,53,91.08,65.69,84.69,65.69Z"></path>
                     </svg>
                     <a href="https://discord.gg/ENB7RbxVZE" target="_blank" rel="noopener" aria-label="discord link">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap single_sub_icons_level_4__telegram_icon">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20">
                        <path d="m488.649875 44.6098697c6.442438-2.8224615 10.738405-4.6832009 12.887902-5.5822181 6.137252-2.5668769 7.41252-3.0127709 8.243723-3.0276516.182815-.0030813.591576.0424775.856354.2585203.223574.1824224.285088.428849.314524.6018054.029436.1729565.066092.5669556.036954.874815-.33258 3.5138587-1.771648 12.041067-2.503764 15.9766489-.309785 1.6652923-.919763 2.2236562-1.510292 2.2782995-1.283356.1187526-2.257879-.8528431-3.500872-1.6721675-1.945039-1.2820809-3.043862-2.0801802-4.931859-3.3312543-2.181908-1.4458326-.767468-2.2404874.475995-3.5391756.32542-.3398729 5.979917-5.5116482 6.08936-5.9808093.013687-.0586764.02639-.2773944-.102829-.3928855-.129218-.1154911-.319934-.0759976-.457559-.0445881-.195081.044522-3.302306 2.1096922-9.321675 6.1955107-.881976.6089971-1.680842.9057209-2.396598.8901714-.789064-.017142-2.306907-.4486274-3.435267-.8174505-1.38398-.4523766-2.48394-.6915513-2.388158-1.4598267.049889-.4001653.59791-.8094133 1.644061-1.227744z" fill-rule="evenodd" transform="translate(-487 -36)"></path>
                     </svg>
                     <a href="https://t.me/ShedovChannel" target="blank" rel="noopener" aria-label="link to telegram channel">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap single_sub_icons_level_4__x_icon">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" version="1.1" aria-label="X link">
                        <path style=" stroke:none;fill-rule:nonzero; fill-opacity:1;" d="M 11.90625 8.476562 L 19.351562 0 L 17.585938 0 L 11.117188 7.359375 L 5.957031 0 L 0 0 L 7.808594 11.128906 L 0 20.015625 L 1.765625 20.015625 L 8.589844 12.242188 L 14.042969 20.015625 L 20 20.015625 M 2.402344 1.300781 L 5.109375 1.300781 L 17.585938 18.777344 L 14.875 18.777344 "></path>
                     </svg>
                     <a href="https://x.com/AndrewShedov" target="_blank" rel="noopener" aria-label="link to X">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap sub_icon_single_vk">
                     <svg viewBox="-8 -7 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.52944 7.02944C0.5 14.0589 0.5 25.3726 0.5 48V52C0.5 74.6274 0.5 85.9411 7.52944 92.9706C14.5589 100 25.8726 100 48.5 100H52.5C75.1274 100 86.4411 100 93.4706 92.9706C100.5 85.9411 100.5 74.6274 100.5 52V48C100.5 25.3726 100.5 14.0589 93.4706 7.02944C86.4411 0 75.1274 0 52.5 0H48.5C25.8726 0 14.5589 0 7.52944 7.02944ZM17.3752 30.4169C17.9168 56.4169 30.9167 72.0418 53.7084 72.0418H55.0003V57.1668C63.3753 58.0001 69.7082 64.1252 72.2498 72.0418H84.0835C80.8335 60.2085 72.2914 53.6668 66.9581 51.1668C72.2914 48.0835 79.7915 40.5835 81.5831 30.4169H70.8328C68.4995 38.6669 61.5836 46.1668 55.0003 46.8751V30.4169H44.2499V59.2501C37.5833 57.5835 29.1668 49.5002 28.7918 30.4169H17.3752Z"></path>
                     </svg>
                     <a href="https://vk.com/shedovclub" target="_blank" rel="noopener" aria-label="link to VK">
                     </a>
                  </div>
               </div>
               <div class="single_sub_icons_level_1">
                  <div class="sub_icon_single_wrap sub_icon_single_vk_video">
                     <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="6 -2 10 28">
                        <g clip-path="url(#logo_vk_video_color_with_text_24h__a)" fill="none">
                           <g clip-path="url(#logo_vk_video_color_with_text_24h__b)" fill="none">
                              <path fill="var(--vk_video_fill_1)" d="M0 8.77C0 1.55 1.55 0 8.77 0h6.46C22.45 0 24 1.55 24 8.77v6.46c0 7.22-1.55 8.77-8.77 8.77H8.77C1.55 24 0 22.45 0 15.23V8.77Z"></path>
                              <path fill="var(--vk_video_fill_2)" d="M12.9 24h2.28c7.1 0 8.74-1.48 8.82-8.28V8.24C23.92 1.47 22.26 0 15.18 0H12.9C5.64 0 4.08 1.55 4.08 8.77v6.46c0 7.22 1.56 8.77 8.82 8.77Z"></path>
                              <path fill="var(--vk_video_fill_3)" d="M16.93 9.92c1.22.7 1.82 1.05 2.03 1.51.18.4.18.86 0 1.25-.2.46-.81.81-2.03 1.51l-3.32 1.92c-1.21.7-1.82 1.05-2.32 1a1.54 1.54 0 0 1-1.08-.63c-.3-.4-.3-1.1-.3-2.5v-3.84c0-1.4 0-2.1.3-2.5A1.54 1.54 0 0 1 11.29 7c.5-.06 1.1.3 2.32 1l3.32 1.91Z"></path>
                           </g>
                        </g>
                     </svg>
                     <a href="https://vkvideo.ru/@shedovclub" target="_blank" rel="noopener" aria-label="link to VK video">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap">
                     <svg viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                           <g transform="translate(-300.000000, -7442.000000)">
                              <g transform="translate(56.000000, 160.000000)">
                                 <path d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289">
                                 </path>
                              </g>
                           </g>
                        </g>
                     </svg>
                     <a href="https://www.youtube.com/@AndrewShedov" target="_blank" rel="noopener" aria-label="link to youtube">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap">
                     <svg viewBox="0 -3.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g  stroke="none" stroke-width="1"  fill-rule="evenodd">
                           <g  transform="translate(-100.000000, -7482.000000)" >
                              <g  transform="translate(56.000000, 160.000000)">
                                 <path d="M56.981,7324.11726 L62.069,7324.11726 L62.069,7322.65997 L56.981,7322.65997 L56.981,7324.11726 Z M59.489,7327.04322 C58.354,7327.04322 57.492,7327.74656 57.409,7329.04584 L61.481,7329.04584 C61.205,7327.50385 60.52,7327.04322 59.489,7327.04322 L59.489,7327.04322 Z M59.648,7333.06968 C60.696,7333.06968 61.465,7332.40764 61.622,7331.84992 L63.826,7331.84992 C63.196,7333.86701 61.895,7335 59.559,7335 C56.578,7335 54.905,7332.87964 54.905,7330.06626 C54.905,7323.44077 64.465,7323.20323 63.985,7330.68491 L57.409,7330.68491 C57.473,7332.20418 58.1,7333.06968 59.648,7333.06968 L59.648,7333.06968 Z M49.73,7332.77842 C50.933,7332.77842 51.775,7332.31572 51.775,7331.06705 C51.775,7329.77191 51.031,7329.21006 49.782,7329.21006 L46.768,7329.21006 L46.768,7332.77842 L49.73,7332.77842 Z M49.571,7327.26218 C50.572,7327.26218 51.263,7326.79638 51.263,7325.71399 C51.263,7324.57377 50.459,7324.22158 49.36,7324.22158 L46.768,7324.22158 L46.768,7327.26218 L49.571,7327.26218 L49.571,7327.26218 Z M49.924,7322 C52.295,7322 53.943,7322.7839 53.943,7325.22237 C53.943,7326.42973 53.458,7327.32931 52.233,7327.93557 C53.801,7328.40137 54.543,7329.62422 54.543,7331.23127 C54.543,7333.78232 52.52,7335 50.1,7335 L44,7335 L44,7322 L49.924,7322 Z"  >
                                 </path>
                              </g>
                           </g>
                        </g>
                     </svg>
                     <a href="https://www.behance.net/AndrewShedov" target="blank" rel="noopener" aria-label="behance link">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap">
                     <svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g  stroke="none" stroke-width="1"  fill-rule="evenodd">
                           <g transform="translate(-800.000000, -160.000000)" >
                              <path d="M847.982,176.419 C847.9775,176.3875 847.97,176.359 847.9655,176.329 C847.955,176.2705 847.9445,176.212 847.9295,176.1565 C847.9205,176.122 847.907,176.089 847.8965,176.056 C847.88,176.005 847.8635,175.9555 847.844,175.906 C847.8305,175.8715 847.814,175.837 847.7975,175.8055 C847.7765,175.7575 847.754,175.7125 847.727,175.669 C847.709,175.636 847.688,175.6045 847.6685,175.573 C847.6415,175.5295 847.613,175.4875 847.5815,175.447 C847.559,175.417 847.535,175.387 847.511,175.3585 C847.478,175.3195 847.4435,175.282 847.4075,175.246 C847.3805,175.219 847.355,175.1905 847.3265,175.1665 C847.2875,175.132 847.2485,175.099 847.2095,175.0675 C847.178,175.0435 847.148,175.0195 847.1165,174.997 C847.1045,174.9895 847.094,174.979 847.082,174.9715 L825.1445,160.3465 C824.4515,159.8845 823.55,159.8845 822.8555,160.3465 L800.9195,174.9715 C800.9075,174.979 800.897,174.9895 800.885,174.997 C800.852,175.0195 800.822,175.0435 800.792,175.0675 C800.7515,175.099 800.7125,175.132 800.675,175.1665 C800.6465,175.1905 800.6195,175.219 800.5925,175.246 C800.5565,175.282 800.522,175.3195 800.4905,175.3585 C800.465,175.387 800.441,175.417 800.4185,175.447 C800.3885,175.4875 800.36,175.5295 800.333,175.573 C800.312,175.6045 800.2925,175.636 800.273,175.669 C800.2475,175.7125 800.225,175.7575 800.2025,175.8055 C800.1875,175.837 800.171,175.8715 800.1575,175.906 C800.1365,175.9555 800.12,176.005 800.1035,176.056 C800.093,176.089 800.081,176.122 800.072,176.1565 C800.057,176.212 800.0465,176.2705 800.036,176.329 C800.03,176.359 800.0225,176.3875 800.0195,176.419 C800.0075,176.506 800,176.596 800,176.6875 L800,191.3125 C800,191.4025 800.0075,191.4925 800.0195,191.5825 C800.0225,191.611 800.03,191.641 800.036,191.671 C800.0465,191.7295 800.057,191.7865 800.072,191.8435 C800.081,191.878 800.093,191.911 800.1035,191.944 C800.12,191.9935 800.1365,192.0445 800.1575,192.0955 C800.171,192.1285 800.1875,192.1615 800.2025,192.1945 C800.225,192.241 800.2475,192.286 800.273,192.3325 C800.2925,192.364 800.312,192.3955 800.333,192.427 C800.36,192.4705 800.3885,192.511 800.4185,192.5515 C800.441,192.583 800.465,192.613 800.4905,192.6415 C800.522,192.679 800.5565,192.718 800.5925,192.7525 C800.6195,192.781 800.6465,192.808 800.675,192.8335 C800.7125,192.868 800.7515,192.901 800.792,192.9325 C800.822,192.9565 800.852,192.9805 800.885,193.003 C800.897,193.0105 800.9075,193.021 800.9195,193.0285 L822.8555,207.6535 C823.202,207.8845 823.601,208 824,208 C824.399,208 824.798,207.8845 825.1445,207.6535 L847.082,193.0285 C847.094,193.021 847.1045,193.0105 847.1165,193.003 C847.148,192.9805 847.178,192.9565 847.2095,192.9325 C847.2485,192.901 847.2875,192.868 847.3265,192.8335 C847.355,192.808 847.3805,192.781 847.4075,192.7525 C847.4435,192.718 847.478,192.679 847.511,192.6415 C847.535,192.613 847.559,192.583 847.5815,192.5515 C847.613,192.511 847.6415,192.4705 847.6685,192.427 C847.688,192.3955 847.709,192.364 847.727,192.3325 C847.754,192.286 847.7765,192.241 847.7975,192.1945 C847.814,192.1615 847.8305,192.1285 847.844,192.0955 C847.8635,192.0445 847.88,191.9935 847.8965,191.944 C847.907,191.911 847.9205,191.878 847.9295,191.8435 C847.9445,191.7865 847.955,191.7295 847.9655,191.671 C847.97,191.641 847.9775,191.611 847.982,191.5825 C847.994,191.4925 848,191.4025 848,191.3125 L848,176.6875 C848,176.596 847.994,176.506 847.982,176.419 L847.982,176.419 L847.982,176.419 Z M826.0625,165.9175 L842.2235,176.6905 L835.0055,181.519 L826.0625,175.537 L826.0625,165.9175 L826.0625,165.9175 Z M821.9375,165.9175 L821.9375,175.537 L812.996,181.519 L805.7765,176.6905 L821.9375,165.9175 L821.9375,165.9175 Z M804.125,180.5485 L809.2865,184 L804.125,187.4515 L804.125,180.5485 L804.125,180.5485 Z M821.9375,202.0825 L805.7765,191.3095 L812.996,186.4825 L821.9375,192.463 L821.9375,202.0825 L821.9375,202.0825 Z M824,188.8795 L816.7055,184 L824,179.1205 L831.296,184 L824,188.8795 L824,188.8795 Z M826.0625,202.0825 L826.0625,192.463 L835.0055,186.4825 L842.2235,191.3095 L826.0625,202.0825 L826.0625,202.0825 Z M843.875,187.4515 L838.715,184 L843.875,180.5485 L843.875,187.4515 L843.875,187.4515 Z">
                              </path>
                           </g>
                        </g>
                     </svg>
                     <a href="https://codepen.io/AndrewShedov" target="blank" rel="noopener" aria-label="codepen link">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap">
                     <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1"   data-view-component="true" class="octicon octicon-mark-github v-align-middle color-fg-default">
                        <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
                     </svg>
                     <a href="https://github.com/AndrewShedov" target="blank" rel="noopener" aria-label="github link">
                     </a>
                  </div>
               </div>
               <div class="single_sub_icons_level_2">
                  <div class="sub_icon_single_wrap">
                     <svg viewBox="-10 -10 185 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M108.99 0C75.5725 0 48.9902 26.962 48.9902 60C48.9902 93.4177 75.9523 120 108.99 120C142.028 120 168.99 93.038 168.99 60C168.99 26.962 142.028 0 108.99 0ZM108.99 82.4051C96.8383 82.4051 86.5852 72.1519 86.5852 60C86.5852 47.8481 96.8383 37.5949 108.99 37.5949C121.142 37.5949 131.395 47.8481 131.395 60C131.016 72.1519 121.142 82.4051 108.99 82.4051Z" fill="#8B3FFD"/>
                        <path d="M48.6076 17.4684V104.81H27.3418L0 17.4684H48.6076V17.4684Z" fill="#8B3FFD"/>
                     </svg>
                     <a href="https://yoomoney.ru/to/410011226872318" target="blank" rel="noopener" aria-label="yoomoney link">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="10 35 225 200" style="enable-background:new 0 0 235.6 292.2;" xml:space="preserve">
                        <style type="text/css">
                           .st0{fill:url(#SVGID_1_);}
                        </style>
                        <g id="b_1_">
                           <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="145.0777" y1="76.148" x2="80.5868" y2="296.0785">
                              <stop  offset="0" style="stop-color:#EF7829"/>
                              <stop  offset="5.189538e-02" style="stop-color:#F07529"/>
                              <stop  offset="0.3551" style="stop-color:#F0672B"/>
                              <stop  offset="0.6673" style="stop-color:#F15E2C"/>
                              <stop  offset="1" style="stop-color:#F15A2C"/>
                           </linearGradient>
                           <path class="st0" d="M44.3,164.5L76.9,51.6H127l-10.1,35c-0.1,0.2-0.2,0.4-0.3,0.6L90,179.6h24.8c-10.4,25.9-18.5,46.2-24.3,60.9
                              c-45.8-0.5-58.6-33.3-47.4-72.1 M90.7,240.6l60.4-86.9h-25.6l22.3-55.7c38.2,4,56.2,34.1,45.6,70.5
                              c-11.3,39.1-57.1,72.1-101.7,72.1C91.3,240.6,91,240.6,90.7,240.6z"/>
                        </g>
                     </svg>
                     <a href="https://boosty.to/andrewshedov" target="blank" rel="noopener" aria-label="boosty link">
                     </a>
                  </div>
                  <div class="sub_icon_single_wrap">
                     <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="65 40 155 150">
                        <g  fill="#ffdd2d">
                           <path   d="M79.3049121,57.2299076h132.0677372v66.420442c0,17.0272827-9.0835686,32.7616053-23.8287876,41.2761377l-42.2050492,24.370994-42.2049901-24.370994c-14.7455213-8.5145323-23.8289103-24.248855-23.8289103-41.2761377V57.2299076Z"/>
                        </g>
                        <g  fill="#333">
                           <path  d="M115.5501923,92.1886278v20.6581661c2.8249235-3.1900015,7.9611095-5.3489945,13.8336896-5.3489945h6.3818461v24.0148983c0,6.3890768-1.7359279,11.981362-4.311606,15.0573742h27.7596765c-2.5702905-3.0791312-4.3022487-8.6643276-4.3022487-15.0451813v-24.0270912h6.3821297c5.8725801,0,11.0086243,2.158993,13.8336896,5.3489945v-20.6581661h-59.5771767Z"/>
                        </g>
                     </svg>
                     <a href="https://www.tbank.ru/rm/shedov.andrey2/lGla256001/" target="blank" rel="noopener" aria-label="T-Bank link">
                     </a>
                  </div>
               </div>
               <div class="single_sub_icons_level_3">
                  <p>BTC (Network BTC) - 1C2EWWeEXVhg93hJA9KovpkSd3Rn3BkcYm</p>
                  <p>Ethereum (Network ERC20) - 0x05037ecbd8bcd15631d780c95c3799861182e6b8</p>
               </div>
            </div>
         </div>
         <div class="single_date_number_comments_category_wrap">
            <div class="single_date_number_comments_category">
               <div class="single_date__number_comments_wrap">
               </div>
               <div class="single_number_comments_wrap" id="single_number_comments_wrap">
                  <div class="single_number_comments">
                     <a href="<?php the_permalink(  ) ?>#comments"><?php comments_number( ) ?></a>
                  </div>
               </div>
            </div>
            <?php 
               if ( $categories = get_the_category()) : ?>
            <section class="categories__under_post_wrap">
               <div class="categories__under_post">
                  <div class="categories__under_post_title">
                     <h3>Post categories</h3>
                  </div>
                  <ul class="categories__under_post_list">
                     <?php foreach($categories as $cat) : ?>
                     <li>
                        <a href="<?php echo get_category_link( $cat )?>">
                        <?php echo $cat ->name;?>
                        </a>
                     </li>
                     <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
               </div>
            </section>
         </div>
      </div>
      <?php
         $args = array(
         'posts_per_page' => 4,
         'ignore_sticky_posts' => true,
         'category__in' => $category_ids,
         );
         $query = new WP_Query ( $args);
         if ($query->have_posts()) :
         ?>
   </article>
</div>
<div id="similar_posts_wrap_1">
   <section class="similar_posts_wrap">
      <div class="similar_posts_title">
         <h3>Similar posts</h3>
      </div>
      <div class="similar_posts">
         <?php
            $categories = get_the_category($post->ID);
            if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts'=>5,
            'orderby'=>rand(),
            'caller_get_posts'=>1);
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) 
            while ($my_query->have_posts()) {
            $my_query->the_post();
            ?>
         <article class="similar_post">
            <a href="<?php the_permalink() ?>">
               <div class="similar_post_image">
                  <?php
                     no_image()
                     ?>
               </div>
               <div class="similar_post_title">
                  <h3>
                     <?php echo mb_strimwidth(get_the_title(), 0, 40,'...'); ?>
                  </h3>
               </div>
            </a>
         </article>
         <?php
            }
            wp_reset_query();
            wp_reset_postdata(); 
            }
            ?>
      </div>
   </section>
</div>
<?php endif;
   wp_reset_postdata( );
   ?>
<section class="popular_posts_wrap_single_page">
   <?php
      get_template_part( 'parts/sorting_posts_by_popularity' );
           ?>
</section>
<?php
   get_template_part( 'parts/all_categories' );
   ?>
<?php if (comments_open()) { ?>
<?php comments_template(); ?>
<?php } ?>
<?php get_footer() ?>