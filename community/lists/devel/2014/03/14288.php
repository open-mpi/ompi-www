<?
$subject_val = "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 14:34:18 2014" -->
<!-- isoreceived="20140304193418" -->
<!-- sent="Tue, 4 Mar 2014 19:34:17 +0000" -->
<!-- isosent="20140304193417" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -mca coll &amp;quot;ml&amp;quot; cause segv or hangs with different command lines." -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8719EE_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyY=XqGZVS_Bei+us2u4U=GTeTSxn4p9J9L6FVsU6ke+ow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 14:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14289.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14287.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a rounding issue in basesmuma. If the control data happened to be less than a page then we were trying to allocate 0 bytes. It should be fixed on the trunk and has been CMR'ed to 1.7.5
<br>
<p>-Nathan
<br>
<p>Please excuse the horrible Outlook-style quoting. OWA sucks.
<br>
<p>________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Mike Dubman [miked_at_[hidden]]
<br>
Sent: Tuesday, March 04, 2014 7:04 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.
<br>
<p>Hi,
<br>
<p>coll/hcoll is Mellanox driven collective package.
<br>
coll/ml is managed/supported/developed by ORNL folks.
<br>
<p><p>On Tue, Mar 4, 2014 at 1:06 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Ummm...the &quot;ml&quot; stands for Mellanox. This is a component you folks contributed at some time. IIRC, the hcoll and/or bcol are meant to replace it, but you folks would know best what to do with it.
<br>
<p><p><p>On Tue, Mar 4, 2014 at 12:12 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
<p>Recently I often meet hangs and seg faults with different command lines and there are &quot;ml&quot; functions in the stack trace.
<br>
When I just turn &quot;ml&quot; off by do -mca coll ^ml, problems disappear.
<br>
For example,
<br>
oshrun -np 4 --map-by node --display-map  ./ring_oshmem
<br>
fails with seg fault while
<br>
oshrun -np 4 --map-by node --display-map -mca coll ^ml ./ring_oshmem
<br>
passes.
<br>
<p>The &quot;ml&quot; priority is low (27), but it could have issues during comm_query (it does all initialization staff there).
<br>
<p>&quot;Ml&quot; is unreliable component. So It may be reasonable do not to build this component by default to avoid such problems.
<br>
<p>What do you think?
<br>
<p>Best regards,
<br>
Elena
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/date.php">http://www.open-mpi.org/community/lists/devel/2014/03/date.php</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/date.php">http://www.open-mpi.org/community/lists/devel/2014/03/date.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14289.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14287.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14292.php">Rolf vandeVaart: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
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
