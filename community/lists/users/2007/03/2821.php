<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 20:23:50 2007" -->
<!-- isoreceived="20070317002350" -->
<!-- sent="Fri, 16 Mar 2007 20:23:41 -0400" -->
<!-- isosent="20070317002341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance" -->
<!-- id="227F7A17-5B5A-4EE2-AFAB-29EBD2BB62D6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45FB0FD0.4090506_at_kelman.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-16 20:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2822.php">Ralph Castain: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2007, at 5:44 PM, Mohammad Huwaidi wrote:
<br>
<p><span class="quotelev1">&gt; The following code is my trial to write a fault-tolerant  
</span><br>
<span class="quotelev1">&gt; application on OpenMPI; however, it still does not trap exceptions:
</span><br>
<p>I'm not sure what your question is.
<br>
<p>It does not seem to trap exceptions because, at least at first  
<br>
glance, your program appears to be correct (i.e., no exceptions need  
<br>
to be thrown).
<br>
<p>If you have a program that generates MPI errors and want to catch  
<br>
them via MPI::ERRORS_THROW_EXCEPTIONS, then you need to ensure to  
<br>
configure Open MPI with --enable-cxx-exceptions.  However, recall  
<br>
that the MPI standard does not guarantee the state of MPI after an  
<br>
error has occurred -- i.e., Open MPI does not guarantee that further  
<br>
calls to MPI functions will perform as they are supposed to.
<br>
<p>In principle, if the error is a simple MPI argument problem (e.g.,  
<br>
sending NULL or some other obviously illegal value), Open MPI should  
<br>
be able to continue without a problem.  But if you're looking for  
<br>
true fault tolerance (i.e., an MPI send fails because of a transient  
<br>
error), Open MPI is not yet robust enough to handle such scenarios,  
<br>
even if you trap the C++ exception up in your application.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2822.php">Ralph Castain: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
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
