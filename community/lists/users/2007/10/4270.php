<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 20:48:54 2007" -->
<!-- isoreceived="20071023004854" -->
<!-- sent="Mon, 22 Oct 2007 20:48:46 -0400" -->
<!-- isosent="20071023004846" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Syntax error in remote rsh execution" -->
<!-- id="200710222048.46417.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200710222041.30178.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 20:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Previous message:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to reply to my own mail. 
<br>
<p>Just browsing through the logs you sent, and I see that 'hostname' should be 
<br>
working fine. However, you are using v1.1.5 which is very old. I would 
<br>
strongly suggest upgrading to v1.2.4. It is a huge improvement over the old 
<br>
v1.1 series (which is not being maintained anymore).
<br>
<p>Tim
<br>
<p>On Monday 22 October 2007 08:41:30 pm Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Jorge,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is interesting. The problem is the universe name:
</span><br>
<span class="quotelev1">&gt; root@(none):default-universe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;(none)&quot; part is supposed to be the hostname where mpirun is executed.
</span><br>
<span class="quotelev1">&gt; Try running:
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and:
</span><br>
<span class="quotelev1">&gt; uname -n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These should both return valid hostnames for your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI pretty much assumes that all nodes have a valid (preferably
</span><br>
<span class="quotelev1">&gt; unique) hostname. If the above commands don't work, you probably need to
</span><br>
<span class="quotelev1">&gt; fix your cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if this does not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday 18 October 2007 09:22:09 pm Jorge Parra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When trying to execute an application that spawns to another node, I
</span><br>
<span class="quotelev2">&gt; &gt; obtain the following message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # ./mpirun --hostfile /root/hostfile -np 2 greetings
</span><br>
<span class="quotelev2">&gt; &gt; Syntax error: &quot;(&quot; unexpected (expecting &quot;)&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;- Could not execute the executable
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/opt/OpenMPI/OpenMPI-1.1.5b/exec/bin/greetings
</span><br>
<span class="quotelev2">&gt; &gt; &quot;: Exec format error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could mean that your PATH or executable name is wrong, or that you
</span><br>
<span class="quotelev2">&gt; &gt; do not
</span><br>
<span class="quotelev2">&gt; &gt; have the necessary permissions.  Please ensure that the executable is
</span><br>
<span class="quotelev2">&gt; &gt; able to be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; found and executed.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;-
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and in the remote node:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # pam_rhosts_auth[183]: user root has a `+' user entry
</span><br>
<span class="quotelev2">&gt; &gt; pam_rhosts_auth[183]: allowed to root_at_192.168.1.102 as root
</span><br>
<span class="quotelev2">&gt; &gt; PAM_unix[183]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev2">&gt; &gt; in.rshd[184]: root_at_192.168.1.102 as root: cmd='( ! [ -e ./.profile ] || .
</span><br>
<span class="quotelev2">&gt; &gt; ./.pro
</span><br>
<span class="quotelev2">&gt; &gt; file; orted --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0
</span><br>
<span class="quotelev2">&gt; &gt; --nodename 1
</span><br>
<span class="quotelev2">&gt; &gt; 92.168.1.103 --universe root@(none):default-universe --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://19
</span><br>
<span class="quotelev2">&gt; &gt; 2.168.1.102:32774&quot; --gprreplica &quot;0.0.0;tcp://192.168.1.102:32774&quot;
</span><br>
<span class="quotelev2">&gt; &gt; --mpi-call-yie
</span><br>
<span class="quotelev2">&gt; &gt; ld 0 )'
</span><br>
<span class="quotelev2">&gt; &gt; PAM_unix[183]: (rsh) session closed for user root
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspect the command that rsh is trying to execute in the remote node
</span><br>
<span class="quotelev2">&gt; &gt; fails. It seems to me that the first parenthesis in cmd='( ! is not well
</span><br>
<span class="quotelev2">&gt; &gt; interpreted, thus causing the syntax error. This might prevent .profile
</span><br>
<span class="quotelev2">&gt; &gt; to run and to correctly set PATH. Therefore, &quot;greetings&quot; is not found.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am attaching to this email the appropiate configuration files of my
</span><br>
<span class="quotelev2">&gt; &gt; system and openmpi on it. This is a system in an isolated network, so I
</span><br>
<span class="quotelev2">&gt; &gt; don't care too much for security. Therefore I am using rsh on it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would really appreciate any suggestions to correct this problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jorge
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
<li><strong>Next message:</strong> <a href="4271.php">Tim Prins: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Previous message:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4307.php">Jorge Parra: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
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
