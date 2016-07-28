<?
$subject_val = "Re: [OMPI devel] Indirect calls to wait* and test*";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 10:35:06 2007" -->
<!-- isoreceived="20071130153506" -->
<!-- sent="Fri, 30 Nov 2007 10:35:02 -0500" -->
<!-- isosent="20071130153502" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Indirect calls to wait* and test*" -->
<!-- id="FEA791E7-3F59-43EA-A798-793899EEE5CD_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5F11999F-1FE3-4190-9D3D-7789F873E49C_at_eecs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 10:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2689.php">Jeff Squyres: "[OMPI devel] tmp XRC branches"</a>
<li><strong>Previous message:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>In reply to:</strong> <a href="2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2701.php">Jeff Squyres: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would find this a useful feature. I haven't played with the diff so  
<br>
I can't comment on it, but the idea of it sounds good to me.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Nov 29, 2007, at 6:37 PM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; This patch introduces customisable wait/test for requests as  
</span><br>
<span class="quotelev1">&gt; discussed at the face-to-face ompi meeting in Paris.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A new global structure (ompi_request_functions) holding all the  
</span><br>
<span class="quotelev1">&gt; pointers to the wait/test functions have been added.  
</span><br>
<span class="quotelev1">&gt; ompi_request_wait* and ompi_request_test* have been #defined to be  
</span><br>
<span class="quotelev1">&gt; replaced by ompi_request_functions.req_wait. The default  
</span><br>
<span class="quotelev1">&gt; implementations of the wait/test functions names have been changed  
</span><br>
<span class="quotelev1">&gt; from ompi_request_% to ompi_request_default_%. Those functions are  
</span><br>
<span class="quotelev1">&gt; static initializer of the ompi_request_functions structure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To modify the defaults, a components 1) copy the  
</span><br>
<span class="quotelev1">&gt; ompi_request_functions structure (the type ompi_request_fns_t can  
</span><br>
<span class="quotelev1">&gt; be used to declare a suitable variable), 2) change some of the  
</span><br>
<span class="quotelev1">&gt; functions according to its needs. This is best done at MPI_init  
</span><br>
<span class="quotelev1">&gt; time when there is no threads. Should this component be unloaded it  
</span><br>
<span class="quotelev1">&gt; have to restore the defaults. The ompi_request_default_* functions  
</span><br>
<span class="quotelev1">&gt; should never be called directly anywhere in the code. If a  
</span><br>
<span class="quotelev1">&gt; component needs to access the previously defined implementation  of  
</span><br>
<span class="quotelev1">&gt; wait, it should call its local copy of the function. Component  
</span><br>
<span class="quotelev1">&gt; implementors should keep in mind that another component might have  
</span><br>
<span class="quotelev1">&gt; already changed the defaults and needs to be called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Performance impact on NetPipe -a (async recv mode) does not show  
</span><br>
<span class="quotelev1">&gt; measurable overhead. Here follows the &quot;diff -y&quot; between original  
</span><br>
<span class="quotelev1">&gt; and modified ompi assembly code from ompi/mpi/c/wait.c. The only  
</span><br>
<span class="quotelev1">&gt; significant difference is an extra movl to load the address of the  
</span><br>
<span class="quotelev1">&gt; ompi_request_functions structure in eax. This obviously explains  
</span><br>
<span class="quotelev1">&gt; why there is no measurable cost on latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORIGINAL                                                               
</span><br>
<span class="quotelev1">&gt;                                   MODIFIED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; L2:													L2:
</span><br>
<span class="quotelev1">&gt; 	movl	L_ompi_request_null$non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx), % 
</span><br>
<span class="quotelev1">&gt; eax					movl	L_ompi_request_null$non_lazy_ptr-&quot;L00000000001$pb&quot;(% 
</span><br>
<span class="quotelev1">&gt; ebx), %eax
</span><br>
<span class="quotelev1">&gt; 	cmpl	%eax, (%edi)											cmpl	%eax, (%edi)
</span><br>
<span class="quotelev1">&gt; 	je	L18												je	L18
</span><br>
<span class="quotelev2">&gt; 												   &gt;		movl	L_ompi_request_functions 
</span><br>
<span class="quotelev1">&gt; $non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx), %eax
</span><br>
<span class="quotelev1">&gt; 	movl	%esi, 4(%esp)											movl	%esi, 4(%esp)
</span><br>
<span class="quotelev1">&gt; 	movl	%edi, (%esp)											movl	%edi, (%esp)
</span><br>
<span class="quotelev1">&gt; 	call	L_ompi_request_wait$stub							   |		call	*16(%eax)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the patch for those who want to try themselves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;custom_request_wait_and_test.patch&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I receive comments outlining the need, thread safe accessors  
</span><br>
<span class="quotelev1">&gt; could be added to allow components to change the functions at  
</span><br>
<span class="quotelev1">&gt; anytime during execution and not only during MPI_Init/Finalize.  
</span><br>
<span class="quotelev1">&gt; Please make noise if you find this useful.
</span><br>
<span class="quotelev1">&gt; If comments does not suggest extra work, I expect this code to be  
</span><br>
<span class="quotelev1">&gt; committed in trunk next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 8 oct. 07 &#224; 06:01, Aurelien Bouteiller a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For message logging purpose, we need to interface with wait_any,
</span><br>
<span class="quotelev2">&gt;&gt; wait_some, test, test_any, test_some, test_all. It is not possible to
</span><br>
<span class="quotelev2">&gt;&gt; use PMPI for this purpose. During the face-to-face meeting in Paris
</span><br>
<span class="quotelev2">&gt;&gt; (5-12 october 2007) we discussed this issue and came to the
</span><br>
<span class="quotelev2">&gt;&gt; conclusion that the best way to achieve this is to replace direct
</span><br>
<span class="quotelev2">&gt;&gt; calls to ompi_request_wait* and test* by indirect calls (same way as
</span><br>
<span class="quotelev2">&gt;&gt; PML send, recv, etc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Basic idea is to declare a static structure containing the 8 pointers
</span><br>
<span class="quotelev2">&gt;&gt; to all the functions. This structure is initialized at compilation
</span><br>
<span class="quotelev2">&gt;&gt; time with the current basic wait/test functions. Before end of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_init, any component might replace the basics with specialized
</span><br>
<span class="quotelev2">&gt;&gt; functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Expected cost is less than .01us latency according to preliminary
</span><br>
<span class="quotelev2">&gt;&gt; test. The method is consistent with the way we call pml send/recv.
</span><br>
<span class="quotelev2">&gt;&gt; Mechanism could be used later for stripping out grequest from
</span><br>
<span class="quotelev2">&gt;&gt; critical path when they are not used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien Bouteiller, PhD
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev2">&gt;&gt; +1 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev2">&gt;&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev2">&gt;&gt; Knoxville, TN 37996
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Aurelien Bouteiller, Sr. Research Associate
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev1">&gt; +1 865 974 6321
</span><br>
<span class="quotelev1">&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev1">&gt; Knoxville, TN 37996
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
<li><strong>Next message:</strong> <a href="2689.php">Jeff Squyres: "[OMPI devel] tmp XRC branches"</a>
<li><strong>Previous message:</strong> <a href="2687.php">Tim Prins: "Re: [OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>In reply to:</strong> <a href="2685.php">Aurelien Bouteiller: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2701.php">Jeff Squyres: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
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
