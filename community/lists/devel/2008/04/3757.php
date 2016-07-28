<?
$subject_val = "Re: [OMPI devel] Loadbalancing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 10:04:35 2008" -->
<!-- isoreceived="20080425140435" -->
<!-- sent="Fri, 25 Apr 2008 10:04:10 -0400" -->
<!-- isosent="20080425140410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Loadbalancing" -->
<!-- id="DB1158A0-84BD-4A7A-8A4D-A615D0B000B6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C434AD3D.D342%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 10:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3758.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18252"</a>
<li><strong>Previous message:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3742.php">Ralph H Castain: "[OMPI devel] Loadbalancing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3772.php">Lenny Verkhovsky: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Reply:</strong> <a href="3772.php">Lenny Verkhovsky: "Re: [OMPI devel] Loadbalancing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl!
<br>
<p>I added ticket 1277 so that we are sure to document this for v1.3.
<br>
<p><p>On Apr 23, 2008, at 11:09 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; I added a new &quot;loadbalance&quot; feature to OMPI today in r18252.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brief summary: adding --loadbalance to the mpirun cmd line will  
</span><br>
<span class="quotelev1">&gt; cause the
</span><br>
<span class="quotelev1">&gt; round-robin mapper to balance your specified #procs across the  
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; Several users had noted that mapping byslot always caused us to
</span><br>
<span class="quotelev1">&gt; preferentially load the first nodes in an allocation, potentially  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; other nodes unused. If they mapped bynode, of course, this wouldn't  
</span><br>
<span class="quotelev1">&gt; happen -
</span><br>
<span class="quotelev1">&gt; but then they were forced to a specific rank-to-node relationship.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What they wanted was to have the ranks numbered byslot, but to have  
</span><br>
<span class="quotelev1">&gt; the ppn
</span><br>
<span class="quotelev1">&gt; balanced across the entire allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is now supported via the --loadbalance cmd line option. Here is  
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt; example of its affect (again, remember that loadbalance only impacts  
</span><br>
<span class="quotelev1">&gt; mapping
</span><br>
<span class="quotelev1">&gt; byslot):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            no-lb              lb         bynode
</span><br>
<span class="quotelev1">&gt; node0:      0,1,2,3            0,1,2       0,3,6
</span><br>
<span class="quotelev1">&gt; node1:      4,5,6              3,4         1,4
</span><br>
<span class="quotelev1">&gt; node2:                         5,6         2,5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, the affect of --loadbalance is to balance the ppn  
</span><br>
<span class="quotelev1">&gt; across all
</span><br>
<span class="quotelev1">&gt; the available nodes while retaining byslot rank associations. In  
</span><br>
<span class="quotelev1">&gt; this case,
</span><br>
<span class="quotelev1">&gt; instead of leaving one node unused, we take advantage of all available
</span><br>
<span class="quotelev1">&gt; resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this proves helpful
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3758.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18252"</a>
<li><strong>Previous message:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3742.php">Ralph H Castain: "[OMPI devel] Loadbalancing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3772.php">Lenny Verkhovsky: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Reply:</strong> <a href="3772.php">Lenny Verkhovsky: "Re: [OMPI devel] Loadbalancing"</a>
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
