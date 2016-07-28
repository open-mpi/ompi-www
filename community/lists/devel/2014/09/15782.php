<?
$subject_val = "[OMPI devel] RFC: Multiple duplicate MCA param generates error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 12:31:41 2014" -->
<!-- isoreceived="20140909163141" -->
<!-- sent="Tue, 9 Sep 2014 09:31:05 -0700" -->
<!-- isosent="20140909163105" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Multiple duplicate MCA param generates error" -->
<!-- id="AB2E393D-904F-4B33-AF9F-27C3E5A26518_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Multiple duplicate MCA param generates error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 12:31:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15783.php">Jeff Squyres (jsquyres): "[OMPI devel] Stop updating the Trac wiki (Github conversion)"</a>
<li><strong>Previous message:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15784.php">Mike Dubman: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Reply:</strong> <a href="15784.php">Mike Dubman: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:     Generate an error if the user provides duplicate MCA params on the cmd line
<br>
<p>WHY:       User confusion due to unexpected behavior
<br>
<p>WHEN:     Tues, Sept 16 as this is a gating issue for 1.8.3 release
<br>
<p><p>In the beginning, OMPI would look at a cmd line for MCA params - if a param was listed more than once, we would take the LAST value given and ignore all the rest. At some point, this behavior was changed in opal/mca/base/mca_base_cmd_line.c such that we concatenated the values into a comma-delimited list. Unfortunately, the backend parser doesn't know how to deal with such a list when converting the param to values such as INT or BOOL.
<br>
<p>In r32686, I reverted the behavior back to the original one of taking the LAST value. However, this can lead to unexpected behavior. For example, consider the case where the user provides a cmd line containing the following:
<br>
<p>... -mca btl ^sm..... -mca btl openib.....
<br>
<p>In this case, the result will be a setting of &quot;btl=openib&quot;, and only the openib BTL will be selected. If the user thought that all BTLs other than sm were to be considered, this could be a surprise. Likewise, note that if the order is reversed, the result would be &quot;btl=^sm&quot; - a completely different behavior.
<br>
<p>On the telecon, we couldn't think of any use-case where we would want the last value or concatenating behaviors. Instead, there was consensus that we should generate an error as the user is asking us to do conflicting things.
<br>
<p>However, we acknowledged that we might not understand all the use-cases, so we are issuing this as an RFC in case someone knows of a reason for the other behaviors.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15783.php">Jeff Squyres (jsquyres): "[OMPI devel] Stop updating the Trac wiki (Github conversion)"</a>
<li><strong>Previous message:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15784.php">Mike Dubman: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
<li><strong>Reply:</strong> <a href="15784.php">Mike Dubman: "Re: [OMPI devel] RFC: Multiple duplicate MCA param generates error"</a>
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
