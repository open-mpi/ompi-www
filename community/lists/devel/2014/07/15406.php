<?
$subject_val = "[OMPI devel] RFC: namespaces to isolate against code moves";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 16:28:26 2014" -->
<!-- isoreceived="20140731202826" -->
<!-- sent="Thu, 31 Jul 2014 20:28:24 +0000" -->
<!-- isosent="20140731202824" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: namespaces to isolate against code moves" -->
<!-- id="1A2F9463-F75C-4432-BB2D-B563B00A8661_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: namespaces to isolate against code moves<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 16:28:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15407.php">Jeff Squyres (jsquyres): "[OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Previous message:</strong> <a href="15405.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Allow reservation of a symbol namespace that is independent of component location.
<br>
<p>WHY: All of the framework location/abstraction churn over the years has made it challenging to maintain single source versions of MCA components (e.g., the &quot;usnic&quot; BTL) that work with multiple versions of Open MPI (v1.6, v1.8, v1.9, etc.).
<br>
<p>WHEN: Let's talk about this at the next OMPI Engineering call on Tuesday, August 5th.
<br>
<p><p>My current proposal is to use &quot;opal_ns_&lt;NAME&gt;&quot;, obviously replacing &quot;_&quot; with any context-appropriate separator and uppercasing as needed.  We can track these namespaces by committing a file named &quot;contrib/ns/&lt;NAME&gt;&quot; that contains a short description of why the namespace is reserved and who is managing the namespace.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15407.php">Jeff Squyres (jsquyres): "[OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>Previous message:</strong> <a href="15405.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol"</a>
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
