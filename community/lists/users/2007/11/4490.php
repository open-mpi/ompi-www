<?
$subject_val = "Re: [OMPI users] errno=131 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 18 21:29:34 2007" -->
<!-- isoreceived="20071119022934" -->
<!-- sent="Sun, 18 Nov 2007 19:29:25 -0700" -->
<!-- isosent="20071119022925" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errno=131 ?" -->
<!-- id="B2276CEE-D46C-49F1-88B5-9944F541C94F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0711181556460.29452_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-18 21:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<li><strong>Previous message:</strong> <a href="4489.php">Lydia Heck: "[OMPI users] errno=131 ?"</a>
<li><strong>In reply to:</strong> <a href="4489.php">Lydia Heck: "[OMPI users] errno=131 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<li><strong>Reply:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a good reason for this. The errno is system dependent. As an  
<br>
example on my Debian cluster errno 131 means &quot;ENOTRECOVERABLE&quot;.  
<br>
Usually, this value is used with mutexes and not with writev.
<br>
If you want to know what the 131 means on your specific system, take a  
<br>
look in /usr/include/errno.h.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 18, 2007, at 8:59 AM, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of our programs has got stuck - it has not terminated -
</span><br>
<span class="quotelev1">&gt; with the error messages:
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_send: writev failed with errno=131.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching the openmpi web site did not result in a positive hit.
</span><br>
<span class="quotelev1">&gt; What does it mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running 1.2.1r14096
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4490/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<li><strong>Previous message:</strong> <a href="4489.php">Lydia Heck: "[OMPI users] errno=131 ?"</a>
<li><strong>In reply to:</strong> <a href="4489.php">Lydia Heck: "[OMPI users] errno=131 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
<li><strong>Reply:</strong> <a href="4491.php">Tim Prins: "Re: [OMPI users] errno=131 ?"</a>
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
