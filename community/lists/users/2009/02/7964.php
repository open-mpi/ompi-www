<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 10:10:10 2009" -->
<!-- isoreceived="20090204151010" -->
<!-- sent="Wed, 04 Feb 2009 15:01:50 +0000" -->
<!-- isosent="20090204150150" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="874oza5jq9.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0CFBBB9A-0251-4087-B33F-5DED52B231BD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.3: mca_common_sm_mmap_init error<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 10:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7965.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannotcompile	onLinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7963.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>In reply to:</strong> <a href="7917.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Could the nodes be running out of shared memory and/or temp filesystem
</span><br>
<span class="quotelev1">&gt; space?
</span><br>
<p>I'm also seeing this non-reproducibly (on OpenSuSE 10.3, with Sun's
<br>
Clustertools 8.1 prerelease on dual Barcelona nodes during PMB runs
<br>
under SGE).  I haven't had time to build the final 1.3 release.
<br>
Certainly /tmp space shouldn't have been a problem on these systems.
<br>
<p>What exactly does `shared memory' mean above?  The jobs don't appear to
<br>
be using shared memory segments, at least.  In that case, what's there
<br>
to run out of, other than filespace, and shouldn't there be an error
<br>
reported creating the file then?  It smacks more of a race condition,
<br>
since it's errno 2, not 28 or something.
<br>
<p>I'm writing in a good deal of ignorance -- as is doubtless obvious --
<br>
and don't have time to grovel the code, but I might be able to get extra
<br>
diagnostics if anyone can suggest something that doesn't involve much
<br>
work.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7965.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannotcompile	onLinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7963.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>In reply to:</strong> <a href="7917.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
