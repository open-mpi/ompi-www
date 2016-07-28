<?
$subject_val = "Re: [OMPI devel] Loadbalancing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 03:42:11 2008" -->
<!-- isoreceived="20080428074211" -->
<!-- sent="Mon, 28 Apr 2008 10:42:03 +0300" -->
<!-- isosent="20080428074203" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loadbalancing" -->
<!-- id="453d39990804280042t67e1fbds505c40a873baf6c0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DB1158A0-84BD-4A7A-8A4D-A615D0B000B6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Loadbalancing<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 03:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3773.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Previous message:</strong> <a href="3771.php">George Bosilca: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>In reply to:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They can also use RankMapping policy for a precise mapping .
<br>
<p>On 4/25/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kewl!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added ticket 1277 so that we are sure to document this for v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2008, at 11:09 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I added a new &quot;loadbalance&quot; feature to OMPI today in r18252.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brief summary: adding --loadbalance to the mpirun cmd line will
</span><br>
<span class="quotelev2">&gt; &gt; cause the
</span><br>
<span class="quotelev2">&gt; &gt; round-robin mapper to balance your specified #procs across the
</span><br>
<span class="quotelev2">&gt; &gt; available
</span><br>
<span class="quotelev2">&gt; &gt; nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; More detail:
</span><br>
<span class="quotelev2">&gt; &gt; Several users had noted that mapping byslot always caused us to
</span><br>
<span class="quotelev2">&gt; &gt; preferentially load the first nodes in an allocation, potentially
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; other nodes unused. If they mapped bynode, of course, this wouldn't
</span><br>
<span class="quotelev2">&gt; &gt; happen -
</span><br>
<span class="quotelev2">&gt; &gt; but then they were forced to a specific rank-to-node relationship.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What they wanted was to have the ranks numbered byslot, but to have
</span><br>
<span class="quotelev2">&gt; &gt; the ppn
</span><br>
<span class="quotelev2">&gt; &gt; balanced across the entire allocation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is now supported via the --loadbalance cmd line option. Here is
</span><br>
<span class="quotelev2">&gt; &gt; an
</span><br>
<span class="quotelev2">&gt; &gt; example of its affect (again, remember that loadbalance only impacts
</span><br>
<span class="quotelev2">&gt; &gt; mapping
</span><br>
<span class="quotelev2">&gt; &gt; byslot):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;            no-lb              lb         bynode
</span><br>
<span class="quotelev2">&gt; &gt; node0:      0,1,2,3            0,1,2       0,3,6
</span><br>
<span class="quotelev2">&gt; &gt; node1:      4,5,6              3,4         1,4
</span><br>
<span class="quotelev2">&gt; &gt; node2:                         5,6         2,5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you can see, the affect of --loadbalance is to balance the ppn
</span><br>
<span class="quotelev2">&gt; &gt; across all
</span><br>
<span class="quotelev2">&gt; &gt; the available nodes while retaining byslot rank associations. In
</span><br>
<span class="quotelev2">&gt; &gt; this case,
</span><br>
<span class="quotelev2">&gt; &gt; instead of leaving one node unused, we take advantage of all available
</span><br>
<span class="quotelev2">&gt; &gt; resources.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this proves helpful
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3773.php">Josh Hursey: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Previous message:</strong> <a href="3771.php">George Bosilca: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>In reply to:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
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
