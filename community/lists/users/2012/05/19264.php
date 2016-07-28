<?
$subject_val = "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 13 14:31:43 2012" -->
<!-- isoreceived="20120513183143" -->
<!-- sent="Sun, 13 May 2012 14:31:37 -0400" -->
<!-- isosent="20120513183137" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily" -->
<!-- id="33202297-10C9-437D-A973-ED0BF5CB814C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FAFD0AD.6010809_at_helsinki.fi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-13 14:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19263.php">Ilja Honkonen: "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19263.php">Ilja Honkonen: "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19269.php">Bert Wesarg: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Get the free out of the #ifndef LEAK and your problem will be solved.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On May 13, 2012, at 11:18 , Ilja Honkonen wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following program leaks memory if compiled with -DLEAK (uses about 7 GB in the end but less than 20 MB without -DLEAK).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;assert.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt; 	assert(MPI_Init(&amp;argc, &amp;argv) == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	for (int i = 0; i &lt; 10000000; i++) {
</span><br>
<span class="quotelev1">&gt; 		MPI_Datatype type;
</span><br>
<span class="quotelev1">&gt; 		assert(
</span><br>
<span class="quotelev1">&gt; 			MPI_Type_contiguous(
</span><br>
<span class="quotelev1">&gt; 				10 * sizeof(double),
</span><br>
<span class="quotelev1">&gt; 				MPI_BYTE,
</span><br>
<span class="quotelev1">&gt; 				&amp;type
</span><br>
<span class="quotelev1">&gt; 			) == MPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; 		);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		#ifndef LEAK
</span><br>
<span class="quotelev1">&gt; 		assert(MPI_Type_commit(&amp;type) == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; 		assert(MPI_Type_free(&amp;type) == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; 		#endif
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	assert(MPI_Finalize() == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since uncommitted datatypes can be used for creating new ones (MPI-2.2) this behavior seems like a rather nasty bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.5.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi compiled with gcc (GCC) 4.5.2
</span><br>
<span class="quotelev1">&gt; above program compiled and ran with
</span><br>
<span class="quotelev1">&gt; mpicc -DLEAK -O3 leak.c -std=c99 &amp;&amp; mpirun -np 1 ./a.out
</span><br>
<span class="quotelev1">&gt; on a single AMD Phenom(tm) II X6 1075T processor. Same thing happens when compiling with mpic++.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't use memchecker because then mpirun segfaults and even
</span><br>
<span class="quotelev1">&gt; ompi_info | grep memchecker
</span><br>
<span class="quotelev1">&gt; segfaults after printing MCA memchecker: valgrind (...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Ilja
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
<li><strong>Next message:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19263.php">Ilja Honkonen: "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19263.php">Ilja Honkonen: "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19269.php">Bert Wesarg: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
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
