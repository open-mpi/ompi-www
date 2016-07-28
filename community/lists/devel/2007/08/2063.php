<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 20:30:46 2007" -->
<!-- isoreceived="20070802003046" -->
<!-- sent="Wed, 1 Aug 2007 20:30:25 -0400" -->
<!-- isosent="20070802003025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="86A36B68-E420-4CB4-B812-E135D168450F_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40707311543k41fae26bo290a33b9e3d5c377_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-08-01 20:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2062.php">Jeff Squyres: "[OMPI devel] Tracking MPI_ALLOC_MEM leaks"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/2060.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2007, at 6:43 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; I am working in the development of MPI for Python, a port of MPI to
</span><br>
<span class="quotelev1">&gt; Python, a high level language with automatic memory management. Said
</span><br>
<span class="quotelev1">&gt; that, in such an environment, having to call XXX.Free() for  every
</span><br>
<span class="quotelev1">&gt; object i get from a call like XXX.Get_something() is really an
</span><br>
<span class="quotelev1">&gt; unnecesary pain.
</span><br>
<p>Gotcha.
<br>
<p>But I don't see why this means that you need to know if an MPI handle  
<br>
points to an intrinsic object or not...?
<br>
<p><span class="quotelev1">&gt; Many things in MPI are LOCAL (datatypes, groups, predefined
</span><br>
<span class="quotelev1">&gt; operations) and in general destroying them for user-space is
</span><br>
<span class="quotelev1">&gt; guaranteed by MPI to not conflict with system(MPI)-space and
</span><br>
<span class="quotelev1">&gt; communication (i.e. if you create a derived datatype four using it in
</span><br>
<span class="quotelev1">&gt; a construction of another derived datatype, you can safely free the
</span><br>
<span class="quotelev1">&gt; first).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, for all those LOCAL objects, I could implement automatic
</span><br>
<span class="quotelev1">&gt; deallocation of handles for Python (for Comm, Win, and File, that is
</span><br>
<span class="quotelev1">&gt; not so easy, at freeing them is a collective operation AFAIK, and
</span><br>
<span class="quotelev1">&gt; automaticaly freeing them can lead to deadlocks).
</span><br>
<p>This is a difficult issue -- deadlocks for removing objects that are  
<br>
collective actions.  It's one of the reasons the Forum decided not to  
<br>
have the C++ bindings automatically free handles when they go out of  
<br>
scope.
<br>
<p><span class="quotelev1">&gt; My Python wrappers (mpi4py) are inteded to be used in any platform
</span><br>
<span class="quotelev1">&gt; with any MPI implementation. But things are not so easy, as there are
</span><br>
<span class="quotelev1">&gt; many corner cases in the MPI standard.
</span><br>
<p>Yes, indeed.  :-)
<br>
<p><span class="quotelev1">&gt; Python es a wonderfull, powerfull language, very friendly to write
</span><br>
<span class="quotelev1">&gt; things. Prove of that is the many bug reports I provided here. By
</span><br>
<span class="quotelev1">&gt; using python, I can run all my unittest script in a single MPI run,
</span><br>
<span class="quotelev1">&gt; thus they have the potential to find interaction problems between all
</span><br>
<span class="quotelev1">&gt; parts of MPI. If any of you, OMPI developers, have some knowledge of
</span><br>
<span class="quotelev1">&gt; Python, I invite you to try mpi4py, as you would be able to write very
</span><br>
<span class="quotelev1">&gt; fast many many tests, not only for things that should work, but also
</span><br>
<span class="quotelev1">&gt; for things that should fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the long mail. In short, many things in MPI are not clearly
</span><br>
<span class="quotelev1">&gt; designed for languages other than C and Fortran. Even in C++
</span><br>
<span class="quotelev1">&gt; specification, there are things that are unnaceptable, like the
</span><br>
<span class="quotelev1">&gt; open-door to the problem of having dangling references, which could be
</span><br>
<span class="quotelev1">&gt; avoided with negligible cost.
</span><br>
<p>Yes and no.  As the author of the C++ bindings chapter in MPI-2, I  
<br>
have a pretty good idea why we didn't do this.  :-)
<br>
<p>1. The reason I cited above: triggering an automatic destructor to  
<br>
invoke the corresponding MPI_*_FREE function when local handles go  
<br>
out of scope is fraught with deadlock.
<br>
<p>2. The C++ bindings are just that; they are meant to be building  
<br>
blocks to create more interesting C++ class libraries (such as  
<br>
OOMPI).  They are not intended to be the penultimate C++ interface,  
<br>
partly because the value of a good C++ interface is a) an active  
<br>
field of research, and b) subjective, and c) potentially dependent  
<br>
upon the requirements of the application that it is being designed for.
<br>
<p>3. It seemed simplest to use some simple, fundamental C++ concepts  
<br>
(namespaces, basic objects) and make the bindings be extremely  
<br>
analogous to their C and Fortran counterparts.  Otherwise, it would  
<br>
be essentially designing a whole new interface with different  
<br>
semantics for message passing.  This was not deemed appropriate for a  
<br>
standard.  The standard is meant to be as simple, straightforward,  
<br>
and cross-language as possible (and look where it is!  Imagine if we  
<br>
had tried to make a real class library -- it would have led to even  
<br>
more corner cases and imprecision in the official standard).
<br>
<p>In short, the Forum *strongly* decided against creating a C++ class  
<br>
library for MPI and instead provided building blocks where third  
<br>
parties could do whatever they wanted.
<br>
<p><span class="quotelev1">&gt; Anyway, all those issues are minor for
</span><br>
<span class="quotelev1">&gt; me, and the MPI specification is just great. I hope I can find the
</span><br>
<span class="quotelev1">&gt; time to contribute to the MPI-2.1 effort to better define MPI behavior
</span><br>
<span class="quotelev1">&gt; in the corner cases (fortunatelly, there are a really small number of
</span><br>
<span class="quotelev1">&gt; them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2062.php">Jeff Squyres: "[OMPI devel] Tracking MPI_ALLOC_MEM leaks"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/2060.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
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
