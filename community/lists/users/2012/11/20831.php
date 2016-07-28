<?
$subject_val = "Re: [OMPI users] MPI_Allreduce with F90 Handles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 15:59:33 2012" -->
<!-- isoreceived="20121130205933" -->
<!-- sent="Fri, 30 Nov 2012 15:59:28 -0500" -->
<!-- isosent="20121130205928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce with F90 Handles" -->
<!-- id="3AE4220A-31CD-40E3-85D6-544183409FA6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2822100.9Ldb2HxCLJ_at_shane-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce with F90 Handles<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 15:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20832.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20830.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>In reply to:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30, 2012, at 2:04 PM, Shane Hart wrote:
<br>
<p><span class="quotelev1">&gt; I've attached a small sample program that demonstrates the problem.  You can toggle working/non-working behaviour by toggling commenting on line 27.
</span><br>
<p>Thanks!  I got swamped this week, but I'll try to look at it next week (although with the Forum meeting next week, it might have to wait until the week after :-( ).
<br>
<p><span class="quotelev1">&gt; I've tried to open a bug report, but the system isn't letting me register for Trac:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Trac detected an internal error:
</span><br>
<span class="quotelev1">&gt; KeyError: 'recaptcha_challenge_field'
</span><br>
<p>Weird.  I've forwarded this on to our sysadmin to see what's going on there.
<br>
<p>I'll file a ticket and CC you.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Shane
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Friday, November 30, 2012 10:35:57 AM users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have a Fortran code that works quite well with OpenMPI 1.4.3 where I create a handle using:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; call MPI_TYPE_CREATE_F90_INTEGER(9, COMM_INT4, ierror)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; and then do a reduction with:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; call MPI_ALLREDUCE(send_buffer, buffer, count, COMM_INT4, MPI_SUM, communicator,              ierror)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, this fails with OpenMPI 1.6.3 stating:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Allreduce: the reduction operation MPI_SUM is not defined for non-intrinsic datatypes (attempted with datatype named &quot;Dup MPI_INT&quot;)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The MPI standard states that MPI_SUM works with Fortran integers, and Fortran integers are defined in Section 5.9.2 as:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER, MPI_AINT, MPI_OFFSET,
</span><br>
<span class="quotelev1">&gt; *and handles returned from
</span><br>
<span class="quotelev1">&gt; MPI_TYPE_CREATE_F90_INTEGER*,
</span><br>
<span class="quotelev1">&gt; and if available: MPI_INTEGER1,
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER2, MPI_INTEGER4,
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER8, MPI_INTEGER16
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (emphasis mine)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However the manual page on MPI_Reduce for OpenMPI only states that Fortran integers are:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Fortran integer:      MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; Does OpenMPI not support using MPI_SUM with Fortran integer handles?  I'm hoping that it's just an oversight as it used to work...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; System: Fedora 17
</span><br>
<span class="quotelev1">&gt; Compilers: GCC 4.7.2
</span><br>
<span class="quotelev1">&gt; OpenMPI's tested: 1.4.3 (works), 1.5.4 (doesn't work), 1.6.3 (doesn't work)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for any insight,
</span><br>
<span class="quotelev1">&gt; Shane
</span><br>
<span class="quotelev1">&gt; &lt;mpi_sum.f90&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20832.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20830.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>In reply to:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
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
