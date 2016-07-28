<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 14:58:18 2008" -->
<!-- isoreceived="20080911185818" -->
<!-- sent="Thu, 11 Sep 2008 14:52:28 -0400" -->
<!-- isosent="20080911185228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="5AC40892-C789-4CB3-BF1B-12B683BC90A9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48C965B8.6020107_at_neuralbs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 14:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6515.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6512.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6515.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6515.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2008, at 2:38 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; In short:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which of the 3 options is the one known to be unstable in the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads    Enable threads for MPI applications (default:
</span><br>
<span class="quotelev1">&gt;                         disabled)
</span><br>
<span class="quotelev1">&gt; --enable-progress-threads
</span><br>
<span class="quotelev1">&gt;                         Enable threads asynchronous communication  
</span><br>
<span class="quotelev1">&gt; progress
</span><br>
<span class="quotelev1">&gt;                         (default: disabled)
</span><br>
<span class="quotelev1">&gt; --with-threads          Set thread type (solaris / posix)
</span><br>
<p>You shouldn't need to specify any of these.
<br>
<p><span class="quotelev1">&gt; In long (rationale):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Just to make sure we don't contradict each other, you're  
</span><br>
<span class="quotelev1">&gt; suggesting the use of 'listen_thread' but, at the same time I'm  
</span><br>
<span class="quotelev1">&gt; telling Prasanna to _disable_ threads the threads USE flag which  
</span><br>
<span class="quotelev1">&gt; translates into the following logic (in the package):
</span><br>
<p>Heh; yes, it's a bit confusing -- I apologize.
<br>
<p>The &quot;threads&quot; that I'm saying don't work is the MPI multi-threaded  
<br>
support (i.e., MPI_THREAD_MULTIPLE) and support for progress threads  
<br>
within MPI's progression engine.
<br>
<p>What *does* work is a tiny threaded TCP listener for incoming  
<br>
connections.  Since the processing for each TCP connection takes a  
<br>
little time, we found that for scalability reasons, it was good to  
<br>
have a tiny thread that does nothing but block on TCP accept(), get  
<br>
the connection, and then hand it off to the main back-end thread for  
<br>
processing.  This allows our accept() rate to be quite high, even if  
<br>
the actual processing is slower.  *This* is the &quot;listen_thread&quot; mode,  
<br>
and turns out to be quite necessary for running at scale because our  
<br>
initial wireup coordination occurs over TCP -- there's a flood of  
<br>
incoming TCP connections back to the starter.  With the threaded TCP  
<br>
listener, the accept rate is high enough to not cause timeouts for the  
<br>
incoming TCP flood.
<br>
<p>Hope that made sense...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6515.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6512.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6515.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6515.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
