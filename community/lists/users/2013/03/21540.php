<?
$subject_val = "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 14 05:13:38 2013" -->
<!-- isoreceived="20130314091338" -->
<!-- sent="Thu, 14 Mar 2013 10:13:25 +0100" -->
<!-- isosent="20130314091325" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8" -->
<!-- id="79DF21CC-5BCC-48A8-94A3-EA503B5F41D0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8CFEEA3F7CB03B4-F98-1923F_at_webmail-m260.sysops.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-14 05:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21541.php">yumenlj: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21539.php">yumenlj: "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21539.php">yumenlj: "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21541.php">yumenlj: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21541.php">yumenlj: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 14.03.2013 um 09:20 schrieb yumenlj:
<br>
<p><span class="quotelev1">&gt; Hi, all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a problem about mpirun and SSH when using Open MPI 1.7rc8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a 4-node cluster. This is the hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_testnode11 openmpi-1.6.4]$ cat ~/work/hostfile
</span><br>
<span class="quotelev1">&gt; testnode11
</span><br>
<span class="quotelev1">&gt; testnode12
</span><br>
<span class="quotelev1">&gt; testnode13
</span><br>
<span class="quotelev1">&gt; testnode14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had configured SSH, copying &quot;.ssh/id_rsa.pub&quot; on testnode11 to &quot;.ssh/authorized_keys&quot; on all the 4 nodes.
</span><br>
<span class="quotelev1">&gt; So that I can login all the 4 nodes from testnode11 without a password.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following test worked well with Open MPI 1.6.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_testnode11 openmpi-1.6.4]$ mpirun -hostfile ~/work/hostfile -np 8 ~/src/openmpi-1.6.4/examples/ring_c
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (8 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 4 exiting
</span><br>
<span class="quotelev1">&gt; Process 2 exiting
</span><br>
<span class="quotelev1">&gt; Process 3 exiting
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt; Process 6 exiting
</span><br>
<span class="quotelev1">&gt; Process 7 exiting
</span><br>
<span class="quotelev1">&gt; Process 5 exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I switched to Open MPI 1.7rc8, the same test did not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_testnode11 openmpi-1.7rc8]$ mpirun -hostfile ~/work/hostfile -np 8 ~/src/openmpi-1.7rc8/examples/ring_c
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,gssapi-keyex,gssapi-with-mic,password).
</span><br>
<span class="quotelev1">&gt; [testnode12:06990] [[50636,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 362
</span><br>
<span class="quotelev1">&gt; [testnode12:06990] [[50636,0],1] attempted to send to [[50636,0],3]: tag 15
</span><br>
<span class="quotelev1">&gt; [testnode12:06990] [[50636,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/grpcomm_base_xcast.c at line 166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had checked the logs of SSH, and found the direct reason. A SSH request from testnode12 to testnode14 was denied.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_testnode11 openmpi-1.7rc8]$ ssh root_at_testnode14 tail -f /var/log/secure
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Mar 14 15:39:01 testnode14 sshd[31610]: Connection closed by testnode12
</span><br>
<span class="quotelev1">&gt; Mar 14 15:39:04 testnode14 sshd[31611]: Failed password for mpiuser from testnode12 port 55964 ssh2
</span><br>
<span class="quotelev1">&gt; Mar 14 15:39:04 testnode14 sshd[31611]: Failed password for mpiuser from testnode12 port 55964 ssh2
</span><br>
<span class="quotelev1">&gt; Mar 14 15:39:04 testnode14 sshd[31612]: Connection closed by testnode12
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am puzzled. I launched mpirun on testnode11, but I do not know why testnode12 would send a SSH request to testnode14.
</span><br>
<span class="quotelev1">&gt; One solution is to copy &quot;.ssh/id_rsa.pub&quot; on all the nodes to &quot;.ssh/authorized_keys&quot;
</span><br>
<p>If all nodes have their own private key without a passphrase set this would work. OTOH copying the private key of testnode11 to all other nodes should also do.
<br>
<p><p><span class="quotelev1">&gt; on all the nodes, but that is not what I want.
</span><br>
<span class="quotelev1">&gt; Is there any way to control that all the SSH requests are sent from the node where mpirun executed, to all the nodes?
</span><br>
<span class="quotelev1">&gt; I had checked all the orte parameters, and no answer found. Please give some suggestions.
</span><br>
<p>Depending on the amount of nodes and in case you don't like passphrase-less ssh-keys at all like I do: setting up hostbased authentication could help:
<br>
<p><a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks!
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
<li><strong>Next message:</strong> <a href="21541.php">yumenlj: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21539.php">yumenlj: "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21539.php">yumenlj: "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21541.php">yumenlj: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21541.php">yumenlj: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
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
