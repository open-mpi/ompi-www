<?
$subject_val = "[OMPI devel] Use unique collective ids for the checkpoint/restart code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 15:19:37 2014" -->
<!-- isoreceived="20140203201937" -->
<!-- sent="Mon, 3 Feb 2014 21:19:36 +0100" -->
<!-- isosent="20140203201936" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] Use unique collective ids for the checkpoint/restart code" -->
<!-- id="20140203201936.GX4981_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] Use unique collective ids for the checkpoint/restart code<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 15:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Previous message:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Reply:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=14ec7f42baab882e345948ff79c4f75f5084bbbf">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=14ec7f42baab882e345948ff79c4f75f5084bbbf</a>
<br>
<p>introduces unique collective ids for the checkpoint/restart code and
<br>
with this applied it seems to work pretty good. As this patch also
<br>
touches non-CR code it would be good if someone could have a look at it.
<br>
<p>With this patch applied the code seems to work up to the point where
<br>
orterun actually pauses all processes and tries to create the
<br>
checkpoints. The checkpoint creation does not work for me as CRS does
<br>
not yet include support for checkpoint/restart using CRIU which would be
<br>
my next step.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Previous message:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Reply:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
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
