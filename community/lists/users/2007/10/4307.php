<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:05:28 2007" -->
<!-- isoreceived="20071025000528" -->
<!-- sent="Wed, 24 Oct 2007 18:05:23 -0600 (MDT)" -->
<!-- isosent="20071025000523" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Syntax error in remote rsh execution" -->
<!-- id="Pine.LNX.4.64.0710231839260.24001_at_rhsvr03.ece.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710222048.46417.tprins_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-24 20:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>Previous message:</strong> <a href="4306.php">Jeff Squyres: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>In reply to:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>Thank you for your reply.
<br>
<p>You are right, my openMPI version is rather old. However I am stuck with 
<br>
it while I can compile v1.2.4. I have had some problems with it (I already 
<br>
opened a case on Oct 15th).
<br>
<p>You were also right about my hostname. uname -n reports (none) and the 
<br>
&quot;hostname&quot; command did not exist in the nodes of my cluster. I already 
<br>
added it to the nodes and modified the /etc/hosts file. The error went 
<br>
away and now I can see that orted runs in the remote node. It is strange 
<br>
to me that orted runs with --num_proc 3 when mpirun was executed with -np 
<br>
2. Does this sound correct to you? I might open a new case for it 
<br>
though...
<br>
<p><p>Thank you for your help,
<br>
<p>Jorge
<br>
<p>On Mon, 22 Oct 2007, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Sorry to reply to my own mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just browsing through the logs you sent, and I see that 'hostname' should be
</span><br>
<span class="quotelev1">&gt; working fine. However, you are using v1.1.5 which is very old. I would
</span><br>
<span class="quotelev1">&gt; strongly suggest upgrading to v1.2.4. It is a huge improvement over the old
</span><br>
<span class="quotelev1">&gt; v1.1 series (which is not being maintained anymore).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 22 October 2007 08:41:30 pm Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jorge,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is interesting. The problem is the universe name:
</span><br>
<span class="quotelev2">&gt;&gt; root@(none):default-universe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;(none)&quot; part is supposed to be the hostname where mpirun is executed.
</span><br>
<span class="quotelev2">&gt;&gt; Try running:
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and:
</span><br>
<span class="quotelev2">&gt;&gt; uname -n
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These should both return valid hostnames for your machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI pretty much assumes that all nodes have a valid (preferably
</span><br>
<span class="quotelev2">&gt;&gt; unique) hostname. If the above commands don't work, you probably need to
</span><br>
<span class="quotelev2">&gt;&gt; fix your cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if this does not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday 18 October 2007 09:22:09 pm Jorge Parra wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When trying to execute an application that spawns to another node, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obtain the following message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ./mpirun --hostfile /root/hostfile -np 2 greetings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Syntax error: &quot;(&quot; unexpected (expecting &quot;)&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Could not execute the executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/opt/OpenMPI/OpenMPI-1.1.5b/exec/bin/greetings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;: Exec format error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This could mean that your PATH or executable name is wrong, or that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the necessary permissions.  Please ensure that the executable is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found and executed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and in the remote node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # pam_rhosts_auth[183]: user root has a `+' user entry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pam_rhosts_auth[183]: allowed to root_at_192.168.1.102 as root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PAM_unix[183]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in.rshd[184]: root_at_192.168.1.102 as root: cmd='( ! [ -e ./.profile ] || .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./.pro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file; orted --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --nodename 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 92.168.1.103 --universe root@(none):default-universe --nsreplica
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;0.0.0;tcp://19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.168.1.102:32774&quot; --gprreplica &quot;0.0.0;tcp://192.168.1.102:32774&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mpi-call-yie
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld 0 )'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PAM_unix[183]: (rsh) session closed for user root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect the command that rsh is trying to execute in the remote node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails. It seems to me that the first parenthesis in cmd='( ! is not well
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interpreted, thus causing the syntax error. This might prevent .profile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run and to correctly set PATH. Therefore, &quot;greetings&quot; is not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am attaching to this email the appropiate configuration files of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system and openmpi on it. This is a system in an isolated network, so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't care too much for security. Therefore I am using rsh on it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would really appreciate any suggestions to correct this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jorge
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>Previous message:</strong> <a href="4306.php">Jeff Squyres: "Re: [OMPI users] orterun &quot;by hand&quot;"</a>
<li><strong>In reply to:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
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
