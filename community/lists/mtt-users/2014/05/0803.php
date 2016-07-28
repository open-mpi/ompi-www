<?
$subject_val = "Re: [MTT users] To run MTT on our cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 01:04:09 2014" -->
<!-- isoreceived="20140529050409" -->
<!-- sent="Wed, 28 May 2014 22:04:05 -0700" -->
<!-- isosent="20140529050405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] To run MTT on our cluster" -->
<!-- id="9E50E5A8-B017-4CFA-9F5A-A8E90A0DA3DC_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 01:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Gilles Gouaillardet: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Jaison Mulerikkal: "[MTT users] To run MTT on our cluster"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Jaison Mulerikkal: "[MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0804.php">Gilles Gouaillardet: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0804.php">Gilles Gouaillardet: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/06/0807.php">Jaison Mulerikkal: "Re: [MTT users] To run MTT on our cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2014, at 8:29 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<p>Hello - and welcome!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your previous clarification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At our organisation (www.nesi.org.nz) we would like to use MTT for MPI heath check of our clusters.
</span><br>
<p>I actually know some people there! Small world - almost came to work there a few years ago, and have a standing promise to come visit :-)
<br>
<p><span class="quotelev1">&gt; It it okay use MTT, legally, if we sign up to the following agreement. 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>. Whom shall I send this doc? 
</span><br>
<p>There should be an address on the form - it gets sent to:
<br>
<p>Center for Research in Extreme Scale Technologies (CREST)
<br>
ATTN: Andrew Lumsdaine,
<br>
Open MPI 3rd Party Contribution Agreements
<br>
2719 E. 10th Street
<br>
Bloomington, IN 47408
<br>
USA 
<br>
<p>Let us know once you send it and we can proceed - we trust your word that it is &quot;in the mail&quot;.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that is done, how can we install MTT in our clusters? Can you please explain it to me step by step? Or is there any elaborate documentation to get info on it? I have gone through the MTT wiki. It doesn&#146;t explicitly speak about how MTT can be deployed in a stand-alone cluster like ours.
</span><br>
<p>Actually, all you really have to do is clone the git repo for it - all the software is there, and it doesn't require any more installation then setting up a .ini file with the proper configuration. Several examples are included in the repo. I can also share mine with you as it does pretty much what you describe. I have a simple &quot;runmtt.sh&quot; script that executes the tests for me, but it is totally trivial and easily shared. The repo is here:
<br>
<p><a href="https://github.com/open-mpi/mtt">https://github.com/open-mpi/mtt</a>
<br>
<p>You can access it any time you like - we don't need the agreement for MTT itself (only for the tests).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using Easy-Build to install MPI and other libraries. So we may skip those steps in MTT.We just need to run the tests and collect health reports.  From what I understand from the documentation, I have to fetch MPI tests from your svn server each time and run it on our machines.
</span><br>
<p>You actually don't have to do that - you can clone the ompi-tests repo once, and just run the tests from there. It gets updated infrequently, but you can always just do an &quot;svn up&quot; to ensure you have the latest copies. Again, that is an option in your .ini file.
<br>
<p><span class="quotelev1">&gt; Can we collect the results internally and use MTT Reviewer internally to assess it?
</span><br>
<p>Certainly - setting up the database is a bit of a challenge, but once done you can go that route if you like. I'm not the best for those questions, but I'm sure Jeff would be happy to help. He's on travel at the moment, but expected back shortly.
<br>
<p><span class="quotelev1">&gt; Or does it go to a central server outside our organisation? 
</span><br>
<p>We encourage people to submit the results to the central MTT repo so we can all see them - helps us to maintain the code. However, some places prefer not to do so for firewall or security purposes, and that's just fine too.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please help us through these queries? Thanks in advance. 
</span><br>
<p>We are happy to help get you up-and-running! Please don't hesitate to ask, and I'll send my files along as soon as you are ready.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Gilles Gouaillardet: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Jaison Mulerikkal: "[MTT users] To run MTT on our cluster"</a>
<li><strong>In reply to:</strong> <a href="0802.php">Jaison Mulerikkal: "[MTT users] To run MTT on our cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0804.php">Gilles Gouaillardet: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0804.php">Gilles Gouaillardet: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/06/0807.php">Jaison Mulerikkal: "Re: [MTT users] To run MTT on our cluster"</a>
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
