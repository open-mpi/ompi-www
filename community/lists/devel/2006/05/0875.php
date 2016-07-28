<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 09:29:12 2006" -->
<!-- isoreceived="20060511132912" -->
<!-- sent="Thu, 11 May 2006 08:29:04 -0500" -->
<!-- isosent="20060511132904" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE" -->
<!-- id="44633C20.60901_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44623ED4.90001_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-05-11 09:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0876.php">Brian Barrett: "[OMPI devel] Fwd: Lindley Power Outage Saturday, May 13th"</a>
<li><strong>Previous message:</strong> <a href="0874.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9892"</a>
<li><strong>In reply to:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>thanks for catching that, it is now fixed on the trunk and Jeff is 
<br>
moving it right now to v1.0 and v1.1
<br>
<p>Best regards
<br>
Edgar
<br>
<p><p>Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; Repost because I did not see it in the archives after a day.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf Vandevaart wrote On 05/09/06 17:32,:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We believe there is a minor bug in comm_spawn_multiple.c. If a user 
</span><br>
<span class="quotelev2">&gt;&gt; hands in an argument of MPI_ERRCODES_IGNORE for the
</span><br>
<span class="quotelev2">&gt;&gt; array_of_errcodes to MPI_Comm_spawn_multiple() and has
</span><br>
<span class="quotelev2">&gt;&gt; parameter checking on, then one will get an error like the
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [burl-ct-v440-4:03317] *** MPI_ERR_ARG: invalid argument of some other 
</span><br>
<span class="quotelev2">&gt;&gt; kind
</span><br>
<span class="quotelev2">&gt;&gt; [burl-ct-v440-4:03317] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think lines 66-69 need to come out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if ( NULL == array_of_errcodes ) {
</span><br>
<span class="quotelev2">&gt;&gt;             return OMPI_ERRHANDLER_INVOKE(comm, MPI_ERR_ARG,
</span><br>
<span class="quotelev2">&gt;&gt;                                           FUNC_NAME);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like this has already been fixed for MPI_Comm_spawn().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0876.php">Brian Barrett: "[OMPI devel] Fwd: Lindley Power Outage Saturday, May 13th"</a>
<li><strong>Previous message:</strong> <a href="0874.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9892"</a>
<li><strong>In reply to:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
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
