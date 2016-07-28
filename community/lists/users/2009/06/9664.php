<?
$subject_val = "Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 16:18:25 2009" -->
<!-- isoreceived="20090622201825" -->
<!-- sent="Mon, 22 Jun 2009 16:18:18 -0400" -->
<!-- isosent="20090622201818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0" -->
<!-- id="587092B8-39B1-4877-B009-232B1CBE6087_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1421239C-BD10-4C29-9433-222EF65474BC_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with GNU GFortran OpenMPI 1.3.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 16:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9665.php">Jim Kress ORG: "[OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9663.php">Si Hammond: "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>In reply to:</strong> <a href="9663.php">Si Hammond: "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This error message is indicating that MPI_Comm_f2c is being invoked  
<br>
before MPI_INIT.
<br>
<p>Can you see if that is happening?
<br>
<p>If it helps, you can run with the MCA parameter mpi_abort_print_stack  
<br>
set to 1.  This will print the stack when we abort.  Or run with the  
<br>
MCA parameter mpi_abort_delay set to -1; this will print the abort  
<br>
message but then spin forever (i.e., not abort), which allows you to  
<br>
attach a debugger to the MPI processes and poke around to figure out  
<br>
what went wrong.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=debugging#debug-ompi">http://www.open-mpi.org/faq/?category=debugging#debug-ompi</a>- 
<br>
controls for a full list of the MCA parameters that we have to help  
<br>
debugging.
<br>
<p><p>On Jun 22, 2009, at 4:14 PM, Si Hammond wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another little mystery for you all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a relatively small MPI Fortran code which I can compile  
</span><br>
<span class="quotelev1">&gt; successfully with Intel and PGI compiled OpenMPI 1.3.0 (and 1.2.5).  
</span><br>
<span class="quotelev1">&gt; No problems with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a separate machine I have a GNU Gfortran 4.3 OpenMPI 1.3.0  
</span><br>
<span class="quotelev1">&gt; installation and I get these errors immediately after the code  
</span><br>
<span class="quotelev1">&gt; starts running:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [***:19386] Abort before MPI_INIT completed successfully; not able  
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [***:13269] Abort before MPI_INIT completed successfully; not able  
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; &lt;etc&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it looks like there might be a bug with GFortran or do you think  
</span><br>
<span class="quotelev1">&gt; this is OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help you have would be appreciated, I can't seem to find much on  
</span><br>
<span class="quotelev1">&gt; this using Google.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Performance Modelling, Analysis and Optimisation Team
</span><br>
<span class="quotelev1">&gt; High Performance Systems Group
</span><br>
<span class="quotelev1">&gt; Department of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Warwick, CV4 7AL, UK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9665.php">Jim Kress ORG: "[OMPI users] 50% performance reduction due to OpenMPI v 1.3.2 forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9663.php">Si Hammond: "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>In reply to:</strong> <a href="9663.php">Si Hammond: "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
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
