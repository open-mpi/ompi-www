<?
$subject_val = "[OMPI devel] Process affinity detection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 17:27:59 2016" -->
<!-- isoreceived="20160426212759" -->
<!-- sent="Tue, 26 Apr 2016 14:27:51 -0700" -->
<!-- isosent="20160426212751" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sjeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Process affinity detection" -->
<!-- id="571FDD57.9070408_at_nvidia.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Process affinity detection<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sjeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 17:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18822.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<li><strong>Previous message:</strong> <a href="18820.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18822.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<li><strong>Reply:</strong> <a href="18822.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Within the BTL code (and surely elsewhere), we can use those convenient 
<br>
OPAL_PROC_ON_LOCAL_{NODE,SOCKET, ...} macros to figure out where another 
<br>
endpoint is located compared to us.
<br>
<p>The problem is that it only works when ORTE defines it. The NODE works 
<br>
almost always since ORTE is always doing it. But for the NUMA, SOCKET, 
<br>
or CORE to work, we need to use Open MPI binding/mapping capabilities. 
<br>
If the process affinity was set with something else (custom scripts 
<br>
using taskset, cpusets, ...), it doesn't work.
<br>
<p>How hard do you think it would it be to detect the affinity and set 
<br>
those flags using hwloc to figure out if we're on the same {SOCKET, 
<br>
CORE, ...} ? Where would it be simpler to do this ?
<br>
<p>Thanks.
<br>
Sylvain
<br>
<p>-----------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18822.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<li><strong>Previous message:</strong> <a href="18820.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc MTT failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18822.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<li><strong>Reply:</strong> <a href="18822.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
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
