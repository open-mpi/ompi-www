<?
$subject_val = "[OMPI devel] Should visibility and memchecker abort configure?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 18:04:54 2008" -->
<!-- isoreceived="20081002220454" -->
<!-- sent="Thu, 2 Oct 2008 16:04:46 -0600" -->
<!-- isosent="20081002220446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Should visibility and memchecker abort configure?" -->
<!-- id="400A3A24-2BD4-422B-8F89-E902E2B9FFF1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Should visibility and memchecker abort configure?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 18:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4730.php">Aurélien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4730.php">Aurélien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4730.php">Aurélien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I make heavy use of platform files to provide OMPI support for the  
<br>
three NNSA labs. This means supporting multiple compilers, several  
<br>
different hardware and software configs, debug vs optimized, etc.
<br>
<p>Recently, I have encountered a problem that is making life difficult.  
<br>
The problem revolves around two configure options that apply to debug  
<br>
builds:
<br>
<p>1. --enable-visibility. Frustrating as it may be, some compilers just  
<br>
don't support visibility - and others only support it for versions  
<br>
above a specific level. Currently, this option will abort the  
<br>
configure procedure if the compiler does not support visibility.
<br>
<p>2. --enable-memchecker. This framework has a component that requires  
<br>
valgrind 3.2 or above. Unfortunately, if a valgrind meeting that  
<br>
criteria is not found, this option will also abort the configure  
<br>
procedure.
<br>
<p>Is it truly -necessary- for these options to abort configure in these  
<br>
conditions? Would it be acceptable for:
<br>
<p>* visibility just to print a big warning, surrounded by asterisks,  
<br>
that the selected compiler does not support visibility - but allow the  
<br>
build to continue?
<br>
<p>* memchecker to also print a big warning, surrounded by asterisks,  
<br>
explaining the valgrind requirement and turn &quot;off&quot; the build of the  
<br>
memchecker/valgrind component - but allow the build to continue? It  
<br>
would seem to me that we would certainly want this for the future  
<br>
anyway as additional memchecker components are supported.
<br>
<p>If this would be acceptable, I am happy to help with or implement the  
<br>
changes. It would be greatly appreciated.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4730.php">Aurélien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4730.php">Aurélien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4730.php">Aurélien Bouteiller: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Reply:</strong> <a href="4732.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
