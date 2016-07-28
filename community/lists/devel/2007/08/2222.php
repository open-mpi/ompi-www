<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 25 13:26:41 2007" -->
<!-- isoreceived="20070825172641" -->
<!-- sent="Sat, 25 Aug 2007 19:20:39 +0200" -->
<!-- isosent="20070825172039" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_mpi_abort" -->
<!-- id="200708251920.39840.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D3EB53A2-F85E-4DED-B560-2F7BCEF3FC82_at_lanl.gov" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-25 13:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 25 August 2007 18:12, Brian Barrett wrote:
<br>
<span class="quotelev2">&gt; &gt; 1. We have logic in ompi_mpi_abort to prevent recursive invocation
</span><br>
<span class="quotelev2">&gt; &gt; (ompi_mpi_abort.c:60):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      /* Protection for recursive invocation */
</span><br>
<span class="quotelev2">&gt; &gt;      if (have_been_invoked) {
</span><br>
<span class="quotelev2">&gt; &gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;      have_been_invoked = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This, IMHO, is a wrong thing to do.  The intent of ompi_mpi_abort()
</span><br>
<span class="quotelev1">&gt; was that it never returned.  But now it is?  That seems wrong to me.
</span><br>
<p>Recursive or not, if we add __opal_attribute_noreturn__, the compiler (and 
<br>
Coverity, as David said in a private mail) then knows, that the function 
<br>
won't exit.
<br>
<p>Of course, the compiler does also check, that the function indeed does not 
<br>
return...
<br>
So the patch below should silence coverity (and help the compiler optimize 
<br>
some code which calls ompi_mpi_abort).
<br>
<p>OK to check in?
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2222/ompi_mpi_abort_noreturn-2007.08.25.patch">ompi_mpi_abort_noreturn-2007.08.25.patch</a>
</ul>
<!-- attachment="ompi_mpi_abort_noreturn-2007.08.25.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2223.php">Jeff Squyres: "Re: [OMPI devel] ompi_mpi_abort"</a>
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
