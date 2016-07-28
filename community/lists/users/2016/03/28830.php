<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 12:40:18 2016" -->
<!-- isoreceived="20160325164018" -->
<!-- sent="Fri, 25 Mar 2016 12:40:17 -0400" -->
<!-- isosent="20160325164017" -->
<!-- name="Ronald Cohen" -->
<!-- email="recohen3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="CAEcVHtOwGGT8qSQg7WRrvNXKwcoq_dC7y3sb7VR_42cE2nxfEg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0D406316-7780-4EB6-886F-443FCE95C34C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] loading processes per node<br>
<strong>From:</strong> Ronald Cohen (<em>recohen3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-25 12:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28831.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28829.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28829.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28831.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28831.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you! I will try it!
<br>
<p><p>What would
<br>
-cpus-per-proc  4 -n 16
<br>
do?
<br>
<p>Ron
<br>
<pre>
---
Ron Cohen
recohen3_at_[hidden]
skypename: ronaldcohen
twitter: @recohen3
On Fri, Mar 25, 2016 at 12:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; Add -rank-by node to your cmd line. You&#226;&#128;&#153;ll still get 4 procs/node, but they will be ranked by node instead of consecutively within a node.
&gt;
&gt;
&gt;
&gt;&gt; On Mar 25, 2016, at 9:30 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt; I am using
&gt;&gt;
&gt;&gt; mpirun  --map-by ppr:4:node -n 16
&gt;&gt;
&gt;&gt; and this loads the processes in round robin fashion. This seems to be
&gt;&gt; twice as slow for my code as loading them node by node, 4 processes
&gt;&gt; per node.
&gt;&gt;
&gt;&gt; How can I not load them round robin, but node by node?
&gt;&gt;
&gt;&gt; Thanks!
&gt;&gt;
&gt;&gt; Ron
&gt;&gt;
&gt;&gt;
&gt;&gt; ---
&gt;&gt; Ron Cohen
&gt;&gt; recohen3_at_[hidden]
&gt;&gt; skypename: ronaldcohen
&gt;&gt; twitter: @recohen3
&gt;&gt;
&gt;&gt; ---
&gt;&gt; Ronald Cohen
&gt;&gt; Geophysical Laboratory
&gt;&gt; Carnegie Institution
&gt;&gt; 5251 Broad Branch Rd., N.W.
&gt;&gt; Washington, D.C. 20015
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28828.php">http://www.open-mpi.org/community/lists/users/2016/03/28828.php</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28829.php">http://www.open-mpi.org/community/lists/users/2016/03/28829.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28831.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28829.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28829.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28831.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28831.php">Ralph Castain: "Re: [OMPI users] loading processes per node"</a>
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
