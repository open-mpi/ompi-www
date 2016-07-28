<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 26 17:31:47 2007" -->
<!-- isoreceived="20070226223147" -->
<!-- sent="Mon, 26 Feb 2007 15:31:41 -0700" -->
<!-- isosent="20070226223141" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] comment on wiki/PrintfCodes" -->
<!-- id="38FCCAFB-38D2-49F7-A997-491002C9CA48_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45E348F9.9020505_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-26 17:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1321.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>Previous message:</strong> <a href="1319.php">Bert Wesarg: "[OMPI devel] comment on wiki/PrintfCodes"</a>
<li><strong>In reply to:</strong> <a href="1319.php">Bert Wesarg: "[OMPI devel] comment on wiki/PrintfCodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2007, at 1:54 PM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; I can only speak for a 3 year old linux system but I read evenly  
</span><br>
<span class="quotelev1">&gt; the wiki
</span><br>
<span class="quotelev1">&gt; page <a href="https://svn.open-mpi.org/trac/ompi/wiki/PrintfCodes">https://svn.open-mpi.org/trac/ompi/wiki/PrintfCodes</a> and I  
</span><br>
<span class="quotelev1">&gt; wonder if
</span><br>
<span class="quotelev1">&gt; someone tried this code. On my system the PRId32 is defined as &quot;d&quot; for
</span><br>
<span class="quotelev1">&gt; example. so to use this you need to write something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;foo: %&quot; PRIu32 &quot;, bar: %ld\n&quot;, foo, bar);
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; note this extra '%'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on the other hand printf have an extra length specifier for size_t,  
</span><br>
<span class="quotelev1">&gt; its
</span><br>
<span class="quotelev1">&gt; 'z', so a minimal size_t printf conversion is &quot;%zu&quot;.
</span><br>
<p>Thanks, I've fixed the PRI usage case.  Unfortunately, %zu isn't  
<br>
recognized by some versions of printf, so we can't use it in Open MPI.
<br>
<p><span class="quotelev1">&gt; BTW: are there any plans to provide mpi datatypes for these  
</span><br>
<span class="quotelev1">&gt; stdint.h types
</span><br>
<span class="quotelev1">&gt; like {,u}int{8,16,32,64,max,ptr}_t?
</span><br>
<p>Not at this time.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1321.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>Previous message:</strong> <a href="1319.php">Bert Wesarg: "[OMPI devel] comment on wiki/PrintfCodes"</a>
<li><strong>In reply to:</strong> <a href="1319.php">Bert Wesarg: "[OMPI devel] comment on wiki/PrintfCodes"</a>
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
