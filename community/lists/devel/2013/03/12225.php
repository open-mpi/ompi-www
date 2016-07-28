<?
$subject_val = "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 21:33:17 2013" -->
<!-- isoreceived="20130327013317" -->
<!-- sent="Wed, 27 Mar 2013 01:33:07 +0000" -->
<!-- isosent="20130327013307" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI error with error codes. The proposed solution." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC8B17_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="d931a0896a118056104db60802c3f331_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 21:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12226.php">Донцов, Дмитрий: "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Previous message:</strong> <a href="12224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: MCA system revamp phase 1"</a>
<li><strong>In reply to:</strong> <a href="12221.php">&#228;&#205;&#201;&#212;&#210;&#201;&#202; &#228;&#207;&#206;&#195;&#207;&#215;: "[OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12226.php">Донцов, Дмитрий: "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Reply:</strong> <a href="12226.php">Донцов, Дмитрий: "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2013, at 4:59 AM, &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185; &#208;&#148;&#208;&#190;&#208;&#189;&#209;&#134;&#208;&#190;&#208;&#178; &lt;dvdontsov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've found error in OpenMPI with error codes.
</span><br>
<p>Thanks for investigating this!
<br>
<p><span class="quotelev1">&gt; According to MPI standard (2.2 and later):
</span><br>
<span class="quotelev1">&gt; MPI_ERR_LASTCODE must be equals to last error code and MPI_LASTUSEDCODE must be greater than or equal to MPI_ERR_LASTCODE.
</span><br>
<p>Hmm.  Can you cite where you see that in the spec?  I see in MPI-3 p349, line 48:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;0 = MPI_SUCCESS &lt; MPI_ERR_... &lt;= MPI_ERR_LASTCODE
<br>
<p>Specifically, it says that MPI_ERR_LASTCODE can be greater than the last error code (MPI_ERR_WIN, in this case).
<br>
<p>Regardless, I'm just arguing semantics here -- our current value of LASTCODE is technically ok (for this reason), but your next argument gives a different reason why it's not ok.  :-)
<br>
<p><span class="quotelev1">&gt; In OpenMPI MPI_ERR_LASTCODE is greater than real last error code (MPI_ERR_WIN) for 1 and MPI_LASTUSEDCODE hardcoded linked with MPI_ERR_WIN. So, possible situation when MPI_LASTUSEDCODE (equals to MPI_ERR_WIN) is less than MPI_ERR_LASTCODE.
</span><br>
<p>You're right -- I see the definition of MPI_LASTUSEDCODE in MPI-3 p353 27-32, and it says that LASTUSEDCODE must be &gt;= MPI_ERR_LASTCODE.
<br>
<p>So we have two choices:
<br>
<p>1. set MPI_ERR_LASTCODE = MPI_LASTUSEDCODE = MPI_ERR_WIN
<br>
2. leave MPI_ERR_LASTCODE = MPI_ERR_WIN + 1, and set MPI_LASTUSEDCODE to MPI_ERR_LASTCODE
<br>
<p>I'm ok with your solution (#1) -- it doesn't leave a &quot;hole&quot; in the error code space when users create their own.
<br>
<p>I applied a slightly modified version of your patch in <a href="https://svn.open-mpi.org/trac/ompi/changeset/28225">https://svn.open-mpi.org/trac/ompi/changeset/28225</a>.  I don't know / doubt if this will make 1.7.0, but we can get it in 1.7.1.
<br>
<p>Thank you!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12226.php">Донцов, Дмитрий: "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Previous message:</strong> <a href="12224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: MCA system revamp phase 1"</a>
<li><strong>In reply to:</strong> <a href="12221.php">&#228;&#205;&#201;&#212;&#210;&#201;&#202; &#228;&#207;&#206;&#195;&#207;&#215;: "[OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12226.php">Донцов, Дмитрий: "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
<li><strong>Reply:</strong> <a href="12226.php">Донцов, Дмитрий: "Re: [OMPI devel] OpenMPI error with error codes. The proposed solution."</a>
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
