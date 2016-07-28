<?
$subject_val = "Re: [OMPI devel] Bcol/mcol violations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 12:14:03 2014" -->
<!-- isoreceived="20140207171403" -->
<!-- sent="Fri, 7 Feb 2014 12:14:02 -0500" -->
<!-- isosent="20140207171402" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bcol/mcol violations" -->
<!-- id="894D4BE4-F76F-45FC-8C23-55F688314F4C_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140207155202.GC97640_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bcol/mcol violations<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 12:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14033.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14031.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>In reply to:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14033.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14033.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14034.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please give a try to the attached hot-fix.
<br>
It unrolls most of the spaghetti, except the iboffload component (which is anyway disabled).
<br>
Sorry for the mess.
<br>
<p>Best,
<br>
Pasha
<br>
<p>On Feb 7, 2014, at 10:52 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
<br>
<p>On Fri, Feb 07, 2014 at 07:46:03AM -0800, Ralph Castain wrote:
<br>
The issue in 1.7 is all the cross-integration, which means we violate our normal behavior when it comes to no-building and user-directed component selection. Jeff and I just discussed how this could be resolved using the PML-BTL model, but (a) that is not what we have in 1.7, and (b) it isn't clear to me how hard it will be to do, and when it might be ready.
<br>
<p>However, we don't have the problem of incorrect results that we do in the trunk, so we do have a little more latitude.
<br>
<p>So the situation with respect to 1.7 is pretty clear: if we can get a PML-BTL model in place within the next week, then we can let things continue as-is. If we can't, then we remove the coll/ml component and the bcol framework from 1.7, leaving the door open to reinstatement whenever the code is actually ready.
<br>
<p>Should be ready today. The use of that coll/ml structure is unnecessary
<br>
at this time. I am removing it in bcol right now. In the future we will
<br>
put in a better fix but this should work for 1.7.x/1.8.x.
<br>
<p>-Nathan
<br>
&lt;ATT00001&gt;_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14032/p4.patch">p4.patch</a>
</ul>
<!-- attachment="p4.patch" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14032/ATT00001.htm">ATT00001.htm</a>
</ul>
<!-- attachment="ATT00001.htm" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14033.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Previous message:</strong> <a href="14031.php">Ralph Castain: "Re: [OMPI devel] openmpi installation"</a>
<li><strong>In reply to:</strong> <a href="14025.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14033.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14033.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14034.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
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
