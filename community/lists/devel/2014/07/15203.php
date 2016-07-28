<?
$subject_val = "[OMPI devel] barrier before calling del_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 11:21:31 2014" -->
<!-- isoreceived="20140721152131" -->
<!-- sent="Mon, 21 Jul 2014 15:21:29 +0000" -->
<!-- isosent="20140721152129" -->
<!-- name="Yossi Etigin" -->
<!-- email="yosefe_at_[hidden]" -->
<!-- subject="[OMPI devel] barrier before calling del_procs" -->
<!-- id="641b8a75bf3644d3a7909250adc799e9_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI devel] barrier before calling del_procs<br>
<strong>From:</strong> Yossi Etigin (<em>yosefe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 11:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We get occasional hangs with MTL/MXM during finalize, because a global synchronization is needed before calling del_procs.
<br>
e.g rank A may call del_procs() and disconnect from rank B, while rank B is still working.
<br>
What do you think about adding an MPI barrier on COMM_WORLD before calling del_procs()?
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15202.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
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
