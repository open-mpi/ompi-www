<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 14:04:26 2005" -->
<!-- isoreceived="20050804190426" -->
<!-- sent="Thu, 04 Aug 2005 15:04:11 -0400" -->
<!-- isosent="20050804190411" -->
<!-- name="Joel Eaves" -->
<!-- email="joel_at_[hidden]" -->
<!-- subject="[O-MPI users] Collective communications with derived datatypes" -->
<!-- id="42F266AB.2090900_at_mit.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Joel Eaves (<em>joel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 14:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0104.php">Jim Galarowicz: "[O-MPI users] Question about support for finding MPI processes from a tool"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/07/0102.php">Nick I: "[O-MPI users] Open MPI links"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi group.  I posted a general MPI question a while ago to the mpi 
<br>
newsgroup but didn't get a response.  I need to figure this out so I 
<br>
thought I would try it on you.
<br>
<p>I have written a piece of code that fills a 2D array sequentially so
<br>
that I can keep track of which elements are being dropped in the
<br>
message passing.  I use the type_vector datatype to generate a datatype
<br>
for passing the columns.  In C, I can see that the scatter operation
<br>
passes the first matrix to process 0 correctly but that the second
<br>
matrix to process 1 is screwed up because the elements are set
<br>
backwards by two.  In other words, the second matrix begins with the
<br>
lucky 13th element instead of the 15th like it should.  There is
<br>
overlap -- the same elements appear in both of the scattered matrices.
<br>
The C++ code goes over like a lead baloon.  The operation is clearly
<br>
asking for data outside of the range for the filled matrix and so the
<br>
values of the scattered matrix are all screwed up.  I am using the LAM
<br>
MPI v. 7.1.1 and Mac OS 10.3.8
<br>
with gcc v. 3.3.  I got similar results using MPICH-2 on Linux.
<br>
Here's a piece of code written in C.
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc,char* argv[]){
<br>
MPI_Init(&amp;argc,&amp;argv);
<br>
int my_rank = MPI::COMM_WORLD.Get_rank(),n_global = 10,n_procs =
<br>
MPI::COMM_WORLD.Get_size(),
<br>
d=3,n_local = n_global/n_procs,i,k,root=0;
<br>
double A_global[n_global][d],A_local[n_local][d];
<br>
MPI_Datatype scatter;
<br>
MPI_Type_vector(n_local,1,d,MPI_DOUBLE,&amp;scatter);
<br>
MPI_Type_commit(&amp;scatter);
<br>
if(my_rank==root){
<br>
for(i=0;i&lt;n_global;i++)
<br>
for(k=0;k&lt;d;k++)
<br>
A_global[i][k] = i*d+k;
<br>
for(k=0;k&lt;d;k++)
<br>
MPI_Scatter(&amp;(A_global[0][k]),1,scatter,&amp;(A_local[0][k]),1,scatter,root,MPI_COMM_WORLD); 
<br>
<p>for(i=0;i&lt;n_local;i++){
<br>
for(k=0;k&lt;d;k++)
<br>
cout &lt;&lt; A_local[i][k] &lt;&lt; &quot;\t&quot;;
<br>
cout &lt;&lt; endl;
<br>
<p>}
<br>
<p>MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>In C++, the code is
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc,char* argv[]){
<br>
MPI::Init();
<br>
int my_rank = MPI::COMM_WORLD.Get_rank(),n_global = 10,n_procs =
<br>
MPI::COMM_WORLD.Get_size(),
<br>
d=3,n_local = n_global/n_procs,i,k,root=0;
<br>
double A_global[n_global][d],A_local[n_local][d];
<br>
MPI::Datatype scatter(MPI::DOUBLE);
<br>
scatter.Create_vector(n_local,1,d);
<br>
scatter.Commit();
<br>
if(my_rank==root){
<br>
for(i=0;i&lt;n_global;i++)
<br>
for(k=0;k&lt;d;k++)
<br>
A_global[i][k] = i*d+k;
<br>
for(k=0;k&lt;d;k++)
<br>
MPI::COMM_WORLD.Scatter(&amp;(A_global[0][k]),1,scatter,&amp;(A_local[0][k]),1,scatter,root); 
<br>
<p>for(i=0;i&lt;n_local;i++){
<br>
for(k=0;k&lt;d;k++)
<br>
cout &lt;&lt; A_local[i][k] &lt;&lt; &quot;\t&quot;;
<br>
cout &lt;&lt; endl;
<br>
<p>}
<br>
<p>MPI::Finalize();
<br>
return 0;
<br>
}
<br>
<p>I'm running the process (after a lamboot) with the command
<br>
<p>mpirun -np 2 scatter.out
<br>
<p>and compiling with the command
<br>
<p>mpic++ Scatter.cpp -o scatter.out
<br>
<p>Can anyone help out with this?  I don't
<br>
understand why the commands for C++ are returning erroneous results
<br>
that are *different* than they are from the C program.
<br>
<p>Thanks,
<br>
<p>Joel
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0104.php">Jim Galarowicz: "[O-MPI users] Question about support for finding MPI processes from a tool"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/07/0102.php">Nick I: "[O-MPI users] Open MPI links"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="0107.php">George Bosilca: "Re: [O-MPI users] Collective communications with derived datatypes"</a>
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
