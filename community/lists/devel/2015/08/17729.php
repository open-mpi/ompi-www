<?
$subject_val = "Re: [OMPI devel] Error in version 1.8.7?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 06:39:38 2015" -->
<!-- isoreceived="20150804103938" -->
<!-- sent="Tue, 4 Aug 2015 19:39:36 +0900" -->
<!-- isosent="20150804103936" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in version 1.8.7?" -->
<!-- id="CAAkFZ5uCZwJtyAj3YEr9wF51xbnLzHw=wMa9sk69YhG_aVfo0g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2054557.zLd69ucCAZ_at_rzm-haefner" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error in version 1.8.7?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-04 06:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17730.php">Howard Pritchard: "[OMPI devel] new branch on open-mpi/ompi?"</a>
<li><strong>Previous message:</strong> <a href="17728.php">SCC: "[OMPI devel] Error in version 1.8.7?"</a>
<li><strong>In reply to:</strong> <a href="17728.php">SCC: "[OMPI devel] Error in version 1.8.7?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harmut,
<br>
<p>yes this is a bug ...
<br>
<p>we are still working on a proper fix.
<br>
in the mean time, you can comment the dlsym test in the openib btl
<br>
(otherwise, openmpi falls back to tcp ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, August 4, 2015, Hartmut H&#195;&#164;fner (SCC) &lt;Hartmut.Haefner_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we have installed OpenMPI 1.8.7 with GNU Compiler suite on our clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For cluster IC2: config.log is attached. Also ompi_info --all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All parallel jobs run on IC2, but we always get the following message.
</span><br>
<span class="quotelev1">&gt; Here mpi_hello is run interactively (we get the same message in batch jobs):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 mpi_hello
</span><br>
<span class="quotelev1">&gt; hello world
</span><br>
<span class="quotelev1">&gt; I am task number            0  out of            4  on ic2n988  ic2n988
</span><br>
<span class="quotelev1">&gt; hello world
</span><br>
<span class="quotelev1">&gt; I am task number            1  out of            4  on ic2n988  ic2n988
</span><br>
<span class="quotelev1">&gt; hello world
</span><br>
<span class="quotelev1">&gt; I am task number            2  out of            4  on ic2n988  ic2n988
</span><br>
<span class="quotelev1">&gt; hello world
</span><br>
<span class="quotelev1">&gt; I am task number            3  out of            4  on ic2n988  ic2n988
</span><br>
<span class="quotelev1">&gt; [ic2n988][[23756,1],0][btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt; [ic2n988][[23756,1],2][btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt; [ic2n988][[23756,1],3][btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt; [ic2n988][[23756,1],1][btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are using SLES 11 SP3 (with OFED 1.5.4) on our system. On another
</span><br>
<span class="quotelev1">&gt; system we are using RHEL EL 6.6. There we don't get this message! But I
</span><br>
<span class="quotelev1">&gt; don't know if XRC us used on RHEL EL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerly yours
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hartmut H&#195;&#164;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hartmut H&#195;&#164;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Karlsruhe Institute of Technology (KIT)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University Karlsruhe (TH)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steinbuch Centre for Computing (SCC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scientific Computing and Simulation (SCS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zirkel 2 (Campus S&#195;&#188;d, Geb. 20.21, Raum 204)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D-76128 Karlsruhe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fon +49(0)721 608 44869
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fax +49(0)721 32550
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hartmut.Haefner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Hartmut.Haefner_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scc.kit.edu/personen/hartmut.haefner">http://www.scc.kit.edu/personen/hartmut.haefner</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17730.php">Howard Pritchard: "[OMPI devel] new branch on open-mpi/ompi?"</a>
<li><strong>Previous message:</strong> <a href="17728.php">SCC: "[OMPI devel] Error in version 1.8.7?"</a>
<li><strong>In reply to:</strong> <a href="17728.php">SCC: "[OMPI devel] Error in version 1.8.7?"</a>
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
