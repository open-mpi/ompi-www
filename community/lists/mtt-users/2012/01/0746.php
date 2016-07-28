<?
$subject_val = "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 16:27:01 2012" -->
<!-- isoreceived="20120105212701" -->
<!-- sent="Fri, 6 Jan 2012 01:26:49 +0400" -->
<!-- isosent="20120105212649" -->
<!-- name="&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;" -->
<!-- email="dayulov_at_[hidden]" -->
<!-- subject="Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn" -->
<!-- id="1822411842.20120106012649_at_compcenter.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E8C31D7F-1719-4B97-899B-5714896FE64D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn<br>
<strong>From:</strong> &#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185; (<em>dayulov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 16:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0747.php">ёлов ƒмитрий: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="0744.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Reply:</strong> <a href="0748.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Thanks a lot.  I see what you mean.
<br>
One  more  question: Is possible to get structure tree of tests?     I
<br>
see  that in INI file that you send me test are get from SVN. It would
<br>
be  great to have example of getting it from tarbal and structure for
<br>
incorporate  new tests into testing. Some documents will be enough for
<br>
understanding.
<br>
<p>Jeff&gt; (moving this from the OMPI user's list...)
<br>
<p>Jeff&gt; MTT is just an engine.  It doesn't really know much/anything
<br>
Jeff&gt; about the tests that it runs -- it just runs them and then
<br>
Jeff&gt; records whether it passed, failed (for a few different
<br>
Jeff&gt; definitions of &quot;failed&quot;), or was skipped.
<br>
<p>Jeff&gt; Hence, you can run pretty much anything through MTT.
<br>
<p>Jeff&gt; In a few cases, we added some specific stdout interpreters to
<br>
Jeff&gt; MTT, like for parsing the output of NetPIPE.  But in most cases,
<br>
Jeff&gt; MTT just looks at the exit status of the test to determine what happened (pass, fail, skip).
<br>
<p>Jeff&gt; Here's a relatively simple MTT .ini file that I recently sent
<br>
Jeff&gt; to ARM to get them started on MTT with Open MPI.  It only has 1
<br>
Jeff&gt; compiler, a simple MPI Details section, and only 2 MPI Get's
<br>
Jeff&gt; (trunk and v1.5).  I left most of the test gets/builds/runs (but
<br>
Jeff&gt; not all of them).  You might want to comment out all the test
<br>
Jeff&gt; gets, leaving just &quot;trivial&quot; uncommented, and use that to get going.
<br>
<p>Jeff&gt; Look in the INI file for comments with my initials (JMS) for
<br>
Jeff&gt; some things you need to fill in.  Note that the &quot;IU Database&quot;
<br>
Jeff&gt; reporter section won't work for you -- it's only for Open MPI
<br>
Jeff&gt; community members to report to our central testing database.
<br>
<p>Jeff&gt; Look at the various Test Get, Test Build, and Test Run sections
<br>
Jeff&gt; to see how things generally flow (feel free to ask questions). 
<br>
Jeff&gt; This file gets all of its tests from SVN checkouts, but MTT can
<br>
Jeff&gt; get tests from SVN, HG, git (IIRC), copying a tarball, copying a
<br>
Jeff&gt; directory tree, ...and possibly some other sources that I've forgotten about.
<br>
<p>Jeff&gt; Remember: MTT is just an engine for building and running tests.
<br>
Jeff&gt; It's not specific to Open MPI (it's barely dependent upon MPI --
<br>
Jeff&gt; we had considered renaming MTT to be the &quot;Middleware Testing
<br>
Jeff&gt; Tool&quot;, but never got around to making the few changes that would
<br>
Jeff&gt; be necessary to generalize the MPI out of the MPI Testing Tool :-) ).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0747.php">ёлов ƒмитрий: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>In reply to:</strong> <a href="0744.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Reply:</strong> <a href="0748.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
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
