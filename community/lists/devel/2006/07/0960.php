<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 08:42:58 2006" -->
<!-- isoreceived="20060705124258" -->
<!-- sent="Wed, 05 Jul 2006 06:42:51 -0600" -->
<!-- isosent="20060705124251" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted problem" -->
<!-- id="C0D10FEB.3386%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6F026B73-B94F-40BC-B474-6F46B7BA4B7A_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 08:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0961.php">Nathan DeBardeleben: "[OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<li><strong>In reply to:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been around for a very long time (at least a year, if memory serves
<br>
correctly). The problem is that the system &quot;hangs&quot; while trying to flush the
<br>
io buffers through the RML because it loses connection to the head node
<br>
process (for 1.x, that's basically mpirun) - but the &quot;flush&quot; procedure
<br>
doesn't give up.
<br>
<p>What's needed is some tuneup of the entire I/O-RML system so that we can
<br>
timeout properly and, when receiving that error, exit instead of retrying. I
<br>
thought someone was going to take a shot at that awhile back (at least six
<br>
months ago), but I don't recall it actually happening - too many higher
<br>
priorities.
<br>
<p>Ralph
<br>
<p><p><p>On 7/4/06 3:05 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been noticing this for a while (at least 2 months) as well
</span><br>
<span class="quotelev1">&gt; along with stale session directories. I filed a bug yesterday #177
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/177">https://svn.open-mpi.org/trac/ompi/ticket/177</a>
</span><br>
<span class="quotelev1">&gt; I'll add this stack trace to it. I want to take a closer look
</span><br>
<span class="quotelev1">&gt; tomorrow to see what's really going on here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I left it yesterday I found that if you CTRL-C the running
</span><br>
<span class="quotelev1">&gt; mpirun, and the orted's hang then if you send another signal to
</span><br>
<span class="quotelev1">&gt; mpirun sometimes mpirun will die from SIGPIPE. This is a race
</span><br>
<span class="quotelev1">&gt; condition due to the orteds leaving, but we should be masking that
</span><br>
<span class="quotelev1">&gt; signal or something other than dieing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think there is more than one race in this code, and will need
</span><br>
<span class="quotelev1">&gt; some serious looking at.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2006, at 12:38 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Starting with few days ago, I notice that more and more orted are
</span><br>
<span class="quotelev2">&gt;&gt; left over after my runs. Usually, if the job run to completions they
</span><br>
<span class="quotelev2">&gt;&gt; disappear. But if I kill the job or it segfault they don't. I
</span><br>
<span class="quotelev2">&gt;&gt; attached to one of them and I get the following stack:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x9001f7a8 in select ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00375d34 in select_dispatch (arg=0x39ec6c, tv=0xbfffe664)
</span><br>
<span class="quotelev2">&gt;&gt; at ../../../ompi-trunk/opal/event/select.c:202
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00373b70 in opal_event_loop (flags=1) at ../../../ompi-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/event.c:485
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00237ee0 in orte_iof_base_flush () at ../../../../ompi-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/iof/base/iof_base_flush.c:111
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x004cbb38 in orte_pls_fork_wait_proc (pid=9045, status=9,
</span><br>
<span class="quotelev2">&gt;&gt; cbdata=0x50c250) at ../../../../../ompi-trunk/orte/mca/pls/fork/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.c:175
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x002111f0 in do_waitall (options=0) at ../../ompi-trunk/orte/
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_wait.c:500
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00210ac8 in orte_wait_signal_callback (fd=20, event=8,
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x26f3f8) at ../../ompi-trunk/orte/runtime/orte_wait.c:366
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x003737f8 in opal_event_process_active () at ../../../ompi-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/event.c:428
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00373ce8 in opal_event_loop (flags=1) at ../../../ompi-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/event.c:513
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00368714 in opal_progress () at ../../ompi-trunk/opal/runtime/
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress.c:259
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x004cdf48 in opal_condition_wait (c=0x4cf0f0, m=0x4cf0b0)
</span><br>
<span class="quotelev2">&gt;&gt; at ../../../../../ompi-trunk/opal/threads/condition.h:81
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x004cde60 in orte_pls_fork_finalize () at ../../../../../ompi-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/orte/mca/pls/fork/pls_fork_module.c:764
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x002417d0 in orte_pls_base_finalize () at ../../../../ompi-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/base/pls_base_close.c:42
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x000ddf58 in orte_rmgr_urm_finalize () at ../../../../../ompi-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/orte/mca/rmgr/urm/rmgr_urm.c:521
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x00254ec0 in orte_rmgr_base_close () at ../../../../ompi-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/rmgr/base/rmgr_base_close.c:39
</span><br>
<span class="quotelev2">&gt;&gt; #15 0x0020e574 in orte_system_finalize () at ../../ompi-trunk/orte/
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_system_finalize.c:65
</span><br>
<span class="quotelev2">&gt;&gt; #16 0x0020899c in orte_finalize () at ../../ompi-trunk/orte/runtime/
</span><br>
<span class="quotelev2">&gt;&gt; orte_finalize.c:42
</span><br>
<span class="quotelev2">&gt;&gt; #17 0x00002ac8 in main (argc=19, argv=0xbffff17c) at ../../../../ompi-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/orte/tools/orted/orted.c:377
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Somehow, it wait for the pid 9045. But this was one of the kids, and
</span><br>
<span class="quotelev2">&gt;&gt; it get the SIG_KILL signal (I checked with strace). I wonder if we
</span><br>
<span class="quotelev2">&gt;&gt; don't have a race condition somewhere on the wait_signal code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0961.php">Nathan DeBardeleben: "[OMPI devel] Getting the number of nodes"</a>
<li><strong>Previous message:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<li><strong>In reply to:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
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
