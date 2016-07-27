<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 10:51:51 2009" -->
<!-- isoreceived="20090319145151" -->
<!-- sent="Thu, 19 Mar 2009 16:51:44 +0200" -->
<!-- isosent="20090319145144" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="b20b52800903190751m4fc1c797ycb3119a57c42eec2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090318200559.GB26923_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 10:51:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I think we can switch to desired framework (datastore+mapreduce) gradually
<br>
in the background:
<br>
Here is a short battle plan:
<br>
<p>1. create datastore (google`s or similar)
<br>
2. design datastore layout (what to keep, how to keep, objects &amp; attributes)
<br>
3. create cmd line tool to submit results into datastore
<br>
4. integrate (3) into mtt
<br>
5. Milestone: we have tool to submit run results into two DBs (currents &amp;
<br>
datastore)
<br>
6. Create mpi-aware cmd line tool to query submitted results. Tool should
<br>
allow query and fetch selected results.
<br>
7. Milestone: we have cmd line tool to query performance results. This tool
<br>
can be used by community to play with custom scripts for fetching results
<br>
and generating custom reports.
<br>
<p>8. here we can collect 3rd party/contributed scripts to create various
<br>
visual reports based on perf results.
<br>
<p>what do you think?
<br>
<p>I think we can provide some dark forces here to perform most of the steps.
<br>
Will it be possible to host datastore on openmpi.org and open access to it?
<br>
<p><p><p><p><p><p><p>On Wed, Mar 18, 2009 at 10:05 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Mar/18/2009 03:28:48PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; So they posted the list of accepted projects and we are -not- on it
</span><br>
<span class="quotelev2">&gt; &gt; for this year:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://socghop.appspot.com/program/accepted_orgs/google/gsoc2009">http://socghop.appspot.com/program/accepted_orgs/google/gsoc2009</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Maybe next year. I don't know if they will be sending around a note
</span><br>
<span class="quotelev2">&gt; &gt; regarding why we were not selected to participate. If they do I will
</span><br>
<span class="quotelev2">&gt; &gt; forward it along.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Josh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm reading that in 2008, they only accepted 174 out of the 7100
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 13, 2009, at 3:19 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Awesome; many thanks for carrying the baton over the finish line, Josh!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 13, 2009, at 2:56 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The application has been submitted. We find out on March 18 (3 pm) if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we have been accepted. Link to timeline below:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    <a href="http://socghop.appspot.com/document/show/program/google/gsoc2009/">http://socghop.appspot.com/document/show/program/google/gsoc2009/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; timeline
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 13, 2009, at 2:19 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I just pushed a final draft to the repository. I'll probably plan
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; on submitting at 2:30/2:45. Let me know if you have any edits
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; before then either through email or IM.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Josh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; On Mar 13, 2009, at 12:11 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; I finished a first pass at cleaning up the Ideas page on the Wiki.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; All of the ideas were preserved, just some rewording and formatting.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;   <a href="https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas">https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; If you get a chance, read through this and make sure the text
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; sounds ok (feel free to clean the text up as necessary).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; The application is due by 3 pm EST. So I hope to have the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; application ready by 2ish. I'll move onto the application itself
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; On Mar 12, 2009, at 4:43 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; Jeff is going to take the first pass at the application.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; I am going to go through the Idea page on the wiki and polish a
</span><br>
<span class="quotelev1">&gt; bit:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas">https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; I'll let folks know when I'm done, and we can start iterating on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; drafts.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; On Mar 12, 2009, at 4:08 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; I've created a quick-n-dirty hg to collaborate on the GSOC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; application.  There's a web form to fill out to apply, so let's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; work on a .txt file in the hg to get it right.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; We have until 3pm US Eastern time tomorrow to submit.  Here's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; the HG:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;    ssh://www.open-mpi.org/~jsquyres/hg/gsoc/&lt;<a href="http://www.open-mpi.org/%7Ejsquyres/hg/gsoc/">http://www.open-mpi.org/%7Ejsquyres/hg/gsoc/</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; I've put the PDF there for now; I'll kruft up a quick .txt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; shortly and push it there as well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
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
