<?
$subject_val = "[OMPI users] Job hangs when daemon does not report back from remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 16:40:45 2009" -->
<!-- isoreceived="20090207214045" -->
<!-- sent="Sun, 8 Feb 2009 10:40:32 +1300" -->
<!-- isosent="20090207214032" -->
<!-- name="Kersey Black" -->
<!-- email="kblack_at_[hidden]" -->
<!-- subject="[OMPI users] Job hangs when daemon does not report back from remote machine" -->
<!-- id="CA8839E9-F992-4E99-9E35-D967D71891DC_at_jsd.claremont.edu" -->
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
<strong>Subject:</strong> [OMPI users] Job hangs when daemon does not report back from remote machine<br>
<strong>From:</strong> Kersey Black (<em>kblack_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-07 16:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Disclaimer up front -- a newbie to openmpi working to get Gromacs and  
<br>
other modeling code running.
<br>
I have it running fine on the local machine, but I am unable to get  
<br>
openmpi to work when trying to include a remote machine.
<br>
Any help or pointers would be greatly appreciated.
<br>
<p>System:   opensuse, 10.3.
<br>
Openmpi:   first I installed 1.2.2 as rpm from yast, and, when that  
<br>
did not seem to work, I switched to the current release of 1.3,  
<br>
compiled with default configuration options, except I did use the -- 
<br>
prefix to set the installation directory
<br>
openmpi-mca-params.conf:   (with 1.3) I have only added
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl = self,tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_show_mca_params = enviro
<br>
ssh:  host-based authentication
<br>
<p>With both installs, I can run on multiple slots on the local machine,  
<br>
but when I try to include a remote machine, it hangs.
<br>
Using this hostfile:
<br>
&nbsp;&nbsp;&nbsp;ccn3 slots=2 max_slots=2
<br>
&nbsp;&nbsp;&nbsp;ccn4 slots=2 max_slots=2
<br>
Typical output (this is from 1.3) when I try to run two slots locally  
<br>
(ccn3) and 2 on the remote machine (ccn4):
<br>
-----
<br>
black_at_ccn3:~/Documents/mp&gt; mpirun --debug-daemons --hostfile myh3 -np  
<br>
4 hostname
<br>
Daemon was launched on ccn3 - beginning to initialize
<br>
Daemon [[63883,0],1] checking in as pid 20554 on host ccn3
<br>
Daemon [[63883,0],1] not using static ports
<br>
[ccn3:20554] [[63883,0],1] orted: up and running - waiting for commands!
<br>
Daemon was launched on ccn4 - beginning to initialize
<br>
Daemon [[63883,0],2] checking in as pid 7485 on host ccn4
<br>
Daemon [[63883,0],2] not using static ports
<br>
<pre>
----
And here it hangs
When I kill the job with ^C, I get:
	ccn3
	ccn4 - daemon did not report back when launched
Everything I read in the FAQ (in particular in part 2 of the &quot;Running  
MPI&quot; portion) suggests that this has to do with SSH problems, or with  
PATH problems.
SSH is configured and working for host-based authentication.  It seems  
to be fine.
I set the LD_LIBRARY_PATH to include openmpi/lib and include the  
openmpi/bin directory in PATH as part of a script that runs for all  
users (called by /bin/bashrc.local), and when things did not work, I  
included the same code in ~/.bashrc and ~/.profile.  All of this  
results in it being set 3 times (from `env`) in a interactive shell,  
but it has not solved the problem.
For comparison, when I run it locally on just two slots on the local  
machine, I get:
black_at_ccn3:~/Documents/mp&gt; mpirun --debug-daemons --hostfile myh3 -np  
2 hostname
Daemon was launched on ccn3 - beginning to initialize
Daemon [[63924,0],1] checking in as pid 20608 on host ccn3
Daemon [[63924,0],1] not using static ports
[ccn3:20603] [[63924,0],0] orted_cmd: received add_local_procs
[ccn3:20603] [[63924,0],0] node[0].name ccn3 daemon 0 arch ffc91200
[ccn3:20603] [[63924,0],0] node[1].name ccn3 daemon 1 arch ffc91200
[ccn3:20603] [[63924,0],0] node[2].name ccn4 daemon INVALID arch  
ffc91200
[ccn3:20608] [[63924,0],1] orted: up and running - waiting for commands!
[ccn3:20608] [[63924,0],1] orted_cmd: received add_local_procs
[ccn3:20608] [[63924,0],1] node[0].name ccn3 daemon 0 arch ffc91200
[ccn3:20608] [[63924,0],1] node[1].name ccn3 daemon 1 arch ffc91200
[ccn3:20608] [[63924,0],1] node[2].name ccn4 daemon INVALID arch  
ffc91200
ccn3
[ccn3:20608] [[63924,0],1] orted_cmd: received waitpid_fired cmd
[ccn3:20608] [[63924,0],1] orted_cmd: received iof_complete cmd
ccn3
[ccn3:20608] [[63924,0],1] orted_cmd: received waitpid_fired cmd
[ccn3:20608] [[63924,0],1] orted_cmd: received iof_complete cmd
[ccn3:20608] [[63924,0],1] orted_cmd: received exit
[ccn3:20608] [[63924,0],1] orted: finalizing
I can also run it locally on the remote machine with the command:
ssh ccn4 mpirun --debug-daemons -np 2 hostname
Many thanks for any ideas.
Kersey
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
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
