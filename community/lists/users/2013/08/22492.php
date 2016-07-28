<?
$subject_val = "[OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 14:44:34 2013" -->
<!-- isoreceived="20130814184434" -->
<!-- sent="Wed, 14 Aug 2013 14:48:30 -0400" -->
<!-- isosent="20130814184830" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35" -->
<!-- id="520BD0FE.4030807_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 14:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Previous message:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Reply:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;When I try to run my configure script, it dies with the following.  
<br>
Below it are the actual libraries in the directory. Could the solution 
<br>
be as simple as adding &quot;rt&quot; somewhere in the configure script?  Thanks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>checking if --with-cuda-libdir is set... not found
<br>
configure: WARNING: Expected file 
<br>
/opt/nvidia/cudatoolkit/5.0.35/lib64/libcuda.* not found
<br>
configure: error: Cannot continue
<br>
rsheppar_at_login1:/N/dc/projects/ray/br2/openmpi-1.7.2&gt; ls -l 
<br>
/opt/nvidia/cudatoolkit/5.0.35/lib64/
<br>
total 356284
<br>
lrwxrwxrwx 1 root root        16 Mar 18 14:35 libcublas.so -&gt; 
<br>
libcublas.so.5.0
<br>
lrwxrwxrwx 1 root root        19 Mar 18 14:35 libcublas.so.5.0 -&gt; 
<br>
libcublas.so.5.0.35
<br>
-rwxr-xr-x 1 root root  58852880 Sep 26  2012 libcublas.so.5.0.35
<br>
-rw-r--r-- 1 root root  21255400 Sep 26  2012 libcublas_device.a
<br>
-rw-r--r-- 1 root root    456070 Sep 26  2012 libcudadevrt.a
<br>
lrwxrwxrwx 1 root root        16 Mar 18 14:35 libcudart.so -&gt; 
<br>
libcudart.so.5.0
<br>
lrwxrwxrwx 1 root root        19 Mar 18 14:35 libcudart.so.5.0 -&gt; 
<br>
libcudart.so.5.0.35
<br>
-rwxr-xr-x 1 root root    375752 Sep 26  2012 libcudart.so.5.0.35
<br>
lrwxrwxrwx 1 root root        15 Mar 18 14:35 libcufft.so -&gt; libcufft.so.5.0
<br>
lrwxrwxrwx 1 root root        18 Mar 18 14:35 libcufft.so.5.0 -&gt; 
<br>
libcufft.so.5.0.35
<br>
-rwxr-xr-x 1 root root  30787712 Sep 26  2012 libcufft.so.5.0.35
<br>
lrwxrwxrwx 1 root root        17 Mar 18 14:35 libcuinj64.so -&gt; 
<br>
libcuinj64.so.5.0
<br>
lrwxrwxrwx 1 root root        20 Mar 18 14:35 libcuinj64.so.5.0 -&gt; 
<br>
libcuinj64.so.5.0.35
<br>
-rwxr-xr-x 1 root root   1306496 Sep 26  2012 libcuinj64.so.5.0.35
<br>
lrwxrwxrwx 1 root root        16 Mar 18 14:35 libcurand.so -&gt; 
<br>
libcurand.so.5.0
<br>
lrwxrwxrwx 1 root root        19 Mar 18 14:35 libcurand.so.5.0 -&gt; 
<br>
libcurand.so.5.0.35
<br>
-rwxr-xr-x 1 root root  25281224 Sep 26  2012 libcurand.so.5.0.35
<br>
lrwxrwxrwx 1 root root        18 Mar 18 14:35 libcusparse.so -&gt; 
<br>
libcusparse.so.5.0
<br>
lrwxrwxrwx 1 root root        21 Mar 18 14:35 libcusparse.so.5.0 -&gt; 
<br>
libcusparse.so.5.0.35
<br>
-rwxr-xr-x 1 root root 132455240 Sep 26  2012 libcusparse.so.5.0.35
<br>
lrwxrwxrwx 1 root root        13 Mar 18 14:35 libnpp.so -&gt; libnpp.so.5.0
<br>
lrwxrwxrwx 1 root root        16 Mar 18 14:35 libnpp.so.5.0 -&gt; 
<br>
libnpp.so.5.0.35
<br>
-rwxr-xr-x 1 root root  93602912 Sep 26  2012 libnpp.so.5.0.35
<br>
lrwxrwxrwx 1 root root        20 Mar 18 14:35 libnvToolsExt.so -&gt; 
<br>
libnvToolsExt.so.5.0
<br>
lrwxrwxrwx 1 root root        23 Mar 18 14:35 libnvToolsExt.so.5.0 -&gt; 
<br>
libnvToolsExt.so.5.0.35
<br>
-rwxr-xr-x 1 root root     31280 Sep 26  2012 libnvToolsExt.so.5.0.35
<br>
<p><p><p><pre>
-- 
                          Respectfully,
                            Ray Sheppard
                            RSheppar_at_[hidden]
                            <a href="http://pti.iu.edu/sciapt">http://pti.iu.edu/sciapt</a>
                            317-274-0016
                    Principal Analyst
                    Senior Technical Lead
                    Scientific Applications and Performance Tuning
                    Research Technologies
                    University Information Technological Services
                    IUPUI campus
                    Indiana University
    My &quot;pithy&quot; saying:  Science is the art of translating the world
        into language. Unfortunately, that language is mathematics.
    Bumper sticker wisdom: Make it idiot-proof and they will make a
        better idiot.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Previous message:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Reply:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
