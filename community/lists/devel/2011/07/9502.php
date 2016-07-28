<?
$subject_val = "Re: [OMPI devel] Libevent visibility problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 18:32:03 2011" -->
<!-- isoreceived="20110711223203" -->
<!-- sent="Mon, 11 Jul 2011 16:31:52 -0600" -->
<!-- isosent="20110711223152" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Libevent visibility problem" -->
<!-- id="DD8AB1F7-BBAD-4391-8C34-9D18EE37B79E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA40BE57.5D77%bwbarre_at_sandia.gov" -->
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
<strong>Date:</strong> 2011-07-11 18:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9503.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>Previous message:</strong> <a href="9501.php">martin.bogomolni_at_[hidden]: "[OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>In reply to:</strong> <a href="9500.php">Barrett, Brian W: "[OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2011, at 2:51 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When libevent was made its own component last fall, it appears that the
</span><br>
<span class="quotelev1">&gt; function renames and visibility  settings were lost.  This is proving
</span><br>
<span class="quotelev1">&gt; rather problematic for a project I'm trying to get running with the trunk
</span><br>
<span class="quotelev1">&gt; which uses libev (which provides a libevent compatibility layer).  It
</span><br>
<span class="quotelev1">&gt; works fine with Open MPI 1.4 and 1.5, which rename the libevent functions
</span><br>
<span class="quotelev1">&gt; in rename.h, but causes symbol clashes for the trunk.  This seems like a
</span><br>
<span class="quotelev1">&gt; rather glaring oversight, especially since there was a bunch of work done
</span><br>
<span class="quotelev1">&gt; to remove the visibility flags from the libevent component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At one point, someone was running a symbol checker to make sure things
</span><br>
<span class="quotelev1">&gt; like this didn't happen; has that been killed off?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can whomever is responsible for the new libevent please fix this?
</span><br>
<p>I guess that would mostly be me - my penalty for doing the update. Can you tell me which symbols are clashing? We honestly thought we had that all worked out, but I don't know of any tool for checking it other than the basic ones.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9503.php">Jeff Squyres: "Re: [OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>Previous message:</strong> <a href="9501.php">martin.bogomolni_at_[hidden]: "[OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>In reply to:</strong> <a href="9500.php">Barrett, Brian W: "[OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
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
