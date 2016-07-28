<?
$subject_val = "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 09:06:04 2014" -->
<!-- isoreceived="20140321130604" -->
<!-- sent="Fri, 21 Mar 2014 06:04:17 -0700" -->
<!-- isosent="20140321130417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coll_ml_priority in openmpi-1.7.5" -->
<!-- id="2E293CAE-AE8F-4D34-8181-0674CBEA5C75_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF6613BC87.0107852C-ON49257CA2.0000D4AD-49257CA2.00053AD9_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 09:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23914.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23906.php">tmishima_at_[hidden]: "[OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2014, at 5:56 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, congratulations on releasing new openmpi-1.7.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, opnempi-1.7.5rc3 has been slowing down our application
</span><br>
<span class="quotelev1">&gt; with smaller size of testing data, where the time consuming part
</span><br>
<span class="quotelev1">&gt; of our application is so called sparse solver. It's negligible
</span><br>
<span class="quotelev1">&gt; with medium or large size data - more practical one, so I have
</span><br>
<span class="quotelev1">&gt; been defering this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, this slowdown disappears in the final version of
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.5. After some investigations, I found coll_ml caused
</span><br>
<span class="quotelev1">&gt; this slowdown. The final version seems to set coll_ml_priority as zero
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you explain briefly about the advantage of coll_ml? In what kind
</span><br>
<span class="quotelev1">&gt; of situation it's effective and so on ...
</span><br>
<p>I'm not really the one to speak about coll/ml as I wasn't involved in it - Nathan would be the one to ask. It is supposed to be significantly faster for most collectives, but I imagine it would depend on the precise collective being used and the size of the data. We did find and fix a number of problems right at the end (which is why we dropped the priority until we can better test/debug it), and so we might have hit something that was causing your slow down.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, I'm not sure why coll_my is activated in openmpi-1.7.5rc3,
</span><br>
<span class="quotelev1">&gt; although its priority is lower than tuned as described in the message
</span><br>
<span class="quotelev1">&gt; of changeset 30790:
</span><br>
<span class="quotelev1">&gt;  We are initially setting the priority lower than
</span><br>
<span class="quotelev1">&gt;  tuned until this has had some time to soak in the trunk.
</span><br>
<p>Were you actually seeing coll/ml being used? It shouldn't have been. However, coll/ml was getting called during the collective initialization phase so it could set itself up, even if it wasn't being used. One part of its setup is a somewhat expensive connectivity computation - one of our last-minute cleanups was removal of a static 1MB array in that procedure. Changing the priority to 0 completely disables the coll/ml component, thus removing it from even the initialization phase. My guess is that you were seeing a measurable &quot;hit&quot; by that procedure on your small data tests, which probably ran fairly quickly - and not seeing it on the other tests because the setup time was swamped by the computation time.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23914.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23912.php">Ralph Castain: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23906.php">tmishima_at_[hidden]: "[OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
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
