<?
$subject_val = "Re: [MTT devel] Patch to send MIME email.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 11:56:57 2011" -->
<!-- isoreceived="20110321155657" -->
<!-- sent="Mon, 21 Mar 2011 11:56:50 -0400" -->
<!-- isosent="20110321155650" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Patch to send MIME email." -->
<!-- id="AANLkTikVWDK6pLsczStsqsF3HNK05c1e2jvfv7zsNzEJ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18E8E8F3-B0FE-46C1-A655-592BC96160CD_at_cisco.com" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 11:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/04/0566.php">Abhishek Kulkarni: "[MTT devel] FTB runtime support"</a>
<li><strong>Previous message:</strong> <a href="0564.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>In reply to:</strong> <a href="0564.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 17, 2011 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 17, 2011, at 12:49 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; They are the detailed reports of each stage. More specifically, they are
</span><br>
<span class="quotelev1">&gt; all the files $phase-$section-$mpi_name-$mpi_version.txt generated in
</span><br>
<span class="quotelev1">&gt; $SCRATCH. If you meant where does @attachments come from in the code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +            my @reports = _get_report_filenames($results_arr);
</span><br>
<span class="quotelev2">&gt; &gt; +            Verbose(&quot;&gt;&gt; Sending detailed reports: @reports\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +            MTT::Mail::Send($subject, $to, $from, $body . $body_footer,
</span><br>
<span class="quotelev1">&gt; @reports);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah -- there it is.  I missed that in the patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patch looks good to me!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Committed -- r1386.
<br>
<p>Thanks,
<br>
&nbsp;-adk
<br>
<p><p><p><span class="quotelev2">&gt; &gt; @reports is where @attachments come from.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I extended the interface of Mail::Send such that it takes an optional
</span><br>
<span class="quotelev1">&gt; @attachments parameter. If there are attachments it uses MIME::Lite
</span><br>
<span class="quotelev1">&gt; otherwise it resorts to the existing approach of opening a pipe to the mail
</span><br>
<span class="quotelev1">&gt; agent.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Abhishek
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 17, 2011 at 10:14 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Where do the @attachments come from?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 10, 2011, at 7:20 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; While working towards setting up MTT to test the CIFTS FTB middleware,
</span><br>
<span class="quotelev1">&gt; we resorted to a TextFile + Email reporter; largely because i) the frequency
</span><br>
<span class="quotelev1">&gt; of testing is low ii) lesser number of tests and iii) we did not want to
</span><br>
<span class="quotelev1">&gt; deal with setting up a centralized infrastructure to host the test results.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The reporter worked great for us except that we wanted a little more
</span><br>
<span class="quotelev1">&gt; than just the summary. The attached patch adds a new boolean flag
</span><br>
<span class="quotelev1">&gt; &quot;email_detailed_reports&quot; which sends out the detailed reports of each phase
</span><br>
<span class="quotelev1">&gt; as attachments. I have had to use two files from CPAN to encode the email as
</span><br>
<span class="quotelev1">&gt; a multipart message. Right now only the *.txt files are attached but it
</span><br>
<span class="quotelev1">&gt; could also be extend to send an HTML-formatted email with HTML attachments.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you think it looks okay to go in?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Abhishek
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;mime.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/04/0566.php">Abhishek Kulkarni: "[MTT devel] FTB runtime support"</a>
<li><strong>Previous message:</strong> <a href="0564.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
<li><strong>In reply to:</strong> <a href="0564.php">Jeff Squyres: "Re: [MTT devel] Patch to send MIME email."</a>
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
