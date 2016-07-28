<?
$subject_val = "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 14:55:05 2013" -->
<!-- isoreceived="20130814185505" -->
<!-- sent="Wed, 14 Aug 2013 14:59:01 -0400" -->
<!-- isosent="20130814185901" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35" -->
<!-- id="520BD375.6050207_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36005A9A32A_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 14:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Previous message:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>In reply to:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Reply:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the quick reply Rolf,
<br>
&nbsp;&nbsp;&nbsp;I personally don't know the Cuda libraries. I was hoping there had 
<br>
been a name change.  I am on a Cray XT-7.
<br>
Here is my configure command:
<br>
<p>./configure CC=gcc FC=gfortran CFLAGS=&quot;-O2&quot; F77=gfortran FCFLAGS=&quot;-O2&quot; 
<br>
--enable-static --disable-shared  --disable-vt --with-threads=posix 
<br>
--with-gnu-ld --with-alps --with-cuda=/opt/nvidia/cudatoolkit/5.0.35 
<br>
--with-cuda-libdir=/opt/nvidia/cudatoolkit/5.0.35/lib64 
<br>
--prefix=/N/soft/cle4/openmpi/gnu/1.7.2/cuda
<br>
<p>Ray
<br>
<p>On 8/14/2013 2:50 PM, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; It is looking for the libcuda.so file, not the libcudart.so file.   So, maybe --with-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt; You need to be on a machine with the CUDA driver installed.  What was your configure command?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-cuda">http://www.open-mpi.org/faq/?category=building#build-cuda</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ray
</span><br>
<span class="quotelev2">&gt;&gt; Sheppard
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, August 14, 2013 2:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;    When I try to run my configure script, it dies with the following.
</span><br>
<span class="quotelev2">&gt;&gt; Below it are the actual libraries in the directory. Could the solution be as
</span><br>
<span class="quotelev2">&gt;&gt; simple as adding &quot;rt&quot; somewhere in the configure script?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;                                           Ray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking if --with-cuda-libdir is set... not found
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Expected file
</span><br>
<span class="quotelev2">&gt;&gt; /opt/nvidia/cudatoolkit/5.0.35/lib64/libcuda.* not found
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt; rsheppar_at_login1:/N/dc/projects/ray/br2/openmpi-1.7.2&gt; ls -l
</span><br>
<span class="quotelev2">&gt;&gt; /opt/nvidia/cudatoolkit/5.0.35/lib64/
</span><br>
<span class="quotelev2">&gt;&gt; total 356284
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        16 Mar 18 14:35 libcublas.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcublas.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        19 Mar 18 14:35 libcublas.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcublas.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  58852880 Sep 26  2012 libcublas.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r-- 1 root root  21255400 Sep 26  2012 libcublas_device.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r-- 1 root root    456070 Sep 26  2012 libcudadevrt.a
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        16 Mar 18 14:35 libcudart.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcudart.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        19 Mar 18 14:35 libcudart.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcudart.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root    375752 Sep 26  2012 libcudart.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        15 Mar 18 14:35 libcufft.so -&gt; libcufft.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        18 Mar 18 14:35 libcufft.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcufft.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  30787712 Sep 26  2012 libcufft.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        17 Mar 18 14:35 libcuinj64.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcuinj64.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        20 Mar 18 14:35 libcuinj64.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcuinj64.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root   1306496 Sep 26  2012 libcuinj64.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        16 Mar 18 14:35 libcurand.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcurand.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        19 Mar 18 14:35 libcurand.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcurand.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  25281224 Sep 26  2012 libcurand.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        18 Mar 18 14:35 libcusparse.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcusparse.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        21 Mar 18 14:35 libcusparse.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libcusparse.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root 132455240 Sep 26  2012 libcusparse.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        13 Mar 18 14:35 libnpp.so -&gt; libnpp.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        16 Mar 18 14:35 libnpp.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libnpp.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root  93602912 Sep 26  2012 libnpp.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        20 Mar 18 14:35 libnvToolsExt.so -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libnvToolsExt.so.5.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root        23 Mar 18 14:35 libnvToolsExt.so.5.0 -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libnvToolsExt.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 root root     31280 Sep 26  2012 libnvToolsExt.so.5.0.35
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;                           Respectfully,
</span><br>
<span class="quotelev2">&gt;&gt;                             Ray Sheppard
</span><br>
<span class="quotelev2">&gt;&gt;                             RSheppar_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                             <a href="http://pti.iu.edu/sciapt">http://pti.iu.edu/sciapt</a>
</span><br>
<span class="quotelev2">&gt;&gt;                             317-274-0016
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Principal Analyst
</span><br>
<span class="quotelev2">&gt;&gt;                     Senior Technical Lead
</span><br>
<span class="quotelev2">&gt;&gt;                     Scientific Applications and Performance Tuning
</span><br>
<span class="quotelev2">&gt;&gt;                     Research Technologies
</span><br>
<span class="quotelev2">&gt;&gt;                     University Information Technological Services
</span><br>
<span class="quotelev2">&gt;&gt;                     IUPUI campus
</span><br>
<span class="quotelev2">&gt;&gt;                     Indiana University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     My &quot;pithy&quot; saying:  Science is the art of translating the world
</span><br>
<span class="quotelev2">&gt;&gt;         into language. Unfortunately, that language is mathematics.
</span><br>
<span class="quotelev2">&gt;&gt;     Bumper sticker wisdom: Make it idiot-proof and they will make a
</span><br>
<span class="quotelev2">&gt;&gt;         better idiot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Previous message:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>In reply to:</strong> <a href="22493.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<li><strong>Reply:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
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
