<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 11:10:08 2006" -->
<!-- isoreceived="20060313161008" -->
<!-- sent="Mon, 13 Mar 2006 11:10:06 -0500" -->
<!-- isosent="20060313161006" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="2F426D58-0F1E-4A35-A5D7-B7A0A6FD9802_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4410634A.4070305_at_obs.ujf-grenoble.fr" -->
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
<strong>Date:</strong> 2006-03-13 11:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0841.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0844.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0844.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 12:18 PM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; - Configure and compile are okay
</span><br>
<p>Good to hear.
<br>
<p><span class="quotelev1">&gt; - However compiling the mpi.f90 takes over 35 *minutes* with -O1.   
</span><br>
<span class="quotelev1">&gt; This seems a bit excessive...  I tried removing any -O option and  
</span><br>
<span class="quotelev1">&gt; things are just as slow. Is this behaviour related to open-mpi or  
</span><br>
<span class="quotelev1">&gt; to some wrong features of the Studio11 compiler ?
</span><br>
<p>As Jeff said in a previous e-mail, some of this is, unfortunately,  
<br>
unavoidable.  However, I think I found an issue that might greatly  
<br>
speedup this compile time.  More information coming shortly.
<br>
<p><span class="quotelev1">&gt; - 'mpirun --help' non longer crashes.
</span><br>
<p>One bug down, more to go ;).
<br>
<p><span class="quotelev1">&gt; - standard output seems messy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) 'mpirun -np 4 pwd' returns randomly 1 or two lines, never 4. The  
</span><br>
<span class="quotelev1">&gt; same behaviour occurs if the output is redirected to a file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) When running some simple &quot;demo&quot; fortran code, the standard  
</span><br>
<span class="quotelev1">&gt; output is buffered within open-mpi and all results are issued at  
</span><br>
<span class="quotelev1">&gt; the end. No intermediates are showed.
</span><br>
<p>I found this problem, and it should be fixed with the nightly  
<br>
snaphots of the trunk from this weekend.  I've requested the fixes be  
<br>
moved to the 1.0 release branch, but our release managers are a bit  
<br>
busy so it hasn't happened yet.
<br>
<p><span class="quotelev1">&gt; - running a slightly more elaborate program fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) compile behaves differently with mpif77 and mpif90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While mpif90 compiles and builds &quot;silently&quot;, mpif77 is talkative:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~/BENCHES &gt; mpif77 -xtarget=opteron -xarch=amd64 -o  
</span><br>
<span class="quotelev1">&gt; all all.f
</span><br>
<span class="quotelev1">&gt; NOTICE: Invoking /opt/Studio11/SUNWspro/bin/f90 -f77 -ftrap=%none - 
</span><br>
<span class="quotelev1">&gt; I/users/valiron/lib/openmpi-1.1a1r9224/include -xtarget=opteron - 
</span><br>
<span class="quotelev1">&gt; xarch=amd64 -o all all.f -L/users/valiron/lib/openmpi-1.1a1r9224/ 
</span><br>
<span class="quotelev1">&gt; lib -lmpi -lorte -lopal -lsocket -lnsl -lrt -lm -lthread -ldl
</span><br>
<span class="quotelev1">&gt; all.f:
</span><br>
<span class="quotelev1">&gt;        rw_sched:
</span><br>
<span class="quotelev1">&gt; MAIN all:
</span><br>
<span class="quotelev1">&gt;        lam_alltoall:
</span><br>
<span class="quotelev1">&gt;        my_alltoall1:
</span><br>
<span class="quotelev1">&gt;        my_alltoall2:
</span><br>
<span class="quotelev1">&gt;        my_alltoall3:
</span><br>
<span class="quotelev1">&gt;        my_alltoall4:
</span><br>
<span class="quotelev1">&gt;        check_buf:
</span><br>
<span class="quotelev1">&gt;        alltoall_sched_ori:
</span><br>
<span class="quotelev1">&gt;        alltoall_sched_new:
</span><br>
<p>This is not an Open MPI problem, but how the Solaris compilers work  
<br>
on that machine.  If you compile a non-MPI Fortran program with the  
<br>
f77 and f90 compilers on icare, you will see the same behavior.  I'm  
<br>
not sure why the compilers behave like that, but there isn't much I  
<br>
can do to fix it.
<br>
<p><span class="quotelev1">&gt; b) whatever the code was compiled with mpif77 or mpif90, execution  
</span><br>
<span class="quotelev1">&gt; fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~/BENCHES &gt; mpirun -np 2 all
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:40
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:40
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<p>Does this code work with other MPI implementations?  I'm still trying  
<br>
to track the problem down, but it looks like an invalid request is  
<br>
cropping up in a call to MPI_Wait and that is causing the  
<br>
segmentation fault.  There may be another issue, but I need to do a  
<br>
bit more testing to be sure.
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
<li><strong>Next message:</strong> <a href="0841.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0844.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0844.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
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
