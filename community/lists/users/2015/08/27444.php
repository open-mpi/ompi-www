<?
$subject_val = "Re: [OMPI users] Problem in using openmpi-1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:37:39 2015" -->
<!-- isoreceived="20150812193739" -->
<!-- sent="Wed, 12 Aug 2015 19:37:37 +0000" -->
<!-- isosent="20150812193737" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi-1.8.7" -->
<!-- id="11D6779B-9D58-45A7-9216-AD5CBF3FE8BE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6BEFE641-69FA-4A9A-A8D6-EA3580ADD8A1_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in using openmpi-1.8.7<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 15:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27445.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>In reply to:</strong> <a href="27430.php">Amos Leffler: "[OMPI users] Problem in using openmpi-1.8.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is likely because you installed Open MPI 1.8.7 into the same directory as a prior Open MPI installation.
<br>
<p>You probably want to uninstall the old version first (e.g., run &quot;make uninstall&quot; from the old version's build tree), or just install 1.8.7 into a new tree.
<br>
<p><p><p><span class="quotelev1">&gt; On Aug 11, 2015, at 2:22 PM, Amos Leffler &lt;amosleff_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Users,
</span><br>
<span class="quotelev1">&gt;         I have run into a problem with openmpi-1.8.7.  It configures and installs properly but when I tested it using examples it gave me numerous errors with mpicc as shown in the output below.  Have I made an error in the process?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Amoss-MacBook-Pro:openmpi-1.8.7 amosleff$ cd examples
</span><br>
<span class="quotelev1">&gt; Amoss-MacBook-Pro:examples amosleff$ mpicc hello_c.c -o hello_c -g
</span><br>
<span class="quotelev1">&gt; Amoss-MacBook-Pro:examples amosleff$ mpiexec hello_c
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: dlopen(/usr/local/lib/openmpi/mca_ess_slurmd.so, 9): Symbol not found: _orte_jmap_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_ess_slurmd.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_ess_slurmd.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: dlopen(/usr/local/lib/openmpi/mca_errmgr_default.so, 9): Symbol not found: _orte_errmgr_base_error_abort
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_errmgr_default.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_errmgr_default.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: dlopen(/usr/local/lib/openmpi/mca_routed_cm.so, 9): Symbol not found: _orte_message_event_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_routed_cm.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_routed_cm.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: dlopen(/usr/local/lib/openmpi/mca_routed_linear.so, 9): Symbol not found: _orte_message_event_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_routed_linear.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_routed_linear.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: dlopen(/usr/local/lib/openmpi/mca_grpcomm_basic.so, 9): Symbol not found: _opal_profile
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_grpcomm_basic.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_grpcomm_basic.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_hier: dlopen(/usr/local/lib/openmpi/mca_grpcomm_hier.so, 9): Symbol not found: _orte_daemon_cmd_processor
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_grpcomm_hier.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_grpcomm_hier.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_filem_rsh: dlopen(/usr/local/lib/openmpi/mca_filem_rsh.so, 9): Symbol not found: _opal_uses_threads
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_filem_rsh.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_filem_rsh.so (ignored)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] Failing at address: 0x100000013
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 0] 0   libsystem_platform.dylib            0x00007fff92aebf1a _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 1] 0   ???                                 0x00007fff508ce0af 0x0 + 140734544797871
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 2] 0   libopen-rte.7.dylib                 0x000000010f386e45 orte_rmaps_base_map_job + 2789
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 3] 0   libopen-pal.6.dylib                 0x000000010f3ffaed opal_libevent2021_event_base_loop + 2333
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 4] 0   mpiexec                             0x000000010f333288 orterun + 6440
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 5] 0   mpiexec                             0x000000010f331942 main + 34
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 6] 0   libdyld.dylib                       0x00007fff94d455c9 start + 1
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] [ 7] 0   ???                                 0x0000000000000002 0x0 + 2
</span><br>
<span class="quotelev1">&gt; [Amoss-MacBook-Pro:61027] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault: 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your help would be much appreciated.
</span><br>
<span class="quotelev1">&gt; Amos Leffler
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27430.php">http://www.open-mpi.org/community/lists/users/2015/08/27430.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27445.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>In reply to:</strong> <a href="27430.php">Amos Leffler: "[OMPI users] Problem in using openmpi-1.8.7"</a>
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
