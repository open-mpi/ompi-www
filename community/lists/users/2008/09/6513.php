<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 14:46:32 2008" -->
<!-- isoreceived="20080911184632" -->
<!-- sent="Thu, 11 Sep 2008 12:46:23 -0600" -->
<!-- isosent="20080911184623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="D2BBF69B-B324-491A-BF99-E7F4B3AA5242_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 14:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6512.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6512.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The two configuration options that are disabled by default (--enable- 
<br>
mpi-threads and --enable-progress-threads) are both known unstable
<br>
<p>The runtime listen_thread option is quite different and is known safe.
<br>
<p>Ralph
<br>
<p><p>On Sep 11, 2008, at 12:38 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In long (rationale):
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if use threads; then
</span><br>
<span class="quotelev1">&gt;       myconf=&quot;${myconf}
</span><br>
<span class="quotelev1">&gt;           --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;           --with-progress-threads
</span><br>
<span class="quotelev1">&gt;           --with-threads=posix&quot;
</span><br>
<span class="quotelev1">&gt;   fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The decision was made based on the configure --help information  
</span><br>
<span class="quotelev1">&gt; (most probably from the 1.1 series), which lead to arbitrarily  
</span><br>
<span class="quotelev1">&gt; enabling/disabling all that has to do with threads using a single  
</span><br>
<span class="quotelev1">&gt; keyword. Now, based on :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ThreadSafetySupport">https://svn.open-mpi.org/trac/ompi/wiki/ThreadSafetySupport</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is it only --enable-mpi-threads that is unstable in the  
</span><br>
<span class="quotelev1">&gt; &quot;*thread*&quot; options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 10, 2008, at 9:29 PM, Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have upgraded to 1.2.7 and am still noticing the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, we didn't change anything with regards to OOB and TCP from  
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.6 -&gt; 1.2.7, but it's still good to be at the latest version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try running with this MCA parameter:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun --mca oob_tcp_listen_mode listen_thread ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry; I forgot that we did not enable that option by default in  
</span><br>
<span class="quotelev2">&gt;&gt; the v1.2 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6512.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6512.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
