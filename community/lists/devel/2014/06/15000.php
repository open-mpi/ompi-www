<?
$subject_val = "[OMPI devel] Open MPI Core Developer - Minutes June 10, 2014";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 14:37:39 2014" -->
<!-- isoreceived="20140610183739" -->
<!-- sent="Tue, 10 Jun 2014 11:37:36 -0700" -->
<!-- isosent="20140610183736" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI Core Developer - Minutes June 10, 2014" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3604701DB8B_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI Core Developer - Minutes June 10, 2014<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 14:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15001.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="14999.php">Greg Thomsen: "[OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Minutes of June 10, 2014 Open MPI Core Developer Meeting
<br>
<p><p>1.       Review 1.6 - Nothing new
<br>
<p>2.       Review 1.8 - Most things are doing fine.  Still several tickets awaiting review.  If influx of bugs slows, then we will get 1.8.2 release ready.  Rolf was concerned about intermittent hangs, but needs to investigate.
<br>
<p>3.       Some discussion of RFC process.  Keep it as is for now, but will discuss again at developers meeting
<br>
<p>4.       Slurm is difficult to support because the slurm code is constantly changing.  This makes it very difficult to support different versions and creates lots of integration issues with ORTE.  Someone needs to step up and help Ralph with supporting slurm.  Joshua Ladd says Mellanox can perhaps help with this.
<br>
<p>5.       Discussion about adding STCI component to OMPI/RTE framework.  Sounds like everyone is good with it going in.
<br>
<p>6.       UDCM bug - problem is with user system, not with UDCM.  But maybe we still need to do something so that UDCM fails in a better way.  Nathan investigating.
<br>
<p>7.       Jeff opened up a blocker bug - missing fortran APIs
<br>
<p>8.       Ralph talked about the idea that he will be bringing back a &quot;minimizing the modex&quot; feature.  Used to have something that would check whether we needed endpoint information, and if it was not needed, we would just fall through and skip the barrier.  This functionality has atrophied, but Ralph is hoping to restore it.
<br>
<p>9.       As much as we would like a link to the email message on the email to the user or development list, it is not easy to implement.  So, it will not be happening.
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15001.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="14999.php">Greg Thomsen: "[OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
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
