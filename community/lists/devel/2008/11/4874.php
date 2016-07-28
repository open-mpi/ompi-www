<?
$subject_val = "[OMPI devel] Dropped message for the non-existing communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 09:41:54 2008" -->
<!-- isoreceived="20081108144154" -->
<!-- sent="Sat, 08 Nov 2008 09:41:49 -0500" -->
<!-- isosent="20081108144149" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] Dropped message for the non-existing communicator" -->
<!-- id="4915A52D.1070107_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] Dropped message for the non-existing communicator<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-08 09:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4873.php">Rolf Vandevaart: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Reply:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing the message &quot;Dropped message for the non-existing 
<br>
communicator&quot; when running hpcc with np=124 against r19845.  This seems 
<br>
to be pretty reproducible at np=124.  When the job prints out the 
<br>
message above some set of processes are in an MPI_Bcast and the 15 
<br>
processes reporting the message are stuck in MPI_Barrier. 
<br>
<p>I am not sure how related this is to #1408 since I am not invoking the 
<br>
hierarchical collectives.  I just wanted to see if anyone else has tried 
<br>
to run hpcc at such an np size with any success.
<br>
<p>My next steps are to try to run this with the latest trunk and to narrow 
<br>
down the failing case.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4873.php">Rolf Vandevaart: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Reply:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
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
