<?
$subject_val = "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 13:43:33 2009" -->
<!-- isoreceived="20090401174333" -->
<!-- sent="Wed, 1 Apr 2009 12:43:28 -0500" -->
<!-- isosent="20090401174328" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="c4d69730904011043x7ff16951w322c3cf8c588c0a9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D81DD46A-04CD-42D6-8C06-4401E39EAA0F_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 13:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8722.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8702.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 1, 2009 at 1:13 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; So I gather that by &quot;direct&quot; you mean that you don't get an allocation from
</span><br>
<span class="quotelev1">&gt; Maui before running the job, but for the other you do? Otherwise, OMPI
</span><br>
<span class="quotelev1">&gt; should detect the that it is running under Torque and automatically use the
</span><br>
<span class="quotelev1">&gt; Torque launcher unless directed to do otherwise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think I've figured out the sore point. It seems &quot;ulimit&quot; is needed.
<br>
Things seem sensitive to where exactly I put the ulimit directive
<br>
though. Funnily, the nodes reported an unlimited stack before too but
<br>
putting this extra directive in there seems to have helped!
<br>
<p>I'm doing more testing to be sure that the problem has been solved!
<br>
<p>Thanks for the leads guys!
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8722.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8702.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
