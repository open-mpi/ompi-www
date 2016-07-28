<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 03:17:17 2008" -->
<!-- isoreceived="20080130081717" -->
<!-- sent="Wed, 30 Jan 2008 09:17:03 +0100" -->
<!-- isosent="20080130081703" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="20080130081703.GO11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F0A3ACAD-2C50-4F39-81EC-7448BEB5005A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 03:17:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3086.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3086.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 29, 2008 at 07:37:42PM -0500, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The previous code was correct. Each IP address correspond to a  
</span><br>
<span class="quotelev1">&gt; specific endpoint, and therefore to a specific BTL. This enable us to  
</span><br>
<span class="quotelev1">&gt; have multiple TCP BTL at the same time, and allow the OB1 PML to  
</span><br>
<span class="quotelev1">&gt; stripe the data over all of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, your commit disable the multi-rail over TCP. Please  
</span><br>
<span class="quotelev1">&gt; undo it.
</span><br>
<p>That's exactly what I had in mind when I said &quot;this might break
<br>
functionality&quot;.
<br>
<p>So we need as many endpoints as IP addresses? Then, simply connecting
<br>
them leads to oversubscription: two parallel connections on the same
<br>
media. That's where the kernel index enters the scene: we'll have to
<br>
make sure not to open two parallel connections to the same remote kernel
<br>
index.
<br>
<p>I'll revert the patch and come up with another solution, but for the
<br>
moment, let me point out that the assumption &quot;One interface, one
<br>
address&quot; isn't true. So, the previous code was also wrong.
<br>
<p><p>I hope not to run into model limitations: avoiding oversubscription
<br>
means to keep the number of endpoints per peer lower than the amount of
<br>
his interfaces, but accepting incoming connections from this peer means
<br>
to have all his addresses (probably more than #remote_NICs) available in
<br>
order to accept them.
<br>
<p>As mentioned earlier: it's very common to have multiple addresses per
<br>
interface, and it's the kernel who assigns the source address, so
<br>
there's nothing one could say about an incoming connection. Only that it
<br>
could be any of all exported addresses. Any.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3086.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3086.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
