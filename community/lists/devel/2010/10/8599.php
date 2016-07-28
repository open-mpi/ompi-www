<?
$subject_val = "Re: [OMPI devel] Libevent update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 11:06:37 2010" -->
<!-- isoreceived="20101012150637" -->
<!-- sent="Tue, 12 Oct 2010 09:06:26 -0600" -->
<!-- isosent="20101012150626" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Libevent update" -->
<!-- id="C2994CCC-2AAB-4269-A7E2-DE15048E6F93_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="634A2214-BB19-4BB9-94F0-2E9BAE1B2B47_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Libevent update<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 11:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8600.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8505.php">Ralph Castain: "Re: [OMPI devel] Libevent update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, we seem to have this fixed finally. I've confirmed that the libevent 2.0 upgrade is working. Jeff and I plan to do some further cleanup of the configure integration, but that will be transparent to operations.
<br>
<p>So please check the system out:
<br>
<p>http:/bitbucket.org/rhc/ompi-lib2
<br>
<p>and let me know if you see any problems. Otherwise, I will bring this to the trunk Oct 22nd.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Sep 18, 2010, at 6:12 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hold off on this a little. I discovered a problem with the stupid build system again that is causing libevent to try and install when it shouldn't. Afraid I'll have to wait for help from the &quot;build guru&quot; when he returns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll update you when the build system allows us to continue.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2010, at 10:53 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As mentioned on the telecons and in prior mails, I have been working on updating the event library to libevent 2.0. While doing so, I have significantly simplified the integration so that we can perform such updates much quicker/easier in the future. Basically, it now requires simply unpacking the tarball and modifying two files to include a line or two.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because of the integration change, it is possible that some things were missed. Therefore, it would be a REALLY GOOD IDEA for people to test my Mercurial branch before I bring this stuff over to the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See the branch at http:/bitbucket.org/rhc/ompi-lib2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know we have a bad history of people not doing such testing, but I'm asking you to make a special effort here. Otherwise, you really don't have a good reason to complain later. :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This update retains all the prior behaviors - it just puts libevent 2.0 as the engine. Soon after this has soaked a little, we will begin implementing the advanced features available in this update. Specifically, we will create separate event bases for the MPI and ORTE layers, thus allowing us to progress those layers independent of each other.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will continue to do some work on the branch (cleanups, remove opal_progress_thread stuff since it doesn't work anyway), but will ensure that the branch always works for those of you testing it. Barring any reported problems, I will check this into the trunk in about a week.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8600.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8598.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8505.php">Ralph Castain: "Re: [OMPI devel] Libevent update"</a>
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
