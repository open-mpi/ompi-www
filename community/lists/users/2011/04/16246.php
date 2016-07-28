<?
$subject_val = "Re: [OMPI users] shm unlinking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:46:57 2011" -->
<!-- isoreceived="20110414134657" -->
<!-- sent="Thu, 14 Apr 2011 14:46:43 +0100" -->
<!-- isosent="20110414134643" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shm unlinking" -->
<!-- id="201104141346.p3EDkqCM021968_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BEDE1DF1-23B7-493C-83C7-FF41A8C45737_at_cisco.com" -->
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
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:46:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16247.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16247.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16247.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A typical file is called
<br>
/dev/shm/psm_shm.41e04667-f3ba-e503-8464-db6c209b3430
<br>
<p>I had assumed that these were from OMPI, but clearly I could be wrong.
<br>
They vary in size, but are typically 42MiB, only 0.2% of our small
<br>
diskless nodes' memory, but put a dozen in there and they start to be
<br>
noticed.  lsof shows all the processes in a particular job have the same
<br>
one open, the other files are associated chronologically with failed
<br>
jobs.
<br>
<p>HTH
<br>
<p>Martin Rushton
<br>
HPC System Manager, Weapons Technologies
<br>
Tel: 01959 514777, Mobile: 07939 219057
<br>
email: jmrushton_at_[hidden]
<br>
www.QinetiQ.com
<br>
QinetiQ - Delivering customer-focused solutions
<br>
<p>Please consider the environment before printing this email.
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: 14 April 2011 14:33
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] shm unlinking
<br>
<p>On Apr 14, 2011, at 9:22 AM, Rushton Martin wrote:
<br>
<p><span class="quotelev1">&gt; For your information: we were supplied with a script when we bought 
</span><br>
<span class="quotelev1">&gt; the cluster, but the original script made the assumption that all 
</span><br>
<span class="quotelev1">&gt; processes and shm files belonging to a specific user ought to be 
</span><br>
<span class="quotelev1">&gt; deleted.  This is a problem if users submit jobs which only half fill 
</span><br>
<span class="quotelev1">&gt; a node and the second job starts on the same node as the first one.  
</span><br>
<span class="quotelev1">&gt; The first job to finish causes the continuing job to stop dead.  We 
</span><br>
<span class="quotelev1">&gt; therefore had to disable any cleanup to allow jobs to run.  Now we are
</span><br>
<p><span class="quotelev1">&gt; finding a slow fill up with the shm files and I need to do something; 
</span><br>
<span class="quotelev1">&gt; at least now I have a way forward.
</span><br>
<p>Note that Open MPI v1.4.x is likely using mmap files by default -- these
<br>
should be under /tmp/ somewhere.  If they get left around, they can
<br>
cause shared memory to be filled up, but they should also be unrelated
<br>
in /dev/shm kinds of things.  If you're seeing /dev/shm fill up, that
<br>
might be due to something else.
<br>
<p>Also, I'm a little confused by your reference to psm_shm... are you
<br>
talking about the QLogic PSM device?  If that does some tomfoolery with
<br>
/dev/shm somewhere, I'm unaware of it (i.e., I don't know much/anything
<br>
about what that device does internally).
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
This email and any attachments to it may be confidential and are
intended solely for the use of the individual to whom it is 
addressed. If you are not the intended recipient of this email,
you must neither take any action based upon its contents, nor 
copy or show it to anyone. Please contact the sender if you 
believe you have received this email in error. QinetiQ may 
monitor email traffic data and also the content of email for 
the purposes of security. QinetiQ Limited (Registered in England
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16247.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>In reply to:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16247.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16247.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
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
