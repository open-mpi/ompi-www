<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 12:05:27 2007" -->
<!-- isoreceived="20070613160527" -->
<!-- sent="Wed, 13 Jun 2007 12:03:07 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20070613160307" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="Pine.WNT.4.64.0706131159010.2008_at_voyager" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B2073F59-CA6B-42F0-AB49-E709CF5AE708_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 12:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 13 Jun 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't mind having some MCA parameters that are never showed by
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; (we already have the hidden ones). Anyway, for TCP by default there
</span><br>
<span class="quotelev2">&gt;&gt; is the
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_latency and btl_tcp_bandwidth which will be used as a default
</span><br>
<span class="quotelev2">&gt;&gt; value for all NICs. For the others, a quick google search on our
</span><br>
<span class="quotelev2">&gt;&gt; mailing
</span><br>
<span class="quotelev2">&gt;&gt; list will return all information about how to set the latency and
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth by NIC. MX have a similar mechanism ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you saying that the TCP and MX BTLs have similar variable MCA
</span><br>
<span class="quotelev1">&gt; parameters?
</span><br>
<p>Yes, both TCP and MX have such kind of MCA parameters as they both 
<br>
support multi-rail configurations.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the &quot;hidden&quot; MCA parameters are a different issue; they were
</span><br>
<span class="quotelev1">&gt; created for a different purpose (users are not supposed to see/set
</span><br>
<span class="quotelev1">&gt; them).  These variable parameters would be intended to be used by the
</span><br>
<span class="quotelev1">&gt; users, but they would have no way of finding out a) that they exist,
</span><br>
<span class="quotelev1">&gt; and b) what they are.  That's why I think that the MCA parameters may
</span><br>
<span class="quotelev1">&gt; not be the right mechanism for this kind of information.
</span><br>
<p>I see 2 possible solutions:
<br>
<p>1. we update our documentation in such a way that it will clearly describe 
<br>
these variable MCA parameters for each BTL that support them.
<br>
<p>2. We create fake MCA parameters that will never be used, but they will 
<br>
show up in the ompi_info output so the user will know they exist. For TCP 
<br>
they can be btl_tcp_latency_* and btl_tcp_bandwidth_* ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1682.php">Gleb Natapov: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1680.php">Galen Shipman: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>In reply to:</strong> <a href="1679.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1683.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
