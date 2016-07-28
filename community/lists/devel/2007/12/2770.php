<?
$subject_val = "[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 11:02:34 2007" -->
<!-- isoreceived="20071210160234" -->
<!-- sent="Mon, 10 Dec 2007 17:02:26 +0100" -->
<!-- isosent="20071210160226" -->
<!-- name="Sebastian Schmitzdorff" -->
<!-- email="sebastian.schmitzdorff_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included" -->
<!-- id="475D6312.6030801_at_hamburgnet.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included<br>
<strong>From:</strong> Sebastian Schmitzdorff (<em>sebastian.schmitzdorff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 11:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2771.php">Jeff Squyres: "[OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used"</a>
<li><strong>Previous message:</strong> <a href="2769.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Reply:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>on Fedora 8 x86_64 openmpi-1.2.4 doesn't compile.
<br>
A quick glance at the nightly openmpi snapshot leads me to the 
<br>
conclusion that
<br>
this is still the case.
<br>
<p>----------------------------------------------------
<br>
In function 'open',
<br>
&nbsp;&nbsp;&nbsp;inlined from 'orte_abort' at runtime/orte_abort.c:91:
<br>
/usr/include/bits/fcntl2.h:51: error: call to '__open_missing_mode' 
<br>
declared with attribute error: open with O_CREAT in second argument 
<br>
needs 3 arguments
<br>
make[1]: *** [runtime/orte_abort.lo] Error 1
<br>
make[1]: Leaving directory `/var/tmp/OFED_topdir/BUILD/openmpi-1.2.4/orte'
<br>
make: *** [all-recursive] Error 1
<br>
----------------------------------------------------
<br>
<p>There is a missing filemode in &quot;open&quot; in orte_abort.c:91.
<br>
fcntl2.h doesnt allow this anymore.
<br>
<p>please find the simple diff below.
<br>
<p>--------------------------------------------
<br>
--- runtime/orte_abort.c        2007-12-10 00:01:50.000000000 +0100
<br>
+++ test        2007-12-10 00:01:00.000000000 +0100
<br>
@@ -88,7 +88,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_OUT_OF_RESOURCE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        fd = open(abort_file, O_CREAT);
<br>
+        fd = open(abort_file, O_CREAT, 0666);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 &lt; fd) close(fd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
--------------------------------------------
<br>
<p>Hope this is the right place for the diff.
<br>
<p>regards
<br>
sebastian
<br>
<p><pre>
-- 
Sebastian Schmitzdorff - Managing Director
Hamburgnet
<a href="http://www.hamburgnet.de">http://www.hamburgnet.de</a>
Kottwitzstrasse 49 D-20253 Hamburg
fon: +49 40 736 72-322 fax: +49 40 736 72-321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2771.php">Jeff Squyres: "[OMPI devel] Print warning in v1.2 series if THREAD_MULTIPLE or progress threads are used"</a>
<li><strong>Previous message:</strong> <a href="2769.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<li><strong>Reply:</strong> <a href="2776.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
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
