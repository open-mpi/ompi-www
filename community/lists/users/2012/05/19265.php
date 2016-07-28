<?
$subject_val = "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 02:07:15 2012" -->
<!-- isoreceived="20120514060715" -->
<!-- sent="Mon, 14 May 2012 09:06:57 +0300" -->
<!-- isosent="20120514060657" -->
<!-- name="Ilja Honkonen" -->
<!-- email="ilja.honkonen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily" -->
<!-- id="4FB0A101.6030806_at_helsinki.fi" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="33202297-10C9-437D-A973-ED0BF5CB814C_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ilja Honkonen (<em>ilja.honkonen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 02:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19266.php">Andreas Schäfer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19266.php">Andreas Schäfer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19266.php">Andreas Schäfer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Get the free out of the #ifndef LEAK and your problem will be solved.
</span><br>
<span class="quotelev2">&gt;&gt; 	for (int i = 0; i&lt;  10000000; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; 		MPI_Datatype type;
</span><br>
<span class="quotelev2">&gt;&gt; 		assert(
</span><br>
<span class="quotelev2">&gt;&gt; 			MPI_Type_contiguous(
</span><br>
<span class="quotelev2">&gt;&gt; 				10 * sizeof(double),
</span><br>
<span class="quotelev2">&gt;&gt; 				MPI_BYTE,
</span><br>
<span class="quotelev2">&gt;&gt; 				&amp;type
</span><br>
<span class="quotelev2">&gt;&gt; 			) == MPI_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 		);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 		#ifndef LEAK
</span><br>
<span class="quotelev2">&gt;&gt; 		assert(MPI_Type_commit(&amp;type) == MPI_SUCCESS);
</span><br>
<span class="quotelev2">&gt;&gt; 		assert(MPI_Type_free(&amp;type) == MPI_SUCCESS);
</span><br>
<span class="quotelev2">&gt;&gt; 		#endif
</span><br>
<span class="quotelev2">&gt;&gt; 	}
</span><br>
<p>Thanks, so it's a feature. A bit surprising though since usually local 
<br>
variables are deallocated automatically.
<br>
<p>Ilja
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19266.php">Andreas Schäfer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19264.php">George Bosilca: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19266.php">Andreas Schäfer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19266.php">Andreas Schäfer: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
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
