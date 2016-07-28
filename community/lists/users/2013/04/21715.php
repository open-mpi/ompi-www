<?
$subject_val = "Re: [OMPI users] Greenplum's MR+";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 12 07:52:42 2013" -->
<!-- isoreceived="20130412115242" -->
<!-- sent="Fri, 12 Apr 2013 04:52:34 -0700" -->
<!-- isosent="20130412115234" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Greenplum's MR+" -->
<!-- id="300F25D1-0A4A-4D55-93FA-1982F0AA0695_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMrN5-=HvAJjdjeEoLq5d5BGVUYqEdvZbfjR_cWG6vJ8SDZjDg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Greenplum's MR+<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-12 07:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Previous message:</strong> <a href="21714.php">Jakub Nowacki: "Re: [OMPI users] Greenplum's MR+"</a>
<li><strong>In reply to:</strong> <a href="21714.php">Jakub Nowacki: "Re: [OMPI users] Greenplum's MR+"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2013, at 2:00 AM, Jakub Nowacki &lt;jakub.nowacki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the replay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could anyone tell me was MR+ released already, and if so, where it is?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sadly, Greenplum has been unable to get it released for a variety of reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it mean that it will not be released any time soon or it is just delayed?
</span><br>
<p>Unclear - the company isn't really committed to it, so it has been relegated to the &quot;long-term, low-priority&quot; category. In other words, nothing is happening. :-(
<br>
<p>Could change, and I hear that others may implement the concept given GP's inability to complete it.
<br>
<p><span class="quotelev1">&gt; Also, are they still plan to release it as an open source software or that is also threaten? 
</span><br>
<p>It would be open source. The OMPI part of it is already in the OMPI developer's trunk - it's only the Hadoop integration that is missing.
<br>
<p>You can run a MapReduce job just fine with OMPI as it sits - you just can't use the Apache MR classes. So if you want to write your own mapper/reducer, you can just execute it using mpirun with a few options that tell it to use a MR-like flow.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, how can I get early adopter's version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would definitely qualify as &quot;early adopter&quot; at this stage. I'll see what I can do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jakub
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Previous message:</strong> <a href="21714.php">Jakub Nowacki: "Re: [OMPI users] Greenplum's MR+"</a>
<li><strong>In reply to:</strong> <a href="21714.php">Jakub Nowacki: "Re: [OMPI users] Greenplum's MR+"</a>
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
