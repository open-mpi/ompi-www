<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 31 13:32:29 2009" -->
<!-- isoreceived="20091031173229" -->
<!-- sent="Sat, 31 Oct 2009 13:32:22 -0400" -->
<!-- isosent="20091031173222" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="228DB179-17C2-4003-99B4-04B78476C444_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c4b5a27c0910301511g4f6ebdc5i382b0d02673b69bc_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-10-31 13:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11035.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11035.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11035.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene is right, every time you create a new matrix you will have to  
<br>
describe it with a new datatype (even when using MPI_BOTTOM).
<br>
<p>george.
<br>
<p>On Oct 30, 2009, at 18:11 , Natarajan CS wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the replies guys! Definitely two suggestions worth  
</span><br>
<span class="quotelev1">&gt; trying. Definitely didn't consider a derived datatype. I wasn't  
</span><br>
<span class="quotelev1">&gt; really sure that the MPI_Send call overhead was significant enough  
</span><br>
<span class="quotelev1">&gt; that increasing the buffer size and decreasing the number of calls  
</span><br>
<span class="quotelev1">&gt; would cause any speed up. Will change the code over the weekend and  
</span><br>
<span class="quotelev1">&gt; see what happens! Also, maybe if one passes the absolute address  
</span><br>
<span class="quotelev1">&gt; maybe there is no need for creating multiple definitions of the  
</span><br>
<span class="quotelev1">&gt; datatype? Haven't gone through the man pages yet, so apologies for  
</span><br>
<span class="quotelev1">&gt; ignorance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 30, 2009 at 2:44 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Wouldn't you need to create a different datatype for each matrix  
</span><br>
<span class="quotelev1">&gt; instance?  E.g., let's say you create twelve 5x5 matrices.  Wouldn't  
</span><br>
<span class="quotelev1">&gt; you need twelve different derived datatypes?  I would think so  
</span><br>
<span class="quotelev1">&gt; because each time you create a matrix, the footprint of that matrix  
</span><br>
<span class="quotelev1">&gt; in memory will depend on the whims of malloc().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even with the original way to create the matrices, one can use   
</span><br>
<span class="quotelev1">&gt; MPI_Create_type_struct to create an MPI datatype (<a href="http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html">http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html</a> 
</span><br>
<span class="quotelev1">&gt;  ) using MPI_BOTTOM as the original displacement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2009, at 15:31 , Justin Luitjens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not do something like this:
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
<span class="quotelev1">&gt; A[i]=&amp;A_data[i*N];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This way you have contiguous data (in A_data) but can access it as  
</span><br>
<span class="quotelev1">&gt; a  2D array using A[i][j].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I haven't compiled this but I know we represent our matrices this   
</span><br>
<span class="quotelev1">&gt; way).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 29, 2009 at 12:30 PM, Natarajan CS  
</span><br>
<span class="quotelev1">&gt; &lt;csnataraj_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; thanks for the quick response. Yes, that is what I meant. I  thought  
</span><br>
<span class="quotelev1">&gt; there was no other way around what I am doing but It is  always good  
</span><br>
<span class="quotelev1">&gt; to ask a expert rather than assume!
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
<span class="quotelev1">&gt;     Firstly, My apologies for a duplicate post in LAM/MPI list I   
</span><br>
<span class="quotelev1">&gt; have the following simple MPI code. I was wondering if there was a   
</span><br>
<span class="quotelev1">&gt; workaround for sending a dynamically allocated 2-D matrix?  
</span><br>
<span class="quotelev1">&gt; Currently  I can send the matrix row-by-row, however, since rows are  
</span><br>
<span class="quotelev1">&gt; not  contiguous I cannot send the entire matrix at once. I realize  
</span><br>
<span class="quotelev1">&gt; one  option is to change the malloc to act as one contiguous block  
</span><br>
<span class="quotelev1">&gt; but  can I keep the matrix definition as below and still send the  
</span><br>
<span class="quotelev1">&gt; entire  matrix in one go?
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
<span class="quotelev1">&gt; skip 7 bytes, then another 2 bytes, then skip 500 bytes, then 1  
</span><br>
<span class="quotelev1">&gt; last  byte.  Something like that.  Your 2d matrices differ in two   
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
<li><strong>Next message:</strong> <a href="11035.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11033.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11035.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11035.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
