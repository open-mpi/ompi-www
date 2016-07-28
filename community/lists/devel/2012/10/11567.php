<?
$subject_val = "Re: [OMPI devel] Open-mpi in Fedora 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 16:55:49 2012" -->
<!-- isoreceived="20121005205549" -->
<!-- sent="Fri, 5 Oct 2012 16:55:44 -0400" -->
<!-- isosent="20121005205544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-mpi in Fedora 5" -->
<!-- id="84652E59-A5A7-404E-A51A-622AFF76010F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY166-W21A8471CA29EE85420F453CC8B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-mpi in Fedora 5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 16:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11568.php">Gutierrez, Samuel K: "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>Previous message:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2012, at 3:40 PM, Sandra Guija wrote:
<br>
<p><span class="quotelev1">&gt; I decided to use an environment with Fedora 5 and gcc 4.1.0.
</span><br>
<span class="quotelev1">&gt; I tried to installed 1.6.2 and it failed, then tried 1.4.5 and it failed, then 1.2.9 and I did not get any error.
</span><br>
<p>I know that we are sometimes a little slow to answer user emails, but you need to give us more than a few hours to answer before re-posting your mails.  :-)
<br>
<p>If you want to see if there are easy fixes to why 1.4.x and/or 1.6.x fail to compile, see this page: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>  Send all the info listed on that page.
<br>
<p><span class="quotelev1">&gt; how I can check if the installation works, prior to configure the cluster
</span><br>
<p>See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2012/03/18846.php">http://www.open-mpi.org/community/lists/users/2012/03/18846.php</a>
<br>
<p>We say something quite similar in the (1.6.x) README file:
<br>
<p>When verifying a new Open MPI installation, we recommend running three
<br>
tests:
<br>
<p>-----
<br>
1. Use &quot;mpirun&quot; to launch a non-MPI program (e.g., hostname or uptime)
<br>
&nbsp;&nbsp;&nbsp;across multiple nodes.
<br>
<p>2. Use &quot;mpirun&quot; to launch a trivial MPI program that does no MPI
<br>
&nbsp;&nbsp;&nbsp;communication (e.g., the hello_c program in the examples/ directory
<br>
&nbsp;&nbsp;&nbsp;in the Open MPI distribution).
<br>
<p>3. Use &quot;mpirun&quot; to launch a trivial MPI program that sends and
<br>
&nbsp;&nbsp;&nbsp;receives a few MPI messages (e.g., the ring_c program in the
<br>
&nbsp;&nbsp;&nbsp;examples/ directory in the Open MPI distribution).
<br>
<p>If you can run all three of these tests successfully, that is a good
<br>
indication that Open MPI built and installed properly.
<br>
-----
<br>
<p><span class="quotelev1">&gt; Also, it will be ok if I copy the openmpi-1.2.9  directory to the other nodes? The installation took like almost 3 hours.
</span><br>
<p>Wow; configuration / compilation of Open MPI took *3 hours*?  I'm guessing you have very old / low-power processors, or very slow network filesystem access...?
<br>
<p>See this FAQ information on where to install OMPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
<p><span class="quotelev1">&gt; I sent the &quot;ccIVTymL.out&quot; file to the forum but my mail is waiting for moderator approval.
</span><br>
<p>It likely won't be approved.  Send a smaller attachment, please, such as a compressed text file (see the support page, above).  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11568.php">Gutierrez, Samuel K: "[OMPI devel] RFC: Proposed Fix for mmap Bus Error Due to an Inadequate Amount of Disk Space"</a>
<li><strong>Previous message:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<li><strong>In reply to:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11571.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
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
