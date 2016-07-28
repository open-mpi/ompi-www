<?
$subject_val = "Re: [OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 18:30:01 2015" -->
<!-- isoreceived="20150305233001" -->
<!-- sent="Fri, 6 Mar 2015 00:30:00 +0100" -->
<!-- isosent="20150305233000" -->
<!-- name="Bogdan Sataric" -->
<!-- email="bogdan.sataric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="CAJXiSm2KYqooXrymNoB=OF22pL-FMUdvLRhC7qnj5eUK_5MF1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1425582829.3459.8.camel_at_cedar.reachone.com" -->
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
<strong>From:</strong> Bogdan Sataric (<em>bogdan.sataric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 18:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26435.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tom,
<br>
<p>Actually I have tried using: MPI_Type_Create_Hindexed but the same problem
<br>
persisted for the same matrix dimensions.
<br>
<p>Displacements array values are not a problem. Matrix of a size 800x640x480
<br>
creates type that is a bit less then 4GB large in case of complex datatype.
<br>
It definitely fits in 32 bit range. So it is not an 32-64 bit issue, at
<br>
least not for the value of displacements in this case.
<br>
<p>Regards,
<br>
<p><pre>
----
Bogdan Sataric
email: bogdan.sataric_at_[hidden]
phone: +381 21-485-2441
Teaching &amp; Research Assistant
Chair for Applied Computer Science
Faculty of Technical Sciences, Novi Sad, Serbia
On Thu, Mar 5, 2015 at 8:13 PM, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
&gt; Actually, you are not the first to encounter the problem with
&gt; 'MPI_Type_indexed' for very large datatypes.  I also run with a 1.6
&gt; release, and solved the problem by switching to
&gt; 'MPI_Type_Create_Hindexed' for the datatype.  The critical difference is
&gt; that the displacements for 'MPI_type_indexed' are type integer, i.e. 32
&gt; bit values, while for 'MPI_Type_Create_Hindexed' the displacements are
&gt; in bytes, but with type 'MPI_Address_Kind', i.e. normally 64 bit, and
&gt; therefore of effectively infinite size.  Otherwise the 2 'types' can be
&gt; used identically.
&gt;
&gt; T. Rosmond
&gt;
&gt;
&gt; On Thu, 2015-03-05 at 12:31 -0500, George Bosilca wrote:
&gt; &gt; Bogdan,
&gt; &gt;
&gt; &gt;
&gt; &gt; As far as I can tell your code is correct, and the problem is coming
&gt; &gt; from Open MPI. More specifically, I used alloca in the optimization
&gt; &gt; stage in MPI_Type_commit, and as your arrays of length were too large,
&gt; &gt; alloca failed and lead to a segfault. I fixed in the trunk (3c489ea),
&gt; &gt; and this will get into our next release.
&gt; &gt;
&gt; &gt;
&gt; &gt; Unfortunately there is no fix for the 1.6 that I can think of.
&gt; &gt; Apparently, you are really the first that run into such kind of
&gt; &gt; problems, so guess you are the first creating gigantic datatypes.
&gt; &gt;
&gt; &gt;
&gt; &gt; Thanks for the bug report,
&gt; &gt;   George.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Thu, Mar 5, 2015 at 9:09 AM, Bogdan Sataric
&gt; &gt; &lt;bogdan.sataric_at_[hidden]&gt; wrote:
&gt; &gt;         I've been having problems with my 3D matrix transpose program.
&gt; &gt;         I'm using MPI_Type_indexed in order to allign specific blocks
&gt; &gt;         that I want to send and receive across one or multiple nodes
&gt; &gt;         of a cluster. Up to few days ago I was able to run my program
&gt; &gt;         without any errors. However several test cases on the cluster
&gt; &gt;         in last few days exposed segmentation fault when I try to form
&gt; &gt;         indexed type on some specific matrix configurations.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;         The code that forms indexed type is as follows:
&gt; &gt;
&gt; &gt;
&gt; &gt;         #include &lt;stdio.h&gt;
&gt; &gt;         #include &lt;stdlib.h&gt;
&gt; &gt;         #include &lt;mpi.h&gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;         int main(int argc, char **argv) {
&gt; &gt;
&gt; &gt;
&gt; &gt;             int Nx = 800;
&gt; &gt;             int Ny = 640;
&gt; &gt;             int Nz = 480;
&gt; &gt;             int gsize;
&gt; &gt;             int i, j;
&gt; &gt;
&gt; &gt;
&gt; &gt;             MPI_Init(&amp;argc, &amp;argv);
&gt; &gt;             MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);
&gt; &gt;
&gt; &gt;
&gt; &gt;             printf(&quot;GSIZE: %d\n&quot;, gsize);
&gt; &gt;
&gt; &gt;
&gt; &gt;             MPI_Datatype double_complex_type;
&gt; &gt;             MPI_Datatype block_send_complex_type;
&gt; &gt;
&gt; &gt;
&gt; &gt;             int * send_displ = (int *) malloc(Nx * Ny/gsize *
&gt; &gt;         sizeof(int));
&gt; &gt;             int * send_blocklen = (int *) malloc(Nx * Ny/gsize *
&gt; &gt;         sizeof(int));
&gt; &gt;
&gt; &gt;
&gt; &gt;             MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type);
&gt; &gt;             MPI_Type_commit(&amp;double_complex_type);
&gt; &gt;
&gt; &gt;
&gt; &gt;             for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {
&gt; &gt;                 for (j = 0; j &lt; Nx; j++) {
&gt; &gt;                     send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz +
&gt; &gt;         j * Ny * Nz;
&gt; &gt;                     send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
&gt; &gt;
&gt; &gt;                 }
&gt; &gt;             }
&gt; &gt;
&gt; &gt;
&gt; &gt;             MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
&gt; &gt;         double_complex_type, &amp;block_send_complex_type);
&gt; &gt;             MPI_Type_commit(&amp;block_send_complex_type);
&gt; &gt;
&gt; &gt;
&gt; &gt;             free(send_displ);
&gt; &gt;             free(send_blocklen);
&gt; &gt;
&gt; &gt;
&gt; &gt;             MPI_Finalize();
&gt; &gt;         }
&gt; &gt;
&gt; &gt;
&gt; &gt;         Values of the Nx, Ny and Nz respectively are 800, 640 and 480.
&gt; &gt;         Value of gsize for this test was 1 (simulation of MPI program
&gt; &gt;         on 1 node). The node has 32GB of RAM and no other memory has
&gt; &gt;         been allocated (only this code has been run).
&gt; &gt;
&gt; &gt;
&gt; &gt;         In code basically I'm creating double_complex_type to
&gt; &gt;         represent complex number (2 contiguous MPI_DOUBLE) values. The
&gt; &gt;         whole matrix has 800 * 640 * 480 of these values and I'm
&gt; &gt;         trying to catch these values in the indexed type. One indexed
&gt; &gt;         type block length is the whole Nz &quot;rod&quot; while ordering of
&gt; &gt;         these &quot;rods&quot; in displacements array is given by the formula i
&gt; &gt;         * Nz + j * Ny * Nz. Basically displacements start from top
&gt; &gt;         row, and left column of the 3D matrix. Then I gradually sweep
&gt; &gt;         to the right sight of that top row, then go to one row below
&gt; &gt;         sweep to the right side and so on until the bottom row.
&gt; &gt;
&gt; &gt;
&gt; &gt;         The strange thing is that this formula and algorithm WORK if I
&gt; &gt;         put MPI_DOUBLE type instead of derived complex type (1 instead
&gt; &gt;         of 2 in MPI_TYPE_CONTIGIOUS). Also this formula WORKS if I put
&gt; &gt;         1 for Nz dimension instead of 480. However if I change Nz to
&gt; &gt;         even 2 I get segmentation fault error in the MPI_Type_commit
&gt; &gt;         call.
&gt; &gt;
&gt; &gt;
&gt; &gt;         I checked all of the displacements and they seem fine. There
&gt; &gt;         is no overlapping of displacements or going under 0 or over
&gt; &gt;         extent of the formed indexed type. Also the size of the
&gt; &gt;         datatype is below 4GB (which is I believe limit of MPI
&gt; &gt;         datatypes (since MPI_Type_size function returns int * ). Also
&gt; &gt;         I believe amount of memory is not an issue as even if I put Nz
&gt; &gt;         to be 2, I get the same segmentation fault error, and the node
&gt; &gt;         has 32GB of RAM just for this test.
&gt; &gt;
&gt; &gt;
&gt; &gt;         What bothers me is that most of other indexed type
&gt; &gt;         configurations (with plain MPI_DOUBLE type elements), or
&gt; &gt;         complex type with smaller matrix (say 400 * 640 * 480) WORK
&gt; &gt;         without segmentation fault. Also If I commit the indexed type
&gt; &gt;         with MPI_DOUBLE type elements even larger matrices work (say
&gt; &gt;         960 x 800 x 640) which have exactly the same type size as 800
&gt; &gt;         x 640 x 480 complex indexed type (just under 4GB)! So
&gt; &gt;         basically the type size is not an issue here, but somehow
&gt; &gt;         either number of blocks, size of particular blocks, or size of
&gt; &gt;         block elements create problems. I'm not sure weather there is
&gt; &gt;         problem in implementation of OpenMPI or something in my code
&gt; &gt;         is wrong...
&gt; &gt;
&gt; &gt;
&gt; &gt;         I would greatly appreciate any help as I've been stuck on this
&gt; &gt;         problem for days now and nothing in MPI documentation and the
&gt; &gt;         examples I found on the internet is giving me a clue where the
&gt; &gt;         error might be.
&gt; &gt;
&gt; &gt;
&gt; &gt;         At the end I would like to say that code has been compiled
&gt; &gt;         with Open-MPI version 1.6.5.
&gt; &gt;
&gt; &gt;
&gt; &gt;         Thank you,
&gt; &gt;
&gt; &gt;
&gt; &gt;         Bogdan Sataric
&gt; &gt;         ----
&gt; &gt;
&gt; &gt;
&gt; &gt;         Bogdan Sataric
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;         email: bogdan.sataric_at_[hidden]
&gt; &gt;         phone: +381 21-485-2441
&gt; &gt;
&gt; &gt;
&gt; &gt;         Teaching &amp; Research Assistant
&gt; &gt;         Chair for Applied Computer Science
&gt; &gt;         Faculty of Technical Sciences, Novi Sad, Serbia
&gt; &gt;
&gt; &gt;
&gt; &gt;         _______________________________________________
&gt; &gt;         users mailing list
&gt; &gt;         users_at_[hidden]
&gt; &gt;         Subscription:
&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;         Link to this post:
&gt; &gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/03/26430.php">http://www.open-mpi.org/community/lists/users/2015/03/26430.php</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26431.php">http://www.open-mpi.org/community/lists/users/2015/03/26431.php</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26432.php">http://www.open-mpi.org/community/lists/users/2015/03/26432.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26435.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26432.php">Tom Rosmond: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26433.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
