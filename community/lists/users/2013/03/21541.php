<?
$subject_val = "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 14 07:47:50 2013" -->
<!-- isoreceived="20130314114750" -->
<!-- sent="Thu, 14 Mar 2013 07:47:40 -0400 (EDT)" -->
<!-- isosent="20130314114740" -->
<!-- name="yumenlj" -->
<!-- email="yumenlj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8" -->
<!-- id="8CFEEC0DDF0D9EA-F98-1A07B_at_webmail-m260.sysops.aol.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="79DF21CC-5BCC-48A8-94A3-EA503B5F41D0_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> yumenlj (<em>yumenlj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-14 07:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Previous message:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see. Thanks!
<br>
<p><p>After carefully reading the following FAQ item
<br>
<a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a> ,
<br>
I realized that mpirun of Open MPI does not work in a simple &quot;master to slaves&quot; way,
<br>
while &quot;slaves to slaves&quot; is also possible. 
<br>
Therefore, a same private key with a passphrase on all the nodes, 
<br>
or hostbased authentication may be a more convenient way.
<br>
<p><p><pre>
-- 
yumenlj
-----Original Message-----
From: Reuti &lt;reuti_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Thu, Mar 14, 2013 5:14 pm
Subject: Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8
Hi,
Am 14.03.2013 um 09:20 schrieb yumenlj:
&gt; Hi, all
&gt; 
&gt; I encountered a problem about mpirun and SSH when using Open MPI 1.7rc8.
&gt; 
&gt; I have a 4-node cluster. This is the hostfile:
&gt; 
&gt; [mpiuser_at_testnode11 openmpi-1.6.4]$ cat ~/work/hostfile
&gt; testnode11
&gt; testnode12
&gt; testnode13
&gt; testnode14
&gt; 
&gt; I had configured SSH, copying &quot;.ssh/id_rsa.pub&quot; on testnode11 to 
&quot;.ssh/authorized_keys&quot; on all the 4 nodes.
&gt; So that I can login all the 4 nodes from testnode11 without a password.
&gt; 
&gt; The following test worked well with Open MPI 1.6.4.
&gt; 
&gt; [mpiuser_at_testnode11 openmpi-1.6.4]$ mpirun -hostfile ~/work/hostfile -np 8 
~/src/openmpi-1.6.4/examples/ring_c
&gt; Process 0 sending 10 to 1, tag 201 (8 processes in ring)
&gt; Process 0 sent to 1
&gt; Process 0 decremented value: 9
&gt; Process 0 decremented value: 8
&gt; Process 0 decremented value: 7
&gt; Process 0 decremented value: 6
&gt; Process 0 decremented value: 5
&gt; Process 0 decremented value: 4
&gt; Process 0 decremented value: 3
&gt; Process 0 decremented value: 2
&gt; Process 0 decremented value: 1
&gt; Process 0 decremented value: 0
&gt; Process 0 exiting
&gt; Process 4 exiting
&gt; Process 2 exiting
&gt; Process 3 exiting
&gt; Process 1 exiting
&gt; Process 6 exiting
&gt; Process 7 exiting
&gt; Process 5 exiting
&gt; 
&gt; However, when I switched to Open MPI 1.7rc8, the same test did not work.
&gt; 
&gt; [mpiuser_at_testnode11 openmpi-1.7rc8]$ mpirun -hostfile ~/work/hostfile -np 8 
~/src/openmpi-1.7rc8/examples/ring_c
&gt; Permission denied, please try again.
&gt; Permission denied, please try again.
&gt; Permission denied (publickey,gssapi-keyex,gssapi-with-mic,password).
&gt; [testnode12:06990] [[50636,0],1] ORTE_ERROR_LOG: A message is attempting to be 
sent to a process whose contact information is unknown in file rml_oob_send.c at 
line 362
&gt; [testnode12:06990] [[50636,0],1] attempted to send to [[50636,0],3]: tag 15
&gt; [testnode12:06990] [[50636,0],1] ORTE_ERROR_LOG: A message is attempting to be 
sent to a process whose contact information is unknown in file 
base/grpcomm_base_xcast.c at line 166
&gt; 
&gt; I had checked the logs of SSH, and found the direct reason. A SSH request from 
testnode12 to testnode14 was denied.
&gt; 
&gt; [mpiuser_at_testnode11 openmpi-1.7rc8]$ ssh root_at_testnode14 tail -f 
/var/log/secure
&gt; ...
&gt; Mar 14 15:39:01 testnode14 sshd[31610]: Connection closed by testnode12
&gt; Mar 14 15:39:04 testnode14 sshd[31611]: Failed password for mpiuser from 
testnode12 port 55964 ssh2
&gt; Mar 14 15:39:04 testnode14 sshd[31611]: Failed password for mpiuser from 
testnode12 port 55964 ssh2
&gt; Mar 14 15:39:04 testnode14 sshd[31612]: Connection closed by testnode12
&gt; ...
&gt; 
&gt; So I am puzzled. I launched mpirun on testnode11, but I do not know why 
testnode12 would send a SSH request to testnode14.
&gt; One solution is to copy &quot;.ssh/id_rsa.pub&quot; on all the nodes to 
&quot;.ssh/authorized_keys&quot;
If all nodes have their own private key without a passphrase set this would 
work. OTOH copying the private key of testnode11 to all other nodes should also 
do.
&gt; on all the nodes, but that is not what I want.
&gt; Is there any way to control that all the SSH requests are sent from the node 
where mpirun executed, to all the nodes?
&gt; I had checked all the orte parameters, and no answer found. Please give some 
suggestions.
Depending on the amount of nodes and in case you don't like passphrase-less 
ssh-keys at all like I do: setting up hostbased authentication could help:
<a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
-- Reuti
&gt; Thanks!
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21542.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>Previous message:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21540.php">Reuti: "Re: [OMPI users] a problem about mpirun and SSH when using Open MPI 1.7rc8"</a>
<!-- nextthread="start" -->
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
