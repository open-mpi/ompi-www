<?
$subject_val = "Re: [OMPI users] request_get_status: Recheck request status [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 17:46:13 2010" -->
<!-- isoreceived="20100527214613" -->
<!-- sent="Thu, 27 May 2010 17:46:08 -0400" -->
<!-- isosent="20100527214608" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] request_get_status: Recheck request status [PATCH]" -->
<!-- id="D910A55D-B20B-41CC-9E25-E3429A985834_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1274976158.4544.2.camel_at_sjackman01.phage.bcgsc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 17:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the ping -- sorry it took so long!
<br>
<p>Committed to the SVN trunk in r23215; I filed CMR's for v1.4 and v1.5.  It's technically not a bug, so I don't know if the v1.4 RM's will allow it.
<br>
<p><p>On May 27, 2010, at 12:02 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Ping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2010-05-04 at 14:06 -0700, Shaun Jackman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; request_get_status polls request-&gt;req_complete before calling
</span><br>
<span class="quotelev2">&gt; &gt; opal_progress. Ideally, it would check req_complete, call opal_progress,
</span><br>
<span class="quotelev2">&gt; &gt; and check req_complete one final time. This patch identically mirrors
</span><br>
<span class="quotelev2">&gt; &gt; the logic of
</span><br>
<span class="quotelev2">&gt; &gt; ompi_request_default_test in ompi/request/req_test.c.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We've discussed this patch on the mailing list previously. I think we
</span><br>
<span class="quotelev2">&gt; &gt; both agreed it was a good idea, but never made it around to being
</span><br>
<span class="quotelev2">&gt; &gt; applied.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Shaun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2009-09-14  Shaun Jackman  &lt;sjackman_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       * ompi/mpi/c/request_get_status.c (MPI_Request_get_status):
</span><br>
<span class="quotelev2">&gt; &gt;       If opal_progress is called then check the status of the request
</span><br>
<span class="quotelev2">&gt; &gt;       before returning. opal_progress is called only once. This logic
</span><br>
<span class="quotelev2">&gt; &gt;       parallels MPI_Test (ompi_request_default_test).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mpi/c/request_get_status.c.orig      2008-11-04 12:56:27.000000000 -0800
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mpi/c/request_get_status.c   2009-09-24 15:30:09.995850000 -0700
</span><br>
<span class="quotelev2">&gt; &gt; @@ -41,6 +41,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;  int MPI_Request_get_status(MPI_Request request, int *flag,
</span><br>
<span class="quotelev2">&gt; &gt;                             MPI_Status *status)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; +#if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev2">&gt; &gt; +    int do_it_once = 0;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;      MEMCHECKER(
</span><br>
<span class="quotelev2">&gt; &gt;          memchecker_request(&amp;request);
</span><br>
<span class="quotelev2">&gt; &gt;      );
</span><br>
<span class="quotelev2">&gt; &gt; @@ -57,6 +61,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +#if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev2">&gt; &gt; + recheck_request_status:
</span><br>
<span class="quotelev2">&gt; &gt; +#endif
</span><br>
<span class="quotelev2">&gt; &gt;      opal_atomic_mb();
</span><br>
<span class="quotelev2">&gt; &gt;      if( (request == MPI_REQUEST_NULL) || (request-&gt;req_state == OMPI_REQUEST_INACTIVE) ) {
</span><br>
<span class="quotelev2">&gt; &gt;          *flag = true;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -78,9 +85,17 @@
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;          return MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; -    *flag = false;
</span><br>
<span class="quotelev2">&gt; &gt;  #if OMPI_ENABLE_PROGRESS_THREADS == 0
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_progress();
</span><br>
<span class="quotelev2">&gt; &gt; +    if( 0 == do_it_once ) {
</span><br>
<span class="quotelev2">&gt; &gt; +        /**
</span><br>
<span class="quotelev2">&gt; &gt; +         * If we run the opal_progress then check the status of the request before
</span><br>
<span class="quotelev2">&gt; &gt; +         * leaving. We will call the opal_progress only once per call.
</span><br>
<span class="quotelev2">&gt; &gt; +         */
</span><br>
<span class="quotelev2">&gt; &gt; +        opal_progress();
</span><br>
<span class="quotelev2">&gt; &gt; +        do_it_once++;
</span><br>
<span class="quotelev2">&gt; &gt; +        goto recheck_request_status;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt; +    *flag = false;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
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
