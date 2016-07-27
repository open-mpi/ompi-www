<?
$subject_val = "Re: [MTT devel] Patch to send MIME email.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:14:13 2011" -->
<!-- isoreceived="20110317141413" -->
<!-- sent="Thu, 17 Mar 2011 10:14:07 -0400" -->
<!-- isosent="20110317141407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Patch to send MIME email." -->
<!-- id="7D66F923-7A47-4015-AE7E-8311D0FE6960_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinTqXutbVqWuD9c5GmU=NfnaM6bHyJiswCQmq=S_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Patch to send MIME email.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 10:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="0561.php">Abhishek Kulkarni: "[MTT devel] Patch to send MIME email."</a>
<li><strong>In reply to:</strong> <a href="0561.php">Abhishek Kulkarni: "[MTT devel] Patch to send MIME email."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Reply:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Where do the @attachments come from?
<br>
<p><p>On Mar 10, 2011, at 7:20 PM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While working towards setting up MTT to test the CIFTS FTB middleware, we resorted to a TextFile + Email reporter; largely because i) the frequency of testing is low ii) lesser number of tests and iii) we did not want to deal with setting up a centralized infrastructure to host the test results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reporter worked great for us except that we wanted a little more than just the summary. The attached patch adds a new boolean flag &quot;email_detailed_reports&quot; which sends out the detailed reports of each phase as attachments. I have had to use two files from CPAN to encode the email as a multipart message. Right now only the *.txt files are attached but it could also be extend to send an HTML-formatted email with HTML attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you think it looks okay to go in?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt; &lt;mime.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="0561.php">Abhishek Kulkarni: "[MTT devel] Patch to send MIME email."</a>
<li><strong>In reply to:</strong> <a href="0561.php">Abhishek Kulkarni: "[MTT devel] Patch to send MIME email."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Reply:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
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
