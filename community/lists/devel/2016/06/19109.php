<?
$subject_val = "[OMPI devel] [2.0.0rc3] OpenBSD/ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:40:36 2016" -->
<!-- isoreceived="20160616014036" -->
<!-- sent="Wed, 15 Jun 2016 18:40:07 -0700" -->
<!-- isosent="20160616014007" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc3] OpenBSD/ROMIO" -->
<!-- id="CAAvDA16HLM27LG8ZaW3o5ZAw1B68Gz5X7qfJNxa0U15gcTE9dQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Previous message:</strong> <a href="19108.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] Solaris Studio Linux/x86-64 and -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>Reply:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still see failures to build ROMIO on OpenBSD-5.9:
<br>
<p>/home/phargrov/OMPI/openmpi-2.0.0rc3-openbsd5-i386/openmpi-2.0.0rc3/ompi/mca/io/romio314/romio/adio/common/ad_fsty
<br>
pe.c: In function 'ADIO_FileSysType_fncall':
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-openbsd5-i386/openmpi-2.0.0rc3/ompi/mca/io/romio314/romio/adio/common/ad_fsty
<br>
pe.c:358: error: 'struct statfs' has no member named 'f_type'
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-openbsd5-i386/openmpi-2.0.0rc3/ompi/mca/io/romio314/romio/adio/common/ad_fsty
<br>
pe.c:382: error: 'struct statfs' has no member named 'f_type'
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc3-openbsd5-i386/openmpi-2.0.0rc3/ompi/mca/io/romio314/romio/adio/common/ad_fsty
<br>
pe.c:403: error: 'struct statfs' has no member named 'f_type'
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Previous message:</strong> <a href="19108.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] Solaris Studio Linux/x86-64 and -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>Reply:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
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
