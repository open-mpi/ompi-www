<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 10:35:32 2014" -->
<!-- isoreceived="20141215153532" -->
<!-- sent="Mon, 15 Dec 2014 07:35:30 -0800" -->
<!-- isosent="20141215153530" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler." -->
<!-- id="CAMD57oejxB=KJeM_wqmpUgvzZCfyCcjm1JCH+UE6JZKquwS7uw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9817575B-88CB-4BA5-B41D-8DBEF46E7BF1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 10:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25997.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="25996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I should have been clearer - that was indeed what I was expecting to
<br>
see. I guess it begs the question - should we just update to something like
<br>
1.9 so Brice doesn't have to worry about back porting future fixes this far
<br>
back?
<br>
<p><p><p>On Mon, Dec 15, 2014 at 7:22 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, if it would be easier, we can just pull a new hwloc tarball --
</span><br>
<span class="quotelev1">&gt; that's how we've done it in the past (vs. trying to pull individual
</span><br>
<span class="quotelev1">&gt; patches).  It's also easier to pull a release tarball, because then we can
</span><br>
<span class="quotelev1">&gt; say &quot;hwloc vX.Y.Z is in OMPI vA.B.C&quot;, rather than have to try to
</span><br>
<span class="quotelev1">&gt; examine/explain what exact level of hwloc is in OMPI (based on patches,
</span><br>
<span class="quotelev1">&gt; etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2014, at 4:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 15/12/2014 10:35, Jorge D'Elia a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Brice,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; De: &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CC: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Enviado: Jueves, 11 de Diciembre 2014 19:46:44
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Asunto: Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a
</span><br>
<span class="quotelev1">&gt; beta gcc 5.0 compiler.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This problem was fixed in hwloc upstream recently.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e">https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Great! However, yesterday I downloaded the versions 1.8.3 (stable) and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.8.4rc3 of OpenMPI, and tried to use its more traditional
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It was OK on ia64 (as before) but failed again on ia32.  Then again,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I had to use the external installation of hwloc in order to fix it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's fixed in &quot;upstream hwloc&quot;, not in OMPI yet. I have prepared a long
</span><br>
<span class="quotelev2">&gt; &gt; branch of hwloc fixes that OMPI should pull, but it will take some time.
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25995.php">http://www.open-mpi.org/community/lists/users/2014/12/25995.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25996.php">http://www.open-mpi.org/community/lists/users/2014/12/25996.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25997.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="25996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
