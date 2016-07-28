<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 12:12:05 2009" -->
<!-- isoreceived="20090519161205" -->
<!-- sent="Tue, 19 May 2009 17:13:02 +0100" -->
<!-- isosent="20090519161302" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="1242749582.26039.742.camel_at_localhost.localdomain" -->
<!-- inreplyto="3B241BB6-D7BA-463F-9BAA-AD321E493359_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 12:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9390.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-19 at 11:01 -0400, Noam Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; I'd suspect the filesystem too, except that it's hung up in an MPI  
</span><br>
<span class="quotelev1">&gt; call.  As I said
</span><br>
<span class="quotelev1">&gt; before, the whole thing is bizarre.  It doesn't matter where the  
</span><br>
<span class="quotelev1">&gt; executable is,
</span><br>
<span class="quotelev1">&gt; just what CWD is (i.e. I can do mpirun /scratch/exec or mpirun /home/ 
</span><br>
<span class="quotelev1">&gt; bernstei/exec,
</span><br>
<span class="quotelev1">&gt; but if it's sitting in /scratch it'll hang).  And I've been running
</span><br>
<span class="quotelev1">&gt; other codes both from NFS and from scratch directories for months,
</span><br>
<span class="quotelev1">&gt; and never had a problem.
</span><br>
<p>That is indeed odd but it shouldn't be too hard to track down, how often
<br>
does the failure occur?  Presumably when you say you have three
<br>
invocations of the program they communicate via files, is the location
<br>
of these files changing?
<br>
<p>I assume you're certain it's actually hanging and not just failing to
<br>
converge?
<br>
<p>Finally if you could run it with &quot;--mca btl ^ofed&quot; to rule out the ofed
<br>
stack causing the problem that would be useful.  You'd need to check the
<br>
syntax here.
<br>
<p><span class="quotelev1">&gt; Using MVAPICH every process is stuck in a collective, but they're not  
</span><br>
<span class="quotelev1">&gt; all the
</span><br>
<span class="quotelev1">&gt; same collective (see stack traces below).  The 2 processes on the head  
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev1">&gt; are stuck on mpi_bcast, in various low level MPI routines.  The other 6
</span><br>
<span class="quotelev1">&gt; processes are stuck on an mpi_allreduce, again in various low level mpi
</span><br>
<span class="quotelev1">&gt; processes.  I don't know enough about the code to tell they're all  
</span><br>
<span class="quotelev1">&gt; supposed
</span><br>
<span class="quotelev1">&gt; to be part of the same communicator, and the fact that they're stuck on
</span><br>
<span class="quotelev1">&gt; different collectives is suspicious.  I can look into that.
</span><br>
<p>This isn't so suspicious, if there is a problem with some processes it's
<br>
common for other processes to continue till the next collective call.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9389.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9390.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
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
