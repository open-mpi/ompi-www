<?
$subject_val = "Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 18:45:27 2014" -->
<!-- isoreceived="20140128234527" -->
<!-- sent="Tue, 28 Jan 2014 23:45:26 +0000" -->
<!-- isosent="20140128234526" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4" -->
<!-- id="C0AFF00A-DC0D-4EFC-9BF2-6B8010D159D4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4E1AF64-D9CC-45F5-8935-0E5F0B2B5E04_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 18:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13944.php">Adrian Reber: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>Previous message:</strong> <a href="13942.php">Jeff Squyres (jsquyres): "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13942.php">Jeff Squyres (jsquyres): "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I thought about this more.
<br>
<p>There is a way to not break ABI, but still adhere to MPI-3.
<br>
<p>Let me go work up a patch and see if it's horrible; I think it will be a matter of reverting *some* of the code, but not *all* of it.
<br>
<p><p><p>On Jan 28, 2014, at 5:35 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It looks like Past Jeff was wrong: the removal of the choice buffers from the non-ignore-TKR version of the Fortran mpi module (which is only used for gfortran &lt;=v4.8) *does* cause ABI breakage between 1.7.3 and 1.7.4.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per discussion on the telconf today, we decided that we're going to do this anyway, because it's an MPI-3.0 conformance issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've added the following to the README in the ABI section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * A second bug was discovered after v1.7.3 was released that causes
</span><br>
<span class="quotelev1">&gt;  ABI to be broken for gfortran users who are using the &quot;mpi&quot; Fortran
</span><br>
<span class="quotelev1">&gt;  module.  In short, for versions of gfortran that do not support
</span><br>
<span class="quotelev1">&gt;  &quot;ignore TKR&quot; functionality (i.e., gfortran &lt;=v4.8), Open MPI was
</span><br>
<span class="quotelev1">&gt;  providing interfaces for MPI subroutines with choice buffers (e.g.,
</span><br>
<span class="quotelev1">&gt;  MPI_Send) in the Fortran mpi module.  The MPI-3.0 specification
</span><br>
<span class="quotelev1">&gt;  expressly states not to do this.  To be consistent with MPI-3, Open
</span><br>
<span class="quotelev1">&gt;  MPI v1.7.4 therefore removed all MPI interfaces with choice buffers
</span><br>
<span class="quotelev1">&gt;  from the no-ignore-TKR version of the Fortran mpi module, even
</span><br>
<span class="quotelev1">&gt;  though this breaks ABI between v1.7.3 and v1.7.4.  Affected users
</span><br>
<span class="quotelev1">&gt;  should be able to recompile their MPI applications with v1.7.4 with
</span><br>
<span class="quotelev1">&gt;  no changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Other Fortran compilers that provide &quot;ignore TKR&quot; functionality are
</span><br>
<span class="quotelev1">&gt;  not affected by this change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13944.php">Adrian Reber: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>Previous message:</strong> <a href="13942.php">Jeff Squyres (jsquyres): "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="13942.php">Jeff Squyres (jsquyres): "[OMPI devel] (g)Fortran ABI breakage between 1.7.3 and 1.7.4"</a>
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
