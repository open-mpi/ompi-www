<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 14:10:10 2009" -->
<!-- isoreceived="20090415181010" -->
<!-- sent="Wed, 15 Apr 2009 21:10:05 +0300" -->
<!-- isosent="20090415181005" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="b20b52800904151110m69af6653w549d00f44435560a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="80355B34-CC94-42EA-9D8E-A40B0E7996A6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 14:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0390.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 15, 2009 at 8:50 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 15, 2009, at 1:45 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  yep. correct. We can define only static attributes (which we know for sure
</span><br>
<span class="quotelev2">&gt;&gt; should present in every object of given type and leave phase specific
</span><br>
<span class="quotelev2">&gt;&gt; attributes to stay dynamic)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I would think that even in each phase, we have a bunch of fields
</span><br>
<span class="quotelev2">&gt;&gt; that we *know* we want to have, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; correct, in gds terms they call it static attributes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was more nit-picking your statement that we would only have a field
</span><br>
<span class="quotelev1">&gt; fields that would be available for every phase, and then use dynamic fields
</span><br>
<span class="quotelev1">&gt; for all phase-specific data.  While GDS *can* handle that, wouldn't it be
</span><br>
<span class="quotelev1">&gt; better to have a model for each phase (similar to your mockup) that expects
</span><br>
<span class="quotelev1">&gt; a specific set of data for each phase?  Extra data on top of that would be a
</span><br>
<span class="quotelev1">&gt; bonus, but wouldn't be necessary.  More specifically: we *know* what data
</span><br>
<span class="quotelev1">&gt; should be available in each phase, so why not tell GDS about it in the model
</span><br>
<span class="quotelev1">&gt; (rather than using dynamic fields that we know will always be there)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps we're just getting confused by language and I should wait for your
</span><br>
<span class="quotelev1">&gt; next mock-up to see what you guys do... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>completely agree, the model for every phase object should contain mostly
<br>
static fields, based on current mtt phases info.
<br>
Also, we will have flexibility to expand phase objects without changing the
<br>
model.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0390.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">Josh Hursey: "Re: [MTT devel] GSOC application"</a>
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
