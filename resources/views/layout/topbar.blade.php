<div id="top-nav">
            <div class="search-container">
                <input type="text" id="search-bar" class="hide-placeholder"  placeholder="Wecome Ali ! how can I help you with today?" />
                <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z"
                        stroke="#0FAFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>


            <div class="user-controls">
                <div class="user-info">
                    <img src="https://picsum.photos/id/1015/50/50" alt="User Image" />
                    <p>{{ $user->username }}</p>

                   
                </div>
                <div class="bell-icon">
                    <svg  width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_30789_32293)">
                            <path
                                d="M16 17V18C16 19.6569 14.6569 21 13 21C11.3431 21 10 19.6569 10 18V17M16 17H10M16 17H19.5905C19.973 17 20.1652 17 20.3201 16.9478C20.616 16.848 20.8475 16.6156 20.9473 16.3198C20.9997 16.1643 20.9997 15.9715 20.9997 15.5859C20.9997 15.4172 20.9995 15.3329 20.9863 15.2524C20.9614 15.1004 20.9024 14.9563 20.8126 14.8312C20.7651 14.7651 20.7048 14.7048 20.5858 14.5858L20.1963 14.1963C20.0706 14.0706 20 13.9001 20 13.7224V10C20 6.134 16.866 2.99999 13 3C9.13401 3.00001 6 6.13401 6 10V13.7224C6 13.9002 5.92924 14.0706 5.80357 14.1963L5.41406 14.5858C5.29476 14.7051 5.23504 14.765 5.1875 14.8312C5.09766 14.9564 5.03815 15.1004 5.0132 15.2524C5 15.3329 5 15.4172 5 15.586C5 15.9715 5 16.1642 5.05245 16.3197C5.15225 16.6156 5.3848 16.848 5.68066 16.9478C5.83556 17 6.02701 17 6.40956 17H10"
                                stroke="#FFFF00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <filter id="filter0_d_30789_32293" x="-3" y="0" width="32" height="32"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_30789_32293" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_30789_32293"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>


                </div>
                <button id="dark-light-toggle">
                    <img class="moon-icon" src="icons/moon-regular.svg" alt="Moon" />
                    <img class="sun-icon" src="icons/sun-solid.svg" alt="Sun" />
                </button>
            </div>

        </div>