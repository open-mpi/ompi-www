<?
$subject_val = "Re: [OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 13:28:23 2015" -->
<!-- isoreceived="20150306182823" -->
<!-- sent="Fri, 6 Mar 2015 19:28:23 +0100" -->
<!-- isosent="20150306182823" -->
<!-- name="Bogdan Sataric" -->
<!-- email="bogdan.sataric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="CAJXiSm1vsAqXKHJNg3_7y2N91K-BSjyh8Jv6E3DKt96ForQzBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkVyZjRXkhkxKGEmWeXbYZqT8b=0nQB8-16B=Yoh3HKY7Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-06 13:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>In reply to:</strong> <a href="26435.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George thank you very much!
<br>
<p>So can I assume that new indexed type in 1.8.5 will support 64-bit large
<br>
datatypes, or over the current 4GB datatypes (and some strange internal
<br>
restrictions in my case)? Or is there any clue what will be the improvement
<br>
over the existing datatype restrictions?
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
On Fri, Mar 6, 2015 at 12:52 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
&gt; On Thu, Mar 5, 2015 at 6:22 PM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]&gt;
&gt; wrote:
&gt;
&gt;&gt; Hello George,
&gt;&gt;
&gt;&gt; So is it safe for me to assume that my code is good and that you will
&gt;&gt; remove this bug from next OpenMPI version?
&gt;&gt;
&gt;
&gt; Yes I think it is safe to assume your code is correct (or at least it
&gt; follows the specifications you describe in your email).
&gt;
&gt; Also I would like to know which future OpenMPI version will incorporate
&gt;&gt; this fix (so I can try my code in fixed version)?
&gt;&gt;
&gt;
&gt; I pushed the code in the trunk, and created a request to get it into the
&gt; 1.8.5. So you can try any nightly build starting from tonight, and then any
&gt; stable release after the 1.8.4
&gt;
&gt;   George.
&gt;
&gt;
&gt;&gt;
&gt;
&gt;&gt;
&gt;&gt; Thank you,
&gt;&gt;
&gt;&gt; ----
&gt;&gt;
&gt;&gt; Bogdan Sataric
&gt;&gt;
&gt;&gt; email: bogdan.sataric_at_[hidden]
&gt;&gt; phone: +381 21-485-2441
&gt;&gt;
&gt;&gt; Teaching &amp; Research Assistant
&gt;&gt; Chair for Applied Computer Science
&gt;&gt; Faculty of Technical Sciences, Novi Sad, Serbia
&gt;&gt;
&gt;&gt; On Thu, Mar 5, 2015 at 6:31 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
&gt;&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; Bogdan,
&gt;&gt;&gt;
&gt;&gt;&gt; As far as I can tell your code is correct, and the problem is coming
&gt;&gt;&gt; from Open MPI. More specifically, I used alloca in the optimization stage
&gt;&gt;&gt; in MPI_Type_commit, and as your arrays of length were too large, alloca
&gt;&gt;&gt; failed and lead to a segfault. I fixed in the trunk (3c489ea), and this
&gt;&gt;&gt; will get into our next release.
&gt;&gt;&gt;
&gt;&gt;&gt; Unfortunately there is no fix for the 1.6 that I can think of.
&gt;&gt;&gt; Apparently, you are really the first that run into such kind of problems,
&gt;&gt;&gt; so guess you are the first creating gigantic datatypes.
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks for the bug report,
&gt;&gt;&gt;   George.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Thu, Mar 5, 2015 at 9:09 AM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]
&gt;&gt;&gt; &gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I've been having problems with my 3D matrix transpose program. I'm
&gt;&gt;&gt;&gt; using MPI_Type_indexed in order to allign specific blocks that I want to
&gt;&gt;&gt;&gt; send and receive across one or multiple nodes of a cluster. Up to few days
&gt;&gt;&gt;&gt; ago I was able to run my program without any errors. However several test
&gt;&gt;&gt;&gt; cases on the cluster in last few days exposed segmentation fault when I try
&gt;&gt;&gt;&gt; to form indexed type on some specific matrix configurations.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The code that forms indexed type is as follows:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; int main(int argc, char **argv) {
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     int Nx = 800;
&gt;&gt;&gt;&gt;     int Ny = 640;
&gt;&gt;&gt;&gt;     int Nz = 480;
&gt;&gt;&gt;&gt;     int gsize;
&gt;&gt;&gt;&gt;     int i, j;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
&gt;&gt;&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     printf(&quot;GSIZE: %d\n&quot;, gsize);
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     MPI_Datatype double_complex_type;
&gt;&gt;&gt;&gt;     MPI_Datatype block_send_complex_type;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     int * send_displ = (int *) malloc(Nx * Ny/gsize * sizeof(int));
&gt;&gt;&gt;&gt;     int * send_blocklen = (int *) malloc(Nx * Ny/gsize * sizeof(int));
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type);
&gt;&gt;&gt;&gt;     MPI_Type_commit(&amp;double_complex_type);
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {
&gt;&gt;&gt;&gt;         for (j = 0; j &lt; Nx; j++) {
&gt;&gt;&gt;&gt;             send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz + j * Ny *
&gt;&gt;&gt;&gt; Nz;
&gt;&gt;&gt;&gt;             send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
&gt;&gt;&gt;&gt;         }
&gt;&gt;&gt;&gt;     }
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
&gt;&gt;&gt;&gt; double_complex_type, &amp;block_send_complex_type);
&gt;&gt;&gt;&gt;     MPI_Type_commit(&amp;block_send_complex_type);
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     free(send_displ);
&gt;&gt;&gt;&gt;     free(send_blocklen);
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;     MPI_Finalize();
&gt;&gt;&gt;&gt; }
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Values of the Nx, Ny and Nz respectively are 800, 640 and 480. Value of
&gt;&gt;&gt;&gt; gsize for this test was 1 (simulation of MPI program on 1 node). The node
&gt;&gt;&gt;&gt; has 32GB of RAM and no other memory has been allocated (only this code has
&gt;&gt;&gt;&gt; been run).
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; In code basically I'm creating double_complex_type to represent complex
&gt;&gt;&gt;&gt; number (2 contiguous MPI_DOUBLE) values. The whole matrix has 800 * 640 *
&gt;&gt;&gt;&gt; 480 of these values and I'm trying to catch these values in the indexed
&gt;&gt;&gt;&gt; type. One indexed type block length is the whole Nz &quot;rod&quot; while ordering of
&gt;&gt;&gt;&gt; these &quot;rods&quot; in displacements array is given by the formula i * Nz + j * Ny
&gt;&gt;&gt;&gt; * Nz. Basically displacements start from top row, and left column of the 3D
&gt;&gt;&gt;&gt; matrix. Then I gradually sweep to the right sight of that top row, then go
&gt;&gt;&gt;&gt; to one row below sweep to the right side and so on until the bottom row.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The strange thing is that this formula and algorithm *WORK* if I put
&gt;&gt;&gt;&gt; MPI_DOUBLE type instead of derived complex type (1 instead of 2 in
&gt;&gt;&gt;&gt; MPI_TYPE_CONTIGIOUS). Also this formula *WORKS* if I put 1 for Nz
&gt;&gt;&gt;&gt; dimension instead of 480. However if I change Nz to even 2 I get
&gt;&gt;&gt;&gt; segmentation fault error in the MPI_Type_commit call.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I checked all of the displacements and they seem fine. There is no
&gt;&gt;&gt;&gt; overlapping of displacements or going under 0 or over extent of the formed
&gt;&gt;&gt;&gt; indexed type. Also the size of the datatype is below 4GB (which is I
&gt;&gt;&gt;&gt; believe limit of MPI datatypes (since MPI_Type_size function returns int *
&gt;&gt;&gt;&gt; ). Also I believe amount of memory is not an issue as even if I put Nz to
&gt;&gt;&gt;&gt; be 2, I get the same segmentation fault error, and the node has 32GB of RAM
&gt;&gt;&gt;&gt; just for this test.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; What bothers me is that most of other indexed type configurations (with
&gt;&gt;&gt;&gt; plain MPI_DOUBLE type elements), or complex type with smaller matrix (say
&gt;&gt;&gt;&gt; 400 * 640 * 480) *WORK* without segmentation fault. Also If I commit
&gt;&gt;&gt;&gt; the indexed type with MPI_DOUBLE type elements even larger matrices work
&gt;&gt;&gt;&gt; (say 960 x 800 x 640) which have exactly the same type size as 800 x 640 x
&gt;&gt;&gt;&gt; 480 complex indexed type (just under 4GB)! So basically the type size is
&gt;&gt;&gt;&gt; not an issue here, but somehow either number of blocks, size of particular
&gt;&gt;&gt;&gt; blocks, or size of block elements create problems. I'm not sure weather
&gt;&gt;&gt;&gt; there is problem in implementation of OpenMPI or something in my code is
&gt;&gt;&gt;&gt; wrong...
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I would greatly appreciate any help as I've been stuck on this problem
&gt;&gt;&gt;&gt; for days now and nothing in MPI documentation and the examples I found on
&gt;&gt;&gt;&gt; the internet is giving me a clue where the error might be.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; At the end I would like to say that code has been compiled with
&gt;&gt;&gt;&gt; Open-MPI version 1.6.5.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Thank you,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Bogdan Sataric
&gt;&gt;&gt;&gt; ----
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Bogdan Sataric
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; email: bogdan.sataric_at_[hidden]
&gt;&gt;&gt;&gt; phone: +381 21-485-2441
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Teaching &amp; Research Assistant
&gt;&gt;&gt;&gt; Chair for Applied Computer Science
&gt;&gt;&gt;&gt; Faculty of Technical Sciences, Novi Sad, Serbia
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26430.php">http://www.open-mpi.org/community/lists/users/2015/03/26430.php</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; Link to this post:
&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26431.php">http://www.open-mpi.org/community/lists/users/2015/03/26431.php</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26433.php">http://www.open-mpi.org/community/lists/users/2015/03/26433.php</a>
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26435.php">http://www.open-mpi.org/community/lists/users/2015/03/26435.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Previous message:</strong> <a href="26439.php">Nick Papior Andersen: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>In reply to:</strong> <a href="26435.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>Reply:</strong> <a href="26441.php">George Bosilca: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
