<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 31 17:11:19 2009" -->
<!-- isoreceived="20091031211119" -->
<!-- sent="Sat, 31 Oct 2009 15:10:53 -0600" -->
<!-- isosent="20091031211053" -->
<!-- name="Justin Luitjens" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="913d17a50910311410v1727fafes3431ecca5fa5f248_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="228DB179-17C2-4003-99B4-04B78476C444_at_eecs.utk.edu" -->
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
<strong>From:</strong> Justin Luitjens (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-31 17:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11036.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is how you can do this without having to redescribe the data type all
<br>
the time.  This will also keep your data layout together and improve cache
<br>
coherency.
<br>
<p><p>#include &lt;stdlib.h&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
using namespace std;
<br>
int main()
<br>
{
<br>
&nbsp;&nbsp;int N=2, M=3;
<br>
&nbsp;&nbsp;//Allocate the matrix
<br>
&nbsp;&nbsp;double **A=(double**)malloc(sizeof(double*)*N);
<br>
&nbsp;&nbsp;double *A_data=(double*)malloc(sizeof(double)*N*M);
<br>
<p>&nbsp;&nbsp;//assign some values to the matrix
<br>
&nbsp;&nbsp;for(int i=0;i&lt;N;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;A[i]=&amp;A_data[i*M];
<br>
<p>&nbsp;&nbsp;int j=0;
<br>
&nbsp;&nbsp;for(int n=0;n&lt;N;n++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int m=0;m&lt;M;m++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A[n][m]=j++;
<br>
<p>&nbsp;&nbsp;//print the matrix
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;Matrix:\n&quot;;
<br>
&nbsp;&nbsp;for(int n=0;n&lt;N;n++)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int m=0;m&lt;M;m++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; A[n][m] &lt;&lt; &quot; &quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;//to send over mpi
<br>
&nbsp;&nbsp;//MPI_Send(A_data,M*N,MPI_DOUBLE,dest,tag,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;//delete the matrix
<br>
&nbsp;&nbsp;free(A);
<br>
&nbsp;&nbsp;free(A_data);
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>On Sat, Oct 31, 2009 at 11:32 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Eugene is right, every time you create a new matrix you will have to
</span><br>
<span class="quotelev1">&gt; describe it with a new datatype (even when using MPI_BOTTOM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2009, at 18:11 , Natarajan CS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for the replies guys! Definitely two suggestions worth trying.
</span><br>
<span class="quotelev2">&gt;&gt; Definitely didn't consider a derived datatype. I wasn't really sure that the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send call overhead was significant enough that increasing the buffer
</span><br>
<span class="quotelev2">&gt;&gt; size and decreasing the number of calls would cause any speed up. Will
</span><br>
<span class="quotelev2">&gt;&gt; change the code over the weekend and see what happens! Also, maybe if one
</span><br>
<span class="quotelev2">&gt;&gt; passes the absolute address maybe there is no need for creating multiple
</span><br>
<span class="quotelev2">&gt;&gt; definitions of the datatype? Haven't gone through the man pages yet, so
</span><br>
<span class="quotelev2">&gt;&gt; apologies for ignorance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct 30, 2009 at 2:44 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Wouldn't you need to create a different datatype for each matrix instance?
</span><br>
<span class="quotelev2">&gt;&gt;  E.g., let's say you create twelve 5x5 matrices.  Wouldn't you need twelve
</span><br>
<span class="quotelev2">&gt;&gt; different derived datatypes?  I would think so because each time you create
</span><br>
<span class="quotelev2">&gt;&gt; a matrix, the footprint of that matrix in memory will depend on the whims of
</span><br>
<span class="quotelev2">&gt;&gt; malloc().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Even with the original way to create the matrices, one can use
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Create_type_struct to create an MPI datatype (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html">http://web.mit.edu/course/13/13.715/OldFiles/build/mpich2-1.0.6p1/www/www3/MPI_Type_create_struct.html</a> )
</span><br>
<span class="quotelev2">&gt;&gt; using MPI_BOTTOM as the original displacement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2009, at 15:31 , Justin Luitjens wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; A[i]=&amp;A_data[i*N];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This way you have contiguous data (in A_data) but can access it as a  2D
</span><br>
<span class="quotelev2">&gt;&gt; array using A[i][j].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I haven't compiled this but I know we represent our matrices this  way).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 29, 2009 at 12:30 PM, Natarajan CS &lt;csnataraj_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the quick response. Yes, that is what I meant. I  thought there
</span><br>
<span class="quotelev2">&gt;&gt; was no other way around what I am doing but It is  always good to ask a
</span><br>
<span class="quotelev2">&gt;&gt; expert rather than assume!
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
<span class="quotelev2">&gt;&gt; On Thu, Oct 29, 2009 at 11:25 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Natarajan CS wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;    Firstly, My apologies for a duplicate post in LAM/MPI list I  have the
</span><br>
<span class="quotelev2">&gt;&gt; following simple MPI code. I was wondering if there was a  workaround for
</span><br>
<span class="quotelev2">&gt;&gt; sending a dynamically allocated 2-D matrix? Currently  I can send the matrix
</span><br>
<span class="quotelev2">&gt;&gt; row-by-row, however, since rows are not  contiguous I cannot send the entire
</span><br>
<span class="quotelev2">&gt;&gt; matrix at once. I realize one  option is to change the malloc to act as one
</span><br>
<span class="quotelev2">&gt;&gt; contiguous block but  can I keep the matrix definition as below and still
</span><br>
<span class="quotelev2">&gt;&gt; send the entire  matrix in one go?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mean with one standard MPI call?  I don't think so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In MPI, there is a notion of derived datatypes, but I'm not  convinced
</span><br>
<span class="quotelev2">&gt;&gt; this is what you want.  A derived datatype is basically a  static template
</span><br>
<span class="quotelev2">&gt;&gt; of data and holes in memory.  E.g., 3 bytes, then  skip 7 bytes, then
</span><br>
<span class="quotelev2">&gt;&gt; another 2 bytes, then skip 500 bytes, then 1 last  byte.  Something like
</span><br>
<span class="quotelev2">&gt;&gt; that.  Your 2d matrices differ in two  respects.  One is that the pattern in
</span><br>
<span class="quotelev2">&gt;&gt; memory is different for each  matrix you allocate.  The other is that your
</span><br>
<span class="quotelev2">&gt;&gt; matrix definition  includes pointer information that won't be the same in
</span><br>
<span class="quotelev2">&gt;&gt; every  process's address space.  I guess you could overcome the first
</span><br>
<span class="quotelev2">&gt;&gt;  problem by changing alloc_matrix() to some fixed pattern in memory  for
</span><br>
<span class="quotelev2">&gt;&gt; some r and c, but you'd still have pointer information in there  that you
</span><br>
<span class="quotelev2">&gt;&gt; couldn't blindly copy from one process address space to  another.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11036.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11034.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
