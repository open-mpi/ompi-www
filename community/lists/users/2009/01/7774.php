<?
$subject_val = "[OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 04:54:25 2009" -->
<!-- isoreceived="20090123095425" -->
<!-- sent="Fri, 23 Jan 2009 10:54:19 +0100 (CET)" -->
<!-- isosent="20090123095419" -->
<!-- name="Andrea Iob" -->
<!-- email="andrea_iob_at_[hidden]" -->
<!-- subject="[OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined" -->
<!-- id="751487.76584.qm_at_web23006.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined<br>
<strong>From:</strong> Andrea Iob (<em>andrea_iob_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 04:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7775.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like icc 10.1.021 does not define PATH_MAX
<br>
(version 10.1.013 works without problems). As a
<br>
workaround I've included &lt;sys/param.h&gt; in those files
<br>
where PATH_MAX is used. 
<br>
<p>Hope it helps.
<br>
<p>Andrea
<br>
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7775.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
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
