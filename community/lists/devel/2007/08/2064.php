<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 20:51:46 2007" -->
<!-- isoreceived="20070802005146" -->
<!-- sent="Wed, 1 Aug 2007 20:51:25 -0400" -->
<!-- isosent="20070802005125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="4E33C371-17FB-49B4-B061-D04EBA77B808_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86A36B68-E420-4CB4-B812-E135D168450F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-01 20:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2065.php">Dirk Eddelbuettel: "[OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, I totally forgot to mention a notable C++ MPI bindings project  
<br>
that is the next-generation/successor to OMPI: the Boost C++ MPI  
<br>
bindings (boost.mpi).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.generic-programming.org/~dgregor/boost.mpi/doc/">http://www.generic-programming.org/~dgregor/boost.mpi/doc/</a>
<br>
<p>I believe there's also python bindings included...?
<br>
<p><p><p>On Aug 1, 2007, at 8:30 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 31, 2007, at 6:43 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working in the development of MPI for Python, a port of MPI to
</span><br>
<span class="quotelev2">&gt;&gt; Python, a high level language with automatic memory management. Said
</span><br>
<span class="quotelev2">&gt;&gt; that, in such an environment, having to call XXX.Free() for  every
</span><br>
<span class="quotelev2">&gt;&gt; object i get from a call like XXX.Get_something() is really an
</span><br>
<span class="quotelev2">&gt;&gt; unnecesary pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I don't see why this means that you need to know if an MPI  
</span><br>
<span class="quotelev1">&gt; handle points to an intrinsic object or not...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many things in MPI are LOCAL (datatypes, groups, predefined
</span><br>
<span class="quotelev2">&gt;&gt; operations) and in general destroying them for user-space is
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed by MPI to not conflict with system(MPI)-space and
</span><br>
<span class="quotelev2">&gt;&gt; communication (i.e. if you create a derived datatype four using it in
</span><br>
<span class="quotelev2">&gt;&gt; a construction of another derived datatype, you can safely free the
</span><br>
<span class="quotelev2">&gt;&gt; first).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, for all those LOCAL objects, I could implement automatic
</span><br>
<span class="quotelev2">&gt;&gt; deallocation of handles for Python (for Comm, Win, and File, that is
</span><br>
<span class="quotelev2">&gt;&gt; not so easy, at freeing them is a collective operation AFAIK, and
</span><br>
<span class="quotelev2">&gt;&gt; automaticaly freeing them can lead to deadlocks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a difficult issue -- deadlocks for removing objects that  
</span><br>
<span class="quotelev1">&gt; are collective actions.  It's one of the reasons the Forum decided  
</span><br>
<span class="quotelev1">&gt; not to have the C++ bindings automatically free handles when they  
</span><br>
<span class="quotelev1">&gt; go out of scope.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My Python wrappers (mpi4py) are inteded to be used in any platform
</span><br>
<span class="quotelev2">&gt;&gt; with any MPI implementation. But things are not so easy, as there are
</span><br>
<span class="quotelev2">&gt;&gt; many corner cases in the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, indeed.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Python es a wonderfull, powerfull language, very friendly to write
</span><br>
<span class="quotelev2">&gt;&gt; things. Prove of that is the many bug reports I provided here. By
</span><br>
<span class="quotelev2">&gt;&gt; using python, I can run all my unittest script in a single MPI run,
</span><br>
<span class="quotelev2">&gt;&gt; thus they have the potential to find interaction problems between all
</span><br>
<span class="quotelev2">&gt;&gt; parts of MPI. If any of you, OMPI developers, have some knowledge of
</span><br>
<span class="quotelev2">&gt;&gt; Python, I invite you to try mpi4py, as you would be able to write  
</span><br>
<span class="quotelev2">&gt;&gt; very
</span><br>
<span class="quotelev2">&gt;&gt; fast many many tests, not only for things that should work, but also
</span><br>
<span class="quotelev2">&gt;&gt; for things that should fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the long mail. In short, many things in MPI are not clearly
</span><br>
<span class="quotelev2">&gt;&gt; designed for languages other than C and Fortran. Even in C++
</span><br>
<span class="quotelev2">&gt;&gt; specification, there are things that are unnaceptable, like the
</span><br>
<span class="quotelev2">&gt;&gt; open-door to the problem of having dangling references, which  
</span><br>
<span class="quotelev2">&gt;&gt; could be
</span><br>
<span class="quotelev2">&gt;&gt; avoided with negligible cost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes and no.  As the author of the C++ bindings chapter in MPI-2, I  
</span><br>
<span class="quotelev1">&gt; have a pretty good idea why we didn't do this.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The reason I cited above: triggering an automatic destructor to  
</span><br>
<span class="quotelev1">&gt; invoke the corresponding MPI_*_FREE function when local handles go  
</span><br>
<span class="quotelev1">&gt; out of scope is fraught with deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The C++ bindings are just that; they are meant to be building  
</span><br>
<span class="quotelev1">&gt; blocks to create more interesting C++ class libraries (such as  
</span><br>
<span class="quotelev1">&gt; OOMPI).  They are not intended to be the penultimate C++ interface,  
</span><br>
<span class="quotelev1">&gt; partly because the value of a good C++ interface is a) an active  
</span><br>
<span class="quotelev1">&gt; field of research, and b) subjective, and c) potentially dependent  
</span><br>
<span class="quotelev1">&gt; upon the requirements of the application that it is being designed  
</span><br>
<span class="quotelev1">&gt; for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. It seemed simplest to use some simple, fundamental C++ concepts  
</span><br>
<span class="quotelev1">&gt; (namespaces, basic objects) and make the bindings be extremely  
</span><br>
<span class="quotelev1">&gt; analogous to their C and Fortran counterparts.  Otherwise, it would  
</span><br>
<span class="quotelev1">&gt; be essentially designing a whole new interface with different  
</span><br>
<span class="quotelev1">&gt; semantics for message passing.  This was not deemed appropriate for  
</span><br>
<span class="quotelev1">&gt; a standard.  The standard is meant to be as simple,  
</span><br>
<span class="quotelev1">&gt; straightforward, and cross-language as possible (and look where it  
</span><br>
<span class="quotelev1">&gt; is!  Imagine if we had tried to make a real class library -- it  
</span><br>
<span class="quotelev1">&gt; would have led to even more corner cases and imprecision in the  
</span><br>
<span class="quotelev1">&gt; official standard).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, the Forum *strongly* decided against creating a C++ class  
</span><br>
<span class="quotelev1">&gt; library for MPI and instead provided building blocks where third  
</span><br>
<span class="quotelev1">&gt; parties could do whatever they wanted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, all those issues are minor for
</span><br>
<span class="quotelev2">&gt;&gt; me, and the MPI specification is just great. I hope I can find the
</span><br>
<span class="quotelev2">&gt;&gt; time to contribute to the MPI-2.1 effort to better define MPI  
</span><br>
<span class="quotelev2">&gt;&gt; behavior
</span><br>
<span class="quotelev2">&gt;&gt; in the corner cases (fortunatelly, there are a really small number of
</span><br>
<span class="quotelev2">&gt;&gt; them).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev2">&gt;&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev2">&gt;&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev2">&gt;&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev2">&gt;&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2065.php">Dirk Eddelbuettel: "[OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
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
