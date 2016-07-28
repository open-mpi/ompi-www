<?
$subject_val = "[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 02:23:53 2014" -->
<!-- isoreceived="20140801062353" -->
<!-- sent="Thu, 31 Jul 2014 23:23:52 -0700" -->
<!-- isosent="20140801062352" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)" -->
<!-- id="CAAvDA17qomqh-gaKJ4QbVF3ZtXmPabgqz-_E0sp3_9VXTRh3LA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 02:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15434.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15448.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>Reply:</strong> <a href="15448.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
/home/phargrov/OMPI/openmpi-1.8.2rc3-freebsd10-amd64/openmpi-1.8.2rc3/orte/mca/ess/base/ess_base_std_app.c:412:36:
<br>
error: use of undeclared identifier 'S_IRUSR'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fd = open(myfile, O_CREAT, S_IRUSR);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>To fix this it was sufficient to add the following 3 lines in the obvious
<br>
place in ess_base_std_app.c
<br>
<p>#ifdef HAVE_SYS_STAT_H
<br>
#include &lt;sys/stat.h&gt;
<br>
#endif
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15434.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15448.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
<li><strong>Reply:</strong> <a href="15448.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] Build failure on FreeBSD (missing header)"</a>
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
