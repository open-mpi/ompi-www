<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 04:29:56 2011" -->
<!-- isoreceived="20110218092956" -->
<!-- sent="Fri, 18 Feb 2011 09:29:48 +0000" -->
<!-- isosent="20110218092948" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="6A3E7BAD-4435-47AD-A4B5-37323BF8BFAF_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9837619.E6EF%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 04:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15652.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15650.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15657.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15657.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 Feb 2011, at 09:09, Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; I had created a security group &quot;intra.&quot;  I opened ssh port from 0 to
</span><br>
<span class="quotelev1">&gt; 65535, and launched instances (I unleashed 2 at a time in a same
</span><br>
<span class="quotelev1">&gt; geography zone) each belonging to the group intra.  So, here, ssh
</span><br>
<span class="quotelev1">&gt; is a security rule of a security group intra.  A field for each
</span><br>
<span class="quotelev1">&gt; rule is &quot;source.&quot;  I had different settings for the source field,
</span><br>
<span class="quotelev1">&gt; but what I had been failing to do is to have this field known by
</span><br>
<span class="quotelev1">&gt; the name of the group, namely intra.  By doing so, each instance
</span><br>
<span class="quotelev1">&gt; that belongs to this group can get to each other.
</span><br>
<p>I'm glad you got to the bottom of the problem, I've never fully understood the EC2 &quot;Security Groups&quot; but I found that the default group was adequate and I didn't need to create my own.  Now that I look at it more closely it appears to open all incoming ports to the local instances and incoming port 22 to the world which would agree with I've seen.
<br>
<p><span class="quotelev1">&gt; Many thanks for your guidance all along.  In a week or two, I look
</span><br>
<span class="quotelev1">&gt; forward to put together a mini &quot;how-to openMPI on cloud&quot;.
</span><br>
<p>If you do this I would appreciate the chance to proof-read it before you go public, I have many thousands of hours of EC2 time to my name and have spent much of it configuring and testing MPI librarys within them to allow me to test my debugger which sits on top of them.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15652.php">Michael Shuey: "[OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15650.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15657.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15657.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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
