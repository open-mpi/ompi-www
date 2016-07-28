<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 13:04:59 2013" -->
<!-- isoreceived="20130429170459" -->
<!-- sent="Mon, 29 Apr 2013 10:04:51 -0700" -->
<!-- isosent="20130429170451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="ADFE53A7-B628-4E10-A4D5-713B1A10D9C5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="517C8B5A.40909_at_cora.nwra.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 13:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="12319.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2013, at 7:37 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 04/26/2013 08:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 26, 2013, at 7:40 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/25/2013 04:48 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Orion --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would just caution against using Open MPI with a thread-enabled libevent.  In most cases, the performance impact wouldn't matter, but the whole point of MPI is to be high performance.  The current 1.7 series does *not* use a thread-enabled libevent because it detracts from performance.  Hence, using a thread-enabled libevent detracts from Open MPI's main purpose.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If Open MPI is suddenly bundled with a thread-enabled libevent, *performance will go down* and users will be unhappy.  We have learned painfully over the years that users expect good performance out of the box -- if they have get &quot;bad&quot; performance out of the box and have to do something special to enable &quot;good&quot; performance, they'll be annoyed and blame Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I would request that you do *not* link Open MPI against a thread-enabled libevent until we are able integrate such functionality properly, and take measures to mitigate the performance implications (which likely won't be until at least the 1.9 series).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the Fedora Packaging committee has taken that part to heart, but not the bundling:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Bundling exception for libevent in openmpi -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="https://fedorahosted.org/fpc/ticket/273">https://fedorahosted.org/fpc/ticket/273</a>  (spot, 16:16:52)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * ACTION: FPC is pretty universally against this bundling, spot will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    try to make a libevent-nothread.so and update libevent.  (spot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    16:26:38)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just for clarification: who or what is &quot;spot&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tom &quot;spot&quot; Callaway - one the packaging committee members
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it looks like I will need to shortly be looking at how to link against an external libevent.  Any help with that would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I said, I'll take a look at it, but can't commit to having it available any time soon. It isn't something I would suggest someone try who isn't fully versed in OMPI's code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I'm not looking forward to it.  I get to at least wait until the non-threaded version of libevent is available.
</span><br>
<p>I hate to see someone suffer, so I went ahead and added the external libevent connection this morning. Not trivial, but it seems to work. It is in our developer's trunk if you want to test it. As Jeff has said, we would prefer you not do this until the 1.9 series is released, and we won't be porting this change to the 1.7 series anyway.
<br>
<p>Just put it in so we can begin the investigation, and we always appreciate input and help in exploring the impacts!
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>In reply to:</strong> <a href="12319.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
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
