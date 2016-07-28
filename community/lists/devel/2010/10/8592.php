<?
$subject_val = "Re: [OMPI devel] v1.5.1: one idea";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 11 09:15:59 2010" -->
<!-- isoreceived="20101011131559" -->
<!-- sent="Mon, 11 Oct 2010 09:13:49 -0400" -->
<!-- isosent="20101011131349" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5.1: one idea" -->
<!-- id="4CB30D8D.5030804_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60031B98-9884-4830-AB09-30BA90BF603C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5.1: one idea<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-11 09:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8593.php">Graham, Richard L.: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>Previous message:</strong> <a href="8591.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>In reply to:</strong> <a href="8591.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/11/2010 06:11 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 10, 2010, at 7:49 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first glance this sounds like a sane approach but didn't we start with this same approach with 1.5.0?  I know it was kind of required to do it for 1.5.0 but we did go off track with delivery.   I believe to be successful at making a deadline for 1.5.1 we need to consider the following.  Do we think the initial stablization is going to take weeks or months?
</span><br>
<span class="quotelev1">&gt; I *think* weeks.  The trunk is pretty stable right now.  But then again, that's why I'm asking here -- what do others think?  Are there half-baked features in the trunk that are not / nowhere near ready for the v1.5.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't have my half bake features in the trunk, yet :-).
<br>
<span class="quotelev2">&gt;&gt; While we stablize what will be the rules of doing CMRs to 1.5.1?  What will be the rules for doing CMRs to 1.5.1 after stablization?
</span><br>
<span class="quotelev1">&gt; I think the CMRs will be pretty much the same.  However, we do reserve the right to have the more aggressive CMRs -- e.g., something &quot;big&quot; can be &quot;ok, Terry/CMR committer, you have the v1.5 branch for 3 days.  Bring your feature over to it.&quot;  (might not be necessary if we re-sync, but we still reserve the right to do it ;-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Did I misunderstand the commitment we had for quick dot feature releases 
<br>
earlier this year?  The above sounds like we'll repeat the 1.5.0 release 
<br>
schedule and possibly end up not releasing 1.5.1 until 8 months from 
<br>
now.  Unless the trunk doesn't have any major features/changes I'd 
<br>
almost be more inclined to say the stablization of the trunk merge be 
<br>
the 1.5.1 release and plan for a 1.5.2 based on CMRs (no CMR no putback 
<br>
to 1.5.2).  However, that is really dependent on the merge happening and 
<br>
what amount of wide spread changes that end up being put back into the 
<br>
trunk that makes backporting to 1.5 branch difficult to impossible.  I 
<br>
would even be somewhat supportive of periodic trunk sync ups to 
<br>
alleviate such backport pain.
<br>
<p>--td
<br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/8/2010 5:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As we discussed on the call last week, since there is already a bit of a divergence between the trunk and the v1.5 branch, how's this for a wild idea:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      What if we re-sync the entire trunk to the v1.5 branch, stabilize that,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      and call it v1.5.1?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The assumption here is that it will be [far] easier to just re-sync the trunk to the v1.5 branch than to try to bring over stuff in a piecemeal fashion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's a *bunch* of new stuff on the trunk that is not on the v1.5 branch -- there's more than enough &quot;meat&quot; to call it a new release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Put differently: is there anything on the trunk that is *not* ready to go to the v1.5 series?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8592/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8592/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8593.php">Graham, Richard L.: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>Previous message:</strong> <a href="8591.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>In reply to:</strong> <a href="8591.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
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
