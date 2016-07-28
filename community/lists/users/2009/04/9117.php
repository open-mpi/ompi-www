<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 09:22:21 2009" -->
<!-- isoreceived="20090428132221" -->
<!-- sent="Tue, 28 Apr 2009 14:22:53 +0100" -->
<!-- isosent="20090428132253" -->
<!-- name="Hugh Dickinson" -->
<!-- email="h.j.dickinson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="5A5EFD92-D0DC-4B2C-86E5-8034B5DEEE83_at_dur.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
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
<strong>Date:</strong> 2009-04-28 09:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9118.php">Barnabas Debreczeni: "[OMPI users] sharing memory between processes"</a>
<li><strong>Previous message:</strong> <a href="9116.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Maybe in reply to:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9119.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9119.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>Indeed, all the nodes are running the same version of Open MPI.  
<br>
Perhaps I was incorrect to describe the cluster as heterogeneous. In  
<br>
fact, all the nodes run the same operating system (Scientific Linux  
<br>
5.2), it's only the hardware that's different and even then they're  
<br>
all i386 or i686. I'm also attaching the output of ompi_info --all as  
<br>
I've seen it's suggested in the mailing list instructions.
<br>
<p>Cheers,
<br>
<p>Hugh
<br>
<p>&#239;&#191;&#188;
<br>
<p><span class="quotelev1">&gt; Hi Hugh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure:
</span><br>
<span class="quotelev1">&gt; You have installed Open-MPI on all your nodes?
</span><br>
<span class="quotelev1">&gt; Same version everywhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 12:57 PM, Hugh Dickinson
</span><br>
<span class="quotelev1">&gt; &lt;h.j.dickinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First of all let me make it perfectly clear that I'm a complete  
</span><br>
<span class="quotelev1">&gt; beginner as
</span><br>
<span class="quotelev2">&gt; &gt; far as MPI is concerned, so this may well be a trivial problem!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've tried to set up Open MPI to use SSH to communicate between  
</span><br>
<span class="quotelev1">&gt; nodes on a
</span><br>
<span class="quotelev2">&gt; &gt; heterogeneous cluster. I've set up passwordless SSH and it seems  
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev2">&gt; &gt; working fine. For example by hand I can do:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ssh nodename uptime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and it returns the appropriate information for each node.
</span><br>
<span class="quotelev2">&gt; &gt; I then tried running a non-MPI program on all the nodes at the  
</span><br>
<span class="quotelev1">&gt; same time:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 10 --hostfile hostfile uptime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where hostfile is a list of the 10 cluster node names with  
</span><br>
<span class="quotelev1">&gt; slots=1 after
</span><br>
<span class="quotelev2">&gt; &gt; each one i.e
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; nodename1 slots=1
</span><br>
<span class="quotelev2">&gt; &gt; nodename2 slots=2
</span><br>
<span class="quotelev2">&gt; &gt; etc...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nothing happens! The process just seems to hang. If I interrupt  
</span><br>
<span class="quotelev1">&gt; the process
</span><br>
<span class="quotelev2">&gt; &gt; with Ctrl-C I get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout  
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev2">&gt; &gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt; &gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout  
</span><br>
<span class="quotelev1">&gt; in file
</span><br>
<span class="quotelev2">&gt; &gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: mpirun has exited before it received notification that all
</span><br>
<span class="quotelev2">&gt; &gt; started processes had terminated.  You should double check and  
</span><br>
<span class="quotelev1">&gt; ensure
</span><br>
<span class="quotelev2">&gt; &gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If, instead of using the hostfile, I specify on the command line  
</span><br>
<span class="quotelev1">&gt; the host
</span><br>
<span class="quotelev2">&gt; &gt; from which I'm running mpirun, e.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 1 --host nodename uptime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; then it works (i.e. if it doesn't need to communicate with other  
</span><br>
<span class="quotelev1">&gt; nodes). Do
</span><br>
<span class="quotelev2">&gt; &gt; I need to tell Open MPI it should be using SSH to communicate? If  
</span><br>
<span class="quotelev1">&gt; so, how do
</span><br>
<span class="quotelev2">&gt; &gt; I do this? To be honest I think it's trying to do so, because  
</span><br>
<span class="quotelev1">&gt; before I set
</span><br>
<span class="quotelev2">&gt; &gt; up passwordless SSH it challenged me for lots of passwords.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm running Open MPI 1.2.5 installed with Scientific Linux 5.2.  
</span><br>
<span class="quotelev1">&gt; Let me
</span><br>
<span class="quotelev2">&gt; &gt; reiterate, it's very likely that I've done something stupid, so all
</span><br>
<span class="quotelev2">&gt; &gt; suggestions are welcome.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9117/ompi_info.txt">attachment</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9117/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9118.php">Barnabas Debreczeni: "[OMPI users] sharing memory between processes"</a>
<li><strong>Previous message:</strong> <a href="9116.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Maybe in reply to:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9119.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9119.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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
