<?
$subject_val = "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 07:51:30 2010" -->
<!-- isoreceived="20100922115130" -->
<!-- sent="Wed, 22 Sep 2010 07:51:25 -0400" -->
<!-- isosent="20100922115125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New Romio for OpenMPI available in bitbucket" -->
<!-- id="D354FF76-1802-4101-A536-323AFE07D7C3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C934490.7060304_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New Romio for OpenMPI available in bitbucket<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 07:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8517.php">Jeff Squyres: "[OMPI devel] SVN / Mercurial"</a>
<li><strong>In reply to:</strong> <a href="8489.php">Pascal Deveze: "[OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8521.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8521.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8525.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2010, at 6:36 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; In charge of ticket 1888 (see at <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>) ,
</span><br>
<span class="quotelev1">&gt; I have put the resulting code in bitbucket at:
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a>
</span><br>
<p>Sweet!
<br>
<p><span class="quotelev1">&gt; The work in this repo consisted in refreshing ROMIO to a newer
</span><br>
<span class="quotelev1">&gt; version: the one from the very last MPICH2 release (mpich2-1.3b1).
</span><br>
<p>Great!  I saw there was another MPICH2 release, and I saw a ROMIO patch or three go by on the MPICH list recently.  Do you expect there to be major differences between what you have and those changes?
<br>
<p>I don't have any parallel filesystems to test with, but if someone else in the community could confirm/verify at least one or two of the parallel filesystems supported in ROMIO, I think we should bring this stuff into the trunk soon.
<br>
<p><span class="quotelev1">&gt; Testing:
</span><br>
<span class="quotelev1">&gt; 1. runs fine except one minor error (see the explanation below) on various FS.
</span><br>
<span class="quotelev1">&gt; 2. runs fine with Lustre, but:
</span><br>
<span class="quotelev1">&gt;    . had to add a small patch in romio/adio/ad_lustre_open.c
</span><br>
<p>Did this patch get pushed upstream?
<br>
<p><span class="quotelev1">&gt; ======== The minor error ===================
</span><br>
<span class="quotelev1">&gt; The test error.c fails because OpenMPI does not handle correctly the
</span><br>
<span class="quotelev1">&gt; &quot;two level&quot; error functions of ROMIO:
</span><br>
<span class="quotelev1">&gt;   error_code = MPIO_Err_create_code(MPI_SUCCESS, MPIR_ERR_RECOVERABLE,
</span><br>
<span class="quotelev1">&gt;                                       myname, __LINE__, MPI_ERR_ARG,
</span><br>
<span class="quotelev1">&gt;                                       &quot;**iobaddisp&quot;, 0);
</span><br>
<span class="quotelev1">&gt; OpenMPI limits its view to MPI_ERR_ARG, but the real error is &quot;**iobaddisp&quot;.
</span><br>
<p>Do you mean that we should be returning an error string &quot;**iobaddisp&quot; instead of &quot;MPI_ERR_ARG&quot;?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8517.php">Jeff Squyres: "[OMPI devel] SVN / Mercurial"</a>
<li><strong>In reply to:</strong> <a href="8489.php">Pascal Deveze: "[OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8521.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8521.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8525.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
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
