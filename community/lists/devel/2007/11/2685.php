<?
$subject_val = "Re: [OMPI devel] Indirect calls to wait* and test*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 18:37:42 2007" -->
<!-- isoreceived="20071129233742" -->
<!-- sent="Thu, 29 Nov 2007 18:37:36 -0500" -->
<!-- isosent="20071129233736" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Indirect calls to wait* and test*" -->
<!-- id="5F11999F-1FE3-4190-9D3D-7789F873E49C_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0F33C1EF-9706-40CA-923F-A7E6AC4793A3_at_eecs.utk.edu" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 18:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2686.php">Jon Mason: "[OMPI devel] Branch for iWARP uDAPL enablement"</a>
<li><strong>Previous message:</strong> <a href="2684.php">Sajjad Tabib: "[OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2399.php">Aurelien Bouteiller: "[OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2688.php">Josh Hursey: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Reply:</strong> <a href="2688.php">Josh Hursey: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2701.php">Jeff Squyres: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch introduces customisable wait/test for requests as discussed  
<br>
at the face-to-face ompi meeting in Paris.
<br>
<p>A new global structure (ompi_request_functions) holding all the  
<br>
pointers to the wait/test functions have been added.  
<br>
ompi_request_wait* and ompi_request_test* have been #defined to be  
<br>
replaced by ompi_request_functions.req_wait. The default  
<br>
implementations of the wait/test functions names have been changed  
<br>
from ompi_request_% to ompi_request_default_%. Those functions are  
<br>
static initializer of the ompi_request_functions structure.
<br>
<p>To modify the defaults, a components 1) copy the  
<br>
ompi_request_functions structure (the type ompi_request_fns_t can be  
<br>
used to declare a suitable variable), 2) change some of the functions  
<br>
according to its needs. This is best done at MPI_init time when there  
<br>
is no threads. Should this component be unloaded it have to restore  
<br>
the defaults. The ompi_request_default_* functions should never be  
<br>
called directly anywhere in the code. If a component needs to access  
<br>
the previously defined implementation  of wait, it should call its  
<br>
local copy of the function. Component implementors should keep in mind  
<br>
that another component might have already changed the defaults and  
<br>
needs to be called.
<br>
<p>Performance impact on NetPipe -a (async recv mode) does not show  
<br>
measurable overhead. Here follows the &quot;diff -y&quot; between original and  
<br>
modified ompi assembly code from ompi/mpi/c/wait.c. The only  
<br>
significant difference is an extra movl to load the address of the  
<br>
ompi_request_functions structure in eax. This obviously explains why  
<br>
there is no measurable cost on latency.
<br>
<p>ORIGINAL 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MODIFIED
<br>
<p>L2:													L2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	L_ompi_request_null$non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx),  
<br>
%eax					movl	L_ompi_request_null 
<br>
$non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx), %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmpl	%eax, (%edi)											cmpl	%eax, (%edi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;je	L18												je	L18
<br>
<span class="quotelev1">												   &gt;		movl	L_ompi_request_functions 
</span><br>
$non_lazy_ptr-&quot;L00000000001$pb&quot;(%ebx), %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	%esi, 4(%esp)											movl	%esi, 4(%esp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	%edi, (%esp)											movl	%edi, (%esp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call	L_ompi_request_wait$stub							   |		call	*16(%eax)
<br>
<p>Here is the patch for those who want to try themselves.
<br>
<p><p>

<br><p>
<p><p><p>If I receive comments outlining the need, thread safe accessors could  
<br>
be added to allow components to change the functions at anytime during  
<br>
execution and not only during MPI_Init/Finalize. Please make noise if  
<br>
you find this useful.
<br>
If comments does not suggest extra work, I expect this code to be  
<br>
committed in trunk next week.
<br>
<p>Aurelien
<br>
<p>Le 8 oct. 07 &#224; 06:01, Aurelien Bouteiller a &#233;crit :
<br>
<p><span class="quotelev1">&gt; For message logging purpose, we need to interface with wait_any,
</span><br>
<span class="quotelev1">&gt; wait_some, test, test_any, test_some, test_all. It is not possible to
</span><br>
<span class="quotelev1">&gt; use PMPI for this purpose. During the face-to-face meeting in Paris
</span><br>
<span class="quotelev1">&gt; (5-12 october 2007) we discussed this issue and came to the
</span><br>
<span class="quotelev1">&gt; conclusion that the best way to achieve this is to replace direct
</span><br>
<span class="quotelev1">&gt; calls to ompi_request_wait* and test* by indirect calls (same way as
</span><br>
<span class="quotelev1">&gt; PML send, recv, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basic idea is to declare a static structure containing the 8 pointers
</span><br>
<span class="quotelev1">&gt; to all the functions. This structure is initialized at compilation
</span><br>
<span class="quotelev1">&gt; time with the current basic wait/test functions. Before end of
</span><br>
<span class="quotelev1">&gt; MPI_init, any component might replace the basics with specialized
</span><br>
<span class="quotelev1">&gt; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Expected cost is less than .01us latency according to preliminary
</span><br>
<span class="quotelev1">&gt; test. The method is consistent with the way we call pml send/recv.
</span><br>
<span class="quotelev1">&gt; Mechanism could be used later for stripping out grequest from
</span><br>
<span class="quotelev1">&gt; critical path when they are not used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aurelien Bouteiller, PhD
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
<p><pre>
--
Dr. Aurelien Bouteiller, Sr. Research Associate
Innovative Computing Laboratory - MPI group
+1 865 974 6321
1122 Volunteer Boulevard
Claxton Education Building Suite 350
Knoxville, TN 37996
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2685/custom_request_wait_and_test.patch">custom_request_wait_and_test.patch</a>
</ul>
<!-- attachment="custom_request_wait_and_test.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2686.php">Jon Mason: "[OMPI devel] Branch for iWARP uDAPL enablement"</a>
<li><strong>Previous message:</strong> <a href="2684.php">Sajjad Tabib: "[OMPI devel] Using ompi_proc_t's proc_name.vpid as Universal rank"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2399.php">Aurelien Bouteiller: "[OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2688.php">Josh Hursey: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Reply:</strong> <a href="2688.php">Josh Hursey: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2701.php">Jeff Squyres: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
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
