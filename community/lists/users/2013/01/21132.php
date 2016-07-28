<?
$subject_val = "[OMPI users] help me understand these error msgs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 10:41:15 2013" -->
<!-- isoreceived="20130116154115" -->
<!-- sent="Wed, 16 Jan 2013 16:41:10 +0100" -->
<!-- isosent="20130116154110" -->
<!-- name="Jure Pe&#196;&#141;ar" -->
<!-- email="pegasus_at_[hidden]" -->
<!-- subject="[OMPI users] help me understand these error msgs" -->
<!-- id="20130116164110.69054210.pegasus_at_nerv.eu.org" -->
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
<strong>Subject:</strong> [OMPI users] help me understand these error msgs<br>
<strong>From:</strong> Jure Pe&#196;&#141;ar (<em>pegasus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 10:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21131.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Reply:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a large fortran code processing data (weather forecast). It runs ok with smaller dataset, but on larger dataset I get some errors I've never seen before:
<br>
<p>node061:05144] [[55141,0],11]-&gt;[[55141,0],0] mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9) [sd = 9]
<br>
[node061:05144] [[55141,0],11] routed:binomial: Connection to lifeline [[55141,0],0] lost
<br>
<p>and
<br>
<p>node084:7.0.Non-fatal temporary exhaustion of send tid dma descriptors
<br>
(elapsed=43.788s, source LID=0x49/context=11, count=1) (err=0)
<br>
<p>I'm using QLogic software version 7.1.0.0.58 (ofed 1.5.4.1, open-mpi 1.4.3).
<br>
<p>I'm starting this program with mpirun -mca btl openib,sm,self so I don't really understand what tcp has to do in the first error message.
<br>
<p>Also I traced second error message to psm code, but it appears even if i add -mca mtl ^psm to my mpirun arguments. Why?
<br>
<p>Any help appreciated.
<br>
<p><p><pre>
-- 
Jure Pe&#196;&#141;ar
<a href="http://jure.pecar.org">http://jure.pecar.org</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21131.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Reply:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
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
