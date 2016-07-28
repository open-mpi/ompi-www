<?
$subject_val = "Re: [MTT users] Python choice";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 09:56:20 2016" -->
<!-- isoreceived="20160512135620" -->
<!-- sent="Thu, 12 May 2016 06:56:17 -0700" -->
<!-- isosent="20160512135617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] Python choice" -->
<!-- id="9578B201-89B7-4970-9889-0BC54181A0BC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj64iOJaeqxgP8dh2N2pGDW3k54p3HBqW6MiUKkkOiEJPQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-12 09:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0850.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Previous message:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>In reply to:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0850.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Reply:</strong> <a href="0850.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like the right approach to me: write it as Python 3, but with the Python 2 backward compatibility support add-ons.
<br>
<p>Howard: let me know if this is something your intern could tackle for us.
<br>
<p><p><span class="quotelev1">&gt; On May 12, 2016, at 5:06 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been asking around.  Its been suggested the route described in this URL can be taken,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://python-future.org/imports.html">http://python-future.org/imports.html</a> &lt;<a href="http://python-future.org/imports.html">http://python-future.org/imports.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-09 10:47 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Good question - I'm not sure we can. What happens right now is you get syntax errors during the compile. I'll have to play and see if we can generate an error message before we hit that point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 9, 2016 at 9:38 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is it possible to give a friendly error message at run time if you accidentally run with Python 3.x?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 9, 2016, at 12:37 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As we look at the Python client, there is an issue with the supported Python version. There was a significant break in the user-level API between Python 2.x and Python 3. Some of the issues are described here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://docs.python.org/2/glossary.html#term-2to3">https://docs.python.org/2/glossary.html#term-2to3</a> &lt;<a href="https://docs.python.org/2/glossary.html#term-2to3">https://docs.python.org/2/glossary.html#term-2to3</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Noah and I have chatted about this, and we feel it may be best to just lock-in on Python 2.x until an overwhelming reason arises for us to transition to Python 3. At that time, we would have to do a backward-break to update.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The virtualenv content file (pyenv.txt) already reflects this requirement, so folks who use virtual environments are set.
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
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden] &lt;mailto:mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0846.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0846.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0846.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0846.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden] &lt;mailto:mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden] &lt;mailto:mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0847.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/05/0848.php">http://www.open-mpi.org/community/lists/mtt-users/2016/05/0848.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0850.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Previous message:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>In reply to:</strong> <a href="0848.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0850.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
<li><strong>Reply:</strong> <a href="0850.php">Howard Pritchard: "Re: [MTT users] Python choice"</a>
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
