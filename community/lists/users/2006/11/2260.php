<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 14:30:25 2006" -->
<!-- isoreceived="20061130193025" -->
<!-- sent="Thu, 30 Nov 2006 12:30:20 -0700" -->
<!-- isosent="20061130193020" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x11 forwarding" -->
<!-- id="C1947F5C.61C4%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="456F19F5.9080206_at_lbl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 14:30:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2259.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2259.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I believe at least some of this may be a bug on our part. We
<br>
currently pickup the local environment and forward it on to the remote nodes
<br>
as the environment for use by the backend processes. I have seen quite a few
<br>
environment variables in that list, including DISPLAY, which would create
<br>
the problem you are seeing.
<br>
<p>I&#185;ll have to chat with folks here to understand what part of the environment
<br>
we absolutely need to carry forward, and what parts we need to &#179;cleanse&#178;
<br>
before passing it along.
<br>
<p>Ralph
<br>
<p><p>On 11/30/06 10:50 AM, &quot;Dave Grote&quot; &lt;dpgrote_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using caos linux (developed at LBL), which has the wrapper wwmpirun around
</span><br>
<span class="quotelev1">&gt; mpirun, so my command is something like
</span><br>
<span class="quotelev1">&gt; wwmpirun -np 8 -- -x PYTHONPATH --mca pls_rsh_agent '&quot;ssh -X&quot;'
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/pyMPI
</span><br>
<span class="quotelev1">&gt; This is essentially the same as
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -x PYTHONPATH --mca pls_rsh_agent '&quot;ssh -X&quot;' /usr/local/bin/pyMPI
</span><br>
<span class="quotelev1">&gt; but wwmpirun does the scheduling, for example looking for idle nodes and
</span><br>
<span class="quotelev1">&gt; creating the host file.
</span><br>
<span class="quotelev1">&gt; My system is setup with a master/login node which is running a full version of
</span><br>
<span class="quotelev1">&gt; linux and slave nodes that run a reduced linux (that includes access to the X
</span><br>
<span class="quotelev1">&gt; libraries). wwmmpirun always picks the slaves nodes to run on. I've also tried
</span><br>
<span class="quotelev1">&gt; &quot;ssh -Y&quot; and it doesn't help. I've set xhost for the slave nodes in my login
</span><br>
<span class="quotelev1">&gt; shell on the master and that didn't work. XForwarding is enabled on all of the
</span><br>
<span class="quotelev1">&gt; nodes, so that's not the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to get it to work by having wwmpirun do the command &quot;ssh -X nodennnn
</span><br>
<span class="quotelev1">&gt; xclock&quot; before starting the parallel program on that same node, but this only
</span><br>
<span class="quotelev1">&gt; works for the first person who logs into the master and gets
</span><br>
<span class="quotelev1">&gt; DISPLAY=localhost:10. When someone else tries to run a parallel job, its seems
</span><br>
<span class="quotelev1">&gt; that DISPLAY is set to localhost:10 on the slaves and tries to forward through
</span><br>
<span class="quotelev1">&gt; that other persons login with the same display number and the connection is
</span><br>
<span class="quotelev1">&gt; refused because of wrong authentication. This seems like very odd behavior.
</span><br>
<span class="quotelev1">&gt; I'm aware that this may be an issue with the X server (xorg) or with the
</span><br>
<span class="quotelev1">&gt; version of linux, so I am also seeking help from the person who maintains caos
</span><br>
<span class="quotelev1">&gt; linux. If it matters, the machine uses myrinet for the interconnects.
</span><br>
<span class="quotelev1">&gt;   Thanks!
</span><br>
<span class="quotelev1">&gt;      Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; what does your command line look like?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 29, 2006, at 7:53 PM, Dave Grote wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot get X11 forwarding to work using mpirun. I've tried all of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard methods, such as setting pls_rsh_agent = ssh -X, using xhost,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a few other things, but nothing works in general. In the FAQ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-gui">http://www.open-mpi.org/faq/?category=running#mpirun-gui</a>, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reference is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; made to other methods, but &quot;they involve sophisticated X forwarding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through mpirun&quot;, and no further explanation is given. Can someone tell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me what these other methods are or point me to where I can find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them? I've done lots of google searching and havn't found anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; useful. This is a major issue since my parallel code heavily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depends on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having the ability to open X windows on the remote machine. Any and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help would be appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2259.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2259.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
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
