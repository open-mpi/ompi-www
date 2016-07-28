<?
$subject_val = "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 17:41:31 2014" -->
<!-- isoreceived="20140321214131" -->
<!-- sent="Fri, 21 Mar 2014 21:41:29 +0000" -->
<!-- isosent="20140321214129" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coll_ml_priority in openmpi-1.7.5" -->
<!-- id="F6995C06-B672-446F-A2C9-3C23B443E6A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2E293CAE-AE8F-4D34-8181-0674CBEA5C75_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 17:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>In reply to:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the authors of ML mentioned to me off-list that he has an idea what might have been causing the slowdown.  They're actively working on tweaking and making things better.
<br>
<p>I told them to ping you -- the whole point is that ml is supposed to be *better* than our existing collectives, so if it's not, we should fix that before we make ml be the default.  :-)
<br>
<p><p>On Mar 21, 2014, at 9:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2014, at 5:56 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, congratulations on releasing new openmpi-1.7.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By the way, opnempi-1.7.5rc3 has been slowing down our application
</span><br>
<span class="quotelev2">&gt;&gt; with smaller size of testing data, where the time consuming part
</span><br>
<span class="quotelev2">&gt;&gt; of our application is so called sparse solver. It's negligible
</span><br>
<span class="quotelev2">&gt;&gt; with medium or large size data - more practical one, so I have
</span><br>
<span class="quotelev2">&gt;&gt; been defering this problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, this slowdown disappears in the final version of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.7.5. After some investigations, I found coll_ml caused
</span><br>
<span class="quotelev2">&gt;&gt; this slowdown. The final version seems to set coll_ml_priority as zero
</span><br>
<span class="quotelev2">&gt;&gt; again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you explain briefly about the advantage of coll_ml? In what kind
</span><br>
<span class="quotelev2">&gt;&gt; of situation it's effective and so on ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not really the one to speak about coll/ml as I wasn't involved in it - Nathan would be the one to ask. It is supposed to be significantly faster for most collectives, but I imagine it would depend on the precise collective being used and the size of the data. We did find and fix a number of problems right at the end (which is why we dropped the priority until we can better test/debug it), and so we might have hit something that was causing your slow down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In addition, I'm not sure why coll_my is activated in openmpi-1.7.5rc3,
</span><br>
<span class="quotelev2">&gt;&gt; although its priority is lower than tuned as described in the message
</span><br>
<span class="quotelev2">&gt;&gt; of changeset 30790:
</span><br>
<span class="quotelev2">&gt;&gt; We are initially setting the priority lower than
</span><br>
<span class="quotelev2">&gt;&gt; tuned until this has had some time to soak in the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Were you actually seeing coll/ml being used? It shouldn't have been. However, coll/ml was getting called during the collective initialization phase so it could set itself up, even if it wasn't being used. One part of its setup is a somewhat expensive connectivity computation - one of our last-minute cleanups was removal of a static 1MB array in that procedure. Changing the priority to 0 completely disables the coll/ml component, thus removing it from even the initialization phase. My guess is that you were seeing a measurable &quot;hit&quot; by that procedure on your small data tests, which probably ran fairly quickly - and not seeing it on the other tests because the setup time was swamped by the computation time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
<li><strong>In reply to:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
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
