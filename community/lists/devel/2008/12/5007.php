<?
$subject_val = "[OMPI devel] BTL move - the notion";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 20:00:57 2008" -->
<!-- isoreceived="20081205010057" -->
<!-- sent="Thu, 04 Dec 2008 20:00:16 -0500" -->
<!-- isosent="20081205010016" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL move - the notion" -->
<!-- id="C55DE750.2BF37%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] BTL move - the notion<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 20:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5008.php">Terry Dontje: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5006.php">Richard Graham: "Re: [OMPI devel] Jan ORTE meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5009.php">Terry Dontje: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5009.php">Terry Dontje: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5011.php">Ralph Castain: "Re: [OMPI devel] BTL move - the notion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me start the e-mail conversation, and see how far we get.
<br>
<p>Goal: The goal several of us have is to be able to use the btl&#185;s outside of
<br>
the MPI layer in Open MPI.  The layer itself is generic, w/o specific
<br>
knowledge of Upper Level Protocols, so is well suited for this sort of use.
<br>
<p>Technical Approach: What we have suggested is to start the process with the
<br>
Open MPI code base, and make it independent of the mpi-layer (which it is
<br>
now), and the run-time layer.
<br>
<p>Before we get into any specific technical details,
<br>
the first question I have is are people totally opposed to the notion of
<br>
making the btl&#185;s independent of MPI and the run-time ?
<br>
This does not mean that it can&#185;t be used by it, but that there are well
<br>
defined abstraction layers, i.e., are people against the goal in the first
<br>
place ?
<br>
<p>What are alternative suggestions to the technical approach ?
<br>
<p>One suggestion has been to branch and patch.  To me this is a long-term
<br>
maintenance nightmare.
<br>
<p>What are peoples thoughts here ?
<br>
<p>Rich
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5008.php">Terry Dontje: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5006.php">Richard Graham: "Re: [OMPI devel] Jan ORTE meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5009.php">Terry Dontje: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5009.php">Terry Dontje: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>Reply:</strong> <a href="5011.php">Ralph Castain: "Re: [OMPI devel] BTL move - the notion"</a>
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
