<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 21 13:50:45 2013" -->
<!-- isoreceived="20130821175045" -->
<!-- sent="Wed, 21 Aug 2013 18:50:43 +0100" -->
<!-- isosent="20130821175043" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="87siy3orv0.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPqNE2VPJ4x0bNAFsb6QSMPixrfpRVh-drdsqf6JECf+MvjUiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-21 13:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22507.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Hearns &lt;hearnsj_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; You really should install a job scheduler.
</span><br>
<p>Indeed (although it's the resource management component that does the
<br>
job).
<br>
<p><span class="quotelev1">&gt; There are free versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure about cpuset support in Gridengine. Anyone?
</span><br>
<p>Yes, but I've had reports of problems (races?) that I haven't sorted out
<br>
yet.
<br>
<p>I wouldn't bother anyway.  Just use core binding supplied by the
<br>
resource manager with well-behaved jobs (Use &quot;-binding linear:slots&quot;
<br>
with the current SGE, assuming you want to pack arbitrary jobs onto
<br>
nodes.)  Cpusets help with badly-behaved jobs, but don't have much to
<br>
offer over core binding with well-behaved ones.  &quot;Well-behaved&quot; means
<br>
they request the right number of slots, don't daemonize, and don't try
<br>
to escape the binding they're handed; that includes simple OMPI ones
<br>
with tight integration working properly.  If you really care about
<br>
avoiding specific cores (why?), you could submit other jobs to block them.
<br>
<p>[&quot;CPU-shielding&quot; is a new one on me.]
<br>
<p><pre>
-- 
Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22507.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
