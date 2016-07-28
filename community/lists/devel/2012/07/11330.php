<?
$subject_val = "Re: [OMPI devel] OpenMPI and SGE integration made more stable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 08:37:27 2012" -->
<!-- isoreceived="20120727123727" -->
<!-- sent="Fri, 27 Jul 2012 14:37:22 +0200" -->
<!-- isosent="20120727123722" -->
<!-- name="Daniel Gruber" -->
<!-- email="dgruber_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and SGE integration made more stable" -->
<!-- id="41292835-27E5-4AF5-9578-968EB4C50E2C_at_univa.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FC3A7FBB-C3D3-44D5-9DCE-EB62F0F43201_at_Chemie.Uni-KL.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI and SGE integration made more stable<br>
<strong>From:</strong> Daniel Gruber (<em>dgruber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 08:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11331.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11329.php">Christoph van W&#252;llen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11329.php">Christoph van W&#252;llen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11328.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.07.2012 um 14:25 schrieb Christoph van W&#252;llen:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 27.07.2012 um 06:11 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Been chatting off-list with the SGE folks - can you tell us what version of SGE you are using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; SGE 6.2, the rpm says sun-sge-bin-linux24-x64-6.2-2_1.x86_64.rpm
</span><br>
<p>Your version is 6.2u2, the next update (u3) fixed it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is, that the address space limit set when requesting the
</span><br>
<span class="quotelev1">&gt; resource h_vmem is automatically copied to the stack size limit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it is much better not to touch the stack size limit and let
</span><br>
<span class="quotelev1">&gt; it remain INFINITY.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Exactly this was the fix in 2009.
<br>
<p>Daniel
<br>
<p><span class="quotelev1">&gt; It my sound harsh, but in my view SGE's behaviour is rather a bug
</span><br>
<span class="quotelev1">&gt; than a feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yours,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +---------------------------------+----------------------------------+
</span><br>
<span class="quotelev1">&gt; | Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
</span><br>
<span class="quotelev1">&gt; | TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
</span><br>
<span class="quotelev1">&gt; | Erwin-Schr&#246;dinger-Str.          |                                  |
</span><br>
<span class="quotelev1">&gt; | D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
</span><br>
<span class="quotelev1">&gt; |                                                                    |
</span><br>
<span class="quotelev1">&gt; | HomePage:  <a href="http://www.chemie.uni-kl.de/vanwullen">http://www.chemie.uni-kl.de/vanwullen</a>                   |
</span><br>
<span class="quotelev1">&gt; +---------------------------------+----------------------------------+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11331.php">Christoph van Wüllen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11329.php">Christoph van W&#252;llen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11329.php">Christoph van W&#252;llen: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11328.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
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
