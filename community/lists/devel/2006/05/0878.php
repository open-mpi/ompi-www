<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 15 07:33:25 2006" -->
<!-- isoreceived="20060515113325" -->
<!-- sent="Mon, 15 May 2006 06:33:16 -0500" -->
<!-- isosent="20060515113316" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE" -->
<!-- id="446866FC.3020100_at_cs.uh.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-15 07:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Previous message:</strong> <a href="0877.php">Rolf Vandevaart: "[OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0877.php">Rolf Vandevaart: "[OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>this should actually be fixed already, I just checked on trunk, v1.0 and 
<br>
v1.1, in all three branches the according lines have been removed...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; We believe there is a minor bug in comm_spawn_multiple.c. 
</span><br>
<span class="quotelev1">&gt; If a user hands in an argument of MPI_ERRCODES_IGNORE for the
</span><br>
<span class="quotelev1">&gt; array_of_errcodes to MPI_Comm_spawn_multiple() and has
</span><br>
<span class="quotelev1">&gt; parameter checking on, then one will get an error like the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [burl-ct-v440-4:03317] *** MPI_ERR_ARG: invalid argument of some other kind
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
<p><p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0879.php">Rolf Vandevaart: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Previous message:</strong> <a href="0877.php">Rolf Vandevaart: "[OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0877.php">Rolf Vandevaart: "[OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
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
