<?
$subject_val = "[OMPI users] Finding amount of pinned memory &amp; regions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 09:36:02 2015" -->
<!-- isoreceived="20151023133602" -->
<!-- sent="Fri, 23 Oct 2015 13:35:47 +0000" -->
<!-- isosent="20151023133547" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users] Finding amount of pinned memory &amp;amp; regions" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC52048C91_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> [OMPI users] Finding amount of pinned memory &amp; regions<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 09:35:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27920.php">George Bosilca: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pardon if this has been addressed already, but I could not find the answer after going through the OpenMPI FAQ and doing Google searches of the open-mpi.org site.
<br>
<p>We are in the process of analyzing and troubleshooting MPI jobs of increasingly large scale (OpenMPI 1.6.5).  At a sufficiently large scale (# cores) a job will end up failing with errors similar to:
<br>
<p>[yyyyy][[56933,1],1904][connect/btl_openib_connect_oob.c:867:rml_recv_cb] error in endpoint reply start connect
<br>
[xxxxx:29318] 853 more processes have sent help message help-mpi-btl-openib-cpc-base.txt / ibv_create_qp failed
<br>
<p>So I know we are running into some memory limitation (educated guess) when queue pairs are being created to support such a huge mesh.  We are now investigating using the XRC transport to decrease memory consumption.
<br>
<p>Anyways, my questions are:
<br>
<p><p>1.       How do we determine HOW MUCH memory is being pinned by an MPI job on a node?  (If pmap, what exactly are we looking for?)
<br>
<p>2.       How do we determine WHERE these pinned memory regions are?
<br>
<p>We are running RedHat 6.x.  Thank you!
<br>
<p>--john
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27920.php">George Bosilca: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
