<?
$subject_val = "[OMPI users]  shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 08:36:56 2016" -->
<!-- isoreceived="20160202133656" -->
<!-- sent="Tue, 2 Feb 2016 22:36:55 +0900" -->
<!-- isosent="20160202133655" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI users]  shared memory under fortran, bug?" -->
<!-- id="CAAkFZ5t=q1kC6BUoXMTy45PeJbTkFo9UXw+Ti-mUWQ87r=JJBw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="562529553.14315579.1454417633112.JavaMail.zimbra_at_met.no" -->
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
<strong>Subject:</strong> [OMPI users]  shared memory under fortran, bug?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 08:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28432.php">Dave Love: "[OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28433.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28433.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Peter,
<br>
<p>that is quite unexpected ...
<br>
<p>let s try an other workaround, can you replace
<br>
<p>integer            :: comm_group
<br>
<p>with
<br>
<p>integer            :: comm_group, comm_tmp
<br>
<p><p>and
<br>
<p>call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_group, ierr)
<br>
<p><p>with
<br>
<p><p>call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_tmp, ierr)
<br>
<p>if (irank &lt; (num_procs/2)) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;comm_group = comm_tmp
<br>
<p>else
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_dup(comm_tmp, comm_group, ierr)
<br>
<p>endif
<br>
<p><p><p>if it works, I will make a fix tomorrow when I can access my workstation.
<br>
if not, can you please run
<br>
mpirun --mca osc_base_verbose 100 ...
<br>
and post the output ?
<br>
<p>I will then try to reproduce the issue and investigate it
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, February 2, 2016, Peter Wind &lt;peter.wind_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','peter.wind_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following output (I guess it is not what you wanted?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca osc pt2pt -np 4 a.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      stallo-2.local
</span><br>
<span class="quotelev1">&gt; Framework: osc
</span><br>
<span class="quotelev1">&gt; Component: pt2pt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_osc_base_open() failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38415] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt; not able to aggregate error messages, and not able to guarantee that all
</span><br>
<span class="quotelev1">&gt; other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38418] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt; not able to aggregate error messages, and not able to guarantee that all
</span><br>
<span class="quotelev1">&gt; other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38416] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt; not able to aggregate error messages, and not able to guarantee that all
</span><br>
<span class="quotelev1">&gt; other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38417] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt; not able to aggregate error messages, and not able to guarantee that all
</span><br>
<span class="quotelev1">&gt; other processes were killed!
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[52507,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38410] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mca-base.txt / find-available:not-valid
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38410] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev1">&gt; to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [stallo-2.local:38410] 2 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first glance, your test program looks correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please try to run
</span><br>
<span class="quotelev1">&gt; mpirun --mca osc pt2pt -np 4 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I  might have identified a bug with the sm osc component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, February 2, 2016, Peter Wind &lt;peter.wind_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enclosed is a short (&lt; 100 lines) fortran code example that uses shared
</span><br>
<span class="quotelev2">&gt;&gt; memory.
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me it behaves wrongly if openmpi is used.
</span><br>
<span class="quotelev2">&gt;&gt; Compiled with SGI/mpt , it gives the right result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To fail, the code must be run on a single node.
</span><br>
<span class="quotelev2">&gt;&gt; It creates two groups of 2 processes each. Within each group memory is
</span><br>
<span class="quotelev2">&gt;&gt; shared.
</span><br>
<span class="quotelev2">&gt;&gt; The error is that the two groups get the same memory allocated, but they
</span><br>
<span class="quotelev2">&gt;&gt; should not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel
</span><br>
<span class="quotelev2">&gt;&gt; 14.0
</span><br>
<span class="quotelev2">&gt;&gt; all fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The call:
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt;&gt; comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should allocate memory only within the group. But when the other group
</span><br>
<span class="quotelev2">&gt;&gt; allocates memory, the pointers from the two groups point to the same
</span><br>
<span class="quotelev2">&gt;&gt; address in memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please confirm that this is the wrong behaviour?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Peter Wind
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28432.php">Dave Love: "[OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28433.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28433.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
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
