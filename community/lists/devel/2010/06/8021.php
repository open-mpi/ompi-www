<?
$subject_val = "Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 08:42:54 2010" -->
<!-- isoreceived="20100602124254" -->
<!-- sent="Wed, 2 Jun 2010 08:42:44 -0400" -->
<!-- isosent="20100602124244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page" -->
<!-- id="B1AE57A1-44AE-405C-8998-2EE2B40BEA28_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C06192A.3000602_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Wrong documentation for MPI_Comm_size manual page<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 08:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8020.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8017.php">Number Cruncher: "[OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Absolutely correct.  I've fixed it on the dev trunk and filed tickets to get the fix moved into the release branches.
<br>
<p>Thanks!
<br>
<p><p>On Jun 2, 2010, at 4:41 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; I'm working on some intercommunicator stuff at the moment. According to
</span><br>
<span class="quotelev1">&gt; MPI-2.2 standard:
</span><br>
<span class="quotelev1">&gt; &quot;An inter-communication is a point-to-point communication between
</span><br>
<span class="quotelev1">&gt; processes in different groups&quot; [Section 6.6]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yet the &quot;man&quot; page for MPI_Comm_size reads:
</span><br>
<span class="quotelev1">&gt; &quot;If the communicator  is  an  **intra-communicator**  (enables 
</span><br>
<span class="quotelev1">&gt; communication  between  two groups),  this  function returns the size of
</span><br>
<span class="quotelev1">&gt; the local group&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't that be **inter-communicator**?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Simon
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8022.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8020.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8017.php">Number Cruncher: "[OMPI devel] Wrong documentation for MPI_Comm_size manual page"</a>
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
