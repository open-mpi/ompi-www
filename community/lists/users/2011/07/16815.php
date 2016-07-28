<?
$subject_val = "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 06:15:38 2011" -->
<!-- isoreceived="20110705101538" -->
<!-- sent="Tue, 05 Jul 2011 12:15:31 +0200" -->
<!-- isosent="20110705101531" -->
<!-- name="Charles Bouillaguet" -->
<!-- email="charles.bouillaguet_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI on Tile architectures (no atomic primitives)" -->
<!-- id="1309860931.32416.28.camel_at_psalliote" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI on Tile architectures (no atomic primitives)<br>
<strong>From:</strong> Charles Bouillaguet (<em>charles.bouillaguet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 06:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="16814.php">Shiqing Fan: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Reply:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We have gotten our hands on  a machine with a bunch of TilePro64
<br>
processors (which seems to be a MIPS-like architecture). It runs linux,
<br>
has gcc, and I was only dreaming to compile openmpi on it. However
<br>
compilation fails with the errir &quot;no atomic primitives available for
<br>
tile-unknown-linux-gnu&quot;.
<br>
<p>I was wondering whether this problem has arisen already? If not, I would
<br>
be willing to try to address it and write the corresponding assembly
<br>
code in opal/asm/..., but in this case I would really appreciate some
<br>
guidance.
<br>
<p>Thanks,
<br>
<pre>
-- 
Charles Bouillaguet
<a href="http://www.di.ens.fr/~bouillaguet/">http://www.di.ens.fr/~bouillaguet/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="16814.php">Shiqing Fan: "Re: [OMPI users] Windows: msv*.dll files presence in Release build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Reply:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
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
