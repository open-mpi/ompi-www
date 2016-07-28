<?
$subject_val = "Re: [OMPI devel] Changed behaviour with PSM on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 10 03:24:44 2015" -->
<!-- isoreceived="20150110082444" -->
<!-- sent="Sat, 10 Jan 2015 09:24:44 +0100" -->
<!-- isosent="20150110082444" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changed behaviour with PSM on master" -->
<!-- id="20150110082444.GE4553_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150109121234.GK23217_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changed behaviour with PSM on master<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-10 03:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16777.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16775.php">Burette, Yohann: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16765.php">Adrian Reber: "[OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://github.com/open-mpi/ompi/issues/340">https://github.com/open-mpi/ompi/issues/340</a>
<br>
<p>On Fri, Jan 09, 2015 at 01:12:34PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; Running the mpi_test_suite on master used to work with no problems. At
</span><br>
<span class="quotelev1">&gt; some point in time it stopped working however and now I get only error
</span><br>
<span class="quotelev1">&gt; messages from PSM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; n050301:3.0.In PSM version 1.14, it is not possible to open more than one context per process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n050301:26526] Open MPI detected an unexpected PSM error in opening an endpoint: In PSM version
</span><br>
<span class="quotelev1">&gt; 1.14, it is not possible to open more than one context per process
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that I do not have the newest version of the PSM library and
</span><br>
<span class="quotelev1">&gt; that I need to update the library but as this requires many
</span><br>
<span class="quotelev1">&gt; software packages to be re-compiled we are trying to avoid it on
</span><br>
<span class="quotelev1">&gt; our CentOS6 based system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My main question (probably for Andrew) is if this is an expected
</span><br>
<span class="quotelev1">&gt; behaviour on master. It works on 1.8.x and it used to work on
</span><br>
<span class="quotelev1">&gt; master at least until 2014-12-08.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the last MTT entry for working PSM (with my older version)
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2226">http://mtt.open-mpi.org/index.php?do_redir=2226</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and since a few days it fails on master
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2225">http://mtt.open-mpi.org/index.php?do_redir=2225</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On another system (RHEL7) with newer PSM libraries there is no such
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16776/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16777.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16775.php">Burette, Yohann: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16765.php">Adrian Reber: "[OMPI devel] Changed behaviour with PSM on master"</a>
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
