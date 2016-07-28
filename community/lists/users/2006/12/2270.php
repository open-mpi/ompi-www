<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 10:48:26 2006" -->
<!-- isoreceived="20061201154826" -->
<!-- sent="Fri, 1 Dec 2006 08:48:12 -0700" -->
<!-- isosent="20061201154812" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x11 forwarding" -->
<!-- id="1404CB9A-EA57-4258-AFFA-0118954C4DCF_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="456F5045.5000901_at_lbl.gov" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 10:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2269.php">Ralph Castain: "Re: [OMPI users] password orted problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this might be as simple as adding &quot;-d&quot; to the mpirun command  
<br>
line....
<br>
<p>If I run:
<br>
<p>mpirun  -np 2 -d -mca pls_rsh_agent &quot;ssh -X&quot;   xterm -e gdb ./mpi-ping
<br>
<p><p>All is well, I get the xterm's up..
<br>
<p>If I run:
<br>
<p>mpirun  -np 2 -mca pls_rsh_agent &quot;ssh -X&quot;   xterm -e gdb ./mpi-ping
<br>
<p>I get the following:
<br>
<p>/usr/bin/xauth:  error in locking authority file /home/ 
<br>
gshipman/.Xauthority
<br>
xterm Xt error: Can't open display: localhost:10.0
<br>
<p><p>Have you tried adding &quot;-d&quot;?
<br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<p><p><p><p>On Nov 30, 2006, at 2:42 PM, Dave Grote wrote:
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think that that is the problem. As far as I can tell, the  
</span><br>
<span class="quotelev1">&gt; DISPLAY environment variable is being set properly on the slave (it  
</span><br>
<span class="quotelev1">&gt; will sometimes have a different value than in the shell where  
</span><br>
<span class="quotelev1">&gt; mpirun was executed).
</span><br>
<span class="quotelev1">&gt;   Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I believe at least some of this may be a bug on our  
</span><br>
<span class="quotelev2">&gt;&gt; part. We currently pickup the local environment and forward it on  
</span><br>
<span class="quotelev2">&gt;&gt; to the remote nodes as the environment for use by the backend  
</span><br>
<span class="quotelev2">&gt;&gt; processes. I have seen quite a few environment variables in that  
</span><br>
<span class="quotelev2">&gt;&gt; list, including DISPLAY, which would create the problem you are  
</span><br>
<span class="quotelev2">&gt;&gt; seeing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;ll have to chat with folks here to understand what part of the  
</span><br>
<span class="quotelev2">&gt;&gt; environment we absolutely need to carry forward, and what parts we  
</span><br>
<span class="quotelev2">&gt;&gt; need to &#147;cleanse&#148; before passing it along.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/30/06 10:50 AM, &quot;Dave Grote&quot; &lt;dpgrote_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using caos linux (developed at LBL), which has the wrapper  
</span><br>
<span class="quotelev2">&gt;&gt; wwmpirun around mpirun, so my command is something like
</span><br>
<span class="quotelev2">&gt;&gt; wwmpirun -np 8 -- -x PYTHONPATH --mca pls_rsh_agent '&quot;ssh -X&quot;' / 
</span><br>
<span class="quotelev2">&gt;&gt; usr/local/bin/pyMPI
</span><br>
<span class="quotelev2">&gt;&gt; This is essentially the same as
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -x PYTHONPATH --mca pls_rsh_agent '&quot;ssh -X&quot;' /usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/bin/pyMPI
</span><br>
<span class="quotelev2">&gt;&gt; but wwmpirun does the scheduling, for example looking for idle  
</span><br>
<span class="quotelev2">&gt;&gt; nodes and creating the host file.
</span><br>
<span class="quotelev2">&gt;&gt; My system is setup with a master/login node which is running a  
</span><br>
<span class="quotelev2">&gt;&gt; full version of linux and slave nodes that run a reduced linux  
</span><br>
<span class="quotelev2">&gt;&gt; (that includes access to the X libraries). wwmmpirun always picks  
</span><br>
<span class="quotelev2">&gt;&gt; the slaves nodes to run on. I've also tried &quot;ssh -Y&quot; and it  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't help. I've set xhost for the slave nodes in my login shell  
</span><br>
<span class="quotelev2">&gt;&gt; on the master and that didn't work. XForwarding is enabled on all  
</span><br>
<span class="quotelev2">&gt;&gt; of the nodes, so that's not the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am able to get it to work by having wwmpirun do the command &quot;ssh  
</span><br>
<span class="quotelev2">&gt;&gt; -X nodennnn xclock&quot; before starting the parallel program on that  
</span><br>
<span class="quotelev2">&gt;&gt; same node, but this only works for the first person who logs into  
</span><br>
<span class="quotelev2">&gt;&gt; the master and gets DISPLAY=localhost:10. When someone else tries  
</span><br>
<span class="quotelev2">&gt;&gt; to run a parallel job, its seems that DISPLAY is set to localhost: 
</span><br>
<span class="quotelev2">&gt;&gt; 10 on the slaves and tries to forward through that other persons  
</span><br>
<span class="quotelev2">&gt;&gt; login with the same display number and the connection is refused  
</span><br>
<span class="quotelev2">&gt;&gt; because of wrong authentication. This seems like very odd  
</span><br>
<span class="quotelev2">&gt;&gt; behavior. I'm aware that this may be an issue with the X server  
</span><br>
<span class="quotelev2">&gt;&gt; (xorg) or with the version of linux, so I am also seeking help  
</span><br>
<span class="quotelev2">&gt;&gt; from the person who maintains caos linux. If it matters, the  
</span><br>
<span class="quotelev2">&gt;&gt; machine uses myrinet for the interconnects.
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;      Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen Shipman wrote:
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot get X11 forwarding to work using mpirun. I've tried all of
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; standard methods, such as setting pls_rsh_agent = ssh -X, using  
</span><br>
<span class="quotelev2">&gt;&gt; xhost,
</span><br>
<span class="quotelev2">&gt;&gt; and a few other things, but nothing works in general. In the FAQ,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-gui">http://www.open-mpi.org/faq/?category=running#mpirun-gui</a>, a
</span><br>
<span class="quotelev2">&gt;&gt; reference is
</span><br>
<span class="quotelev2">&gt;&gt; made to other methods, but &quot;they involve sophisticated X forwarding
</span><br>
<span class="quotelev2">&gt;&gt; through mpirun&quot;, and no further explanation is given. Can someone  
</span><br>
<span class="quotelev2">&gt;&gt; tell
</span><br>
<span class="quotelev2">&gt;&gt; me what these other methods are or point me to where I can find
</span><br>
<span class="quotelev2">&gt;&gt; info on
</span><br>
<span class="quotelev2">&gt;&gt; them? I've done lots of google searching and havn't found anything
</span><br>
<span class="quotelev2">&gt;&gt; useful. This is a major issue since my parallel code heavily
</span><br>
<span class="quotelev2">&gt;&gt; depends on
</span><br>
<span class="quotelev2">&gt;&gt; having the ability to open X windows on the remote machine. Any and
</span><br>
<span class="quotelev2">&gt;&gt; all
</span><br>
<span class="quotelev2">&gt;&gt; help would be appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;      Dave
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
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2270/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2269.php">Ralph Castain: "Re: [OMPI users] password orted problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2261.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
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
