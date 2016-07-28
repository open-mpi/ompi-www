<?
$subject_val = "Re: [OMPI users] request_get_status: Recheck request status [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 12:04:15 2010" -->
<!-- isoreceived="20100527160415" -->
<!-- sent="Thu, 27 May 2010 09:02:38 -0700" -->
<!-- isosent="20100527160238" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] request_get_status: Recheck request status [PATCH]" -->
<!-- id="1274976158.4544.2.camel_at_sjackman01.phage.bcgsc.ca" -->
<!-- inreplyto="1273007181.4590.27.camel_at_sjackman01.phage.bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] request_get_status: Recheck request status [PATCH]<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 12:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="12879.php">Shaun Jackman: "[OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Reply:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ping.
<br>
<p>On Tue, 2010-05-04 at 14:06 -0700, Shaun Jackman wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; request_get_status polls request-&gt;req_complete before calling
</span><br>
<span class="quotelev1">&gt; opal_progress. Ideally, it would check req_complete, call opal_progress,
</span><br>
<span class="quotelev1">&gt; and check req_complete one final time. This patch identically mirrors
</span><br>
<span class="quotelev1">&gt; the logic of
</span><br>
<span class="quotelev1">&gt; ompi_request_default_test in ompi/request/req_test.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've discussed this patch on the mailing list previously. I think we
</span><br>
<span class="quotelev1">&gt; both agreed it was a good idea, but never made it around to being
</span><br>
<span class="quotelev1">&gt; applied.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2009-09-14  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	* ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev1">&gt; 	If opal_progress is called then check the status of the request
</span><br>
<span class="quotelev1">&gt; 	before returning. opal_progress is called only once. This logic
</span><br>
<span class="quotelev1">&gt; 	parallels MPI_Test (ompi_request_default_test).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- ompi/mpi/c/request_get_status.c.orig	2008-11-04 12:56:27.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++ ompi/mpi/c/request_get_status.c	2009-09-24 15:30:09.995850000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -41,6 +41,10 @@
</span><br>
<span class="quotelev1">&gt;  int MPI_Request_get_status(MPI_Request request, int *flag,
</span><br>
<span class="quotelev1">&gt;                             MPI_Status *status) 
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +#if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev1">&gt; +    int do_it_once = 0;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;          memchecker_request(&amp;request);
</span><br>
<span class="quotelev1">&gt;      );
</span><br>
<span class="quotelev1">&gt; @@ -57,6 +61,9 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev1">&gt; + recheck_request_status:
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;      opal_atomic_mb();
</span><br>
<span class="quotelev1">&gt;      if( (request == MPI_REQUEST_NULL) || (request-&gt;req_state == OMPI_REQUEST_INACTIVE) ) {
</span><br>
<span class="quotelev1">&gt;          *flag = true;
</span><br>
<span class="quotelev1">&gt; @@ -78,9 +85,17 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    *flag = false;
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev1">&gt; -    opal_progress();
</span><br>
<span class="quotelev1">&gt; +    if( 0 == do_it_once ) {
</span><br>
<span class="quotelev1">&gt; +        /**
</span><br>
<span class="quotelev1">&gt; +         * If we run the opal_progress then check the status of the request before
</span><br>
<span class="quotelev1">&gt; +         * leaving. We will call the opal_progress only once per call.
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        opal_progress();
</span><br>
<span class="quotelev1">&gt; +        do_it_once++;
</span><br>
<span class="quotelev1">&gt; +        goto recheck_request_status;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; +    *flag = false;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="12879.php">Shaun Jackman: "[OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Reply:</strong> <a href="13172.php">Jeff Squyres: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
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
