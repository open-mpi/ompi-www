<?
$subject_val = "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 10:12:25 2009" -->
<!-- isoreceived="20090917141225" -->
<!-- sent="Thu, 17 Sep 2009 10:12:19 -0400" -->
<!-- isosent="20090917141219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]" -->
<!-- id="31B4CABD-061C-4633-AD34-3CBD59D712AA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AAEB1D3.6070404_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 10:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>In reply to:</strong> <a href="6833.php">Shaun Jackman: "[OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Reply:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2009, at 5:12 PM, Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Two questions. Should the loop label recheck_request_status come
</span><br>
<span class="quotelev1">&gt; before or after the call to opal_atomic_mb?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I believe that a 2nd mb is necessary.  But I think it could be put  
<br>
into the &quot;if&quot; block at the end, and leave the label where it is.  But  
<br>
see below.
<br>
<p><span class="quotelev1">&gt; Is it necessary to check
</span><br>
<span class="quotelev1">&gt; request-&gt;req_state a second time, or is it only necessary to check
</span><br>
<span class="quotelev1">&gt; request-&gt;req_complete the second time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In THREAD_MULTIPLE, I guess the state could change.  But in non- 
<br>
THREAD_MULTIPLE, it's superfluous to check a 2nd time because a  
<br>
request can't have changed into INACTIVE simply due to a call to  
<br>
opal_progress().  I notice that req_test.c checks the whole enchilada  
<br>
again (including the mb and state change).  Since we're currently not  
<br>
distinguishing between THREAD_MULTIPLE and not in these functions, I  
<br>
think we need to be conservative and check the state again.
<br>
<p>I think this means that our TEST/WAIT functions are not well-tuned for  
<br>
threading (or, at least, there are optimizations that could be made  
<br>
based on the thread level).
<br>
<p>George / Brian -- got opinions here?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6848.php">Josh Hursey: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>In reply to:</strong> <a href="6833.php">Shaun Jackman: "[OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Reply:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
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
