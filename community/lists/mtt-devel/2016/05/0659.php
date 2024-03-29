<?
$subject_val = "Re: [MTT devel] GitHub Issue Cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 08:45:51 2016" -->
<!-- isoreceived="20160516124551" -->
<!-- sent="Mon, 16 May 2016 07:45:50 -0500" -->
<!-- isosent="20160516124550" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GitHub Issue Cleanup" -->
<!-- id="CAANzjEnd_yKU1b4QQ0YdP6Nau-nxauO64Qbm2Y4iCyX3Qdzp5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EA5E0406-F5C2-4EDC-A422-11CA3C6EEE5A_at_cisco.com" -->
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
<strong>Date:</strong> 2016-05-16 08:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0660.php">Jeff Squyres (jsquyres): "[MTT devel] MTT ompi-tests password"</a>
<li><strong>Previous message:</strong> <a href="0658.php">Jeff Squyres (jsquyres): "Re: [MTT devel] GitHub Issue Cleanup"</a>
<li><strong>In reply to:</strong> <a href="0658.php">Jeff Squyres (jsquyres): "Re: [MTT devel] GitHub Issue Cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0661.php">Josh Hursey: "Re: [MTT devel] GitHub Issue Cleanup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was planning on doing this cleanup this evening. Do folks have any
<br>
additional comments?
<br>
<p><p>On Fri, May 13, 2016 at 5:40 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 13, 2016, at 2:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +1 on all these
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for taking point, Josh!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 13, 2016, at 11:08 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We are seeing more activity with MTT development, and there is a desire
</span><br>
<span class="quotelev1">&gt; to push to a formal release at some point in the not-to-distant future. As
</span><br>
<span class="quotelev1">&gt; such, I think it is time to clean up/out the issues on GitHub. Quite a
</span><br>
<span class="quotelev1">&gt; number of those issues are feature ideas that we came up with that were
</span><br>
<span class="quotelev1">&gt; never investigated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I propose that we do the following. All of which is open for
</span><br>
<span class="quotelev1">&gt; discussion, and I can take point on making the changes once we settle on
</span><br>
<span class="quotelev1">&gt; what we want.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Milestones:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1) Mark all existing milestones as completed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  2) Create a v4.0 milestone to track development to the 'first' release
</span><br>
<span class="quotelev1">&gt; (why not v1.0 - see [A] below)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  3) Any issue filed against &quot;Future&quot; will be filed instead against
</span><br>
<span class="quotelev1">&gt; &quot;ArchivedFuture&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Labels:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1) Create a &quot;work in progress&quot; label - for PRs in progress
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  2) Create a label for each of the major parts of MTT
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     - &quot;Perl Client&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     - &quot;Python Client&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     - &quot;Reporter&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     - &quot;Database&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     - &quot;Server&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  3) Create a &quot;Wishlist&quot; label where we can label wild enhancement ideas
</span><br>
<span class="quotelev1">&gt; that we would like, but know we have no time to pursue in the near future.
</span><br>
<span class="quotelev1">&gt; That way it is easy to get a list of neat things to do for people wanting
</span><br>
<span class="quotelev1">&gt; to jump in.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  4) Create an &quot;Archive&quot; label
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Issues:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1) All existing issues get labeled with &quot;Archive&quot; in addition to their
</span><br>
<span class="quotelev1">&gt; existing labels
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What do folks think? Did I miss anything?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [A] There was informal v1.0 / v2.0 / v3.0 waypoints in the history. I
</span><br>
<span class="quotelev1">&gt; didn't want to suggest removing those incase that history is important to
</span><br>
<span class="quotelev1">&gt; us in the future. However, I'm open to discussing removing them too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0657.php">http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0657.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0657.php">http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0657.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0658.php">http://www.open-mpi.org/community/lists/mtt-devel/2016/05/0658.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0660.php">Jeff Squyres (jsquyres): "[MTT devel] MTT ompi-tests password"</a>
<li><strong>Previous message:</strong> <a href="0658.php">Jeff Squyres (jsquyres): "Re: [MTT devel] GitHub Issue Cleanup"</a>
<li><strong>In reply to:</strong> <a href="0658.php">Jeff Squyres (jsquyres): "Re: [MTT devel] GitHub Issue Cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0661.php">Josh Hursey: "Re: [MTT devel] GitHub Issue Cleanup"</a>
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
