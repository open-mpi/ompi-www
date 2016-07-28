<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 13:27:48 2007" -->
<!-- isoreceived="20071029172748" -->
<!-- sent="Mon, 29 Oct 2007 11:27:43 -0600 (MDT)" -->
<!-- isosent="20071029172743" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="[OMPI users] Error initializing openMPI" -->
<!-- id="Pine.LNX.4.64.0710291005450.4177_at_rhsvr03.ece.unm.edu" -->
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
<strong>Date:</strong> 2007-10-29 13:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4344.php">Tim Reis: "[OMPI users] MUMPS Linking Problems"</a>
<li><strong>Previous message:</strong> <a href="4342.php">jody: "Re: [OMPI users] Differences between hostfile in LAM-MPI and OPEN MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When running openMPI my system freezes when initializing MPI (function 
<br>
MPI_init). This happens only when I try to run the process in multiples 
<br>
nodes in my cluster. Running multiple instances of the testing code 
<br>
locally (i.e ./mpirun -np 2 greetings) is succesful.
<br>
<p>- rsh runs well, and is configured to full access. (i.e. rsh 
<br>
&quot;192.168.1.103 date&quot; is succesful, so they are &quot;rsh AFRLMPPBM2 date&quot; or 
<br>
&quot;rsh AFRLMPPBM2.MPPdomain.com&quot;). Security is not an issue in this system.
<br>
<p>- uname -n and hostname return a valid hostname
<br>
<p>- The testing code (attached to this email) is run (and fails) as: 
<br>
./mpirun --hostfile /root/hostfile -np 2 greetings . The hostfile has the 
<br>
names of the localnode (first entry:AFRLMPPBM1) and the remote node 
<br>
(second entry: AFRLMPPBM2). This file is also attached to this email.
<br>
<p>- The environment variables seem to be properly set (see env.log attached 
<br>
file). Local mpi programs (i.e. ./mpirun -np 2 greetings) run well.
<br>
<p>-.profile has the path information for both the executables and the 
<br>
libraries
<br>
<p>- orted runs in the remote node, however it does not print anything in 
<br>
console. The only output in the remote node is:
<br>
<p>pam_rhosts_auth[235]: user root has a `+' user entry
<br>
pam_rhosts_auth[235]: allowed to root_at_[hidden] as root
<br>
PAM_unix[235]: (rsh) session opened for user root by (uid=0)
<br>
in.rshd[236]: root_at_[hidden] as root: cmd='( ! [ -e 
<br>
./.profile ]
<br>
|| . ./.profile; orted --bootproxy 1 --name 0.0.1 --num_procs 3 
<br>
--vpid_start 0 -
<br>
-nodename AFRLMPPBM2.MPPdomain.com --universe 
<br>
root_at_AFRLMPPBM1:default-universe-3
<br>
04 --nsreplica &quot;0.0.0;tcp://192.168.1.102:32824&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.1
<br>
68.1.102:32824&quot; --mpi-call-yield 0 )'
<br>
PAM_unix[235]: (rsh) session closed for user root
<br>
<p>Then the remote process returns command prompt. However orted is in the 
<br>
background. The local process is frozen, and just prints: &quot;Calling init&quot;, 
<br>
which is just before MPI_Init (see greetings.c).
<br>
<p>I believe the COMM WORLD cannot be correctly initialized. However I can't 
<br>
see which part of my configuration is wrong.
<br>
<p>Any help is greatly appreciated.
<br>
<p>Thank you,
<br>
<p>Jorge
<br>
<p>
<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4343/logs.tar.gz">logs.tar.gz</a>
</ul>
<!-- attachment="logs.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4344.php">Tim Reis: "[OMPI users] MUMPS Linking Problems"</a>
<li><strong>Previous message:</strong> <a href="4342.php">jody: "Re: [OMPI users] Differences between hostfile in LAM-MPI and OPEN MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
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
