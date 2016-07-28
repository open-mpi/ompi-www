<?
$subject_val = "[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 14 04:20:53 2013" -->
<!-- isoreceived="20130314082053" -->
<!-- sent="Thu, 14 Mar 2013 04:20:48 -0400 (EDT)" -->
<!-- isosent="20130314082048" -->
<!-- name="yumenlj" -->
<!-- email="yumenlj_at_[hidden]" -->
<!-- subject="[OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8" -->
<!-- id="8CFEEA3F7CB03B4-F98-1923F_at_webmail-m260.sysops.aol.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8<br>
<strong>From:</strong> yumenlj (<em>yumenlj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-14 04:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all
<br>
<p><p>I encountered a problem about mpirun and SSH when using Open MPI 1.7rc8.
<br>
<p><p>I have a 4-node cluster. This is the hostfile:
<br>
<p><p>[mpiuser_at_testnode11 openmpi-1.6.4]$ cat ~/work/hostfile
<br>
testnode11
<br>
testnode12
<br>
testnode13
<br>
testnode14
<br>
<p><p>I had configured SSH, copying &quot;.ssh/id_rsa.pub&quot; on testnode11 to &quot;.ssh/authorized_keys&quot; on all the 4 nodes.
<br>
So that I can login all the 4 nodes from testnode11 without a password.
<br>
<p><p>The following test worked well with Open MPI 1.6.4.
<br>
<p><p>[mpiuser_at_testnode11 openmpi-1.6.4]$ mpirun -hostfile ~/work/hostfile -np 8 ~/src/openmpi-1.6.4/examples/ring_c
<br>
Process 0 sending 10 to 1, tag 201 (8 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 4 exiting
<br>
Process 2 exiting
<br>
Process 3 exiting
<br>
Process 1 exiting
<br>
Process 6 exiting
<br>
Process 7 exiting
<br>
Process 5 exiting
<br>
<p><p>However, when I switched to Open MPI 1.7rc8, the same test did not work.
<br>
<p><p>[mpiuser_at_testnode11 openmpi-1.7rc8]$ mpirun -hostfile ~/work/hostfile -np 8 ~/src/openmpi-1.7rc8/examples/ring_c
<br>
Permission denied, please try again.
<br>
Permission denied, please try again.
<br>
Permission denied (publickey,gssapi-keyex,gssapi-with-mic,password).
<br>
[testnode12:06990] [[50636,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 362
<br>
[testnode12:06990] [[50636,0],1] attempted to send to [[50636,0],3]: tag 15
<br>
[testnode12:06990] [[50636,0],1] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/grpcomm_base_xcast.c at line 166
<br>
<p><p>I had checked the logs of SSH, and found the direct reason. A SSH request from testnode12 to testnode14 was denied.
<br>
<p><p>[mpiuser_at_testnode11 openmpi-1.7rc8]$ ssh root_at_testnode14 tail -f /var/log/secure
<br>
...
<br>
Mar 14 15:39:01 testnode14 sshd[31610]: Connection closed by testnode12
<br>
Mar 14 15:39:04 testnode14 sshd[31611]: Failed password for mpiuser from testnode12 port 55964 ssh2
<br>
Mar 14 15:39:04 testnode14 sshd[31611]: Failed password for mpiuser from testnode12 port 55964 ssh2
<br>
Mar 14 15:39:04 testnode14 sshd[31612]: Connection closed by testnode12
<br>
...
<br>
<p><p>So I am puzzled. I launched mpirun on testnode11, but I do not know why testnode12 would send a SSH request to testnode14.
<br>
One solution is to copy &quot;.ssh/id_rsa.pub&quot; on all the nodes to &quot;.ssh/authorized_keys&quot; on all the nodes, but that is not what I want.
<br>
Is there any way to control that all the SSH requests are sent from the node where mpirun executed, to all the nodes?
<br>
I had checked all the orte parameters, and no answer found. Please give some suggestions.
<br>
<p><p>Thanks!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
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
