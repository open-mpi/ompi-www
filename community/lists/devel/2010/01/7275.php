<?
$subject_val = "[OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 07:40:53 2010" -->
<!-- isoreceived="20100105124053" -->
<!-- sent="Tue, 5 Jan 2010 13:41:10 +0100 (CET)" -->
<!-- isosent="20100105124110" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Thread safety levels" -->
<!-- id="alpine.DEB.2.00.1001051312490.4161_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Thread safety levels<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 07:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7276.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Previous message:</strong> <a href="7274.php">Terry Dontje: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I'm currently playing with thread levels in Open MPI and I'm quite 
<br>
surprised by the current code.
<br>
<p>First, the C interface :
<br>
at ompi/mpi/c/init_thread.c:56 we have :
<br>
#if OPAL_ENABLE_MPI_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*provided = MPI_THREAD_MULTIPLE;
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*provided = MPI_THREAD_SINGLE;
<br>
#endif
<br>
prior to the call to ompi_mpi_init() which will in turn override the 
<br>
&quot;provided&quot; value. Should we remove these 5 lines ?
<br>
<p>Then at ompi/runtime/ompi_mpi_init.c:372, we have -I guess- the real code 
<br>
which is :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_requested = requested;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_HAVE_THREAD_SUPPORT == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = MPI_THREAD_SINGLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_main_thread = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (OPAL_ENABLE_MPI_THREADS == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = requested;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_main_thread = opal_thread_get_self();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_THREAD_MULTIPLE == requested) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = MPI_THREAD_SERIALIZED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = requested;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_main_thread = opal_thread_get_self();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>This code seems ok to me provided that :
<br>
&nbsp;&nbsp;* (OPAL_ENABLE_MPI_THREADS == 1) means &quot;Open MPI configured to provide 
<br>
thread multiple&quot;,
<br>
&nbsp;&nbsp;* (OPAL_HAVE_THREAD_SUPPORT == 0) means &quot;we do not have threads at all&quot; 
<br>
though even if we do not have threads at compile time, it does in no way 
<br>
prevent us from doing THREAD_FUNNELED or THREAD_SERIALIZED.
<br>
<p>The reality seems different at opal/include/opal_config_bottom.h:70 :
<br>
<p>/* Do we have posix or solaris thread lib */
<br>
#define OPAL_HAVE_THREADS (OPAL_HAVE_POSIX_THREADS || OPAL_HAVE_SOLARIS_THREADS)
<br>
/* Do we have thread support? */
<br>
#define OPAL_HAVE_THREAD_SUPPORT (OPAL_ENABLE_MPI_THREADS || OPAL_ENABLE_PROGRESS_THREADS)
<br>
<p>&quot;we do not have threads at all&quot; seems to me to be OPAL_HAVE_THREADS and 
<br>
not OPAL_HAVE_THREAD_SUPPORT. What do you think ? Maybe 
<br>
OPAL_HAVE_THREAD_SUPPORT should be renamed, too (seems misleading to me).
<br>
<p>The result is that the current default configuration of Open MPI has 
<br>
OPAL_HAVE_THREAD_SUPPORT defined to 0 and Open MPI always returns 
<br>
THREAD_SINGLE, even if it is perfectly capable of THREAD_FUNNELED and 
<br>
THREAD_SERIALIZED.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7276.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Previous message:</strong> <a href="7274.php">Terry Dontje: "Re: [OMPI devel] RFC: Suspend/resume enhancements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7900.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
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
