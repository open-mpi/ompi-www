<?
$subject_val = "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:00:22 2010" -->
<!-- isoreceived="20100922140022" -->
<!-- sent="Wed, 22 Sep 2010 16:00:13 +0200" -->
<!-- isosent="20100922140013" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New Romio for OpenMPI available in bitbucket" -->
<!-- id="4C9A0BED.1030601_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D354FF76-1802-4101-A536-323AFE07D7C3_at_cisco.com" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8568.php">Ashley Pittman: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just commited the very last modifications of ROMIO (mpich2-1.3rc1) 
<br>
into bitbucket.
<br>
<p>Pascal
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 17, 2010, at 6:36 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; In charge of ticket 1888 (see at <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>) ,
</span><br>
<span class="quotelev2">&gt;&gt; I have put the resulting code in bitbucket at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sweet!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The work in this repo consisted in refreshing ROMIO to a newer
</span><br>
<span class="quotelev2">&gt;&gt; version: the one from the very last MPICH2 release (mpich2-1.3b1).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great!  I saw there was another MPICH2 release, and I saw a ROMIO patch or three go by on the MPICH list recently.  Do you expect there to be major differences between what you have and those changes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have any parallel filesystems to test with, but if someone else in the community could confirm/verify at least one or two of the parallel filesystems supported in ROMIO, I think we should bring this stuff into the trunk soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Testing:
</span><br>
<span class="quotelev2">&gt;&gt; 1. runs fine except one minor error (see the explanation below) on various FS.
</span><br>
<span class="quotelev2">&gt;&gt; 2. runs fine with Lustre, but:
</span><br>
<span class="quotelev2">&gt;&gt;    . had to add a small patch in romio/adio/ad_lustre_open.c
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did this patch get pushed upstream?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; ======== The minor error ===================
</span><br>
<span class="quotelev2">&gt;&gt; The test error.c fails because OpenMPI does not handle correctly the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;two level&quot; error functions of ROMIO:
</span><br>
<span class="quotelev2">&gt;&gt;   error_code = MPIO_Err_create_code(MPI_SUCCESS, MPIR_ERR_RECOVERABLE,
</span><br>
<span class="quotelev2">&gt;&gt;                                       myname, __LINE__, MPI_ERR_ARG,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &quot;**iobaddisp&quot;, 0);
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI limits its view to MPI_ERR_ARG, but the real error is &quot;**iobaddisp&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mean that we should be returning an error string &quot;**iobaddisp&quot; instead of &quot;MPI_ERR_ARG&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8568.php">Ashley Pittman: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
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
