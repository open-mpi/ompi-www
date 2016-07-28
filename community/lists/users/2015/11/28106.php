<?
$subject_val = "Re: [OMPI users] help understand unhelpful ORTE error message";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 09:31:55 2015" -->
<!-- isoreceived="20151124143155" -->
<!-- sent="Tue, 24 Nov 2015 14:31:50 +0000" -->
<!-- isosent="20151124143150" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help understand unhelpful ORTE error message" -->
<!-- id="874mgbeaeh.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAkFZ5tZ81r64FJiKr3QmZC6Kfymq6Ofu9oGrrFs3tMHFt6KkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] help understand unhelpful ORTE error message<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 09:31:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28107.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28105.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Currently, ompi create a file in the temporary directory and then mmap it.
</span><br>
<span class="quotelev1">&gt; an obvious requirement is the temporary directory must have enough free
</span><br>
<span class="quotelev1">&gt; space for that file.
</span><br>
<span class="quotelev1">&gt; (this might be an issue on some disk less nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a simple alternative could be to try /tmp, and if there is not enough
</span><br>
<span class="quotelev1">&gt; space, try /dev/shm
</span><br>
<span class="quotelev1">&gt; (unless the tmpdir has been set explicitly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thought ?
</span><br>
<p>/tmp is already the default if TMPDIR et al aren't defined, isn't it?
<br>
<p>While you may not have any choice to use /dev/shm on a diskless node, it
<br>
doesn't seem a good thing to do by default for large maps.  It wasn't
<br>
here.
<br>
<p>[I've never been sure of the semantics of mmap over tmpfs.]
<br>
<p>I think the important thing is clear explanation of any error, and
<br>
suggestions for workarounds.  Presumably anyone operating diskless nodes
<br>
has made arrangements for this sort of thing.
<br>
<p><span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, we already use the force, thanks to the ob1 pml and the yoda spml
</span><br>
<p>I think that's assuming familiarity with something which leaves out some
<br>
people...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28107.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28105.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>In reply to:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Reply:</strong> <a href="28124.php">Jeff Squyres (jsquyres): "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
