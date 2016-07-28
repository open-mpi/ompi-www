<?
$subject_val = "Re: [OMPI users] mpi_abort_delay";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  4 06:21:35 2012" -->
<!-- isoreceived="20120204112135" -->
<!-- sent="Sat, 4 Feb 2012 06:21:30 -0500" -->
<!-- isosent="20120204112130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_abort_delay" -->
<!-- id="D39B79E3-1B64-497F-B3F6-95C7E76437F3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5C3EF624-B18E-44A2-ACC5-DBE66F1979F6_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_abort_delay<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-04 06:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18394.php">Joe Landman: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18391.php">Aur&#233;lien Bouteiller: "[OMPI users] mpi_abort_delay"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2012, at 11:45 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; The mpi_abort_delay parameters does deadlock the aborting process, as to ease the manual attachment of gdb, only if the code does indeed call MPI_Abort. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any similar command line trick to keep alive a process that is exiting with assert() (or better with segfault etc) ?
</span><br>
<p>Not within Open MPI, no.
<br>
<p>I think if you want to catch those things, you'll need to install your own signal handlers.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18394.php">Joe Landman: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18391.php">Aur&#233;lien Bouteiller: "[OMPI users] mpi_abort_delay"</a>
<!-- nextthread="start" -->
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
