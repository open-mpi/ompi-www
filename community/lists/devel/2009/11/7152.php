<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 10:21:48 2009" -->
<!-- isoreceived="20091127152148" -->
<!-- sent="Fri, 27 Nov 2009 16:23:21 +0100 (CET)" -->
<!-- isosent="20091127152321" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="alpine.DEB.2.00.0911271616020.4347_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="307CD3C7-C2AF-4AD7-8147-3804C72E9A33_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-27 10:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7153.php">Kenneth Lloyd: "Re: [OMPI devel] SC09 OMPI-related slides"</a>
<li><strong>Previous message:</strong> <a href="7151.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7150.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7154.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7154.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I tried with the trunk and it makes no difference for me.
<br>
<p>Looking at potential differences, I found out something strange. The bug 
<br>
may have something to do with the &quot;routed&quot; framework. I can reproduce the 
<br>
bug with binomial and direct, but not with cm and linear (you disabled the 
<br>
build of the latest in your configure options -- why ?).
<br>
<p>Btw, all components have a 0 priority and none is defined to be the 
<br>
default component. Which one is the default then ? binomial (as the first 
<br>
in alphabetical order) ?
<br>
<p>Can you check which one you are using and try with binomial explicitely 
<br>
chosen ?
<br>
<p>Thanks for your time,
<br>
Sylvain
<br>
<p>On Thu, 26 Nov 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I hate to tell you this, but I cannot reproduce the &quot;bug&quot; even with this code in ORTE no matter what value of ORTE_RELAY_DELAY I use. The system runs really slow as I increase the delay, but it completes the job just fine. I ran jobs across 16 nodes on a slurm machine, 1-4 ppn, a &quot;hello world&quot; app that calls MPI_Init immediately upon execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have to conclude this is a problem in your setup/config. Are you sure you didn't --enable-progress-threads?? That is the only way I can recreate this behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I plan to modify the relay/message processing method anyway to clean it up. But there doesn't appear to be anything wrong with the current code.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2009, at 6:55 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your efforts. I will look at our configuration and see how it may differ from ours.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a patch which helps reproducing the bug even with a small number of nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff -r b622b9e8f1ac orte/orted/orted_comm.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/orted/orted_comm.c   Wed Nov 18 09:27:55 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/orted/orted_comm.c   Fri Nov 20 14:47:39 2009 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -126,6 +126,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt;&gt;             goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; +        { /* Add delay to reproduce bug */
</span><br>
<span class="quotelev2">&gt;&gt; +            char * str = getenv(&quot;ORTE_RELAY_DELAY&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +            int sec = str ? atoi(str) : 0;
</span><br>
<span class="quotelev2">&gt;&gt; +            if (sec) {
</span><br>
<span class="quotelev2">&gt;&gt; +                sleep(sec);
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CLEANUP:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just set ORTE_RELAY_DELAY to 1 (second) and you should reproduce the bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During our experiments, the bug disappeared when we added a delay before calling MPI_Init. So, configurations where processes are launched slowly or take some time before MPI_Init should be immune to this bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We usually reproduce the bug with one ppn (faster to spawn).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 19 Nov 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've spent several hours trying to replicate the behavior you described on clusters up to a couple of hundred nodes (all running slurm), without success. I'm becoming increasingly convinced that this is a configuration issue as opposed to a code issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have enclosed the platform file I use below. Could you compare it to your configuration? I'm wondering if there is something critical about the config that may be causing the problem (perhaps we have a problem in our default configuration).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, is there anything else you can tell us about your configuration? How many ppn triggers it, or do you always get the behavior every time you launch over a certain number of nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meantime, I will look into this further. I am going to introduce a &quot;slow down&quot; param that will force the situation you encountered - i.e., will ensure that the relay is still being sent when the daemon receives the first collective input. We can then use that to try and force replication of the behavior you are encountering.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_dlopen=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_pty_support=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_blcr=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_openib=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_memory_manager=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mem_debug=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_debug_symbols=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_binaries=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_devel_headers=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_heterogeneous=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_picky=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_debug=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_shared=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_static=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with_slurm=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_contrib_no_build=libnbc,vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_visibility=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_ipv6=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_f77=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_f90=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_cxx=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mpi_cxx_seek=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_mca_no_build=pml-dr,pml-crcp2,crcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_io_romio=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 19, 2009, at 8:08 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 19, 2009, at 7:52 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you Ralph for this precious help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I setup a quick-and-dirty patch basically postponing process_msg (hence daemon_collective) until the launch is done. In process_msg, I therefore requeue a process_msg handler and return.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That is basically the idea I proposed, just done in a slightly different place
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this &quot;all-must-be-non-blocking-and-done-through-opal_progress&quot; algorithm, I don't think that blocking calls like the one in daemon_collective should be allowed. This also applies to the blocking one in send_relay. [Well, actually, one is okay, 2 may lead to interlocking.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, that would be problematic - you will find &quot;progressed_wait&quot; used repeatedly in the code. Removing them all would take a -lot- of effort and a major rewrite. I'm not yet convinced it is required. There may be something strange in how you are setup, or your cluster - like I said, this is the first report of a problem we have had, and people with much bigger slurm clusters have been running this code every day for over a year.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you have time doing a nicer patch, it would be great and I would be happy to test it. Otherwise, I will try to implement your idea properly next week (with my limited knowledge of orted).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Either way is fine - I'll see if I can get to it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For the record, here is the patch I'm currently testing at large scale :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; diff -r ec68298b3169 -r b622b9e8f1ac orte/mca/grpcomm/bad/grpcomm_bad_module.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- a/orte/mca/grpcomm/bad/grpcomm_bad_module.c Mon Nov 09 13:29:16 2009 +0100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ b/orte/mca/grpcomm/bad/grpcomm_bad_module.c Wed Nov 18 09:27:55 2009 +0100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -687,14 +687,6 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       opal_list_append(&amp;orte_local_jobdata, &amp;jobdat-&gt;super);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    /* it may be possible to get here prior to having actually finished processing our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     * local launch msg due to the race condition between different nodes and when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     * they start their individual procs. Hence, we have to first ensure that we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     * -have- finished processing the launch msg, or else we won't know whether
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     * or not to wait before sending this on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -     */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    ORTE_PROGRESSED_WAIT(jobdat-&gt;launch_msg_processed, 0, 1);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   /* unpack the collective type */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   n = 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if (ORTE_SUCCESS != (rc = opal_dss.unpack(data, &amp;jobdat-&gt;collective_type, &amp;n, ORTE_GRPCOMM_COLL_T))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -894,6 +886,28 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   proc = &amp;mev-&gt;sender;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   buf = mev-&gt;buffer;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    jobdat = NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    for (item = opal_list_get_first(&amp;orte_local_jobdata);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         item != opal_list_get_end(&amp;orte_local_jobdata);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        jobdat = (orte_odls_job_t*)item;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        /* is this the specified job? */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        if (jobdat-&gt;jobid == proc-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            break;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    if (NULL == jobdat || jobdat-&gt;launch_msg_processed != 1) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        /* it may be possible to get here prior to having actually finished processing our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         * local launch msg due to the race condition between different nodes and when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         * they start their individual procs. Hence, we have to first ensure that we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         * -have- finished processing the launch msg. Requeue this event until it is done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +         */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        int tag = &amp;mev-&gt;tag;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        ORTE_MESSAGE_EVENT(proc, buf, tag, process_msg);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        return;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   /* is the sender a local proc, or a daemon relaying the collective? */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if (ORTE_PROC_MY_NAME-&gt;jobid == proc-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, 19 Nov 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Very strange. As I said, we routinely launch jobs spanning several hundred nodes without problem. You can see the platform files for that setup in contrib/platform/lanl/tlcc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That said, it is always possible you are hitting some kind of race condition we don't hit. In looking at the code, one possibility would be to make all the communications flow through the daemon cmd processor in orte/orted_comm.c. This is the way it used to work until I reorganized the code a year ago for other reasons that never materialized.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, the daemon collective has to wait until the local launch cmd has been completely processed so it can know whether or not to wait for contributions from local procs before sending along the collective message, so this kinda limits our options.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; About the only other thing you could do would be to not send the relay at all until -after- processing the local launch cmd. You can then remove the &quot;wait&quot; in the daemon collective as you will know how many local procs are involved, if any.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I used to do it that way and it guarantees it will work. The negative is that we lose some launch speed as the next nodes in the tree don't get the launch message until this node finishes launching all its procs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The way around that, of course, would be to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.  process the launch message, thus extracting the number of any local procs and setting up all data structures...but do -not- launch the procs at this time (as this is what takes all the time)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. send the relay - the daemon collective can now proceed without a &quot;wait&quot; in it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3. now launch the local procs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It would be a fairly simple reorganization of the code in the orte/mca/odls area. I can do it this weekend if you like, or you can do it - either way is fine, but if you do it, please contribute it back to the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 19, 2009, at 1:39 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would say I use the default settings, i.e. I don't set anything &quot;special&quot; at configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm launching my processes with SLURM (salloc + mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wed, 18 Nov 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How did you configure OMPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What launch mechanism are you using - ssh?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 17, 2009, at 9:01 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't think so, and I'm not doing it explicitely at least. How do I know ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, 17 Nov 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We routinely launch across thousands of nodes without a problem...I have never seen it stick in this fashion.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Did you build and/or are using ORTE threaded by any chance? If so, that definitely won't work.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 17, 2009, at 9:27 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We are currently experiencing problems at launch on the 1.5 branch on relatively large number of nodes (at least 80). Some processes are not spawned and orted processes are deadlocked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When MPI processes are calling MPI_Init before send_relay is complete, the send_relay function and the daemon_collective function are doing a nice interlock :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the scenario :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; send_relay
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; performs the send tree :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_rml_oob_send_buffer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_rml_oob_send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_wait_condition
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Waiting on completion from send thus calling opal_progress()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_progress()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But since a collective request arrived from the network, entered :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; daemon_collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, daemon_collective is waiting for the job to be initialized (wait on jobdat-&gt;launch_msg_processed) before continuing, thus calling :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_progress()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; At this time, the send may complete, but since we will never go back to orte_rml_oob_send, we will never perform the launch (setting jobdat-&gt;launch_msg_processed to 1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I may try to solve the bug (this is quite a top priority problem for me), but maybe people who are more familiar with orted than I am may propose a nice and clean solution ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For those who like real (and complete) gdb stacks, here they are :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x0000003b7fed4f38 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007fd0de5d861a in poll_dispatch (base=0x930230, arg=0x91a4b0, tv=0x7fff0d977880) at poll.c:167
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007fd0de5d586f in opal_event_base_loop (base=0x930230, flags=1) at event.c:823
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007fd0dd340a02 in daemon_collective (sender=0x97af50, data=0x97b010) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97af20) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #7  0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #8  0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #9  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #10 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #11 0x00007fd0dd340a02 in daemon_collective (sender=0x979700, data=0x9676e0) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #12 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x9796d0) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #13 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #14 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #15 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #16 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #17 0x00007fd0dd340a02 in daemon_collective (sender=0x97b420, data=0x97b4e0) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #18 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97b3f0) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #19 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #20 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #21 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #22 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #23 0x00007fd0dd969a8a in opal_condition_wait (c=0x97b210, m=0x97b1a8) at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #24 0x00007fd0dd96a4bf in orte_rml_oob_send (peer=0x7fff0d9785a0, iov=0x7fff0d978530, count=1, tag=1, flags=16) at rml_oob_send.c:153
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #25 0x00007fd0dd96ac4d in orte_rml_oob_send_buffer (peer=0x7fff0d9785a0, buffer=0x7fff0d9786b0, tag=1, flags=0) at rml_oob_send.c:270
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #26 0x00007fd0de86ed2a in send_relay (buf=0x7fff0d9786b0) at orted/orted_comm.c:127
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #27 0x00007fd0de86f6de in orte_daemon_cmd_processor (fd=-1, opal_event=1, data=0x965fc0) at orted/orted_comm.c:308
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #28 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #29 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=0) at event.c:839
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #30 0x00007fd0de5d556b in opal_event_loop (flags=0) at event.c:746
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #31 0x00007fd0de5d5418 in opal_event_dispatch () at event.c:682
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #32 0x00007fd0de86e339 in orte_daemon (argc=19, argv=0x7fff0d979ca8) at orted/orted_main.c:769
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #33 0x00000000004008e2 in main (argc=19, argv=0x7fff0d979ca8) at orted.c:62
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7153.php">Kenneth Lloyd: "Re: [OMPI devel] SC09 OMPI-related slides"</a>
<li><strong>Previous message:</strong> <a href="7151.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7150.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7154.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7154.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
