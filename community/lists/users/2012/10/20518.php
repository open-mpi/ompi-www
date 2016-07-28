<?
$subject_val = "[OMPI users] Java binding requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 24 00:50:56 2012" -->
<!-- isoreceived="20121024045056" -->
<!-- sent="Wed, 24 Oct 2012 13:51:01 +0900" -->
<!-- isosent="20121024045101" -->
<!-- name="Yoshiki SATO" -->
<!-- email="yoshiki_at_[hidden]" -->
<!-- subject="[OMPI users] Java binding requirements" -->
<!-- id="08FA02FE-6E69-4B64-BF31-226C6EC6B4D0_at_ci.i.u-tokyo.ac.jp" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Java binding requirements<br>
<strong>From:</strong> Yoshiki SATO (<em>yoshiki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-24 00:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20519.php">Nicolas Deladerriere: "[OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20517.php">Mahmood Naderan: "[OMPI users] Low cpu utilization due to high IO operations of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Reply:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Recently, I tried to use Java bindings in Open MPI released this February.  As far as mentioned in the Java FAQ ( <a href="http://www.open-mpi.org/faq/?category=java">http://www.open-mpi.org/faq/?category=java</a> ), the Java binding implementation doesn't cause any performance degradation because of just wrapping native Open MPI with mpiJava-based APIs.  I believe this means no Java code is required to run on all processing nodes (workers) but it has only to run on a master node.  Is this understanding correct?
<br>
<p>If so, my question is if I need NOT to install JDK to the all nodes.  In other words is it possible to have a machine used as a worker without JDK installed?
<br>
<p>Thanks a lot for any comment in advance.
<br>
<p>Regards,
<br>
--yoshiki
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20519.php">Nicolas Deladerriere: "[OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20517.php">Mahmood Naderan: "[OMPI users] Low cpu utilization due to high IO operations of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Reply:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
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
