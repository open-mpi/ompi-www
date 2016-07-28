<?
$subject_val = "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 09:01:43 2009" -->
<!-- isoreceived="20090114140143" -->
<!-- sent="Wed, 14 Jan 2009 07:01:33 -0700" -->
<!-- isosent="20090114140133" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop" -->
<!-- id="140AC44F-C84F-45AF-9E21-67376C3EAD14_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7FB4364E-1445-448C-B7CF-03D66F648ED8_at_krellinst.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 09:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5179.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5177.php">Ralph Castain: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>In reply to:</strong> <a href="5166.php">William Hachfeld: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your timer is actually generating an interrupt to the process, then  
<br>
that could be the source of the problem. I believe the event library  
<br>
also treats interrupts as events, and assigns them the highest  
<br>
priority. So every one of your interrupts would cause the event  
<br>
library to stop what it was doing and go into its interrupt handling  
<br>
routine.
<br>
<p>I'm no expert on the event library though - just speculating that this  
<br>
could be the source of the problem.
<br>
<p>Ralph
<br>
<p>On Jan 13, 2009, at 8:18 PM, William Hachfeld wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff &amp; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hum; interesting.  I can't think of any reason why that would be a  
</span><br>
<span class="quotelev1">&gt; problem offhand.  The
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_sm_component_progress() function is the shared memory  
</span><br>
<span class="quotelev1">&gt; progression function.
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress() and mca_bml_r2_progress() are likely mainly  
</span><br>
<span class="quotelev1">&gt; dispatching off to this
</span><br>
<span class="quotelev2">&gt; &gt; function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does OSS interfere with shared memory between processes in any  
</span><br>
<span class="quotelev1">&gt; way?  (I'm not enough
</span><br>
<span class="quotelev2">&gt; &gt; of a kernel guy to know what the ramifications of ptrace and  
</span><br>
<span class="quotelev1">&gt; whatnot are)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open|SS shouldn't interfere with shared memory. We use the pthread  
</span><br>
<span class="quotelev1">&gt; library to access some TLS, but no shared memory...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There might be one reason to slowdown the application quite a bit.  
</span><br>
<span class="quotelev1">&gt; If the fact that you're
</span><br>
<span class="quotelev2">&gt; &gt; using timer interact with the libevent (the library we're using to  
</span><br>
<span class="quotelev1">&gt; internally manage any kind
</span><br>
<span class="quotelev2">&gt; &gt; of events), then we might end-up in the situation where we call  
</span><br>
<span class="quotelev1">&gt; the poll for every iteration
</span><br>
<span class="quotelev2">&gt; &gt; in the event library. And this is really expensive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did contemplate the notion that maybe we were getting into the  
</span><br>
<span class="quotelev1">&gt; &quot;progress monitoring&quot; part of OpenMPI every time the timer  
</span><br>
<span class="quotelev1">&gt; interrupted the process (1000s of times per second). Can either of  
</span><br>
<span class="quotelev1">&gt; you see any mechanism by which that might happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; A quick way to figure out if this is that case is to run Open MPI  
</span><br>
<span class="quotelev1">&gt; without support for shared
</span><br>
<span class="quotelev2">&gt; &gt; memory (--mca btl ^sm). This way we will call poll on a regular  
</span><br>
<span class="quotelev1">&gt; basis anyway, and if there
</span><br>
<span class="quotelev2">&gt; &gt; is no difference between a normal run and a OSS one, we know at  
</span><br>
<span class="quotelev1">&gt; least where to start
</span><br>
<span class="quotelev2">&gt; &gt; looking ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran SMG2000 on an 8-CPU Yellowrail node in the two configurations  
</span><br>
<span class="quotelev1">&gt; and recorded the wall/cpu clock times as reported by SMG2000 itself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 8 smg2000 -n 32 64 64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Struct Interface, wall clock time = 0.042348 seconds
</span><br>
<span class="quotelev1">&gt; 	Struct Interface, cpu clock time = 0.040000 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Setup, wall clock time =0.732441 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Setup, cpu clock time = 0.730000 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Solve, wall clock time = 6.881814 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Solve, cpu clock time =6.880000 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --mca btl ^sm -np 8 smg2000 -n 64 64 64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Struct Interface, wall clock time = 0.059137 seconds
</span><br>
<span class="quotelev1">&gt; 	Struct Interface, cpu clock time = 0.060000 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Setup, wall clock time = 0.931437 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Setup, cpu clock time = 0.930000 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Solve, wall clock time = 9.107343 seconds
</span><br>
<span class="quotelev1">&gt; 	SMG Solve, cpu clock time = 9.110000 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But running the application with the &quot;--mac btl ^sm&quot; option inside  
</span><br>
<span class="quotelev1">&gt; Open|SS also results in an extreme slowdown. I.e. it doesn't make  
</span><br>
<span class="quotelev1">&gt; any difference whether the shared memory transport is enabled or  
</span><br>
<span class="quotelev1">&gt; not. Open|SS reports time spent as follows (in case this helps  
</span><br>
<span class="quotelev1">&gt; pinpoint what is going on inside OpenMPI):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Exclusive CPU
</span><br>
<span class="quotelev1">&gt; 	time in seconds.			Function (defining location)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	364.050000				btl_openib_component_proress (libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; 	165.890000				mthca_poll_cq (libmthca-rdmav2.so)
</span><br>
<span class="quotelev1">&gt; 	122.090000				pthread_spin_lock (libpthread.so.0)
</span><br>
<span class="quotelev1">&gt; 	90.790000				opal_progress (libopen-pal.so.0)
</span><br>
<span class="quotelev1">&gt; 	48.230000				mca_bml_r2_progress (libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; 	30.880000				ompi_request_wait_all (libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; 	9.780000				pthread_spin_unlock (libpthread.so.0)
</span><br>
<span class="quotelev1">&gt; 	4.910000				mthca_free_srq_wqe (libmthca-rdmav2.so)
</span><br>
<span class="quotelev1">&gt; 	4.910000				mthca_unlock_cqs (libmthca-rdmav2.so)
</span><br>
<span class="quotelev1">&gt; 	4.730000				mthca_lock_cqs (libmthca-rdmav2.so)
</span><br>
<span class="quotelev1">&gt; 	0.890000				__poll (libc.so.6)
</span><br>
<span class="quotelev1">&gt; 	...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this help at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Bill Hachfeld, The Open|SpeedShop Project
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5179.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5177.php">Ralph Castain: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>In reply to:</strong> <a href="5166.php">William Hachfeld: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
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
