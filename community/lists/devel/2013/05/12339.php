<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 22:33:03 2013" -->
<!-- isoreceived="20130502023303" -->
<!-- sent="Wed, 01 May 2013 20:32:48 -0600" -->
<!-- isosent="20130502023248" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="5181D050.6050404_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ADFE53A7-B628-4E10-A4D5-713B1A10D9C5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using external libevent<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 22:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12340.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12338.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12324.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12340.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12340.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/29/2013 11:04 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2013, at 7:37 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/26/2013 08:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 26, 2013, at 7:40 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So it looks like I will need to shortly be looking at how to link against an external libevent.  Any help with that would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I said, I'll take a look at it, but can't commit to having it available any time soon. It isn't something I would suggest someone try who isn't fully versed in OMPI's code base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, I'm not looking forward to it.  I get to at least wait until the non-threaded version of libevent is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hate to see someone suffer, so I went ahead and added the external libevent connection this morning. Not trivial, but it seems to work. It is in our developer's trunk if you want to test it. As Jeff has said, we would prefer you not do this until the 1.9 series is released, and we won't be porting this change to the 1.7 series anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just put it in so we can begin the investigation, and we always appreciate input and help in exploring the impacts!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p>Great!  I'll try to take a look at next week.
<br>
<p>I noticed another message about using a threaded libevent after all on 
<br>
the devel list.  What is the status of that?  Do we still need to 
<br>
produce a non-threaded libevent in Fedora?
<br>
<p>Thanks again.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12340.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12338.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28435 - in trunk: . conf db db/revprops db/revprops/0 db/revs db/revs/0 db/transactions db/txn-protorevs hooks locks"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12324.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12340.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12340.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
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
