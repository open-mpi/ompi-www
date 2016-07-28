<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  7 08:44:00 2005" -->
<!-- isoreceived="20051007134400" -->
<!-- sent="Fri, 7 Oct 2005 08:43:58 -0500" -->
<!-- isosent="20051007134358" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Config error on MAC os X (10.4)" -->
<!-- id="2DC736E7-27C3-4AE2-A823-5B031AF12BAB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4352FDB1_at_webmail.colostate.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-07 08:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0166.php">Toon Knapen: "[O-MPI users] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0164.php">sdamjad: "[O-MPI users] Config error on MAC os X (10.4)"</a>
<li><strong>In reply to:</strong> <a href="0164.php">sdamjad: "[O-MPI users] Config error on MAC os X (10.4)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 6, 2005, at 12:19 PM, sdamjad wrote:
<br>
<p><span class="quotelev1">&gt; Folks
</span><br>
<span class="quotelev1">&gt; I am trying to install open -mpi on apple cluster. But it gives  
</span><br>
<span class="quotelev1">&gt; config error.
</span><br>
<span class="quotelev1">&gt; I am enclosing my config.log
</span><br>
<p>It looks like you have your CFLAGS set to -03 (dash zero three)  
<br>
instead of -O3 (dash oh three), which is confusing the compiler and  
<br>
linker.  Fixing the CFLAGS (it may actually be FFLAGS, but I think  
<br>
it's the CFLAGS) should fix the problem.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0166.php">Toon Knapen: "[O-MPI users] MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0164.php">sdamjad: "[O-MPI users] Config error on MAC os X (10.4)"</a>
<li><strong>In reply to:</strong> <a href="0164.php">sdamjad: "[O-MPI users] Config error on MAC os X (10.4)"</a>
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
