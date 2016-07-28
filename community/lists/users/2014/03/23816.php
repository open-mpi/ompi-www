<?
$subject_val = "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 06:19:14 2014" -->
<!-- isoreceived="20140312101914" -->
<!-- sent="Wed, 12 Mar 2014 10:19:13 +0000" -->
<!-- isosent="20140312101913" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2" -->
<!-- id="4839DF8C-CBD1-4567-8927-07753875B28C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFCBAB377C.239EA21F-ON49257C99.002F4338-49257C99.0032B680_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 06:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This all seems to be a side-effect of r30942 -- see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4365">https://svn.open-mpi.org/trac/ompi/ticket/4365</a>
<br>
<p><p>On Mar 12, 2014, at 5:13 AM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.7.5rc2 and applied r31019 to it.
</span><br>
<span class="quotelev1">&gt; As far as I confirmed, rmaps framework worked fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, by chance, I noticed that single ctrl+c typing could
</span><br>
<span class="quotelev1">&gt; not terminate a running job. Twice typing was necessary.
</span><br>
<span class="quotelev1">&gt; Is this your expected behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't use ctrl+c to abort for a while, I don't know when
</span><br>
<span class="quotelev1">&gt; it started. At least I can terminate the job by single ctrl+c
</span><br>
<span class="quotelev1">&gt; if I use openmpi-1.7.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And, for your information, when I hit ctrl+c with more than 5
</span><br>
<span class="quotelev1">&gt; seconds interval, I get the message below:
</span><br>
<span class="quotelev1">&gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Reply:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
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
