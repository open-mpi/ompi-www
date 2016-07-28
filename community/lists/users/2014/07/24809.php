<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 18:30:23 2014" -->
<!-- isoreceived="20140717223023" -->
<!-- sent="Thu, 17 Jul 2014 22:29:51 +0000" -->
<!-- isosent="20140717222951" -->
<!-- name="Fab Tillier" -->
<!-- email="ftillier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013" -->
<!-- id="e0f7a827c506449096bf69b45fbead54_at_DFM-CO1MBX15-02.exchange.corp.microsoft.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] latest stable and win7/msvc2013" -->
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
<strong>Subject:</strong> Re: [OMPI users] latest stable and win7/msvc2013<br>
<strong>From:</strong> Fab Tillier (<em>ftillier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 18:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24808.php">n8tm: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Maybe in reply to:</strong> <a href="24787.php">MM: "[OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[resending now that I've joined the Open MPI users list, sorry for the duplicate]
<br>
<p>Hi Jed,
<br>
<p>Thanks for looping me on this mail thread. 
<br>
<p>Jed Brown wrote on Thu, 17 Jul 2014 at 11:19:42
<br>
<p><span class="quotelev1">&gt; Damien &lt;damien_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this something that could be funded by Microsoft, and is it time 
</span><br>
<span class="quotelev2">&gt;&gt; to approach them perhaps?  MS MPI is based on MPICH, and if mainline 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH isn't supporting Windows anymore, then there won't be a whole 
</span><br>
<span class="quotelev2">&gt;&gt; lot of development in an increasingly older Windows build. With the
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI roadmap, there's a lot happening.
</span><br>
<p>Open-MPI isn't supporting Windows anymore either, and I would think it fair to say that a lot is happening in both Open-MPI and MPICH (for non-Windows environments).
<br>
<p><span class="quotelev2">&gt;&gt; Would it be a
</span><br>
<span class="quotelev2">&gt;&gt; better business model for MS to piggy-back off of Open-MPI ongoing 
</span><br>
<span class="quotelev2">&gt;&gt; innovation, and put their resources into maintaining a Windows build 
</span><br>
<span class="quotelev2">&gt;&gt; of Open-MPI instead?
</span><br>
<p>Microsoft doesn't simply maintain a Windows build of MPICH.  While MS-MPI is derived from MPICH, at this point it is really a more of a fork given how much Windows-specific work we've done that isn't applicable to the mainline MPICH development.  We're continuing to invest in the development of MS-MPI, and our focus continues to be on user-requested features.  We strongly believe that users care more about feature content than which codebase we are derived from - after all, portability is one of the main goals of the MPI standard.
<br>
<p>We've worked very hard to maintain ABI over the various versions of MS-MPI, and a fundamental shift to a different implementation would wreak havoc on users and our ISV partners.
<br>
<p><span class="quotelev1">&gt; Maybe Fab can comment on Microsoft's intentions regarding MPI and
</span><br>
<span class="quotelev1">&gt; C99/C11 (just dreaming now).
</span><br>
<p>I can't really comment on the C99/C11 stuff, as that's a completely different organization within Microsoft.  Rob seems to have shed some light on this (thanks for finding that Rob!)
<br>
<p><span class="quotelev1">&gt;From an MPI perspective, we've been investing in making ourselves available to our user and developer community, whether through email (mailto:askmpi_at_[hidden], CC'd), through our beta program on Microsoft Connect (<a href="https://connect.microsoft.com/HPC/MS-MPI">https://connect.microsoft.com/HPC/MS-MPI</a>), where users can request (and vote for) features (<a href="https://connect.microsoft.com/HPC/Feedback">https://connect.microsoft.com/HPC/Feedback</a>), or through our web forums (<a href="http://social.microsoft.com/Forums/en-US/home?forum=windowshpcmpi">http://social.microsoft.com/Forums/en-US/home?forum=windowshpcmpi</a>).  We'd very much like to get input from our user community to help shape our features content going forward.
</span><br>
<p>I'm not familiar with PETSc, but would be happy to develop a closer relationship with the developers to enable better integration of MS-MPI into the PETSc environment.  Conceptually, a --download-msmpi option would be great, and we already allow redistribution of our installer package with third party applications (to enable bundling) if that makes more sense.
<br>
<p>-Fab
<br>
<p><span class="quotelev2">&gt;&gt; On 2014-07-17 11:42 AM, Jed Brown wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob Latham &lt;robl_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, I (and dgoodell and jsquyers and probably a few others of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you) can say from observing discuss_at_[hidden] traffic that we get 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one message about Windows support every month -- probably more often.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to average at least once a week.  We also see regular petsc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support emails wondering why --download-{mpich,openmpi} does not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work on Windows.  (These options are pretty much only used by 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beginners for whom PETSc is their first encounter with MPI.)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24808.php">n8tm: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Maybe in reply to:</strong> <a href="24787.php">MM: "[OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
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
