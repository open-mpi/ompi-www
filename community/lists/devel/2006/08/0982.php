<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  1 08:49:19 2006" -->
<!-- isoreceived="20060801124919" -->
<!-- sent="Tue, 1 Aug 2006 08:49:17 -0400" -->
<!-- isosent="20060801124917" -->
<!-- name="Chris Hennes" -->
<!-- email="chennes_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be" -->
<!-- id="77268f7f0608010549l30e98791qcd0fd3344f72f08b_at_mail.gmail.com" -->
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
<strong>From:</strong> Chris Hennes (<em>chennes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-01 08:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0981.php">Brian Barrett: "Re: [OMPI devel] progress thread check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>Reply:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the file ompi/mpi/c/info_set.c, lines 87-92, from the current
<br>
release version of the code (v1.1),
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value_length = (value) ? strlen (value) : 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((NULL == value) || (0 == value_length) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(MPI_MAX_INFO_KEY &lt;= value_length)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE (MPI_COMM_WORLD, MPI_ERR_INFO_VALUE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I believe that in this case the third line down (line 89) should instead be
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(MPI_MAX_INFO_VAL &lt;= value_length)) {
<br>
<p>i.e. comparing the value argument to the max value length, rather than
<br>
the max key length.
<br>
<p>Thanks,
<br>
<p>Chris Hennes
<br>
Penn State
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0981.php">Brian Barrett: "Re: [OMPI devel] progress thread check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<li><strong>Reply:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
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
