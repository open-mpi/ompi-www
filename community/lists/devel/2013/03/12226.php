<?
$subject_val = "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 27 05:06:48 2013" -->
<!-- isoreceived="20130327090648" -->
<!-- sent="Wed, 27 Mar 2013 13:06:43 +0400" -->
<!-- isosent="20130327090643" -->
<!-- name="&#228;&#207;&#206;&#195;&#207;&#215;, &#228;&#205;&#201;&#212;&#210;&#201;&#202;" -->
<!-- email="dvdontsov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI error with error codes. The proposed solution." -->
<!-- id="CABRf=Xoo1UP1_S7U6+Dg4cjJpkUZVfJ86CFLqcKUnDe9LT8yqw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43FC8B17_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI error with error codes. The proposed solution.<br>
<strong>From:</strong> &#228;&#207;&#206;&#195;&#207;&#215;, &#228;&#205;&#201;&#212;&#210;&#201;&#202; (<em>dvdontsov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-27 05:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12227.php">Nathan Hjelm: "[OMPI devel] SVN quiet time starting now"</a>
<li><strong>Previous message:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>In reply to:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Jeff
<br>
<p>2013/3/27 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  Can you cite where you see that in the spec?  I see in MPI-3 p349, line 48:
</span><br>
<span class="quotelev1">&gt; -- skipped --
</span><br>
<span class="quotelev1">&gt; I see the definition of MPI_LASTUSEDCODE in MPI-3 p353 27-32, and it says that LASTUSEDCODE must be &gt;= MPI_ERR_LASTCODE.
</span><br>
<p>Yes, you are right I mean MPI-3 p353, lines 28-33.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I applied a slightly modified version of your patch in <a href="https://svn.open-mpi.org/trac/ompi/changeset/28225">https://svn.open-mpi.org/trac/ompi/changeset/28225</a>.  I don't know / doubt if this will make 1.7.0, but we can get it in 1.7.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
It looks good, thank you.
<br>
<p>WBR, Dmitry Dontsov
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12227.php">Nathan Hjelm: "[OMPI devel] SVN quiet time starting now"</a>
<li><strong>Previous message:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>In reply to:</strong> <a href="12225.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
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
