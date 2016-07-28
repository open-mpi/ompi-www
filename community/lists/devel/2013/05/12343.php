<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 08:52:20 2013" -->
<!-- isoreceived="20130502125220" -->
<!-- sent="Thu, 2 May 2013 12:52:15 +0000" -->
<!-- isosent="20130502125215" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1D453D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5181D050.6050404_at_cora.nwra.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 08:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Previous message:</strong> <a href="12342.php">Ralph Castain: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>In reply to:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12537.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12537.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2013, at 10:32 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Great!  I'll try to take a look at next week.
</span><br>
<p>Hold off on this -- Ralph and I looked at this a bit closer, and the work is not quite complete yet (read: it doesn't work).
<br>
<p><span class="quotelev1">&gt; I noticed another message about using a threaded libevent after all on the devel list.  What is the status of that?  Do we still need to produce a non-threaded libevent in Fedora?
</span><br>
<p>Yes.  We can look at porting this external libevent support to the v1.7 series (where we *don't* have threading enabled), but I honestly do not know how difficult that will be -- it's actually a fairly complex implementation on the trunk.  As such, I can't promise that it will actually make it to the v1.7 series (it has already taken 10+ developer hours, with more to go -- and I don't know how much more on top of that will be required for a v1.7 port).
<br>
<p>That being said, I realize how allergic distros are to having duplicate libraries.  But please very, very strongly consider that Open MPI has wholly embedded libevent FOR YEARS, and a) no one complained, b) no one cared, and c) no harm was done.  The libevent copy is *wholly contained inside libopen-pal.so*, so it's not like anyone else can link against our libevent, anyway.  In short: it's not externally visible.
<br>
<p>Yes, we made the fact that we are wholly embedding libevent more obvious in the v1.7 series, but it does not change history.
<br>
<p>Given that we definitely plan to make the external-libevent functionality available in the v1.9 series, it may be a LOT simpler to just allow Open MPI v1.7 to embed libevent.  And then v1.9 will eventually fix the situation the way they want.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Previous message:</strong> <a href="12342.php">Ralph Castain: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>In reply to:</strong> <a href="12339.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12537.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12537.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
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
