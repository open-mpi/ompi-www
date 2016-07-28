<?
$subject_val = "Re: [MTT users] To run MTT on our cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 19:20:03 2014" -->
<!-- isoreceived="20140610232003" -->
<!-- sent="Tue, 10 Jun 2014 16:19:59 -0700" -->
<!-- isosent="20140610231959" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] To run MTT on our cluster" -->
<!-- id="B961749F-0CB3-4FCE-AC75-A17A881E61CF_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9E600B9D-E2EA-45BC-99EB-E6ECC3F9C0F2_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 19:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0811.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0809.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>In reply to:</strong> <a href="0809.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0811.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0811.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0812.php">Jaison Mulerikkal: "Re: [MTT users] To run MTT on our cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a chance to think about this some more, and I'm wondering if this falls into some new category of &quot;member&quot;. Personally, I would really welcome getting the MTT results from another site as it would expand coverage of various environments, something we are beginning to lack. So even if Jaison et al aren't going to contribute code, contributing test result data is a valuable contribution in itself.
<br>
<p>I think this fits to your question about testing nightly OMPI tarballs. If Jaison can run tests with our tarballs and tell us the results, and that meets his needs to characterize/validate their cluster, then it seems like both sides win.
<br>
<p><p>On Jun 10, 2014, at 7:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in replying -- I was at the MPI Fourm last week, and my available time for email was limited.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think there's three issues on the table:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Access to the closed ompi-tests SVN repo
</span><br>
<span class="quotelev1">&gt; 2. Access to some example MTT .ini files
</span><br>
<span class="quotelev1">&gt; 3. Submitting data to mtt.open-mpi.org
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Forgive me -- as you'll see below, you're raising a corner case that we have not previously encountered...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I ask what your intentions are?  We typically haven't given access to #1 or #3 except to developer organizations in the Open MPI community itself (signing the IP agreement is the first step).  This is not to say that we won't -- it's just that you happen to be the first organization who has expressed a more-than-passing interest in #1 and #3 :-), but you do not appear to be interested in becoming a contributor or member Open MPI organization.  We haven't really thought about this case before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to reiterate two points:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. You don't need to sign the Open MPI IP agreement to use MTT; MTT is open source software that anyone can freely use under the BSD license.
</span><br>
<span class="quotelev1">&gt; 2. Most of the tests in the ompi-tests repo are publicly available; we just don't have redistribution rights (which is why our repo is closed).  We have augmented these publicly-available test suites with a bunch of home-grown tests, too, but I don't know if they're generally useful outside of Open MPI (i.e., some test for specific Open MPI behavior).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I don't think I was specific about this before, but submitting data to mtt.open-mpi.org is intended for tracking the nightly development tarballs.  It's not meant as a general MTT database hosting platform for individual organizations' internal testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess my questions are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Do you really want/need access to our SVN repo, or do you just want/need a list of the test suites that you can download from the internet yourself?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Do you intend to test nightly Open MPI tarballs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your patience in helping us think through the issues; this is what happens when you happen to be first.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2014, at 8:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2014, at 4:48 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph and others,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your replies. Very useful and encouraging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have posted the signed copy of Corporate Contributor License Agreement to the address you have given. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope you can give us access to the tests-repo now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to let Jeff do this - he's off to the MPI Forum, and so it may not happen for a few days
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would like to get the configuration file (.ini) that you use and to get a copy of &#147;runmtt.sh&#148; that you run. That will help me understand how it is actually used in  cluster. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See attached
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will think about setting up a database for ourselves. After talking to my manager, it seems that he is not fuzzy about using your external database, especially in the  beginning. So we may begin with just doing that and later setup something for ourselves. Thanks again for your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No problem - my .ini is setup to report to our database.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jaison Mulerikkal, PhD
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 29/05/2014, at 5:04 pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 28, 2014, at 8:29 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello - and welcome!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your previous clarification.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At our organisation (www.nesi.org.nz) we would like to use MTT for MPI heath check of our clusters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I actually know some people there! Small world - almost came to work there a few years ago, and have a standing promise to come visit :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It it okay use MTT, legally, if we sign up to the following agreement. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>. Whom shall I send this doc? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There should be an address on the form - it gets sent to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Research in Extreme Scale Technologies (CREST)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ATTN: Andrew Lumsdaine,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI 3rd Party Contribution Agreements
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2719 E. 10th Street
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bloomington, IN 47408
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USA 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let us know once you send it and we can proceed - we trust your word that it is &quot;in the mail&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If that is done, how can we install MTT in our clusters? Can you please explain it to me step by step? Or is there any elaborate documentation to get info on it? I have gone through the MTT wiki. It doesn&#146;t explicitly speak about how MTT can be deployed in a stand-alone cluster like ours.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, all you really have to do is clone the git repo for it - all the software is there, and it doesn't require any more installation then setting up a .ini file with the proper configuration. Several examples are included in the repo. I can also share mine with you as it does pretty much what you describe. I have a simple &quot;runmtt.sh&quot; script that executes the tests for me, but it is totally trivial and easily shared. The repo is here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/mtt">https://github.com/open-mpi/mtt</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can access it any time you like - we don't need the agreement for MTT itself (only for the tests).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We are using Easy-Build to install MPI and other libraries. So we may skip those steps in MTT.We just need to run the tests and collect health reports.  From what I understand from the documentation, I have to fetch MPI tests from your svn server each time and run it on our machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You actually don't have to do that - you can clone the ompi-tests repo once, and just run the tests from there. It gets updated infrequently, but you can always just do an &quot;svn up&quot; to ensure you have the latest copies. Again, that is an option in your .ini file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can we collect the results internally and use MTT Reviewer internally to assess it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Certainly - setting up the database is a bit of a challenge, but once done you can go that route if you like. I'm not the best for those questions, but I'm sure Jeff would be happy to help. He's on travel at the moment, but expected back shortly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Or does it go to a central server outside our organisation? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We encourage people to submit the results to the central MTT repo so we can all see them - helps us to maintain the code. However, some places prefer not to do so for firewall or security purposes, and that's just fine too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you please help us through these queries? Thanks in advance. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are happy to help get you up-and-running! Please don't hesitate to ask, and I'll send my files along as soon as you are ready.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jaison Mulerikkal, PhD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The University of Auckland
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; w: www.jaison.me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 23/05/2014, at 3:49 pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I do it all the time myself - the ini file contains this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [MPI get: My Installation]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Leave this parameter blank to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # have MTT search your path for an MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # alreadyinstalled_dir = /your/installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [MPI install: My Installation]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi_get = My Installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Everything else proceeds the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 22, 2014, at 8:14 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am just referring to the following previous query at MTT forums, because I too has a similar requirement. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I want to skip the MPI Get and Install phases, and simply point MTT to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; my pre-built/installed Open MPI. Can this be done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php">http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The reply mentioned that this functionality was in your TODO list. Have you implemented it in anyway at all?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We are running a HPC cluster and we use easy-build to make our modules (including MPI) available to our users. So we may not want to Get, Install, Build steps at MTT, but the Run section to test the stability of the systems. Is it possible to do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanking you in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jaison Mulerikkal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The University of Auckland
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; w: www.jaison.me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2014, at 4:48 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph and others,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your replies. Very useful and encouraging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have posted the signed copy of Corporate Contributor License Agreement to the address you have given. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope you can give us access to the tests-repo now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to let Jeff do this - he's off to the MPI Forum, and so it may not happen for a few days
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would like to get the configuration file (.ini) that you use and to get a copy of &#147;runmtt.sh&#148; that you run. That will help me understand how it is actually used in  cluster. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See attached
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will think about setting up a database for ourselves. After talking to my manager, it seems that he is not fuzzy about using your external database, especially in the  beginning. So we may begin with just doing that and later setup something for ourselves. Thanks again for your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No problem - my .ini is setup to report to our database.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bend-local.ini&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;1_Warning.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;2_Warning.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jaison Mulerikkal, PhD
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 29/05/2014, at 5:04 pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 28, 2014, at 8:29 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello - and welcome!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your previous clarification.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At our organisation (www.nesi.org.nz) we would like to use MTT for MPI heath check of our clusters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I actually know some people there! Small world - almost came to work there a few years ago, and have a standing promise to come visit :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It it okay use MTT, legally, if we sign up to the following agreement. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>. Whom shall I send this doc? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There should be an address on the form - it gets sent to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Research in Extreme Scale Technologies (CREST)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ATTN: Andrew Lumsdaine,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI 3rd Party Contribution Agreements
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2719 E. 10th Street
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bloomington, IN 47408
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USA 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let us know once you send it and we can proceed - we trust your word that it is &quot;in the mail&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If that is done, how can we install MTT in our clusters? Can you please explain it to me step by step? Or is there any elaborate documentation to get info on it? I have gone through the MTT wiki. It doesn&#146;t explicitly speak about how MTT can be deployed in a stand-alone cluster like ours.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Actually, all you really have to do is clone the git repo for it - all the software is there, and it doesn't require any more installation then setting up a .ini file with the proper configuration. Several examples are included in the repo. I can also share mine with you as it does pretty much what you describe. I have a simple &quot;runmtt.sh&quot; script that executes the tests for me, but it is totally trivial and easily shared. The repo is here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/mtt">https://github.com/open-mpi/mtt</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can access it any time you like - we don't need the agreement for MTT itself (only for the tests).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We are using Easy-Build to install MPI and other libraries. So we may skip those steps in MTT.We just need to run the tests and collect health reports.  From what I understand from the documentation, I have to fetch MPI tests from your svn server each time and run it on our machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You actually don't have to do that - you can clone the ompi-tests repo once, and just run the tests from there. It gets updated infrequently, but you can always just do an &quot;svn up&quot; to ensure you have the latest copies. Again, that is an option in your .ini file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can we collect the results internally and use MTT Reviewer internally to assess it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Certainly - setting up the database is a bit of a challenge, but once done you can go that route if you like. I'm not the best for those questions, but I'm sure Jeff would be happy to help. He's on travel at the moment, but expected back shortly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Or does it go to a central server outside our organisation? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We encourage people to submit the results to the central MTT repo so we can all see them - helps us to maintain the code. However, some places prefer not to do so for firewall or security purposes, and that's just fine too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you please help us through these queries? Thanks in advance. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are happy to help get you up-and-running! Please don't hesitate to ask, and I'll send my files along as soon as you are ready.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jaison Mulerikkal, PhD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The University of Auckland
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; w: www.jaison.me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 23/05/2014, at 3:49 pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I do it all the time myself - the ini file contains this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [MPI get: My Installation]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Leave this parameter blank to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # have MTT search your path for an MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # alreadyinstalled_dir = /your/installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [MPI install: My Installation]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpi_get = My Installation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Everything else proceeds the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 22, 2014, at 8:14 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am just referring to the following previous query at MTT forums, because I too has a similar requirement. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I want to skip the MPI Get and Install phases, and simply point MTT to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; my pre-built/installed Open MPI. Can this be done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php">http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The reply mentioned that this functionality was in your TODO list. Have you implemented it in anyway at all?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We are running a HPC cluster and we use easy-build to make our modules (including MPI) available to our users. So we may not want to Get, Install, Build steps at MTT, but the Run section to test the stability of the systems. Is it possible to do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanking you in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jaison Mulerikkal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The University of Auckland
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; w: www.jaison.me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0811.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0809.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>In reply to:</strong> <a href="0809.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0811.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0811.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0812.php">Jaison Mulerikkal: "Re: [MTT users] To run MTT on our cluster"</a>
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
