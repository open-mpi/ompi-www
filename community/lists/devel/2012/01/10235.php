<?
$subject_val = "[OMPI devel] Violating standard in MPI_Close_port";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 03:28:11 2012" -->
<!-- isoreceived="20120120082811" -->
<!-- sent="Fri, 20 Jan 2012 17:28:03 +0900" -->
<!-- isosent="20120120082803" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] Violating standard in MPI_Close_port" -->
<!-- id="4F192593.3030305_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Violating standard in MPI_Close_port<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 03:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10234.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 Solaris results [libtool problem]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>Reply:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Next is question about &quot;MPI_Close_port&quot;.
<br>
According to the MPI-2.2 standard, 
<br>
the &quot;port_name&quot; argument of
<br>
MPI_Close_port() is marked as 'IN'.
<br>
But, in Open MPI (both trunk and 1.4.x), the content of
<br>
&quot;port_name&quot; is updated in MPI_Close_port().
<br>
It seems to violate the MPI standard.
<br>
<p>The following is the suspicious part.
<br>
---ompi/mca/dpm/orte/dpm_orte.c---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;919 static int close_port(char *port_name)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;920 {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;921     /* the port name is a pointer to an array - DO NOT FREE IT! */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;922     memset(port_name, 0, MPI_MAX_PORT_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;923     return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;924 }
<br>
---ompi/mca/dpm/orte/dpm_orte.c---
<br>
<p>This memset makes &quot;port_name&quot; &quot;INOUT&quot;.
<br>
Would you tell me why call this memset?
<br>
<p>Best regards,
<br>
Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10234.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 Solaris results [libtool problem]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>Reply:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
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
