<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 11:35:14 2009" -->
<!-- isoreceived="20090428153514" -->
<!-- sent="Tue, 28 Apr 2009 16:36:20 +0100" -->
<!-- isosent="20090428153620" -->
<!-- name="Hugh Dickinson" -->
<!-- email="h.j.dickinson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="A7744018-C155-4A8A-BE5C-242FE61D025C_at_dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0904280755h690d953cy2e165b30010a864a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file<br>
<strong>From:</strong> Hugh Dickinson (<em>h.j.dickinson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 11:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9124.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9122.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9122.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9124.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9124.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>I can paswordlessly ssh between all nodes (to and from)
<br>
Almost none of these mpirun commands work. The only working case is  
<br>
if nodenameX is the node from which you are running the command. I  
<br>
don't know if this gives you extra diagnostic information, but if I  
<br>
explicitly set the wrong prefix (using --prefix), then I get errors  
<br>
from all the nodes telling me the daemon would not start. I don't get  
<br>
these errors normally. It seems to me that the communication is  
<br>
working okay, at least in the outwards direction (and from all  
<br>
nodes). Could this be a problem with forwarding of standard output?  
<br>
If I were to try a simple hello world program, is this more likely to  
<br>
work, or am I just adding another layer of complexity?
<br>
<p>Cheers,
<br>
<p>Hugh
<br>
<p>On 28 Apr 2009, at 15:55, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt; You're right, there is no initialization command (like lamboot)  you
</span><br>
<span class="quotelev1">&gt; have to call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really know why your sewtup doesn't work, so i'm making some
</span><br>
<span class="quotelev1">&gt; more &quot;blind shots&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you do passwordless ssh from between any two of your nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev1">&gt;  mpirun -np 1 --host nodenameX uptime
</span><br>
<span class="quotelev1">&gt; work for every X when called from any of your nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried
</span><br>
<span class="quotelev1">&gt;    mpirun -np 2 --host nodename1,nodename2  uptime
</span><br>
<span class="quotelev1">&gt; (i.e. not using the host file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 4:37 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The node names are exactly the same. I wanted to avoid updating  
</span><br>
<span class="quotelev2">&gt;&gt; the version
</span><br>
<span class="quotelev2">&gt;&gt; because I'm not the system administrator, and it could take some  
</span><br>
<span class="quotelev2">&gt;&gt; time before
</span><br>
<span class="quotelev2">&gt;&gt; it gets done. If it's likely to fix the problem though I'll try  
</span><br>
<span class="quotelev2">&gt;&gt; it. I'm
</span><br>
<span class="quotelev2">&gt;&gt; assuming that I don't have to do something analogous to the old  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;lamboot&quot;
</span><br>
<span class="quotelev2">&gt;&gt; command to initialise Open MPI on all the nodes. I've seen no  
</span><br>
<span class="quotelev2">&gt;&gt; documentation
</span><br>
<span class="quotelev2">&gt;&gt; anywhere that says I should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 28 Apr 2009, at 15:28, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Hugh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, just to make sure, are the hostnames in your host file  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well-known?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e. when you say you can do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ssh nodename uptime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you use exactly the same nodename in your host file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I'm trying to eliminate all non-Open-MPI error sources,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because with your setup it should basically work.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One more point to consider is to  update to Open-MPI 1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think your OPen-MPI version is the cause of your trouble,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but there have been quite some changes since v1.2.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Apr 28, 2009 at 3:22 PM, Hugh Dickinson
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indeed, all the nodes are running the same version of Open MPI.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was incorrect to describe the cluster as heterogeneous. In fact,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes run the same operating system (Scientific Linux 5.2), it's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hardware that's different and even then they're all i386 or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i686. I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attaching the output of ompi_info --all as I've seen it's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggested in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mailing list instructions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Hugh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just to make sure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You have installed Open-MPI on all your nodes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Same version everywhere?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Apr 28, 2009 at 12:57 PM, Hugh Dickinson
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; First of all let me make it perfectly clear that I'm a complete  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; beginner
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; far as MPI is concerned, so this may well be a trivial problem!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've tried to set up Open MPI to use SSH to communicate between  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; heterogeneous cluster. I've set up passwordless SSH and it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seems to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; working fine. For example by hand I can do:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh nodename uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and it returns the appropriate information for each node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I then tried running a non-MPI program on all the nodes at the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 10 --hostfile hostfile uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Where hostfile is a list of the 10 cluster node names with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slots=1 after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each one i.e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodename1 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodename2 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; etc...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nothing happens! The process just seems to hang. If I interrupt  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with Ctrl-C I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Timeout in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Timeout in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WARNING: mpirun has exited before it received notification that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; started processes had terminated.  You should double check and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ensure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If, instead of using the hostfile, I specify on the command  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from which I'm running mpirun, e.g.:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 1 --host nodename uptime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then it works (i.e. if it doesn't need to communicate with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other nodes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I need to tell Open MPI it should be using SSH to communicate?  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If so,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do this? To be honest I think it's trying to do so, because  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up passwordless SSH it challenged me for lots of passwords.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm running Open MPI 1.2.5 installed with Scientific Linux 5.2.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reiterate, it's very likely that I've done something stupid, so  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; suggestions are welcome.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9124.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9122.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9122.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9124.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9124.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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
