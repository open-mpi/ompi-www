<?
$subject_val = "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 22:18:36 2009" -->
<!-- isoreceived="20090114031836" -->
<!-- sent="Tue, 13 Jan 2009 21:18:30 -0600" -->
<!-- isosent="20090114031830" -->
<!-- name="William Hachfeld" -->
<!-- email="wdh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop" -->
<!-- id="7FB4364E-1445-448C-B7CF-03D66F648ED8_at_krellinst.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop" -->
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
<strong>From:</strong> William Hachfeld (<em>wdh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 22:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5167.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5165.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5178.php">Ralph Castain: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<li><strong>Reply:</strong> <a href="5178.php">Ralph Castain: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff &amp; George,
<br>
<p><p><span class="quotelev1"> &gt; Hum; interesting.  I can't think of any reason why that would be a  
</span><br>
problem offhand.  The
<br>
<span class="quotelev1"> &gt; mca_btl_sm_component_progress() function is the shared memory  
</span><br>
progression function.
<br>
<span class="quotelev1"> &gt; opal_progress() and mca_bml_r2_progress() are likely mainly  
</span><br>
dispatching off to this
<br>
<span class="quotelev1"> &gt; function.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Does OSS interfere with shared memory between processes in any  
</span><br>
way?  (I'm not enough
<br>
<span class="quotelev1"> &gt; of a kernel guy to know what the ramifications of ptrace and  
</span><br>
whatnot are)
<br>
<p>Open|SS shouldn't interfere with shared memory. We use the pthread  
<br>
library to access some TLS, but no shared memory...
<br>
<p><p><span class="quotelev1"> &gt; There might be one reason to slowdown the application quite a bit.  
</span><br>
If the fact that you're
<br>
<span class="quotelev1"> &gt; using timer interact with the libevent (the library we're using to  
</span><br>
internally manage any kind
<br>
<span class="quotelev1"> &gt; of events), then we might end-up in the situation where we call the  
</span><br>
poll for every iteration
<br>
<span class="quotelev1"> &gt; in the event library. And this is really expensive.
</span><br>
<p>I did contemplate the notion that maybe we were getting into the  
<br>
&quot;progress monitoring&quot; part of OpenMPI every time the timer interrupted  
<br>
the process (1000s of times per second). Can either of you see any  
<br>
mechanism by which that might happen?
<br>
<p><p><span class="quotelev1"> &gt; A quick way to figure out if this is that case is to run Open MPI  
</span><br>
without support for shared
<br>
<span class="quotelev1"> &gt; memory (--mca btl ^sm). This way we will call poll on a regular  
</span><br>
basis anyway, and if there
<br>
<span class="quotelev1"> &gt; is no difference between a normal run and a OSS one, we know at  
</span><br>
least where to start
<br>
<span class="quotelev1"> &gt; looking ...
</span><br>
<p>I ran SMG2000 on an 8-CPU Yellowrail node in the two configurations  
<br>
and recorded the wall/cpu clock times as reported by SMG2000 itself:
<br>
<p>&quot;mpirun -np 8 smg2000 -n 32 64 64&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Struct Interface, wall clock time = 0.042348 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Struct Interface, cpu clock time = 0.040000 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Setup, wall clock time =0.732441 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Setup, cpu clock time = 0.730000 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Solve, wall clock time = 6.881814 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Solve, cpu clock time =6.880000 seconds
<br>
<p>&quot;mpirun --mca btl ^sm -np 8 smg2000 -n 64 64 64&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Struct Interface, wall clock time = 0.059137 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Struct Interface, cpu clock time = 0.060000 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Setup, wall clock time = 0.931437 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Setup, cpu clock time = 0.930000 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Solve, wall clock time = 9.107343 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMG Solve, cpu clock time = 9.110000 seconds
<br>
<p>But running the application with the &quot;--mac btl ^sm&quot; option inside  
<br>
Open|SS also results in an extreme slowdown. I.e. it doesn't make any  
<br>
difference whether the shared memory transport is enabled or not. Open| 
<br>
SS reports time spent as follows (in case this helps pinpoint what is  
<br>
going on inside OpenMPI):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exclusive CPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time in seconds.			Function (defining location)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;364.050000				btl_openib_component_proress (libmpi.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;165.890000				mthca_poll_cq (libmthca-rdmav2.so)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;122.090000				pthread_spin_lock (libpthread.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;90.790000				opal_progress (libopen-pal.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48.230000				mca_bml_r2_progress (libmpi.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30.880000				ompi_request_wait_all (libmpi.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.780000				pthread_spin_unlock (libpthread.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.910000				mthca_free_srq_wqe (libmthca-rdmav2.so)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.910000				mthca_unlock_cqs (libmthca-rdmav2.so)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.730000				mthca_lock_cqs (libmthca-rdmav2.so)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.890000				__poll (libc.so.6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>Does this help at all?
<br>
<p><p>-- Bill Hachfeld, The Open|SpeedShop Project
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5167.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5165.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5178.php">Ralph Castain: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<li><strong>Reply:</strong> <a href="5178.php">Ralph Castain: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
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
