<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 09:33:01 2005" -->
<!-- isoreceived="20050926143301" -->
<!-- sent="Mon, 26 Sep 2005 10:32:52 -0400" -->
<!-- isosent="20050926143252" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  mpif.h problems" -->
<!-- id="ef66328c4dff343dd4b8e4f685a3e15a_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050926122421.GB24525_at_duckhorn.lanl.gov" -->
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
<strong>Date:</strong> 2005-09-26 09:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
<li><strong>In reply to:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thanks.
<br>
<p>I apologize -- I made this fix several days ago and forgot to commit 
<br>
it.  :-\
<br>
<p>We try not to commit changes to the configure/build system during the 
<br>
US work day, so I'll commit this stuff tonight (i.e., should be in 
<br>
tomorrow's tarball).
<br>
<p><p><p>On Sep 26, 2005, at 8:24 AM, David R. (Chip) Kent IV wrote:
<br>
<p><span class="quotelev1">&gt; I was able to get the code to compile and run by including only these 3
</span><br>
<span class="quotelev1">&gt; constants.  Thanks for fixing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 23, 2005 at 11:35:14AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 21, 2005, at 3:37 PM, David R. (Chip) Kent IV wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I managed to find a number of problems with the mpif.h when I tried 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a big application.  It looks like a lot of key constants are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this file.  So far, MPI_SEEK_SET, MPI_MODE_CREATE, MPI_MODE_WRONLY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have broken the build.  I've added them to mpif.h as I find them so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can get the build to go, but I assume there are many more values
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (sorry I didn't reply earlier; was traveling with limited connectivity
</span><br>
<span class="quotelev2">&gt;&gt; when you sent this)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yoinks.  Looks like we forgot to add the MPI-2 IO constants into
</span><br>
<span class="quotelev2">&gt;&gt; mpif.h; thanks for finding this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll go add them and take a swipe through the file to see if I can 
</span><br>
<span class="quotelev2">&gt;&gt; find
</span><br>
<span class="quotelev2">&gt;&gt; any others that we're missing.  Did you find any others that are
</span><br>
<span class="quotelev2">&gt;&gt; missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; David R. &quot;Chip&quot; Kent IV
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; High Performance Computing Environments Group (CCN-8)
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (505)665-5021
</span><br>
<span class="quotelev1">&gt; drkent_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is &quot;Technical data or Software  Publicly
</span><br>
<span class="quotelev1">&gt; Available&quot; or &quot;Correspondence&quot;.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0410.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
<li><strong>In reply to:</strong> <a href="0408.php">David R. (Chip) Kent IV: "Re:  mpif.h problems"</a>
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
