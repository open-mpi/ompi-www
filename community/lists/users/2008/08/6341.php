<?
$subject_val = "Re: [OMPI users] Setting up Open MPI to run on multiple servers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 09:45:36 2008" -->
<!-- isoreceived="20080814134536" -->
<!-- sent="Thu, 14 Aug 2008 09:45:27 -0400" -->
<!-- isosent="20080814134527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting up Open MPI to run on multiple servers" -->
<!-- id="6883C67E-859D-4701-8A02-56B72ABBE4EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="863721.48127.qm_at_web76802.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting up Open MPI to run on multiple servers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-14 09:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6342.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2008, at 9:58 PM, Rayne wrote:
<br>
<p><span class="quotelev1">&gt; I just tried to explicitly specify where 32.out is on the server  
</span><br>
<span class="quotelev1">&gt; when using mpirun, and it worked. So the problem I had earlier did  
</span><br>
<span class="quotelev1">&gt; lie in the server not being able to find 32.out. So what should I do  
</span><br>
<span class="quotelev1">&gt; so that I don't have to explicitly specify the location of the  
</span><br>
<span class="quotelev1">&gt; program everytime I run mpirun? I tried including the directory  
</span><br>
<span class="quotelev1">&gt; under PATH in .bash_profile in my server, where the 32.out should  
</span><br>
<span class="quotelev1">&gt; run on, restarted the server, but it didn't work.
</span><br>
<p>This shouldn't be necessary -- if both 32.out and 64.out are in the  
<br>
same directory and you're *in* that directory, then OMPI should find  
<br>
it because we add &quot;.&quot; to the PATH.  For example
<br>
<p>shell$ ls
<br>
32.out
<br>
64.out
<br>
shell$ mpirun --host 32bithost.example.com -np 1 32.out \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--host 64bithost.example.com -np 1 64.out
<br>
<p><span class="quotelev1">&gt; Also, since having the 32-bit server run the 32-bit program and the  
</span><br>
<span class="quotelev1">&gt; 64-bit PC run the 64-bit program works, I guess it means my server  
</span><br>
<span class="quotelev1">&gt; cannot run the program compiled by my PC and hence, the mpirun  
</span><br>
<span class="quotelev1">&gt; failed when trying to get both the PC and server to run the same  
</span><br>
<span class="quotelev1">&gt; program compiled by the PC.
</span><br>
<p><p>Keep in mind that you have to have had OMPI compiled for heterogeneous  
<br>
operation.  I think that worked for some transports back in v1.2 (TCP?).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6342.php">Terry Dontje: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="6340.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="6339.php">Rayne: "Re: [OMPI users] Setting up Open MPI to run on multiple servers"</a>
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
