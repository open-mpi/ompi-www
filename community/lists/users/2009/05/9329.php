<?
$subject_val = "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 16:55:31 2009" -->
<!-- isoreceived="20090513205531" -->
<!-- sent="Wed, 13 May 2009 22:55:18 +0200" -->
<!-- isosent="20090513205518" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with &amp;quot;error polling LP CQ with status RNR&amp;quot;" -->
<!-- id="1242248118.7934.13.camel_at_skutt.ydc.se" -->
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
<strong>Subject:</strong> [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 16:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9330.php">Valmor de Almeida: "[OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>Reply:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>Reply:</strong> <a href="9339.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm having problem with getting the &quot;error polling LP CQ with status
<br>
RNR...&quot; on an otherwise completely empty system.
<br>
There are no errors visible in the error counters in any of the HCAs or
<br>
switches or anywhere else.
<br>
<p>I'm running OMPI 1.3.2 built with pathscale 3.2
<br>
<p>If i add -mca btl 'ofud,self,sm' the same code works ok.
<br>
<p>It usually only shows up on runs with nodes=16:ppn=8 or higher, i.e. 8x8
<br>
works ok.
<br>
<p>This might very well be a pathscale problem since when running with the
<br>
debug version of ompi 1.3.2 the problem goes away.
<br>
<p>Complete error is:
<br>
error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR
<br>
status number 13 for wr_id 465284992 opcode -1  vendor error 135 qp_idx
<br>
0
<br>
<p>Any ideas to where in the ompi code i should start reducing optimization
<br>
levels to pinpoint this?
<br>
<p>I'll try some more tests tomorrow with a hopefully fresh mind...
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9330.php">Valmor de Almeida: "[OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9328.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>Reply:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>Reply:</strong> <a href="9339.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
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
