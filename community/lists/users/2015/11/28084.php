<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 09:25:10 2015" -->
<!-- isoreceived="20151120142510" -->
<!-- sent="Fri, 20 Nov 2015 14:25:06 +0000" -->
<!-- isosent="20151120142506" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="877flcg33x.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=u+qOxN-=c9ZOpER3bzThQO70xZoNEUtMxWNTqOi3TYf+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 09:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28083.php">Dave Love: "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)"</a>
<li><strong>In reply to:</strong> <a href="28072.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; Doesn't mpich have the option to use sysv memory?  You may want to try that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; MPICH?  Look, I may have earned my way onto Santa's naughty list more than
</span><br>
<span class="quotelev1">&gt; a few times, but at least I have the decency not to post MPICH questions to
</span><br>
<span class="quotelev1">&gt; the Open-MPI list ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a way to tell Open-MPI to use shm_open without filesystem
</span><br>
<span class="quotelev1">&gt; backing (if that is even possible) at configure time, I'd love to do that.
</span><br>
<p>I'm not sure I understand what's required, but is this what you're after?
<br>
<p>&nbsp;&nbsp;$ ompi_info --param shmem all -l 9|grep priority
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: parameter &quot;shmem_mmap_priority&quot; (current value: &quot;50&quot;, data source: default, level: 3 user/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: parameter &quot;shmem_posix_priority&quot; (current value: &quot;40&quot;, data source: default, level: 3 user/all, type: int)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA shmem: parameter &quot;shmem_sysv_priority&quot; (current value: &quot;30&quot;, data source: default, level: 3 user/all, type: int)
<br>
<p><span class="quotelev2">&gt;&gt; In the spirit OMPI - may the force be with you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; All I will say here is that Open-MPI has a Vader BTL :-)
</span><br>
<p>Whatever that might mean.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28083.php">Dave Love: "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)"</a>
<li><strong>In reply to:</strong> <a href="28072.php">Jeff Hammond: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
