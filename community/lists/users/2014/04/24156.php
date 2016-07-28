<?
$subject_val = "[OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 14:18:24 2014" -->
<!-- isoreceived="20140411181824" -->
<!-- sent="Fri, 11 Apr 2014 11:17:56 -0700" -->
<!-- isosent="20140411181756" -->
<!-- name="Allan Wu" -->
<!-- email="allwu_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8" -->
<!-- id="CAHT6FhNk5t0Ot++UUxREy93-4pmkUU9J44Db=tOYfJ14XdajZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8<br>
<strong>From:</strong> Allan Wu (<em>allwu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 14:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Reply:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Maybe reply:</strong> <a href="24167.php">Allan Wu: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I am running a simple helloworld program on several nodes using OpenMPI
<br>
1.8. Running commands on single node or small number of nodes are
<br>
successful, but when I tried to run the same binary on four different
<br>
nodes, problems occurred.
<br>
<p>I am using 'mpirun' command line like the following:
<br>
# mpirun --prefix /mnt/embedded_root/openmpi -np 4 --map-by node -hostfile
<br>
hostfile ./helloworld
<br>
And my hostfile looks something like these:
<br>
10.0.0.16
<br>
10.0.0.17
<br>
10.0.0.18
<br>
10.0.0.19
<br>
<p>When executing this command, it will result in an error message &quot;sh: syntax
<br>
error: unexpected word&quot;, and the program will deadlock. When I added
<br>
&quot;--debug-devel&quot; the output is in the attachment &quot;err_msg_0.txt&quot;. In the
<br>
log, &quot;fpga0&quot; is the hostname of &quot;10.0.0.16&quot; and &quot;fpga1&quot; is for &quot;10.0.0.17&quot;
<br>
and so on.
<br>
<p>However, the weird part is that after I remove one line in the hostfile,
<br>
the problem goes away. It does not matter which host I remove, as long as
<br>
there is less than four hosts, the program can execute without any problem.
<br>
<p>I also tried using hostname in the hostfile, as:
<br>
fpga0
<br>
fpga1
<br>
fpga2
<br>
fpga3
<br>
And the same problem occurs, and the error message becomes &quot;Host key
<br>
verification failed.&quot;. I have setup public/private key pairs on all nodes,
<br>
and each node can ssh to any node without problems. I also attached the
<br>
message of --debug-devel as &quot;err_msg_1.txt&quot;.
<br>
<p>I'm running MPI programs on embedded ARM processors. I have previously
<br>
posted questions on cross-compilation on the develop mailing list, which
<br>
contains the setup I used. If you need the information please refer to
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>, and the
<br>
output of 'ompi-info --all' is also attached with this email.
<br>
<p>Please let me know if I need to provide more information. Thanks in advance!
<br>
<p>Regards,
<br>
<pre>
--
Di Wu (Allan)
PhD student, VAST Laboratory &lt;<a href="http://vast.cs.ucla.edu/">http://vast.cs.ucla.edu/</a>&gt;,
Department of Computer Science, UC Los Angeles
Email: allwu_at_[hidden]



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24156/err_msg_0.txt">err_msg_0.txt</a>
</ul>
<!-- attachment="err_msg_0.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24156/err_msg_1.txt">err_msg_1.txt</a>
</ul>
<!-- attachment="err_msg_1.txt" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24156/log.tar.gz">log.tar.gz</a>
</ul>
<!-- attachment="log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Reply:</strong> <a href="24157.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Maybe reply:</strong> <a href="24167.php">Allan Wu: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
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
