<?
$subject_val = "Re: [OMPI devel] New odls component fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 17 18:19:14 2012" -->
<!-- isoreceived="20120317221914" -->
<!-- sent="Sun, 18 Mar 2012 00:18:57 +0200" -->
<!-- isosent="20120317221857" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New odls component fails" -->
<!-- id="4F650DD1.4090408_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="63529F1E-3A46-4820-8927-95C8482694DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New odls component fails<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-17 18:18:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10727.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Reply:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/17/2012 08:16 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I don't think you need to .ompi_ignore all those components. First, you need to use the --without-hwloc option (you misspelled it below as --disable-hwloc).
</span><br>
I missed it, thank you.
<br>
<span class="quotelev1">&gt; Assuming you removed the relevant code from your clone of the default odls module, I suspect the calls are being made in ompi/runtime/ompi_mpi_init.c. If the process detects it isn't bound, it looks to see if it should bind itself. I thought that code was also turned &quot;off&quot; if we configured without-hwloc, so you might have to check it.
</span><br>
I didn't remove any code from the default module. Should I have? (All I 
<br>
added was inserting &quot;mosrun -w&quot; before the app name in the argv)
<br>
Could you please explain what do you mean by &quot;bound&quot; and how can I bind 
<br>
processes?
<br>
Also, I'm now getting a similar error, but a quick check shows 
<br>
ess_base_nidmap.c doesn't exist in the trunk:
<br>
<p>...
<br>
[singularity:01899] OPAL dss:unpack: got type 22 when expecting type 16
<br>
[singularity:01899] [[46635,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 57
<br>
[singularity:01899] [[46635,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
<br>
[singularity:01899] [[46635,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../orte/runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
...
<br>
<span class="quotelev1">&gt; Shared memory is a separate issue. If you want/need to avoid it, then run with -mca btl ^sm and this will turn off all shared memory calls.
</span><br>
After my last post I tried to rebuild and then even the simplest app 
<br>
wouldn't start. Turns out I disabled all the shmem (mmap, posix, sysv) 
<br>
and orte wouldn't start without any (so I had to turn it back on). Could 
<br>
you tell me if there is a way to run the application without making any 
<br>
mmap() calls with MAP_SHARED? Currently, mosrun is run with -w asking it 
<br>
to fail (return -1) on any such system-call.
<br>
<p>Thanks for your help,
<br>
Alex
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2012, at 11:51 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15041] [[35712,0],0] orted_recv_cmd: received message from [[35712,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15041] defining message event: orted/orted_comm.c 172
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15041] [[35712,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by [[35712,1],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15041] [[35712,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor: processing commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15042] OPAL dss:unpack: got type 33 when expecting type 12
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/util/nidmap.c at line 429
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt;  Returned &quot;Pack data mismatch&quot; (-22) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10727.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Reply:</strong> <a href="10730.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
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
