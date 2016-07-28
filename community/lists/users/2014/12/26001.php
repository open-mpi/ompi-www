<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 11:40:57 2014" -->
<!-- isoreceived="20141215164057" -->
<!-- sent="Mon, 15 Dec 2014 08:40:54 -0800" -->
<!-- isosent="20141215164054" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler." -->
<!-- id="CAMD57oeYHd6kaBmW0zXknTuYYfGpspj5b5u6h8UJrBhzA0VsjQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="548F0984.4080002_at_inria.fr" -->
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
<strong>Date:</strong> 2014-12-15 11:40:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26002.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26000.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="26000.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I recall it was quite clean when I did the upgrade on the trunk. I
<br>
may take a pass at it and see if anything breaks since it is so easy now to
<br>
do. :-)
<br>
<p><p><p>On Mon, Dec 15, 2014 at 8:17 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 15/12/2014 16:39, Jeff Squyres (jsquyres) a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; The only real question is: will upgrading hwloc break anything else
</span><br>
<span class="quotelev1">&gt; inside the v1.8 tree?  E.g., did new hwloc abstractions/APIs come in after
</span><br>
<span class="quotelev1">&gt; v1.7 that we've adapted to on the trunk, but didn't adapt to on the v1.8
</span><br>
<span class="quotelev1">&gt; branch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wouldn't expect any such problem when upgrading from hwloc 1.7 to 1.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 15, 2014, at 10:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry, I should have been clearer - that was indeed what I was
</span><br>
<span class="quotelev1">&gt; expecting to see. I guess it begs the question - should we just update to
</span><br>
<span class="quotelev1">&gt; something like 1.9 so Brice doesn't have to worry about back porting future
</span><br>
<span class="quotelev1">&gt; fixes this far back?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Dec 15, 2014 at 7:22 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FWIW, if it would be easier, we can just pull a new hwloc tarball --
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
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 15, 2014, at 4:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Le 15/12/2014 10:35, Jorge D'Elia a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; De: &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; CC: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Enviado: Jueves, 11 de Diciembre 2014 19:46:44
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Asunto: Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using
</span><br>
<span class="quotelev1">&gt; a beta gcc 5.0 compiler.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This problem was fixed in hwloc upstream recently.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e">https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Great! However, yesterday I downloaded the versions 1.8.3 (stable) and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.8.4rc3 of OpenMPI, and tried to use its more traditional
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It was OK on ia64 (as before) but failed again on ia32.  Then again,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I had to use the external installation of hwloc in order to fix it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It's fixed in &quot;upstream hwloc&quot;, not in OMPI yet. I have prepared a long
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; branch of hwloc fixes that OMPI should pull, but it will take some
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25995.php">http://www.open-mpi.org/community/lists/users/2014/12/25995.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25996.php">http://www.open-mpi.org/community/lists/users/2014/12/25996.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25998.php">http://www.open-mpi.org/community/lists/users/2014/12/25998.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26000.php">http://www.open-mpi.org/community/lists/users/2014/12/26000.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26002.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26000.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="26000.php">Brice Goglin: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
