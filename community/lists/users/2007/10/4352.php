<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 01:24:06 2007" -->
<!-- isoreceived="20071031052406" -->
<!-- sent="Tue, 30 Oct 2007 22:22:14 -0700" -->
<!-- isosent="20071031052214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error initializing openMPI" -->
<!-- id="14DBE09D-7680-46BE-A736-E66A422638C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0710301024570.7754_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 01:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4351.php">Oleg Morajko: "[OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4395.php">Jorge Parra: "[OMPI users]  Error initializing openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2007, at 9:42 AM, Jorge Parra wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your reply. Linux does not freeze. The one that  
</span><br>
<span class="quotelev1">&gt; freezes is
</span><br>
<span class="quotelev1">&gt; OpenMPI. Sorry for my unaccurate choice of words that led to  
</span><br>
<span class="quotelev1">&gt; confusion.
</span><br>
<span class="quotelev1">&gt; Therefore dmesg does not show anything abnormal (I attached to this  
</span><br>
<span class="quotelev1">&gt; email
</span><br>
<span class="quotelev1">&gt; a full dmesg log, captured when openmpi freezes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When openmpi ferezes I can, from another terminal, see that the  
</span><br>
<span class="quotelev1">&gt; node on
</span><br>
<span class="quotelev1">&gt; which openmpi is originaly run (the local one) has two processes:  
</span><br>
<span class="quotelev1">&gt; orted
</span><br>
<span class="quotelev1">&gt; and mpirun. The remote node has one: orted. This seems to be normal.
</span><br>
<span class="quotelev1">&gt; However, in both nodes there are not any openmpi activity. There is  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; an initial &quot;calling init&quot; printout in the local node (I included it in
</span><br>
<span class="quotelev1">&gt; the greetins.c program for testing purposes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I have not been able to compile openmpi 1.2.4 or any  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; 1.2 trunk versions. Trunks 1.0 and 1.1 copiled well in my system. I
</span><br>
<span class="quotelev1">&gt; already opened a case for this, but I received a message that the  
</span><br>
<span class="quotelev1">&gt; person
</span><br>
<span class="quotelev1">&gt; it was assigned is in paternal leave. So I think I need to wait a  
</span><br>
<span class="quotelev1">&gt; bit for
</span><br>
<span class="quotelev1">&gt; help on that :). So I am stuck with version 1.1.5.
</span><br>
<p>Are you referring to this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2007/10/4218.php">http://www.open-mpi.org/community/lists/users/2007/10/4218.php</a>
<br>
<p>There's currently only one person on paternal leave, and although he  
<br>
is the powerpc guy :-), he's not really the build system guy (I'm  
<br>
kinda *guessing* that either OMPI or libltdl is choosing to build or  
<br>
link the wrong object -- but that's a SWAG without seeing any  
<br>
additional information).
<br>
<p>I sent you a reply on 24 Oct asking for a bit more information:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2007/10/4310.php">http://www.open-mpi.org/community/lists/users/2007/10/4310.php</a>
<br>
<p><span class="quotelev1">&gt; I am running openmpi as root because my system has some special
</span><br>
<span class="quotelev1">&gt; conditions. This is an attempt to make an embedded Massive Parallel
</span><br>
<span class="quotelev1">&gt; Processor (MPP), so the nodes are running embedded versions of linux,
</span><br>
<span class="quotelev1">&gt; where normally there is just one user (root). Since this is an  
</span><br>
<span class="quotelev1">&gt; isolated
</span><br>
<span class="quotelev1">&gt; system, I did not thing this could be a problem (I don't care about
</span><br>
<span class="quotelev1">&gt; security issues too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, thank you for all your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jorge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 30 Oct 2007, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Jorge,
</span><br>
<span class="quotelev2">&gt;&gt; On Monday 29 October 2007 18:27, Jorge Parra wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running openMPI my system freezes when initializing MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_init). This happens only when I try to run the process in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiples
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes in my cluster. Running multiple instances of the testing code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locally (i.e ./mpirun -np 2 greetings) is succesful.
</span><br>
<span class="quotelev2">&gt;&gt; would it be possible to repeat the tests with the latest Open  
</span><br>
<span class="quotelev2">&gt;&gt; MPI-1.2.4
</span><br>
<span class="quotelev2">&gt;&gt; version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Even though nothing in Open MPI should make Your system freeze.
</span><br>
<span class="quotelev2">&gt;&gt; Could You check the logs on the nodes and possibly have a dmesg  
</span><br>
<span class="quotelev2">&gt;&gt; created just
</span><br>
<span class="quotelev2">&gt;&gt; before the MPI_Init...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - rsh runs well, and is configured to full access. (i.e. rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;192.168.1.103 date&quot; is succesful, so they are &quot;rsh AFRLMPPBM2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; date&quot; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;rsh AFRLMPPBM2.MPPdomain.com&quot;). Security is not an issue in this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - uname -n and hostname return a valid hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - The testing code (attached to this email) is run (and fails) as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./mpirun --hostfile /root/hostfile -np 2 greetings . The hostfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; names of the localnode (first entry:AFRLMPPBM1) and the remote node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (second entry: AFRLMPPBM2). This file is also attached to this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - The environment variables seem to be properly set (see env.log  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file). Local mpi programs (i.e. ./mpirun -np 2 greetings) run well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -.profile has the path information for both the executables and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - orted runs in the remote node, however it does not print  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; console. The only output in the remote node is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pam_rhosts_auth[235]: user root has a `+' user entry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pam_rhosts_auth[235]: allowed to root_at_[hidden] as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PAM_unix[235]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in.rshd[236]: root_at_[hidden] as root: cmd='( ! [ -e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./.profile ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; || . ./.profile; orted --bootproxy 1 --name 0.0.1 --num_procs 3
</span><br>
<span class="quotelev2">&gt;&gt; You're running as root? Why is that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the remote process returns command prompt. However orted is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; background. The local process is frozen, and just prints:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Calling init&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is just before MPI_Init (see greetings.c).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the COMM WORLD cannot be correctly initialized. However  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see which part of my configuration is wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4351.php">Oleg Morajko: "[OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4360.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4395.php">Jorge Parra: "[OMPI users]  Error initializing openMPI"</a>
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
