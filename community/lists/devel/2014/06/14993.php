<?
$subject_val = "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 15:59:20 2014" -->
<!-- isoreceived="20140606195920" -->
<!-- sent="Fri, 6 Jun 2014 12:59:16 -0700" -->
<!-- isosent="20140606195916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk" -->
<!-- id="121F677E-57D6-4AAC-B829-536E5A177A9B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36046C6EAEF_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 15:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14994.php">Gilles Gouaillardet: "[OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>Previous message:</strong> <a href="14992.php">Rolf vandeVaart: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>In reply to:</strong> <a href="14992.php">Rolf vandeVaart: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2014, at 12:50 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for trying Ralph.   Looks like my issues has to do with coll ml interaction.  If I exclude coll ml, then all my tests pass.  Do you know if there is a bug for this issue?
</span><br>
<p>There is a known issue with coll ml for intercomm_create - Nathan is working on a fix. It was reported by Gilles (yesterday?)
<br>
<p><span class="quotelev1">&gt; If so, then I can run my nightly tests with coll ml disabled and wait for the bug to be fixed.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Also, where does simple_spawn and spawn_multiple live?
</span><br>
<p>I have a copy/version in my orte/test/mpi directory that I use - that's where these came from. Note that I left coll ml &quot;on&quot; for those as they weren't having troubles.
<br>
<p><p><span class="quotelev1">&gt;   I was running &#147;spawn&#148; and &#147;spawn_multiple&#148; from the ibm/dynamic test suite. 
</span><br>
<span class="quotelev1">&gt; Your output for spawn_multiple looks different than mine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 06, 2014 3:19 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Works fine for me:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 mpi]$ mpirun -n 3 --host bend001 ./simple_spawn
</span><br>
<span class="quotelev1">&gt; [pid 22777] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 22778] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 22779] starting up!
</span><br>
<span class="quotelev1">&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 22778] about to spawn!
</span><br>
<span class="quotelev1">&gt; 2 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 22779] about to spawn!
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 22777] about to spawn!
</span><br>
<span class="quotelev1">&gt; [pid 22783] starting up!
</span><br>
<span class="quotelev1">&gt; [pid 22784] starting up!
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent sending message to child
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 0 of 2 on host bend001 pid 22783
</span><br>
<span class="quotelev1">&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev1">&gt; 1 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Hello from the child 1 of 2 on host bend001 pid 22784
</span><br>
<span class="quotelev1">&gt; Child 1 disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Child 0 disconnected
</span><br>
<span class="quotelev1">&gt; 22784: exiting
</span><br>
<span class="quotelev1">&gt; 22778: exiting
</span><br>
<span class="quotelev1">&gt; 22779: exiting
</span><br>
<span class="quotelev1">&gt; 22777: exiting
</span><br>
<span class="quotelev1">&gt; 22783: exiting
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 mpi]$ make spawn_multiple
</span><br>
<span class="quotelev1">&gt; mpicc -g --openmpi:linkall    spawn_multiple.c   -o spawn_multiple
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 mpi]$ mpirun -n 3 --host bend001 ./spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent [pid 22797] about to spawn!
</span><br>
<span class="quotelev1">&gt; Parent [pid 22798] about to spawn!
</span><br>
<span class="quotelev1">&gt; Parent [pid 22799] about to spawn!
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent sending message to children
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Hello from the child 0 of 2 on host bend001 pid 22803: argv[1] = foo
</span><br>
<span class="quotelev1">&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev1">&gt; Hello from the child 1 of 2 on host bend001 pid 22804: argv[1] = bar
</span><br>
<span class="quotelev1">&gt; Child 1 disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Child 0 disconnected
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 mpi]$ mpirun -n 3 --host bend001 -mca coll ^ml ./intercomm_create
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 3]
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 3]
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 3, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 3, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 3, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; b: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; b: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; b: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; b: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; b: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; b: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; c: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; c: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; c: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; c: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; c: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; c: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; a: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; a: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; a: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; c: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; c: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; c: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; a: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; a: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; a: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; a: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; a: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; a: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; b: intercomm_create (0)
</span><br>
<span class="quotelev1">&gt; b: barrier on inter-comm - before
</span><br>
<span class="quotelev1">&gt; b: barrier on inter-comm - after
</span><br>
<span class="quotelev1">&gt; a: intercomm_merge(0) (0) [rank 2]
</span><br>
<span class="quotelev1">&gt; c: intercomm_merge(0) (0) [rank 8]
</span><br>
<span class="quotelev1">&gt; a: intercomm_merge(0) (0) [rank 0]
</span><br>
<span class="quotelev1">&gt; a: intercomm_merge(0) (0) [rank 1]
</span><br>
<span class="quotelev1">&gt; c: intercomm_merge(0) (0) [rank 7]
</span><br>
<span class="quotelev1">&gt; b: intercomm_merge(1) (0) [rank 4]
</span><br>
<span class="quotelev1">&gt; b: intercomm_merge(1) (0) [rank 5]
</span><br>
<span class="quotelev1">&gt; c: intercomm_merge(0) (0) [rank 6]
</span><br>
<span class="quotelev1">&gt; b: intercomm_merge(1) (0) [rank 3]
</span><br>
<span class="quotelev1">&gt; a: barrier (0)
</span><br>
<span class="quotelev1">&gt; b: barrier (0)
</span><br>
<span class="quotelev1">&gt; c: barrier (0)
</span><br>
<span class="quotelev1">&gt; a: barrier (0)
</span><br>
<span class="quotelev1">&gt; c: barrier (0)
</span><br>
<span class="quotelev1">&gt; b: barrier (0)
</span><br>
<span class="quotelev1">&gt; a: barrier (0)
</span><br>
<span class="quotelev1">&gt; c: barrier (0)
</span><br>
<span class="quotelev1">&gt; b: barrier (0)
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 0
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 0
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 1
</span><br>
<span class="quotelev1">&gt; dpm_base_disconnect_init: error -12 in isend to process 3
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend001 mpi]$ 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 11:26 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am seeing an interesting failure on trunk.  intercomm_create, spawn, and spawn_multiple from the IBM tests hang if I explicitly list the hostnames to run on.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --mca btl self,sm,tcp spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent: 0 of 2, drossetti-ivy0.nvidia.com (0 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 1 of 2, drossetti-ivy0.nvidia.com (0 in init)
</span><br>
<span class="quotelev1">&gt; Child: 0 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 1 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 2 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 3 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
</span><br>
<span class="quotelev1">&gt; $ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bad:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --mca btl self,sm,tcp -host drossetti-ivy0,drossetti-ivy0 spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent: 0 of 2, drossetti-ivy0.nvidia.com (1 in init)
</span><br>
<span class="quotelev1">&gt; Parent: 1 of 2, drossetti-ivy0.nvidia.com (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 0 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 1 of 4, drossetti-ivy0.nvidia.com (this is job 1) (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 2 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
</span><br>
<span class="quotelev1">&gt; Child: 3 of 4, drossetti-ivy0.nvidia.com (this is job 2) (1 in init)
</span><br>
<span class="quotelev1">&gt; [..and we are hung here...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see the exact same behavior for spawn and spawn_multiple.  Ralph, any thoughts?  Open MPI 1.8 is fine.  I can provide more information if needed, but I assume this is reproducible. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14990.php">http://www.open-mpi.org/community/lists/devel/2014/06/14990.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14992.php">http://www.open-mpi.org/community/lists/devel/2014/06/14992.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14994.php">Gilles Gouaillardet: "[OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<li><strong>Previous message:</strong> <a href="14992.php">Rolf vandeVaart: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
<li><strong>In reply to:</strong> <a href="14992.php">Rolf vandeVaart: "Re: [OMPI devel] Strange intercomm_create, spawn, spawn_multiple hang on trunk"</a>
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
