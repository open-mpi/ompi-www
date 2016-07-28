<?
$subject_val = "[OMPI devel] build failure in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 01:17:49 2014" -->
<!-- isoreceived="20140123061749" -->
<!-- sent="Thu, 23 Jan 2014 08:17:47 +0200" -->
<!-- isosent="20140123061747" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] build failure in trunk" -->
<!-- id="CAAO1KyY_uCtXX54svPGz1nXBkLPqiRV2ogn=M6MjmAUifYUhDw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] build failure in trunk<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 01:17:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<li><strong>Reply:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*06:29:26* make[3]: Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/ptpcoll'*06:29:26*
<br>
make[2]: Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/ptpcoll'*06:29:26*
<br>
Making install in mca/bcol/iboffload*06:29:26* make[2]: Entering
<br>
directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/iboffload'*06:29:26*
<br>
&nbsp;&nbsp;CC       bcol_iboffload_module.lo*06:29:26* bcol_iboffload_module.c:
<br>
In function 'load_func':*06:29:26* bcol_iboffload_module.c:734: error:
<br>
'mca_bcol_iboffload_allgather_register' undeclared (first use in this
<br>
function)*06:29:26* bcol_iboffload_module.c:734: error: (Each
<br>
undeclared identifier is reported only once*06:29:26*
<br>
bcol_iboffload_module.c:734: error: for each function it appears
<br>
in.)*06:29:26* make[2]: *** [bcol_iboffload_module.lo] Error
<br>
1*06:29:26* make[2]: Leaving directory
<br>
`/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/bcol/iboffload'*06:29:26*
<br>
make[1]: *** [install-recursive] Error 1*06:29:26* make[1]: Leaving
<br>
directory `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi'*06:29:26*
<br>
make: *** [install-recursive] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13869/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13868.php">Paul Hargrove: "Re: [OMPI devel] Unknown object files in libmpi.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<li><strong>Reply:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
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
