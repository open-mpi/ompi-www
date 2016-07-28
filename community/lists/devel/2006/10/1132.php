<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 15:39:18 2006" -->
<!-- isoreceived="20061020193918" -->
<!-- sent="Fri, 20 Oct 2006 15:39:12 -0400" -->
<!-- isosent="20061020193912" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some stuff defined for Fortran but not for C" -->
<!-- id="8D7574E2-BD7A-49FF-A654-BB0412F77A55_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40610201225t4310e08k9a5e7e3df61e964f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 15:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>Previous message:</strong> <a href="1131.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>In reply to:</strong> <a href="1130.php">Lisandro Dalcin: "[OMPI devel] some stuff defined for Fortran but not for C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not directly / publicly available in C.  It is available via  
<br>
the &quot;ompi_info&quot; command, perhaps something like this:
<br>
<p>ompi_info --version ompi full --parsable | fgrep ompi:version:full |  
<br>
cut -d: -f4-
<br>
<p><p><p>On Oct 20, 2006, at 3:25 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; in release 1.1.2, the following is included in 'mpif-config.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       parameter (OMPI_MAJOR_VERSION=1)
</span><br>
<span class="quotelev1">&gt;       parameter (OMPI_MINOR_VERSION=1)
</span><br>
<span class="quotelev1">&gt;       parameter (OMPI_RELEASE_VERSION=2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any chance of having this accesible in C ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1133.php">Jeff Squyres: "Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<li><strong>Previous message:</strong> <a href="1131.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>In reply to:</strong> <a href="1130.php">Lisandro Dalcin: "[OMPI devel] some stuff defined for Fortran but not for C"</a>
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
