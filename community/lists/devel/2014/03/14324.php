<?
$subject_val = "[OMPI devel] Proposed 1.7.5 shared library version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 13:55:56 2014" -->
<!-- isoreceived="20140311175556" -->
<!-- sent="Tue, 11 Mar 2014 17:55:54 +0000" -->
<!-- isosent="20140311175554" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Proposed 1.7.5 shared library version numbers" -->
<!-- id="F88E14DA-193E-4A6E-8D60-6AD5BF9A858B_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Proposed 1.7.5 shared library version numbers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 13:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14325.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.7.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="14323.php">Jeff Squyres (jsquyres): "[OMPI devel] mixing multiple things in a single commit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've trolled the SVN logs since 1.7.4, and here's what I think the version numbers should be -- can someone double check these?  (I only listed the values from the VERSION file that should change).  &quot;Code change&quot; simply means code in the library has changed, but not interfaces.
<br>
<p>libmpi_so_version=4:0:3
<br>
&nbsp;* code change
<br>
&nbsp;* added MPI one-sided APIs
<br>
&nbsp;* New: 5:0:4
<br>
libopen_rte_so_version=7:0:0
<br>
&nbsp;* code change
<br>
&nbsp;* New: 7:1:0
<br>
libopen_pal_so_version=7:0:1
<br>
&nbsp;* code change
<br>
&nbsp;* New: 7:1:1
<br>
libmpi_java_so_version=2:0:1
<br>
&nbsp;* code change
<br>
&nbsp;* New: 2:1:1
<br>
liboshmem_so_version=0:0:0
<br>
&nbsp;* initial oshmem release
<br>
&nbsp;* New: 1:0:0
<br>
<p>libmca_common_cuda_so_version=1:3:0
<br>
&nbsp;* code change
<br>
&nbsp;* New: 1:4:0
<br>
libmca_common_verbs_so_version=2:0:2
<br>
&nbsp;* code change
<br>
&nbsp;* change constants values
<br>
&nbsp;* New: 3:0:0
<br>
<p>libmca_opal_common_pmi_so_version=2:0:1
<br>
&nbsp;* code change
<br>
&nbsp;* New: 2:1:1
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14325.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.7.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="14323.php">Jeff Squyres (jsquyres): "[OMPI devel] mixing multiple things in a single commit"</a>
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
