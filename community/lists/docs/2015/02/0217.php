<?
$subject_val = "Re: [OMPI docs] Small note about MPI_Buffer_detach";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 09:55:00 2015" -->
<!-- isoreceived="20150221145500" -->
<!-- sent="Sat, 21 Feb 2015 14:54:58 +0000" -->
<!-- isosent="20150221145458" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Small note about MPI_Buffer_detach" -->
<!-- id="A1351F84-7159-486A-9FA3-E0779A6BE28D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54E73E06.2090809_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Small note about MPI_Buffer_detach<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-21 09:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2016/03/0218.php">Phil Ruffwind: "[OMPI docs] Documentation of MPI_Status"</a>
<li><strong>Previous message:</strong> <a href="0216.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] MPI_Ibarrier missing request argument"</a>
<li><strong>In reply to:</strong> <a href="0214.php">Maximilian: "[OMPI docs] Small note about MPI_Buffer_detach"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI 3.0 standard gives some illumination here -- see section 3.6, page 45, right after the description of MPI_BUFFER_DETACH (note that the C++ bindings have been removed from MPI-3.0, which is why they are not described here):
<br>
<p>-----
<br>
Advice to users. Even though the C functions MPI_Buffer_attach and MPI_Buffer_detach both have a first argument of type void*, these arguments are used differently: A pointer to the buffer is passed to MPI_Buffer_attach; the address of the pointer is passed to MPI_Buffer_detach, so that this call can return the pointer value. In Fortran with the mpi module or mpif.h, the type of the buffer_addr argument is wrongly defined and the argument is therefore unused. In Fortran with the mpi_f08 module, the address of the buffer is returned as TYPE(C_PTR), see also Example 8.1 on page 341 about the use of C_PTR pointers. (End of advice to users.)
<br>
<p>Rationale. Both arguments are defined to be of type void* (rather than
<br>
void* and void**, respectively), so as to avoid complex type casts. E.g., in the last example, &amp;buff, which is of type char**, can be passed as argument to MPI_Buffer_detach without type casting. If the formal parameter had type void** then we would need a type cast before and after the call. (End of rationale.)
<br>
-----
<br>
<p><span class="quotelev1">&gt; On Feb 20, 2015, at 9:00 AM, Maximilian &lt;maxinator333_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand, that MPI_Buffer_detach returns the buffer address in buf. For that I do understand the C++ syntax:
</span><br>
<span class="quotelev1">&gt;    int Detach_buffer(void*&amp; buffer)
</span><br>
<span class="quotelev1">&gt; which is a call by reference of a void*. But I find the C-Syntax misleading:
</span><br>
<span class="quotelev1">&gt;    int MPI_Buffer_detach(void *buf, int *size)
</span><br>
<span class="quotelev1">&gt; Here a void pointer is given. It could be thought that the void* to the buffer is copied to that function, meaning there would be no return of the buffer address. I think it should read:
</span><br>
<span class="quotelev1">&gt;    int MPI_Buffer_detach(void **buf, int *size)
</span><br>
<span class="quotelev1">&gt; for that reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/docs/2015/02/index.php">http://www.open-mpi.org/community/lists/docs/2015/02/index.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2016/03/0218.php">Phil Ruffwind: "[OMPI docs] Documentation of MPI_Status"</a>
<li><strong>Previous message:</strong> <a href="0216.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] MPI_Ibarrier missing request argument"</a>
<li><strong>In reply to:</strong> <a href="0214.php">Maximilian: "[OMPI docs] Small note about MPI_Buffer_detach"</a>
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
