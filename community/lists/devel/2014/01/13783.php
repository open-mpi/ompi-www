<?
$subject_val = "[OMPI devel] Warnings from pgcc-13.10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 02:24:57 2014" -->
<!-- isoreceived="20140117072457" -->
<!-- sent="Thu, 16 Jan 2014 23:24:55 -0800" -->
<!-- isosent="20140117072455" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings from pgcc-13.10" -->
<!-- id="CAAvDA162njbVg_gGvd-kjYfA95pzAQfNEmPx+eb3aux0Wx2R7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings from pgcc-13.10<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 02:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13784.php">Paul Hargrove: "[OMPI devel] ILP32 warnings report"</a>
<li><strong>Previous message:</strong> <a href="13782.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My builds of the trunk with pgcc-13.10 turned up the following warnings:
<br>
<p>PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
<br>
354)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
<br>
376)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
<br>
452)
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
<br>
534)
<br>
<p>PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/state/base/state_base_fns.c:
<br>
766)
<br>
<p>PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_component.c:
<br>
368)
<br>
<p>PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_module.c:
<br>
1337)
<br>
<p>I believe all of these are related to passing a (const char *) to
<br>
OPAL_OUTPUT_VERBOSE().
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13784.php">Paul Hargrove: "[OMPI devel] ILP32 warnings report"</a>
<li><strong>Previous message:</strong> <a href="13782.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
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
