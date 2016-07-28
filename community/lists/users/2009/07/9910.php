<?
$subject_val = "Re: [OMPI users] Problems in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 17:11:15 2009" -->
<!-- isoreceived="20090710211115" -->
<!-- sent="Fri, 10 Jul 2009 22:11:22 +0100" -->
<!-- isosent="20090710211122" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in OpenMPI" -->
<!-- id="1247260282.3718.4.camel_at_alpha" -->
<!-- inreplyto="1e8c69dc0907101235w7ba2a0c4gef93f3d86c643354_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in OpenMPI<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 17:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>Previous message:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-07-10 at 14:35 -0500, Yin Feng wrote:
<br>
<span class="quotelev1">&gt; I have my code run on supercomputer.
</span><br>
<span class="quotelev1">&gt; First, I required allocation and then just run my code using mpirun.
</span><br>
<span class="quotelev1">&gt; The supercomputer will assign 4 nodes but they are different at each
</span><br>
<span class="quotelev1">&gt; time of requirement. So, I don't know the machines I will use before
</span><br>
<span class="quotelev1">&gt; it runs.
</span><br>
<span class="quotelev1">&gt; Do you know how to figure out under this situation?
</span><br>
<p>The answer depends on what scheduler the computer is using, if it's
<br>
using SGE then I believe it's enough to compile Open-MPI with the
<br>
--with-sge flag and it figures it out for itself.  You'll probably need
<br>
to check with the local admins for a definitive answer.
<br>
<p>Ashley,
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
<li><strong>Next message:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>Previous message:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9932.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
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
