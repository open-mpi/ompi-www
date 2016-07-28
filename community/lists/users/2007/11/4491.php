<?
$subject_val = "Re: [OMPI users] errno=131 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 18 21:43:29 2007" -->
<!-- isoreceived="20071119024329" -->
<!-- sent="Sun, 18 Nov 2007 22:43:10 -0400" -->
<!-- isosent="20071119024310" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errno=131 ?" -->
<!-- id="200711182143.10636.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B2276CEE-D46C-49F1-88B5-9944F541C94F_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] errno=131 ?<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-18 21:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4492.php">Terry Frankcombe: "[OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="4490.php">George Bosilca: "Re: [OMPI users] errno=131 ?"</a>
<li><strong>In reply to:</strong> <a href="4490.php">George Bosilca: "Re: [OMPI users] errno=131 ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or you can follow the advice in this faq:
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-connection-errors">http://www.open-mpi.org/faq/?category=tcp#tcp-connection-errors</a>
<br>
<p>and run:
<br>
perl -e 'die$!=131'
<br>
<p>Tim
<br>
<p>On Sunday 18 November 2007 09:29:25 pm George Bosilca wrote:
<br>
<span class="quotelev1">&gt; There is a good reason for this. The errno is system dependent. As an
</span><br>
<span class="quotelev1">&gt; example on my Debian cluster errno 131 means &quot;ENOTRECOVERABLE&quot;.
</span><br>
<span class="quotelev1">&gt; Usually, this value is used with mutexes and not with writev.
</span><br>
<span class="quotelev1">&gt; If you want to know what the 131 means on your specific system, take a
</span><br>
<span class="quotelev1">&gt; look in /usr/include/errno.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2007, at 8:59 AM, Lydia Heck wrote:
</span><br>
<span class="quotelev2">&gt; &gt; One of our programs has got stuck - it has not terminated -
</span><br>
<span class="quotelev2">&gt; &gt; with the error messages:
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_frag_send: writev failed with errno=131.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Searching the openmpi web site did not result in a positive hit.
</span><br>
<span class="quotelev2">&gt; &gt; What does it mean?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running 1.2.1r14096
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lydia
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Dr E L  Heck
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; University of Durham
</span><br>
<span class="quotelev2">&gt; &gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt; &gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt; &gt; Department of Physics
</span><br>
<span class="quotelev2">&gt; &gt; South Road
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev2">&gt; &gt; United Kingdom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt; &gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt; &gt; ___________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4492.php">Terry Frankcombe: "[OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="4490.php">George Bosilca: "Re: [OMPI users] errno=131 ?"</a>
<li><strong>In reply to:</strong> <a href="4490.php">George Bosilca: "Re: [OMPI users] errno=131 ?"</a>
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
