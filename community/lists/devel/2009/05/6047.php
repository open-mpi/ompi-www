<?
$subject_val = "[OMPI devel] ompi-ps broken or just changed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 17:52:47 2009" -->
<!-- isoreceived="20090514215247" -->
<!-- sent="Thu, 14 May 2009 22:53:44 +0100" -->
<!-- isosent="20090514215344" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi-ps broken or just changed?" -->
<!-- id="1242338024.30907.7.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI devel] ompi-ps broken or just changed?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 17:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6048.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6046.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6048.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6048.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I'm developing some code to run against Open-MPI trunk and it appears
<br>
that the output of ompi-ps has changed since I last looked at it.
<br>
<p>Running a two process job on one node I see barely any info when run
<br>
directly and little more when run with -n.  Is  it still possible to
<br>
discover the hostnames and pids of individual processes within the job
<br>
using this tool?
<br>
<p>ashley_at_alpha:~/code/padb$ orte-ps   
<br>
<p><p>Information from mpirun [34593,0]
<br>
---------------------------------
<br>
ashley_at_alpha:~/code/padb$ orte-ps -n
<br>
<p><p>Information from mpirun [34593,0]
<br>
---------------------------------
<br>
Node Name | Arch | State | Slots | Slots Max | Slots In Use | 
<br>
-------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;alpha | ffca0200 |    Up |     1 |         0 |            2 | 
<br>
ashley_at_alpha:~/code/padb$ 
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6048.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6046.php">Ralph Castain: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6048.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6048.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
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
