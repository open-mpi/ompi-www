<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 10 07:11:28 2007" -->
<!-- isoreceived="20070310121128" -->
<!-- sent="Sat, 10 Mar 2007 07:11:06 -0500" -->
<!-- isosent="20070310121106" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.2rc2 has been posted" -->
<!-- id="EA9ACBFF-EA74-4006-B54D-46F0A8F7B818_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ECC23E64-152A-4BBB-A4E7-124FE5F53577_at_computer.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-10 07:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1358.php">Christian Siebert: "[OMPI devel] announcement of a multicast-based MPI broadcast implementation"</a>
<li><strong>Previous message:</strong> <a href="1356.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="1356.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1359.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>Reply:</strong> <a href="1359.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hopefully.  Was it IOF-related?
<br>
<p>The error was that some in-flight IOF fragments (meaning that they  
<br>
had been read from the local source and were in the process of being  
<br>
sent across OOB) could be incorrectly removed from the list, later  
<br>
causing either a segv in production builds or, more reliably, an  
<br>
assertion failure in debugging builds.
<br>
<p><p><p>On Mar 9, 2007, at 10:49 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Thanks. I was seeing an error when I shut down orted. Sounds like
</span><br>
<span class="quotelev1">&gt; it's now fixed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2007, at 5:25 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - An IOF race condition in the shutdown of the orted
</span><br>
<span class="quotelev2">&gt;&gt; - Some sm btl fixes
</span><br>
<span class="quotelev2">&gt;&gt; - Patch to change Libtool 2.0 libltdl's behavior with regards to
</span><br>
<span class="quotelev2">&gt;&gt; lt_dlopen'ing  DSOs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2007, at 7:54 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What changed between rc1 and rc2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 9, 2007, at 1:50 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The second release condidate of v1.2 is now up on the website:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.2/">http://www.open-mpi.org/software/ompi/v1.2/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please run it through it's paces as best you can.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1358.php">Christian Siebert: "[OMPI devel] announcement of a multicast-based MPI broadcast implementation"</a>
<li><strong>Previous message:</strong> <a href="1356.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="1356.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1359.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
<li><strong>Reply:</strong> <a href="1359.php">Greg Watson: "Re: [OMPI devel] Open MPI v1.2rc2 has been posted"</a>
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
