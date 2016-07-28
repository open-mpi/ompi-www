<?
$subject_val = "[OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 01:54:11 2010" -->
<!-- isoreceived="20100713055411" -->
<!-- sent="Tue, 13 Jul 2010 07:58:56 +0200" -->
<!-- isosent="20100713055856" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="1279000736.15370.918.camel_at_B014522" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 01:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8176.php">Jeff Squyres: "[OMPI devel] OMPI #2477"</a>
<li><strong>Previous message:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When the asynchronous events device handler(btl_openib_async_deviceh())
<br>
gets an async event and XRC is enabled, the XRC bit is cleared to
<br>
process the event_type value, but orte_show_help is called with the
<br>
event_type original value (i.e. XRC bit still present). This leads to
<br>
the following kind of message:
<br>
<p>&nbsp;&nbsp;----------------------------------------------------------
<br>
&nbsp;&nbsp;The OpenFabrics stack has reported a network error event. Open MPI
<br>
&nbsp;&nbsp;will try to continue. but your job may end up failing.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:       XXXX
<br>
&nbsp;&nbsp;&nbsp;MPI process PID:  31818
<br>
&nbsp;&nbsp;&nbsp;Error number:     -2147483645 (UNKNOWN)
<br>
&nbsp;&nbsp;This error may indicate connectivity problems within the fabric;
<br>
&nbsp;&nbsp;please contact your system administrator
<br>
&nbsp;&nbsp;-----------------------------------------------------------
<br>
<p>While the expected error number is 
<br>
&nbsp;&nbsp;Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
<br>
<p>I propose the attached small patch to fix this issue.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8175/001_async_event_type.patch">001_async_event_type.patch</a>
</ul>
<!-- attachment="001_async_event_type.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8176.php">Jeff Squyres: "[OMPI devel] OMPI #2477"</a>
<li><strong>Previous message:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
