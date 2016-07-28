<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 11 22:38:23 2007" -->
<!-- isoreceived="20070312023823" -->
<!-- sent="Sun, 11 Mar 2007 19:38:16 -0700" -->
<!-- isosent="20070312023816" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.2rc2 has been posted" -->
<!-- id="5C5559F2-2F75-4F2B-A2F1-8773C3FCFF34_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EA9ACBFF-EA74-4006-B54D-46F0A8F7B818_at_cisco.com" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-11 22:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1360.php">Tim Mattox: "[OMPI devel] Open MPI v1.2rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1358.php">Christian Siebert: "[OMPI devel] announcement of a multicast-based MPI broadcast implementation"</a>
<li><strong>In reply to:</strong> <a href="1357.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure. The message was:
<br>
<p>OOB: Connection to HNP lost
<br>
<p>I have a bigger problem now though. As of rc1, terminating a job no  
<br>
longer works. I'll try rc2 and let you know if the problem persists.  
<br>
Since the API for terminate changed recently, I updated the code to  
<br>
replicate what happens in orterun. However this doesn't seem to work  
<br>
correctly (at least in our case).
<br>
<p>Greg
<br>
<p>On Mar 10, 2007, at 4:11 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Hopefully.  Was it IOF-related?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error was that some in-flight IOF fragments (meaning that they
</span><br>
<span class="quotelev1">&gt; had been read from the local source and were in the process of being
</span><br>
<span class="quotelev1">&gt; sent across OOB) could be incorrectly removed from the list, later
</span><br>
<span class="quotelev1">&gt; causing either a segv in production builds or, more reliably, an
</span><br>
<span class="quotelev1">&gt; assertion failure in debugging builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2007, at 10:49 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks. I was seeing an error when I shut down orted. Sounds like
</span><br>
<span class="quotelev2">&gt;&gt; it's now fixed...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2007, at 5:25 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - An IOF race condition in the shutdown of the orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Some sm btl fixes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Patch to change Libtool 2.0 libltdl's behavior with regards to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt_dlopen'ing  DSOs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 9, 2007, at 7:54 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What changed between rc1 and rc2?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 9, 2007, at 1:50 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The second release condidate of v1.2 is now up on the website:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.2/">http://www.open-mpi.org/software/ompi/v1.2/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please run it through it's paces as best you can.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1360.php">Tim Mattox: "[OMPI devel] Open MPI v1.2rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1358.php">Christian Siebert: "[OMPI devel] announcement of a multicast-based MPI broadcast implementation"</a>
<li><strong>In reply to:</strong> <a href="1357.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
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
