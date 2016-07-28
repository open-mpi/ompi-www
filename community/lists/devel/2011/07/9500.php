<?
$subject_val = "[OMPI devel] Libevent visibility problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 16:51:31 2011" -->
<!-- isoreceived="20110711205131" -->
<!-- sent="Mon, 11 Jul 2011 20:51:06 +0000" -->
<!-- isosent="20110711205106" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] Libevent visibility problem" -->
<!-- id="CA40BE57.5D77%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Libevent visibility problem<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 16:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9501.php">martin.bogomolni_at_[hidden]: "[OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>Previous message:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>When libevent was made its own component last fall, it appears that the
<br>
function renames and visibility  settings were lost.  This is proving
<br>
rather problematic for a project I'm trying to get running with the trunk
<br>
which uses libev (which provides a libevent compatibility layer).  It
<br>
works fine with Open MPI 1.4 and 1.5, which rename the libevent functions
<br>
in rename.h, but causes symbol clashes for the trunk.  This seems like a
<br>
rather glaring oversight, especially since there was a bunch of work done
<br>
to remove the visibility flags from the libevent component.
<br>
<p>At one point, someone was running a symbol checker to make sure things
<br>
like this didn't happen; has that been killed off?
<br>
<p>Can whomever is responsible for the new libevent please fix this?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9501.php">martin.bogomolni_at_[hidden]: "[OMPI devel] Problems compiling 1.5.3 on ARM"</a>
<li><strong>Previous message:</strong> <a href="9499.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
<li><strong>Reply:</strong> <a href="9502.php">Ralph Castain: "Re: [OMPI devel] Libevent visibility problem"</a>
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
