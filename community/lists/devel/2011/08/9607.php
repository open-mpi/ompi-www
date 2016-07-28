<?
$subject_val = "Re: [OMPI devel] Warnings within C++ bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:44:19 2011" -->
<!-- isoreceived="20110804154419" -->
<!-- sent="Thu, 4 Aug 2011 11:44:14 -0400" -->
<!-- isosent="20110804154414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings within C++ bindings" -->
<!-- id="DE9C51FC-3EDF-42DD-AE1E-14D50F2A15D2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFRVdT-t1GcU_nBCk-_kaMv475Cqg-24Kda6J708EuXEut8uQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings within C++ bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<li><strong>Previous message:</strong> <a href="9606.php">J&#250;lio Hoffimann: "[OMPI devel] Warnings within C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="9606.php">J&#250;lio Hoffimann: "[OMPI devel] Warnings within C++ bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting the issue.  I fixed it on the SVN trunk in <a href="https://svn.open-mpi.org/trac/ompi/changeset/24989">https://svn.open-mpi.org/trac/ompi/changeset/24989</a>, and filed changset move requests for v1.4 and v1.5.
<br>
<p><p>On Aug 4, 2011, at 9:30 AM, J&#250;lio Hoffimann wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When compiling C++ applications with OpenMPI 1.4.3 installed from Ubuntu repositories, some easily addressable warnings occurs due to unused arguments in function definitions. Namely, comm_inln.h has the following two definitions:
</span><br>
<span class="quotelev1">&gt; inline int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; ::Comm::NULL_COPY_FN(const MPI::Comm&amp; oldcomm, int comm_keyval,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt; void* extra_state, void* attribute_val_in,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt; void* attribute_val_out, bool&amp; flag)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     flag 
</span><br>
<span class="quotelev1">&gt; = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; ::Comm::NULL_DELETE_FN(MPI::Comm&amp; comm, int comm_keyval, void* attribute_val,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; void* extra_state)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the compiler just needs the function prototype, the solution is just comment out the unused identifiers:
</span><br>
<span class="quotelev1">&gt; inline int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; ::Comm::NULL_COPY_FN(const MPI::Comm&amp; /*oldcomm*/, int /*comm_keyval*/,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt; void* /*extra_state*/, void* /*attribute_val_in*/,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt; void* /*attribute_val_out*/, bool&amp; flag)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     flag 
</span><br>
<span class="quotelev1">&gt; = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline int
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; ::Comm::NULL_DELETE_FN(MPI::Comm&amp; /*comm*/, int /*comm_keyval*/, void* /*attribute_val*/,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; void* /*extra_state*/)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; I would appreciate if you fix this cosmetic bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; J&#250;lio.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<li><strong>Previous message:</strong> <a href="9606.php">J&#250;lio Hoffimann: "[OMPI devel] Warnings within C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="9606.php">J&#250;lio Hoffimann: "[OMPI devel] Warnings within C++ bindings"</a>
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
