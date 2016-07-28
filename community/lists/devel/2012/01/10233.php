<?
$subject_val = "[OMPI devel] Launch windows nodes from linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 00:25:54 2012" -->
<!-- isoreceived="20120120052554" -->
<!-- sent="Fri, 20 Jan 2012 16:25:46 +1100" -->
<!-- isosent="20120120052546" -->
<!-- name="Alex.Burton_at_[hidden]" -->
<!-- email="Alex.Burton_at_[hidden]" -->
<!-- subject="[OMPI devel] Launch windows nodes from linux" -->
<!-- id="60C2819A78CBC241B74AE1666E86A1E05F3F8EBF44_at_EXNSW-MBX02.nexus.csiro.au" -->
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
<strong>Subject:</strong> [OMPI devel] Launch windows nodes from linux<br>
<strong>From:</strong> <a href="mailto:Alex.Burton_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Launch%20windows%20nodes%20from%20linux"><em>Alex.Burton_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-01-20 00:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10234.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>Previous message:</strong> <a href="10232.php">Christopher Samuel: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<li><strong>Reply:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi developers,
<br>
<p>I can see in the code that the part that launches processes on other
<br>
machines on Windows is not compiled on other platforms because it uses
<br>
COM.
<br>
<p>Is there another way of launching processes on Windows from non windows
<br>
machines ?
<br>
<p>What would I need to do to write a daemon similar to MPICH2s smpd which
<br>
runs as a windows service ?
<br>
It looks like it would only have to handle authentication and launch the
<br>
ORTE process.
<br>
<p>I would use MPICH2, but it appears to not work with a heterogeneous
<br>
network.
<br>
<p>Alex
<br>
<p>Alex Burton
<br>
Research Engineer NSEC
<br>
CSIRO Energy Technology
<br>
Box 330 Newcastle NSW 2300
<br>
+61 2 49 606 110
<br>
alex.burton_at_[hidden]&lt;mailto:alex.burton_at_[hidden]&gt;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10234.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 Solaris results [libtool problem]"</a>
<li><strong>Previous message:</strong> <a href="10232.php">Christopher Samuel: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<li><strong>Reply:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
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
