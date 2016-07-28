<?
$subject_val = "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 15:16:25 2010" -->
<!-- isoreceived="20100729191625" -->
<!-- sent="Thu, 29 Jul 2010 15:17:13 -0400" -->
<!-- isosent="20100729191713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki" -->
<!-- id="704DF710-622D-4A86-91B8-BAFB3ABC55BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BC44D13F-24AA-4F0C-B650-5DE4BA2330C6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 15:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2010/10/0144.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Ralph Castain: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Ralph Castain: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome -- thanks!
<br>
<p>On Jul 29, 2010, at 1:10 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I might be able to take a look at this for you...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2010, at 10:00 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 28, 2010, at 8:58 PM, Radu C wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Having no way to send a report without subscribing to a mailing list, here I am...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just started looking into Open MPI, and so far I found a few errors in the man pages that are posted on the Open MPI website:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI.3.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/OpenMPI.3.php">http://www.open-mpi.org/doc/v1.4/man3/OpenMPI.3.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note that MPI does not guarantee that an MPI pro-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       MPI_ERR_BUFFER           1      Invalid buffer pointer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ugh.  It looks like all of these are bugs in the man2html.  I spent a bunch of time twonking around trying to figure out how to get reasonable output but failed.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone have any time to look at this, perchance?  I wrote a simple perl script to generate all of those man pages:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/make-html-man-pages.pl">https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/make-html-man-pages.pl</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It takes 2 arguments; you run it like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ./make-html-man-pages --mandir /path/to/openmpi/share/man --version 1.4.2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where the /path... is the directory where the 1.4.2 man pages were installed.  It should generate a pile of .php files alongside all of the existing man pages (so you might not want to run this in a production installation).  After it runs, look at man/man3/MPI.3.php -- you'll see that it's just snipped.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Haven't checked other man pages. Still looking for a &quot;Hello World&quot; tutorial, to have a taste of Open MPI, see if I like it and if I'd like some more, on this page: <a href="http://www.open-mpi.org/projects/user-docs/">http://www.open-mpi.org/projects/user-docs/</a> I followed the link to the wiki: <a href="https://svn.open-mpi.org/trac/ompi-user-docs/wiki">https://svn.open-mpi.org/trac/ompi-user-docs/wiki</a>. But it says Environment not found. Ended up on Google, as suggested by the FAQ. Hope I like what I see :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ick.  I'll see if I can get that fixed.  As noted on the web page, the user-docs sub project has fallen through the cracks and is in desperate need of a leader.  Any volunteers?
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
<span class="quotelev2">&gt; &gt; docs mailing list
</span><br>
<span class="quotelev2">&gt; &gt; docs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2010/10/0144.php">Jed Brown: "[OMPI docs] [PATCH] Fix wording of MPI_IN_PLACE usage for MPI_Allgatherv man page"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Ralph Castain: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Ralph Castain: "Re: [OMPI docs] Errors in man pages (on the web, anyway), dead wiki"</a>
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
