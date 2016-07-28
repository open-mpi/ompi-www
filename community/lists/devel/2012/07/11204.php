<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 11:47:50 2012" -->
<!-- isoreceived="20120702154750" -->
<!-- sent="Mon, 2 Jul 2012 15:47:23 +0000" -->
<!-- isosent="20120702154723" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD2391A36D_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120702150051.GA84484_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 11:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11199.php">Nathan Hjelm: "[OMPI devel] Trunk compilation broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/2/12 11:00 AM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;With platform contrib/platform/lanl/tlss/debug-panasus I get an error:
</span><br>
<span class="quotelev1">&gt;make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;`/panfs/scratch/vol7/hjelmn/turing/ompi-trunk-git/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;  CCLD   ompi_info
</span><br>
<span class="quotelev1">&gt;../../../ompi/.libs/libmpi.so: undefined reference to `NBC_Operation'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian, can you take a look?
</span><br>
<p>I think this is fixed in r26708.  I thought I had committed that change
<br>
already, but apparently not (or I accidentally backed it out last week
<br>
while trying to track down what ended up being a very subtle memory
<br>
corruption issue).
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11205.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi:	config mca/btl/ofud mca/btl/openib mca/common/ofacm	mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11199.php">Nathan Hjelm: "[OMPI devel] Trunk compilation broken"</a>
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
