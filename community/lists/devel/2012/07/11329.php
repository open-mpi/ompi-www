<?
$subject_val = "Re: [OMPI devel] OpenMPI and SGE integration made more stable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 08:25:23 2012" -->
<!-- isoreceived="20120727122523" -->
<!-- sent="Fri, 27 Jul 2012 14:25:16 +0200" -->
<!-- isosent="20120727122516" -->
<!-- name="Christoph van W&#252;llen" -->
<!-- email="vanWullen_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI and SGE integration made more stable" -->
<!-- id="FC3A7FBB-C3D3-44D5-9DCE-EB62F0F43201_at_Chemie.Uni-KL.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E049968-0648-4CBE-BBCB-540805EEDC72_at_open-mpi.org" -->
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
<strong>From:</strong> Christoph van W&#252;llen (<em>vanWullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 08:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11330.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11328.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11330.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11330.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.07.2012 um 06:11 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Been chatting off-list with the SGE folks - can you tell us what version of SGE you are using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
SGE 6.2, the rpm says sun-sge-bin-linux24-x64-6.2-2_1.x86_64.rpm
<br>
<p>The problem is, that the address space limit set when requesting the
<br>
resource h_vmem is automatically copied to the stack size limit.
<br>
<p>However, it is much better not to touch the stack size limit and let
<br>
it remain INFINITY.
<br>
<p>It my sound harsh, but in my view SGE's behaviour is rather a bug
<br>
than a feature.
<br>
<p>Yours,
<br>
<p>+---------------------------------+----------------------------------+
<br>
| Prof. Christoph van W&#252;llen      | Tele-Phone (+49) (0)631 205 2749 |
<br>
| TU Kaiserslautern, FB Chemie    | Tele-Fax   (+49) (0)631 205 2750 |
<br>
| Erwin-Schr&#246;dinger-Str.          |                                  |
<br>
| D-67663 Kaiserslautern, Germany | vanWullen_at_[hidden]       |
<br>
|                                                                    |
<br>
| HomePage:  <a href="http://www.chemie.uni-kl.de/vanwullen">http://www.chemie.uni-kl.de/vanwullen</a>                   |
<br>
+---------------------------------+----------------------------------+
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11330.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Previous message:</strong> <a href="11328.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>In reply to:</strong> <a href="11327.php">Ralph Castain: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11330.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
<li><strong>Reply:</strong> <a href="11330.php">Daniel Gruber: "Re: [OMPI devel] OpenMPI and SGE integration made more stable"</a>
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
