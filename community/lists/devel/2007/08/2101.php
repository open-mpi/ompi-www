<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  9 16:49:56 2007" -->
<!-- isoreceived="20070809204956" -->
<!-- sent="Thu, 9 Aug 2007 14:49:47 -0600" -->
<!-- isosent="20070809204947" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] Collectives interface change" -->
<!-- id="77BB42D4-BFCF-4C0B-BE9E-A6E627255009_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-09 16:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2102.php">Andreas Knüpfer: "[OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2100.php">Jeff Squyres: "[OMPI devel] Changing btp_openib_receive_queues default value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2141.php">Li-Ta Lo: "Re: [OMPI devel] Collectives interface change"</a>
<li><strong>Reply:</strong> <a href="2141.php">Li-Ta Lo: "Re: [OMPI devel] Collectives interface change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>There was significant discussion this week at the collectives meeting  
<br>
about improving the selection logic for collective components.  While  
<br>
we'd like the automated collectives selection logic laid out in the  
<br>
Collv2 document, it was decided that as a first step, we would allow  
<br>
more than one + basic compnents to be used for a given communicator.
<br>
<p>This mandated the change of a couple of things in the collectives  
<br>
interface, namely how collectives module data is found (passed into a  
<br>
function, rather tha a static pointer on the component) and a bit of  
<br>
the initialization sequence.
<br>
<p>The revised interface and the rest of the code is available in an svn  
<br>
temp branch:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi/tmp/bwb-coll-select">https://svn.open-mpi.org/svn/ompi/tmp/bwb-coll-select</a>
<br>
<p>Thus far, most of the components in common use have been updated.   
<br>
The notable exception is the tuned collectives routine, which Ollie  
<br>
is updating in the near future.
<br>
<p>If you have any comments on the changes, please let me know.  If not,  
<br>
the changes will move to the trunk once Ollie is completed with  
<br>
updating the tuned component.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2102.php">Andreas Knüpfer: "[OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2100.php">Jeff Squyres: "[OMPI devel] Changing btp_openib_receive_queues default value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2141.php">Li-Ta Lo: "Re: [OMPI devel] Collectives interface change"</a>
<li><strong>Reply:</strong> <a href="2141.php">Li-Ta Lo: "Re: [OMPI devel] Collectives interface change"</a>
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
