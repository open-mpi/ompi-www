<?
$subject_val = "Re: [OMPI users] Job hangs when daemon does not report back from remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 11:56:15 2009" -->
<!-- isoreceived="20090208165615" -->
<!-- sent="Sun, 8 Feb 2009 09:56:07 -0700" -->
<!-- isosent="20090208165607" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job hangs when daemon does not report back from remote machine" -->
<!-- id="0882DE55-D0E7-4376-BB9C-DE205FDB943A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA8839E9-F992-4E99-9E35-D967D71891DC_at_jsd.claremont.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job hangs when daemon does not report back from remote machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-08 11:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7991.php">Kersey Black: "[OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>In reply to:</strong> <a href="7991.php">Kersey Black: "[OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds to me like TCP communication isn't getting through for some  
<br>
reason. Try the following:
<br>
<p>mpirun --mca plm_base_verbose 5 --hostfile myh3 -pernode hostname
<br>
<p>You should see output from the receipt of a daemon callback for each  
<br>
daemon, the the sending of the launch command. My guess is that you  
<br>
won't see all the daemons callback, which is why you hang.
<br>
<p>This should tell you which node isn't getting a message back to  
<br>
wherever mpirun is executing. You might then check to ensure no  
<br>
firewalls are in the way to that node, there is a TCP path back from  
<br>
it, etc.
<br>
<p>I can help with additional diagnostics once we get that far.
<br>
Ralph
<br>
<p>On Feb 7, 2009, at 2:40 PM, Kersey Black wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Disclaimer up front -- a newbie to openmpi working to get Gromacs  
</span><br>
<span class="quotelev1">&gt; and other modeling code running.
</span><br>
<span class="quotelev1">&gt; I have it running fine on the local machine, but I am unable to get  
</span><br>
<span class="quotelev1">&gt; openmpi to work when trying to include a remote machine.
</span><br>
<span class="quotelev1">&gt; Any help or pointers would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System:   opensuse, 10.3.
</span><br>
<span class="quotelev1">&gt; Openmpi:   first I installed 1.2.2 as rpm from yast, and, when that  
</span><br>
<span class="quotelev1">&gt; did not seem to work, I switched to the current release of 1.3,  
</span><br>
<span class="quotelev1">&gt; compiled with default configuration options, except I did use the -- 
</span><br>
<span class="quotelev1">&gt; prefix to set the installation directory
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf:   (with 1.3) I have only added
</span><br>
<span class="quotelev1">&gt;   btl = self,tcp
</span><br>
<span class="quotelev1">&gt;   mpi_show_mca_params = enviro
</span><br>
<span class="quotelev1">&gt; ssh:  host-based authentication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With both installs, I can run on multiple slots on the local  
</span><br>
<span class="quotelev1">&gt; machine, but when I try to include a remote machine, it hangs.
</span><br>
<span class="quotelev1">&gt; Using this hostfile:
</span><br>
<span class="quotelev1">&gt;  ccn3 slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt;  ccn4 slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt; Typical output (this is from 1.3) when I try to run two slots  
</span><br>
<span class="quotelev1">&gt; locally (ccn3) and 2 on the remote machine (ccn4):
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; black_at_ccn3:~/Documents/mp&gt; mpirun --debug-daemons --hostfile myh3 - 
</span><br>
<span class="quotelev1">&gt; np 4 hostname
</span><br>
<span class="quotelev1">&gt; Daemon was launched on ccn3 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[63883,0],1] checking in as pid 20554 on host ccn3
</span><br>
<span class="quotelev1">&gt; Daemon [[63883,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [ccn3:20554] [[63883,0],1] orted: up and running - waiting for  
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; Daemon was launched on ccn4 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[63883,0],2] checking in as pid 7485 on host ccn4
</span><br>
<span class="quotelev1">&gt; Daemon [[63883,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; And here it hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I kill the job with ^C, I get:
</span><br>
<span class="quotelev1">&gt; 	ccn3
</span><br>
<span class="quotelev1">&gt; 	ccn4 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything I read in the FAQ (in particular in part 2 of the  
</span><br>
<span class="quotelev1">&gt; &quot;Running MPI&quot; portion) suggests that this has to do with SSH  
</span><br>
<span class="quotelev1">&gt; problems, or with PATH problems.
</span><br>
<span class="quotelev1">&gt; SSH is configured and working for host-based authentication.  It  
</span><br>
<span class="quotelev1">&gt; seems to be fine.
</span><br>
<span class="quotelev1">&gt; I set the LD_LIBRARY_PATH to include openmpi/lib and include the  
</span><br>
<span class="quotelev1">&gt; openmpi/bin directory in PATH as part of a script that runs for all  
</span><br>
<span class="quotelev1">&gt; users (called by /bin/bashrc.local), and when things did not work, I  
</span><br>
<span class="quotelev1">&gt; included the same code in ~/.bashrc and ~/.profile.  All of this  
</span><br>
<span class="quotelev1">&gt; results in it being set 3 times (from `env`) in a interactive shell,  
</span><br>
<span class="quotelev1">&gt; but it has not solved the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For comparison, when I run it locally on just two slots on the local  
</span><br>
<span class="quotelev1">&gt; machine, I get:
</span><br>
<span class="quotelev1">&gt; black_at_ccn3:~/Documents/mp&gt; mpirun --debug-daemons --hostfile myh3 - 
</span><br>
<span class="quotelev1">&gt; np 2 hostname
</span><br>
<span class="quotelev1">&gt; Daemon was launched on ccn3 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[63924,0],1] checking in as pid 20608 on host ccn3
</span><br>
<span class="quotelev1">&gt; Daemon [[63924,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [ccn3:20603] [[63924,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [ccn3:20603] [[63924,0],0] node[0].name ccn3 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [ccn3:20603] [[63924,0],0] node[1].name ccn3 daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [ccn3:20603] [[63924,0],0] node[2].name ccn4 daemon INVALID arch  
</span><br>
<span class="quotelev1">&gt; ffc91200
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted: up and running - waiting for  
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] node[0].name ccn3 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] node[1].name ccn3 daemon 1 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] node[2].name ccn4 daemon INVALID arch  
</span><br>
<span class="quotelev1">&gt; ffc91200
</span><br>
<span class="quotelev1">&gt; ccn3
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; ccn3
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [ccn3:20608] [[63924,0],1] orted: finalizing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can also run it locally on the remote machine with the command:
</span><br>
<span class="quotelev1">&gt; ssh ccn4 mpirun --debug-daemons -np 2 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for any ideas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kersey
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
<li><strong>Next message:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Previous message:</strong> <a href="7991.php">Kersey Black: "[OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>In reply to:</strong> <a href="7991.php">Kersey Black: "[OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>Reply:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
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
