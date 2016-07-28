<?
$subject_val = "[OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 05:09:01 2010" -->
<!-- isoreceived="20100525090901" -->
<!-- sent="Tue, 25 May 2010 11:10:02 +0200 (CEST)" -->
<!-- isosent="20100525091002" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1005251055360.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 05:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7989.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7989.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7989.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently trying to have Open MPI exit more gracefully when a BTL 
<br>
returns an error during the &quot;add procs&quot; phase.
<br>
<p>The current bml/r2 code silently ignores btl-&gt;add_procs() error codes with 
<br>
the following comment :
<br>
---- ompi/mca/bml/r2/bml_r2.c:208 ----
<br>
&nbsp;&nbsp;&nbsp;/* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* can take care of this task. */
<br>
&nbsp;&nbsp;&nbsp;continue;
<br>
--------------------------------------
<br>
<p>This seems wrong to me : either a proc is reached (the &quot;reachable&quot; bit 
<br>
field is therefore updated), either it is not (and nothing is done). Any 
<br>
error code should denote a fatal error needing a clean abort.
<br>
<p>In the current openib btl code, the &quot;reachable&quot; bit is set but an error is 
<br>
returned - then ignored by r2. The next call to the openib BTL results in 
<br>
a segmentation fault.
<br>
<p>So, maybe this simple fix would do the trick :
<br>
========================================================================
<br>
diff -r 96e0793d7885 ompi/mca/bml/r2/bml_r2.c
<br>
--- a/ompi/mca/bml/r2/bml_r2.c  Wed May 19 14:35:27 2010 +0200
<br>
+++ b/ompi/mca/bml/r2/bml_r2.c  Tue May 25 10:54:19 2010 +0200
<br>
@@ -210,7 +210,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* can take care of this task.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-            continue;
<br>
+            return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* for each proc that is reachable */
<br>
========================================================================
<br>
<p>Does anyone see a case (with a specific btl) where add_procs returns an 
<br>
error but we still want to continue ?
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7989.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7987.php">Jeff Squyres: "Re: [OMPI devel] GCC Linux trunk build errors in paffinity/hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7989.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7989.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
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
