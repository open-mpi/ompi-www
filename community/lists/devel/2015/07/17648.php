<?
$subject_val = "[OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 19:49:16 2015" -->
<!-- isoreceived="20150716234916" -->
<!-- sent="Thu, 16 Jul 2015 16:49:11 -0700" -->
<!-- isosent="20150716234911" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10" -->
<!-- id="CAAvDA16whjjj8Le_k4USw65V9c4exc9_O6Y3UhNCa84TGsfBLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-16 19:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17649.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Previous message:</strong> <a href="17647.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17649.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Reply:</strong> <a href="17649.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With pgi-12.10 I see the following error:
<br>
<p>PGC-S-0173-Array element designator used in a struct/union context
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc1-linux-x86_64-pgi-12.10/openmpi-1.10.0rc1/orte/mca/state/dvm/state_dvm_component.c:
<br>
60)
<br>
PGC-S-0173-Array element designator used in a struct/union context
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc1-linux-x86_64-pgi-12.10/openmpi-1.10.0rc1/orte/mca/state/dvm/state_dvm_component.c:
<br>
60)
<br>
PGC/x86-64 Linux 12.10-0: compilation completed with severe errors
<br>
<p>With versions 9.0-4, 10.9, 11.9, 13.6 and 14.7 things built fine.
<br>
So, this is most likely a PGI bug rather than a Open MPI problem.
<br>
<p>HOWEVER, removing the designators (they are not used in the other state
<br>
components) would eliminate this for pgi-12.10 *and* for any older compiler
<br>
that doesn't grok this c99 feature.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17649.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Previous message:</strong> <a href="17647.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17649.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Reply:</strong> <a href="17649.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
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
