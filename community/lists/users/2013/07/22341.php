<?
$subject_val = "Re: [OMPI users] opening a file with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 15:24:01 2013" -->
<!-- isoreceived="20130719192401" -->
<!-- sent="Fri, 19 Jul 2013 14:23:57 -0500" -->
<!-- isosent="20130719192357" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opening a file with MPI-IO" -->
<!-- id="20130719192357.GB17233_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5195F1B4.4030607_at_oma.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] opening a file with MPI-IO<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 15:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22342.php">Rob Latham: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="22340.php">Hodgess, Erin: "Re: [OMPI users] configure/library question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 17, 2013 at 11:00:36AM +0200, Peter van Hoof wrote:
<br>
<span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been banging my head against the wall for some time to find a
</span><br>
<span class="quotelev1">&gt; reliable and portable way to determine if a call to
</span><br>
<span class="quotelev1">&gt; MPI::File::Open() was successful or not.
</span><br>
<p>Sorry for the long delay in responding
<br>
<p>In C, we do it like this:
<br>
<p>static void handle_error(int errcode, char *str)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char msg[MPI_MAX_ERROR_STRING];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int resultlen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(errcode, msg, &amp;resultlen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s: %s\n&quot;, str, msg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
}
<br>
<p><p>errcode = MPI_File_open(MPI_COMM_SELF, filename,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_CREATE | MPI_MODE_RDWR, MPI_INFO_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;fh);
<br>
if (errcode != MPI_SUCCESS) handle_error(errcode, &quot;MPI_FILE_OPEN&quot;);
<br>
<p>With the C++ bindings... ugh what a mess. I had to crack open the
<br>
yellow book to find out the answer.   But on page 18 it's pretty
<br>
clear:
<br>
<p>Quoting: C++ functions do not return error codes [...]  
<br>
<p>More Quoting: Advice to Users: C++ programmers that want to handle MPI
<br>
errors on their own should use th MPI::ERRORS_THROW_EXCEPTIONS error
<br>
handler, rather than MPI::ERROR_RETURN, which is used for that purpose
<br>
in C. 
<br>
<p><p>It's important to note that MPI-IO routines *do* use ERROR_RETURN as
<br>
the error handler, so you will have to take the additional step of
<br>
setting that. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22342.php">Rob Latham: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="22340.php">Hodgess, Erin: "Re: [OMPI users] configure/library question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/05/21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
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
