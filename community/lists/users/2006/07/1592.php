<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  8 08:13:46 2006" -->
<!-- isoreceived="20060708121346" -->
<!-- sent="Sat, 8 Jul 2006 08:13:32 -0400" -->
<!-- isosent="20060708121332" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging with mpirun" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB2501A_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] debugging with mpirun" -->
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
<strong>Date:</strong> 2006-07-08 08:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1593.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Maybe in reply to:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
XMPI will not work with Open MPI, sorry.
<br>
<p>However, I believe that MPE, a tracefile generator for MPI, may work
<br>
with Open MPI, and therefore you can use the upshot/jumpshot packages
<br>
that are similar in concept to XMPI (both MPE and upshot/jumpshot used
<br>
to be distributed with MPICH -- I think they still are, but am not 100%
<br>
sure).
<br>
<p>There are also a variety of other MPI tracefile / debugging tools
<br>
available; some are free, some are not.
<br>
<p>Open MPI has plans to include its own tracefile generator in the future,
<br>
but a specific timeline has not yet been established.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Manal Helal
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 07, 2006 1:18 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] debugging with mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or, if there is openMPI under Windows, where I can do some visual
</span><br>
<span class="quotelev1">&gt; debugging, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate any hints, because my application is getting too 
</span><br>
<span class="quotelev1">&gt; big, that
</span><br>
<span class="quotelev1">&gt; printf are not doing any good, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manal
</span><br>
<span class="quotelev1">&gt; On Fri, 2006-07-07 at 14:10 +1000, Manal Helal wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see that XMPI will do all that I need, but it says, it works with
</span><br>
<span class="quotelev2">&gt; &gt; LAM/MPI up to versions 6.3.2 &amp; 6.5.9, I am not sure if 
</span><br>
<span class="quotelev1">&gt; trying that with
</span><br>
<span class="quotelev2">&gt; &gt; open/mpi will work or not, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Manal
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2006-07-07 at 12:27 +1000, Manal Helal wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thing that can show me varia
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1593.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Maybe in reply to:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
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
