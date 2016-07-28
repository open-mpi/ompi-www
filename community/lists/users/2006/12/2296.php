<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 15:10:50 2006" -->
<!-- isoreceived="20061204201050" -->
<!-- sent="Mon, 4 Dec 2006 15:10:42 -0500" -->
<!-- isosent="20061204201042" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] x11 forwarding" -->
<!-- id="0F7DCD74-D7F5-4FE5-9E96-EB5780D35059_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="45746F46.5030002_at_lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 15:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2297.php">Katherine Holcomb: "[OMPI users] Any known issues with ksh?"</a>
<li><strong>Previous message:</strong> <a href="2295.php">Jeff Squyres: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2293.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I'll add an enhancement ticket for this issue (ability to leave  
<br>
ssh sessions open without all the other debugging gorp).
<br>
<p>As Ralph indicated, we can't promise when this will be done, but  
<br>
it'll at least be on the list.
<br>
<p><p>On Dec 4, 2006, at 1:56 PM, Dave Grote wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK - I'll live with it for now. Fortunately, the extra output only  
</span><br>
<span class="quotelev1">&gt; occurs at the start and end of the run and doesn't interfere with  
</span><br>
<span class="quotelev1">&gt; the output of my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An obvious suggestion for when you get to revamping that part of  
</span><br>
<span class="quotelev1">&gt; the code is to add a new command line flag to keep the ssh sessions  
</span><br>
<span class="quotelev1">&gt; running without turning on the debugging output. I know that others  
</span><br>
<span class="quotelev1">&gt; have the same XForwarding problem and this would offer a general  
</span><br>
<span class="quotelev1">&gt; solution.
</span><br>
<span class="quotelev1">&gt;    Thanks for all of your help!!
</span><br>
<span class="quotelev1">&gt;       Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m afraid that would be a rather significant job as it plays a  
</span><br>
<span class="quotelev2">&gt;&gt; rather significant role in the ssh startup procedure. We have  
</span><br>
<span class="quotelev2">&gt;&gt; plans to revamp that portion of the code, but without someone who  
</span><br>
<span class="quotelev2">&gt;&gt; knows exactly what is going on and where, you are more likely to  
</span><br>
<span class="quotelev2">&gt;&gt; break it than revise it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can live with it as-is for now, I would strongly suggest  
</span><br>
<span class="quotelev2">&gt;&gt; doing so until we get back to that area.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just my $0.02.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/1/06 4:51 PM, &quot;Dave Grote&quot; &lt;dpgrote_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a place where I can hack the openmpi code to force it to  
</span><br>
<span class="quotelev2">&gt;&gt; keep the ssh sessions open without the -d option? I looked through  
</span><br>
<span class="quotelev2">&gt;&gt; some of the code, including orterun.c and a few other places, but  
</span><br>
<span class="quotelev2">&gt;&gt; don't have the familiarity with the code to find the place.
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;      Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; -d leaves the ssh session open
</span><br>
<span class="quotelev2">&gt;&gt; Try using:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -d -host boxtop2 -mca pls_rsh_agent &quot;ssh -X -n&quot; xterm -e cat
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note the &quot;ssh -X -n&quot;, this will tell ssh not to open stdin..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You should then be able to type characters in the resulting xterm  
</span><br>
<span class="quotelev2">&gt;&gt; and have them echo'd back correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 1, 2006, at 11:48 AM, Dave Grote wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the suggestion, but it doesn't fix my problem. I did  
</span><br>
<span class="quotelev2">&gt;&gt; the same thing you did and was able to get xterms open when using  
</span><br>
<span class="quotelev2">&gt;&gt; the -d option. But when I run my code, the -d option seems to play  
</span><br>
<span class="quotelev2">&gt;&gt; havoc with stdin. My code normally reads stdin from one processor  
</span><br>
<span class="quotelev2">&gt;&gt; and it broadcasts it to the others. This failed when using the -d  
</span><br>
<span class="quotelev2">&gt;&gt; option and the code wouldn't take input commands properly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, since -d did get the X windows working, it must be doing  
</span><br>
<span class="quotelev2">&gt;&gt; something differently. What is it about the -d option that allows  
</span><br>
<span class="quotelev2">&gt;&gt; the windows to open? If I knew that, it would be the fix to my  
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;    Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this might be as simple as adding &quot;-d&quot; to the mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; command line....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All is well, I get the xterm's up..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  -np 2 -mca pls_rsh_agent &quot;ssh -X&quot;   xterm -e gdb ./mpi-ping
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/xauth:  error in locking authority file /home/ 
</span><br>
<span class="quotelev2">&gt;&gt; gshipman/.Xauthority
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xterm Xt error: Can't open display: localhost:10.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that that is the problem. As far as I can tell, the  
</span><br>
<span class="quotelev2">&gt;&gt; DISPLAY environment variable is being set properly on the slave  
</span><br>
<span class="quotelev2">&gt;&gt; (it will sometimes have a different value than in the shell where  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was executed).
</span><br>
<span class="quotelev2">&gt;&gt;   Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain wrote:
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
<span class="quotelev2">&gt;&gt; On 11/30/06 10:50 AM, &quot;Dave Grote&quot; &lt;dpgrote_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:dpgrote_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=running#mpirun-gui">http://www.open-mpi.org/faq/?category=running#mpirun-gui</a>, a
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
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list  
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2297.php">Katherine Holcomb: "[OMPI users] Any known issues with ksh?"</a>
<li><strong>Previous message:</strong> <a href="2295.php">Jeff Squyres: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2293.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
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
