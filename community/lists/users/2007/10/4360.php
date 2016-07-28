<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 11:29:27 2007" -->
<!-- isoreceived="20071031152927" -->
<!-- sent="Wed, 31 Oct 2007 09:29:21 -0600 (MDT)" -->
<!-- isosent="20071031152921" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error initializing openMPI" -->
<!-- id="Pine.LNX.4.64.0710310926260.31446_at_rhsvr03.ece.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="14DBE09D-7680-46BE-A736-E66A422638C3_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-31 11:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4361.php">Karsten Bolding: "[OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4395.php">Jorge Parra: "[OMPI users]  Error initializing openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry I did not see your post. Attached to this email are the outputs 
<br>
requested by the help page. It is a compressed tar file containing the 
<br>
output of .configure and the output of &quot;make all&quot;. Please let me know if 
<br>
more information is needed.
<br>
<p>Thank you for your help,
<br>
<p>Jorge
<br>
<p>On Tue, 30 Oct 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 30, 2007, at 9:42 AM, Jorge Parra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reply. Linux does not freeze. The one that
</span><br>
<span class="quotelev2">&gt;&gt; freezes is
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI. Sorry for my unaccurate choice of words that led to
</span><br>
<span class="quotelev2">&gt;&gt; confusion.
</span><br>
<span class="quotelev2">&gt;&gt; Therefore dmesg does not show anything abnormal (I attached to this
</span><br>
<span class="quotelev2">&gt;&gt; email
</span><br>
<span class="quotelev2">&gt;&gt; a full dmesg log, captured when openmpi freezes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When openmpi ferezes I can, from another terminal, see that the
</span><br>
<span class="quotelev2">&gt;&gt; node on
</span><br>
<span class="quotelev2">&gt;&gt; which openmpi is originaly run (the local one) has two processes:
</span><br>
<span class="quotelev2">&gt;&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; and mpirun. The remote node has one: orted. This seems to be normal.
</span><br>
<span class="quotelev2">&gt;&gt; However, in both nodes there are not any openmpi activity. There is
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt; an initial &quot;calling init&quot; printout in the local node (I included it in
</span><br>
<span class="quotelev2">&gt;&gt; the greetins.c program for testing purposes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I have not been able to compile openmpi 1.2.4 or any
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev2">&gt;&gt; 1.2 trunk versions. Trunks 1.0 and 1.1 copiled well in my system. I
</span><br>
<span class="quotelev2">&gt;&gt; already opened a case for this, but I received a message that the
</span><br>
<span class="quotelev2">&gt;&gt; person
</span><br>
<span class="quotelev2">&gt;&gt; it was assigned is in paternal leave. So I think I need to wait a
</span><br>
<span class="quotelev2">&gt;&gt; bit for
</span><br>
<span class="quotelev2">&gt;&gt; help on that :). So I am stuck with version 1.1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you referring to this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2007/10/4218.php">http://www.open-mpi.org/community/lists/users/2007/10/4218.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's currently only one person on paternal leave, and although he
</span><br>
<span class="quotelev1">&gt; is the powerpc guy :-), he's not really the build system guy (I'm
</span><br>
<span class="quotelev1">&gt; kinda *guessing* that either OMPI or libltdl is choosing to build or
</span><br>
<span class="quotelev1">&gt; link the wrong object -- but that's a SWAG without seeing any
</span><br>
<span class="quotelev1">&gt; additional information).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I sent you a reply on 24 Oct asking for a bit more information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2007/10/4310.php">http://www.open-mpi.org/community/lists/users/2007/10/4310.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running openmpi as root because my system has some special
</span><br>
<span class="quotelev2">&gt;&gt; conditions. This is an attempt to make an embedded Massive Parallel
</span><br>
<span class="quotelev2">&gt;&gt; Processor (MPP), so the nodes are running embedded versions of linux,
</span><br>
<span class="quotelev2">&gt;&gt; where normally there is just one user (root). Since this is an
</span><br>
<span class="quotelev2">&gt;&gt; isolated
</span><br>
<span class="quotelev2">&gt;&gt; system, I did not thing this could be a problem (I don't care about
</span><br>
<span class="quotelev2">&gt;&gt; security issues too).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, thank you for all your help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jorge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 30 Oct 2007, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Jorge,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Monday 29 October 2007 18:27, Jorge Parra wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When running openMPI my system freezes when initializing MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_init). This happens only when I try to run the process in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multiples
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes in my cluster. Running multiple instances of the testing code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; locally (i.e ./mpirun -np 2 greetings) is succesful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would it be possible to repeat the tests with the latest Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-1.2.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even though nothing in Open MPI should make Your system freeze.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could You check the logs on the nodes and possibly have a dmesg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the MPI_Init...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - rsh runs well, and is configured to full access. (i.e. rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;192.168.1.103 date&quot; is succesful, so they are &quot;rsh AFRLMPPBM2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; date&quot; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;rsh AFRLMPPBM2.MPPdomain.com&quot;). Security is not an issue in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - uname -n and hostname return a valid hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - The testing code (attached to this email) is run (and fails) as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./mpirun --hostfile /root/hostfile -np 2 greetings . The hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; names of the localnode (first entry:AFRLMPPBM1) and the remote node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (second entry: AFRLMPPBM2). This file is also attached to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - The environment variables seem to be properly set (see env.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file). Local mpi programs (i.e. ./mpirun -np 2 greetings) run well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -.profile has the path information for both the executables and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - orted runs in the remote node, however it does not print
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; console. The only output in the remote node is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pam_rhosts_auth[235]: user root has a `+' user entry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pam_rhosts_auth[235]: allowed to root_at_[hidden] as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PAM_unix[235]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in.rshd[236]: root_at_[hidden] as root: cmd='( ! [ -e
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./.profile ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; || . ./.profile; orted --bootproxy 1 --name 0.0.1 --num_procs 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're running as root? Why is that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then the remote process returns command prompt. However orted is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; background. The local process is frozen, and just prints:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Calling init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is just before MPI_Init (see greetings.c).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe the COMM WORLD cannot be correctly initialized. However
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see which part of my configuration is wrong.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rainer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>

<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4360/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4361.php">Karsten Bolding: "[OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4359.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4395.php">Jorge Parra: "[OMPI users]  Error initializing openMPI"</a>
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
