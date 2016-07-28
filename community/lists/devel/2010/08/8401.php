<?
$subject_val = "[OMPI devel] 1.5rc5: new opal_path_nfs test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 00:19:56 2010" -->
<!-- isoreceived="20100827041956" -->
<!-- sent="Thu, 26 Aug 2010 21:19:43 -0700" -->
<!-- isosent="20100827041943" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5: new opal_path_nfs test failures" -->
<!-- id="4C773CDF.6050708_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5: new opal_path_nfs test failures<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 00:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8402.php">Ralph Castain: "Re: [OMPI devel] RFC: ORTE threads - Stage 1"</a>
<li><strong>Previous message:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have found a system that is triggering two (new as far as I can tell) 
<br>
failure modes in opal_path_nfs().
<br>
<p>This is a Linux/PPC64 host, but NOT the BG/P front-end I've been 
<br>
reporting other issues with.
<br>
This is also with gcc, not XLC.  So, this is a &quot;normal&quot; Linux/PPC system.
<br>
I'll provide platform details on request, but I don't think they are 
<br>
relevant to the problems.
<br>
<p>The first is the shear size of the NFS-mounted filesystems (79TB), which 
<br>
is causing the statfs() call in opal_path_nfs() to fail with 
<br>
errno=EOVERFLOW.  In this case the f_type field appears to still be 
<br>
valid (printed it out to confirm), but opal_path_nfs() has given up, and 
<br>
incorrectly returns 0 to indicate the path is NOT on a cluster 
<br>
filesystem.  This particular errno value seems like a simple matter to 
<br>
code an exception for.
<br>
<p>The second is that the system is using an automounter to mount home 
<br>
directories over NFS.  This results in those mount points getting an 
<br>
f_type of AUTOFS_SUPER_MAGIC instead of NFS_SUPER_MAGIC.  If one is 
<br>
willing to assume that all automounted filesystem are cluster 
<br>
filesystems, then the solution in this case should also be relatively 
<br>
simple.  I suppose the acceptability of this approach depends on whether 
<br>
one wants opal_path_nfs() to error toward FALSE or toward TRUE.  If the 
<br>
behavior on failure of statfs() is to be taken as the precedent, then 
<br>
one probably should NOT assume that AUTOFS_SUPER_MAGIC indicates a 
<br>
cluster filesystem, and I have no suggestion (other than parsing 
<br>
/proc/mounts, given that statfs() is already Linux specific) as to how 
<br>
one should determine the &quot;real&quot; filesystem type.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8402.php">Ralph Castain: "Re: [OMPI devel] RFC: ORTE threads - Stage 1"</a>
<li><strong>Previous message:</strong> <a href="8400.php">Paul H. Hargrove: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
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
