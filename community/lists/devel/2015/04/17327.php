<?
$subject_val = "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:44:43 2015" -->
<!-- isoreceived="20150422214443" -->
<!-- sent="Wed, 22 Apr 2015 21:44:41 +0000" -->
<!-- isosent="20150422214441" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile &amp;quot;remark&amp;quot; for Openmpi 1.8.4" -->
<!-- id="F544FF23-EACE-451F-8488-6509B6C80709_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1429737723913.37518_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17328.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17342.php">Raphaël Fouassier: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is actually expected.
<br>
<p>We use compiler pragmas in the Fortran code that are not recognized by all compilers.  But they're safely ignored (even though they're noisy).  :-\
<br>
<p><p><span class="quotelev1">&gt; On Apr 22, 2015, at 5:22 PM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compilation of OpenMPI 1.8.4 using Intel compiler version 14.0.4.211 results in usable code but has the following &quot;remarks&quot;:....
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home02/tom/src/openmpi-1.8.4_intel_1404211/ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-types.lo
</span><br>
<span class="quotelev1">&gt;  GENERATE sizeof_f08.h
</span><br>
<span class="quotelev1">&gt;  CC       constants.lo
</span><br>
<span class="quotelev1">&gt;  GENERATE sizeof_f08.f90
</span><br>
<span class="quotelev1">&gt;  GENERATE profile/psizeof_f08.f90
</span><br>
<span class="quotelev1">&gt;  FC       sizeof_f08.lo
</span><br>
<span class="quotelev1">&gt;  FC       profile/psizeof_f08.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     pmpi-f08-interfaces.lo
</span><br>
<span class="quotelev1">&gt; pmpi-f08-interfaces.F90(28): remark #5140: Unrecognized directive
</span><br>
<span class="quotelev1">&gt; !DIR$ IGNORE_TKR buf
</span><br>
<span class="quotelev1">&gt; --------------------^
</span><br>
<span class="quotelev1">&gt; pmpi-f08-interfaces.F90(45): remark #5140: Unrecognized directive
</span><br>
<span class="quotelev1">&gt; !DIR$ IGNORE_TKR buf
</span><br>
<span class="quotelev1">&gt; --------------------^
</span><br>
<span class="quotelev1">&gt; pmpi-f08-interfaces.F90(62): remark #5140: Unrecognized directive
</span><br>
<span class="quotelev1">&gt; !DIR$ IGNORE_TKR buffer
</span><br>
<span class="quotelev1">&gt; -----------------------^
</span><br>
<span class="quotelev1">&gt; pmpi-f08-interfaces.F90(76): remark #5140: Unrecognized directive
</span><br>
<span class="quotelev1">&gt; !DIR$ IGNORE_TKR buffer_addr
</span><br>
<span class="quotelev1">&gt; ----------------------------^
</span><br>
<span class="quotelev1">&gt; pmpi-f08-interfaces.F90(111): remark #5140: Unrecognized directive
</span><br>
<span class="quotelev1">&gt; !DIR$ IGNORE_TKR buf
</span><br>
<span class="quotelev1">&gt; --------------------^
</span><br>
<span class="quotelev1">&gt; [lots more of same, so truncated here]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17325.php">http://www.open-mpi.org/community/lists/devel/2015/04/17325.php</a>
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
<li><strong>Next message:</strong> <a href="17328.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17342.php">Raphaël Fouassier: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
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
