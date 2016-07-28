<?
$subject_val = "[OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 29 08:58:21 2009" -->
<!-- isoreceived="20090329125821" -->
<!-- sent="Sun, 29 Mar 2009 14:58:14 +0200" -->
<!-- isosent="20090329125814" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)" -->
<!-- id="49CF7066.4050703_at_irisa.fr" -->
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
<strong>Subject:</strong> [OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-29 08:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5732.php">Steve Wise: "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm working on message logging. So my test is the following one :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- I start a single MPI process that is going to log the messages.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Then I start a MPI application and every process of my application 
<br>
connect to the &quot;logger&quot; to save the messages.
<br>
<p>With revision 20888 of the trunk, I observed a strange behavior: When I 
<br>
provide a machinefile containing more machines than the application 
<br>
needs, I get a segmentation fault when the application processes try to 
<br>
connect to the logger:
<br>
<p>&nbsp;Invalid read of size 8
<br>
==3031==    at 0x53E2412: orte_grpcomm_base_full_modex 
<br>
(grpcomm_base_modex.c:201)
<br>
==3031==    by 0x7B30678: modex (grpcomm_bad_module.c:381)
<br>
==3031==    by 0x936FE2B: connect_accept (dpm_orte.c:377)
<br>
<p>But if the machinefile contains exactly the number of machines needed by 
<br>
the application, it works.
<br>
<p><p>Best regards,
<br>
<p>Thomas Ropars
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5732.php">Steve Wise: "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
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
