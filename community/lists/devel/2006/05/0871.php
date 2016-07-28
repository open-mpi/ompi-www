<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 15:28:43 2006" -->
<!-- isoreceived="20060510192843" -->
<!-- sent="Wed, 10 May 2006 15:28:20 -0400" -->
<!-- isosent="20060510192820" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE" -->
<!-- id="44623ED4.90001_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44610A8B.5010304_at_Sun.COM" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 15:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0872.php">Rolf Vandevaart: "[OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Previous message:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0875.php">Edgar Gabriel: "Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0875.php">Edgar Gabriel: "Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Repost because I did not see it in the archives after a day.
<br>
<p>Rolf Vandevaart wrote On 05/09/06 17:32,:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We believe there is a minor bug in comm_spawn_multiple.c. If a user 
</span><br>
<span class="quotelev1">&gt; hands in an argument of MPI_ERRCODES_IGNORE for the
</span><br>
<span class="quotelev1">&gt; array_of_errcodes to MPI_Comm_spawn_multiple() and has
</span><br>
<span class="quotelev1">&gt; parameter checking on, then one will get an error like the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:03317] *** MPI_ERR_ARG: invalid argument of some other 
</span><br>
<span class="quotelev1">&gt; kind
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:03317] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think lines 66-69 need to come out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if ( NULL == array_of_errcodes ) {
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERRHANDLER_INVOKE(comm, MPI_ERR_ARG,
</span><br>
<span class="quotelev1">&gt;                                           FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like this has already been fixed for MPI_Comm_spawn().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0872.php">Rolf Vandevaart: "[OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Previous message:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0875.php">Edgar Gabriel: "Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0875.php">Edgar Gabriel: "Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE"</a>
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
