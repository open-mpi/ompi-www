<?
$subject_val = "[OMPI users] coll_ml_priority in openmpi-1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 20:56:59 2014" -->
<!-- isoreceived="20140321005659" -->
<!-- sent="Fri, 21 Mar 2014 09:56:35 +0900" -->
<!-- isosent="20140321005635" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] coll_ml_priority in openmpi-1.7.5" -->
<!-- id="OF6613BC87.0107852C-ON49257CA2.0000D4AD-49257CA2.00053AD9_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] coll_ml_priority in openmpi-1.7.5<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20coll_ml_priority%20in%20openmpi-1.7.5"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-20 20:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23907.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23905.php">Ross Boylan: "[OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, congratulations on releasing new openmpi-1.7.5.
<br>
<p>By the way, opnempi-1.7.5rc3 has been slowing down our application
<br>
with smaller size of testing data, where the time consuming part
<br>
of our application is so called sparse solver. It's negligible
<br>
with medium or large size data - more practical one, so I have
<br>
been defering this problem.
<br>
<p>However, this slowdown disappears in the final version of
<br>
openmpi-1.7.5. After some investigations, I found coll_ml caused
<br>
this slowdown. The final version seems to set coll_ml_priority as zero
<br>
again.
<br>
<p>Could you explain briefly about the advantage of coll_ml? In what kind
<br>
of situation it's effective and so on ...
<br>
<p>In addition, I'm not sure why coll_my is activated in openmpi-1.7.5rc3,
<br>
although its priority is lower than tuned as described in the message
<br>
of changeset 30790:
<br>
&nbsp;&nbsp;We are initially setting the priority lower than
<br>
&nbsp;&nbsp;tuned until this has had some time to soak in the trunk.
<br>
<p>Tetsuya
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23907.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23905.php">Ross Boylan: "[OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
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
