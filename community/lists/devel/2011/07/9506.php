<?
$subject_val = "Re: [OMPI devel] Libevent visibility problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 14:29:46 2011" -->
<!-- isoreceived="20110712182946" -->
<!-- sent="Tue, 12 Jul 2011 18:29:16 +0000" -->
<!-- isosent="20110712182916" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Libevent visibility problem" -->
<!-- id="CA41EE56.5DD9%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DD8AB1F7-BBAD-4391-8C34-9D18EE37B79E_at_open-mpi.org" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 14:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9507.php">Eugene Loh: "[OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Previous message:</strong> <a href="9505.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>In reply to:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9510.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9510.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/11/11 4:31 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Jul 11, 2011, at 2:51 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When libevent was made its own component last fall, it appears that the
</span><br>
<span class="quotelev2">&gt;&gt; function renames and visibility  settings were lost.  This is proving
</span><br>
<span class="quotelev2">&gt;&gt; rather problematic for a project I'm trying to get running with the
</span><br>
<span class="quotelev2">&gt;&gt;trunk
</span><br>
<span class="quotelev2">&gt;&gt; which uses libev (which provides a libevent compatibility layer).  It
</span><br>
<span class="quotelev2">&gt;&gt; works fine with Open MPI 1.4 and 1.5, which rename the libevent
</span><br>
<span class="quotelev2">&gt;&gt;functions
</span><br>
<span class="quotelev2">&gt;&gt; in rename.h, but causes symbol clashes for the trunk.  This seems like a
</span><br>
<span class="quotelev2">&gt;&gt; rather glaring oversight, especially since there was a bunch of work
</span><br>
<span class="quotelev2">&gt;&gt;done
</span><br>
<span class="quotelev2">&gt;&gt; to remove the visibility flags from the libevent component.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At one point, someone was running a symbol checker to make sure things
</span><br>
<span class="quotelev2">&gt;&gt; like this didn't happen; has that been killed off?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can whomever is responsible for the new libevent please fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I guess that would mostly be me - my penalty for doing the update. Can
</span><br>
<span class="quotelev1">&gt;you tell me which symbols are clashing? We honestly thought we had that
</span><br>
<span class="quotelev1">&gt;all worked out, but I don't know of any tool for checking it other than
</span><br>
<span class="quotelev1">&gt;the basic ones.
</span><br>
<p>It actually looks like all the event symbols are public in the trunk
<br>
(1.4/1.5 are fine).  Most of the symbols will have to be public, but were
<br>
renamed (from event_add to opal_event_add, for example) in the previous
<br>
releases.  That seems to be the missing piece.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9507.php">Eugene Loh: "[OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Previous message:</strong> <a href="9505.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>In reply to:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9510.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9510.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
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
