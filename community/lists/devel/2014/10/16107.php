<?
$subject_val = "Re: [OMPI devel] fixing a bug in 1.8 that's not in master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 08:34:02 2014" -->
<!-- isoreceived="20141028123402" -->
<!-- sent="Tue, 28 Oct 2014 12:34:01 +0000" -->
<!-- isosent="20141028123401" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fixing a bug in 1.8 that's not in master" -->
<!-- id="60B0D269-E207-48C8-A62E-EF3D6DA5D5C3_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="4724D5AE-015D-4FC7-86E4-97A6BBC5DE6B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fixing a bug in 1.8 that's not in master<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 08:34:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16108.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16106.php">Paul Kapinos: "[OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just updated the wiki:
<br>
<p>NOTE: Pull requests on ompi-release must include a hash reference in the body/comments corresponding to the commit(s) on ompi:master from which it is derived, OR indicate that this is solely a release branch bug (i.e., there's no corresponding commit on ompi:master because the bug doesn't/didn't exist on ompi:master).
<br>
<p><p><p><p>On Oct 27, 2014, at 9:57 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>Just create a topic branch from v1.8 in a local clone of ompi-release, make the change there, and then file a PR on the ompi-release repo
<br>
<p>Obviously, if it is a bug solely confined to v1.8, you can&#146;t put it in master first :-)
<br>
<p><p>On Oct 27, 2014, at 3:22 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi Folks,
<br>
<p>A cut and past error seems to have happened with
<br>
plm_alps_modules.c in 1.8 which causes a compile failure
<br>
when building for cray.  So right now, there's no building
<br>
ompi 1.8 for crays.
<br>
<p>The problem is not present in master.
<br>
<p>For these kinds of problems, are we suppose to bypass
<br>
all the &quot;has to be in master, need commit, etc.&quot; stuff described in
<br>
<p><a href="https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests">https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests</a>
<br>
<p>and just go straight to pushing to a fork of ompi-release, etc.
<br>
as per the rest of the instructions on submitting pull requests?
<br>
<p>Just want to make sure I'm doing the right thing here.
<br>
<p>Howard
<br>
<p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16104.php">http://www.open-mpi.org/community/lists/devel/2014/10/16104.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16105.php">http://www.open-mpi.org/community/lists/devel/2014/10/16105.php</a>
<br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16108.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16106.php">Paul Kapinos: "[OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
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
