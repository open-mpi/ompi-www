<?
$subject_val = "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:42:16 2009" -->
<!-- isoreceived="20090123114216" -->
<!-- sent="Fri, 23 Jan 2009 06:42:11 -0500" -->
<!-- isosent="20090123114211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined" -->
<!-- id="33552EC4-3C28-4071-9638-2E0D18152244_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="751487.76584.qm_at_web23006.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<li><strong>Previous message:</strong> <a href="7779.php">Gabriele Fatigati: "[OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7774.php">Andrea Iob: "[OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 4:54 AM, Andrea Iob wrote:
<br>
<p><span class="quotelev1">&gt; It looks like icc 10.1.021 does not define PATH_MAX
</span><br>
<span class="quotelev1">&gt; (version 10.1.013 works without problems).
</span><br>
<p>Well that's fun; gotta love when compilers change their behavior.  :-)
<br>
<p><span class="quotelev1">&gt; As a
</span><br>
<span class="quotelev1">&gt; workaround I've included &lt;sys/param.h&gt; in those files
</span><br>
<span class="quotelev1">&gt; where PATH_MAX is used.
</span><br>
<p><p>What files did you change?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<li><strong>Previous message:</strong> <a href="7779.php">Gabriele Fatigati: "[OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7774.php">Andrea Iob: "[OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
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
