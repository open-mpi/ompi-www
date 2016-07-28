<?
$subject_val = "Re: [OMPI users] shm unlinking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 11:41:07 2011" -->
<!-- isoreceived="20110414154107" -->
<!-- sent="Thu, 14 Apr 2011 11:40:55 -0400" -->
<!-- isosent="20110414154055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shm unlinking" -->
<!-- id="836EEC35-EEB7-48AE-8C48-096FFB234774_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201104141346.p3EDkqCM021968_at_milliways.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] shm unlinking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 11:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16248.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16248.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16248.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They could be from OMPI -- are you using QLogic IB NICs?  That's the only thing named &quot;PSM&quot; in Open MPI.
<br>
<p><p>On Apr 14, 2011, at 9:46 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; A typical file is called
</span><br>
<span class="quotelev1">&gt; /dev/shm/psm_shm.41e04667-f3ba-e503-8464-db6c209b3430
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had assumed that these were from OMPI, but clearly I could be wrong.
</span><br>
<span class="quotelev1">&gt; They vary in size, but are typically 42MiB, only 0.2% of our small
</span><br>
<span class="quotelev1">&gt; diskless nodes' memory, but put a dozen in there and they start to be
</span><br>
<span class="quotelev1">&gt; noticed.  lsof shows all the processes in a particular job have the same
</span><br>
<span class="quotelev1">&gt; one open, the other files are associated chronologically with failed
</span><br>
<span class="quotelev1">&gt; jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin Rushton
</span><br>
<span class="quotelev1">&gt; HPC System Manager, Weapons Technologies
</span><br>
<span class="quotelev1">&gt; Tel: 01959 514777, Mobile: 07939 219057
</span><br>
<span class="quotelev1">&gt; email: jmrushton_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.QinetiQ.com
</span><br>
<span class="quotelev1">&gt; QinetiQ - Delivering customer-focused solutions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 14 April 2011 14:33
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] shm unlinking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2011, at 9:22 AM, Rushton Martin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For your information: we were supplied with a script when we bought 
</span><br>
<span class="quotelev2">&gt;&gt; the cluster, but the original script made the assumption that all 
</span><br>
<span class="quotelev2">&gt;&gt; processes and shm files belonging to a specific user ought to be 
</span><br>
<span class="quotelev2">&gt;&gt; deleted.  This is a problem if users submit jobs which only half fill 
</span><br>
<span class="quotelev2">&gt;&gt; a node and the second job starts on the same node as the first one.  
</span><br>
<span class="quotelev2">&gt;&gt; The first job to finish causes the continuing job to stop dead.  We 
</span><br>
<span class="quotelev2">&gt;&gt; therefore had to disable any cleanup to allow jobs to run.  Now we are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; finding a slow fill up with the shm files and I need to do something; 
</span><br>
<span class="quotelev2">&gt;&gt; at least now I have a way forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that Open MPI v1.4.x is likely using mmap files by default -- these
</span><br>
<span class="quotelev1">&gt; should be under /tmp/ somewhere.  If they get left around, they can
</span><br>
<span class="quotelev1">&gt; cause shared memory to be filled up, but they should also be unrelated
</span><br>
<span class="quotelev1">&gt; in /dev/shm kinds of things.  If you're seeing /dev/shm fill up, that
</span><br>
<span class="quotelev1">&gt; might be due to something else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I'm a little confused by your reference to psm_shm... are you
</span><br>
<span class="quotelev1">&gt; talking about the QLogic PSM device?  If that does some tomfoolery with
</span><br>
<span class="quotelev1">&gt; /dev/shm somewhere, I'm unaware of it (i.e., I don't know much/anything
</span><br>
<span class="quotelev1">&gt; about what that device does internally).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; This email and any attachments to it may be confidential and are
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom it is 
</span><br>
<span class="quotelev1">&gt; addressed. If you are not the intended recipient of this email,
</span><br>
<span class="quotelev1">&gt; you must neither take any action based upon its contents, nor 
</span><br>
<span class="quotelev1">&gt; copy or show it to anyone. Please contact the sender if you 
</span><br>
<span class="quotelev1">&gt; believe you have received this email in error. QinetiQ may 
</span><br>
<span class="quotelev1">&gt; monitor email traffic data and also the content of email for 
</span><br>
<span class="quotelev1">&gt; the purposes of security. QinetiQ Limited (Registered in England
</span><br>
<span class="quotelev1">&gt; &amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
</span><br>
<span class="quotelev1">&gt; Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16248.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16246.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16248.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16248.php">Rushton Martin: "Re: [OMPI users] shm unlinking"</a>
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
