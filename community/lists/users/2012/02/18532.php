<?
$subject_val = "[OMPI users] Using orterun to start jobs with numactl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 15:08:09 2012" -->
<!-- isoreceived="20120220200809" -->
<!-- sent="Mon, 20 Feb 2012 15:05:15 -0500" -->
<!-- isosent="20120220200515" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Using orterun to start jobs with numactl" -->
<!-- id="4F42A77B.2090509_at_att.net" -->
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
<strong>Subject:</strong> [OMPI users] Using orterun to start jobs with numactl<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 15:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18533.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18531.php">Brock Palen: "[OMPI users] ROMIO Podcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18540.php">Ralph Castain: "Re: [OMPI users] Using orterun to start jobs with numactl"</a>
<li><strong>Reply:</strong> <a href="18540.php">Ralph Castain: "Re: [OMPI users] Using orterun to start jobs with numactl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Good afternoon,
<br>
<p>I'm working with some AMD Interlagos nodes (16-core, 4-socket),
<br>
and I want to bind processes to cores in specific layouts. These
<br>
may not be in logical order so I need to be able to my MPI app
<br>
and point it to specific cores on specific nodes (although the
<br>
core ordering is the same for all nodes).
<br>
<p>I'm assuming I need to &quot;manually&quot; start the processes using
<br>
orted (or orterun) and numactl on the specific cores. Since I've
<br>
never used orted or orterun to start jobs and I'm struggling with
<br>
the man pages a bit - any suggestions?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18533.php">Rayson Ho: "Re: [OMPI users] ROMIO Podcast"</a>
<li><strong>Previous message:</strong> <a href="18531.php">Brock Palen: "[OMPI users] ROMIO Podcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18540.php">Ralph Castain: "Re: [OMPI users] Using orterun to start jobs with numactl"</a>
<li><strong>Reply:</strong> <a href="18540.php">Ralph Castain: "Re: [OMPI users] Using orterun to start jobs with numactl"</a>
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
