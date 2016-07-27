<?
$subject_val = "Re: [MTT devel] GitHub Issue Cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 21:28:32 2016" -->
<!-- isoreceived="20160519012832" -->
<!-- sent="Wed, 18 May 2016 20:28:22 -0500" -->
<!-- isosent="20160519012822" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GitHub Issue Cleanup" -->
<!-- id="CAANzjEnbDV-26vB=qYgusMbKSwx+Py+L-GqRVR2JeqURu6Y3tg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAANzjE=6mG5hWToRpWLFM-FDoYakh1mAU7Lu_z7NQAHmcWdUPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GitHub Issue Cleanup<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 21:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/06/0662.php">Josh Hursey: "[MTT devel] Ticket to finish the python support for the IU Database submissions"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Jeff Squyres (jsquyres): "[MTT devel] MTT ompi-tests password"</a>
<li><strong>In reply to:</strong> <a href="0656.php">Josh Hursey: "[MTT devel] GitHub Issue Cleanup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just made these changes to the MTT repo.
<br>
<p>There does not seem to be a way to change the default search pattern for
<br>
the &quot;Issues&quot; tab - so that we can hide the Archive items. So if you want to
<br>
filter them out just add the following to your search:
<br>
&nbsp;-label:Archive
<br>
<p><p>In our meeting a couple weeks ago we identified some development items for
<br>
the short term. Can folks take point on filing those tickets so we can
<br>
track their progress?
<br>
<p>I'll add the left-to-do items for the Server side.
<br>
<p>Label all those tickets that you need/want soon as v4.0.
<br>
<p><p><p>On Fri, May 13, 2016 at 1:08 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We are seeing more activity with MTT development, and there is a desire to
</span><br>
<span class="quotelev1">&gt; push to a formal release at some point in the not-to-distant future. As
</span><br>
<span class="quotelev1">&gt; such, I think it is time to clean up/out the issues on GitHub. Quite a
</span><br>
<span class="quotelev1">&gt; number of those issues are feature ideas that we came up with that were
</span><br>
<span class="quotelev1">&gt; never investigated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I propose that we do the following. All of which is open for
</span><br>
<span class="quotelev1">&gt; discussion, and I can take point on making the changes once we settle on
</span><br>
<span class="quotelev1">&gt; what we want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Milestones*:
</span><br>
<span class="quotelev1">&gt;  1) Mark all existing milestones as completed.
</span><br>
<span class="quotelev1">&gt;  2) Create a v4.0 milestone to track development to the 'first' release
</span><br>
<span class="quotelev1">&gt; (why not v1.0 - see [A] below)
</span><br>
<span class="quotelev1">&gt;  3) Any issue filed against &quot;Future&quot; will be filed instead against
</span><br>
<span class="quotelev1">&gt; &quot;ArchivedFuture&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Labels*:
</span><br>
<span class="quotelev1">&gt;  1) Create a &quot;work in progress&quot; label - for PRs in progress
</span><br>
<span class="quotelev1">&gt;  2) Create a label for each of the major parts of MTT
</span><br>
<span class="quotelev1">&gt;     - &quot;Perl Client&quot;
</span><br>
<span class="quotelev1">&gt;     - &quot;Python Client&quot;
</span><br>
<span class="quotelev1">&gt;     - &quot;Reporter&quot;
</span><br>
<span class="quotelev1">&gt;     - &quot;Database&quot;
</span><br>
<span class="quotelev1">&gt;     - &quot;Server&quot;
</span><br>
<span class="quotelev1">&gt;  3) Create a &quot;Wishlist&quot; label where we can label wild enhancement ideas
</span><br>
<span class="quotelev1">&gt; that we would like, but know we have no time to pursue in the near future.
</span><br>
<span class="quotelev1">&gt; That way it is easy to get a list of neat things to do for people wanting
</span><br>
<span class="quotelev1">&gt; to jump in.
</span><br>
<span class="quotelev1">&gt;  4) Create an &quot;Archive&quot; label
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Issues:*
</span><br>
<span class="quotelev1">&gt;  1) All existing issues get labeled with &quot;Archive&quot; in addition to their
</span><br>
<span class="quotelev1">&gt; existing labels
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do folks think? Did I miss anything?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [A] There was informal v1.0 / v2.0 / v3.0 waypoints in the history. I
</span><br>
<span class="quotelev1">&gt; didn't want to suggest removing those incase that history is important to
</span><br>
<span class="quotelev1">&gt; us in the future. However, I'm open to discussing removing them too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/06/0662.php">Josh Hursey: "[MTT devel] Ticket to finish the python support for the IU Database submissions"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Jeff Squyres (jsquyres): "[MTT devel] MTT ompi-tests password"</a>
<li><strong>In reply to:</strong> <a href="0656.php">Josh Hursey: "[MTT devel] GitHub Issue Cleanup"</a>
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
