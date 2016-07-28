<?
$subject_val = "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 16:19:22 2016" -->
<!-- isoreceived="20160419201922" -->
<!-- sent="Tue, 19 Apr 2016 15:19:21 -0500" -->
<!-- isosent="20160419201921" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2" -->
<!-- id="CAANzjEm4jC29dy4iULi+7wJxrr0dv6QEUoY8BOdx0ipLaAv9sw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAANzjEn8j_hKB8KPmmim8iJVK=f38NfxQKhGpNvju0GrnWtZTQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 16:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28973.php">Ralph Castain: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28964.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28973.php">Ralph Castain: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="28973.php">Ralph Castain: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an update for the list. Really only impacts folks running Open MPI
<br>
under LSF.
<br>
<p><p>The LSB_PJL_TASK_GEOMETRY changes what lbs_getalloc() returns regarding the
<br>
allocation. It adjusts it to the mapping/ordering specified in that
<br>
environment variable. However, since it is not set by LSF when the job
<br>
starts the LSB_AFFINITY_HOSTFILE will show a broader mapping/ordering. The
<br>
difference between these two requests is the core of the problem here.
<br>
<p>Consider an LSB hostfile with the following:
<br>
=== LSB_AFFINITY_HOSTFILE ===
<br>
p10a33 0,1,2,3,4,5,6,7
<br>
p10a33 8,9,10,11,12,13,14,15
<br>
p10a33 16,17,18,19,20,21,22,23
<br>
p10a30 0,1,2,3,4,5,6,7
<br>
p10a30 8,9,10,11,12,13,14,15
<br>
p10a30 16,17,18,19,20,21,22,23
<br>
p10a58 0,1,2,3,4,5,6,7
<br>
p10a58 8,9,10,11,12,13,14,15
<br>
p10a58 16,17,18,19,20,21,22,23
<br>
=============================
<br>
<p>This tells Open MPI to launch 3 processes per node with a particular set of
<br>
bindings - so 9 processes total.
<br>
<p>export LSB_PJL_TASK_GEOMETRY=&quot;{(5)(4,3)(2,1,0)}&quot;
<br>
<p>The LSB_PJL_TASK_GEOMETRY variable (above) tells us to only launch 6
<br>
processes. So lbs_getalloc() will return to us (ras_lsf_module.c) a list of
<br>
resources that match launching 6 processes. However, when we go to the
<br>
rmaps_seq.c we tell it to pay attention to the LSB_AFFINITY_HOSTFILE. So it
<br>
tries to map 9 processes even though we set the slots on the nodes to be a
<br>
total of 6. So eventually we get an oversubscription issue.
<br>
<p>Interesting difference between 1.10.2 and 1.10.3rc1 - using the
<br>
LSB_AFFINITY_HOSTFILE, seen above.
<br>
In 1.10.2 RAS thinks it has the following allocation (with and without the
<br>
LSB_PJL_TASK_GEOMETRY set):
<br>
======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a33: slots=1 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
In 1.10.3.rc1 RAS thinks it has the following allocation (with the
<br>
LSB_PJL_TASK_GEOMETRY set)
<br>
======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a33: slots=1 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a30: slots=2 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a58: slots=3 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
In 1.10.3.rc1 RAS thinks it has the following allocation (without the
<br>
LSB_PJL_TASK_GEOMETRY set)
<br>
======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a33: slots=3 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a30: slots=3 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p10a58: slots=3 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
<p>The 1.10.3rc1 behavior is what I would expect to happen. The 1.10.2
<br>
behavior seems to be a bug when running under LSF.
<br>
<p>The original error comes from trying to map 3 process on each of the nodes
<br>
(since the affinity file wants to launch 9 processes), but the nodes having
<br>
a more restricted set of slots (Due to the LSB_PJL_TASK_GEOMETRY variable).
<br>
<p><p>I know a number of things have changed from 1.10.2 to 1.10.3 regarding how
<br>
we allocate/map. Ralph, do you know offhand what might have caused this
<br>
difference? It's not a big deal if not, just curious.
<br>
<p><p>I'm working with Farid on some options to work around the issue for 1.10.2.
<br>
Open MPI 1.10.3 seems to be ok for basic LSF functionality (without the
<br>
LSB_PJL_TASK_GEOMETRY variable).
<br>
<p>-- Josh
<br>
<p><p>On Tue, Apr 19, 2016 at 8:57 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Farid,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have access to the same cluster inside IBM. I can try to help you track
</span><br>
<span class="quotelev1">&gt; this down and maybe work up a patch with the LSF folks. I'll contact you
</span><br>
<span class="quotelev1">&gt; off-list with my IBM address and we can work on this a bit.
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
<span class="quotelev1">&gt; On Tue, Apr 19, 2016 at 5:06 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 18, 2016, at 7:08 PM, Farid Parpia &lt;parpia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I will try to put you in touch with someone in LSF development
</span><br>
<span class="quotelev2">&gt;&gt; immediately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: It would be great if IBM could contribute the fixes to this.  None
</span><br>
<span class="quotelev2">&gt;&gt; of us have access to LSF resources, and IBM is a core contributor to Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28963.php">http://www.open-mpi.org/community/lists/users/2016/04/28963.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28973.php">Ralph Castain: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28964.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28973.php">Ralph Castain: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="28973.php">Ralph Castain: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
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
