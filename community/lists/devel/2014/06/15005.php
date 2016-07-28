<?
$subject_val = "[OMPI devel] false positive mtt error on v1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 07:06:06 2014" -->
<!-- isoreceived="20140612110606" -->
<!-- sent="Thu, 12 Jun 2014 20:06:05 +0900" -->
<!-- isosent="20140612110605" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] false positive mtt error on v1.8" -->
<!-- id="5399899D.3060008_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] false positive mtt error on v1.8<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-12 07:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15006.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>FYI
<br>
<p>here are two mtt errors ( 1.8.2a1r31981 on cisco-usnic cluster)
<br>
<p><a href="http://mtt.open-mpi.org/index.php?do_redir=2202">http://mtt.open-mpi.org/index.php?do_redir=2202</a>
<br>
<a href="http://mtt.open-mpi.org/index.php?do_redir=2203">http://mtt.open-mpi.org/index.php?do_redir=2203</a>
<br>
<p>OpenMPI is fine :-) the test itself was not :-(
<br>
<p>i fixed this in r2379 (strncpy does not NULL terminate the cstr string
<br>
and random things happened when calling strcat)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Index: ompitest_atoif.c
<br>
===================================================================
<br>
--- ompitest_atoif.c    (revision 2378)
<br>
+++ ompitest_atoif.c    (revision 2379)
<br>
@@ -47,6 +47,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (len &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strncpy(cstr, str, len);
<br>
+    cstr[len] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcat(cstr, &quot;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cstr[len + 1] = 0;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15006.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="15004.php">Nathan Hjelm: "Re: [OMPI devel] iallgather failures with coll ml"</a>
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
