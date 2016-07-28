<?
$subject_val = "[OMPI devel] busted build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 12:48:05 2015" -->
<!-- isoreceived="20150925164805" -->
<!-- sent="Fri, 25 Sep 2015 10:48:04 -0600" -->
<!-- isosent="20150925164804" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] busted build" -->
<!-- id="CAF1Cqj6e2rUpMdvxgyAOJJ8QHxDwJUTsxcCXyM9JvdhN7p7c1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] busted build<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 12:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18107.php">Howard Pritchard: "[OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project"</a>
<li><strong>Previous message:</strong> <a href="18105.php">Howard Pritchard: "[OMPI devel] PR 595 busted build of mpi_f08"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>The UH distcheck is now failing with this compile error:
<br>
<p>&nbsp;&nbsp;CC       pml_ob1_rdma.lo
<br>
pml_ob1_irecv.c: In function 'mca_pml_ob1_recv':
<br>
pml_ob1_irecv.c:138:28: error: called object 'mca_pml_ob1_recvreq' is
<br>
not a function or function pointer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_recvreq(recvreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pml_ob1_irecv.c:39:29: note: declared here
<br>
&nbsp;mca_pml_ob1_recv_request_t *mca_pml_ob1_recvreq = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [pml_ob1_irecv.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: Leaving directory
<br>
`/home/hppritcha/jenkins/workspace/ompi_master_pr_disable_dlopen/ompi/mca/pml/ob1'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/hppritcha/jenkins/workspace/ompi_master_pr_disable_dlopen/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
Build step 'Execute shell' marked build as failure
<br>
Setting status of 6b9e67cfdb109f87b3fce6047e52e8fe72cdaf4c to FAILURE
<br>
with url <a href="http://jenkins.open-mpi.org/job/ompi_master_pr_disable_dlopen/303/">http://jenkins.open-mpi.org/job/ompi_master_pr_disable_dlopen/303/</a>
<br>
and message: 'Build finished. No test results found.'
<br>
Using context: LANL-disable-dlopen-check
<br>
Test FAILed.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18106/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18107.php">Howard Pritchard: "[OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project"</a>
<li><strong>Previous message:</strong> <a href="18105.php">Howard Pritchard: "[OMPI devel] PR 595 busted build of mpi_f08"</a>
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
