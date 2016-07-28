<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 07:30:08 2015" -->
<!-- isoreceived="20151007113008" -->
<!-- sent="Wed, 7 Oct 2015 20:30:04 +0900" -->
<!-- isosent="20151007113004" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator" -->
<!-- id="CAAkFZ5tv6u1B2h9t0pwr8+uuK4RYoPSS_=k0D+oJy2QFX5=EvA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5614FFF3.9030803_at_dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 07:30:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27832.php">simona bellavista: "[OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27830.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27829.php">Georg Geiser: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27835.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Reply:</strong> <a href="27835.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Georg,
<br>
<p>there won't be a 1.8.9
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, October 7, 2015, Georg Geiser &lt;Georg.Geiser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your rapid response. Do you consider to release 1.8.9?
</span><br>
<span class="quotelev1">&gt; Actually, there is a bug tracking category for that version number. If so,
</span><br>
<span class="quotelev1">&gt; please backport the fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Georg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 02.10.2015 um 17:59 schrieb Nathan Hjelm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working on a fix now. Will be in master today then will move it to
</span><br>
<span class="quotelev1">&gt; 1.10.1 and 2.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 02, 2015 at 02:24:29PM +0200, Georg Geiser wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.8.8 segfaults when I try to perform a non-blocking reduce
</span><br>
<span class="quotelev1">&gt; operation with a user-defined reduce operator. The problem has already been
</span><br>
<span class="quotelev1">&gt; addressed.here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14586.php">http://www.open-mpi.org/community/lists/devel/2014/04/14586.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please fix this issue since it is critical for me! At least you should abort
</span><br>
<span class="quotelev1">&gt; with some more user-friendly output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Georg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27769.php">http://www.open-mpi.org/community/lists/users/2015/10/27769.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27772.php">http://www.open-mpi.org/community/lists/users/2015/10/27772.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr.-Ing. Georg Geiser
</span><br>
<span class="quotelev1">&gt; Deutsches Zentrum f&#195;&#188;r Luft- und Raumfahrt e.V. (DLR)
</span><br>
<span class="quotelev1">&gt; Institut f&#195;&#188;r Antriebstechnik | Numerische Methoden | Linder H&#195;&#182;he | 51147 K&#195;&#182;ln
</span><br>
<span class="quotelev1">&gt; Telefon +49 2203 601-3294 | E-Mail Georg.Geiser_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','Georg.Geiser_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27832.php">simona bellavista: "[OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27830.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27829.php">Georg Geiser: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27835.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Reply:</strong> <a href="27835.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
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
