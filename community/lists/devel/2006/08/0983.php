<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  1 12:20:20 2006" -->
<!-- isoreceived="20060801162020" -->
<!-- sent="Tue, 01 Aug 2006 12:20:02 -0400" -->
<!-- isosent="20060801162002" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be" -->
<!-- id="C0F4F772.1184A%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77268f7f0608010549l30e98791qcd0fd3344f72f08b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-01 12:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0984.php">Brian Barrett: "[OMPI devel] trunk changes: F90 shared libraries / New one-sided component"</a>
<li><strong>Previous message:</strong> <a href="0982.php">Chris Hennes: "[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>In reply to:</strong> <a href="0982.php">Chris Hennes: "[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're exactly right -- thanks for the report!
<br>
<p><p>On 8/1/06 8:49 AM, &quot;Chris Hennes&quot; &lt;chennes_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In the file ompi/mpi/c/info_set.c, lines 87-92, from the current
</span><br>
<span class="quotelev1">&gt; release version of the code (v1.1),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         value_length = (value) ? strlen (value) : 0;
</span><br>
<span class="quotelev1">&gt;         if ((NULL == value) || (0 == value_length) ||
</span><br>
<span class="quotelev1">&gt;             (MPI_MAX_INFO_KEY &lt;= value_length)) {
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, MPI_ERR_INFO_VALUE,
</span><br>
<span class="quotelev1">&gt;                                            FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that in this case the third line down (line 89) should instead be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             (MPI_MAX_INFO_VAL &lt;= value_length)) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i.e. comparing the value argument to the max value length, rather than
</span><br>
<span class="quotelev1">&gt; the max key length.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris Hennes
</span><br>
<span class="quotelev1">&gt; Penn State
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0984.php">Brian Barrett: "[OMPI devel] trunk changes: F90 shared libraries / New one-sided component"</a>
<li><strong>Previous message:</strong> <a href="0982.php">Chris Hennes: "[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>In reply to:</strong> <a href="0982.php">Chris Hennes: "[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
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
