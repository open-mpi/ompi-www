<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 08:50:02 2009" -->
<!-- isoreceived="20090428125002" -->
<!-- sent="Tue, 28 Apr 2009 14:49:57 +0200" -->
<!-- isosent="20090428124957" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="9b0da5ce0904280549o49bbd3c5r1b831e3b6bea9325_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8064B88F-9927-46A1-87BB-13EB86B90E33_at_dur.ac.uk" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 08:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9115.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1212, Issue 3, Message: 2"</a>
<li><strong>In reply to:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hugh
<br>
<p>Just to make sure:
<br>
You have installed Open-MPI on all your nodes?
<br>
Same version everywhere?
<br>
<p>Jody
<br>
<p><p>On Tue, Apr 28, 2009 at 12:57 PM, Hugh Dickinson
<br>
&lt;h.j.dickinson_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all let me make it perfectly clear that I'm a complete beginner as
</span><br>
<span class="quotelev1">&gt; far as MPI is concerned, so this may well be a trivial problem!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to set up Open MPI to use SSH to communicate between nodes on a
</span><br>
<span class="quotelev1">&gt; heterogeneous cluster. I've set up passwordless SSH and it seems to be
</span><br>
<span class="quotelev1">&gt; working fine. For example by hand I can do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh nodename uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it returns the appropriate information for each node.
</span><br>
<span class="quotelev1">&gt; I then tried running a non-MPI program on all the nodes at the same time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 10 --hostfile hostfile uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where hostfile is a list of the 10 cluster node names with slots=1 after
</span><br>
<span class="quotelev1">&gt; each one i.e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nodename1 slots=1
</span><br>
<span class="quotelev1">&gt; nodename2 slots=2
</span><br>
<span class="quotelev1">&gt; etc...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing happens! The process just seems to hang. If I interrupt the process
</span><br>
<span class="quotelev1">&gt; with Ctrl-C I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: mpirun has exited before it received notification that all
</span><br>
<span class="quotelev1">&gt; started processes had terminated. &#160;You should double check and ensure
</span><br>
<span class="quotelev1">&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If, instead of using the hostfile, I specify on the command line the host
</span><br>
<span class="quotelev1">&gt; from which I'm running mpirun, e.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --host nodename uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then it works (i.e. if it doesn't need to communicate with other nodes). Do
</span><br>
<span class="quotelev1">&gt; I need to tell Open MPI it should be using SSH to communicate? If so, how do
</span><br>
<span class="quotelev1">&gt; I do this? To be honest I think it's trying to do so, because before I set
</span><br>
<span class="quotelev1">&gt; up passwordless SSH it challenged me for lots of passwords.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running Open MPI 1.2.5 installed with Scientific Linux 5.2. Let me
</span><br>
<span class="quotelev1">&gt; reiterate, it's very likely that I've done something stupid, so all
</span><br>
<span class="quotelev1">&gt; suggestions are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugh
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9115.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1212, Issue 3, Message: 2"</a>
<li><strong>In reply to:</strong> <a href="9108.php">Hugh Dickinson: "[OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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
