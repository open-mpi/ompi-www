<?
$subject_val = "Re: [OMPI devel] Porting Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 09:54:14 2013" -->
<!-- isoreceived="20130522135414" -->
<!-- sent="Wed, 22 May 2013 06:54:08 -0700" -->
<!-- isosent="20130522135408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting Open MPI" -->
<!-- id="549F4111-CB94-4B08-85FF-E15DE93A3FC9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMXWfySgR+cf-TcxyYDV9zSzJKEmaLJLcSV-Np1_0e_pza1Faw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Porting Open MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 09:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12405.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12403.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12399.php">jhonatan alves: "[OMPI devel] Porting Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<li><strong>Reply:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2013, at 4:55 AM, jhonatan alves &lt;jhonatanalves1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; We are trying port Open MPI to a new operating system, called EPOS, but our main problem at the moment is that this operating system is not POSIX compatible. 
</span><br>
<p>That could make things difficult, depending on how incompatible it is
<br>
<p><span class="quotelev1">&gt; Our question is there some way to know what are the OS dependencies of Open MPI? 
</span><br>
<p>Most is contained in the OPAL layer - the rest of the code generally accesses the OS via OPAL. However, the TCP interface code can cause OS porting problems.
<br>
<p><span class="quotelev1">&gt; Is there a porting manual of Open MPI?
</span><br>
<p>Not that I have seen
<br>
<p><span class="quotelev1">&gt; Is there a documentation for ORTE and OPAL?
</span><br>
<p>Only in the header files, I fear
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<li><strong>Next message:</strong> <a href="12405.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12403.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12399.php">jhonatan alves: "[OMPI devel] Porting Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<li><strong>Reply:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
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
