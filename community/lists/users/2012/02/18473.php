<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 06:03:14 2012" -->
<!-- isoreceived="20120215110314" -->
<!-- sent="Wed, 15 Feb 2012 06:03:09 -0500" -->
<!-- isosent="20120215110309" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released" -->
<!-- id="83270D2E-F4C8-4356-A893-BA6048E0C1E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201202151048218900308_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 06:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="18472.php">TERRY DONTJE: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18466.php">alexalex43210: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are many MPI tutorials available.  A very good one that I have referred people to before is:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.citutor.org/browse.php">http://www.citutor.org/browse.php</a>
<br>
<p>(you'll have to sign up for a free account)
<br>
<p>There's 2 levels to the tutorial: introduction and intermediate.
<br>
<p>They should both get you started on MPI / parallel programming.
<br>
<p><p><p>On Feb 14, 2012, at 9:48 PM, alexalex43210 wrote:
<br>
<p><span class="quotelev1">&gt; Hello Benton,
</span><br>
<span class="quotelev1">&gt;   Thanks for your notice.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   But I am a novice for the parallel computation, I often use Fortran to compile my program, now I want to use the Parallel, can you give me some help how to begin?
</span><br>
<span class="quotelev1">&gt;   PS: I learned about OPEN MPI is the choice for my question solution. am I right?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; best wishes to you &amp; good luck
</span><br>
<span class="quotelev1">&gt; yours alex
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; alexalex43210
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Brad Benton
</span><br>
<span class="quotelev1">&gt; Date: 2012-02-15 09:48
</span><br>
<span class="quotelev1">&gt; To: announce
</span><br>
<span class="quotelev1">&gt; Subject: [Open MPI Announce] Open MPI v1.4.5 released
</span><br>
<span class="quotelev1">&gt; The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.4.5. This release is mainly a bug fix release over the v1.4.4 release. We strongly recommend that all users upgrade to version 1.4.5 if possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version 1.4.5 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a list of changes in v1.4.5 as compared to v1.4.4
</span><br>
<span class="quotelev1">&gt; - Fixed the --disable-memory-manager configure switch.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Fix typos in code and man pages.  Thanks to Fujitsu for these fixes.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Improve management of the registration cache; when full, try freeing
</span><br>
<span class="quotelev1">&gt;   old entries and attempt to re-register.
</span><br>
<span class="quotelev1">&gt; - Fixed a data packing pointer alignment issue.  Thanks to Fujitsu
</span><br>
<span class="quotelev1">&gt;   for the patch.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Add ability to turn off warning about having the shared memory backing
</span><br>
<span class="quotelev1">&gt;   store over a networked filesystem.  Thanks to Chris Samuel for this
</span><br>
<span class="quotelev1">&gt;   suggestion.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Removed an unnecessary memmove() and plugged a couple of small memory leaks
</span><br>
<span class="quotelev1">&gt;   in the openib OOB connection setup code.
</span><br>
<span class="quotelev1">&gt; - Fixed some QLogic bugs. Thanks to Mark Debbage from QLogic for the patches.
</span><br>
<span class="quotelev1">&gt; - Fixed problem with MPI_IN_PLACE and other sentinel Fortran constants
</span><br>
<span class="quotelev1">&gt;   on OS X.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Fix SLURM cpus-per-task allocation.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Fix the datatype engine for when data left over from the previous
</span><br>
<span class="quotelev1">&gt;   pack was larger than the allowed space in the pack buffer. Thanks to
</span><br>
<span class="quotelev1">&gt;   Yuki Matsumoto and Takahiro Kawashima for the bug report and the
</span><br>
<span class="quotelev1">&gt;   patch.
</span><br>
<span class="quotelev1">&gt; - Fix Fortran value for MPI_MAX_PORT_NAME.  Thanks to Enzo Dari for
</span><br>
<span class="quotelev1">&gt;   raising the issue.
</span><br>
<span class="quotelev1">&gt; - Workaround an Intel compiler v12.1.0 2011.6.233 vector optimization
</span><br>
<span class="quotelev1">&gt;   bug.
</span><br>
<span class="quotelev1">&gt; - Fix issues on Solaris with the openib BTL.
</span><br>
<span class="quotelev1">&gt; - Fixes for the Oracle Studio 12.2 Fortran compiler.
</span><br>
<span class="quotelev1">&gt; - Update iWARP parameters for the Intel NICs.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; - Fix obscure cases where MPI_ALLGATHER could crash.  Thanks to Andrew
</span><br>
<span class="quotelev1">&gt;   Senin for reporting the problem.
</span><br>
<span class="quotelev1">&gt;   (** also to appear in 1.5.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brad Benton
</span><br>
<span class="quotelev1">&gt; Linux Technology Center, IBM
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
<li><strong>Next message:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="18472.php">TERRY DONTJE: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>In reply to:</strong> <a href="18466.php">alexalex43210: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
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
