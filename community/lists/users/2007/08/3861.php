<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 15 11:44:32 2007" -->
<!-- isoreceived="20070815154432" -->
<!-- sent="Wed, 15 Aug 2007 08:44:27 -0700" -->
<!-- isosent="20070815154427" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="[OMPI users] redirecting stdin" -->
<!-- id="46C31F5B.3010604_at_open-mpi.org" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-15 11:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Previous message:</strong> <a href="3860.php">Isaac Huang: "[OMPI users] locations of processes spawned by MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Reply:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm helping someone at LLNL get running with Open MPI, and the current 
<br>
snag seems to be that stdin redirection doesnt work right.  A quick look 
<br>
at the orterun manpage indicates something like this should work:
<br>
<p>mpirun -np 1 cat &lt; foo.txt
<br>
<p>If I run just say on the head node without any slurm allocation, this 
<br>
works just the same as `cat &lt; foo.txt`.  But if I grab a one node 
<br>
interactive slurm allocation, then run the same command again (cat 
<br>
should now be running out on the compute node), I get no output.  Is 
<br>
this expected behavior?  I'm seeing this on a recent trunk build and 
<br>
1.2.3 release.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Previous message:</strong> <a href="3860.php">Isaac Huang: "[OMPI users] locations of processes spawned by MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
<li><strong>Reply:</strong> <a href="3862.php">Jeff Squyres: "Re: [OMPI users] redirecting stdin"</a>
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
