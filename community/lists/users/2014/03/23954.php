<?
$subject_val = "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 22:12:14 2014" -->
<!-- isoreceived="20140325021214" -->
<!-- sent="Tue, 25 Mar 2014 11:11:25 +0900" -->
<!-- isosent="20140325021125" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coll_ml_priority in openmpi-1.7.5" -->
<!-- id="OF283577CA.047617B1-ON49257CA5.001D4924-49257CA6.000C1A72_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20coll_ml_priority%20in%20openmpi-1.7.5"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-24 22:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23955.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran our application using the final version of openmpi-1.7.5 again
<br>
with coll_ml_priority = 90.
<br>
<p>Then, coll/ml was actually activated and I got these error messages
<br>
as shown below:
<br>
[manage][[11217,1],0][coll_ml_lmngr.c:265:mca_coll_ml_lmngr_alloc] COLL-ML
<br>
List manager is empty.
<br>
[manage][[11217,1],0][coll_ml_allocation.c:47:mca_coll_ml_allocate_block]
<br>
COLL-ML lmngr failed.
<br>
[manage][[11217,1],0][coll_ml_module.c:532:ml_module_memory_initialization]
<br>
COLL-ML mca_coll_ml_allocate_block exited wi
<br>
th error.
<br>
<p>Unfortunately coll/ml seems to still have some problems ...
<br>
<p>And, it also means coll/ml was not activated on my test run with
<br>
coll_ml_priority = 27. So, the slowdown was due to the expensive
<br>
connectivity computation as you pointed out, I guess.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; On Mar 20, 2014, at 5:56 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, congratulations on releasing new openmpi-1.7.5.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By the way, opnempi-1.7.5rc3 has been slowing down our application
</span><br>
<span class="quotelev2">&gt; &gt; with smaller size of testing data, where the time consuming part
</span><br>
<span class="quotelev2">&gt; &gt; of our application is so called sparse solver. It's negligible
</span><br>
<span class="quotelev2">&gt; &gt; with medium or large size data - more practical one, so I have
</span><br>
<span class="quotelev2">&gt; &gt; been defering this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, this slowdown disappears in the final version of
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.7.5. After some investigations, I found coll_ml caused
</span><br>
<span class="quotelev2">&gt; &gt; this slowdown. The final version seems to set coll_ml_priority as zero
</span><br>
<span class="quotelev2">&gt; &gt; again.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you explain briefly about the advantage of coll_ml? In what kind
</span><br>
<span class="quotelev2">&gt; &gt; of situation it's effective and so on ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not really the one to speak about coll/ml as I wasn't involved in it
</span><br>
- Nathan would be the one to ask. It is supposed to be significantly faster
<br>
for most collectives, but I imagine it would
<br>
<span class="quotelev1">&gt; depend on the precise collective being used and the size of the data. We
</span><br>
did find and fix a number of problems right at the end (which is why we
<br>
dropped the priority until we can better test/debug
<br>
<span class="quotelev1">&gt; it), and so we might have hit something that was causing your slow down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In addition, I'm not sure why coll_my is activated in openmpi-1.7.5rc3,
</span><br>
<span class="quotelev2">&gt; &gt; although its priority is lower than tuned as described in the message
</span><br>
<span class="quotelev2">&gt; &gt; of changeset 30790:
</span><br>
<span class="quotelev2">&gt; &gt;  We are initially setting the priority lower than
</span><br>
<span class="quotelev2">&gt; &gt;  tuned until this has had some time to soak in the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Were you actually seeing coll/ml being used? It shouldn't have been.
</span><br>
However, coll/ml was getting called during the collective initialization
<br>
phase so it could set itself up, even if it wasn't being
<br>
<span class="quotelev1">&gt; used. One part of its setup is a somewhat expensive connectivity
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
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
<li><strong>Next message:</strong> <a href="23955.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23913.php">Ralph Castain: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Reply:</strong> <a href="23962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
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
