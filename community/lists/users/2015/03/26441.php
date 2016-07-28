<?
$subject_val = "Re: [OMPI users] Segmentation fault with MPI_Type_indexed";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  7 12:33:56 2015" -->
<!-- isoreceived="20150307173356" -->
<!-- sent="Sat, 7 Mar 2015 12:33:54 -0500" -->
<!-- isosent="20150307173354" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with MPI_Type_indexed" -->
<!-- id="CAMJJpkW-NPm=2DM4pVcBZij=N4mQQnQ0fDyJkt=4sq3L+CFLTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJXiSm1vsAqXKHJNg3_7y2N91K-BSjyh8Jv6E3DKt96ForQzBQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-07 12:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26442.php">Aurélien Bouteiller: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan,
<br>
<p>The bug was solely related to the number of entries in the datatype, and
<br>
not the number of elements nor the size/extent of the datatype. As such, 64
<br>
bits support was not impacted by this bug.
<br>
<p><span class="quotelev1">&gt;From the user perspective, the only visible improvement is the possibility
</span><br>
to create datatypes with more than 10k (or so) different components. Thus,
<br>
it might only affect datatype creation routines that provides arrays as
<br>
arguments (mainly indexed and struct).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Fri, Mar 6, 2015 at 1:28 PM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; George thank you very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So can I assume that new indexed type in 1.8.5 will support 64-bit large
</span><br>
<span class="quotelev1">&gt; datatypes, or over the current 4GB datatypes (and some strange internal
</span><br>
<span class="quotelev1">&gt; restrictions in my case)? Or is there any clue what will be the improvement
</span><br>
<span class="quotelev1">&gt; over the existing datatype restrictions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bogdan Sataric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; email: bogdan.sataric_at_[hidden]
</span><br>
<span class="quotelev1">&gt; phone: +381 21-485-2441
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Teaching &amp; Research Assistant
</span><br>
<span class="quotelev1">&gt; Chair for Applied Computer Science
</span><br>
<span class="quotelev1">&gt; Faculty of Technical Sciences, Novi Sad, Serbia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 6, 2015 at 12:52 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 5, 2015 at 6:22 PM, Bogdan Sataric &lt;bogdan.sataric_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So is it safe for me to assume that my code is good and that you will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove this bug from next OpenMPI version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes I think it is safe to assume your code is correct (or at least it
</span><br>
<span class="quotelev2">&gt;&gt; follows the specifications you describe in your email).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also I would like to know which future OpenMPI version will incorporate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this fix (so I can try my code in fixed version)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I pushed the code in the trunk, and created a request to get it into the
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.5. So you can try any nightly build starting from tonight, and then any
</span><br>
<span class="quotelev2">&gt;&gt; stable release after the 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bogdan Sataric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: bogdan.sataric_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone: +381 21-485-2441
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Teaching &amp; Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair for Applied Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Faculty of Technical Sciences, Novi Sad, Serbia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Mar 5, 2015 at 6:31 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bogdan,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As far as I can tell your code is correct, and the problem is coming
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from Open MPI. More specifically, I used alloca in the optimization stage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in MPI_Type_commit, and as your arrays of length were too large, alloca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed and lead to a segfault. I fixed in the trunk (3c489ea), and this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will get into our next release.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately there is no fix for the 1.6 that I can think of.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Apparently, you are really the first that run into such kind of problems,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so guess you are the first creating gigantic datatypes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the bug report,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Mar 5, 2015 at 9:09 AM, Bogdan Sataric &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bogdan.sataric_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been having problems with my 3D matrix transpose program. I'm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using MPI_Type_indexed in order to allign specific blocks that I want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; send and receive across one or multiple nodes of a cluster. Up to few days
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ago I was able to run my program without any errors. However several test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cases on the cluster in last few days exposed segmentation fault when I try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to form indexed type on some specific matrix configurations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The code that forms indexed type is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int Nx = 800;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int Ny = 640;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int Nz = 480;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int gsize;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int i, j;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;gsize);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     printf(&quot;GSIZE: %d\n&quot;, gsize);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Datatype double_complex_type;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Datatype block_send_complex_type;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int * send_displ = (int *) malloc(Nx * Ny/gsize * sizeof(int));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int * send_blocklen = (int *) malloc(Nx * Ny/gsize * sizeof(int));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Type_contiguous(2, MPI_DOUBLE, &amp;double_complex_type);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Type_commit(&amp;double_complex_type);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     for (i = Ny/gsize - 1; i &gt;= 0 ; i--) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         for (j = 0; j &lt; Nx; j++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             send_displ[(Ny/gsize - 1 - i) * Nx + j] = i * Nz + j * Ny
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Nz;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             send_blocklen[(Ny/gsize - 1 - i) * Nx + j] = Nz;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Type_indexed(Nx * Ny/gsize, send_blocklen, send_displ,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; double_complex_type, &amp;block_send_complex_type);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Type_commit(&amp;block_send_complex_type);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     free(send_displ);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     free(send_blocklen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Values of the Nx, Ny and Nz respectively are 800, 640 and 480. Value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of gsize for this test was 1 (simulation of MPI program on 1 node). The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node has 32GB of RAM and no other memory has been allocated (only this code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has been run).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In code basically I'm creating double_complex_type to represent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complex number (2 contiguous MPI_DOUBLE) values. The whole matrix has 800 *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 640 * 480 of these values and I'm trying to catch these values in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indexed type. One indexed type block length is the whole Nz &quot;rod&quot; while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ordering of these &quot;rods&quot; in displacements array is given by the formula i *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nz + j * Ny * Nz. Basically displacements start from top row, and left
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; column of the 3D matrix. Then I gradually sweep to the right sight of that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; top row, then go to one row below sweep to the right side and so on until
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the bottom row.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The strange thing is that this formula and algorithm *WORK* if I put
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_DOUBLE type instead of derived complex type (1 instead of 2 in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_TYPE_CONTIGIOUS). Also this formula *WORKS* if I put 1 for Nz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dimension instead of 480. However if I change Nz to even 2 I get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; segmentation fault error in the MPI_Type_commit call.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I checked all of the displacements and they seem fine. There is no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overlapping of displacements or going under 0 or over extent of the formed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indexed type. Also the size of the datatype is below 4GB (which is I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; believe limit of MPI datatypes (since MPI_Type_size function returns int *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ). Also I believe amount of memory is not an issue as even if I put Nz to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be 2, I get the same segmentation fault error, and the node has 32GB of RAM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; just for this test.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What bothers me is that most of other indexed type configurations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (with plain MPI_DOUBLE type elements), or complex type with smaller matrix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (say 400 * 640 * 480) *WORK* without segmentation fault. Also If I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commit the indexed type with MPI_DOUBLE type elements even larger matrices
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work (say 960 x 800 x 640) which have exactly the same type size as 800 x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 640 x 480 complex indexed type (just under 4GB)! So basically the type size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is not an issue here, but somehow either number of blocks, size of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; particular blocks, or size of block elements create problems. I'm not sure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; weather there is problem in implementation of OpenMPI or something in my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code is wrong...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would greatly appreciate any help as I've been stuck on this problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for days now and nothing in MPI documentation and the examples I found on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the internet is giving me a clue where the error might be.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At the end I would like to say that code has been compiled with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open-MPI version 1.6.5.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bogdan Sataric
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bogdan Sataric
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; email: bogdan.sataric_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; phone: +381 21-485-2441
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Teaching &amp; Research Assistant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Chair for Applied Computer Science
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Faculty of Technical Sciences, Novi Sad, Serbia
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26430.php">http://www.open-mpi.org/community/lists/users/2015/03/26430.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26431.php">http://www.open-mpi.org/community/lists/users/2015/03/26431.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26433.php">http://www.open-mpi.org/community/lists/users/2015/03/26433.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26435.php">http://www.open-mpi.org/community/lists/users/2015/03/26435.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26440.php">http://www.open-mpi.org/community/lists/users/2015/03/26440.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26442.php">Aurélien Bouteiller: "Re: [OMPI users] error building BLACS with openmpi 1.8.4 and intel 2015"</a>
<li><strong>Previous message:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
<li><strong>In reply to:</strong> <a href="26440.php">Bogdan Sataric: "Re: [OMPI users] Segmentation fault with MPI_Type_indexed"</a>
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
