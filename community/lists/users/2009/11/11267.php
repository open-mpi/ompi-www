<?
$subject_val = "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 11:14:11 2009" -->
<!-- isoreceived="20091124161411" -->
<!-- sent="Tue, 24 Nov 2009 11:14:02 -0500" -->
<!-- isosent="20091124161402" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend" -->
<!-- id="CD560390-5D3F-46FD-8EFC-B37981A72FED_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c4b5a27c0911231349i5bef916fr65ef4f2a50da21b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 11:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>In reply to:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Each predefined MPI datatype is mapped to a standard type. The table  
<br>
that defines this relation can be found in the MPI Standard (2.2) in  
<br>
Annex A page 534.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 23, 2009, at 16:49 , Natarajan CS wrote:
<br>
<p><span class="quotelev1">&gt; Oh okay that explains the behaviour of MPI_SHORT, guess sizeof is  
</span><br>
<span class="quotelev1">&gt; going to give me the same value no matter what MPI_Datatype I use?  
</span><br>
<span class="quotelev1">&gt; Thanks for the quick response!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 23, 2009 at 2:33 PM, Edmund Sumbar &lt;esumbar_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mon, 23 Nov 2009, Natarajan CS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When I use MPI_SHORT instead of short to count the number of data  
</span><br>
<span class="quotelev1">&gt; transferred I get an array that is half the size. (ie MPI_Isend 
</span><br>
<span class="quotelev1">&gt; (&amp;data2[0][0][0], (int) (sizeof(data2)/sizeof(MPI_SHORT)),  
</span><br>
<span class="quotelev1">&gt; MPI_SHORT, rank, 123,
</span><br>
<span class="quotelev1">&gt; cartcomm,&amp;request[rank-1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_SHORT and the other data types are actually macros that resolve  
</span><br>
<span class="quotelev1">&gt; to MPI_Datatype which is a pointer to a struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; AICT Research Support Group
</span><br>
<span class="quotelev1">&gt; esumbar_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 780.492.9360
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Previous message:</strong> <a href="11266.php">jody: "Re: [OMPI users] Open MPI Query"</a>
<li><strong>In reply to:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
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
