<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  1 16:17:41 2007" -->
<!-- isoreceived="20070201211741" -->
<!-- sent="Thu, 1 Feb 2007 16:17:22 -0500" -->
<!-- isosent="20070201211722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI sucks CPU when doing nothing" -->
<!-- id="5635BE58-9569-44B6-8DFD-E2B3D5322B1C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200701111259.26636.wwieser_at_gmx.de" -->
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
<strong>Date:</strong> 2007-02-01 16:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2578.php">Jeff Squyres: "Re: [OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2458.php">Wolfgang Wieser: "[OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2007, at 6:59 AM, Wolfgang Wieser wrote:
<br>
<p><span class="quotelev1">&gt; I'm just in progress of selecting an MPI implementation to be
</span><br>
<span class="quotelev1">&gt; used on a compute server cluster at the University of Munich.
</span><br>
<span class="quotelev1">&gt; Since MPI_THREAD_MULTIPLE is a requirement, I went for OpenMPI.
</span><br>
<p>Sorry for the delay in replying here -- all the OMPI developers are  
<br>
crunching to meet our internal deadlines for the upcoming OMPI v1.2  
<br>
release.
<br>
<p>Note that our MPI_THREAD_MULTIPLE support is hapazard at best.  :-\   
<br>
Multi-threaded support has been designed in from the very beginning,  
<br>
but it has not risen high enough in priority yet to fully test and  
<br>
debug MPI_THREAD_MULTIPLE support.
<br>
<p><span class="quotelev1">&gt; The setup is a rack of boxes running Linux and connected with
</span><br>
<span class="quotelev1">&gt; gigabit ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there is a severe problem:
</span><br>
<span class="quotelev1">&gt; Blocking functions like MPI_Probe() suck all CPU power.
</span><br>
<span class="quotelev1">&gt; But as everybody knows, select(2), poll(2) and recently also
</span><br>
<span class="quotelev1">&gt; epoll(2) were invented to give implementes a possibility to write
</span><br>
<span class="quotelev1">&gt; programs with multiple IO channels without the need for busy waiting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I wonder if there is a way to have OpenMPI not make use of busy
</span><br>
<span class="quotelev1">&gt; waiting but rather apply some kernel-level event selection function
</span><br>
<span class="quotelev1">&gt; like the ones mentioned above.
</span><br>
<p>The problem is that OMPI may have to poll several different types of  
<br>
networks, to include shared memory.  So we revert to a polling  
<br>
approach, which sucks up lots of CPU.  We pretty much assume that the  
<br>
MPI process has full reign of the processor.  For multi-threaded  
<br>
scenarios, blocking progress threads are the plan, but as I mentioned  
<br>
above, these are *very* loosely tested.  I would not consider them  
<br>
stable.
<br>
<p>What you can do, however, is tell OMPI to poll in a less aggressive  
<br>
mode -- meaning that we effectively call sched_yield() in every  
<br>
iteration.  You can do this by setting the &quot;mpi_yield_when_idle&quot; MCA  
<br>
parameter to 1.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ mpirun --mca mpi_yield_when_idle 1 -np 4 a.out
<br>
<p>Additionally, there is ongoing discussion occurring right now between  
<br>
OMPI developers to allow blocking when there is only TCP being used  
<br>
(e.g., you disable shared memory at run time).  It's unclear yet  
<br>
whether this will be included in v1.2, but if it does, it will be  
<br>
effective when you disable shared memory.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;shell$ mpirun --mca btl ^sm -np 4 a.out
<br>
<p>See the FAQ for more information about how to set MCA parameters, etc.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2580.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2578.php">Jeff Squyres: "Re: [OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2458.php">Wolfgang Wieser: "[OMPI users] OpenMPI sucks CPU when doing nothing"</a>
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
