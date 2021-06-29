<?
	// https://api.telegram.org/bot524362793:AAF7Jp62n59VhWoTPL4_j7ghsmJ1ufxT238/getUpdates

	include '../ap/bd.php';
	//include '../modules/map_contacts.php';

	$cityId = htmlspecialchars($_POST['cityId']);
	$cityId = preg_replace("/[^0-9]/", '', $cityId);

	if(!intval($cityId)) {
		$cityId = $_GLOBALS['city'];
	}

?>
<h6>Центральный офис и склад</h6>
<p>г. <?php echo settings_id($cityId)[0]['city_name']; ?>, <?php echo settings_id($cityId)[0]['address']; ?></p>

<div class="map__contact">
    <a class=" link--black" href="tel:<?php echo phone(settings_id($cityId)[0]['phone']); ?>"> 
        <svg class="header-contact__icon" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)" fill="#2F3540"><path d="M14.225 11.15c-.368-.383-.813-.588-1.284-.588-.467 0-.915.2-1.3.585l-1.2 1.196c-.098-.053-.197-.102-.292-.152-.137-.068-.266-.133-.376-.201-1.125-.714-2.147-1.645-3.127-2.85-.475-.6-.794-1.105-1.026-1.618.312-.285.6-.581.882-.866l.319-.323c.798-.798.798-1.83 0-2.629L5.784 2.667c-.118-.118-.24-.24-.353-.36a17.933 17.933 0 00-.715-.707c-.368-.365-.809-.559-1.272-.559-.464 0-.912.194-1.292.559l-.008.007L.853 2.91a2.78 2.78 0 00-.825 1.767c-.09 1.11.236 2.142.487 2.819.615 1.66 1.534 3.198 2.906 4.847a17.877 17.877 0 005.953 4.662c.874.414 2.04.904 3.343.987.08.004.163.008.24.008.877 0 1.614-.315 2.191-.942.004-.008.012-.012.016-.02.197-.239.425-.455.665-.687.163-.155.33-.319.493-.49.376-.391.574-.847.574-1.314 0-.471-.201-.924-.585-1.303l-2.086-2.094zm1.36 4c-.004 0-.004.005 0 0-.148.16-.3.305-.463.464-.247.236-.498.483-.733.76-.384.41-.836.604-1.429.604-.057 0-.118 0-.175-.004-1.128-.072-2.176-.513-2.963-.889a16.875 16.875 0 01-5.607-4.391C2.919 10.132 2.053 8.689 1.48 7.139c-.354-.946-.483-1.683-.426-2.379.038-.444.209-.813.524-1.128l1.296-1.295c.186-.175.383-.27.577-.27.24 0 .433.144.555.266l.011.011c.232.217.452.44.684.68.118.122.24.243.361.369L6.099 4.43c.403.403.403.775 0 1.178-.11.11-.216.22-.327.326-.319.327-.623.63-.953.927-.008.008-.015.012-.02.02-.326.326-.265.645-.197.862l.012.034c.27.653.65 1.269 1.227 2.002l.004.004c1.048 1.291 2.154 2.298 3.373 3.07.156.098.315.178.467.254.137.068.266.133.377.201.015.008.03.02.045.027.13.064.25.095.376.095.316 0 .513-.198.578-.262l1.299-1.3c.13-.129.334-.285.574-.285.235 0 .429.149.547.278l.007.007 2.094 2.094c.39.387.39.786.003 1.189zM9.727 4.282c.995.167 1.9.638 2.621 1.36a4.842 4.842 0 011.36 2.621.51.51 0 00.505.426c.03 0 .058-.004.088-.008a.513.513 0 00.421-.593 5.86 5.86 0 00-1.644-3.172 5.86 5.86 0 00-3.173-1.645.516.516 0 00-.592.418.507.507 0 00.414.593zM17.98 7.94a9.64 9.64 0 00-2.71-5.223 9.64 9.64 0 00-5.223-2.71.511.511 0 10-.167 1.011c1.77.3 3.385 1.14 4.669 2.42a8.606 8.606 0 012.42 4.67.51.51 0 00.505.425c.03 0 .057-.004.087-.008a.503.503 0 00.418-.585z"></path></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h18v18H0z"></path></clipPath></defs></svg>
    <?php echo phone(settings_id($cityId)[0]['phone']); ?></a>
    <a class="header-contact_email link--blue" href="mailto:<?php echo settings_id($cityId)[0]['email2']; ?>"><?php echo settings_id($cityId)[0]['email2']; ?></a>
</div>

<div class="map__contact">
    <a class=" link--black" href="tel:<?php echo phone(settings_id($cityId)[0]['phone2']); ?>"> 
        <svg class="header-contact__icon" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)" fill="#2F3540"><path d="M14.225 11.15c-.368-.383-.813-.588-1.284-.588-.467 0-.915.2-1.3.585l-1.2 1.196c-.098-.053-.197-.102-.292-.152-.137-.068-.266-.133-.376-.201-1.125-.714-2.147-1.645-3.127-2.85-.475-.6-.794-1.105-1.026-1.618.312-.285.6-.581.882-.866l.319-.323c.798-.798.798-1.83 0-2.629L5.784 2.667c-.118-.118-.24-.24-.353-.36a17.933 17.933 0 00-.715-.707c-.368-.365-.809-.559-1.272-.559-.464 0-.912.194-1.292.559l-.008.007L.853 2.91a2.78 2.78 0 00-.825 1.767c-.09 1.11.236 2.142.487 2.819.615 1.66 1.534 3.198 2.906 4.847a17.877 17.877 0 005.953 4.662c.874.414 2.04.904 3.343.987.08.004.163.008.24.008.877 0 1.614-.315 2.191-.942.004-.008.012-.012.016-.02.197-.239.425-.455.665-.687.163-.155.33-.319.493-.49.376-.391.574-.847.574-1.314 0-.471-.201-.924-.585-1.303l-2.086-2.094zm1.36 4c-.004 0-.004.005 0 0-.148.16-.3.305-.463.464-.247.236-.498.483-.733.76-.384.41-.836.604-1.429.604-.057 0-.118 0-.175-.004-1.128-.072-2.176-.513-2.963-.889a16.875 16.875 0 01-5.607-4.391C2.919 10.132 2.053 8.689 1.48 7.139c-.354-.946-.483-1.683-.426-2.379.038-.444.209-.813.524-1.128l1.296-1.295c.186-.175.383-.27.577-.27.24 0 .433.144.555.266l.011.011c.232.217.452.44.684.68.118.122.24.243.361.369L6.099 4.43c.403.403.403.775 0 1.178-.11.11-.216.22-.327.326-.319.327-.623.63-.953.927-.008.008-.015.012-.02.02-.326.326-.265.645-.197.862l.012.034c.27.653.65 1.269 1.227 2.002l.004.004c1.048 1.291 2.154 2.298 3.373 3.07.156.098.315.178.467.254.137.068.266.133.377.201.015.008.03.02.045.027.13.064.25.095.376.095.316 0 .513-.198.578-.262l1.299-1.3c.13-.129.334-.285.574-.285.235 0 .429.149.547.278l.007.007 2.094 2.094c.39.387.39.786.003 1.189zM9.727 4.282c.995.167 1.9.638 2.621 1.36a4.842 4.842 0 011.36 2.621.51.51 0 00.505.426c.03 0 .058-.004.088-.008a.513.513 0 00.421-.593 5.86 5.86 0 00-1.644-3.172 5.86 5.86 0 00-3.173-1.645.516.516 0 00-.592.418.507.507 0 00.414.593zM17.98 7.94a9.64 9.64 0 00-2.71-5.223 9.64 9.64 0 00-5.223-2.71.511.511 0 10-.167 1.011c1.77.3 3.385 1.14 4.669 2.42a8.606 8.606 0 012.42 4.67.51.51 0 00.505.425c.03 0 .057-.004.087-.008a.503.503 0 00.418-.585z"></path></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h18v18H0z"></path></clipPath></defs></svg>
    <?php echo phone(settings_id($cityId)[0]['phone2']); ?></a>
    <a class="header-contact_email link--blue" href="mailto:<?php echo settings_id($cityId)[0]['email']; ?>"><?php echo settings_id($cityId)[0]['email']; ?></a>
</div>

<div class="map__contact">
    <a class=" link--black" href="#"> 
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 0C5.27737 0 2.25 3.02737 2.25 6.75C2.25 11.4289 8.343 17.5759 8.60175 17.8358C8.712 17.9449 8.856 18 9 18C9.144 18 9.288 17.9449 9.39825 17.8358C9.657 17.5759 15.75 11.4289 15.75 6.75C15.75 3.02737 12.7226 0 9 0ZM9 16.6241C7.65675 15.1864 3.375 10.3241 3.375 6.75C3.375 3.64838 5.89838 1.125 9 1.125C12.1016 1.125 14.625 3.64838 14.625 6.75C14.625 10.3208 10.3433 15.1864 9 16.6241Z" fill="#2F3540"/>
    <path d="M9 3.375C7.13925 3.375 5.625 4.88925 5.625 6.75C5.625 8.61075 7.13925 10.125 9 10.125C10.8608 10.125 12.375 8.61075 12.375 6.75C12.375 4.88925 10.8608 3.375 9 3.375ZM9 9C7.75912 9 6.75 7.99088 6.75 6.75C6.75 5.50912 7.75912 4.5 9 4.5C10.2409 4.5 11.25 5.50912 11.25 6.75C11.25 7.99088 10.2409 9 9 9Z" fill="#2F3540"/>
    </svg>
    г. <?php echo settings_id($cityId)[0]['city_name']; ?></a>
    <a class="header-contact_email link--blue" href="#"><?php echo settings_id($cityId)[0]['address']; ?></a>
</div>

<ul class="map__socials">
    <li>
        <a href="<?php echo settings_id($city_products)[0]['soc_1']; ?>">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 548.358 548.358" xml:space="preserve">
                                        <g>
                                            <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571
                                                l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13
                                                c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939
                                                l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568
                                                c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859
                                                c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238
                                                c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849
                                                c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995
                                                c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706
                                                c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125
                                                c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137
                                                c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71
                                                c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851
                                                c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837
                                                c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418
                                                c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431
                                                c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558
                                                c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267
                                                c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427
                                                c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711
                                                C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659
                                                c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981
                                                c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416
                                                c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834
                                                c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851
                                                c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418
                                                c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429
                                                c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274
                                                l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14
                                                c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712
                                                C546.782,404.25,546.115,401.725,545.451,400.298z" fill="#4C75A3"></path>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
        </a>
    </li>
    <li>
        <a href="<?php echo settings_id($city_products)[0]['soc_2']; ?>">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.50212 0H8.49788C3.81119 0 0 3.81225 0 8.5C0 10.3594 0.59925 12.0828 1.61819 13.4821L0.558875 16.6398L3.82606 15.5954C5.17013 16.4858 6.77344 17 8.50212 17C13.1888 17 17 13.1867 17 8.5C17 3.81331 13.1888 0 8.50212 0ZM13.4481 12.0031C13.243 12.5821 12.4291 13.0624 11.7799 13.2026C11.3358 13.2972 10.7557 13.3726 8.80281 12.563C6.30487 11.5281 4.69625 8.98981 4.57088 8.82512C4.45081 8.66044 3.5615 7.48106 3.5615 6.26131C3.5615 5.04156 4.18094 4.44763 4.43062 4.19263C4.63569 3.98331 4.97463 3.88769 5.29975 3.88769C5.40494 3.88769 5.4995 3.893 5.5845 3.89725C5.83419 3.90788 5.95956 3.92275 6.12425 4.31694C6.32931 4.811 6.82869 6.03075 6.88819 6.15613C6.94875 6.2815 7.00931 6.4515 6.92431 6.61619C6.84462 6.78619 6.7745 6.86162 6.64913 7.00612C6.52375 7.15062 6.40475 7.26113 6.27938 7.41625C6.16462 7.55119 6.035 7.69569 6.1795 7.94537C6.324 8.18975 6.82337 9.00469 7.55862 9.65919C8.50744 10.5039 9.27669 10.7738 9.55188 10.8885C9.75694 10.9735 10.0013 10.9533 10.1511 10.7939C10.3413 10.5889 10.5761 10.2489 10.8152 9.91419C10.9852 9.67406 11.1998 9.64431 11.4251 9.72931C11.6546 9.809 12.869 10.4093 13.1187 10.5336C13.3684 10.659 13.5331 10.7185 13.5936 10.8237C13.6531 10.9289 13.6531 11.4229 13.4481 12.0031Z" fill="#25D366"/>
            </svg>
        </a>
    </li>
    <li>
        <a href="<?php echo settings_id($city_products)[0]['soc_3']; ?>">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.5098 0H2.49023C1.11723 0 0 1.11723 0 2.49023V14.5098C0 15.8828 1.11723 17 2.49023 17H14.5098C15.8828 17 17 15.8828 17 14.5098V2.49023C17 1.11723 15.8828 0 14.5098 0ZM8.5332 12.9492C6.06152 12.9492 4.05078 10.9385 4.05078 8.4668C4.05078 5.99511 6.06152 3.98438 8.5332 3.98438C11.0049 3.98438 13.0156 5.99511 13.0156 8.4668C13.0156 10.9385 11.0049 12.9492 8.5332 12.9492ZM13.5137 4.98047C12.6898 4.98047 12.0195 4.31018 12.0195 3.48633C12.0195 2.66248 12.6898 1.99219 13.5137 1.99219C14.3375 1.99219 15.0078 2.66248 15.0078 3.48633C15.0078 4.31018 14.3375 4.98047 13.5137 4.98047Z" fill="#E4405F"/>
            <path d="M13.5137 2.98828C13.2388 2.98828 13.0156 3.21149 13.0156 3.48633C13.0156 3.76116 13.2388 3.98438 13.5137 3.98438C13.7885 3.98438 14.0117 3.76116 14.0117 3.48633C14.0117 3.21149 13.7885 2.98828 13.5137 2.98828Z" fill="#E4405F"/>
            <path d="M8.5332 4.98047C6.61105 4.98047 5.04688 6.54465 5.04688 8.4668C5.04688 10.3889 6.61105 11.9531 8.5332 11.9531C10.4554 11.9531 12.0195 10.3889 12.0195 8.4668C12.0195 6.54465 10.4554 4.98047 8.5332 4.98047Z" fill="#E4405F"/>
            </svg>
        </a>
    </li>
    <li>
        <a href="<?php echo settings_id($city_products)[0]['soc_4']; ?>">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.6386 3.06995H4.36143C1.95268 3.06995 0 5.02262 0 7.43138V13.5686C0 15.9774 1.95268 17.9301 4.36143 17.9301H16.6386C19.0473 17.9301 21 15.9774 21 13.5686V7.43138C21 5.02262 19.0473 3.06995 16.6386 3.06995ZM13.689 10.7986L7.94655 13.5374C7.79353 13.6104 7.61679 13.4988 7.61679 13.3293V7.68055C7.61679 7.50864 7.79818 7.39721 7.95151 7.47493L13.6939 10.3849C13.8647 10.4714 13.8617 10.7163 13.689 10.7986Z" fill="#CD201F"/>
            </svg>
        </a>
    </li>
</ul>
