<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 14:50:10 2009" -->
<!-- isoreceived="20090331185010" -->
<!-- sent="Tue, 31 Mar 2009 19:49:49 +0100" -->
<!-- isosent="20090331184949" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem" -->
<!-- id="87k565ttma.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY142-W50BCFFCDC74429B299F2A8F08A0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 14:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8676.php">M C: "[OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8684.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="8684.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
M C &lt;m_c_001_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; --- MCA component crs:blcr (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component crs:blcr compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-blcr value... sanity check ok (/opt/blcr)
</span><br>
<span class="quotelev1">&gt; checking --with-blcr-libdir value... sanity check ok (/opt/blcr/lib)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: BLCR support requested but not found.  Perhaps you need to specify the location of the BLCR libraries.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is strange, as both /opt/blcr and /opt/blcr/lib are sensibly populated:
</span><br>
<p>I ran into this recently.  You need an extra flag which I forget, but
<br>
./configure --help will show it can take `LAM' as an argument.  It seems
<br>
pretty obscure and probably deserves a report I haven't had time to
<br>
make.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8681.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8676.php">M C: "[OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8684.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="8684.php">Josh Hursey: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
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
