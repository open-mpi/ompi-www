<?
$subject_val = "[OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 16:12:53 2012" -->
<!-- isoreceived="20120509201253" -->
<!-- sent="Wed, 09 May 2012 22:12:38 +0200" -->
<!-- isosent="20120509201238" -->
<!-- name="Jiri Polach" -->
<!-- email="jiri.polach_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with SGE: &amp;quot;-np N&amp;quot; for mpirun needed?" -->
<!-- id="4FAACFB6.6070401_at_seznam.cz" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?<br>
<strong>From:</strong> Jiri Polach (<em>jiri.polach_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 16:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Previous message:</strong> <a href="19238.php">Shamis, Pavel: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Reply:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>is &quot;-np N&quot; parameter needed for mpirun when running jobs under SGE 
<br>
environment? All examples in
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
<br>
<p>show that &quot;-np N&quot; is used, but in my opinion it should be redundant: 
<br>
mpirun should determine all parameters from SGE environment anyway. If 
<br>
there is &quot;no need to specify what nodes to run on&quot; (as stated in FAQ), 
<br>
it should not be necessary to specify the number of processors either.
<br>
<p>I ran some tests and it seems that mpirun correctly gets number of 
<br>
processors from SGE, but I would like to have some more solid confirmation.
<br>
<p>Best regards,
<br>
<p>Jiri Polach
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Previous message:</strong> <a href="19238.php">Shamis, Pavel: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
<li><strong>Reply:</strong> <a href="19240.php">Ricardo Reis: "Re: [OMPI users] OpenMPI with SGE: &quot;-np N&quot; for mpirun needed?"</a>
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
