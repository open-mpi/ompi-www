<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 15:48:27 2005" -->
<!-- isoreceived="20050815204827" -->
<!-- sent="Mon, 15 Aug 2005 16:45:58 -0400" -->
<!-- isosent="20050815204558" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Collective communications with derived datatypes" -->
<!-- id="276DCEB7-64B5-4F46-8F19-457358B46E44_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42F266AB.2090900_at_mit.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-15 15:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Previous message:</strong> <a href="0106.php">David Daniel: "Re: [O-MPI users] Question about support for finding MPI processes from a tool"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Joel Eaves: "[O-MPI users] Collective communications with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Reply:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joel,
<br>
<p>I took a look at your code and found the error. Basically, it's just  
<br>
a datatype problem. The datatype as described in your program does  
<br>
not correspond to the one you expect to see in practice. Actually you  
<br>
forget to set the correct extent.
<br>
<p>Let me show you the problem. Let's suppose 2 processes and the  
<br>
default values from you program. The original matrix (at the root) is:
<br>
root    0.000000        1.000000        2.000000
<br>
root    3.000000        4.000000        5.000000
<br>
root    6.000000        7.000000        8.000000
<br>
root    9.000000        10.000000       11.000000
<br>
root    12.000000       13.000000       14.000000
<br>
root    15.000000       16.000000       17.000000
<br>
root    18.000000       19.000000       20.000000
<br>
root    21.000000       22.000000       23.000000
<br>
root    24.000000       25.000000       26.000000
<br>
root    27.000000       28.000000       29.000000
<br>
<p>And your datatype is vector( 5, 1, 3, MPI_DOUBLE). If you look at the  
<br>
definition of the vector type as defined by the MPI standard you will  
<br>
notice that the datatype will end at the end of the last element in  
<br>
the vector, and will not add any gap at the end. Thus the extent of  
<br>
your datatype is 13 double [(5 - 1) * 3 + 1]. Here is the memory  
<br>
covered by one element:
<br>
root    0.000000        1.000000        2.000000
<br>
root    3.000000        4.000000        5.000000
<br>
root    6.000000        7.000000        8.000000
<br>
root    9.000000        10.000000       11.000000
<br>
root    12.000000
<br>
<p>Then if you consider a memory layout containing 2 such datatypes (as  
<br>
the scatter does) the first element from the second one will be 13  
<br>
not 15 as you expect.
<br>
<p>Now if you need to have the second datatype starting with 15 you have  
<br>
to extent the last line to include all elements on the last line (13  
<br>
and 14). You can use MPI_UB or MPI_Type_create_resized (depending if  
<br>
you want MPI 1 or MPI 2). Attached you will find a C program who does  
<br>
exactly what you expect. You can define MORE_OUTPUT to see how  
<br>
exactly your matrices get filled at each step.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p>PS: I was unable to compile any of the codes you attached to your  
<br>
email, so I write them starting from your code as well as your  
<br>
description. Hope they answer to your question.
<br>
<p>On Aug 4, 2005, at 3:04 PM, Joel Eaves wrote:
<br>
<p><span class="quotelev1">&gt; Hi group.  I posted a general MPI question a while ago to the mpi  
</span><br>
<span class="quotelev1">&gt; newsgroup but didn't get a response.  I need to figure this out so  
</span><br>
<span class="quotelev1">&gt; I thought I would try it on you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written a piece of code that fills a 2D array sequentially so
</span><br>
<span class="quotelev1">&gt; that I can keep track of which elements are being dropped in the
</span><br>
<span class="quotelev1">&gt; message passing.  I use the type_vector datatype to generate a  
</span><br>
<span class="quotelev1">&gt; datatype
</span><br>
<span class="quotelev1">&gt; for passing the columns.  In C, I can see that the scatter operation
</span><br>
<span class="quotelev1">&gt; passes the first matrix to process 0 correctly but that the second
</span><br>
<span class="quotelev1">&gt; matrix to process 1 is screwed up because the elements are set
</span><br>
<span class="quotelev1">&gt; backwards by two.  In other words, the second matrix begins with the
</span><br>
<span class="quotelev1">&gt; lucky 13th element instead of the 15th like it should.  There is
</span><br>
<span class="quotelev1">&gt; overlap -- the same elements appear in both of the scattered matrices.
</span><br>
<span class="quotelev1">&gt; The C++ code goes over like a lead baloon.  The operation is clearly
</span><br>
<span class="quotelev1">&gt; asking for data outside of the range for the filled matrix and so the
</span><br>
<span class="quotelev1">&gt; values of the scattered matrix are all screwed up.  I am using the LAM
</span><br>
<span class="quotelev1">&gt; MPI v. 7.1.1 and Mac OS 10.3.8
</span><br>
<span class="quotelev1">&gt; with gcc v. 3.3.  I got similar results using MPICH-2 on Linux.
</span><br>
<span class="quotelev1">&gt; Here's a piece of code written in C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char* argv[]){
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; int my_rank = MPI::COMM_WORLD.Get_rank(),n_global = 10,n_procs =
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Get_size(),
</span><br>
<span class="quotelev1">&gt; d=3,n_local = n_global/n_procs,i,k,root=0;
</span><br>
<span class="quotelev1">&gt; double A_global[n_global][d],A_local[n_local][d];
</span><br>
<span class="quotelev1">&gt; MPI_Datatype scatter;
</span><br>
<span class="quotelev1">&gt; MPI_Type_vector(n_local,1,d,MPI_DOUBLE,&amp;scatter);
</span><br>
<span class="quotelev1">&gt; MPI_Type_commit(&amp;scatter);
</span><br>
<span class="quotelev1">&gt; if(my_rank==root){
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;n_global;i++)
</span><br>
<span class="quotelev1">&gt; for(k=0;k&lt;d;k++)
</span><br>
<span class="quotelev1">&gt; A_global[i][k] = i*d+k;
</span><br>
<span class="quotelev1">&gt; for(k=0;k&lt;d;k++)
</span><br>
<span class="quotelev1">&gt; MPI_Scatter(&amp;(A_global[0][k]),1,scatter,&amp;(A_local[0][k]), 
</span><br>
<span class="quotelev1">&gt; 1,scatter,root,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;n_local;i++){
</span><br>
<span class="quotelev1">&gt; for(k=0;k&lt;d;k++)
</span><br>
<span class="quotelev1">&gt; cout &lt;&lt; A_local[i][k] &lt;&lt; &quot;\t&quot;;
</span><br>
<span class="quotelev1">&gt; cout &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In C++, the code is
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char* argv[]){
</span><br>
<span class="quotelev1">&gt; MPI::Init();
</span><br>
<span class="quotelev1">&gt; int my_rank = MPI::COMM_WORLD.Get_rank(),n_global = 10,n_procs =
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Get_size(),
</span><br>
<span class="quotelev1">&gt; d=3,n_local = n_global/n_procs,i,k,root=0;
</span><br>
<span class="quotelev1">&gt; double A_global[n_global][d],A_local[n_local][d];
</span><br>
<span class="quotelev1">&gt; MPI::Datatype scatter(MPI::DOUBLE);
</span><br>
<span class="quotelev1">&gt; scatter.Create_vector(n_local,1,d);
</span><br>
<span class="quotelev1">&gt; scatter.Commit();
</span><br>
<span class="quotelev1">&gt; if(my_rank==root){
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;n_global;i++)
</span><br>
<span class="quotelev1">&gt; for(k=0;k&lt;d;k++)
</span><br>
<span class="quotelev1">&gt; A_global[i][k] = i*d+k;
</span><br>
<span class="quotelev1">&gt; for(k=0;k&lt;d;k++)
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Scatter(&amp;(A_global[0][k]),1,scatter,&amp;(A_local[0] 
</span><br>
<span class="quotelev1">&gt; [k]),1,scatter,root);
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;n_local;i++){
</span><br>
<span class="quotelev1">&gt; for(k=0;k&lt;d;k++)
</span><br>
<span class="quotelev1">&gt; cout &lt;&lt; A_local[i][k] &lt;&lt; &quot;\t&quot;;
</span><br>
<span class="quotelev1">&gt; cout &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running the process (after a lamboot) with the command
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 scatter.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and compiling with the command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ Scatter.cpp -o scatter.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help out with this?  I don't
</span><br>
<span class="quotelev1">&gt; understand why the commands for C++ are returning erroneous results
</span><br>
<span class="quotelev1">&gt; that are *different* than they are from the C program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0107/mpi_test.c">mpi_test.c</a>
</ul>
<!-- attachment="mpi_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Previous message:</strong> <a href="0106.php">David Daniel: "Re: [O-MPI users] Question about support for finding MPI processes from a tool"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Joel Eaves: "[O-MPI users] Collective communications with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
<li><strong>Reply:</strong> <a href="0108.php">Ben Allan: "[O-MPI users] mpi opaque object fortran type"</a>
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
