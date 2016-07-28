<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 18:03:14 2015" -->
<!-- isoreceived="20150331220314" -->
<!-- sent="Tue, 31 Mar 2015 22:03:12 +0000" -->
<!-- isosent="20150331220312" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="D7BB9309-19EA-4FAD-81EC-F38F98D18D0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAowFmNGCGQz7gO27bz9a_=+V+v4EBWq64oEMQwatVWN-4gTCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-31 18:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26587.php">Lane, William: "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26585.php">Thomas Klimpel: "[OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26585.php">Thomas Klimpel: "[OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to check out these blog entries about the tree-based launcher in Open MPI for a little background:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi">http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi-part-2">http://blogs.cisco.com/performance/tree-based-launch-in-open-mpi-part-2</a>
<br>
<p>Your mail describes several issues; let's break them down:
<br>
<p>1. Ctrl-Z issues.  For the moment &quot;don't do that&quot;.  The launch should be fast enough that you shouldn't need to pause the launch and re-start it later.  Meaning: let's solve the other issues first, and come back to the ctrl-Z issues later.
<br>
<p>2. Unable to resolve: can you be more specific on this?  Do you know if OMPI successfully launched its helper daemons (&quot;orted&quot;) on some, but not all of the servers in question?  Can you send the full command and output that you're executing?
<br>
<p>3. Host key verification failed: this likely means an ssh misconfiguration somewhere on your machines.  I.e., one server is trying to ssh to another server, and the ssh host key verification between those two servers fails.  You might want to check that all your host keys and host key caches are correct between all machines.
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 31, 2015, at 3:27 PM, Thomas Klimpel &lt;jacques.gentzen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a nasty bug in my software and can make it crash by stopping it with ctrl-Z, waiting many seconds, and then saying &quot;fg&quot;, for continuing the run. At least it crashes when I start it on 3 workers with 24 instances each plus a master. On 2 workers with 24 instances each it doesn't crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I decided to upgrade openmpi from 1.6.5 to 1.8.4 for a test, to see if it changes anything. But 1.8.4 behaves completely different from 1.6.5, at least when I change the number of instances or the number of workers. If I start it with 3 workers plus a master, I get the error message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I start with 3 workers but no separate master, or 2 workers and a separate master, the software seems to run fine, but after some time I get the warning (with no further consequences)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I start completely differenc command line options (of my software) and a GUI I always get (even if I only start just a single worker on the master, i.e. no separate workers)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname xxx.yyy.zzz: Name or service not known
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This last message certainly contains some truth, because even &quot;dig xxx.yyy.zzz&quot; cannot resolve this hostname (not even on the master itself), and xxx.yyy.zzz is indeed the hostname of the master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the differences don't stop here. If I press ctrl-Z, the mesage &quot;^Zorterun: Forwarding signal 20 to job&quot; appears, and the shell freezes until I press crtl-C. I work around this now by sending the master a SIGSTOP signal via &quot;kill -SIGSTOP 12345&quot;, and after many seconds a &quot;kill -SIGCONT 12345&quot;. Still, the behavior of 1.8.4 is completely different from 1.6.5 here too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another difference is that 1.8.4 often complains that I have requested too many workers (or that some libnuma would be missing), which I fix by adding --bind-to socket:overload-allowed. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have at least one question: Is 1.8.4 really so different from 1.6.5, or is it more probably that I made some mistake while building 1.8.4, for example using wrong configure options, maybe because these changed since 1.6.5, and I haven't bothered to read the documentation and just continued to use my following (old from 1.6.5) configure options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f77=no --enable-mpi-f90=no --with-threads=posix --enable-mpi-thread-multiple --disable-vt
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26585.php">http://www.open-mpi.org/community/lists/users/2015/03/26585.php</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26587.php">Lane, William: "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26585.php">Thomas Klimpel: "[OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26585.php">Thomas Klimpel: "[OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
