<?
$subject_val = "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 18:50:30 2014" -->
<!-- isoreceived="20140208235030" -->
<!-- sent="Sat, 8 Feb 2014 15:50:26 -0800" -->
<!-- isosent="20140208235026" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED" -->
<!-- id="CAAvDA15jhn+MxK4gM0+Rpzw+uFP3K-hnNd0acd60JwH0ZyMErA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 18:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14057.php">Paul Hargrove: "[OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Previous message:</strong> <a href="14055.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Reply:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Ralph's announcement that oshmem had been merged to v1.7 I started
<br>
tests on lots of systems.
<br>
When I found the problem described below, I tried the 1.7.4 release, I
<br>
found the problem exists there too!!
<br>
<p>One system I tried is a fairly ancient x86-64/linux system w/ QLogic HCAs,
<br>
and thus builds and tests mtl:psm.
<br>
As a guest on this system I had NOT been testing it with all the 1.7.4rc's,
<br>
but had tested at least once w/o problems (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13661.php">http://www.open-mpi.org/community/lists/devel/2014/01/13661.php</a>).
<br>
<p>However, with both the 1.7.4 release and the current tarball
<br>
(1.7.5a1r30634) I seem to be getting an ibv error that is probably due to
<br>
the age of the OFED on this system:
<br>
<p>&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
/home/phhargrove/OMPI/openmpi-1.7-latest-linux-x86_64-psm/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.so:
<br>
undefined reference to `ibv_event_type_str'
<br>
collect2: ld returned 1 exit status
<br>
<p>The problem seems to be originating in the usenic btl:
<br>
$ grep -rl ibv_event_type_str .
<br>
./ompi/mca/btl/usnic/btl_usnic_module.c
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14057.php">Paul Hargrove: "[OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<li><strong>Previous message:</strong> <a href="14055.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Reply:</strong> <a href="14102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
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
