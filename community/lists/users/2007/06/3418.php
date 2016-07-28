<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 14:39:46 2007" -->
<!-- isoreceived="20070608183946" -->
<!-- sent="Fri, 8 Jun 2007 14:39:29 -0400" -->
<!-- isosent="20070608183929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues running a basic program with spawn" -->
<!-- id="BBF7E4F9-7D6E-44B7-873A-E015F71A7239_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="466572C1.5030005_at_cchmc.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 14:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<li><strong>In reply to:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2007, at 10:27 AM, Prakash Velayutham wrote:
<br>
<p><span class="quotelev1">&gt; I know. I could not start another client code before this. So just
</span><br>
<span class="quotelev1">&gt; wanted to check if /bin/hostname works with the spawn.
</span><br>
<p>It will not.  MPI_COMM_SPAWN assumes that you are spawning an MPI  
<br>
application and therefore after the process is launched, it tries to  
<br>
do MPI-level coordination with it to setup new communicators, etc.   
<br>
FWIW: MPI-2 says that you are *only* allowed to launch MPI processes  
<br>
through MPI_COMM_SPAWN[_MULTIPLE].
<br>
<p>This could well be the error that you are seeing (I haven't tried it  
<br>
myself to see what would happen).
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
<li><strong>Next message:</strong> <a href="3419.php">Cupp, Matthew R: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>Previous message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<li><strong>In reply to:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Reply:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
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
