<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 11:17:10 2014" -->
<!-- isoreceived="20141215161710" -->
<!-- sent="Mon, 15 Dec 2014 17:17:08 +0100" -->
<!-- isosent="20141215161708" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler." -->
<!-- id="548F0984.4080002_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DBED6BC7-A4D6-4747-A2D3-FA3EDA4729A5_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 11:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26001.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26001.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="26001.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/12/2014 16:39, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; The only real question is: will upgrading hwloc break anything else inside the v1.8 tree?  E.g., did new hwloc abstractions/APIs come in after v1.7 that we've adapted to on the trunk, but didn't adapt to on the v1.8 branch?
</span><br>
<p>I wouldn't expect any such problem when upgrading from hwloc 1.7 to 1.9.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2014, at 10:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I should have been clearer - that was indeed what I was expecting to see. I guess it begs the question - should we just update to something like 1.9 so Brice doesn't have to worry about back porting future fixes this far back?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 15, 2014 at 7:22 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, if it would be easier, we can just pull a new hwloc tarball -- that's how we've done it in the past (vs. trying to pull individual patches).  It's also easier to pull a release tarball, because then we can say &quot;hwloc vX.Y.Z is in OMPI vA.B.C&quot;, rather than have to try to examine/explain what exact level of hwloc is in OMPI (based on patches, etc.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2014, at 4:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 15/12/2014 10:35, Jorge D'Elia a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; De: &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Enviado: Jueves, 11 de Diciembre 2014 19:46:44
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Asunto: Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This problem was fixed in hwloc upstream recently.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e">https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Great! However, yesterday I downloaded the versions 1.8.3 (stable) and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.8.4rc3 of OpenMPI, and tried to use its more traditional configuration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It was OK on ia64 (as before) but failed again on ia32.  Then again,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had to use the external installation of hwloc in order to fix it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's fixed in &quot;upstream hwloc&quot;, not in OMPI yet. I have prepared a long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch of hwloc fixes that OMPI should pull, but it will take some time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25995.php">http://www.open-mpi.org/community/lists/users/2014/12/25995.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25996.php">http://www.open-mpi.org/community/lists/users/2014/12/25996.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25998.php">http://www.open-mpi.org/community/lists/users/2014/12/25998.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26001.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="25999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26001.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Reply:</strong> <a href="26001.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
