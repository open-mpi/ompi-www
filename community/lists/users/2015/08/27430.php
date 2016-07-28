<?
$subject_val = "[OMPI users] Problem in using openmpi-1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 14:22:24 2015" -->
<!-- isoreceived="20150811182224" -->
<!-- sent="Tue, 11 Aug 2015 11:22:19 -0700" -->
<!-- isosent="20150811182219" -->
<!-- name="Amos Leffler" -->
<!-- email="amosleff_at_[hidden]" -->
<!-- subject="[OMPI users] Problem in using openmpi-1.8.7" -->
<!-- id="6BEFE641-69FA-4A9A-A8D6-EA3580ADD8A1_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem in using openmpi-1.8.7<br>
<strong>From:</strong> Amos Leffler (<em>amosleff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 14:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Previous message:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27444.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>Reply:</strong> <a href="27444.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in using openmpi-1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Users,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have run into a problem with openmpi-1.8.7.  It configures and installs properly but when I tested it using examples it gave me numerous errors with mpicc as shown in the output below.  Have I made an error in the process?
<br>
<p>Amoss-MacBook-Pro:openmpi-1.8.7 amosleff$ cd examples
<br>
Amoss-MacBook-Pro:examples amosleff$ mpicc hello_c.c -o hello_c -g
<br>
Amoss-MacBook-Pro:examples amosleff$ mpiexec hello_c
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: dlopen(/usr/local/lib/openmpi/mca_ess_slurmd.so, 9): Symbol not found: _orte_jmap_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_ess_slurmd.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_ess_slurmd.so (ignored)
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: dlopen(/usr/local/lib/openmpi/mca_errmgr_default.so, 9): Symbol not found: _orte_errmgr_base_error_abort
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_errmgr_default.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_errmgr_default.so (ignored)
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: dlopen(/usr/local/lib/openmpi/mca_routed_cm.so, 9): Symbol not found: _orte_message_event_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_routed_cm.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_routed_cm.so (ignored)
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: dlopen(/usr/local/lib/openmpi/mca_routed_linear.so, 9): Symbol not found: _orte_message_event_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_routed_linear.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_routed_linear.so (ignored)
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: dlopen(/usr/local/lib/openmpi/mca_grpcomm_basic.so, 9): Symbol not found: _opal_profile
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_grpcomm_basic.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_grpcomm_basic.so (ignored)
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_hier: dlopen(/usr/local/lib/openmpi/mca_grpcomm_hier.so, 9): Symbol not found: _orte_daemon_cmd_processor
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_grpcomm_hier.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_grpcomm_hier.so (ignored)
<br>
[Amoss-MacBook-Pro.local:61027] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_filem_rsh: dlopen(/usr/local/lib/openmpi/mca_filem_rsh.so, 9): Symbol not found: _opal_uses_threads
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_filem_rsh.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_filem_rsh.so (ignored)
<br>
[Amoss-MacBook-Pro:61027] *** Process received signal ***
<br>
[Amoss-MacBook-Pro:61027] Signal: Segmentation fault: 11 (11)
<br>
[Amoss-MacBook-Pro:61027] Signal code: Address not mapped (1)
<br>
[Amoss-MacBook-Pro:61027] Failing at address: 0x100000013
<br>
[Amoss-MacBook-Pro:61027] [ 0] 0   libsystem_platform.dylib            0x00007fff92aebf1a _sigtramp + 26
<br>
[Amoss-MacBook-Pro:61027] [ 1] 0   ???                                 0x00007fff508ce0af 0x0 + 140734544797871
<br>
[Amoss-MacBook-Pro:61027] [ 2] 0   libopen-rte.7.dylib                 0x000000010f386e45 orte_rmaps_base_map_job + 2789
<br>
[Amoss-MacBook-Pro:61027] [ 3] 0   libopen-pal.6.dylib                 0x000000010f3ffaed opal_libevent2021_event_base_loop + 2333
<br>
[Amoss-MacBook-Pro:61027] [ 4] 0   mpiexec                             0x000000010f333288 orterun + 6440
<br>
[Amoss-MacBook-Pro:61027] [ 5] 0   mpiexec                             0x000000010f331942 main + 34
<br>
[Amoss-MacBook-Pro:61027] [ 6] 0   libdyld.dylib                       0x00007fff94d455c9 start + 1
<br>
[Amoss-MacBook-Pro:61027] [ 7] 0   ???                                 0x0000000000000002 0x0 + 2
<br>
[Amoss-MacBook-Pro:61027] *** End of error message ***
<br>
Segmentation fault: 11
<br>
<p>Your help would be much appreciated.
<br>
Amos Leffler
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Previous message:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27444.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>Reply:</strong> <a href="27444.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in using openmpi-1.8.7"</a>
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
