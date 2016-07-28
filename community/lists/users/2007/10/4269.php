<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 20:41:38 2007" -->
<!-- isoreceived="20071023004138" -->
<!-- sent="Mon, 22 Oct 2007 20:41:30 -0400" -->
<!-- isosent="20071023004130" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Syntax error in remote rsh execution" -->
<!-- id="200710222041.30178.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="Pine.LNX.4.64.0710181846070.21436_at_rhsvr03.ece.unm.edu" -->
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
<strong>Date:</strong> 2007-10-22 20:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4268.php">Jeff Squyres: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4253.php">Jorge Parra: "[OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jorge,
<br>
<p>This is interesting. The problem is the universe name:
<br>
root@(none):default-universe
<br>
<p>The &quot;(none)&quot; part is supposed to be the hostname where mpirun is executed. Try 
<br>
running:
<br>
hostname
<br>
<p>and:
<br>
uname -n
<br>
<p>These should both return valid hostnames for your machine.
<br>
<p>Open MPI pretty much assumes that all nodes have a valid (preferably unique) 
<br>
hostname. If the above commands don't work, you probably need to fix your 
<br>
cluster.
<br>
<p>Let me know if this does not work.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Thursday 18 October 2007 09:22:09 pm Jorge Parra wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When trying to execute an application that spawns to another node, I
</span><br>
<span class="quotelev1">&gt; obtain the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ./mpirun --hostfile /root/hostfile -np 2 greetings
</span><br>
<span class="quotelev1">&gt; Syntax error: &quot;(&quot; unexpected (expecting &quot;)&quot;)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Could not execute the executable
</span><br>
<span class="quotelev1">&gt; &quot;/opt/OpenMPI/OpenMPI-1.1.5b/exec/bin/greetings
</span><br>
<span class="quotelev1">&gt; &quot;: Exec format error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that you do
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; have the necessary permissions.  Please ensure that the executable is able
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; found and executed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and in the remote node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # pam_rhosts_auth[183]: user root has a `+' user entry
</span><br>
<span class="quotelev1">&gt; pam_rhosts_auth[183]: allowed to root_at_192.168.1.102 as root
</span><br>
<span class="quotelev1">&gt; PAM_unix[183]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev1">&gt; in.rshd[184]: root_at_192.168.1.102 as root: cmd='( ! [ -e ./.profile ] || .
</span><br>
<span class="quotelev1">&gt; ./.pro
</span><br>
<span class="quotelev1">&gt; file; orted --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename 1
</span><br>
<span class="quotelev1">&gt; 92.168.1.103 --universe root@(none):default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://19
</span><br>
<span class="quotelev1">&gt; 2.168.1.102:32774&quot; --gprreplica &quot;0.0.0;tcp://192.168.1.102:32774&quot;
</span><br>
<span class="quotelev1">&gt; --mpi-call-yie
</span><br>
<span class="quotelev1">&gt; ld 0 )'
</span><br>
<span class="quotelev1">&gt; PAM_unix[183]: (rsh) session closed for user root
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect the command that rsh is trying to execute in the remote node
</span><br>
<span class="quotelev1">&gt; fails. It seems to me that the first parenthesis in cmd='( ! is not well
</span><br>
<span class="quotelev1">&gt; interpreted, thus causing the syntax error. This might prevent .profile to
</span><br>
<span class="quotelev1">&gt; run and to correctly set PATH. Therefore, &quot;greetings&quot; is not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching to this email the appropiate configuration files of my
</span><br>
<span class="quotelev1">&gt; system and openmpi on it. This is a system in an isolated network, so I
</span><br>
<span class="quotelev1">&gt; don't care too much for security. Therefore I am using rsh on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would really appreciate any suggestions to correct this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jorge
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4268.php">Jeff Squyres: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4253.php">Jorge Parra: "[OMPI users] Syntax error in remote rsh execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Reply:</strong> <a href="4270.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
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
