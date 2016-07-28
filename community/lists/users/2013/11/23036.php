<?
$subject_val = "[OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 17:13:48 2013" -->
<!-- isoreceived="20131123221348" -->
<!-- sent="Sat, 23 Nov 2013 22:13:26 +0000" -->
<!-- isosent="20131123221326" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="[OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="CEB66885.45D32%knteran_at_sandia.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 17:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23035.php">Venkat Reddy: "Re: [OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed OpenMPI on our small XE6 using the configure options under /contrib directory.  It appears it is working fine, but it ignores MCA parameters (set in env var).  So I switched to mpirun (in OpenMPI) and it can handle MCA parameters somehow.  However,  mpirun fails to allocate process by cores.  For example, I allocated 32 cores (on 2 nodes) by &quot;qsub &#150;lmppwidth=32 &#150;lmppnppn=16&quot;, mpirun recognizes it as 2 slots.    Is it possible to mpirun to handle mluticore nodes of XE6 properly or is there any options to handle MCA parameters for aprun?
<br>
<p>Regards,
<br>
-----------------------------------------------------------------------------
<br>
Keita Teranishi
<br>
Principal Member of Technical Staff
<br>
Scalable Modeling and Analysis Systems
<br>
Sandia National Laboratories
<br>
Livermore, CA 94551
<br>
+1 (925) 294-3738
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23035.php">Venkat Reddy: "Re: [OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23037.php">Ralph Castain: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Reply:</strong> <a href="23058.php">Nathan Hjelm: "Re: [OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
