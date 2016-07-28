<?
$subject_val = "Re: [OMPI users] new map-by-obj has a problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 19:06:34 2014" -->
<!-- isoreceived="20140303000634" -->
<!-- sent="Mon, 3 Mar 2014 09:05:52 +0900" -->
<!-- isosent="20140303000552" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new map-by-obj has a problem" -->
<!-- id="OF715453C1.19FDA926-ON49257C8F.008373A4-49257C90.000097EF_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFE7EF4526.1E42F6A9-ON49257C8E.000A830C-49257C8E.000B7D64_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] new map-by-obj has a problem<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20new%20map-by-obj%20has%20a%20problem"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-02 19:05:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23746.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23744.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23730.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23746.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23746.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I have tested your fix - 30895. I'm afraid to say
<br>
I found a mistake.
<br>
<p>You should include &quot;SETTING BIND_TO_NONE&quot; in the above if-clause
<br>
at the line 74, 256, 511, 656. Othrewise, just warning message
<br>
disappears but binding to core is still overwritten by binding
<br>
to none. Pleaes see attached patch.
<br>
<p>(See attached file: patch_from_30895)
<br>
<p>Tetsuya
<br>
<p><p><span class="quotelev1">&gt; Hi Ralph, I understood what you meant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I often use float for our applicatoin.
</span><br>
<span class="quotelev1">&gt; float c = (float)(unsinged int a - unsinged int b) could
</span><br>
<span class="quotelev1">&gt; be very huge number, if a &lt; b. So I always carefully cast to
</span><br>
<span class="quotelev1">&gt; int from unsigned int when I subtract them. I didn't know/mind
</span><br>
<span class="quotelev1">&gt; inc d = (unsinged int a - unsinged int b) has no problem.
</span><br>
<span class="quotelev1">&gt; I noticed it by your suggestion, thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, I think my fix is not necesarry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, indeed. In future, when we will have many many cores
</span><br>
<span class="quotelev2">&gt; &gt; in the machine, we will have to take care of overrun of
</span><br>
<span class="quotelev2">&gt; &gt; num_procs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cool - easily modified. Thanks!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Of course, you understand (I'm sure) that the cast does nothing to
</span><br>
<span class="quotelev2">&gt; &gt; protect the code from blowing up if we overrun the var. In other words,
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev2">&gt; &gt; the unsigned var has wrapped, then casting it to int
</span><br>
<span class="quotelev3">&gt; &gt; &gt; won't help - you'll still get a negative integer, and the code will
</span><br>
<span class="quotelev2">&gt; &gt; trash.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 28, 2014, at 3:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Ralph, I'm a litte bit late to your release.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I found a minor mistake in byobj_span -integer casting problem.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --- rmaps_rr_mappers.30892.c    2014-03-01 08:31:50 +0900
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; +++ rmaps_rr_mappers.c  2014-03-01 08:33:22 +0900
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; @@ -689,7 +689,7 @@
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     /* compute how many objs need an extra proc */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -    if (0 &gt; (nxtra_objs = app-&gt;num_procs - (navg * nobjs))) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; +    if (0 &gt; (nxtra_objs = (int)app-&gt;num_procs - (navg *
</span><br>
<span class="quotelev1">&gt; (int)nobjs)))
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         nxtra_objs = 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tetsuya
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Please take a look at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4317">https://svn.open-mpi.org/trac/ompi/ticket/4317</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; On Feb 27, 2014, at 8:13 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Hi Ralph, I can't operate our cluster for a few days, sorry.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; But now, I'm narrowing down the cause by browsing the source
</span><br>
code.
<br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; My best guess is the line 529. The
</span><br>
opal_hwloc_base_get_obj_by_type
<br>
<span class="quotelev2">&gt; &gt; will
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; reset the object pointer to the first one when you move on to the
</span><br>
<span class="quotelev2">&gt; &gt; next
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 529                    if (NULL == (obj =
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; opal_hwloc_base_get_obj_by_type
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; (node-&gt;topology, target, cache_level, i, OPAL_HWLOC_AVAILABLE)))
</span><br>
{
<br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 530                        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 531                        return ORTE_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 532                    }
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; if node-&gt;slots=1, then nprocs is set as nprocs=1 in the second
</span><br>
<span class="quotelev1">&gt; pass:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 495            nprocs = (node-&gt;slots - node-&gt;slots_inuse) /
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; orte_rmaps_base.cpus_per_rank;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 496            if (nprocs &lt; 1) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 497                if (second_pass) {
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 498                    /* already checked for oversubscription
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; permission,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; so at least put
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 499                     * one proc on it
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 500                     */
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 501                    nprocs = 1;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Therefore, opal_hwloc_base_get_obj_by_type is called one by one
</span><br>
at
<br>
<span class="quotelev2">&gt; &gt; each
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; node, which means
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; the object we get is always first one.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; It's not elegant but I guess you need dummy calls of
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; opal_hwloc_base_get_obj_by_type to
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; move the object pointer to the right place or modify
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; opal_hwloc_base_get_obj_by_type itself.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; I'm having trouble seeing why it is failing, so I added some
</span><br>
more
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt; debug
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; output. Could you run the failure case again with -mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; rmaps_base_verbose
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 10?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; On Feb 27, 2014, at 6:11 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Just checking the difference, not so significant meaning...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Anyway, I guess it's due to the behavior when slot counts is
</span><br>
<span class="quotelev2">&gt; &gt; missing
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; (regarded as slots=1) and it's oversubscribed unintentionally.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; I'm going out now, so I can't verify it quickly. If I provide
</span><br>
the
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; correct slot counts, it wll work, I guess. How do you think?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; &quot;restore&quot; in what sense?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; On Feb 27, 2014, at 4:10 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph, this is just for your information.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried to restore previous orte_rmaps_rr_byobj. Then I gets
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; result
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; below with this command line:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; socket:pe=2
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -display-map  -bind-to core:overload-allowed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [31184,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num
</span><br>
<span class="quotelev1">&gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; 7
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num
</span><br>
<span class="quotelev1">&gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [31184,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18857] MCW rank 7 bound to socket 0[core 0
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 3 bound to socket 1[core 6
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 4 bound to socket 0[core 0
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 5 bound to socket 1[core 4
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 6 bound to socket 0[core 2
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 0 bound to socket 0[core 0
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 1 bound to socket 1[core 4
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21399] MCW rank 2 bound to socket 0[core 2
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Then I add &quot;-hostfile pbs_hosts&quot; and the result is:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage work]$cat pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05 slots=8
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06 slots=8
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 8 -hostfile
</span><br>
~/work/pbs_hosts
<br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -report-bindings -map-by socket:pe=2 -display-map
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [30254,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 8    Max slots: 0    Num
</span><br>
<span class="quotelev1">&gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; 4
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 8    Max slots: 0    Num
</span><br>
<span class="quotelev1">&gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; 4
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;     Process OMPI jobid: [30254,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21501] MCW rank 2 bound to socket 0[core 2
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21501] MCW rank 3 bound to socket 1[core 6
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21501] MCW rank 0 bound to socket 0[core 0
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:21501] MCW rank 1 bound to socket 1[core 4
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18935] MCW rank 6 bound to socket 0[core 2
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18935] MCW rank 7 bound to socket 1[core 6
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18935] MCW rank 4 bound to socket 0[core 0
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18935] MCW rank 5 bound to socket 1[core 4
</span><br>
[hwt
<br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I think previous version's behavior would be close to what I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; expect.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetusya
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; They have 4 cores/socket and 2 sockets, totally 4 X 2 = 8
</span><br>
<span class="quotelev1">&gt; cores,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; each.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the output of lstopo.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mishima_at_manage round_robin]$ rsh node05
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Tue Feb 18 15:10:15 from manage
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node05 ~]$ lstopo
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#2)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#3)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#5)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#6)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7
</span><br>
+
<br>
<span class="quotelev1">&gt; PU
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; L#7
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (P#7)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I foucused on byobj_span and bynode. I didn't notice byobj
</span><br>
was
<br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; modified,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sorry.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm..what does your node look like again (sockets and
</span><br>
<span class="quotelev1">&gt; cores)?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 27, 2014, at 3:19 PM, tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph, I'm afraid to say your new &quot;map-by obj&quot; causes
</span><br>
<span class="quotelev2">&gt; &gt; another
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have overload message with this command line as shown
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket:pe=2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -display-map ~/mis/openmpi/d
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; emos/myprog
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding
</span><br>
<span class="quotelev2">&gt; &gt; more
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bind to:         CORE
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node:            node05
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #cpus:          1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then, I add &quot;-bind-to core:overload-allowed&quot; to see what
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; happenes.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; socket:pe=2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -display-map -bind-to core:o
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; verload-allowed ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [14398,1] offset 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP
</span><br>
<span class="quotelev1">&gt; ========================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14398,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 6 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 2 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 7 bound to socket 0[core 2
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 3 bound to socket 0[core 2
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 4 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 0 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 5 bound to socket 0[core 2
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 1 bound to socket 0[core 2
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I add &quot;map-by obj:span&quot;, it works fine:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket:pe=2,span
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -display-map  ~/mis/ope
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [14703,1] offset 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP
</span><br>
<span class="quotelev1">&gt; ========================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max
</span><br>
<span class="quotelev1">&gt; slots: 0    Num
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; procs:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Process OMPI jobid: [14703,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 6 bound to socket 0[core 2
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 2 bound to socket 0[core 2
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 7 bound to socket 1[core 6
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 3 bound to socket 1[core 6
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 4 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 0 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 5 bound to socket 1[core 4
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 1 bound to socket 1[core 4
</span><br>
<span class="quotelev1">&gt; [hwt
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, byobj_span would be okay. Of course, bynode and byslot
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; should
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; okay.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could you take a look at orte_rmaps_rr_byobj again?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23745/patch_from_30895">patch_from_30895</a>
</ul>
<!-- attachment="patch_from_30895" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23746.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23744.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23730.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23746.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23746.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
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
