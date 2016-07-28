<?
$subject_val = "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:11:44 2014" -->
<!-- isoreceived="20140325141144" -->
<!-- sent="Tue, 25 Mar 2014 14:11:42 +0000" -->
<!-- isosent="20140325141142" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coll_ml_priority in openmpi-1.7.5" -->
<!-- id="B098F4BF-583F-4789-8157-34180B00239A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF283577CA.047617B1-ON49257CA5.001D4924-49257CA6.000C1A72_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2014-03-25 10:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23961.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Nathan has a few coll ml fixes queued up for 1.8.
<br>
<p>On Mar 24, 2014, at 10:11 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran our application using the final version of openmpi-1.7.5 again
</span><br>
<span class="quotelev1">&gt; with coll_ml_priority = 90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, coll/ml was actually activated and I got these error messages
</span><br>
<span class="quotelev1">&gt; as shown below:
</span><br>
<span class="quotelev1">&gt; [manage][[11217,1],0][coll_ml_lmngr.c:265:mca_coll_ml_lmngr_alloc] COLL-ML
</span><br>
<span class="quotelev1">&gt; List manager is empty.
</span><br>
<span class="quotelev1">&gt; [manage][[11217,1],0][coll_ml_allocation.c:47:mca_coll_ml_allocate_block]
</span><br>
<span class="quotelev1">&gt; COLL-ML lmngr failed.
</span><br>
<span class="quotelev1">&gt; [manage][[11217,1],0][coll_ml_module.c:532:ml_module_memory_initialization]
</span><br>
<span class="quotelev1">&gt; COLL-ML mca_coll_ml_allocate_block exited wi
</span><br>
<span class="quotelev1">&gt; th error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately coll/ml seems to still have some problems ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And, it also means coll/ml was not activated on my test run with
</span><br>
<span class="quotelev1">&gt; coll_ml_priority = 27. So, the slowdown was due to the expensive
</span><br>
<span class="quotelev1">&gt; connectivity computation as you pointed out, I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2014, at 5:56 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph, congratulations on releasing new openmpi-1.7.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By the way, opnempi-1.7.5rc3 has been slowing down our application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with smaller size of testing data, where the time consuming part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of our application is so called sparse solver. It's negligible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with medium or large size data - more practical one, so I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been defering this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, this slowdown disappears in the final version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.7.5. After some investigations, I found coll_ml caused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this slowdown. The final version seems to set coll_ml_priority as zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you explain briefly about the advantage of coll_ml? In what kind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of situation it's effective and so on ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not really the one to speak about coll/ml as I wasn't involved in it
</span><br>
<span class="quotelev1">&gt; - Nathan would be the one to ask. It is supposed to be significantly faster
</span><br>
<span class="quotelev1">&gt; for most collectives, but I imagine it would
</span><br>
<span class="quotelev2">&gt;&gt; depend on the precise collective being used and the size of the data. We
</span><br>
<span class="quotelev1">&gt; did find and fix a number of problems right at the end (which is why we
</span><br>
<span class="quotelev1">&gt; dropped the priority until we can better test/debug
</span><br>
<span class="quotelev2">&gt;&gt; it), and so we might have hit something that was causing your slow down.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition, I'm not sure why coll_my is activated in openmpi-1.7.5rc3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; although its priority is lower than tuned as described in the message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of changeset 30790:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are initially setting the priority lower than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tuned until this has had some time to soak in the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Were you actually seeing coll/ml being used? It shouldn't have been.
</span><br>
<span class="quotelev1">&gt; However, coll/ml was getting called during the collective initialization
</span><br>
<span class="quotelev1">&gt; phase so it could set itself up, even if it wasn't being
</span><br>
<span class="quotelev2">&gt;&gt; used. One part of its setup is a somewhat expensive connectivity
</span><br>
<span class="quotelev1">&gt; computation - one of our last-minute cleanups was removal of a static 1MB
</span><br>
<span class="quotelev1">&gt; array in that procedure. Changing the priority to 0
</span><br>
<span class="quotelev2">&gt;&gt; completely disables the coll/ml component, thus removing it from even the
</span><br>
<span class="quotelev1">&gt; initialization phase. My guess is that you were seeing a measurable &quot;hit&quot;
</span><br>
<span class="quotelev1">&gt; by that procedure on your small data tests, which
</span><br>
<span class="quotelev2">&gt;&gt; probably ran fairly quickly - and not seeing it on the other tests
</span><br>
<span class="quotelev1">&gt; because the setup time was swamped by the computation time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23961.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
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
