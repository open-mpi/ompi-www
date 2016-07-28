<?
$subject_val = "[OMPI devel] jenkins error in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 11:13:34 2014" -->
<!-- isoreceived="20140808151334" -->
<!-- sent="Fri, 8 Aug 2014 18:13:32 +0300" -->
<!-- isosent="20140808151332" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] jenkins error in trunk" -->
<!-- id="CAAO1Kyamn8asOCb=XmG8p_Rk2HUmF87=duw-kjxOH93LiJj93w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] jenkins error in trunk<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 11:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Previous message:</strong> <a href="15556.php">Tim Mattox: "Re: [OMPI devel] Open MPI SVN -&gt; Git (github) conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Reply:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Josh,Devendar - could you please take a look?*
<br>
<p>*Thanks*
<br>
<p><p>*15:45:00* Making install in mca/coll/fca*15:45:00* make[2]: Entering
<br>
directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi/mca/coll/fca'*15:45:00*
<br>
&nbsp;&nbsp;CC       coll_fca_module.lo*15:45:00* coll_fca_module.c: In function
<br>
'have_remote_peers':*15:45:00* coll_fca_module.c:48: error:
<br>
'ompi_proc_t' has no member named 'proc_flags'*15:45:00*
<br>
coll_fca_module.c:48: error: 'ompi_proc_t' has no member named
<br>
'proc_flags'*15:45:00* coll_fca_module.c: In function
<br>
'__get_local_ranks':*15:45:00* coll_fca_module.c:75: error:
<br>
'ompi_proc_t' has no member named 'proc_flags'*15:45:00*
<br>
coll_fca_module.c:75: error: 'ompi_proc_t' has no member named
<br>
'proc_flags'*15:45:00* coll_fca_module.c:95: error: 'ompi_proc_t' has
<br>
no member named 'proc_flags'*15:45:00* coll_fca_module.c:95: error:
<br>
'ompi_proc_t' has no member named 'proc_flags'*15:45:00* make[2]: ***
<br>
[coll_fca_module.lo] Error 1*15:45:00* make[2]: Leaving directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi/mca/coll/fca'*15:45:00*
<br>
make[1]: *** [install-recursive] Error 1*15:45:00* make[1]: Leaving
<br>
directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi'*15:45:00*
<br>
make: *** [install-recursive] Error 1*15:45:00* Build step 'Execute
<br>
shell' marked build as failu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15557/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Previous message:</strong> <a href="15556.php">Tim Mattox: "Re: [OMPI devel] Open MPI SVN -&gt; Git (github) conversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Reply:</strong> <a href="15558.php">Ralph Castain: "Re: [OMPI devel] jenkins error in trunk"</a>
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
