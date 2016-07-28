<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 14:14:13 2010" -->
<!-- isoreceived="20100211191413" -->
<!-- sent="Thu, 11 Feb 2010 16:14:08 -0300" -->
<!-- isosent="20100211191408" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="e7ba66e41002111114m1919d667yd84863d870986313_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="68DCF419-B9A8-4829-8511-505298D04539_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 14:14:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7421.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL"</a>
<li><strong>Previous message:</strong> <a href="7419.php">Terry.Dontje_at_[hidden]: "[OMPI devel] RFC: Processor affinity hardware thread support"</a>
<li><strong>In reply to:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7422.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7422.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11 February 2010 15:06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is absolutely not true. Open MPI supports zero length collective operations (all of them actually), but if their arguments are correctly shaped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, you are right here ...
<br>
<p><span class="quotelev1">&gt; What you're asking for is a free ticket to write MPI calls that do not follow the MPI requirements when a special value for count is given.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>But you did not answer my previous question... What's the rationale
<br>
for requiring sendbuf!=recvbuf when count=0? I would argue you want a
<br>
free ticket :-) to put restrictions on user code (without an actual
<br>
rationale) in order to simplify your implementation.
<br>
<p><span class="quotelev1">&gt; While zero-length arrays/sequence/containers do appears in real code, they are not equal to NULL. If they are NULL, that means they do not contain any useful data, and they don't need to be source or target of any kind of [collective or point-to-point] communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I know. Moreover, I agree with you. NULL should be reserved for
<br>
invalid pointers, not for zero-length array... The problem is that
<br>
people out there seem to disagree or just do not pay any attention to
<br>
this, thus (pointer=NULL,length=0) DO APPEAR in real life (like the
<br>
Python example I previously showed you)... Additionally, some time ago
<br>
(while discussing MPI_Alloc_mem(size=0)) we commented on the different
<br>
return values for malloc(0) depending on the platform...
<br>
<p>Well, this discussion got too far... In the end, I agree that
<br>
representing zero-length arrays with (pointer=NULL,length=0) should be
<br>
regarded as bad practice...
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7421.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL"</a>
<li><strong>Previous message:</strong> <a href="7419.php">Terry.Dontje_at_[hidden]: "[OMPI devel] RFC: Processor affinity hardware thread support"</a>
<li><strong>In reply to:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7422.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7422.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
