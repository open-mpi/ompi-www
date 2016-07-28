<?
$subject_val = "Re: [OMPI devel] New odls component fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 18 14:54:05 2012" -->
<!-- isoreceived="20120318185405" -->
<!-- sent="Sun, 18 Mar 2012 12:53:56 -0600" -->
<!-- isosent="20120318185356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New odls component fails" -->
<!-- id="8340CF8E-2F64-4BD7-B605-413571341D6A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F650DD1.4090408_at_mail.huji.ac.il" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-18 14:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10731.php">Hugo Daniel Meyer: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Previous message:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>In reply to:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2012, at 4:18 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; On 03/17/2012 08:16 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I don't think you need to .ompi_ignore all those components. First, you need to use the --without-hwloc option (you misspelled it below as --disable-hwloc).
</span><br>
<span class="quotelev1">&gt; I missed it, thank you.
</span><br>
<span class="quotelev2">&gt;&gt; Assuming you removed the relevant code from your clone of the default odls module, I suspect the calls are being made in ompi/runtime/ompi_mpi_init.c. If the process detects it isn't bound, it looks to see if it should bind itself. I thought that code was also turned &quot;off&quot; if we configured without-hwloc, so you might have to check it.
</span><br>
<span class="quotelev1">&gt; I didn't remove any code from the default module. Should I have? (All I added was inserting &quot;mosrun -w&quot; before the app name in the argv)
</span><br>
<p>No, using --without-hwloc will turn off all the memory and cpu binding calls.
<br>
<p><span class="quotelev1">&gt; Could you please explain what do you mean by &quot;bound&quot; and how can I bind processes?
</span><br>
<p>Binding means to tell the OS to restrict execution of this process to the specified cpus. You can also ask that it restrict all malloc'd memory to a region local to those cpus - this is where you get some of your prior error messages.
<br>
<p><span class="quotelev1">&gt; Also, I'm now getting a similar error, but a quick check shows ess_base_nidmap.c doesn't exist in the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [singularity:01899] OPAL dss:unpack: got type 22 when expecting type 16
</span><br>
<span class="quotelev1">&gt; [singularity:01899] [[46635,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 57
</span><br>
<span class="quotelev1">&gt; [singularity:01899] [[46635,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; [singularity:01899] [[46635,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<p>This is typically caused by stale libraries in your install area. Did you rm -rf your prior installation before rebuilding? Did you recompile your application after your built?
<br>
<p>These files no longer exist in the trunk, as you noted - so if something is looking for it, that means you either didn't clean out the old installation or you forgot to recompile the application after rebuilding OMPI.
<br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Shared memory is a separate issue. If you want/need to avoid it, then run with -mca btl ^sm and this will turn off all shared memory calls.
</span><br>
<span class="quotelev1">&gt; After my last post I tried to rebuild and then even the simplest app wouldn't start. Turns out I disabled all the shmem (mmap, posix, sysv) and orte wouldn't start without any (so I had to turn it back on). Could you tell me if there is a way to run the application without making any mmap() calls with MAP_SHARED? Currently, mosrun is run with -w asking it to fail (return -1) on any such system-call.
</span><br>
<p>ORTE doesn't use shared memory, but I suspect that the opal shmem framework may object to not finding any usable component. We shouldn't error out for that reason, but the problem is present in the code. Edit the file opal/mca/shmem/base/shmem_base_select.c and change line 174 to return OPAL_SUCCESS. You may encounter other problems down the line as the system may not react well to not having anything there, but give it a try.
<br>
<p>Worst case, you may have to add a &quot;null&quot; component to the opal/mca/shmem framework that does nothing, just so the framework has a defined module instead of a bunch of NULL function pointers.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2012, at 11:51 AM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15041] [[35712,0],0] orted_recv_cmd: received message from [[35712,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15041] defining message event: orted/orted_comm.c 172
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15041] [[35712,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by [[35712,1],0] for tag 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15041] [[35712,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor: processing commands completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15042] OPAL dss:unpack: got type 33 when expecting type 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/util/nidmap.c at line 429
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt;  Returned &quot;Pack data mismatch&quot; (-22) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10731.php">Hugo Daniel Meyer: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Previous message:</strong> <a href="10729.php">Ralph Castain: "Re: [OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>In reply to:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
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
