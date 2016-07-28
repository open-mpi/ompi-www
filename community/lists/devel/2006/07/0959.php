<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 17:05:31 2006" -->
<!-- isoreceived="20060704210531" -->
<!-- sent="Tue, 4 Jul 2006 15:05:04 -0600" -->
<!-- isosent="20060704210504" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted problem" -->
<!-- id="6F026B73-B94F-40BC-B474-6F46B7BA4B7A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EEDF72B2-E110-476F-9DBA-8132CFF77419_at_cs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 17:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<li><strong>Previous message:</strong> <a href="0958.php">George Bosilca: "[OMPI devel] orted problem"</a>
<li><strong>In reply to:</strong> <a href="0958.php">George Bosilca: "[OMPI devel] orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<li><strong>Reply:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been noticing this for a while (at least 2 months) as well  
<br>
along with stale session directories. I filed a bug yesterday #177
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/177">https://svn.open-mpi.org/trac/ompi/ticket/177</a>
<br>
I'll add this stack trace to it. I want to take a closer look  
<br>
tomorrow to see what's really going on here.
<br>
<p>When I left it yesterday I found that if you CTRL-C the running  
<br>
mpirun, and the orted's hang then if you send another signal to  
<br>
mpirun sometimes mpirun will die from SIGPIPE. This is a race  
<br>
condition due to the orteds leaving, but we should be masking that  
<br>
signal or something other than dieing.
<br>
<p>So I think there is more than one race in this code, and will need  
<br>
some serious looking at.
<br>
<p>--Josh
<br>
<p>On Jul 4, 2006, at 12:38 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Starting with few days ago, I notice that more and more orted are
</span><br>
<span class="quotelev1">&gt; left over after my runs. Usually, if the job run to completions they
</span><br>
<span class="quotelev1">&gt; disappear. But if I kill the job or it segfault they don't. I
</span><br>
<span class="quotelev1">&gt; attached to one of them and I get the following stack:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x9001f7a8 in select ()
</span><br>
<span class="quotelev1">&gt; #1  0x00375d34 in select_dispatch (arg=0x39ec6c, tv=0xbfffe664)
</span><br>
<span class="quotelev1">&gt; at ../../../ompi-trunk/opal/event/select.c:202
</span><br>
<span class="quotelev1">&gt; #2  0x00373b70 in opal_event_loop (flags=1) at ../../../ompi-trunk/
</span><br>
<span class="quotelev1">&gt; opal/event/event.c:485
</span><br>
<span class="quotelev1">&gt; #3  0x00237ee0 in orte_iof_base_flush () at ../../../../ompi-trunk/
</span><br>
<span class="quotelev1">&gt; orte/mca/iof/base/iof_base_flush.c:111
</span><br>
<span class="quotelev1">&gt; #4  0x004cbb38 in orte_pls_fork_wait_proc (pid=9045, status=9,
</span><br>
<span class="quotelev1">&gt; cbdata=0x50c250) at ../../../../../ompi-trunk/orte/mca/pls/fork/
</span><br>
<span class="quotelev1">&gt; pls_fork_module.c:175
</span><br>
<span class="quotelev1">&gt; #5  0x002111f0 in do_waitall (options=0) at ../../ompi-trunk/orte/
</span><br>
<span class="quotelev1">&gt; runtime/orte_wait.c:500
</span><br>
<span class="quotelev1">&gt; #6  0x00210ac8 in orte_wait_signal_callback (fd=20, event=8,
</span><br>
<span class="quotelev1">&gt; arg=0x26f3f8) at ../../ompi-trunk/orte/runtime/orte_wait.c:366
</span><br>
<span class="quotelev1">&gt; #7  0x003737f8 in opal_event_process_active () at ../../../ompi-trunk/
</span><br>
<span class="quotelev1">&gt; opal/event/event.c:428
</span><br>
<span class="quotelev1">&gt; #8  0x00373ce8 in opal_event_loop (flags=1) at ../../../ompi-trunk/
</span><br>
<span class="quotelev1">&gt; opal/event/event.c:513
</span><br>
<span class="quotelev1">&gt; #9  0x00368714 in opal_progress () at ../../ompi-trunk/opal/runtime/
</span><br>
<span class="quotelev1">&gt; opal_progress.c:259
</span><br>
<span class="quotelev1">&gt; #10 0x004cdf48 in opal_condition_wait (c=0x4cf0f0, m=0x4cf0b0)
</span><br>
<span class="quotelev1">&gt; at ../../../../../ompi-trunk/opal/threads/condition.h:81
</span><br>
<span class="quotelev1">&gt; #11 0x004cde60 in orte_pls_fork_finalize () at ../../../../../ompi-
</span><br>
<span class="quotelev1">&gt; trunk/orte/mca/pls/fork/pls_fork_module.c:764
</span><br>
<span class="quotelev1">&gt; #12 0x002417d0 in orte_pls_base_finalize () at ../../../../ompi-trunk/
</span><br>
<span class="quotelev1">&gt; orte/mca/pls/base/pls_base_close.c:42
</span><br>
<span class="quotelev1">&gt; #13 0x000ddf58 in orte_rmgr_urm_finalize () at ../../../../../ompi-
</span><br>
<span class="quotelev1">&gt; trunk/orte/mca/rmgr/urm/rmgr_urm.c:521
</span><br>
<span class="quotelev1">&gt; #14 0x00254ec0 in orte_rmgr_base_close () at ../../../../ompi-trunk/
</span><br>
<span class="quotelev1">&gt; orte/mca/rmgr/base/rmgr_base_close.c:39
</span><br>
<span class="quotelev1">&gt; #15 0x0020e574 in orte_system_finalize () at ../../ompi-trunk/orte/
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_finalize.c:65
</span><br>
<span class="quotelev1">&gt; #16 0x0020899c in orte_finalize () at ../../ompi-trunk/orte/runtime/
</span><br>
<span class="quotelev1">&gt; orte_finalize.c:42
</span><br>
<span class="quotelev1">&gt; #17 0x00002ac8 in main (argc=19, argv=0xbffff17c) at ../../../../ompi-
</span><br>
<span class="quotelev1">&gt; trunk/orte/tools/orted/orted.c:377
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow, it wait for the pid 9045. But this was one of the kids, and
</span><br>
<span class="quotelev1">&gt; it get the SIG_KILL signal (I checked with strace). I wonder if we
</span><br>
<span class="quotelev1">&gt; don't have a race condition somewhere on the wait_signal code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt;    george.
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<li><strong>Previous message:</strong> <a href="0958.php">George Bosilca: "[OMPI devel] orted problem"</a>
<li><strong>In reply to:</strong> <a href="0958.php">George Bosilca: "[OMPI devel] orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
<li><strong>Reply:</strong> <a href="0960.php">Ralph H Castain: "Re: [OMPI devel] orted problem"</a>
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
