<?
$subject_val = "Re: [OMPI users] MPI loop problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 10:32:24 2009" -->
<!-- isoreceived="20090818143224" -->
<!-- sent="Tue, 18 Aug 2009 08:32:19 -0600" -->
<!-- isosent="20090818143219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI loop problem" -->
<!-- id="71d2d8cc0908180732r4ff3ae36i11aa7518fa02c31e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18486.69545.qm_at_web51310.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI loop problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 10:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10406.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10404.php">Julia He: "[OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10404.php">Julia He: "[OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, but there is no way to answer this question with what is given. What
<br>
is &quot;my_sub&quot; doing? Which version of OpenMPI are you talking about, and on
<br>
what platform?
<br>
<p><p><p>On Tue, Aug 18, 2009 at 8:28 AM, Julia He &lt;springwater4he_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that the subroutine call inside a loop did not return correct value
</span><br>
<span class="quotelev1">&gt; after certain iterations. In order to simplify the problem, the inputs to
</span><br>
<span class="quotelev1">&gt; the subroutine are chosen to be constant, so the output should be the same
</span><br>
<span class="quotelev1">&gt; for every iteration on every computing node. It is a fortran program, after
</span><br>
<span class="quotelev1">&gt; the initialization the program goes like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do i = 1, N
</span><br>
<span class="quotelev1">&gt;   call my_sub(A, B, C, re)
</span><br>
<span class="quotelev1">&gt;   print *,  mypn, A, B, C, re
</span><br>
<span class="quotelev1">&gt; end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where re is the output value of the my_sub, A, B, C are inputs to my_sub.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 570 is the number of correct iterations. If the combined instances does not
</span><br>
<span class="quotelev1">&gt; exceed 570, the output is fine. For example, if I requested 10 computing
</span><br>
<span class="quotelev1">&gt; nodes and N were 40, so it gives 10*40=400 instances, the output would be
</span><br>
<span class="quotelev1">&gt; fine. But if the combined instances exceeded 570, the first 570 is fine, but
</span><br>
<span class="quotelev1">&gt; the rest will return NaN value. For example, if the number of computing
</span><br>
<span class="quotelev1">&gt; nodes were 20 and N were 40, which gives 20*40=800 instances, then the first
</span><br>
<span class="quotelev1">&gt; 570 are fine, but the rest are NaN value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does someone know what might cause the problem? I googled it, but can't
</span><br>
<span class="quotelev1">&gt; find a clue where to start. Please also let me know what else you need to
</span><br>
<span class="quotelev1">&gt; debug the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Julia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam? Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10405/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10406.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10404.php">Julia He: "[OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10404.php">Julia He: "[OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
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
