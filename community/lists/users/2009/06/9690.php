<?
$subject_val = "[OMPI users] Adjust the polling frequency in ompi ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 17:43:05 2009" -->
<!-- isoreceived="20090623214305" -->
<!-- sent="Tue, 23 Jun 2009 15:42:56 -0600" -->
<!-- isosent="20090623214256" -->
<!-- name="Hsing-bung Chen" -->
<!-- email="hbchen_at_[hidden]" -->
<!-- subject="[OMPI users] Adjust the polling frequency in ompi ?" -->
<!-- id="4A414C60.40603_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Adjust the polling frequency in ompi ?<br>
<strong>From:</strong> Hsing-bung Chen (<em>hbchen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 17:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9691.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9697.php">Jeff Squyres: "Re: [OMPI users] Adjust the polling frequency in ompi ?"</a>
<li><strong>Reply:</strong> <a href="9697.php">Jeff Squyres: "Re: [OMPI users] Adjust the polling frequency in ompi ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI,
<br>
Is  this the right way to adjust the polling frequency in ompi?
<br>
<p>in  opal_progress.h
<br>
00141 OPAL_DECLSPEC void opal_progress_set_event_poll_rate(int 
<br>
microseconds);
<br>
<p>in  opal_progress.c
<br>
Default setup in OpenMPI - tick rate = 10000 
<br>
00106     /* set the event tick rate */
<br>
00107     opal_progress_set_event_poll_rate(10000);
<br>
<p>What if I change it to the polling tick rate from 10000 to 100000
<br>
<p>00106     /* set the event tick rate */
<br>
00107     opal_progress_set_event_poll_rate(100000);
<br>
<p>Is this going to slow down the polling frequency ?
<br>
Thanks.
<br>
<p><p>HB
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9691.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9689.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v	1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9697.php">Jeff Squyres: "Re: [OMPI users] Adjust the polling frequency in ompi ?"</a>
<li><strong>Reply:</strong> <a href="9697.php">Jeff Squyres: "Re: [OMPI users] Adjust the polling frequency in ompi ?"</a>
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
