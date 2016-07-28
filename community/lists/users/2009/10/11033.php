<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 18:11:56 2009" -->
<!-- isoreceived="20091030221156" -->
<!-- sent="Fri, 30 Oct 2009 17:11:51 -0500" -->
<!-- isosent="20091030221151" -->
<!-- name="Natarajan CS" -->
<!-- email="csnataraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="c4b5a27c0910301511g4f6ebdc5i382b0d02673b69bc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AEB4202.8030902_at_sun.com" -->
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
<strong>From:</strong> Natarajan CS (<em>csnataraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 18:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the replies guys! Definitely two suggestions worth trying.
<br>
Definitely didn't consider a derived datatype. I wasn't really sure that the
<br>
MPI_Send call overhead was significant enough that increasing the buffer
<br>
size and decreasing the number of calls would cause any speed up. Will
<br>
change the code over the weekend and see what happens! Also, maybe if one
<br>
passes the absolute address maybe there is no need for creating multiple
<br>
definitions of the datatype? Haven't gone through the man pages yet, so
<br>
apologies for ignorance!
<br>
<p>On Fri, Oct 30, 2009 at 2:44 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Wouldn't you need to create a different datatype for each matrix instance?
</span><br>
<span class="quotelev1">&gt;  E.g., let's say you create twelve 5x5 matrices.  Wouldn't you need twelve
</span><br>
<span class="quotelev1">&gt; different derived datatypes?  I would think so because each time you create
</span><br>
<span class="quotelev1">&gt; a matrix, the footprint of that matrix in memory will depend on the whims of
</span><br>
<span class="quotelev1">&gt; malloc().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Even with the original way to create the matrices, one can use
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Create_type_struct to create an MPI datatype (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html">http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html</a>) using MPI_BOTTOM as the original displacement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2009, at 15:31 , Justin Luitjens wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Why not do something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double **A=new double*[N];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double *A_data new double [N*N];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for(int i=0;i&lt;N;i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   A[i]=&amp;A_data[i*N];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This way you have contiguous data (in A_data) but can access it as a  2D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array using A[i][j].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I haven't compiled this but I know we represent our matrices this  way).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Oct 29, 2009 at 12:30 PM, Natarajan CS &lt;csnataraj_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   thanks for the quick response. Yes, that is what I meant. I  thought
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there was no other way around what I am doing but It is  always good to ask
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a expert rather than assume!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C.S.N
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Oct 29, 2009 at 11:25 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Natarajan CS wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Firstly, My apologies for a duplicate post in LAM/MPI list I  have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following simple MPI code. I was wondering if there was a  workaround
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for sending a dynamically allocated 2-D matrix? Currently  I can send the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix row-by-row, however, since rows are not  contiguous I cannot send the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entire matrix at once. I realize one  option is to change the malloc to act
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as one contiguous block but  can I keep the matrix definition as below and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still send the entire  matrix in one go?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You mean with one standard MPI call?  I don't think so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In MPI, there is a notion of derived datatypes, but I'm not  convinced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is what you want.  A derived datatype is basically a  static template
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of data and holes in memory.  E.g., 3 bytes, then  skip 7 bytes, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another 2 bytes, then skip 500 bytes, then 1 last  byte.  Something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that.  Your 2d matrices differ in two  respects.  One is that the pattern in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory is different for each  matrix you allocate.  The other is that your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix definition  includes pointer information that won't be the same in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; every  process's address space.  I guess you could overcome the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  problem by changing alloc_matrix() to some fixed pattern in memory  for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some r and c, but you'd still have pointer information in there  that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldn't blindly copy from one process address space to  another.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
