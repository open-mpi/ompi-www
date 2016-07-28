<?
$subject_val = "Re: [MTT users] To run MTT on our cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 09:18:01 2014" -->
<!-- isoreceived="20140529131801" -->
<!-- sent="Thu, 29 May 2014 13:17:58 +0000" -->
<!-- isosent="20140529131758" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] To run MTT on our cluster" -->
<!-- id="E14669D3-885D-4119-A253-F3484988E515_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="330B94F6-21A1-4B2C-938C-12D00E5B3D01_at_auckland.ac.nz" -->
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
<strong>Subject:</strong> Re: [MTT users] To run MTT on our cluster<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 09:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/06/0807.php">Jaison Mulerikkal: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Jaison Mulerikkal: "[MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Ralph and Gilles covered most everything, just let me emphasize a few things:
<br>
<p>- MTT is simply an engine for running tests and gathering results.  Nothing more.
<br>
- MTT actually only includes a trivial test suite for MPI (&quot;hello world&quot; and &quot;send a message around in a ring&quot;).
<br>
- In the Open MPI community project, we have a closed SVN repo for our convenience that includes a whole pile of test suites that we run via MTT.  It's a close repo because we don't own the redistribution rights to most of the test suites (e.g., NetPIPE, IMB, OSU, ...etc.).
<br>
- You absolutely can download these test suites yourself from the greater internet and run them via MTT.  There is nothing magical about our closed SVN repo; it's purely for our own convenience.
<br>
- The MTT web reporter we have at <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a> is for us to monitor the development of Open MPI itself.
<br>
<p>I've seen other admins do what you're proposing (use MTT for MPI/health checking of your cluster).  While there's a bit of a learning curve, MTT is actually pretty great at that kind of stuff -- it can run dozens/hundreds/thousands of tests in an automated fashion and then report the results to a central location (e.g., email, file, and/or your own internal instance of the MTT database/web reporter).
<br>
<p>One other piece of information that may be helpful: a key piece of knowledge that we learned while developing MTT is that every organization wants to do their testing differently.  That's why there's so many CLI and configurable options to MTT.
<br>
<p>Hope that helps!  
<br>
<p><p><p>On May 28, 2014, at 11:29 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your previous clarification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At our organisation (www.nesi.org.nz) we would like to use MTT for MPI heath check of our clusters. It it okay use MTT, legally, if we sign up to the following agreement. 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>. Whom shall I send this doc? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that is done, how can we install MTT in our clusters? Can you please explain it to me step by step? Or is there any elaborate documentation to get info on it? I have gone through the MTT wiki. It doesn&#146;t explicitly speak about how MTT can be deployed in a stand-alone cluster like ours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using Easy-Build to install MPI and other libraries. So we may skip those steps in MTT.We just need to run the tests and collect health reports.  From what I understand from the documentation, I have to fetch MPI tests from your svn server each time and run it on our machines. Can we collect the results internally and use MTT Reviewer internally to assess it? Or does it go to a central server outside our organisation? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please help us through these queries? Thanks in advance. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison Mulerikkal, PhD
</span><br>
<span class="quotelev1">&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev1">&gt; The University of Auckland
</span><br>
<span class="quotelev1">&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev1">&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev1">&gt; w: www.jaison.me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23/05/2014, at 3:49 pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do it all the time myself - the ini file contains this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [MPI get: My Installation]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; # Leave this parameter blank to
</span><br>
<span class="quotelev2">&gt;&gt; # have MTT search your path for an MPI
</span><br>
<span class="quotelev2">&gt;&gt; # alreadyinstalled_dir = /your/installation
</span><br>
<span class="quotelev2">&gt;&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [MPI install: My Installation]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_get = My Installation
</span><br>
<span class="quotelev2">&gt;&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Everything else proceeds the same
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 22, 2014, at 8:14 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am just referring to the following previous query at MTT forums, because I too has a similar requirement. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to skip the MPI Get and Install phases, and simply point MTT to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my pre-built/installed Open MPI. Can this be done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php">http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reply mentioned that this functionality was in your TODO list. Have you implemented it in anyway at all?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are running a HPC cluster and we use easy-build to make our modules (including MPI) available to our users. So we may not want to Get, Install, Build steps at MTT, but the Run section to test the stability of the systems. Is it possible to do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanking you in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jaison Mulerikkal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The University of Auckland
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w: www.jaison.me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/06/0807.php">Jaison Mulerikkal: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0805.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Jaison Mulerikkal: "[MTT users] To run MTT on our cluster"</a>
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
