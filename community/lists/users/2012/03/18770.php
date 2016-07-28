<?
$subject_val = "Re: [OMPI users] invalid write in opal_generic_simple_unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 16:52:53 2012" -->
<!-- isoreceived="20120314205253" -->
<!-- sent="Wed, 14 Mar 2012 13:52:49 -0700" -->
<!-- isosent="20120314205249" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] invalid write in opal_generic_simple_unpack" -->
<!-- id="D0B9FE2D-EAEC-49BF-B4AC-CA06E78CF934_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+Py04Cq-RYLVja7sSi53B-ghGVhR-MOJ=f3qvytdNUyauwPFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] invalid write in opal_generic_simple_unpack<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 16:52:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18771.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2012, at 1:06 PM, Patrik Jonsson wrote:
<br>
<p><span class="quotelev1">&gt; I think I tracked it down, though. The problem was in the boost.mpi
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<p>Yuck!  Glad you tracked it down.
<br>
<p><span class="quotelev1">&gt; I do have a more general question, though: Is there a good way to back
</span><br>
<span class="quotelev1">&gt; out the location of the request object if I stop deep in the bowels of
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<p>You mean if you stop a debugger deep in the middle of Open MPI, e.g., inside an MPI_Test?  
<br>
<p>Yes and no.  Open MPI does a lot of sub-classing of structs for opaqueness -- an MPI_Request, for example, is a struct ompi_request_t, which is very small.  A point-to-point non-blocking request will have its own struct that has an ompi_request_t as the first member.
<br>
<p>We do this because there are many different types of requests, and they all have to be handled by MPI_Test (etc.).
<br>
<p>So: yes, if you cast the request to the right struct type and print it in gdb, you can see all the arguments that were passed to the original Isend (or whatever).  But it is a little involved to know what type to cast it to, etc.
<br>
<p><span class="quotelev1">&gt; As I understand it, just because the user-level call is a certain
</span><br>
<span class="quotelev1">&gt; MPI_Test doesn't mean that under the hood it's working on other
</span><br>
<span class="quotelev1">&gt; requests, but this nonlocality makes it difficult to track down
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<p><p>Understood.  That's the nature of the beast, unfortunately.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18771.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18769.php">Patrik Jonsson: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
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
