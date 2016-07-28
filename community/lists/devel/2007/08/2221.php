<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 25 12:12:36 2007" -->
<!-- isoreceived="20070825161236" -->
<!-- sent="Sat, 25 Aug 2007 10:12:00 -0600" -->
<!-- isosent="20070825161200" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_mpi_abort" -->
<!-- id="D3EB53A2-F85E-4DED-B560-2F7BCEF3FC82_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="17DD79DA-1112-49BD-9B84-791FBC7FE4DC_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-25 12:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2220.php">Jeff Squyres: "[OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2220.php">Jeff Squyres: "[OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2007, at 7:10 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 1. We have logic in ompi_mpi_abort to prevent recursive invocation
</span><br>
<span class="quotelev1">&gt; (ompi_mpi_abort.c:60):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Protection for recursive invocation */
</span><br>
<span class="quotelev1">&gt;      if (have_been_invoked) {
</span><br>
<span class="quotelev1">&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      have_been_invoked = true;
</span><br>
<p>This, IMHO, is a wrong thing to do.  The intent of ompi_mpi_abort()  
<br>
was that it never returned.  But now it is?  That seems wrong to me.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2220.php">Jeff Squyres: "[OMPI devel] ompi_mpi_abort"</a>
<li><strong>In reply to:</strong> <a href="2220.php">Jeff Squyres: "[OMPI devel] ompi_mpi_abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2222.php">Rainer Keller: "Re: [OMPI devel] ompi_mpi_abort"</a>
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
