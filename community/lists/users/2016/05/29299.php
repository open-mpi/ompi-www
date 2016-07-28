<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3510, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 06:25:33 2016" -->
<!-- isoreceived="20160524102533" -->
<!-- sent="Tue, 24 May 2016 11:25:32 +0100" -->
<!-- isosent="20160524102532" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3510, Issue 2" -->
<!-- id="87shx7ycpv.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="148519416.2680611.1464080078917.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3510, Issue 2<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 06:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29298.php">Dave Love: "Re: [OMPI users] wtime implementation in 1.10"</a>
<li><strong>In reply to:</strong> <a href="29297.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29314.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Megdich Islem &lt;megdich_islem_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Yes, Empire does the fluid structure coupling. It couples OpenFoam (fluid analysis) and Abaqus (structural analysis).
</span><br>
<span class="quotelev1">&gt; Does all the software need to have the same MPI architecture in order to communicate ?
</span><br>
<p>I doubt it's doing that, and presumably you have no control over abaqus,
<br>
which is a major source of pain here.
<br>
<p>You could wrap one (set of) program(s) in a script to set the
<br>
appropriate environment before invoking the real program.  That might be
<br>
a bit painful if you need many of the OF components, but it should be
<br>
straightforward to put scripts somewhere on PATH ahead of the real
<br>
versions.
<br>
<p>On the other hand, it never ceases to amaze how difficult proprietary
<br>
engineering applications make life on HPC systems; I could believe
<br>
there's a catch.  Also you (or systems people) normally want programs to
<br>
use the system MPI, assuming that's been set up appropriately.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29300.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29298.php">Dave Love: "Re: [OMPI users] wtime implementation in 1.10"</a>
<li><strong>In reply to:</strong> <a href="29297.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29302.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>Reply:</strong> <a href="29314.php">Dave Love: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
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
