<?
$subject_val = "Re: [OMPI users] enable-cuda with disable-dlopen";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 18:55:24 2014" -->
<!-- isoreceived="20140905225524" -->
<!-- sent="Fri, 5 Sep 2014 18:55:21 -0400" -->
<!-- isosent="20140905225521" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] enable-cuda with disable-dlopen" -->
<!-- id="3277CF00-C5A9-4BCC-8699-1F098DDCB4E3_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fc5df6b059a44c1f9c0aee52ffe5df64_at_HQMAIL102.nvidia.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 18:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25284.php">Allin Cottrell: "[OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Rolf. 
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Sep 5, 2014, at 6:28 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I have reproduced.  And I agree with your thoughts on configuring vs runtime error.  I will look into this.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, September 05, 2014 5:22 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] enable-cuda with disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * PGP Signed by an unknown key
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We found with 1.8.[1,2]  that is you compile with
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --with-mxm
</span><br>
<span class="quotelev2">&gt;&gt; --with-cuda
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI will compile install and run, but if you run disabling mxm (say to debug
</span><br>
<span class="quotelev2">&gt;&gt; something)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca mtl ^mxm ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You will get a notice saying that you cannot have enable cuda with disable
</span><br>
<span class="quotelev2">&gt;&gt; dlopen, and the job dies.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any reason this shouldn't be a configure time error?  Rather than a
</span><br>
<span class="quotelev2">&gt;&gt; runtime error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note we have moved to --disable-mca-dso to get the result we want (less
</span><br>
<span class="quotelev2">&gt;&gt; iops to the server hosting the install)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our full configure was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PREFIX=/home/software/rhel6/openmpi-1.8.2/gcc-4.8.0
</span><br>
<span class="quotelev2">&gt;&gt; MXM=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt; FCA=/opt/mellanox/fca
</span><br>
<span class="quotelev2">&gt;&gt; KNEM=/opt/knem-1.1.1.90mlnx
</span><br>
<span class="quotelev2">&gt;&gt; CUDA=/home/software/rhel6/cuda/5.5/cuda
</span><br>
<span class="quotelev2">&gt;&gt; COMPILERS='CC=gcc CXX=g++ FC=gfortran'
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=$PREFIX \
</span><br>
<span class="quotelev2">&gt;&gt; --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-java   \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt; --with-cuda=$CUDA \
</span><br>
<span class="quotelev2">&gt;&gt; --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev2">&gt;&gt; --with-psm   \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev2">&gt;&gt; --with-fca=$FCA \
</span><br>
<span class="quotelev2">&gt;&gt; --with-mxm=$MXM \
</span><br>
<span class="quotelev2">&gt;&gt; --with-knem=$KNEM \
</span><br>
<span class="quotelev2">&gt;&gt; --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev2">&gt;&gt;  $COMPILERS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Unknown Key
</span><br>
<span class="quotelev2">&gt;&gt; * 0x806FCF94
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25283.php">http://www.open-mpi.org/community/lists/users/2014/09/25283.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25286.php">Ralph Castain: "Re: [OMPI users] new overcommitment warning?"</a>
<li><strong>Previous message:</strong> <a href="25284.php">Allin Cottrell: "[OMPI users] new overcommitment warning?"</a>
<li><strong>In reply to:</strong> <a href="25283.php">Rolf vandeVaart: "Re: [OMPI users] enable-cuda with disable-dlopen"</a>
<!-- nextthread="start" -->
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
