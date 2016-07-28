<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 04:27:01 2007" -->
<!-- isoreceived="20071030082701" -->
<!-- sent="Tue, 30 Oct 2007 09:26:52 +0100" -->
<!-- isosent="20071030082652" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error initializing openMPI" -->
<!-- id="200710300926.52298.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="Pine.LNX.4.64.0710291005450.4177_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-30 04:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4346.php">Neeraj Chourasia: "[OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="4343.php">Jorge Parra: "[OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jorge,
<br>
On Monday 29 October 2007 18:27, Jorge Parra wrote:
<br>
<span class="quotelev1">&gt; When running openMPI my system freezes when initializing MPI (function
</span><br>
<span class="quotelev1">&gt; MPI_init). This happens only when I try to run the process in multiples
</span><br>
<span class="quotelev1">&gt; nodes in my cluster. Running multiple instances of the testing code
</span><br>
<span class="quotelev1">&gt; locally (i.e ./mpirun -np 2 greetings) is succesful.
</span><br>
would it be possible to repeat the tests with the latest Open MPI-1.2.4 
<br>
version?
<br>
<p>Even though nothing in Open MPI should make Your system freeze.
<br>
Could You check the logs on the nodes and possibly have a dmesg created just 
<br>
before the MPI_Init...
<br>
<p><span class="quotelev1">&gt; - rsh runs well, and is configured to full access. (i.e. rsh
</span><br>
<span class="quotelev1">&gt; &quot;192.168.1.103 date&quot; is succesful, so they are &quot;rsh AFRLMPPBM2 date&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;rsh AFRLMPPBM2.MPPdomain.com&quot;). Security is not an issue in this system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - uname -n and hostname return a valid hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The testing code (attached to this email) is run (and fails) as:
</span><br>
<span class="quotelev1">&gt; ./mpirun --hostfile /root/hostfile -np 2 greetings . The hostfile has the
</span><br>
<span class="quotelev1">&gt; names of the localnode (first entry:AFRLMPPBM1) and the remote node
</span><br>
<span class="quotelev1">&gt; (second entry: AFRLMPPBM2). This file is also attached to this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The environment variables seem to be properly set (see env.log attached
</span><br>
<span class="quotelev1">&gt; file). Local mpi programs (i.e. ./mpirun -np 2 greetings) run well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -.profile has the path information for both the executables and the
</span><br>
<span class="quotelev1">&gt; libraries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - orted runs in the remote node, however it does not print anything in
</span><br>
<span class="quotelev1">&gt; console. The only output in the remote node is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pam_rhosts_auth[235]: user root has a `+' user entry
</span><br>
<span class="quotelev1">&gt; pam_rhosts_auth[235]: allowed to root_at_[hidden] as root
</span><br>
<span class="quotelev1">&gt; PAM_unix[235]: (rsh) session opened for user root by (uid=0)
</span><br>
<span class="quotelev1">&gt; in.rshd[236]: root_at_[hidden] as root: cmd='( ! [ -e
</span><br>
<span class="quotelev1">&gt; ./.profile ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; || . ./.profile; orted --bootproxy 1 --name 0.0.1 --num_procs 3
</span><br>
You're running as root? Why is that?
<br>
<p><span class="quotelev1">&gt; Then the remote process returns command prompt. However orted is in the
</span><br>
<span class="quotelev1">&gt; background. The local process is frozen, and just prints: &quot;Calling init&quot;,
</span><br>
<span class="quotelev1">&gt; which is just before MPI_Init (see greetings.c).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the COMM WORLD cannot be correctly initialized. However I can't
</span><br>
<span class="quotelev1">&gt; see which part of my configuration is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
&quot;Emails save time, not printing them saves trees!&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4346.php">Neeraj Chourasia: "[OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="4343.php">Jorge Parra: "[OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Reply:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
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
