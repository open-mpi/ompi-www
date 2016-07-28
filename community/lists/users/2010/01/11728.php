<?
$subject_val = "Re: [OMPI users] MPI debugger";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 10 14:29:29 2010" -->
<!-- isoreceived="20100110192929" -->
<!-- sent="Sun, 10 Jan 2010 19:29:18 +0000" -->
<!-- isosent="20100110192918" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI debugger" -->
<!-- id="1263151759.3456.7.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5fe0e7a41001072206t2bdc78adm59302c5fe60b4419_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI debugger<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-10 14:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<li><strong>Previous message:</strong> <a href="11727.php">Jeff Squyres: "Re: [OMPI users] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="11724.php">Arunkumar C R: "[OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<li><strong>Reply:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-01-08 at 11:36 +0530, Arunkumar C R wrote:
<br>
<p><span class="quotelev1">&gt; I do MPI programs using Fortran 90 in a Quad Core Machine with Fedora
</span><br>
<span class="quotelev1">&gt; OS. Could any one of you suggest a good debugger to resolve the
</span><br>
<span class="quotelev1">&gt; compilation/ run time errors?
</span><br>
<p>It depends on what you mean by a debugger, there are two &quot;parallel
<br>
debuggers&quot; on the market, TotalView and DDT, both closed source and
<br>
fairly expensive.  They are both graphical apps that allow you to start
<br>
a job under their control or attach to existing jobs and allow full view
<br>
of the job and control it's execution (stepping and setting breakpoints
<br>
as you would in a non-parallel debugger).
<br>
<p>There is also padb which is a tool I develop, it's open-source and
<br>
command line based, it doesn't allow you to dig as deep but does provide
<br>
a lot of information about the state of a parallel job.  It'll show you
<br>
parallel stack traces but won't let you single step for example.
<br>
<p>The most basic way of using it and sample output are on-line here: 
<br>
<a href="http://padb.pittman.org.uk/full-report.html">http://padb.pittman.org.uk/full-report.html</a>
<br>
<p>All three of these tools will allow you to see the &quot;Message queues&quot;
<br>
contained within the parallel job as well.
<br>
<p>In addition I believe Eclipse has some support for parallel programs,
<br>
I've not used it however so can't comment on it's features.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<li><strong>Previous message:</strong> <a href="11727.php">Jeff Squyres: "Re: [OMPI users] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="11724.php">Arunkumar C R: "[OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<li><strong>Reply:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
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
