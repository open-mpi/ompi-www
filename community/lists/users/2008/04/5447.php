<?
$subject_val = "Re: [OMPI users] How to restart a job twice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 09:16:15 2008" -->
<!-- isoreceived="20080422131615" -->
<!-- sent="Tue, 22 Apr 2008 09:16:07 -0400" -->
<!-- isosent="20080422131607" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to restart a job twice" -->
<!-- id="3C8335AF-15FA-4FA3-BFA2-C657A9B3EABF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BA4F880-9FB8-4286-8084-70175D04086C_at_caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to restart a job twice<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 09:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5448.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5446.php">Dirk Eddelbuettel: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>In reply to:</strong> <a href="5418.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tamer,
<br>
<p>Just wanted to update you on my progress. I am able to reproduce  
<br>
something similar to this problem. I am currently working on a  
<br>
solution to it. I'll let you know when it is available, probably in  
<br>
the next day or two.
<br>
<p>Thank you for the bug report.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Apr 18, 2008, at 1:11 PM, Tamer wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on linux fedora core 7 kernel: 2.6.23.15-80.fc7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machine is dual-core with shared memory so it's not even a  
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded r18208 and built it with the following options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi-with-checkpointing-r18208 -- 
</span><br>
<span class="quotelev1">&gt; with-ft=cr --with-blcr=/usr/local/blcr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I run mpirun I pass the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr ./ares-openmpi -c -f madonna-13760
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to checkpoint and restart successfully and was able to  
</span><br>
<span class="quotelev1">&gt; checkpoint the restarted job  (mpirun showed up with ps-efa |grep  
</span><br>
<span class="quotelev1">&gt; mpirun under r18208) but was unable to restart again; here's the  
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi-restart ompi_global_snapshot_23865.ckpt
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1]-[[45670,0],0]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1] routed:unity:  
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0]-[[45670,0],0]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0] routed:unity:  
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1]-[[45670,0],0]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1] routed:unity:  
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0]-[[45670,0],0]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0] routed:unity:  
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 24012 on
</span><br>
<span class="quotelev1">&gt; node dhcp-119-202.caltech.edu exiting without calling &quot;finalize&quot;.  
</span><br>
<span class="quotelev1">&gt; This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tamer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 18, 2008, at 7:07 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem has come up in the past and may have been fixed since
</span><br>
<span class="quotelev2">&gt;&gt; r14519. Can you update to r18208 and see if the error still occurs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A few other questions that will help me try to reproduce the problem.
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell me more about the configuration of the system you are
</span><br>
<span class="quotelev2">&gt;&gt; running on (number of machines, if there is a resource manager)? How
</span><br>
<span class="quotelev2">&gt;&gt; did you configure Open MPI and what command line options are you
</span><br>
<span class="quotelev2">&gt;&gt; passing to 'mpirun'?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 18, 2008, at 9:36 AM, Tamer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Josh, I tried what you suggested with my existing r14519,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was able to checkpoint the restarted job but was never able to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. I looked up the PID for 'orterun' and checkpointed the restarted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job but when I try to restart from that point I get the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-restart ompi_global_snapshot_7704.ckpt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun has exited due to process rank 1 with PID 7737 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node dhcp-119-202.caltech.edu exiting without calling &quot;finalize&quot;.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by orterun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I have to run the copenmpi clean command after the first  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and before restarting the checkpointed job so I can checkpoint it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again or is there something I am missing in this version completely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I would have to go to r18208? Thank you in advance for your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tamer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 18, 2008, at 6:03 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When you use 'ompi-restart' to restart a job it fork/execs the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completely new job using the restarted processes for the ranks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However instead of calling the 'mpirun' process ompi-restart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls 'orterun'. These two programs are exactly the same (mpirun  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbolic link to orterun). So if you look for the PID of 'orterun'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that can be used to checkpoint the process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However it is confusing that Open MPI makes this switch. So I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; committed in r18208 a fix for this that uses the 'mpirun' binary  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of the 'orterun' binary name. This fits with the typical  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case of checkpoint/restart in Open MPI in which users expect to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the 'mpirun' process on restart instead of the lesser known  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'orterun'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry for the confusion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 18, 2008, at 1:14 AM, Tamer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all, I installed the developer's version r14519 and was  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get it running. I successfully checkpointed a parallel job and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; restarted it. My question is how can I checkpoint the restarted  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; job?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem is once the original job is terminated and restarted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; later
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on, the mpirun does not exist anymore (ps -efa|grep mpirun) and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hence
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I do not know which PID I should use when I run the ompi- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the restarted job. Any help would be greatly appreciated.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5448.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5446.php">Dirk Eddelbuettel: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>In reply to:</strong> <a href="5418.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5456.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
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
