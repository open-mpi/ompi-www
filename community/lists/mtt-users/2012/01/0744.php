<?
$subject_val = "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 15:35:08 2012" -->
<!-- isoreceived="20120105203508" -->
<!-- sent="Thu, 5 Jan 2012 15:35:03 -0500" -->
<!-- isosent="20120105203503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn" -->
<!-- id="E8C31D7F-1719-4B97-899B-5714896FE64D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1431686608.20120106002434_at_compcenter.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 15:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2011/02/0743.php">Keith M Matthews: "[MTT users] AUTO: Keith M Matthews/Australia/IBM is out of the office. (returning 07/02/2011)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Reply:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Reply:</strong> <a href="0746.php">Юлов Дмитрий: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(moving this from the OMPI user's list...)
<br>
<p>MTT is just an engine.  It doesn't really know much/anything about the tests that it runs -- it just runs them and then records whether it passed, failed (for a few different definitions of &quot;failed&quot;), or was skipped.
<br>
<p>Hence, you can run pretty much anything through MTT.
<br>
<p>In a few cases, we added some specific stdout interpreters to MTT, like for parsing the output of NetPIPE.  But in most cases, MTT just looks at the exit status of the test to determine what happened (pass, fail, skip).
<br>
<p>Here's a relatively simple MTT .ini file that I recently sent to ARM to get them started on MTT with Open MPI.  It only has 1 compiler, a simple MPI Details section, and only 2 MPI Get's (trunk and v1.5).  I left most of the test gets/builds/runs (but not all of them).  You might want to comment out all the test gets, leaving just &quot;trivial&quot; uncommented, and use that to get going.
<br>
<p>Look in the INI file for comments with my initials (JMS) for some things you need to fill in.  Note that the &quot;IU Database&quot; reporter section won't work for you -- it's only for Open MPI community members to report to our central testing database.
<br>
<p>Look at the various Test Get, Test Build, and Test Run sections to see how things generally flow (feel free to ask questions).  This file gets all of its tests from SVN checkouts, but MTT can get tests from SVN, HG, git (IIRC), copying a tarball, copying a directory tree, ...and possibly some other sources that I've forgotten about.
<br>
<p>Remember: MTT is just an engine for building and running tests.  It's not specific to Open MPI (it's barely dependent upon MPI -- we had considered renaming MTT to be the &quot;Middleware Testing Tool&quot;, but never got around to making the few changes that would be necessary to generalize the MPI out of the MPI Testing Tool :-) ).
<br>
<p><p><p>On Jan 5, 2012, at 3:24 PM, &#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks  a  lot  for  answer.   I  agree  with  you that some tests are
</span><br>
<span class="quotelev1">&gt; available  elsewhere,  but these tests didn't explain how I can to use
</span><br>
<span class="quotelev1">&gt; it  for  with  OpenMPI  MTT framework. Please tell me do you have such
</span><br>
<span class="quotelev1">&gt; document  which  will explain how I could use some external tests with
</span><br>
<span class="quotelev1">&gt; MTT? Unfortunately I didn't find such document nay be you know :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; -- Dmitry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; Hi, sorry for the delay -- I was on vacation and this week has
</span><br>
<span class="quotelev1">&gt; Jeff&gt; been spent mostly in prep for the MPI Forum meeting next week. 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; I'm sloooowly plowing through the mails that piled up during vacation.  More below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; On Jan 5, 2012, at 2:54 PM, &#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody say to me Jeff here or not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I  am  relly would like to have access to tests. What i need to do for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; I'm afraid that our repository is not open to the public.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; The reason is very simple: the majority of tests in there are
</span><br>
<span class="quotelev1">&gt; Jeff&gt; either publicly available elsewhere, or were derived from
</span><br>
<span class="quotelev1">&gt; Jeff&gt; tests/benchmarks that are publicly available elsewhere.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; We have never looked into re-distribution rights of these test
</span><br>
<span class="quotelev1">&gt; Jeff&gt; suites / benchmarks, so we keep that repository closed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff&gt; That being said, like I mentioned above, many of the tests are
</span><br>
<span class="quotelev1">&gt; Jeff&gt; available elsewhere.  E.g., the Intel MPI test suite, the IBM
</span><br>
<span class="quotelev1">&gt; Jeff&gt; MPI test suite, the Intel MPI benchmarks, NetPIPE, ...etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#209;&#131;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;,
</span><br>
<span class="quotelev1">&gt; -- &#208;&#148;&#208;&#184;&#208;&#188;&#208;&#176;                          mailto:dayulov_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2011/02/0743.php">Keith M Matthews: "[MTT users] AUTO: Keith M Matthews/Australia/IBM is out of the office. (returning 07/02/2011)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Reply:</strong> <a href="0745.php">Jeff Squyres: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Reply:</strong> <a href="0746.php">Юлов Дмитрий: "Re: [MTT users] [OMPI users] Request access to ompi-tests directory into svn"</a>
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
