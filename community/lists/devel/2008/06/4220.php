<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 09:00:15 2008" -->
<!-- isoreceived="20080624130015" -->
<!-- sent="Tue, 24 Jun 2008 15:00:05 +0200" -->
<!-- isosent="20080624130005" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="200806241500.06092.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EEDFF66D-4A14-4900-A105-363E1E910DAB_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ob1 and req-&gt;req_state<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 09:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4221.php">George Bosilca: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4219.php">Jeff Squyres: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4216.php">Shipman, Galen M.: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Montag, 23. Juni 2008, Shipman, Galen M. wrote:
<br>
<span class="quotelev1">&gt; Oh, I see, you are confusing the req_state on the OMPI request with
</span><br>
<span class="quotelev1">&gt; the req_state on the PML request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ompi request state is for persistent requests, the PML request
</span><br>
<span class="quotelev1">&gt; state is not and does not use that enum.
</span><br>
So, the req_state in ompi_request is only used for persistent requests?
<br>
<p>Could You please look into #1349?
<br>
Question is, whether request-&gt;req_status always contains the correct status 
<br>
(for inactive persistent request)
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4221.php">George Bosilca: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4219.php">Jeff Squyres: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4216.php">Shipman, Galen M.: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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
