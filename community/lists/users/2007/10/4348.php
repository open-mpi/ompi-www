<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 12:42:11 2007" -->
<!-- isoreceived="20071030164211" -->
<!-- sent="Tue, 30 Oct 2007 10:42:06 -0600 (MDT)" -->
<!-- isosent="20071030164206" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error initializing openMPI" -->
<!-- id="Pine.LNX.4.64.0710301024570.7754_at_rhsvr03.ece.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710300926.52298.keller_at_hlrs.de" -->
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
<strong>Date:</strong> 2007-10-30 12:42:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4349.php">Murat Knecht: "[OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>In reply to:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rainer,
<br>
<p>Thank you for your reply. Linux does not freeze. The one that freezes is 
<br>
OpenMPI. Sorry for my unaccurate choice of words that led to confusion. 
<br>
Therefore dmesg does not show anything abnormal (I attached to this email 
<br>
a full dmesg log, captured when openmpi freezes).
<br>
<p>When openmpi ferezes I can, from another terminal, see that the node on 
<br>
which openmpi is originaly run (the local one) has two processes: orted 
<br>
and mpirun. The remote node has one: orted. This seems to be normal. 
<br>
However, in both nodes there are not any openmpi activity. There is only 
<br>
an initial &quot;calling init&quot; printout in the local node (I included it in 
<br>
the greetins.c program for testing purposes).
<br>
<p>Unfortunately, I have not been able to compile openmpi 1.2.4 or any of the 
<br>
1.2 trunk versions. Trunks 1.0 and 1.1 copiled well in my system. I 
<br>
already opened a case for this, but I received a message that the person 
<br>
it was assigned is in paternal leave. So I think I need to wait a bit for 
<br>
help on that :). So I am stuck with version 1.1.5.
<br>
<p>I am running openmpi as root because my system has some special 
<br>
conditions. This is an attempt to make an embedded Massive Parallel 
<br>
Processor (MPP), so the nodes are running embedded versions of linux, 
<br>
where normally there is just one user (root). Since this is an isolated 
<br>
system, I did not thing this could be a problem (I don't care about 
<br>
security issues too).
<br>
<p>Again, thank you for all your help,
<br>
<p>Jorge
<br>
<p><p><p>On Tue, 30 Oct 2007, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jorge,
</span><br>
<span class="quotelev1">&gt; On Monday 29 October 2007 18:27, Jorge Parra wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When running openMPI my system freezes when initializing MPI (function
</span><br>
<span class="quotelev2">&gt;&gt; MPI_init). This happens only when I try to run the process in multiples
</span><br>
<span class="quotelev2">&gt;&gt; nodes in my cluster. Running multiple instances of the testing code
</span><br>
<span class="quotelev2">&gt;&gt; locally (i.e ./mpirun -np 2 greetings) is succesful.
</span><br>
<span class="quotelev1">&gt; would it be possible to repeat the tests with the latest Open MPI-1.2.4
</span><br>
<span class="quotelev1">&gt; version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though nothing in Open MPI should make Your system freeze.
</span><br>
<span class="quotelev1">&gt; Could You check the logs on the nodes and possibly have a dmesg created just
</span><br>
<span class="quotelev1">&gt; before the MPI_Init...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - rsh runs well, and is configured to full access. (i.e. rsh
</span><br>
<span class="quotelev2">&gt;&gt; &quot;192.168.1.103 date&quot; is succesful, so they are &quot;rsh AFRLMPPBM2 date&quot; or
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rsh AFRLMPPBM2.MPPdomain.com&quot;). Security is not an issue in this system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - uname -n and hostname return a valid hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The testing code (attached to this email) is run (and fails) as:
</span><br>
<span class="quotelev2">&gt;&gt; ./mpirun --hostfile /root/hostfile -np 2 greetings . The hostfile has the
</span><br>
<span class="quotelev2">&gt;&gt; names of the localnode (first entry:AFRLMPPBM1) and the remote node
</span><br>
<span class="quotelev2">&gt;&gt; (second entry: AFRLMPPBM2). This file is also attached to this email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The environment variables seem to be properly set (see env.log attached
</span><br>
<span class="quotelev2">&gt;&gt; file). Local mpi programs (i.e. ./mpirun -np 2 greetings) run well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -.profile has the path information for both the executables and the
</span><br>
<span class="quotelev2">&gt;&gt; libraries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - orted runs in the remote node, however it does not print anything in
</span><br>
<span class="quotelev2">&gt;&gt; console. The only output in the remote node is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pam_rhosts_auth[235]: user root has a `+' user entry
</span><br>
<span class="quotelev2">&gt;&gt; pam_rhosts_auth[235]: allowed to root_at_[hidden] as root
</span><br>
<span class="quotelev2">&gt;&gt; PAM_unix[235]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev2">&gt;&gt; in.rshd[236]: root_at_[hidden] as root: cmd='( ! [ -e
</span><br>
<span class="quotelev2">&gt;&gt; ./.profile ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; || . ./.profile; orted --bootproxy 1 --name 0.0.1 --num_procs 3
</span><br>
<span class="quotelev1">&gt; You're running as root? Why is that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the remote process returns command prompt. However orted is in the
</span><br>
<span class="quotelev2">&gt;&gt; background. The local process is frozen, and just prints: &quot;Calling init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; which is just before MPI_Init (see greetings.c).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the COMM WORLD cannot be correctly initialized. However I can't
</span><br>
<span class="quotelev2">&gt;&gt; see which part of my configuration is wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4349.php">Murat Knecht: "[OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>In reply to:</strong> <a href="4347.php">Rainer Keller: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
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
