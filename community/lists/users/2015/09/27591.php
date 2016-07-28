<?
$subject_val = "Re: [OMPI users] runtime MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 11:16:01 2015" -->
<!-- isoreceived="20150916151601" -->
<!-- sent="Wed, 16 Sep 2015 15:15:58 +0000" -->
<!-- isosent="20150916151558" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime MCA parameters" -->
<!-- id="E306D69B-FAEC-4A86-9625-65108A77A1B9_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="55F95EEA.80304_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime MCA parameters<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 11:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27592.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2015, at 8:22 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot, that looks right! Looks like some reading to do..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know if in the OpenMPI implementation the MPI_T-interfaced MCA settings are thread-local, or rank-local? 
</span><br>
<p>By &quot;rank local&quot;, I assume you mean &quot;process local&quot; (remember: every MPI process has at least 2 ranks -- one in MPI_COMM_WORLD, and one in MPI_COMM_SELF).
<br>
<p>All MPI_T interfaces in MPI are local to the MPI process.
<br>
<p>How each MPI implementation defines an &quot;MPI process&quot; is up to them; Open MPI defines an &quot;MPI process&quot; as an &quot;OS process&quot;.
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
<li><strong>Next message:</strong> <a href="27592.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27590.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
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
