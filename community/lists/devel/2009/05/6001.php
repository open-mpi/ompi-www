<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 22:30:10 2009" -->
<!-- isoreceived="20090512023010" -->
<!-- sent="Mon, 11 May 2009 20:29:57 -0600" -->
<!-- isosent="20090512022957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="FB7933BE-8CEA-40B0-ACFA-A0E134EEA436_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A08D115.8070909_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bug in 1.3.2 sm transport<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 22:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6002.php">Katz, Jacob: "[OMPI devel] Bug in return status of MPI_WAIT()"</a>
<li><strong>Previous message:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bryan
<br>
<p>I have seen similar issues on LANL clusters when message sizes were  
<br>
fairly large. How big are your buffers when you call Allreduce? Can  
<br>
you send us your Allreduce call params (e.g., the reduce operation,  
<br>
datatype, num elements)?
<br>
<p>If you don't want to send that to the list, you can send it to me at  
<br>
LANL.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On May 11, 2009, at 7:29 PM, Bryan Lally wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another user reports something somewhat similar at <a href="http://www.open-mpi.org/community/lists/users/2009/04/9154.php">http://www.open-mpi.org/community/lists/users/2009/04/9154.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt;  .  That problem seems to be associated with GCC 4.4.0.  What  
</span><br>
<span class="quotelev2">&gt;&gt; compiler are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI was built with gcc v4.3.0, which is what's packaged with Fedora  
</span><br>
<span class="quotelev1">&gt; 9.  The application code was built with that and NAG's fortran, and  
</span><br>
<span class="quotelev1">&gt; in another test with Pathscale's C and Fortran.  We're only using  
</span><br>
<span class="quotelev1">&gt; the C bindings to OMPI, never the Fortran bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	- Bryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bryan Lally, lally_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 505.667.9954
</span><br>
<span class="quotelev1">&gt; CCS-2
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Los Alamos, New Mexico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6002.php">Katz, Jacob: "[OMPI devel] Bug in return status of MPI_WAIT()"</a>
<li><strong>Previous message:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
