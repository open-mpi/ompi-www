<?
$subject_val = "Re: [OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 07:28:13 2016" -->
<!-- isoreceived="20160202122813" -->
<!-- sent="Tue, 2 Feb 2016 21:28:12 +0900" -->
<!-- isosent="20160202122812" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory under fortran, bug?" -->
<!-- id="CAAkFZ5uXMq+3P-fNZC3QvkFSN4wpinP6XAxQ93fDgXh7S8c3_A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1397268221.14232118.1454408268047.JavaMail.zimbra_at_met.no" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 07:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28428.php">Peter Wind: "[OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28428.php">Peter Wind: "[OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter,
<br>
<p>at first glance, your test program looks correct.
<br>
<p>can you please try to run
<br>
mpirun --mca osc pt2pt -np 4 ...
<br>
<p>I  might have identified a bug with the sm osc component.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, February 2, 2016, Peter Wind &lt;peter.wind_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Enclosed is a short (&lt; 100 lines) fortran code example that uses shared
</span><br>
<span class="quotelev1">&gt; memory.
</span><br>
<span class="quotelev1">&gt; It seems to me it behaves wrongly if openmpi is used.
</span><br>
<span class="quotelev1">&gt; Compiled with SGI/mpt , it gives the right result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To fail, the code must be run on a single node.
</span><br>
<span class="quotelev1">&gt; It creates two groups of 2 processes each. Within each group memory is
</span><br>
<span class="quotelev1">&gt; shared.
</span><br>
<span class="quotelev1">&gt; The error is that the two groups get the same memory allocated, but they
</span><br>
<span class="quotelev1">&gt; should not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel
</span><br>
<span class="quotelev1">&gt; 14.0
</span><br>
<span class="quotelev1">&gt; all fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The call:
</span><br>
<span class="quotelev1">&gt;    call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt; comm_group, cp1, win, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should allocate memory only within the group. But when the other group
</span><br>
<span class="quotelev1">&gt; allocates memory, the pointers from the two groups point to the same
</span><br>
<span class="quotelev1">&gt; address in memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please confirm that this is the wrong behaviour?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Peter Wind
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28429/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28428.php">Peter Wind: "[OMPI users] shared memory under fortran, bug?"</a>
<li><strong>In reply to:</strong> <a href="28428.php">Peter Wind: "[OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28430.php">Peter Wind: "Re: [OMPI users] shared memory under fortran, bug?"</a>
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
