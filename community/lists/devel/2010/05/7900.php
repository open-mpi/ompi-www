<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 03:45:41 2010" -->
<!-- isoreceived="20100510074541" -->
<!-- sent="Mon, 10 May 2010 16:45:30 +0900" -->
<!-- isosent="20100510074530" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="874oigmc85.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.1001051312490.4161_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Thread safety levels<br>
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 03:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7275.php">Sylvain Jeaugey: "[OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>Though Sylvain's original mail (*1) was sent 4 months ago and nobody
<br>
replied to it, I'm interested in this issue and strongly agree with
<br>
Sylvain.
<br>
<p>&nbsp;*1 <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7275.php">http://www.open-mpi.org/community/lists/devel/2010/01/7275.php</a>
<br>
<p>As explained by Sylvain, current Open MPI implementation always returns
<br>
MPI_THREAD_SINGLE as provided thread level if neither --enable-mpi-threads
<br>
nor --enable-progress-threads was specified at configure (v1.4).
<br>
<p>If we use OpenMP with MPI, we need at least MPI_THREAD_FUNNELED even
<br>
if MPI functions are called only outside of omp parallel region,
<br>
like below.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#pragma omp parallel for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (...) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* computation */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allreduce(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#pragma omp parallel for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (...) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* computation */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>This means Open MPI users must specify --enable-mpi-threads or
<br>
--enable-progress-threads to use OpenMP. Is it true?
<br>
But this two configure options, i.e. OMPI_HAVE_THREAD_SUPPORT macro,
<br>
lead to performance penalty by mutex lock/unlock.
<br>
<p># I know that we can actually use OpenMP with MPI_THREAD_SINGLE.
<br>
# I'm talking about reason why Open MPI returns MPI_THREAD_SINGLE.
<br>
<p>I believe OMPI_HAVE_THREADS (not OMPI_HAVE_THREAD_SUPPORT !) is sufficient
<br>
to support MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED, and therefore
<br>
OMPI_HAVE_THREAD_SUPPORT should be OMPI_HAVE_THREADS at following
<br>
part in ompi_mpi_init function, as suggested by Sylvain.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_requested = requested;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_HAVE_THREAD_SUPPORT == 0) { /* &lt;- should be OMPI_HAVE_THREADS ? */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = MPI_THREAD_SINGLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_main_thread = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (OMPI_ENABLE_MPI_THREADS == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = requested;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_main_thread = opal_thread_get_self();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_THREAD_MULTIPLE == requested) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = MPI_THREAD_SERIALIZED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_thread_provided = *provided = requested;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_main_thread = opal_thread_get_self();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>If not, what is the problem to support MPI_THREAD_FUNNELED and
<br>
MPI_THREAD_SERIALIZED without OMPI_HAVE_THREAD_SUPPORT?
<br>
<p>Though options and code above are those of v1.4, trunk seems to same.
<br>
MPI_THREAD_MULTIPLE needs --enable-opal-multi-threads or
<br>
--enable-mpi-thread-multiple and they lead to performance penalty.
<br>
<p>Regards,
<br>
Kawashima
<br>
<p><span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently playing with thread levels in Open MPI and I'm quite 
</span><br>
<span class="quotelev1">&gt; surprised by the current code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, the C interface :
</span><br>
<span class="quotelev1">&gt; at ompi/mpi/c/init_thread.c:56 we have :
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_MPI_THREADS
</span><br>
<span class="quotelev1">&gt;      *provided = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;      *provided = MPI_THREAD_SINGLE;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; prior to the call to ompi_mpi_init() which will in turn override the 
</span><br>
<span class="quotelev1">&gt; &quot;provided&quot; value. Should we remove these 5 lines ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then at ompi/runtime/ompi_mpi_init.c:372, we have -I guess- the real code 
</span><br>
<span class="quotelev1">&gt; which is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ompi_mpi_thread_requested = requested;
</span><br>
<span class="quotelev1">&gt;      if (OPAL_HAVE_THREAD_SUPPORT == 0) {
</span><br>
<span class="quotelev1">&gt;          ompi_mpi_thread_provided = *provided = MPI_THREAD_SINGLE;
</span><br>
<span class="quotelev1">&gt;          ompi_mpi_main_thread = NULL;
</span><br>
<span class="quotelev1">&gt;      } else if (OPAL_ENABLE_MPI_THREADS == 1) {
</span><br>
<span class="quotelev1">&gt;          ompi_mpi_thread_provided = *provided = requested;
</span><br>
<span class="quotelev1">&gt;          ompi_mpi_main_thread = opal_thread_get_self();
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          if (MPI_THREAD_MULTIPLE == requested) {
</span><br>
<span class="quotelev1">&gt;              ompi_mpi_thread_provided = *provided = MPI_THREAD_SERIALIZED;
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              ompi_mpi_thread_provided = *provided = requested;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          ompi_mpi_main_thread = opal_thread_get_self();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code seems ok to me provided that :
</span><br>
<span class="quotelev1">&gt;   * (OPAL_ENABLE_MPI_THREADS == 1) means &quot;Open MPI configured to provide 
</span><br>
<span class="quotelev1">&gt; thread multiple&quot;,
</span><br>
<span class="quotelev1">&gt;   * (OPAL_HAVE_THREAD_SUPPORT == 0) means &quot;we do not have threads at all&quot; 
</span><br>
<span class="quotelev1">&gt; though even if we do not have threads at compile time, it does in no way 
</span><br>
<span class="quotelev1">&gt; prevent us from doing THREAD_FUNNELED or THREAD_SERIALIZED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reality seems different at opal/include/opal_config_bottom.h:70 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Do we have posix or solaris thread lib */
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_THREADS (OPAL_HAVE_POSIX_THREADS || OPAL_HAVE_SOLARIS_THREADS)
</span><br>
<span class="quotelev1">&gt; /* Do we have thread support? */
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_THREAD_SUPPORT (OPAL_ENABLE_MPI_THREADS || OPAL_ENABLE_PROGRESS_THREADS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;we do not have threads at all&quot; seems to me to be OPAL_HAVE_THREADS and 
</span><br>
<span class="quotelev1">&gt; not OPAL_HAVE_THREAD_SUPPORT. What do you think ? Maybe 
</span><br>
<span class="quotelev1">&gt; OPAL_HAVE_THREAD_SUPPORT should be renamed, too (seems misleading to me).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The result is that the current default configuration of Open MPI has 
</span><br>
<span class="quotelev1">&gt; OPAL_HAVE_THREAD_SUPPORT defined to 0 and Open MPI always returns 
</span><br>
<span class="quotelev1">&gt; THREAD_SINGLE, even if it is perfectly capable of THREAD_FUNNELED and 
</span><br>
<span class="quotelev1">&gt; THREAD_SERIALIZED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7899.php">Edgar Gabriel: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7275.php">Sylvain Jeaugey: "[OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Reply:</strong> <a href="7901.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
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
