<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 19:15:33 2006" -->
<!-- isoreceived="20060630231533" -->
<!-- sent="Fri, 30 Jun 2006 17:13:59 -0600" -->
<!-- isosent="20060630231359" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Testing one-sided message passing with 1.1" -->
<!-- id="5D0F13AD-EC97-40D9-9EDF-21D55F2682E9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44A4610D.2070900_at_reachone.com" -->
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
<strong>Date:</strong> 2006-06-30 19:13:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1521.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1541.php">Daniël Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2006, at 5:23 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I am testing the one-sided message passing (mpi_put, mpi_get) that  
</span><br>
<span class="quotelev1">&gt; is now supported in the 1.1 release.  It seems to work OK for some  
</span><br>
<span class="quotelev1">&gt; simple test codes, but when I run my big application, it fails.   
</span><br>
<span class="quotelev1">&gt; This application is a large weather model that runs operationally  
</span><br>
<span class="quotelev1">&gt; on the SGI Origin 3000, using the native one-sided message passing  
</span><br>
<span class="quotelev1">&gt; that has been supported on that system for many years.  At least on  
</span><br>
<span class="quotelev1">&gt; that architecture, the code always runs correctly for processor  
</span><br>
<span class="quotelev1">&gt; numbers up to 480.  On the O3K a requirement for the one-sided  
</span><br>
<span class="quotelev1">&gt; communication to work correctly is to use 'mpi_win_create' to  
</span><br>
<span class="quotelev1">&gt; define the RMA 'windows' in symmetric locations on all processors,  
</span><br>
<span class="quotelev1">&gt; i.e. the same 'place' in memory on each processor.  This can be   
</span><br>
<span class="quotelev1">&gt; done with static memory, i.e. , in common; or on the 'symmetric  
</span><br>
<span class="quotelev1">&gt; heap', which is defined via environment variables.  In my  
</span><br>
<span class="quotelev1">&gt; application the latter method is used.  I define several of these  
</span><br>
<span class="quotelev1">&gt; 'windows' on the symmetric heap, each with a unique handle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I spend my time trying to diagnose this problem further, I  
</span><br>
<span class="quotelev1">&gt; need as much information about the OpenMPI one-sided implementation  
</span><br>
<span class="quotelev1">&gt; as available.  Do you have a similar requirement or criteria for  
</span><br>
<span class="quotelev1">&gt; symmetric memory for the RMA windows?  Are there runtime parameters  
</span><br>
<span class="quotelev1">&gt; that I should be using that are unique to one-sided message passing  
</span><br>
<span class="quotelev1">&gt; with OpenMPI?  Any other information will certainly be appreciated.
</span><br>
<p>There are no requirements on the one-sided windows in terms of buffer  
<br>
pointers.  Our current implementation is over point-to-point so it's  
<br>
kinda slow compared to real one-sided implementations, but has the  
<br>
advantage of working with arbitrary window locations.
<br>
<p>There is only two parameters to tweak in the current implementation:
<br>
<p>&nbsp;&nbsp;&nbsp;osc_pt2pt_eager_send: If this is 1, we try to start progressing  
<br>
the put/get
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;before the synchronization point.  The default is 0.  This is  
<br>
not well
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tested, so I recommend leaving it 0.  It's safer at this point.
<br>
<p>&nbsp;&nbsp;&nbsp;osc_pt2pt_fence_sync_method: This one might be worth playing with,  
<br>
but I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;doubt it could cause your problems.  This is the collective we  
<br>
use to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implement MPI_FENCE.  Options are reduce_scatter (default),  
<br>
allreduce,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alltoall.  Again, I doubt it will make any difference, but  
<br>
would be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;interesting to confirm that.
<br>
<p>You can set the parameters at mpirun time:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np XX -mca osc_pt2pt_fence_sync_method reduce_scatter ./ 
<br>
test_code
<br>
<p>Our one-sided implementation has not been as well tested as the rest  
<br>
of the code (as this is our first release with one-sided support).   
<br>
If you can share any details on your application or, better yet, a  
<br>
test case, we'd appreciate it.
<br>
<p>There is one known issue with the implementation.  It does not  
<br>
support using MPI_ACCUMULATE with user-defined datatypes, even if  
<br>
they are entirely composed of one predefined datatype.  We plan on  
<br>
fixing this in the near future, and an error message will be printed  
<br>
if this situation occurs.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1521.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1541.php">Daniël Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
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
