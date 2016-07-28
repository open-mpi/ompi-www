<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 14:44:10 2014" -->
<!-- isoreceived="20140717184410" -->
<!-- sent="Thu, 17 Jul 2014 11:43:15 -0700" -->
<!-- isosent="20140717184315" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013" -->
<!-- id="7206A327-8D01-4BDB-BE6A-25C284F95B74_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53C81824.5050205_at_mcs.anl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 14:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24803.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24801.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24801.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24804.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24804.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, but I'm cheap and get the Intel compilers for free :-)
<br>
<p><p>On Jul 17, 2014, at 11:38 AM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/17/2014 01:19 PM, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Damien &lt;damien_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this something that could be funded by Microsoft, and is it time to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; approach them perhaps?  MS MPI is based on MPICH, and if mainline MPICH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't supporting Windows anymore, then there won't be a whole lot of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; development in an increasingly older Windows build.  With the Open-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; roadmap, there's a lot happening.  Would it be a better business model
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for MS to piggy-back off of Open-MPI ongoing innovation, and put their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resources into maintaining a Windows build of Open-MPI instead?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe Fab can comment on Microsoft's intentions regarding MPI and
</span><br>
<span class="quotelev2">&gt;&gt; C99/C11 (just dreaming now).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hey, (almost all of) c99 support is in place in visual studio 2013
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.msdn.com/b/vcblog/archive/2013/07/19/c99-library-support-in-visual-studio-2013.aspx">http://blogs.msdn.com/b/vcblog/archive/2013/07/19/c99-library-support-in-visual-studio-2013.aspx</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014-07-17 11:42 AM, Jed Brown wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rob Latham &lt;robl_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, I (and dgoodell and jsquyers and probably a few others of you) can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; say from observing discuss_at_[hidden] traffic that we get one message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about Windows support every month -- probably more often.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Seems to average at least once a week.  We also see regular petsc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support emails wondering why --download-{mpich,openmpi} does not work on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Windows.  (These options are pretty much only used by beginners for whom
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PETSc is their first encounter with MPI.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24800.php">http://www.open-mpi.org/community/lists/users/2014/07/24800.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24801.php">http://www.open-mpi.org/community/lists/users/2014/07/24801.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24803.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24801.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>In reply to:</strong> <a href="24801.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24804.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Reply:</strong> <a href="24804.php">Jed Brown: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
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
