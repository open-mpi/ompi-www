<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 16:01:09 2012" -->
<!-- isoreceived="20121031200109" -->
<!-- sent="Wed, 31 Oct 2012 13:01:04 -0700" -->
<!-- isosent="20121031200104" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CAAvDA17NP3x_=2b93PVnE6OS0LkX+P71_5qV_SY5aysfu1-wbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="764FF7B9-A266-4E95-8845-1E8BE990599D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 16:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11717.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11713.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 31, 2012 at 12:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2012, at 12:36 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think I missed the point about the origin of the concern - we just
</span><br>
<span class="quotelev1">&gt; have different view points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff indicated that he previously thought the &quot;odd&quot; practice shown in the
</span><br>
<span class="quotelev1">&gt; example was uncommon until he learned is was common in codes at Sandia.
</span><br>
<span class="quotelev1">&gt;  Perhaps you and I have interpreted the &quot;impact&quot; differently:
</span><br>
<span class="quotelev1">&gt; + From your responses I gather you are concerned only (or primarily) w/
</span><br>
<span class="quotelev1">&gt; folks at Sandia who work on codes that have the &quot;odd&quot; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sigh...no, that isn't accurate. I was only trying to say that the concern
</span><br>
<span class="quotelev1">&gt; was raised from that corner for those reasons. And I don't think they would
</span><br>
<span class="quotelev1">&gt; consider a code that meets standards as being &quot;odd&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry if I mischaracterized you view - I chose the phrase &quot;I gather&quot; with
<br>
the intent of expressing MY understanding/interpretation of your postings.
<br>
&nbsp;I guess I MISunderstood/MISinterpreted.
<br>
<p>I chose &quot;odd&quot; for lack of a better term to describe code using a char* for
<br>
an array of ints.
<br>
I fully agree that the code is standards-compliant - otherwise I'd not care
<br>
one iota about warnings or no warnings.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + On the other hand, I took the Sandia codes as an &quot;existence proof&quot;
</span><br>
<span class="quotelev1">&gt; showing that &quot;really smart people&quot; can still write questionable code at
</span><br>
<span class="quotelev1">&gt; times.  So, I think there could be a non-trivial number of codes developed
</span><br>
<span class="quotelev1">&gt; outside of Sandia that would start generating warnings (possibly MANY of
</span><br>
<span class="quotelev1">&gt; them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could be - but again, not many are likely to be using clang, and so they
</span><br>
<span class="quotelev1">&gt; won't be affected by this change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will now crawl back under my rock - I honestly couldn't care less about
</span><br>
<span class="quotelev1">&gt; this, but was trying to explain the concern voiced on the telecon as that
</span><br>
<span class="quotelev1">&gt; person is way too busy for this debate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip - find the full thread in the archives]
</span><br>
<p><span class="quotelev1">&gt; I am crawling back under my rock too, due to a similar lack of true
</span><br>
concern over the outcome.
<br>
<p>-Paul [who's only ever used MPI_BYTE]
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11719.php">Dmitri Gribenko: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11717.php">Ralph Castain: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11713.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
