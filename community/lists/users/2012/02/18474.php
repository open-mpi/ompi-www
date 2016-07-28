<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 07:44:49 2012" -->
<!-- isoreceived="20120215124449" -->
<!-- sent="Wed, 15 Feb 2012 13:44:23 +0100" -->
<!-- isosent="20120215124423" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released" -->
<!-- id="0CE65167-C4D7-421C-AAC1-41E34FE51C66_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 07:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18475.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>In reply to:</strong> <a href="18466.php">alexalex43210: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Reply:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.02.2012 um 03:48 schrieb alexalex43210:
<br>
<p><span class="quotelev1">&gt;   But I am a novice for the parallel computation, I often use Fortran to compile my program, now I want to use the Parallel, can you give me some help how to begin?
</span><br>
<span class="quotelev1">&gt;   PS: I learned about OPEN MPI is the choice for my question solution. am I right?
</span><br>
<p>This depends on your application and how easy it can be adopted to split the problem into smaller parts. It could also be the case, that you want to stay on one node only to use additional cores and could parallelize it better by using OpenMP, where all threads operate on the same memory area on a single node.
<br>
<p><a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
<br>
<p>It's built into many compilers by default nowadays.
<br>
<p>In addition to the online courses Jeff mentioned there are several books available like Parallel Programming with MPI by Peter Pacheco (although it covers only MPI-1 due to its age <a href="http://www.cs.usfca.edu/~peter/ppmpi/">http://www.cs.usfca.edu/~peter/ppmpi/</a>), Parallel Programming in C with MPI and OpenMP by Michael Quinn.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; best wishes to you &amp; good luck
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18475.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18473.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>In reply to:</strong> <a href="18466.php">alexalex43210: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Reply:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
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
