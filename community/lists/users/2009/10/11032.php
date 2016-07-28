<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 15:42:51 2009" -->
<!-- isoreceived="20091030194251" -->
<!-- sent="Fri, 30 Oct 2009 11:44:02 -0800" -->
<!-- isosent="20091030194402" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="4AEB4202.8030902_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F6137998-688A-4F03-B427-C46CE984FE96_at_eecs.utk.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 15:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11031.php">Hui Jin: "[OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>In reply to:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wouldn't you need to create a different datatype for each matrix 
<br>
instance?  E.g., let's say you create twelve 5x5 matrices.  Wouldn't you 
<br>
need twelve different derived datatypes?  I would think so because each 
<br>
time you create a matrix, the footprint of that matrix in memory will 
<br>
depend on the whims of malloc().
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Even with the original way to create the matrices, one can use  
</span><br>
<span class="quotelev1">&gt; MPI_Create_type_struct to create an MPI datatype 
</span><br>
<span class="quotelev1">&gt; (<a href="http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html">http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html</a> 
</span><br>
<span class="quotelev1">&gt; ) using MPI_BOTTOM as the original displacement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2009, at 15:31 , Justin Luitjens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why not do something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; double **A=new double*[N];
</span><br>
<span class="quotelev2">&gt;&gt; double *A_data new double [N*N];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for(int i=0;i&lt;N;i++)
</span><br>
<span class="quotelev2">&gt;&gt;    A[i]=&amp;A_data[i*N];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This way you have contiguous data (in A_data) but can access it as a  
</span><br>
<span class="quotelev2">&gt;&gt; 2D array using A[i][j].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I haven't compiled this but I know we represent our matrices this  
</span><br>
<span class="quotelev2">&gt;&gt; way).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 29, 2009 at 12:30 PM, Natarajan CS &lt;csnataraj_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;    thanks for the quick response. Yes, that is what I meant. I  
</span><br>
<span class="quotelev2">&gt;&gt; thought there was no other way around what I am doing but It is  
</span><br>
<span class="quotelev2">&gt;&gt; always good to ask a expert rather than assume!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C.S.N
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 29, 2009 at 11:25 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Natarajan CS wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;        Firstly, My apologies for a duplicate post in LAM/MPI list I  
</span><br>
<span class="quotelev2">&gt;&gt; have the following simple MPI code. I was wondering if there was a  
</span><br>
<span class="quotelev2">&gt;&gt; workaround for sending a dynamically allocated 2-D matrix? Currently  
</span><br>
<span class="quotelev2">&gt;&gt; I can send the matrix row-by-row, however, since rows are not  
</span><br>
<span class="quotelev2">&gt;&gt; contiguous I cannot send the entire matrix at once. I realize one  
</span><br>
<span class="quotelev2">&gt;&gt; option is to change the malloc to act as one contiguous block but  
</span><br>
<span class="quotelev2">&gt;&gt; can I keep the matrix definition as below and still send the entire  
</span><br>
<span class="quotelev2">&gt;&gt; matrix in one go?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mean with one standard MPI call?  I don't think so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In MPI, there is a notion of derived datatypes, but I'm not  
</span><br>
<span class="quotelev2">&gt;&gt; convinced this is what you want.  A derived datatype is basically a  
</span><br>
<span class="quotelev2">&gt;&gt; static template of data and holes in memory.  E.g., 3 bytes, then  
</span><br>
<span class="quotelev2">&gt;&gt; skip 7 bytes, then another 2 bytes, then skip 500 bytes, then 1 last  
</span><br>
<span class="quotelev2">&gt;&gt; byte.  Something like that.  Your 2d matrices differ in two  
</span><br>
<span class="quotelev2">&gt;&gt; respects.  One is that the pattern in memory is different for each  
</span><br>
<span class="quotelev2">&gt;&gt; matrix you allocate.  The other is that your matrix definition  
</span><br>
<span class="quotelev2">&gt;&gt; includes pointer information that won't be the same in every  
</span><br>
<span class="quotelev2">&gt;&gt; process's address space.  I guess you could overcome the first  
</span><br>
<span class="quotelev2">&gt;&gt; problem by changing alloc_matrix() to some fixed pattern in memory  
</span><br>
<span class="quotelev2">&gt;&gt; for some r and c, but you'd still have pointer information in there  
</span><br>
<span class="quotelev2">&gt;&gt; that you couldn't blindly copy from one process address space to  
</span><br>
<span class="quotelev2">&gt;&gt; another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11031.php">Hui Jin: "[OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>In reply to:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
