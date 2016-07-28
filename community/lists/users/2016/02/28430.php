<?
$subject_val = "Re: [OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 07:53:55 2016" -->
<!-- isoreceived="20160202125355" -->
<!-- sent="Tue, 2 Feb 2016 12:53:53 +0000 (UTC)" -->
<!-- isosent="20160202125353" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory under fortran, bug?" -->
<!-- id="562529553.14315579.1454417633112.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5uXMq+3P-fNZC3QvkFSN4wpinP6XAxQ93fDgXh7S8c3_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory under fortran, bug?<br>
<strong>From:</strong> Peter Wind (<em>peter.wind_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 07:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28431.php">Gilles Gouaillardet: "[OMPI users]  shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28431.php">Gilles Gouaillardet: "[OMPI users]  shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28431.php">Gilles Gouaillardet: "[OMPI users]  shared memory under fortran, bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles, 
<br>
<p>I get the following output (I guess it is not what you wanted?). 
<br>
<p>Peter 
<br>
<p>$ mpirun --mca osc pt2pt -np 4 a.out 
<br>
-------------------------------------------------------------------------- 
<br>
A requested component was not found, or was unable to be opened. This 
<br>
means that this component is either not installed or is unable to be 
<br>
used on your system (e.g., sometimes this means that shared libraries 
<br>
that the component requires are unable to be found/loaded). Note that 
<br>
Open MPI stopped checking at the first component that it did not find. 
<br>
<p>Host: stallo-2.local 
<br>
Framework: osc 
<br>
Component: pt2pt 
<br>
-------------------------------------------------------------------------- 
<br>
-------------------------------------------------------------------------- 
<br>
It looks like MPI_INIT failed for some reason; your parallel process is 
<br>
likely to abort. There are many reasons that a parallel process can 
<br>
fail during MPI_INIT; some of which are due to configuration or environment 
<br>
problems. This failure appears to be an internal failure; here's some 
<br>
additional information (which may only be relevant to an Open MPI 
<br>
developer): 
<br>
<p>ompi_osc_base_open() failed 
<br>
--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0) 
<br>
-------------------------------------------------------------------------- 
<br>
*** An error occurred in MPI_Init 
<br>
*** on a NULL communicator 
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort, 
<br>
*** and potentially your MPI job) 
<br>
[stallo-2.local:38415] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
<br>
*** An error occurred in MPI_Init 
<br>
*** on a NULL communicator 
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort, 
<br>
*** and potentially your MPI job) 
<br>
[stallo-2.local:38418] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
<br>
*** An error occurred in MPI_Init 
<br>
*** on a NULL communicator 
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort, 
<br>
*** and potentially your MPI job) 
<br>
[stallo-2.local:38416] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
<br>
*** An error occurred in MPI_Init 
<br>
*** on a NULL communicator 
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort, 
<br>
*** and potentially your MPI job) 
<br>
[stallo-2.local:38417] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
<br>
------------------------------------------------------- 
<br>
Primary job terminated normally, but 1 process returned 
<br>
a non-zero exit code.. Per user-direction, the job has been aborted. 
<br>
------------------------------------------------------- 
<br>
-------------------------------------------------------------------------- 
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing 
<br>
the job to be terminated. The first process to do so was: 
<br>
<p>Process name: [[52507,1],0] 
<br>
Exit code: 1 
<br>
-------------------------------------------------------------------------- 
<br>
[stallo-2.local:38410] 3 more processes have sent help message help-mca-base.txt / find-available:not-valid 
<br>
[stallo-2.local:38410] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages 
<br>
[stallo-2.local:38410] 2 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure 
<br>
<p>----- Original Message -----
<br>
<p><span class="quotelev1">&gt; Peter,
</span><br>
<p><span class="quotelev1">&gt; at first glance, your test program looks correct.
</span><br>
<p><span class="quotelev1">&gt; can you please try to run
</span><br>
<span class="quotelev1">&gt; mpirun --mca osc pt2pt -np 4 ...
</span><br>
<p><span class="quotelev1">&gt; I might have identified a bug with the sm osc component.
</span><br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<p><span class="quotelev1">&gt; Gilles
</span><br>
<p><span class="quotelev1">&gt; On Tuesday, February 2, 2016, Peter Wind &lt; peter.wind_at_[hidden] &gt; wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; Enclosed is a short (&lt; 100 lines) fortran code example that uses shared
</span><br>
<span class="quotelev2">&gt; &gt; memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It seems to me it behaves wrongly if openmpi is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Compiled with SGI/mpt , it gives the right result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; To fail, the code must be run on a single node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It creates two groups of 2 processes each. Within each group memory is
</span><br>
<span class="quotelev2">&gt; &gt; shared.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The error is that the two groups get the same memory allocated, but they
</span><br>
<span class="quotelev2">&gt; &gt; should not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel
</span><br>
<span class="quotelev2">&gt; &gt; 14.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; all fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; The call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt; &gt; comm_group,
</span><br>
<span class="quotelev2">&gt; &gt; cp1, win, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Should allocate memory only within the group. But when the other group
</span><br>
<span class="quotelev2">&gt; &gt; allocates memory, the pointers from the two groups point to the same
</span><br>
<span class="quotelev2">&gt; &gt; address
</span><br>
<span class="quotelev2">&gt; &gt; in memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Could you please confirm that this is the wrong behaviour?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Peter Wind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28429.php">http://www.open-mpi.org/community/lists/users/2016/02/28429.php</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28431.php">Gilles Gouaillardet: "[OMPI users]  shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28431.php">Gilles Gouaillardet: "[OMPI users]  shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28431.php">Gilles Gouaillardet: "[OMPI users]  shared memory under fortran, bug?"</a>
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
