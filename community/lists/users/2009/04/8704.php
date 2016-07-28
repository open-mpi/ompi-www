<?
$subject_val = "[OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 05:27:54 2009" -->
<!-- isoreceived="20090401092754" -->
<!-- sent="Wed, 1 Apr 2009 17:27:49 +0800" -->
<!-- isosent="20090401092749" -->
<!-- name="Guanyinzhu" -->
<!-- email="buptzhugy_at_[hidden]" -->
<!-- subject="[OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?" -->
<!-- id="BLU114-W54A0A07E81381A9A8C960DA58B0_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?<br>
<strong>From:</strong> Guanyinzhu (<em>buptzhugy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 05:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8705.php">Gabriele Fatigati: "[OMPI users] Strange Net problem"</a>
<li><strong>Previous message:</strong> <a href="8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Reply:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi! 
<br>
&nbsp;&nbsp;I'm using OpenMPI 1.3 on ten nodes connected with Gigabit Ethernet on Redhat Linux x86_64. 
<br>
<p>&nbsp;
<br>
<p>I run a test like this: just killed the orted process and the job hung for a long time (hang for 2~3 hours then I killed the job).
<br>
<p>&nbsp;
<br>
<p>I have the follow questions:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when network failed or host failed or orted deamon was killed by accident, How long would the running mpi job notice and exit?  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does OpenMPI support a heartbeat mechanism or how could I fast detect the failture to avoid the mpi job hang&#163;&#191;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>thanks a lot!
<br>
<p>&nbsp;
<br>
<p>_________________________________________________________________
<br>
&#180;&#242;&#185;&#164;&#163;&#172;&#213;&#245;&#199;&#174;&#163;&#172;&#194;&#242;&#183;&#191;&#215;&#211;&#163;&#172;&#191;&#236;&#192;&#180;MClub&#210;&#187;&#198;&#240;&#161;&#177;&#189;&#240;&#206;&#221;&#178;&#216;&#189;&#191;&#161;&#177;&#163;&#161;
<br>
<a href="http://club.msn.cn/?from=10">http://club.msn.cn/?from=10</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8705.php">Gabriele Fatigati: "[OMPI users] Strange Net problem"</a>
<li><strong>Previous message:</strong> <a href="8703.php">M C: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Reply:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
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
