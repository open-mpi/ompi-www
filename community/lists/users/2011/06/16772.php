<?
$subject_val = "[OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 11:05:49 2011" -->
<!-- isoreceived="20110628150549" -->
<!-- sent="Tue, 28 Jun 2011 11:05:51 -0400" -->
<!-- isosent="20110628150551" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="4E09B58F.17675.48A02816_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] mpirun does not propagate environment from master node to slave nodes<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpirun%20does%20not%20propagate%20environment%20from%20master%20node%20to%20slave%20nodes"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-28 11:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16773.php">Bill Johnstone: "[OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16771.php">Rodrigo Oliveira: "[OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16774.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16774.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="16776.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I installed Open MPI 1.4.3 on our new HPC blades, with Infiniband 
<br>
interconnection.
<br>
<p>My system environments are as:
<br>
<p>1)uname -a output:  
<br>
Linux gulftown 2.6.18-194.el5 #1 SMP Tue Mar 16 21:52:39 EDT 
<br>
2010 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>2) /home is mounted over all nodes, and mpirun is started under 
<br>
/home/...
<br>
<p>Open MPI and application codes are compiled with intel(R) 
<br>
compilers V11. Infiniband stack is Mellanox OFED 1.5.2.
<br>
<p>I have two questions about mpirun:
<br>
<p>a) how could I get to know what is the network interconnect 
<br>
protocol used by the MPI application? 
<br>
<p>I specify &quot;--mca btl openib,self,sm,tcp&quot; to mpirun, but I want to 
<br>
make sure it really uses infiniband interconnect.
<br>
<p>b) when I run mpirun, I get the following message:
<br>
====== Quote begin
<br>
bash: orted: command not found
<br>
bash: orted: command not found
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 15120) died unexpectedly with status 127 while 
<br>
attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see 
<br>
above).
<br>
<p>This may be because the daemon was unable to find all the 
<br>
needed shared
<br>
libraries on the remote node. You may set your 
<br>
LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the 
<br>
process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes 
<br>
shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibnode001 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibnode002 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibnode003 - daemon did not report back when launched
<br>
<p>====== Quote end
<br>
<p>It seems orted is not found on slave nodes. If I set the PATH and 
<br>
LD_LIBRARY_PATH through --prefix to mpirun, or --path, or -x 
<br>
options to mpirun, to make the orted and related dynamic libs 
<br>
available on slave nodes, it does not work as expected from mpirun 
<br>
manual page. The only working case is that I set PATH and 
<br>
LD_LIBRARY_PATH in ~/.bashrc for mpirun, and this .bashrc is 
<br>
invoked by slave nodes too for login shell. I do not want to set PATH 
<br>
and LD_LIBRARY_PATH in ~/.bashrc, but instead to set options to 
<br>
mpirun directly.
<br>
<p>Thanks,
<br>
Yiguang
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16773.php">Bill Johnstone: "[OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16771.php">Rodrigo Oliveira: "[OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16774.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16774.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="16776.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
