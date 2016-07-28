<?
$subject_val = "[OMPI devel] Paffinity Error.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 13:32:01 2011" -->
<!-- isoreceived="20110512173201" -->
<!-- sent="Thu, 12 May 2011 19:31:54 +0200" -->
<!-- isosent="20110512173154" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Paffinity Error." -->
<!-- id="BANLkTimGMqEgqHNsWrvRNOUB1kQA-AYTbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Paffinity Error.<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-12 13:31:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Previous message:</strong> <a href="9251.php">Kishor Kharbas: "[OMPI devel] Open MPI Checkpoint-restart bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Reply:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>I'm getting an error when i try to use the paffinity option:
<br>
<p>Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;Local host:        clus9
<br>
&nbsp;&nbsp;Application name:  ./mm-static
<br>
&nbsp;&nbsp;Error message:     opal_paffinity_base_slot_list_set() returned &quot;Framework
<br>
requires at least one active module, but none found&quot;
<br>
&nbsp;&nbsp;Location:
<br>
&nbsp;../../../../../orte/mca/odls/default/odls_default_module.c:426
<br>
<p><p>I'm launching the app like this:
<br>
<p>#!/bin/sh
<br>
<p>/home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -v -n 8 \
<br>
&nbsp;-tag-output \
<br>
--hostfile ../hostfile \
<br>
--slot-list 1:1 \
<br>
--bynode \
<br>
./mm-static 1000 100
<br>
<p>Am i doing something wrong?
<br>
<p>Thanks for the help.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Previous message:</strong> <a href="9251.php">Kishor Kharbas: "[OMPI devel] Open MPI Checkpoint-restart bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
<li><strong>Reply:</strong> <a href="9253.php">Ralph Castain: "Re: [OMPI devel] Paffinity Error."</a>
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
