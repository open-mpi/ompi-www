<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 09:03:50 2009" -->
<!-- isoreceived="20090720130350" -->
<!-- sent="Mon, 20 Jul 2009 14:03:46 +0100" -->
<!-- isosent="20090720130346" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released" -->
<!-- id="87bpnfv74d.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1863806-1583-49BF-B511-613385C41C49_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 09:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10010.php">Hardik Patel: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<li><strong>In reply to:</strong> <a href="9986.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10040.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="10040.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hmmm...there should be messages on both the user and devel lists
</span><br>
<span class="quotelev1">&gt; regarding binary compatibility at the MPI level being promised for
</span><br>
<span class="quotelev1">&gt; 1.3.2 and beyond.
</span><br>
<p>This is confusing.  As I read the quotes below, recompilation is
<br>
necessary, and the announcement has items which suggest at least some of
<br>
the ABI has changed.
<br>
<p>Could the promise also specify that future ABI changes will result in
<br>
ELF version changes to avoid any more of the mess with the 1.2 and 1.3
<br>
libraries wrongly appearing as compatible to the dynamic linker?  It
<br>
should just be a question of managing changes and doing the right thing
<br>
with libtool.
<br>
<p><span class="quotelev1">&gt; On Jul 15, 2009, at 3:29 PM, Jim Kress wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Did not see any other email on the list wrt this topic.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your response.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, July 15, 2009 4:26 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; released
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe that was the intent, per other emails on that subject.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, I am not personally aware of people who have tested
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it - though they may well exist.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jul 15, 2009 at 2:18 PM, Jim Kress
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;jimkress_58_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	 &gt; Does use of 1.3.3 require recompilation of applications that
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; were compiled using 1.3.2?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of jimkress_58
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; Sent: Tuesday, July 14, 2009 3:05 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; Subject: Re: [OMPI users] [Open MPI Announce] Open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI v1.3.3 released
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; Does use of 1.3.3 require recompilation of applications that
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; were compiled using 1.3.2?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; 	&gt; Jim
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10010.php">Hardik Patel: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<li><strong>In reply to:</strong> <a href="9986.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10040.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Reply:</strong> <a href="10040.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
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
