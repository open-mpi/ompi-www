<?
$subject_val = "Re: [OMPI users] openmpi -hostfile/-machinefile option not working";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 11:11:03 2015" -->
<!-- isoreceived="20151218161103" -->
<!-- sent="Fri, 18 Dec 2015 08:10:57 -0800" -->
<!-- isosent="20151218161057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -hostfile/-machinefile option not working" -->
<!-- id="D55E01FF-8C1A-446A-ADAD-13B3C30D9F6A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAP-8EvOJnFynt-8fkis6keeW7=epDpeuU5gKD0U5Kh+3OkWD+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -hostfile/-machinefile option not working<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-18 11:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28188.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28186.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28164.php">Baban Gaigole: "[OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m afraid I need a little more info - what is in your hostfile? What version of OMPI are you using?
<br>
<p><p><span class="quotelev1">&gt; On Dec 15, 2015, at 7:58 AM, Baban Gaigole &lt;gaigoleb2_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a Platform HPC cluster with openmpi build with lsf. When we try to run a job using -host option the job runs parallelly across the nodes specified. But using -machinefile or -hostfile option sends the job to only first node. What might be the problem. Couldnt find any similar problem on google. Kindly suggest.
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Baban Gaigole
</span><br>
<span class="quotelev1">&gt; Locuz Enterprise Solutions Ltd. &lt;<a href="http://www.locuz.com/">http://www.locuz.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Hyderabad, Andhra Pradesh.
</span><br>
<span class="quotelev1">&gt; Mobile: +91-9705329920
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="https://www.youracclaim.com/badges/31569f68-ccd0-4818-8945-a09e2b94ec3b">https://www.youracclaim.com/badges/31569f68-ccd0-4818-8945-a09e2b94ec3b</a>&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Find me -
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://www.facebook.com/gaigoleb2">http://www.facebook.com/gaigoleb2</a>&gt;  &lt;<a href="http://twitter.com/BabanGaigole">http://twitter.com/BabanGaigole</a>&gt;  &lt;<a href="https://plus.google.com/107020322618402061595/about">https://plus.google.com/107020322618402061595/about</a>&gt;  &lt;<a href="http://www.linkedin.com/pub/baban-gaigole/58/205/33a">http://www.linkedin.com/pub/baban-gaigole/58/205/33a</a>&gt;  &lt;<a href="http://hashprompt.blogspot.com/">http://hashprompt.blogspot.com/</a>&gt;  &lt;<a href="http://feeds.feedburner.com/HashPrompt">http://feeds.feedburner.com/HashPrompt</a>&gt;  &lt;<a href="http://www.stumbleupon.com/stumbler/gaigoleb2">http://www.stumbleupon.com/stumbler/gaigoleb2</a>&gt;  &lt;<a href="http://www.reddit.com/user/gaigoleb2/">http://www.reddit.com/user/gaigoleb2/</a>&gt;  &lt;<a href="http://technorati.com/blogs/hashprompt.blogspot.com">http://technorati.com/blogs/hashprompt.blogspot.com</a>&gt;  &lt;<a href="http://pinterest.com/gaigoleb2/">http://pinterest.com/gaigoleb2/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &quot;Expecting the world to treat you fairly because you are good is like expecting the bull not to charge because you are a vegetarian...&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28164.php">http://www.open-mpi.org/community/lists/users/2015/12/28164.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28188.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28186.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28164.php">Baban Gaigole: "[OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<!-- nextthread="start" -->
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
