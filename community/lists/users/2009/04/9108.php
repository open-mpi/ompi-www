<?
$subject_val = "[OMPI users] ORTE_ERROR_LOG: Timeout in file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 06:56:18 2009" -->
<!-- isoreceived="20090428105618" -->
<!-- sent="Tue, 28 Apr 2009 11:57:26 +0100" -->
<!-- isosent="20090428105726" -->
<!-- name="Hugh Dickinson" -->
<!-- email="h.j.dickinson_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE_ERROR_LOG: Timeout in file" -->
<!-- id="8064B88F-9927-46A1-87BB-13EB86B90E33_at_dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] ORTE_ERROR_LOG: Timeout in file<br>
<strong>From:</strong> Hugh Dickinson (<em>h.j.dickinson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 06:57:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="9107.php">neeraj_at_[hidden]: "Re: [OMPI users] OpenMPI MPI_Bcast Algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9116.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9116.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Maybe reply:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>First of all let me make it perfectly clear that I'm a complete  
<br>
beginner as far as MPI is concerned, so this may well be a trivial  
<br>
problem!
<br>
<p>I've tried to set up Open MPI to use SSH to communicate between nodes  
<br>
on a heterogeneous cluster. I've set up passwordless SSH and it seems  
<br>
to be working fine. For example by hand I can do:
<br>
<p>ssh nodename uptime
<br>
<p>and it returns the appropriate information for each node.
<br>
I then tried running a non-MPI program on all the nodes at the same  
<br>
time:
<br>
<p>mpirun -np 10 --hostfile hostfile uptime
<br>
<p>Where hostfile is a list of the 10 cluster node names with slots=1  
<br>
after each one i.e
<br>
<p>nodename1 slots=1
<br>
nodename2 slots=2
<br>
etc...
<br>
<p>Nothing happens! The process just seems to hang. If I interrupt the  
<br>
process with Ctrl-C I get:
<br>
<p>&quot;
<br>
<p>mpirun: killing job...
<br>
<p>[gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout in  
<br>
file base/pls_base_orted_cmds.c at line 275
<br>
[gamma2.phyastcl.dur.ac.uk:18124] [0,0,0] ORTE_ERROR_LOG: Timeout in  
<br>
file pls_rsh_module.c at line 1166
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
WARNING: mpirun has exited before it received notification that all
started processes had terminated.  You should double check and ensure
that there are no runaway processes still executing.
------------------------------------------------------------------------ 
--
&quot;
If, instead of using the hostfile, I specify on the command line the  
host from which I'm running mpirun, e.g.:
mpirun -np 1 --host nodename uptime
then it works (i.e. if it doesn't need to communicate with other  
nodes). Do I need to tell Open MPI it should be using SSH to  
communicate? If so, how do I do this? To be honest I think it's  
trying to do so, because before I set up passwordless SSH it  
challenged me for lots of passwords.
I'm running Open MPI 1.2.5 installed with Scientific Linux 5.2. Let  
me reiterate, it's very likely that I've done something stupid, so  
all suggestions are welcome.
Cheers,
Hugh
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9109.php">neeraj_at_[hidden]: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="9107.php">neeraj_at_[hidden]: "Re: [OMPI users] OpenMPI MPI_Bcast Algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9116.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Reply:</strong> <a href="9116.php">jody: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Maybe reply:</strong> <a href="9117.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
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
