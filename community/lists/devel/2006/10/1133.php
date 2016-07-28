<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 16:19:38 2006" -->
<!-- isoreceived="20061020201938" -->
<!-- sent="Fri, 20 Oct 2006 16:19:31 -0400" -->
<!-- isosent="20061020201931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)" -->
<!-- id="A67FD3AF-1EB1-4546-9CF2-236ED51EB991_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40610191508p3981c342m9fcfa082819bfeda_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-10-20 16:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Previous message:</strong> <a href="1132.php">Jeff Squyres: "Re: [OMPI devel] some stuff defined for Fortran but not for C"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mohamad (U. Houston) just fixed the TRANSLATE_RANKS problem on the  
<br>
trunk.  We're going to let it &quot;soak&quot; there for a day or three before  
<br>
moving it over to the release branches.
<br>
<p>Keep 'em coming -- you keep getting more and more mention in the NEWS  
<br>
file.  :-)
<br>
<p><p><p>On Oct 19, 2006, at 6:08 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; I've successfully installed the just released 1.1.2. So I go for a new
</span><br>
<span class="quotelev1">&gt; round catching bugs, non standard behavior, or just what could be seen
</span><br>
<span class="quotelev1">&gt; as convenient features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem I've reported with MPI_GROUP_TRANSLATE_RANKS was
</span><br>
<span class="quotelev1">&gt; corrected. However, looking at MPI-2 errata documment, it says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Add to page 36, after 3.2.11 (above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3.2.12 MPI_GROUP_TRANSLATE_RANKS and MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_PROC_NULL is a valid rank for input to MPI_GROUP_TRANSLATE_RANKS,
</span><br>
<span class="quotelev1">&gt; which returns MPI_PROC_NULL as the translated rank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it seems it returns MPI_UNDEFINED in this case. Try yourself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In [1]: from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In [2]: group = MPI.COMM_WORLD.Get_group()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In [3]: MPI.Group.Translate_ranks(group, [MPI.PROC_NULL], group)
</span><br>
<span class="quotelev1">&gt; Out[3]: [-32766]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In [4]: MPI.UNDEFINED
</span><br>
<span class="quotelev1">&gt; Out[4]: -32766
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionaly, OMPI segfaults if the group is MPI_GROUP_EMPY. Try  
</span><br>
<span class="quotelev1">&gt; yourself
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In [5]: group = MPI.GROUP_EMPTY
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In [6]: MPI.Group.Translate_ranks(group, [MPI.PROC_NULL], group)
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xfffffff8
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/openmpi/1.1.2/lib/libopal.so.0 [0xba1dfc]
</span><br>
<span class="quotelev1">&gt; [1] func:[0xe67440]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/local/openmpi/1.1.2/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (MPI_Group_translate_ranks+0xaa
</span><br>
<span class="quotelev1">&gt; ) [0x5f0786]
</span><br>
<span class="quotelev1">&gt; [3] func:/u/dalcinl/lib/python/mpi4py/_mpi.so [0xa5a6c6]
</span><br>
<span class="quotelev1">&gt; [4] func:/usr/local/lib/libpython2.4.so.1.0(PyCFunction_Call+0x66)  
</span><br>
<span class="quotelev1">&gt; [0x1d5d66]
</span><br>
<span class="quotelev1">&gt; # more traceback .....
</span><br>
<span class="quotelev1">&gt; [31] func:/usr/local/lib/libpython2.4.so.1.0 [0x20b009]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Previous message:</strong> <a href="1132.php">Jeff Squyres: "Re: [OMPI devel] some stuff defined for Fortran but not for C"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Lisandro Dalcin: "[OMPI devel] Fwd: MPI_GROUP_TRANSLATE_RANKS (again)"</a>
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
