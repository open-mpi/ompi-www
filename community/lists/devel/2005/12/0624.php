<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 17 13:15:58 2005" -->
<!-- isoreceived="20051217181558" -->
<!-- sent="Sat, 17 Dec 2005 11:16:11 -0700" -->
<!-- isosent="20051217181611" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="0FE171F0-CD89-41FF-ADA9-B639347392C4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2BB6C17-1892-4F60-B9C1-0CE355CB4D9E_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-17 13:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0625.php">Rainer Keller: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0625.php">Rainer Keller: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0625.php">Rainer Keller: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the stacktrace:
<br>
<p>#0  0x00ae1fe8 in orte_pls_rsh_launch (jobid=1) at pls_rsh_module.c:714
<br>
714                         if (mca_pls_rsh_component.debug) {
<br>
(gdb) where
<br>
#0  0x00ae1fe8 in orte_pls_rsh_launch (jobid=1) at pls_rsh_module.c:714
<br>
#1  0x00a29642 in orte_rmgr_urm_spawn ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/ompi/lib/openmpi/mca_rmgr_urm.so
<br>
#2  0x0804a0d4 in orterun (argc=4, argv=0xbff88594) at orterun.c:373
<br>
#3  0x08049b16 in main (argc=4, argv=0xbff88594) at main.c:13
<br>
<p>And the contents of mca_pls_rsh_component:
<br>
<p>(gdb) p mca_pls_rsh_component
<br>
$2 = {super = {pls_version = {mca_major_version = 1,  
<br>
mca_minor_version = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_release_version = 0, mca_type_name = &quot;pls&quot;, '\0' &lt;repeats  
<br>
28 times&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_type_major_version = 1, mca_type_minor_version = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_type_release_version = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_component_name = &quot;rsh&quot;, '\0' &lt;repeats 60 times&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_component_major_version = 1, mca_component_minor_version = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_component_release_version = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_open_component = 0xae0a80 &lt;orte_pls_rsh_component_open&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_close_component = 0xae09a0 &lt;orte_pls_rsh_component_close&gt;},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pls_data = {mca_is_checkpointable = true},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pls_init = 0xae093c &lt;orte_pls_rsh_component_init&gt;}, debug = false,
<br>
&nbsp;&nbsp;&nbsp;reap = true, assume_same_shell = true, delay = 1, priority = 10,
<br>
&nbsp;&nbsp;&nbsp;argv = 0x90e0418, argc = 2, orted = 0x90de438 &quot;orted&quot;,
<br>
&nbsp;&nbsp;&nbsp;path = 0x90e0960 &quot;/usr/bin/ssh&quot;, num_children = 0, num_concurrent  
<br>
= 128,
<br>
&nbsp;&nbsp;&nbsp;lock = {super = {obj_class = 0x804ec38, obj_reference_count = 1},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_lock_pthread = {__data = {__lock = 0, __count = 0, __owner = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__kind = 0, __nusers = 0, __spins = 0},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__size = '\0' &lt;repeats 23 times&gt;, __align = 0}, m_lock_atomic  
<br>
= {u = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lock = 0, sparc_lock = 0 '\0', padding = &quot;\000\000\000&quot;}}},  
<br>
cond = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;super = {obj_class = 0x804ec18, obj_reference_count = 1},  
<br>
c_waiting = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_signaled = 0, c_cond = {__data = {__lock = 0, __futex = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__total_seq = 0, __wakeup_seq = 0, __woken_seq = 0, __mutex  
<br>
= 0x0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__nwaiters = 0, __broadcast_seq = 0},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__size = '\0' &lt;repeats 47 times&gt;, __align = 0}}}
<br>
<p>I can't see why it is segfaulting at this particular line.
<br>
<p>Greg
<br>
<p><p>On Dec 16, 2005, at 5:55 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 16, 2005, at 10:47 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I finally worked out why I couldn't reproduce the problem. You're not
</span><br>
<span class="quotelev2">&gt;&gt; going to like it though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right -- this kind of buglet is among the most un-fun.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the stacktracefrom the core file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00e93fe8 in orte_pls_rsh_launch ()
</span><br>
<span class="quotelev2">&gt;&gt;     from /usr/local/ompi/lib/openmpi/mca_pls_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x0023c642 in orte_rmgr_urm_spawn ()
</span><br>
<span class="quotelev2">&gt;&gt;     from /usr/local/ompi/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x0804a0d4 in orterun (argc=5, argv=0xbfab2e84) at orterun.c:373
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x08049b16 in main (argc=5, argv=0xbfab2e84) at main.c:13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you recompile this one file with -g?  Specifically, cd into the
</span><br>
<span class="quotelev1">&gt; orte/mca/pla/rsh dir and &quot;make clean&quot;.  Then &quot;make&quot;.  Then cut-n-
</span><br>
<span class="quotelev1">&gt; paste the compile line for that one file to a shell prompt, and put
</span><br>
<span class="quotelev1">&gt; in a -g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then either re-install that component (it looks like you're doing a
</span><br>
<span class="quotelev1">&gt; dynamic build with separate components, so you can do &quot;make install&quot;
</span><br>
<span class="quotelev1">&gt; right from the rsh dir) or re-link liborte and re-install that and re-
</span><br>
<span class="quotelev1">&gt; run.  The corefile might give something a little more meaningful in
</span><br>
<span class="quotelev1">&gt; this case...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0625.php">Rainer Keller: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0625.php">Rainer Keller: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0625.php">Rainer Keller: "Re:  sm btl/signal 11 problem on Linux"</a>
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
