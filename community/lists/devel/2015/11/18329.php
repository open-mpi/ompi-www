<?
$subject_val = "[OMPI devel] Doodle to find time to discuss issues/398";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 12:29:35 2015" -->
<!-- isoreceived="20151103172935" -->
<!-- sent="Tue, 3 Nov 2015 17:29:20 +0000" -->
<!-- isosent="20151103172920" -->
<!-- name="Geoffrey Paulsen" -->
<!-- email="gpaulsen_at_[hidden]" -->
<!-- subject="[OMPI devel] Doodle to find time to discuss issues/398" -->
<!-- id="201511031729.tA3HTRki015699_at_d03av01.boulder.ibm.com" -->
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
<strong>Subject:</strong> [OMPI devel] Doodle to find time to discuss issues/398<br>
<strong>From:</strong> Geoffrey Paulsen (<em>gpaulsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 12:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18330.php">Rolf vandeVaart (via Doodle): "[OMPI devel] Open MPI Weely Meetings"</a>
<li><strong>Previous message:</strong> <a href="18328.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<div class="socmaildefaultfont" dir="ltr" style="font-family:Arial;font-size:10.5pt" ><div class="socmaildefaultfont" dir="ltr" style="font-family:Arial;font-size:10.5pt" ><div dir="ltr" >Anyone interested, please add your name to doodle, and we'll find a time that everyone can meet.</div>
<div dir="ltr" >&nbsp;</div>
<div dir="ltr" ><a href="http://doodle.com/poll/3gk6bx4dzgrpsqva" >http://doodle.com/poll/3gk6bx4dzgrpsqva</a></div>
<div dir="ltr" >&nbsp;</div>
<div dir="ltr" >--- Agenda ---</div>
<div dir="ltr" >&nbsp;</div>
<div dir="ltr" >In the Open MPI call today we discussed a few aspects of&nbsp;<br><a href="https://github.com/open-mpi/ompi/issues/398" >https://github.com/open-mpi/ompi/issues/398</a><br>1) Moving ompi_info_t down to opal_info_t to allow lower level components access to this functionality<br>2) Implementing OMPI_Comm_Info get/set in a way that can be reused for Windows and Files also. &nbsp; There are a number of issues around how the standard words the return values from get() that are left up to the implementation, for example:<br>&nbsp; - values for non-explicitly set keys that the MPI layer is using.<br>&nbsp; - values for non-explicitly set keys that the MPI layer is not using.<br>&nbsp; - values for explicitly overwritten values.<br>&nbsp; - Communication (to user via docs??) of what hints Open MPI recognizes.<br>&nbsp; - Communication (to user via docs??) of what values are required to be the same/different on all ranks of Comm.<br>&nbsp; - additional consistancy checking of values in debugging mode?<br>&nbsp; - ability to print/log unrecognized hints.<br>&nbsp;&nbsp;</div>
<div dir="ltr" ><br>---<br>Geoffrey Paulsen<br>Software Engineer, IBM Platform MPI<br>IBM Platform-MPI<br>Phone: 720-349-2832<br>Email: gpaulsen@us.ibm.com<br>www.ibm.com</div></div></div><BR>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18330.php">Rolf vandeVaart (via Doodle): "[OMPI devel] Open MPI Weely Meetings"</a>
<li><strong>Previous message:</strong> <a href="18328.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
