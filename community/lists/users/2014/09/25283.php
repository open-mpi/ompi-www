<?
$subject_val = "Re: [OMPI users] enable-cuda with disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 18:28:07 2014" -->
<!-- isoreceived="20140905222807" -->
<!-- sent="Fri, 5 Sep 2014 22:28:05 +0000" -->
<!-- isosent="20140905222805" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] enable-cuda with disable-dlopen" -->
<!-- id="fc5df6b059a44c1f9c0aee52ffe5df64_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8F4B48D5-EC27-477E-B468-BCC8DC7D0125_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] enable-cuda with disable-dlopen<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 18:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25284.php">Allin Cottrell: "[OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25282.php">Brock Palen: "[OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="25282.php">Brock Palen: "[OMPI users] enable-cuda with disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I have reproduced.  And I agree with your thoughts on configuring vs runtime error.  I will look into this.
<br>
Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev1">&gt;Sent: Friday, September 05, 2014 5:22 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] enable-cuda with disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* PGP Signed by an unknown key
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We found with 1.8.[1,2]  that is you compile with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--with-mxm
</span><br>
<span class="quotelev1">&gt;--with-cuda
</span><br>
<span class="quotelev1">&gt;--disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;OMPI will compile install and run, but if you run disabling mxm (say to debug
</span><br>
<span class="quotelev1">&gt;something)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun --mca mtl ^mxm ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You will get a notice saying that you cannot have enable cuda with disable
</span><br>
<span class="quotelev1">&gt;dlopen, and the job dies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there any reason this shouldn't be a configure time error?  Rather than a
</span><br>
<span class="quotelev1">&gt;runtime error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Note we have moved to --disable-mca-dso to get the result we want (less
</span><br>
<span class="quotelev1">&gt;iops to the server hosting the install)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Our full configure was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;PREFIX=/home/software/rhel6/openmpi-1.8.2/gcc-4.8.0
</span><br>
<span class="quotelev1">&gt;MXM=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt;FCA=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt;KNEM=/opt/knem-1.1.1.90mlnx
</span><br>
<span class="quotelev1">&gt;CUDA=/home/software/rhel6/cuda/5.5/cuda
</span><br>
<span class="quotelev1">&gt;COMPILERS='CC=gcc CXX=g++ FC=gfortran'
</span><br>
<span class="quotelev1">&gt;./configure \
</span><br>
<span class="quotelev1">&gt;--prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;--mandir=${PREFIX}/man \
</span><br>
<span class="quotelev1">&gt;--disable-dlopen \
</span><br>
<span class="quotelev1">&gt;--enable-shared \
</span><br>
<span class="quotelev1">&gt;--enable-java   \
</span><br>
<span class="quotelev1">&gt;--enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;--with-cuda=$CUDA \
</span><br>
<span class="quotelev1">&gt;--with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;--with-verbs \
</span><br>
<span class="quotelev1">&gt;--with-psm   \
</span><br>
<span class="quotelev1">&gt;--with-tm=/usr/local/torque \
</span><br>
<span class="quotelev1">&gt;--with-fca=$FCA \
</span><br>
<span class="quotelev1">&gt;--with-mxm=$MXM \
</span><br>
<span class="quotelev1">&gt;--with-knem=$KNEM \
</span><br>
<span class="quotelev1">&gt;--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev1">&gt;   $COMPILERS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brock Palen
</span><br>
<span class="quotelev1">&gt;www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt;CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt;XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt;brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;(734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Unknown Key
</span><br>
<span class="quotelev1">&gt;* 0x806FCF94
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25284.php">Allin Cottrell: "[OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25282.php">Brock Palen: "[OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>In reply to:</strong> <a href="25282.php">Brock Palen: "[OMPI users] enable-cuda with disable-dlopen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<li><strong>Reply:</strong> <a href="25285.php">Brock Palen: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
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
