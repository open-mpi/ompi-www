<?
$subject_val = "Re: [OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 14:13:51 2015" -->
<!-- isoreceived="20150305191351" -->
<!-- sent="Thu, 05 Mar 2015 11:13:49 -0800" -->
<!-- isosent="20150305191349" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="1425582829.3459.8.camel_at_cedar.reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMJJpkXar0N8f9p5Th3_umgzy6VLbsBGVDeGd5-VazbVYFD00A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with MPI_Type_indexed<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 14:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26434.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26434.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, you are not the first to encounter the problem with
<br>
'MPI_Type_indexed' for very large datatypes.  I also run with a 1.6
<br>
release, and solved the problem by switching to
<br>
'MPI_Type_Create_Hindexed' for the datatype.  The critical difference is
<br>
that the displacements for 'MPI_type_indexed' are type integer, i.e. 32
<br>
bit values, while for 'MPI_Type_Create_Hindexed' the displacements are
<br>
in bytes, but with type 'MPI_Address_Kind', i.e. normally 64 bit, and
<br>
therefore of effectively infinite size.  Otherwise the 2 'types' can be
<br>
used identically.
<br>
<p>T. Rosmond
<br>
<p><p>On Thu, 2015-03-05 at 12:31 -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Bogdan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can tell your code is correct, and the problem is coming
</span><br>
<span class="quotelev1">&gt; from Open MPI. More specifically, I used alloca in the optimization
</span><br>
<span class="quotelev1">&gt; stage in MPI_Type_commit, and as your arrays of length were too large,
</span><br>
<span class="quotelev1">&gt; alloca failed and lead to a segfault. I fixed in the trunk (3c489ea),
</span><br>
<span class="quotelev1">&gt; and this will get into our next release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately there is no fix for the 1.6 that I can think of.
</span><br>
<span class="quotelev1">&gt; Apparently, you are really the first that run into such kind of
</span><br>
<span class="quotelev1">&gt; problems, so guess you are the first creating gigantic datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report,
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 5, 2015 at 9:09 AM, Bogdan Sataric
</span><br>
<span class="quotelev1">&gt; &lt;bogdan.sataric_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         I've been having problems with my 3D matrix transpose program.
</span><br>
<span class="quotelev1">&gt;         I'm using MPI_Type_indexed in order to allign specific blocks
</span><br>
<span class="quotelev1">&gt;         that I want to send and receive across one or multiple nodes
</span><br>
<span class="quotelev1">&gt;         of a cluster. Up to few days ago I was able to run my program
</span><br>
<span class="quotelev1">&gt;         without any errors. However several test cases on the cluster
</span><br>
<span class="quotelev1">&gt;         in last few days exposed segmentation fault when I try to form
</span><br>
<span class="quotelev1">&gt;         indexed type on some specific matrix configurations.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The code that forms indexed type is as follows:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;         #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;         #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             int Nx = 800;
</span><br>
<span class="quotelev1">&gt;             int Ny = 640;
</span><br>
<span class="quotelev1">&gt;             int Nz = 480;
</span><br>
<span class="quotelev1">&gt;             int gsize;
</span><br>
<span class="quotelev1">&gt;             int i, j;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             MPI_Init(&amp;argc, &amp;argv);                             
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);  
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             printf(&quot;GSIZE: %d\n&quot;, gsize);
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             MPI_Datatype double_complex_type;
</span><br>
<span class="quotelev1">&gt;             MPI_Datatype block_send_complex_type; 
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             int * send_displ = (int *) malloc(Nx * Ny/gsize *
</span><br>
<span class="quotelev1">&gt;         sizeof(int));
</span><br>
<span class="quotelev1">&gt;             int * send_blocklen = (int *) malloc(Nx * Ny/gsize *
</span><br>
<span class="quotelev1">&gt;         sizeof(int));
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type); 
</span><br>
<span class="quotelev1">&gt;             MPI_Type_commit(&amp;double_complex_type);
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {     
</span><br>
<span class="quotelev1">&gt;                 for (j = 0; j &lt; Nx; j++) { 
</span><br>
<span class="quotelev1">&gt;                     send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz +
</span><br>
<span class="quotelev1">&gt;         j * Ny * Nz;  
</span><br>
<span class="quotelev1">&gt;                     send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
</span><br>
<span class="quotelev1">&gt;         double_complex_type, &amp;block_send_complex_type); 
</span><br>
<span class="quotelev1">&gt;             MPI_Type_commit(&amp;block_send_complex_type);
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             free(send_displ);
</span><br>
<span class="quotelev1">&gt;             free(send_blocklen);
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;             MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Values of the Nx, Ny and Nz respectively are 800, 640 and 480.
</span><br>
<span class="quotelev1">&gt;         Value of gsize for this test was 1 (simulation of MPI program
</span><br>
<span class="quotelev1">&gt;         on 1 node). The node has 32GB of RAM and no other memory has
</span><br>
<span class="quotelev1">&gt;         been allocated (only this code has been run).
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         In code basically I'm creating double_complex_type to
</span><br>
<span class="quotelev1">&gt;         represent complex number (2 contiguous MPI_DOUBLE) values. The
</span><br>
<span class="quotelev1">&gt;         whole matrix has 800 * 640 * 480 of these values and I'm
</span><br>
<span class="quotelev1">&gt;         trying to catch these values in the indexed type. One indexed
</span><br>
<span class="quotelev1">&gt;         type block length is the whole Nz &quot;rod&quot; while ordering of
</span><br>
<span class="quotelev1">&gt;         these &quot;rods&quot; in displacements array is given by the formula i
</span><br>
<span class="quotelev1">&gt;         * Nz + j * Ny * Nz. Basically displacements start from top
</span><br>
<span class="quotelev1">&gt;         row, and left column of the 3D matrix. Then I gradually sweep
</span><br>
<span class="quotelev1">&gt;         to the right sight of that top row, then go to one row below
</span><br>
<span class="quotelev1">&gt;         sweep to the right side and so on until the bottom row.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The strange thing is that this formula and algorithm WORK if I
</span><br>
<span class="quotelev1">&gt;         put MPI_DOUBLE type instead of derived complex type (1 instead
</span><br>
<span class="quotelev1">&gt;         of 2 in MPI_TYPE_CONTIGIOUS). Also this formula WORKS if I put
</span><br>
<span class="quotelev1">&gt;         1 for Nz dimension instead of 480. However if I change Nz to
</span><br>
<span class="quotelev1">&gt;         even 2 I get segmentation fault error in the MPI_Type_commit
</span><br>
<span class="quotelev1">&gt;         call.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         I checked all of the displacements and they seem fine. There
</span><br>
<span class="quotelev1">&gt;         is no overlapping of displacements or going under 0 or over
</span><br>
<span class="quotelev1">&gt;         extent of the formed indexed type. Also the size of the
</span><br>
<span class="quotelev1">&gt;         datatype is below 4GB (which is I believe limit of MPI
</span><br>
<span class="quotelev1">&gt;         datatypes (since MPI_Type_size function returns int * ). Also
</span><br>
<span class="quotelev1">&gt;         I believe amount of memory is not an issue as even if I put Nz
</span><br>
<span class="quotelev1">&gt;         to be 2, I get the same segmentation fault error, and the node
</span><br>
<span class="quotelev1">&gt;         has 32GB of RAM just for this test.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         What bothers me is that most of other indexed type
</span><br>
<span class="quotelev1">&gt;         configurations (with plain MPI_DOUBLE type elements), or
</span><br>
<span class="quotelev1">&gt;         complex type with smaller matrix (say 400 * 640 * 480) WORK
</span><br>
<span class="quotelev1">&gt;         without segmentation fault. Also If I commit the indexed type
</span><br>
<span class="quotelev1">&gt;         with MPI_DOUBLE type elements even larger matrices work (say
</span><br>
<span class="quotelev1">&gt;         960 x 800 x 640) which have exactly the same type size as 800
</span><br>
<span class="quotelev1">&gt;         x 640 x 480 complex indexed type (just under 4GB)! So
</span><br>
<span class="quotelev1">&gt;         basically the type size is not an issue here, but somehow
</span><br>
<span class="quotelev1">&gt;         either number of blocks, size of particular blocks, or size of
</span><br>
<span class="quotelev1">&gt;         block elements create problems. I'm not sure weather there is
</span><br>
<span class="quotelev1">&gt;         problem in implementation of OpenMPI or something in my code
</span><br>
<span class="quotelev1">&gt;         is wrong...
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         I would greatly appreciate any help as I've been stuck on this
</span><br>
<span class="quotelev1">&gt;         problem for days now and nothing in MPI documentation and the
</span><br>
<span class="quotelev1">&gt;         examples I found on the internet is giving me a clue where the
</span><br>
<span class="quotelev1">&gt;         error might be.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         At the end I would like to say that code has been compiled
</span><br>
<span class="quotelev1">&gt;         with Open-MPI version 1.6.5.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Thank you,
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Bogdan Sataric
</span><br>
<span class="quotelev1">&gt;         ----
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Bogdan Sataric
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         email: bogdan.sataric_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         phone: +381 21-485-2441
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Teaching &amp; Research Assistant
</span><br>
<span class="quotelev1">&gt;         Chair for Applied Computer Science
</span><br>
<span class="quotelev1">&gt;         Faculty of Technical Sciences, Novi Sad, Serbia
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/03/26430.php">http://www.open-mpi.org/community/lists/users/2015/03/26430.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26431.php">http://www.open-mpi.org/community/lists/users/2015/03/26431.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26431.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26434.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26434.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
