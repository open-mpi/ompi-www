<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 08:08:47 2006" -->
<!-- isoreceived="20060412120847" -->
<!-- sent="Wed, 12 Apr 2006 08:08:34 -0400" -->
<!-- isosent="20060412120834" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel EM64T Compiler error on Opteron" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF671769_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Intel EM64T Compiler error on Opteron" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 08:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1028.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Incorrect behavior for attributes attached toMPI_COMM_SELF."</a>
<li><strong>Maybe in reply to:</strong> <a href="1019.php">Hugh Merz: "[OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Reply:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I know that we saw similar issues with the Intel 8.1 series
<br>
(segv's during compilation).  Since we are not doing anything illegal in
<br>
terms of C++, we already treated this as a compiler bug that we couldn't
<br>
really do much about.  Plus, we [perhaps incorrectly] assumed that most
<br>
sites using the Intel compilers would be using more recent versions.
<br>
<p>Troy seems to confirm that later builds of the 8.1 series seem to have
<br>
fixed the problem -- can you try upgrading?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Troy Telford
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 11, 2006 4:14 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Intel EM64T Compiler error on Opteron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 11 Apr 2006 13:48:43 -0600, Troy Telford  
</span><br>
<span class="quotelev1">&gt; &lt;ttelford_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have compiled Open MPI (on an Opteron) with the Intel 9 EM64T  
</span><br>
<span class="quotelev2">&gt; &gt; compilers;
</span><br>
<span class="quotelev2">&gt; &gt; It's been a while since I've used the 8.1 series, but I'll 
</span><br>
<span class="quotelev1">&gt; give it a shot
</span><br>
<span class="quotelev2">&gt; &gt; with Intel 8.1 and tell you what happens.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can confirm that I'm able to compile Open MPI 1.0.2 on my systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other info:
</span><br>
<span class="quotelev1">&gt; * Opteron 244 CPUs
</span><br>
<span class="quotelev1">&gt; * SLES 9 SP3 x86_64
</span><br>
<span class="quotelev1">&gt; * Intel(R) C Compiler for Intel(R) EM64T-based applications, Version  
</span><br>
<span class="quotelev1">&gt; 8.1    Build 20050628
</span><br>
<span class="quotelev1">&gt; * Intel(R) Fortran Compiler for Intel(R) EM64T-based 
</span><br>
<span class="quotelev1">&gt; applications, Version  
</span><br>
<span class="quotelev1">&gt; 8.1    Build 20050517
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
</span><br>
<span class="quotelev1">&gt; Linux Networx
</span><br>
<span class="quotelev1">&gt; ttelford_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (801) 649-1356
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1030.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1028.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Incorrect behavior for attributes attached toMPI_COMM_SELF."</a>
<li><strong>Maybe in reply to:</strong> <a href="1019.php">Hugh Merz: "[OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Reply:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
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
