<?
$subject_val = "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 18:27:56 2012" -->
<!-- isoreceived="20120305232756" -->
<!-- sent="05 Mar 2012 23:27:50 +0000" -->
<!-- isosent="20120305232750" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="Prayer.1.3.4.1203052327500.23463_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CAE074-F90F-4A04-BE5F-9262FF885DD1_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 18:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10684.php">nadia.derbey: "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<li><strong>Previous message:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5 2012, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I gave it a try (r26103). It was messy, and I hope I got it right. Let's 
</span><br>
<span class="quotelev1">&gt; soak it for few days with our nightly testing to see how it behave.
</span><br>
<p>That'll at least check that it's not totally broken.  The killer about
<br>
such wording is that you cannot guarantee exactly how a new vendor will
<br>
interpret it.  That caused a LOT of trouble with C90 and to some extent
<br>
with C99.  Currently compilers are following the path of doing less and
<br>
less optimisation, rather than more (which was happening then), which
<br>
reduces the chances of problems.
<br>
<p>I think the chances of any new standard not honouring casts in such
<br>
expressions is very low, but I didn't expect the breakages in C99.
<br>
I didn't expect that WG14 would completely change their interpretation
<br>
of the same wording in a decade, either.   As far as I know, C11 hasn't
<br>
broken anything in this area (though it has in others), but I haven't
<br>
looked at it in detail.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10684.php">nadia.derbey: "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<li><strong>Previous message:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
