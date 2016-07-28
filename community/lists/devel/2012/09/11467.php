<?
$subject_val = "Re: [OMPI devel] RFC: hostfile setting of #slots";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  2 09:20:52 2012" -->
<!-- isoreceived="20120902132052" -->
<!-- sent="Sun, 2 Sep 2012 07:20:46 -0600" -->
<!-- isosent="20120902132046" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hostfile setting of #slots" -->
<!-- id="020e01cd890d$c3be2110$4b3a6330$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="020a01cd890c$cf0904a0$6d1b0de0$_at_wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: hostfile setting of #slots<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-02 09:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Previous message:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>In reply to:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Reply:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should note that we only virtualize the private cloud / management nodes
<br>
over our HPC.  The HPC is not virtualized as such.
<br>
<p>Ken
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Kenneth A. Lloyd
<br>
Sent: Sunday, September 02, 2012 7:14 AM
<br>
To: 'Open MPI Developers'
<br>
Subject: Re: [OMPI devel] RFC: hostfile setting of #slots
<br>
<p>This is a tricky issue, isn't it?  With the differences between AMD &amp; Intel,
<br>
and between base operating systems &quot;touching&quot; &amp; heaps (betw. Linux &amp;
<br>
Windows), and various virtual machines schemes- we have opted for an
<br>
&quot;outside the main code path&quot; solution to get deterministic results. But that
<br>
is as things are now.  Who knows how stuff like AVX2 / memory mapping - or
<br>
the next new thing - will affect this?  This is similar to issues we've
<br>
found with CPU/GPU memory &amp; affinity mapping over IB.  The basis of the
<br>
decision is (as is often) how much do you trust the user to do the right
<br>
thing?  What happens if you are wrong?
<br>
<p>Only my opinion.
<br>
<p>Ken
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Saturday, September 01, 2012 3:54 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] RFC: hostfile setting of #slots
<br>
<p>This is not a notice of intended change, but rather a solicitation for
<br>
comment.
<br>
<p>We currently default the number of slots on a host provided via hostfile or
<br>
-host to 1. This is a historical &quot;feature&quot; driven by the fact that our
<br>
initial launch system spawned daemons on the remote nodes after we had
<br>
already mapped the processes to them - so we had no way of guessing a
<br>
reasonable value for the number of slots on any node.
<br>
<p>However, the &quot;vm&quot; launch method starts daemons on every node prior to  doing
<br>
the mapping, precisely so we can use the topology in the mapping algorithm.
<br>
This creates the possibility of setting the number of slots on a node to the
<br>
number of cpus (either cores or hardware threads, depending on how that flag
<br>
is set) IF it wasn't provided in the hostfile.
<br>
<p>This would have an impact on the default &quot;byslot&quot; mapping algorithm. With
<br>
only one slot/node, byslot essentially equates to bynode mapping. So a
<br>
user-provided hostfile that doesn't give any info on the number of slots on
<br>
a node effectively changes the default mapping algorithm to &quot;bynode&quot;. This
<br>
change would alter that behavior and retain a &quot;byslot&quot; algorithm, with the
<br>
number of slots being the number of cpus.
<br>
<p>I have a use-case that would benefit from making the change, but can handle
<br>
it outside of the main code path. However, if others would also find it of
<br>
use, I can add it to the main code path, either as the default or via MCA
<br>
param.
<br>
<p>Any thoughts?
<br>
Ralph
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Previous message:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>In reply to:</strong> <a href="11466.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Reply:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
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
