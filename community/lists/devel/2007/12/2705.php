<?
$subject_val = "Re: [OMPI devel] Indirect calls to wait* and test*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 13:16:27 2007" -->
<!-- isoreceived="20071203181627" -->
<!-- sent="Mon, 3 Dec 2007 13:16:19 -0500" -->
<!-- isosent="20071203181619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Indirect calls to wait* and test*" -->
<!-- id="892ABBBE-5D18-4B05-B132-4C67EB36FBD2_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFB3FFA9-9AC2-4034-9F25-1C02D2F31BC6_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Indirect calls to wait* and test*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-03 13:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2706.php">Jon Mason: "[OMPI devel] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2704.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>In reply to:</strong> <a href="2704.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right ok, I remember now.
<br>
<p>Thanks!
<br>
<p>On Dec 3, 2007, at 12:38 PM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; You asked the exact same question in Paris, so I bet  you don't
</span><br>
<span class="quotelev1">&gt; remember the discussions :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can not only use a callback on request completion (actually there
</span><br>
<span class="quotelev1">&gt; is already one, req_free is called anytime a request completes and can
</span><br>
<span class="quotelev1">&gt; be used to that purpose). We need to know wether the request have been
</span><br>
<span class="quotelev1">&gt; completed in a wait, waitany or waitsome as we have something
</span><br>
<span class="quotelev1">&gt; different to do depending on the context. More than that, we also need
</span><br>
<span class="quotelev1">&gt; to know how many and which requests finished in a particular waitsome/
</span><br>
<span class="quotelev1">&gt; any/test and be able to replay it. I have been looking for several
</span><br>
<span class="quotelev1">&gt; workaround to avoid the proposed patch and none I could think of
</span><br>
<span class="quotelev1">&gt; would  do the job (thread condition between bottom and top layer
</span><br>
<span class="quotelev1">&gt; prevents holding requests from the bottom layer deterministically).
</span><br>
<span class="quotelev1">&gt; However, now that I have the implementation and can see both
</span><br>
<span class="quotelev1">&gt; performance and assembly diff, I am pleased by the very little
</span><br>
<span class="quotelev1">&gt; difference it makes. I even feel confident about this approach being
</span><br>
<span class="quotelev1">&gt; less harmful to performance than an extra callback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 3 d&#233;c. 07 &#224; 09:02, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I confess to forgetting some of the Paris discussion.  :-\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could the same effect of these pointers also be effected by having a
</span><br>
<span class="quotelev2">&gt;&gt; completion callback function pointer on the request?  Or do you need
</span><br>
<span class="quotelev2">&gt;&gt; more than that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 29, 2007, at 6:37 PM, Aurelien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This patch introduces customisable wait/test for requests as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussed at the face-to-face ompi meeting in Paris.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A new global structure (ompi_request_functions) holding all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointers to the wait/test functions have been added.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_wait* and ompi_request_test* have been #defined to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replaced by ompi_request_functions.req_wait. The default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementations of the wait/test functions names have been changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from ompi_request_% to ompi_request_default_%. Those functions are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static initializer of the ompi_request_functions structure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To modify the defaults, a components 1) copy the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_functions structure (the type ompi_request_fns_t can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used to declare a suitable variable), 2) change some of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions according to its needs. This is best done at MPI_init time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when there is no threads. Should this component be unloaded it have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to restore the defaults. The ompi_request_default_* functions should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never be called directly anywhere in the code. If a component needs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to access the previously defined implementation  of wait, it should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call its local copy of the function. Component implementors should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keep in mind that another component might have already changed the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defaults and needs to be called.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Performance impact on NetPipe -a (async recv mode) does not show
</span><br>
<span class="quotelev3">&gt;&gt;&gt; measurable overhead. Here follows the &quot;diff -y&quot; between original and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modified ompi assembly code from ompi/mpi/c/wait.c. The only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; significant difference is an extra movl to load the address of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_functions structure in eax. This obviously explains why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is no measurable cost on latency.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORIGINAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                                                               MODIFIED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L2:													L2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	movl	L_ompi_request_null$non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %eax					movl	L_ompi_request_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx), %eax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	cmpl	%eax, (%edi)											cmpl	%eax, (%edi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	je	L18												je	L18
</span><br>
<span class="quotelev4">&gt;&gt;&gt; 												   &gt;		movl	L_ompi_request_functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx), %eax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	movl	%esi, 4(%esp)											movl	%esi, 4(%esp)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	movl	%edi, (%esp)											movl	%edi, (%esp)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	call	L_ompi_request_wait$stub							   |		call	*16(%eax)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the patch for those who want to try themselves.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;custom_request_wait_and_test.patch&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I receive comments outlining the need, thread safe accessors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be added to allow components to change the functions at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anytime during execution and not only during MPI_Init/Finalize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please make noise if you find this useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If comments does not suggest extra work, I expect this code to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; committed in trunk next week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 8 oct. 07 &#224; 06:01, Aurelien Bouteiller a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For message logging purpose, we need to interface with wait_any,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wait_some, test, test_any, test_some, test_all. It is not possible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use PMPI for this purpose. During the face-to-face meeting in Paris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (5-12 october 2007) we discussed this issue and came to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conclusion that the best way to achieve this is to replace direct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls to ompi_request_wait* and test* by indirect calls (same way  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PML send, recv, etc).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basic idea is to declare a static structure containing the 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pointers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to all the functions. This structure is initialized at compilation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time with the current basic wait/test functions. Before end of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_init, any component might replace the basics with specialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Expected cost is less than .01us latency according to preliminary
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test. The method is consistent with the way we call pml send/recv.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mechanism could be used later for stripping out grequest from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; critical path when they are not used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aurelien Bouteiller, PhD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1 865 974 6321
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Aurelien Bouteiller, Sr. Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 865 974 6321
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2706.php">Jon Mason: "[OMPI devel] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2704.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>In reply to:</strong> <a href="2704.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
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
