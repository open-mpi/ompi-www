<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 15:17:43 2009" -->
<!-- isoreceived="20091030191743" -->
<!-- sent="Fri, 30 Oct 2009 15:17:33 -0400" -->
<!-- isosent="20091030191733" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="F6137998-688A-4F03-B427-C46CE984FE96_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="913d17a50910291231m64670d7ax534723bd3fed5624_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 15:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11031.php">Hui Jin: "[OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>Previous message:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Even with the original way to create the matrices, one can use  
<br>
MPI_Create_type_struct to create an MPI datatype (<a href="http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html">http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html</a> 
<br>
) using MPI_BOTTOM as the original displacement.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 29, 2009, at 15:31 , Justin Luitjens wrote:
<br>
<p><span class="quotelev1">&gt; Why not do something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double **A=new double*[N];
</span><br>
<span class="quotelev1">&gt; double *A_data new double [N*N];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for(int i=0;i&lt;N;i++)
</span><br>
<span class="quotelev1">&gt;    A[i]=&amp;A_data[i*N];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This way you have contiguous data (in A_data) but can access it as a  
</span><br>
<span class="quotelev1">&gt; 2D array using A[i][j].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I haven't compiled this but I know we represent our matrices this  
</span><br>
<span class="quotelev1">&gt; way).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 29, 2009 at 12:30 PM, Natarajan CS &lt;csnataraj_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;    thanks for the quick response. Yes, that is what I meant. I  
</span><br>
<span class="quotelev1">&gt; thought there was no other way around what I am doing but It is  
</span><br>
<span class="quotelev1">&gt; always good to ask a expert rather than assume!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C.S.N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 29, 2009 at 11:25 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Natarajan CS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;        Firstly, My apologies for a duplicate post in LAM/MPI list I  
</span><br>
<span class="quotelev1">&gt; have the following simple MPI code. I was wondering if there was a  
</span><br>
<span class="quotelev1">&gt; workaround for sending a dynamically allocated 2-D matrix? Currently  
</span><br>
<span class="quotelev1">&gt; I can send the matrix row-by-row, however, since rows are not  
</span><br>
<span class="quotelev1">&gt; contiguous I cannot send the entire matrix at once. I realize one  
</span><br>
<span class="quotelev1">&gt; option is to change the malloc to act as one contiguous block but  
</span><br>
<span class="quotelev1">&gt; can I keep the matrix definition as below and still send the entire  
</span><br>
<span class="quotelev1">&gt; matrix in one go?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean with one standard MPI call?  I don't think so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In MPI, there is a notion of derived datatypes, but I'm not  
</span><br>
<span class="quotelev1">&gt; convinced this is what you want.  A derived datatype is basically a  
</span><br>
<span class="quotelev1">&gt; static template of data and holes in memory.  E.g., 3 bytes, then  
</span><br>
<span class="quotelev1">&gt; skip 7 bytes, then another 2 bytes, then skip 500 bytes, then 1 last  
</span><br>
<span class="quotelev1">&gt; byte.  Something like that.  Your 2d matrices differ in two  
</span><br>
<span class="quotelev1">&gt; respects.  One is that the pattern in memory is different for each  
</span><br>
<span class="quotelev1">&gt; matrix you allocate.  The other is that your matrix definition  
</span><br>
<span class="quotelev1">&gt; includes pointer information that won't be the same in every  
</span><br>
<span class="quotelev1">&gt; process's address space.  I guess you could overcome the first  
</span><br>
<span class="quotelev1">&gt; problem by changing alloc_matrix() to some fixed pattern in memory  
</span><br>
<span class="quotelev1">&gt; for some r and c, but you'd still have pointer information in there  
</span><br>
<span class="quotelev1">&gt; that you couldn't blindly copy from one process address space to  
</span><br>
<span class="quotelev1">&gt; another.
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
<li><strong>Next message:</strong> <a href="11031.php">Hui Jin: "[OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>Previous message:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
