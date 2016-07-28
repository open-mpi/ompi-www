<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 14:37:28 2005" -->
<!-- isoreceived="20050921193728" -->
<!-- sent="Wed, 21 Sep 2005 13:37:22 -0600" -->
<!-- isosent="20050921193722" -->
<!-- name="David R. (Chip) Kent IV" -->
<!-- email="drkent_at_[hidden]" -->
<!-- subject="mpif.h problems" -->
<!-- id="20050921193722.GP16065_at_duckhorn.lanl.gov" -->
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
<strong>From:</strong> David R. (Chip) Kent IV (<em>drkent_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-21 14:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0391.php">Tim S. Woodall: "--with-mvapi/--with-btl-mvapi???"</a>
<li><strong>Previous message:</strong> <a href="0389.php">Tim S. Woodall: "[Fwd: OMPI mpif.h problems]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Reply:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I managed to find a number of problems with the mpif.h when I tried it on 
<br>
a big application.  It looks like a lot of key constants are not defined 
<br>
in this file.  So far, MPI_SEEK_SET, MPI_MODE_CREATE, MPI_MODE_WRONLY 
<br>
have broken the build.  I've added them to mpif.h as I find them so that 
<br>
I can get the build to go, but I assume there are many more values still 
<br>
missing.
<br>
&nbsp;
<br>
Chip
<br>
<p>-----------------------------------------------------
<br>
David R. &quot;Chip&quot; Kent IV
<br>
<p>Parallel Tools Team
<br>
High Performance Computing Environments Group (CCN-8)
<br>
Los Alamos National Laboratory
<br>
<p>(505)665-5021
<br>
drkent_at_[hidden]
<br>
-----------------------------------------------------
<br>
<p>This message is &quot;Technical data or Software  Publicly 
<br>
Available&quot; or &quot;Correspondence&quot;.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0391.php">Tim S. Woodall: "--with-mvapi/--with-btl-mvapi???"</a>
<li><strong>Previous message:</strong> <a href="0389.php">Tim S. Woodall: "[Fwd: OMPI mpif.h problems]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
<li><strong>Reply:</strong> <a href="0400.php">Jeff Squyres: "Re:  mpif.h problems"</a>
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
