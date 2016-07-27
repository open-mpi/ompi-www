<?
$subject_val = "Re: [MTT devel] Patch to send MIME email.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 13:41:50 2011" -->
<!-- isoreceived="20110317174150" -->
<!-- sent="Thu, 17 Mar 2011 13:41:45 -0400" -->
<!-- isosent="20110317174145" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Patch to send MIME email." -->
<!-- id="18E8E8F3-B0FE-46C1-A655-592BC96160CD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim8vvzWpOFtCNPVXH2e4NnOjjAjJ=pZhJFzbEff_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-17 13:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0565.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>In reply to:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0565.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Reply:</strong> <a href="0565.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2011, at 12:49 PM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt; They are the detailed reports of each stage. More specifically, they are all the files $phase-$section-$mpi_name-$mpi_version.txt generated in $SCRATCH. If you meant where does @attachments come from in the code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +            my @reports = _get_report_filenames($results_arr);
</span><br>
<span class="quotelev1">&gt; +            Verbose(&quot;&gt;&gt; Sending detailed reports: @reports\n&quot;);
</span><br>
<span class="quotelev1">&gt; +            MTT::Mail::Send($subject, $to, $from, $body . $body_footer, @reports);
</span><br>
<p>Ah -- there it is.  I missed that in the patch.
<br>
<p>Patch looks good to me!
<br>
<p><span class="quotelev1">&gt; @reports is where @attachments come from.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I extended the interface of Mail::Send such that it takes an optional @attachments parameter. If there are attachments it uses MIME::Lite otherwise it resorts to the existing approach of opening a pipe to the mail agent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 17, 2011 at 10:14 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Where do the @attachments come from?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2011, at 7:20 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; While working towards setting up MTT to test the CIFTS FTB middleware, we resorted to a TextFile + Email reporter; largely because i) the frequency of testing is low ii) lesser number of tests and iii) we did not want to deal with setting up a centralized infrastructure to host the test results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reporter worked great for us except that we wanted a little more than just the summary. The attached patch adds a new boolean flag &quot;email_detailed_reports&quot; which sends out the detailed reports of each phase as attachments. I have had to use two files from CPAN to encode the email as a multipart message. Right now only the *.txt files are attached but it could also be extend to send an HTML-formatted email with HTML attachments.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you think it looks okay to go in?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Abhishek
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mime.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0565.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>In reply to:</strong> <a href="0563.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0565.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>Reply:</strong> <a href="0565.php">Abhishek Kulkarni: "Re: [MTT devel] Patch to send MIME email."</a>
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
