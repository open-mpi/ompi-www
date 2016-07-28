<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 15:27:37 2008" -->
<!-- isoreceived="20080911192737" -->
<!-- sent="Thu, 11 Sep 2008 15:27:33 -0400" -->
<!-- isosent="20080911192733" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48C97125.3010400_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5AC40892-C789-4CB3-BF1B-12B683BC90A9_at_cisco.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 15:27:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 11, 2008, at 2:38 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In short:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which of the 3 options is the one known to be unstable in the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads    Enable threads for MPI applications (default:
</span><br>
<span class="quotelev2">&gt;&gt;                         disabled)
</span><br>
<span class="quotelev2">&gt;&gt; --enable-progress-threads
</span><br>
<span class="quotelev2">&gt;&gt;                         Enable threads asynchronous communication 
</span><br>
<span class="quotelev2">&gt;&gt; progress
</span><br>
<span class="quotelev2">&gt;&gt;                         (default: disabled)
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads          Set thread type (solaris / posix)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You shouldn't need to specify any of these.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In long (rationale):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Just to make sure we don't contradict each other, you're suggesting 
</span><br>
<span class="quotelev2">&gt;&gt; the use of 'listen_thread' but, at the same time I'm telling Prasanna 
</span><br>
<span class="quotelev2">&gt;&gt; to _disable_ threads the threads USE flag which translates into the 
</span><br>
<span class="quotelev2">&gt;&gt; following logic (in the package):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heh; yes, it's a bit confusing -- I apologize.
</span><br>
Don't, I forgot about the README which is more explicit about the 
<br>
options and the fact that --with-threads=x was directly linked to the 2 
<br>
other options; my bad.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;threads&quot; that I'm saying don't work is the MPI multi-threaded 
</span><br>
<span class="quotelev1">&gt; support (i.e., MPI_THREAD_MULTIPLE) and support for progress threads 
</span><br>
<span class="quotelev1">&gt; within MPI's progression engine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What *does* work is a tiny threaded TCP listener for incoming 
</span><br>
<span class="quotelev1">&gt; connections.  Since the processing for each TCP connection takes a 
</span><br>
<span class="quotelev1">&gt; little time, we found that for scalability reasons, it was good to 
</span><br>
<span class="quotelev1">&gt; have a tiny thread that does nothing but block on TCP accept(), get 
</span><br>
<span class="quotelev1">&gt; the connection, and then hand it off to the main back-end thread for 
</span><br>
<span class="quotelev1">&gt; processing.  This allows our accept() rate to be quite high, even if 
</span><br>
<span class="quotelev1">&gt; the actual processing is slower.  *This* is the &quot;listen_thread&quot; mode, 
</span><br>
<span class="quotelev1">&gt; and turns out to be quite necessary for running at scale because our 
</span><br>
<span class="quotelev1">&gt; initial wireup coordination occurs over TCP -- there's a flood of 
</span><br>
<span class="quotelev1">&gt; incoming TCP connections back to the starter.  With the threaded TCP 
</span><br>
<span class="quotelev1">&gt; listener, the accept rate is high enough to not cause timeouts for the 
</span><br>
<span class="quotelev1">&gt; incoming TCP flood.
</span><br>
Ok, added to the information from the README, I'm thinking none of the 3 
<br>
configure options have an impact on the said 'threaded TCP listener' and 
<br>
the MCA option you suggested should still work, is this correct?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that made sense...
</span><br>
It did, I just want to make sure we're not disabling the listener thread.
<br>
<p>On that matter, since we're modifying the package to correct this, how 
<br>
would I go about enabling `oob_tcp_listen_mode listen_thread` by default 
<br>
at compile time?
<br>
<p>Many thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
