<?
$subject_val = "[OMPI devel] Change to MCA base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 10:28:29 2015" -->
<!-- isoreceived="20150924142829" -->
<!-- sent="Thu, 24 Sep 2015 07:28:26 -0700" -->
<!-- isosent="20150924142826" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Change to MCA base" -->
<!-- id="7FF0699E-8048-479E-B3DA-F08468745328_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Change to MCA base<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 10:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18104.php">Howard Pritchard: "[OMPI devel] open mpi builds busted"</a>
<li><strong>Previous message:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>In order to fix a problem identified on the user list, I had to make a small (hopefully insignificant) change to mca_component_select. As this is used in other places, I wanted to highlight it here since not everyone looks at the PRs in the &#226;&#128;&#156;oven&#226;&#128;&#157;.
<br>
<p>The change was required because mca_component_select never actually looked at the returned status from a component query - it just blissfully ignored it. In this case, it caused us to ignore a user error and continue along to select another component, leading to behavior contrary to what the user had specified. The solution was to simply have the function check the returned status, and if it is OPAL_ERR_FATAL, then abort the procedure and return that error code.
<br>
<p>You can see the details here:
<br>
<p><a href="https://github.com/open-mpi/ompi/pull/936/files">https://github.com/open-mpi/ompi/pull/936/files</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/936/files">https://github.com/open-mpi/ompi/pull/936/files</a>&gt;
<br>
<p>Please let me know if this is going to cause a problem for your framework. I&#226;&#128;&#153;m not seeing any issues, but I can&#226;&#128;&#153;t build/run everything.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18104.php">Howard Pritchard: "[OMPI devel] open mpi builds busted"</a>
<li><strong>Previous message:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
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
