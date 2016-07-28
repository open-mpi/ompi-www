<?
$subject_val = "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 19:00:43 2014" -->
<!-- isoreceived="20140321230043" -->
<!-- sent="Sat, 22 Mar 2014 08:00:17 +0900" -->
<!-- isosent="20140321230017" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coll_ml_priority in openmpi-1.7.5" -->
<!-- id="OF6309636D.3FB32848-ON49257CA2.007DF42E-49257CA2.007E6B9A_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F6995C06-B672-446F-A2C9-3C23B443E6A1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] coll_ml_priority in openmpi-1.7.5<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20coll_ml_priority%20in%20openmpi-1.7.5"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-21 19:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23936.php">Ross Boylan: "[OMPI users] delays in Isend"</a>
<li><strong>Previous message:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>In reply to:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could roughly understand what the coll_ml is and how you
<br>
are going to treat it, thanks.
<br>
<p>As Ralph pointed out, I didn't see coll_ml was really used.
<br>
I just thought the slowdown meant it was used. I'll check it
<br>
later. It might be due to the expensive connectivity computation.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; One of the authors of ML mentioned to me off-list that he has an idea
</span><br>
what might have been causing the slowdown.  They're actively working on
<br>
tweaking and making things better.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I told them to ping you -- the whole point is that ml is supposed to be
</span><br>
*better* than our existing collectives, so if it's not, we should fix that
<br>
before we make ml be the default.  :-)
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2014, at 9:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 20, 2014, at 5:56 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph, congratulations on releasing new openmpi-1.7.5.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; By the way, opnempi-1.7.5rc3 has been slowing down our application
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with smaller size of testing data, where the time consuming part
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of our application is so called sparse solver. It's negligible
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with medium or large size data - more practical one, so I have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; been defering this problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, this slowdown disappears in the final version of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi-1.7.5. After some investigations, I found coll_ml caused
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this slowdown. The final version seems to set coll_ml_priority as zero
</span><br>
<span class="quotelev3">&gt; &gt;&gt; again.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could you explain briefly about the advantage of coll_ml? In what kind
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of situation it's effective and so on ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not really the one to speak about coll/ml as I wasn't involved in
</span><br>
it - Nathan would be the one to ask. It is supposed to be significantly
<br>
faster for most collectives, but I imagine it would
<br>
<span class="quotelev1">&gt; depend on the precise collective being used and the size of the data. We
</span><br>
did find and fix a number of problems right at the end (which is why we
<br>
dropped the priority until we can better test/debug
<br>
<span class="quotelev1">&gt; it), and so we might have hit something that was causing your slow down.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In addition, I'm not sure why coll_my is activated in
</span><br>
openmpi-1.7.5rc3,
<br>
<span class="quotelev3">&gt; &gt;&gt; although its priority is lower than tuned as described in the message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of changeset 30790:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We are initially setting the priority lower than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tuned until this has had some time to soak in the trunk.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Were you actually seeing coll/ml being used? It shouldn't have been.
</span><br>
However, coll/ml was getting called during the collective initialization
<br>
phase so it could set itself up, even if it wasn't
<br>
<span class="quotelev1">&gt; being used. One part of its setup is a somewhat expensive connectivity
</span><br>
computation - one of our last-minute cleanups was removal of a static 1MB
<br>
array in that procedure. Changing the priority to 0
<br>
<span class="quotelev1">&gt; completely disables the coll/ml component, thus removing it from even the
</span><br>
initialization phase. My guess is that you were seeing a measurable &quot;hit&quot;
<br>
by that procedure on your small data tests, which
<br>
<span class="quotelev1">&gt; probably ran fairly quickly - and not seeing it on the other tests
</span><br>
because the setup time was swamped by the computation time.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23936.php">Ross Boylan: "[OMPI users] delays in Isend"</a>
<li><strong>Previous message:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>In reply to:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
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
