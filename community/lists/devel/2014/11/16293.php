<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 16:56:58 2014" -->
<!-- isoreceived="20141111215658" -->
<!-- sent="Tue, 11 Nov 2014 21:56:55 +0000" -->
<!-- isosent="20141111215655" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C60D55_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141027084038.GC13763_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 16:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16292.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI face-to-face devel meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16093.php">Adrian Reber: "[OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I'm able to reproduce this now, not sure why I couldn't before.  I took a look at the diff of the PSM MTL from 1.6.5 to 1.8.1, and nothing is standing out to me.
<br>
<p>Question more for the general group:  Did anything related to the behavior/usage of MTL add_procs() change in this time window?
<br>
<p>More particularly, it looks like add_procs is being called a second time during MPI_Intercomm_create and being passed a process that is already connected (passed into the first add_procs call).  Is that right?  Should the MTL handle multiple add_procs calls with the same proc provided?
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Adrian
</span><br>
<span class="quotelev1">&gt; Reber
</span><br>
<span class="quotelev1">&gt; Sent: Monday, October 27, 2014 1:41 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] 1.8.3 and PSM errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running Open MPI 1.8.3 with PSM does not seem to work right now at all.
</span><br>
<span class="quotelev1">&gt; I am getting the same errors also on trunk from my newly set up MTT.
</span><br>
<span class="quotelev1">&gt; Before trying to debug this I just wanted to make sure this is not a
</span><br>
<span class="quotelev1">&gt; configuration error. I have following PSM packages installed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; infinipath-devel-3.1.1-363.1140_rhel6_qlc.noarch
</span><br>
<span class="quotelev1">&gt; infinipath-libs-3.1.1-363.1140_rhel6_qlc.x86_64
</span><br>
<span class="quotelev1">&gt; infinipath-3.1.1-363.1140_rhel6_qlc.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with 1.6.5 I do not see PSM errors and the test suite fails much later:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P2P tests Many-to-one with MPI_Iprobe (MPI_ANY_SOURCE) (21/48), comm
</span><br>
<span class="quotelev1">&gt; Intracomm merged of the Halved Intercomm (13/13), type
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_MIX_ARRAY (28/29) P2P tests Many-to-one with MPI_Iprobe
</span><br>
<span class="quotelev1">&gt; (MPI_ANY_SOURCE) (21/48), comm Intracomm merged of the Halved
</span><br>
<span class="quotelev1">&gt; Intercomm (13/13), type MPI_TYPE_MIX_LB_UB (29/29) n050304:5.0.Cannot
</span><br>
<span class="quotelev1">&gt; cancel send requests (req=0x2ad8ba881f80) P2P tests Many-to-one with
</span><br>
<span class="quotelev1">&gt; Isend and Cancellation (22/48), comm MPI_COMM_WORLD (1/13), type
</span><br>
<span class="quotelev1">&gt; MPI_CHAR (1/29) n050304:2.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b25143fbd88) n050302:7.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b4d95eb0f80) n050301:4.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2adf03e14f80) n050304:4.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ad877257ed8) n050301:6.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ba47634af80) n050304:8.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ae8ac16cf80) n050302:3.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ab81dcb4d88) n050303:4.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b9ef4ef8f80) n050303:2.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ab0f03f9f80) n050302:9.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b214f9ebed8) n050301:2.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b31302d4f80) n050302:4.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b0581bd3f80) n050301:8.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ae53776bf80) n050303:6.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b13eeb78f80) n050304:7.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b4e99715f80) n050304:9.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b10429c2f80) n050304:3.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b9196f5fe30) n050304:6.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b30d6c69ed8) n050301:9.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b93c9e04f80) n050303:9.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ab4d6ce0f80) n050301:5.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b6ad851ef80) n050303:3.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b8ef52a0f80) n050301:3.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b277a4aff80) n050303:7.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ba570fa9f80) n050301:7.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ba707dfbf80) n050302:2.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b90f2e51e30) n050303:5.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b1250ba8f80) n050302:8.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b22e0129ed8) n050303:8.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b6609792f80) n050302:6.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2b2b6081af80) n050302:5.0.Cannot cancel send requests
</span><br>
<span class="quotelev1">&gt; (req=0x2ab24f6f1f80)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 14 with PID 4496 on node n050303
</span><br>
<span class="quotelev1">&gt; exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in the job did. This
</span><br>
<span class="quotelev1">&gt; can cause a job to hang indefinitely while it waits for all processes to call
</span><br>
<span class="quotelev1">&gt; &quot;init&quot;. By rule, if one process calls &quot;init&quot;, then ALL processes must call &quot;init&quot;
</span><br>
<span class="quotelev1">&gt; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to exiting or it
</span><br>
<span class="quotelev1">&gt; will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be terminated by
</span><br>
<span class="quotelev1">&gt; signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [adrian_at_n050304 mpi_test_suite]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and this are my PSM errors with 1.8.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [adrian_at_n050304 mpi_test_suite]$ mpirun  -np 32  mpi_test_suite -t
</span><br>
<span class="quotelev1">&gt; &quot;All,^io,^one-sided&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:8904 terminated with signal 11 at PC=2b08466239a4
</span><br>
<span class="quotelev1">&gt; SP=7ffff03c6e30.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16905 terminated with signal 11 at PC=2ae4cad209a4
</span><br>
<span class="quotelev1">&gt; SP=7fffceefa730.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3171 terminated with signal 11 at PC=2b57daafe9a4
</span><br>
<span class="quotelev1">&gt; SP=7fff5c4b3af0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16906 terminated with signal 11 at PC=2b4c9fa019a4
</span><br>
<span class="quotelev1">&gt; SP=7fffe916c330.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3172 terminated with signal 11 at PC=2b6dde92e9a4
</span><br>
<span class="quotelev1">&gt; SP=7fff04cf1730.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16907 terminated with signal 11 at PC=2ad6eb8589a4
</span><br>
<span class="quotelev1">&gt; SP=7fffc30d02f0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3173 terminated with signal 11 at PC=2b2e4aec89a4
</span><br>
<span class="quotelev1">&gt; SP=7fffa054e230.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16908 terminated with signal 11 at PC=2b4e6e5589a4
</span><br>
<span class="quotelev1">&gt; SP=7fff68c7a1f0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3174 terminated with signal 11 at PC=2b7049b279a4
</span><br>
<span class="quotelev1">&gt; SP=7fff99a49f70.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16909 terminated with signal 11 at PC=2b252219d9a4
</span><br>
<span class="quotelev1">&gt; SP=7fff72a0c6b0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3175 terminated with signal 11 at PC=2ac8d5caf9a4
</span><br>
<span class="quotelev1">&gt; SP=7fff6d7a63f0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16910 terminated with signal 11 at PC=2b7f83fc49a4
</span><br>
<span class="quotelev1">&gt; SP=7fffb95b89b0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3176 terminated with signal 11 at PC=2b11438da9a4
</span><br>
<span class="quotelev1">&gt; SP=7fffe626f270.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16903 terminated with signal 11 at PC=2ac5249249a4
</span><br>
<span class="quotelev1">&gt; SP=7fff8874af30.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3177 terminated with signal 11 at PC=2ab6154549a4
</span><br>
<span class="quotelev1">&gt; SP=7fffbf6ff430.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:16904 terminated with signal 11 at PC=2ad0265099a4
</span><br>
<span class="quotelev1">&gt; SP=7fff89fea470.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:3178 terminated with signal 11 at PC=2b606b1a79a4
</span><br>
<span class="quotelev1">&gt; SP=7fff20240db0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4458 terminated with signal 11 at PC=2b593ef029a4
</span><br>
<span class="quotelev1">&gt; SP=7fff4f48b470.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4459 terminated with signal 11 at PC=2b06dde559a4
</span><br>
<span class="quotelev1">&gt; SP=7fffd771a4f0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4460 terminated with signal 11 at PC=2ba7904cb9a4
</span><br>
<span class="quotelev1">&gt; SP=7fff9694c8b0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ab6154549a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ab6154451
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4461 terminated with signal 11 at PC=2b26799fd9a4
</span><br>
<span class="quotelev1">&gt; SP=7fff70f69eb0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b11438da9a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b11438cb1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b1142b4e384]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4462 terminated with signal 11 at PC=2b15418e19a4
</span><br>
<span class="quotelev1">&gt; SP=7fff858425b0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ab6146c8384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ab61458d76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ab6145bdd42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ab614ca1d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4463 terminated with signal 11 at PC=2b43082919a4
</span><br>
<span class="quotelev1">&gt; SP=7fff2ea8a530.  Backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4464 terminated with signal 11 at PC=2adc01fe89a4
</span><br>
<span class="quotelev1">&gt; SP=7fff0de9d4b0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b1142a1376a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b1142a43d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi_test_suite:4465 terminated with signal 11 at PC=2b477a1819a4
</span><br>
<span class="quotelev1">&gt; SP=7fffd33831b0.  Backtrace:
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b1143127d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b43082919a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b43082821
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b477a1819a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b477a1721
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b47793f5384]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b26799fd9a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b26799ee1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b2678c71384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b47792ba76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b47792ead42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b4307505384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b43073ca76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b43073fad42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b2678b3676a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b2678b66d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b4307aded5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b47799ced5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b267924ad5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b2e4aec89a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b2e4aeb91
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ac8d5caf9a4
</span><br>
<span class="quotelev1">&gt; ]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ac8d5ca01
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b57daafe9a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b57daaef1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b57d9d72384]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b08466239a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b08466141
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b0845897384]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b593ef029a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b593eef31
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b7049b279a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b7049b181
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b4e6e5589a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b4e6e5491
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b084575c76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b084578cd42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b0845e70d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b15418e19a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b15418d21
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b2e4a13c384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b2e4a00176a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b2e4a031d42]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b4e6d7cc384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b593e176384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b593e03b76a]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b606b1a79a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b606b1981
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b606a41b384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b4e6d69176a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b1540b55384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b1540a1a76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b57d9c3776a]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b06dde559a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b06dde461
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b06dd0c9384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b06dcf8e76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b06dcfbed42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ac8d4f23384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ac8d4de876a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b4e6d6c1d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b4e6dda5d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b1540a4ad42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b154112ed5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b6dde92e9a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b6dde91f1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ad6eb8589a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ad6eb8491
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b593e06bd42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b593e74fd5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b606a2e076a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b606a310d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b606a9f4d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b06dd6a2d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b7048d9b384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b7048c6076a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b7048c90d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ac5249249a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ac5249151
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ac523b98384]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2adc01fe89a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2adc01fd91
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b2e4a715d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ad6eaacc384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ad6ea99176a]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ba7904cb9a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ba7904bc1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b6dddba2384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b6ddda6776a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b6ddda97d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ac523a5d76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ac523a8dd42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2adc0125c384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2adc0112176a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2adc01151d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b57d9c67d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b57da34bd5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac524171d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ba78f73f384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ba78f60476a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ac8d4e18d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac8d54fcd5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ad6ea9c1d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ad6eb0a5d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2adc01835d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b6dde17bd5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ba78f634d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ba78fd18d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b7049374d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b252219d9a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b252218e1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ae4cad209a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ae4cad111
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2ad0265099a
</span><br>
<span class="quotelev1">&gt; 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2ad0264fa1
</span><br>
<span class="quotelev1">&gt; 72]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ae4c9f94384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ae4c9e5976a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b2521411384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b25212d676a]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b7f83fc49a4
</span><br>
<span class="quotelev1">&gt; ]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b7f83fb517
</span><br>
<span class="quotelev1">&gt; 2]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ae4c9e89d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ae4ca56dd5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(ips_proto_connect+0x334)[0x2b4c9fa019a4
</span><br>
<span class="quotelev1">&gt; ]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1(__psm_ep_connect+0x692)[0x2b4c9f9f217
</span><br>
<span class="quotelev1">&gt; 2]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b4c9ec75384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b4c9eb3a76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2ad02577d384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2ad02564276a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2ad025672d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ad025d56d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b2521306d42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b25219ead5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_mtl_psm_add_procs+0x1a4)[0x2b7f83238384]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(ompi_comm_get_rprocs+0x2fa)[0x2b7f830fd76a]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b7f8312dd42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /opt/bwhpc/common/mpi/openmpi/1.8.3-gnu-
</span><br>
<span class="quotelev1">&gt; 4.9/lib/libmpi.so.1(MPI_Intercomm_create+0x332)[0x2b4c9eb6ad42]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x46cd00]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x44434c]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b4c9f24ed5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b7f83811d5d]
</span><br>
<span class="quotelev1">&gt; mpi_test_suite[0x4058e9]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned a non-zero exit
</span><br>
<span class="quotelev1">&gt; code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process name: [[9290,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2014/10/16093.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16292.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI face-to-face devel meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16093.php">Adrian Reber: "[OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
