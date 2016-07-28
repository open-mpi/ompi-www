<?
$subject_val = "Re: [OMPI devel] Libevent visibility problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 18:21:47 2011" -->
<!-- isoreceived="20110712222147" -->
<!-- sent="Tue, 12 Jul 2011 16:21:39 -0600" -->
<!-- isosent="20110712222139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Libevent visibility problem" -->
<!-- id="3C57FDB8-EB41-4725-93F3-9D32D1299273_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA41EE56.5DD9%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Libevent visibility problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 18:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>In reply to:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2011, at 12:29 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; On 7/11/11 4:31 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2011, at 2:51 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When libevent was made its own component last fall, it appears that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function renames and visibility  settings were lost.  This is proving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rather problematic for a project I'm trying to get running with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which uses libev (which provides a libevent compatibility layer).  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works fine with Open MPI 1.4 and 1.5, which rename the libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in rename.h, but causes symbol clashes for the trunk.  This seems like a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rather glaring oversight, especially since there was a bunch of work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to remove the visibility flags from the libevent component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At one point, someone was running a symbol checker to make sure things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like this didn't happen; has that been killed off?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can whomever is responsible for the new libevent please fix this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess that would mostly be me - my penalty for doing the update. Can
</span><br>
<span class="quotelev2">&gt;&gt; you tell me which symbols are clashing? We honestly thought we had that
</span><br>
<span class="quotelev2">&gt;&gt; all worked out, but I don't know of any tool for checking it other than
</span><br>
<span class="quotelev2">&gt;&gt; the basic ones.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It actually looks like all the event symbols are public in the trunk
</span><br>
<span class="quotelev1">&gt; (1.4/1.5 are fine).  Most of the symbols will have to be public, but were
</span><br>
<span class="quotelev1">&gt; renamed (from event_add to opal_event_add, for example) in the previous
</span><br>
<span class="quotelev1">&gt; releases.  That seems to be the missing piece.
</span><br>
<p>I see the problem - I'll try to fix it shortly. Might take me a few days as I'm in the middle of some other stuff.
<br>
<p>Sorry about that - we thought we had it, but missed. :-(
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Previous message:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>In reply to:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9511.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
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
