<?
$subject_val = "Re: [OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 03:29:47 2016" -->
<!-- isoreceived="20160203082947" -->
<!-- sent="Wed, 3 Feb 2016 17:29:44 +0900" -->
<!-- isosent="20160203082944" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory under fortran, bug?" -->
<!-- id="56B1BA78.2040103_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uYzA_caw=FLu3LK=OJG_yy8npmYhOo0zaJ3UyMDGXzNw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 03:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28442.php">Jeff Hammond: "Re: [OMPI users] MX replacement?"</a>
<li><strong>In reply to:</strong> <a href="28436.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter,
<br>
<p>a patch is available at 
<br>
<a href="https://github.com/ggouaillardet/ompi-release/commit/0b62eabcae403b95274ce55973a7ce29483d0c98.patch">https://github.com/ggouaillardet/ompi-release/commit/0b62eabcae403b95274ce55973a7ce29483d0c98.patch</a>
<br>
<p>it is now under review
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/2/2016 11:22 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Thanks Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is just a workaround for a bug we just identified, the fix will 
</span><br>
<span class="quotelev1">&gt; come soon
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
<span class="quotelev1">&gt; On Tuesday, February 2, 2016, Peter Wind &lt;peter.wind_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:peter.wind_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That worked!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i.e with the changed you proposed the code gives the right result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That was efficient work, thank you Gilles :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best wishes,
</span><br>
<span class="quotelev1">&gt;     Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         that is quite unexpected ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         let s try an other workaround, can you replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         integer            :: comm_group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         integer            :: comm_group, comm_tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_group, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SPLIT(comm, irank*2/num_procs, irank, comm_tmp, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (irank &lt; (num_procs/2)) then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              comm_group = comm_tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              call MPI_Comm_dup(comm_tmp, comm_group, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if it works, I will make a fix tomorrow when I can access my
</span><br>
<span class="quotelev1">&gt;         workstation.
</span><br>
<span class="quotelev1">&gt;         if not, can you please run
</span><br>
<span class="quotelev1">&gt;         mpirun --mca osc_base_verbose 100 ...
</span><br>
<span class="quotelev1">&gt;         and post the output ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I will then try to reproduce the issue and investigate it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Tuesday, February 2, 2016, Peter Wind &lt;peter.wind_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I get the following output (I guess it is not what you
</span><br>
<span class="quotelev1">&gt;             wanted?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             $ mpirun --mca osc pt2pt -np 4 a.out
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             A requested component was not found, or was unable to be
</span><br>
<span class="quotelev1">&gt;             opened.  This
</span><br>
<span class="quotelev1">&gt;             means that this component is either not installed or is
</span><br>
<span class="quotelev1">&gt;             unable to be
</span><br>
<span class="quotelev1">&gt;             used on your system (e.g., sometimes this means that
</span><br>
<span class="quotelev1">&gt;             shared libraries
</span><br>
<span class="quotelev1">&gt;             that the component requires are unable to be
</span><br>
<span class="quotelev1">&gt;             found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt;             Open MPI stopped checking at the first component that it
</span><br>
<span class="quotelev1">&gt;             did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Host:      stallo-2.local
</span><br>
<span class="quotelev1">&gt;             Framework: osc
</span><br>
<span class="quotelev1">&gt;             Component: pt2pt
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt;             parallel process is
</span><br>
<span class="quotelev1">&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;             process can
</span><br>
<span class="quotelev1">&gt;             fail during MPI_INIT; some of which are due to
</span><br>
<span class="quotelev1">&gt;             configuration or environment
</span><br>
<span class="quotelev1">&gt;             problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;             here's some
</span><br>
<span class="quotelev1">&gt;             additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;             Open MPI
</span><br>
<span class="quotelev1">&gt;             developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               ompi_osc_base_open() failed
</span><br>
<span class="quotelev1">&gt;               --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;             *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;             *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt;             will now abort,
</span><br>
<span class="quotelev1">&gt;             ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38415] Local abort before MPI_INIT
</span><br>
<span class="quotelev1">&gt;             completed successfully; not able to aggregate error
</span><br>
<span class="quotelev1">&gt;             messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt;             processes were killed!
</span><br>
<span class="quotelev1">&gt;             *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;             *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;             *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt;             will now abort,
</span><br>
<span class="quotelev1">&gt;             ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38418] Local abort before MPI_INIT
</span><br>
<span class="quotelev1">&gt;             completed successfully; not able to aggregate error
</span><br>
<span class="quotelev1">&gt;             messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt;             processes were killed!
</span><br>
<span class="quotelev1">&gt;             *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;             *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;             *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt;             will now abort,
</span><br>
<span class="quotelev1">&gt;             ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38416] Local abort before MPI_INIT
</span><br>
<span class="quotelev1">&gt;             completed successfully; not able to aggregate error
</span><br>
<span class="quotelev1">&gt;             messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt;             processes were killed!
</span><br>
<span class="quotelev1">&gt;             *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;             *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;             *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt;             will now abort,
</span><br>
<span class="quotelev1">&gt;             ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38417] Local abort before MPI_INIT
</span><br>
<span class="quotelev1">&gt;             completed successfully; not able to aggregate error
</span><br>
<span class="quotelev1">&gt;             messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt;             processes were killed!
</span><br>
<span class="quotelev1">&gt;             -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;             a non-zero exit code.. Per user-direction, the job has
</span><br>
<span class="quotelev1">&gt;             been aborted.
</span><br>
<span class="quotelev1">&gt;             -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             mpirun detected that one or more processes exited with
</span><br>
<span class="quotelev1">&gt;             non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt;             the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Process name: [[52507,1],0]
</span><br>
<span class="quotelev1">&gt;               Exit code:    1
</span><br>
<span class="quotelev1">&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38410] 3 more processes have sent help
</span><br>
<span class="quotelev1">&gt;             message help-mca-base.txt / find-available:not-valid
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38410] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;             &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
</span><br>
<span class="quotelev1">&gt;             messages
</span><br>
<span class="quotelev1">&gt;             [stallo-2.local:38410] 2 more processes have sent help
</span><br>
<span class="quotelev1">&gt;             message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 at first glance, your test program looks correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 can you please try to run
</span><br>
<span class="quotelev1">&gt;                 mpirun --mca osc pt2pt -np 4 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I  might have identified a bug with the sm osc component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Tuesday, February 2, 2016, Peter Wind
</span><br>
<span class="quotelev1">&gt;                 &lt;peter.wind_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Enclosed is a short (&lt; 100 lines) fortran code
</span><br>
<span class="quotelev1">&gt;                     example that uses shared memory.
</span><br>
<span class="quotelev1">&gt;                     It seems to me it behaves wrongly if openmpi is used.
</span><br>
<span class="quotelev1">&gt;                     Compiled with SGI/mpt , it gives the right result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     To fail, the code must be run on a single node.
</span><br>
<span class="quotelev1">&gt;                     It creates two groups of 2 processes each. Within
</span><br>
<span class="quotelev1">&gt;                     each group memory is shared.
</span><br>
<span class="quotelev1">&gt;                     The error is that the two groups get the same
</span><br>
<span class="quotelev1">&gt;                     memory allocated, but they should not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and
</span><br>
<span class="quotelev1">&gt;                     gfortran, intel 13.0, intel 14.0
</span><br>
<span class="quotelev1">&gt;                     all fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     The call:
</span><br>
<span class="quotelev1">&gt;                        call MPI_Win_allocate_shared(win_size,
</span><br>
<span class="quotelev1">&gt;                     disp_unit, MPI_INFO_NULL, comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Should allocate memory only within the group. But
</span><br>
<span class="quotelev1">&gt;                     when the other group allocates memory, the
</span><br>
<span class="quotelev1">&gt;                     pointers from the two groups point to the same
</span><br>
<span class="quotelev1">&gt;                     address in memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Could you please confirm that this is the wrong
</span><br>
<span class="quotelev1">&gt;                     behaviour?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Best regards,
</span><br>
<span class="quotelev1">&gt;                     Peter Wind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 Subscription:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                 Link to this post:
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2016/02/28429.php">http://www.open-mpi.org/community/lists/users/2016/02/28429.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/02/28431.php">http://www.open-mpi.org/community/lists/users/2016/02/28431.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28436.php">http://www.open-mpi.org/community/lists/users/2016/02/28436.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28444.php">Jingchao Zhang: "[OMPI users] Conflicting directives for mapping policy"</a>
<li><strong>Previous message:</strong> <a href="28442.php">Jeff Hammond: "Re: [OMPI users] MX replacement?"</a>
<li><strong>In reply to:</strong> <a href="28436.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
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
