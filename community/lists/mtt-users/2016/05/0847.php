<?
$subject_val = "Re: [MTT users] Python choice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 12:47:33 2016" -->
<!-- isoreceived="20160509164733" -->
<!-- sent="Mon, 9 May 2016 09:47:22 -0700" -->
<!-- isosent="20160509164722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] Python choice" -->
<!-- id="CAMD57ocoy1+Dk7N9pufO+rpp0obBmta3whjMxU-w3oZzyt2njw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9C078E6C-ADA8-4DD8-96C0-38A9BE9716C9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Python choice<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 12:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<li><strong>In reply to:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Reply:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good question - I'm not sure we can. What happens right now is you get
<br>
syntax errors during the compile. I'll have to play and see if we can
<br>
generate an error message before we hit that point.
<br>
<p>On Mon, May 9, 2016 at 9:38 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible to give a friendly error message at run time if you
</span><br>
<span class="quotelev1">&gt; accidentally run with Python 3.x?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 9, 2016, at 12:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As we look at the Python client, there is an issue with the supported
</span><br>
<span class="quotelev1">&gt; Python version. There was a significant break in the user-level API between
</span><br>
<span class="quotelev1">&gt; Python 2.x and Python 3. Some of the issues are described here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://docs.python.org/2/glossary.html#term-2to3">https://docs.python.org/2/glossary.html#term-2to3</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Noah and I have chatted about this, and we feel it may be best to just
</span><br>
<span class="quotelev1">&gt; lock-in on Python 2.x until an overwhelming reason arises for us to
</span><br>
<span class="quotelev1">&gt; transition to Python 3. At that time, we would have to do a backward-break
</span><br>
<span class="quotelev1">&gt; to update.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The virtualenv content file (pyenv.txt) already reflects this
</span><br>
<span class="quotelev1">&gt; requirement, so folks who use virtual environments are set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Make sense?
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0846.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0846.php</a>
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
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<li><strong>In reply to:</strong> <a href="0846.php">Jeff Squyres (jsquyres): "Re: [MTT users] Python choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Reply:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
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
