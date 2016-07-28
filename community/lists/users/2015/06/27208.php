<?
$subject_val = "[OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 07:28:21 2015" -->
<!-- isoreceived="20150629112821" -->
<!-- sent="Mon, 29 Jun 2015 13:28:11 +0200" -->
<!-- isosent="20150629112811" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?" -->
<!-- id="55912BCB.10803_at_hpc2n.umu.se" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 07:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27215.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>static inline int ompi_mpi_errnum_is_class ( int errnum )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_errcode_t *err;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (errno &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I assume it should be errnum &lt; 0.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27207.php">Fedele Stabile: "Re: [OMPI users] SOLVED hybrid programming: cpu load issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27215.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
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
