<?
$subject_val = "Re: [OMPI users] shm unlinking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:22:26 2011" -->
<!-- isoreceived="20110414132226" -->
<!-- sent="Thu, 14 Apr 2011 14:22:14 +0100" -->
<!-- isosent="20110414132214" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shm unlinking" -->
<!-- id="130278734179511661_at_towy" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C2DD972-5A4D-4ED1-9ADF-B3D9095E9ADF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-04-14 09:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16243.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response.  In the last 5 minutes I have managed to get
<br>
some output from the prologue.parallel scripts, it turns out that the
<br>
Torque Administrator's Manual was wrong, and I was fool enough to
<br>
believe it!  Now that I've got a working model I can start to sort out
<br>
the mess with psm_shm files.
<br>
<p>For your information: we were supplied with a script when we bought the
<br>
cluster, but the original script made the assumption that all processes
<br>
and shm files belonging to a specific user ought to be deleted.  This is
<br>
a problem if users submit jobs which only half fill a node and the
<br>
second job starts on the same node as the first one.  The first job to
<br>
finish causes the continuing job to stop dead.  We therefore had to
<br>
disable any cleanup to allow jobs to run.  Now we are finding a slow
<br>
fill up with the shm files and I need to do something; at least now I
<br>
have a way forward.
<br>
<p><p>Martin Rushton
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
This email and any attachments to it may be confidential and are
<br>
intended solely for the use of the individual to whom it is 
<br>
addressed. If you are not the intended recipient of this email,
<br>
you must neither take any action based upon its contents, nor 
<br>
copy or show it to anyone. Please contact the sender if you 
<br>
believe you have received this email in error. QinetiQ may 
<br>
monitor email traffic data and also the content of email for 
<br>
the purposes of security. QinetiQ Limited (Registered in England
<br>
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
<br>
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Previous message:</strong> <a href="16243.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16242.php">Ralph Castain: "Re: [OMPI users] shm unlinking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
<li><strong>Reply:</strong> <a href="16245.php">Jeff Squyres: "Re: [OMPI users] shm unlinking"</a>
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
