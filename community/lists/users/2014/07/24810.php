<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 18:35:31 2014" -->
<!-- isoreceived="20140717223531" -->
<!-- sent="Thu, 17 Jul 2014 16:35:37 -0600" -->
<!-- isosent="20140717223537" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013" -->
<!-- id="53C84FB9.9090804_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e0f7a827c506449096bf69b45fbead54_at_DFM-CO1MBX15-02.exchange.corp.microsoft.com" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 18:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24811.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="24809.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24809.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fair enough, all good business reasons not to switch MPI platforms at 
<br>
Microsoft's end.
<br>
<p>Damien
<br>
<p>On 2014-07-17 4:29 PM, Fab Tillier wrote:
<br>
<span class="quotelev1">&gt; [resending now that I've joined the Open MPI users list, sorry for the duplicate]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for looping me on this mail thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed Brown wrote on Thu, 17 Jul 2014 at 11:19:42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien &lt;damien_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this something that could be funded by Microsoft, and is it time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to approach them perhaps?  MS MPI is based on MPICH, and if mainline
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH isn't supporting Windows anymore, then there won't be a whole
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lot of development in an increasingly older Windows build. With the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open-MPI roadmap, there's a lot happening.
</span><br>
<span class="quotelev1">&gt; Open-MPI isn't supporting Windows anymore either, and I would think it fair to say that a lot is happening in both Open-MPI and MPICH (for non-Windows environments).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better business model for MS to piggy-back off of Open-MPI ongoing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; innovation, and put their resources into maintaining a Windows build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Open-MPI instead?
</span><br>
<span class="quotelev1">&gt; Microsoft doesn't simply maintain a Windows build of MPICH.  While MS-MPI is derived from MPICH, at this point it is really a more of a fork given how much Windows-specific work we've done that isn't applicable to the mainline MPICH development.  We're continuing to invest in the development of MS-MPI, and our focus continues to be on user-requested features.  We strongly believe that users care more about feature content than which codebase we are derived from - after all, portability is one of the main goals of the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've worked very hard to maintain ABI over the various versions of MS-MPI, and a fundamental shift to a different implementation would wreak havoc on users and our ISV partners.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe Fab can comment on Microsoft's intentions regarding MPI and
</span><br>
<span class="quotelev2">&gt;&gt; C99/C11 (just dreaming now).
</span><br>
<span class="quotelev1">&gt; I can't really comment on the C99/C11 stuff, as that's a completely different organization within Microsoft.  Rob seems to have shed some light on this (thanks for finding that Rob!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From an MPI perspective, we've been investing in making ourselves available to our user and developer community, whether through email (mailto:askmpi_at_[hidden], CC'd), through our beta program on Microsoft Connect (<a href="https://connect.microsoft.com/HPC/MS-MPI">https://connect.microsoft.com/HPC/MS-MPI</a>), where users can request (and vote for) features (<a href="https://connect.microsoft.com/HPC/Feedback">https://connect.microsoft.com/HPC/Feedback</a>), or through our web forums (<a href="http://social.microsoft.com/Forums/en-US/home?forum=windowshpcmpi">http://social.microsoft.com/Forums/en-US/home?forum=windowshpcmpi</a>).  We'd very much like to get input from our user community to help shape our features content going forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not familiar with PETSc, but would be happy to develop a closer relationship with the developers to enable better integration of MS-MPI into the PETSc environment.  Conceptually, a --download-msmpi option would be great, and we already allow redistribution of our installer package with third party applications (to enable bundling) if that makes more sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Fab
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014-07-17 11:42 AM, Jed Brown wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rob Latham &lt;robl_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, I (and dgoodell and jsquyers and probably a few others of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you) can say from observing discuss_at_[hidden] traffic that we get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one message about Windows support every month -- probably more often.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seems to average at least once a week.  We also see regular petsc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support emails wondering why --download-{mpich,openmpi} does not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work on Windows.  (These options are pretty much only used by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; beginners for whom PETSc is their first encounter with MPI.)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24811.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="24809.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24809.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
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
