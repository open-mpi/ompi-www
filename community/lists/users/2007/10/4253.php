<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 21:22:17 2007" -->
<!-- isoreceived="20071019012217" -->
<!-- sent="Thu, 18 Oct 2007 19:22:09 -0600 (MDT)" -->
<!-- isosent="20071019012209" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="[OMPI users] Syntax error in remote rsh execution" -->
<!-- id="Pine.LNX.4.64.0710181846070.21436_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Jorge Parra (<em>jeparra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 21:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4254.php">idesbald van den bosch: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Previous message:</strong> <a href="4252.php">Murat Knecht: "[OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When trying to execute an application that spawns to another node, I 
<br>
obtain the following message:
<br>
<p># ./mpirun --hostfile /root/hostfile -np 2 greetings
<br>
Syntax error: &quot;(&quot; unexpected (expecting &quot;)&quot;)
<br>
--------------------------------------------------------------------------
<br>
Could not execute the executable 
<br>
&quot;/opt/OpenMPI/OpenMPI-1.1.5b/exec/bin/greetings
<br>
&quot;: Exec format error
<br>
<p>This could mean that your PATH or executable name is wrong, or that you do 
<br>
not
<br>
have the necessary permissions.  Please ensure that the executable is able 
<br>
to be
<br>
<p>found and executed.
<br>
--------------------------------------------------------------------------
<br>
<p>and in the remote node:
<br>
<p># pam_rhosts_auth[183]: user root has a `+' user entry
<br>
pam_rhosts_auth[183]: allowed to root_at_192.168.1.102 as root
<br>
PAM_unix[183]: (rsh) session opened for user root by (uid=0)
<br>
in.rshd[184]: root_at_192.168.1.102 as root: cmd='( ! [ -e ./.profile ] || . 
<br>
./.pro
<br>
file; orted --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 
<br>
--nodename 1
<br>
92.168.1.103 --universe root@(none):default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://19
<br>
2.168.1.102:32774&quot; --gprreplica &quot;0.0.0;tcp://192.168.1.102:32774&quot; 
<br>
--mpi-call-yie
<br>
ld 0 )'
<br>
PAM_unix[183]: (rsh) session closed for user root
<br>
<p>I suspect the command that rsh is trying to execute in the remote node 
<br>
fails. It seems to me that the first parenthesis in cmd='( ! is not well 
<br>
interpreted, thus causing the syntax error. This might prevent .profile to 
<br>
run and to correctly set PATH. Therefore, &quot;greetings&quot; is not found.
<br>
<p>I am attaching to this email the appropiate configuration files of my 
<br>
system and openmpi on it. This is a system in an isolated network, so I 
<br>
don't care too much for security. Therefore I am using rsh on it.
<br>
<p>I would really appreciate any suggestions to correct this problem.
<br>
<p>Thank you,
<br>
<p>Jorge
<br>

<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4253/logs.tar.gz">logs.tar.gz</a>
</ul>
<!-- attachment="logs.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4254.php">idesbald van den bosch: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Previous message:</strong> <a href="4252.php">Murat Knecht: "[OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
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
