<?
$subject_val = "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 16:42:12 2016" -->
<!-- isoreceived="20160419204212" -->
<!-- sent="Tue, 19 Apr 2016 13:42:09 -0700" -->
<!-- isosent="20160419204209" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2" -->
<!-- id="FCD40A42-0B4B-4A71-BEE4-23E312E50560_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAANzjEm4jC29dy4iULi+7wJxrr0dv6QEUoY8BOdx0ipLaAv9sw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 16:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28974.php">dpchoudh .: "[OMPI users] make install warns about 'common symbols'"</a>
<li><strong>Previous message:</strong> <a href="28972.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="28972.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;I&#226;&#128;&#153;m not entirely sure what might be specifically causing the differences you cite. We didn&#226;&#128;&#153;t make any changes to the LSF components, so that wouldn&#226;&#128;&#153;t be it. The main things I can recall involved how we handle hostfile and -host specifications, and when we directly sense the available cpus on each node.
<br>
<p>My guess is that something in the LSF RAS component may be interacting with those changes, but I&#226;&#128;&#153;d have to look closer at what goes on in there to really tell. I&#226;&#128;&#153;d recommend someone &#226;&#128;&#156;scrub&#226;&#128;&#157; the RAS component as it has gone many years without an update, and was never all that carefully constructed.
<br>
<p><p><span class="quotelev1">&gt; On Apr 19, 2016, at 1:19 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just an update for the list. Really only impacts folks running Open MPI under LSF.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The LSB_PJL_TASK_GEOMETRY changes what lbs_getalloc() returns regarding the allocation. It adjusts it to the mapping/ordering specified in that environment variable. However, since it is not set by LSF when the job starts the LSB_AFFINITY_HOSTFILE will show a broader mapping/ordering. The difference between these two requests is the core of the problem here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider an LSB hostfile with the following:
</span><br>
<span class="quotelev1">&gt; === LSB_AFFINITY_HOSTFILE ===
</span><br>
<span class="quotelev1">&gt; p10a33 0,1,2,3,4,5,6,7
</span><br>
<span class="quotelev1">&gt; p10a33 8,9,10,11,12,13,14,15
</span><br>
<span class="quotelev1">&gt; p10a33 16,17,18,19,20,21,22,23
</span><br>
<span class="quotelev1">&gt; p10a30 0,1,2,3,4,5,6,7
</span><br>
<span class="quotelev1">&gt; p10a30 8,9,10,11,12,13,14,15
</span><br>
<span class="quotelev1">&gt; p10a30 16,17,18,19,20,21,22,23
</span><br>
<span class="quotelev1">&gt; p10a58 0,1,2,3,4,5,6,7
</span><br>
<span class="quotelev1">&gt; p10a58 8,9,10,11,12,13,14,15
</span><br>
<span class="quotelev1">&gt; p10a58 16,17,18,19,20,21,22,23
</span><br>
<span class="quotelev1">&gt; =============================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This tells Open MPI to launch 3 processes per node with a particular set of bindings - so 9 processes total.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The LSB_PJL_TASK_GEOMETRY variable (above) tells us to only launch 6 processes. So lbs_getalloc() will return to us (ras_lsf_module.c) a list of resources that match launching 6 processes. However, when we go to the rmaps_seq.c we tell it to pay attention to the LSB_AFFINITY_HOSTFILE. So it tries to map 9 processes even though we set the slots on the nodes to be a total of 6. So eventually we get an oversubscription issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting difference between 1.10.2 and 1.10.3rc1 - using the LSB_AFFINITY_HOSTFILE, seen above.
</span><br>
<span class="quotelev1">&gt; In 1.10.2 RAS thinks it has the following allocation (with and without the LSB_PJL_TASK_GEOMETRY set):
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;         p10a33: slots=1 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; In 1.10.3.rc1 RAS thinks it has the following allocation (with the LSB_PJL_TASK_GEOMETRY set)
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;         p10a33: slots=1 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt;         p10a30: slots=2 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt;         p10a58: slots=3 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; In 1.10.3.rc1 RAS thinks it has the following allocation (without the LSB_PJL_TASK_GEOMETRY set)
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;         p10a33: slots=3 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt;         p10a30: slots=3 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt;         p10a58: slots=3 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 1.10.3rc1 behavior is what I would expect to happen. The 1.10.2 behavior seems to be a bug when running under LSF.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The original error comes from trying to map 3 process on each of the nodes (since the affinity file wants to launch 9 processes), but the nodes having a more restricted set of slots (Due to the LSB_PJL_TASK_GEOMETRY variable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know a number of things have changed from 1.10.2 to 1.10.3 regarding how we allocate/map. Ralph, do you know offhand what might have caused this difference? It's not a big deal if not, just curious.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working with Farid on some options to work around the issue for 1.10.2. Open MPI 1.10.3 seems to be ok for basic LSF functionality (without the LSB_PJL_TASK_GEOMETRY variable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 19, 2016 at 8:57 AM, Josh Hursey &lt;jjhursey_at_[hidden] &lt;mailto:jjhursey_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Farid,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have access to the same cluster inside IBM. I can try to help you track this down and maybe work up a patch with the LSF folks. I'll contact you off-list with my IBM address and we can work on this a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll post back to the list with what we found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 19, 2016 at 5:06 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Apr 18, 2016, at 7:08 PM, Farid Parpia &lt;parpia_at_[hidden] &lt;mailto:parpia_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will try to put you in touch with someone in LSF development immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: It would be great if IBM could contribute the fixes to this.  None of us have access to LSF resources, and IBM is a core contributor to Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28963.php">http://www.open-mpi.org/community/lists/users/2016/04/28963.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/28963.php">http://www.open-mpi.org/community/lists/users/2016/04/28963.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28972.php">http://www.open-mpi.org/community/lists/users/2016/04/28972.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/28972.php">http://www.open-mpi.org/community/lists/users/2016/04/28972.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28973/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28974.php">dpchoudh .: "[OMPI users] make install warns about 'common symbols'"</a>
<li><strong>Previous message:</strong> <a href="28972.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="28972.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
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
