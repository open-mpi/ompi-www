<?
$subject_val = "[OMPI devel] Changed behaviour with PSM on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 07:12:35 2015" -->
<!-- isoreceived="20150109121235" -->
<!-- sent="Fri, 9 Jan 2015 13:12:34 +0100" -->
<!-- isosent="20150109121234" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] Changed behaviour with PSM on master" -->
<!-- id="20150109121234.GK23217_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] Changed behaviour with PSM on master<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 07:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16764.php">Adrian Reber: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16776.php">Adrian Reber: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running the mpi_test_suite on master used to work with no problems. At
<br>
some point in time it stopped working however and now I get only error
<br>
messages from PSM:
<br>
<p>&quot;&quot;&quot;
<br>
n050301:3.0.In PSM version 1.14, it is not possible to open more than one context per process
<br>
<p>[n050301:26526] Open MPI detected an unexpected PSM error in opening an endpoint: In PSM version
<br>
1.14, it is not possible to open more than one context per process
<br>
&quot;&quot;&quot;
<br>
<p>I know that I do not have the newest version of the PSM library and
<br>
that I need to update the library but as this requires many
<br>
software packages to be re-compiled we are trying to avoid it on
<br>
our CentOS6 based system.
<br>
<p>My main question (probably for Andrew) is if this is an expected
<br>
behaviour on master. It works on 1.8.x and it used to work on
<br>
master at least until 2014-12-08.
<br>
<p>This is the last MTT entry for working PSM (with my older version)
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2226">http://mtt.open-mpi.org/index.php?do_redir=2226</a>
<br>
<p>and since a few days it fails on master
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2225">http://mtt.open-mpi.org/index.php?do_redir=2225</a>
<br>
<p>On another system (RHEL7) with newer PSM libraries there is no such
<br>
error.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16765/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16764.php">Adrian Reber: "Re: [OMPI devel] test/class/opal_fifo failure on ppc64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16776.php">Adrian Reber: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
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
