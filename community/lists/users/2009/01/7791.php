<?
$subject_val = "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 08:45:39 2009" -->
<!-- isoreceived="20090123134539" -->
<!-- sent="Fri, 23 Jan 2009 08:45:27 -0500" -->
<!-- isosent="20090123134527" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined" -->
<!-- id="9870A8BC-8573-409B-BC08-9F766AFB8BFB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="698801.19904.qm_at_web23001.mail.ird.yahoo.com" -->
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
<strong>Date:</strong> 2009-01-23 08:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7792.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7790.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7822.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7822.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 7:19 AM, Andrea Iob wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What files did you change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The files I changed are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/ompi/contrib/vt/vt/vtlib/vt_otf_gen.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/ompi/contrib/vt/vt/vtlib/vt_thrd.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/opal/util/path.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/orte/mca/plm/rsh/plm_rsh_component.c
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/orte/tools/orterun/debuggers.c
</span><br>
<p>Thanks!
<br>
<p>The OMPI files should be using OMPI_PATH_MAX; I'll get that fixed up.   
<br>
Could you confirm that changing the last 3 files to use OMPI_PATH_MAX  
<br>
instead of PATH_MAX (without adding the #include) also fixes the  
<br>
problem?
<br>
<p>I'll ping the VT guys to see what they want to do.
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
<li><strong>Next message:</strong> <a href="7792.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7790.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7785.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7822.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Reply:</strong> <a href="7822.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
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
