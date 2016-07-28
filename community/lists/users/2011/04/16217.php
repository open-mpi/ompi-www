<?
$subject_val = "[OMPI users] Over committing?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 10:14:18 2011" -->
<!-- isoreceived="20110413141418" -->
<!-- sent="Wed, 13 Apr 2011 15:13:58 +0100" -->
<!-- isosent="20110413141358" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="[OMPI users] Over committing?" -->
<!-- id="130270405279510173_at_towy" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Over committing?<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 10:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16218.php">Reuti: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16216.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bulk of our compute nodes are 8 cores (twin 4-core IBM x3550-m2).
<br>
Jobs are submitted by Torque/MOAB.  When run with up to np=8 there is
<br>
good performance.  Attempting to run with more processors brings
<br>
problems, specifically if any one node of a group of nodes has all 8
<br>
cores in use the job hangs.  For instance running with 14 cores (7+7) is
<br>
fine, but running with 16 (8+8) hangs.
<br>
<p><span class="quotelev1">&gt;From the FAQs I note the issues of over committing and aggressive
</span><br>
scheduling.  Is it possible for mpirun (or orted on the remote nodes) to
<br>
be blocked from progressing by a fully committed node?  We have a few
<br>
x3755-m2 machines with 16 cores, and we have detected a similar issue
<br>
with 16+16.
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
<li><strong>Next message:</strong> <a href="16218.php">Reuti: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16216.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Reply:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
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
