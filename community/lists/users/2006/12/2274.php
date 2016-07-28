<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 16:30:55 2006" -->
<!-- isoreceived="20061201213055" -->
<!-- sent="Fri, 1 Dec 2006 14:30:42 -0700" -->
<!-- isosent="20061201213042" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x11 forwarding" -->
<!-- id="4BB7C41E-2C2A-47B5-871B-F6C12C50B26A_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="45707912.6010309_at_lbl.gov" -->
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
<strong>Date:</strong> 2006-12-01 16:30:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2275.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2275.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2275.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2276.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-d leaves the ssh session open
<br>
Try using:
<br>
<p>mpirun -d -host boxtop2 -mca pls_rsh_agent &quot;ssh -X -n&quot; xterm -e cat
<br>
<p><p>Note the &quot;ssh -X -n&quot;, this will tell ssh not to open stdin..
<br>
<p>You should then be able to type characters in the resulting xterm and  
<br>
have them echo'd back correctly.
<br>
<p>- Galen
<br>
<p><p>On Dec 1, 2006, at 11:48 AM, Dave Grote wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion, but it doesn't fix my problem. I did the  
</span><br>
<span class="quotelev1">&gt; same thing you did and was able to get xterms open when using the - 
</span><br>
<span class="quotelev1">&gt; d option. But when I run my code, the -d option seems to play havoc  
</span><br>
<span class="quotelev1">&gt; with stdin. My code normally reads stdin from one processor and it  
</span><br>
<span class="quotelev1">&gt; broadcasts it to the others. This failed when using the -d option  
</span><br>
<span class="quotelev1">&gt; and the code wouldn't take input commands properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, since -d did get the X windows working, it must be doing  
</span><br>
<span class="quotelev1">&gt; something differently. What is it about the -d option that allows  
</span><br>
<span class="quotelev1">&gt; the windows to open? If I knew that, it would be the fix to my  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;    Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this might be as simple as adding &quot;-d&quot; to the mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; command line....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  -np 2 -d -mca pls_rsh_agent &quot;ssh -X&quot;   xterm -e gdb ./mpi- 
</span><br>
<span class="quotelev2">&gt;&gt; ping
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All is well, I get the xterm's up..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  -np 2 -mca pls_rsh_agent &quot;ssh -X&quot;   xterm -e gdb ./mpi-ping
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/xauth:  error in locking authority file /home/ 
</span><br>
<span class="quotelev2">&gt;&gt; gshipman/.Xauthority
</span><br>
<span class="quotelev2">&gt;&gt; xterm Xt error: Can't open display: localhost:10.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried adding &quot;-d&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 30, 2006, at 2:42 PM, Dave Grote wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think that that is the problem. As far as I can tell, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DISPLAY environment variable is being set properly on the slave  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (it will sometimes have a different value than in the shell where  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was executed).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, I believe at least some of this may be a bug on our  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; part. We currently pickup the local environment and forward it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on to the remote nodes as the environment for use by the backend  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes. I have seen quite a few environment variables in that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list, including DISPLAY, which would create the problem you are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seeing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;ll have to chat with folks here to understand what part of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment we absolutely need to carry forward, and what parts  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we need to &#147;cleanse&#148; before passing it along.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/30/06 10:50 AM, &quot;Dave Grote&quot; &lt;dpgrote_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using caos linux (developed at LBL), which has the wrapper  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wwmpirun around mpirun, so my command is something like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wwmpirun -np 8 -- -x PYTHONPATH --mca pls_rsh_agent '&quot;ssh -X&quot;' / 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usr/local/bin/pyMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is essentially the same as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8 -x PYTHONPATH --mca pls_rsh_agent '&quot;ssh -X&quot;' /usr/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local/bin/pyMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but wwmpirun does the scheduling, for example looking for idle  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes and creating the host file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My system is setup with a master/login node which is running a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; full version of linux and slave nodes that run a reduced linux  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (that includes access to the X libraries). wwmmpirun always  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; picks the slaves nodes to run on. I've also tried &quot;ssh -Y&quot; and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it doesn't help. I've set xhost for the slave nodes in my login  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell on the master and that didn't work. XForwarding is enabled  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on all of the nodes, so that's not the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am able to get it to work by having wwmpirun do the command  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;ssh -X nodennnn xclock&quot; before starting the parallel program on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that same node, but this only works for the first person who  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logs into the master and gets DISPLAY=localhost:10. When someone  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; else tries to run a parallel job, its seems that DISPLAY is set  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to localhost:10 on the slaves and tries to forward through that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other persons login with the same display number and the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection is refused because of wrong authentication. This  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seems like very odd behavior. I'm aware that this may be an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue with the X server (xorg) or with the version of linux, so  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am also seeking help from the person who maintains caos linux.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it matters, the machine uses myrinet for the interconnects.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Dave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Galen Shipman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what does your command line look like?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Galen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 29, 2006, at 7:53 PM, Dave Grote wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I cannot get X11 forwarding to work using mpirun. I've tried all of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; standard methods, such as setting pls_rsh_agent = ssh -X, using  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xhost,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and a few other things, but nothing works in general. In the FAQ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-gui">http://www.open-mpi.org/faq/?category=running#mpirun-gui</a>, a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reference is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; made to other methods, but &quot;they involve sophisticated X forwarding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through mpirun&quot;, and no further explanation is given. Can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; someone tell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me what these other methods are or point me to where I can find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; info on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them? I've done lots of google searching and havn't found anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; useful. This is a major issue since my parallel code heavily
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depends on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; having the ability to open X windows on the remote machine. Any and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help would be appreciated!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Dave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2275.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2275.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2275.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Reply:</strong> <a href="2276.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
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
