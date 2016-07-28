<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 07:20:25 2015" -->
<!-- isoreceived="20151007112025" -->
<!-- sent="Wed, 7 Oct 2015 13:20:19 +0200" -->
<!-- isosent="20151007112019" -->
<!-- name="Georg Geiser" -->
<!-- email="Georg.Geiser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator" -->
<!-- id="5614FFF3.9030803_at_dlr.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20151002155940.GA42183_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Georg Geiser (<em>Georg.Geiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 07:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27830.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>In reply to:</strong> <a href="27772.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27831.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Reply:</strong> <a href="27831.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>thanks for your rapid response. Do you consider to release 1.8.9? 
<br>
Actually, there is a bug tracking category for that version number. If 
<br>
so, please backport the fix.
<br>
<p>Best
<br>
<p>Georg
<br>
<p>Am 02.10.2015 um 17:59 schrieb Nathan Hjelm:
<br>
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
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.8.8 segfaults when I try to perform a non-blocking reduce
</span><br>
<span class="quotelev2">&gt;&gt; operation with a user-defined reduce operator. The problem has already been
</span><br>
<span class="quotelev2">&gt;&gt; addressed.here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14586.php">http://www.open-mpi.org/community/lists/devel/2014/04/14586.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please fix this issue since it is critical for me! At least you should abort
</span><br>
<span class="quotelev2">&gt;&gt; with some more user-friendly output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Georg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27769.php">http://www.open-mpi.org/community/lists/users/2015/10/27769.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27772.php">http://www.open-mpi.org/community/lists/users/2015/10/27772.php</a>
</span><br>
<p><pre>
-- 
Dr.-Ing. Georg Geiser
Deutsches Zentrum f&#252;r Luft- und Raumfahrt e.V. (DLR)
Institut f&#252;r Antriebstechnik | Numerische Methoden | Linder H&#246;he | 51147 K&#246;ln
Telefon +49 2203 601-3294 | E-Mail Georg.Geiser_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27830.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>In reply to:</strong> <a href="27772.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27831.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
<li><strong>Reply:</strong> <a href="27831.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.8: Segfault when using non-blocking reduce operations with a user-defined operator"</a>
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
