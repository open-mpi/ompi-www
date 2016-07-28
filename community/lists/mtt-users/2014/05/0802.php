<?
$subject_val = "[MTT users] To run MTT on our cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 23:29:39 2014" -->
<!-- isoreceived="20140529032939" -->
<!-- sent="Thu, 29 May 2014 15:29:21 +1200" -->
<!-- isosent="20140529032921" -->
<!-- name="Jaison Mulerikkal" -->
<!-- email="j.mulerikkal_at_[hidden]" -->
<!-- subject="[MTT users] To run MTT on our cluster" -->
<!-- id="330B94F6-21A1-4B2C-938C-12D00E5B3D01_at_auckland.ac.nz" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9002B651-D26D-4C3B-B6F1-31191A317C31_at_open-mpi.org" -->
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
<strong>Subject:</strong> [MTT users] To run MTT on our cluster<br>
<strong>From:</strong> Jaison Mulerikkal (<em>j.mulerikkal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 23:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0803.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0803.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0806.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for your previous clarification.
<br>
<p>At our organisation (www.nesi.org.nz) we would like to use MTT for MPI heath check of our clusters. It it okay use MTT, legally, if we sign up to the following agreement. 
<br>
<a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>. Whom shall I send this doc? 
<br>
<p>If that is done, how can we install MTT in our clusters? Can you please explain it to me step by step? Or is there any elaborate documentation to get info on it? I have gone through the MTT wiki. It doesn&#146;t explicitly speak about how MTT can be deployed in a stand-alone cluster like ours.
<br>
<p>We are using Easy-Build to install MPI and other libraries. So we may skip those steps in MTT.We just need to run the tests and collect health reports.  From what I understand from the documentation, I have to fetch MPI tests from your svn server each time and run it on our machines. Can we collect the results internally and use MTT Reviewer internally to assess it? Or does it go to a central server outside our organisation? 
<br>
<p>Can you please help us through these queries? Thanks in advance. 
<br>
<p>Jaison Mulerikkal, PhD
<br>
New Zealand eScience Infrastructure
<br>
The University of Auckland
<br>
e: j.mulerikkal_at_[hidden]
<br>
p: +64 9 923 2194 (internal ext: 82194)
<br>
w: www.jaison.me
<br>
<p><p><p><p><p>On 23/05/2014, at 3:49 pm, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I do it all the time myself - the ini file contains this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: My Installation]
</span><br>
<span class="quotelev1">&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev1">&gt; # Leave this parameter blank to
</span><br>
<span class="quotelev1">&gt; # have MTT search your path for an MPI
</span><br>
<span class="quotelev1">&gt; # alreadyinstalled_dir = /your/installation
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: My Installation]
</span><br>
<span class="quotelev1">&gt; mpi_get = My Installation
</span><br>
<span class="quotelev1">&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything else proceeds the same
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 22, 2014, at 8:14 PM, Jaison Mulerikkal &lt;j.mulerikkal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am just referring to the following previous query at MTT forums, because I too has a similar requirement. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------
</span><br>
<span class="quotelev2">&gt;&gt; I want to skip the MPI Get and Install phases, and simply point MTT to 
</span><br>
<span class="quotelev2">&gt;&gt; my pre-built/installed Open MPI. Can this be done
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php">http://www.open-mpi.org/community/lists/mtt-users/2006/06/0013.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reply mentioned that this functionality was in your TODO list. Have you implemented it in anyway at all?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are running a HPC cluster and we use easy-build to make our modules (including MPI) available to our users. So we may not want to Get, Install, Build steps at MTT, but the Run section to test the stability of the systems. Is it possible to do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanking you in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jaison Mulerikkal
</span><br>
<span class="quotelev2">&gt;&gt; New Zealand eScience Infrastructure
</span><br>
<span class="quotelev2">&gt;&gt; The University of Auckland
</span><br>
<span class="quotelev2">&gt;&gt; e: j.mulerikkal_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; p: +64 9 923 2194 (internal ext: 82194)
</span><br>
<span class="quotelev2">&gt;&gt; w: www.jaison.me
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<li><strong>In reply to:</strong> <a href="0801.php">Ralph Castain: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0803.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0803.php">Ralph Castain: "Re: [MTT users] To run MTT on our cluster"</a>
<li><strong>Reply:</strong> <a href="0806.php">Jeff Squyres (jsquyres): "Re: [MTT users] To run MTT on our cluster"</a>
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
