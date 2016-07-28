<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 15 05:03:56 2006" -->
<!-- isoreceived="20060515090356" -->
<!-- sent="Tue, 09 May 2006 17:32:59 -0400" -->
<!-- isosent="20060509213259" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE" -->
<!-- id="44610A8B.5010304_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2006-05-09 17:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Brian Barrett: "[OMPI devel] Fwd: Lindley Power Outage Saturday, May 13th"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0878.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We believe there is a minor bug in comm_spawn_multiple.c. 
<br>
If a user hands in an argument of MPI_ERRCODES_IGNORE for the
<br>
array_of_errcodes to MPI_Comm_spawn_multiple() and has
<br>
parameter checking on, then one will get an error like the
<br>
following:
<br>
<p>[burl-ct-v440-4:03317] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[burl-ct-v440-4:03317] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>I think lines 66-69 need to come out.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( NULL == array_of_errcodes ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(comm, MPI_ERR_ARG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Looks like this has already been fixed for MPI_Comm_spawn().
<br>
<p>Rolf
<br>
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
<li><strong>Next message:</strong> <a href="0878.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Brian Barrett: "[OMPI devel] Fwd: Lindley Power Outage Saturday, May 13th"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<li><strong>Reply:</strong> <a href="0878.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
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
