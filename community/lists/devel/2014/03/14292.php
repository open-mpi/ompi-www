<?
$subject_val = "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 20:15:11 2014" -->
<!-- isoreceived="20140305011511" -->
<!-- sent="Tue, 4 Mar 2014 17:15:09 -0800" -->
<!-- isosent="20140305011509" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -mca coll &amp;quot;ml&amp;quot; cause segv or hangs with different command lines." -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601B458910_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8719EE_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 20:15:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Previous message:</strong> <a href="14291.php">Marco Atzeri: "[OMPI devel] Bad parameter in file  oob_tcp.c"</a>
<li><strong>In reply to:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am still seeing the same issue where I get some type of segv unless I disable the coll ml component.  This may be an issue at my end, but just thought I would double check that we are sure this is fixed.
<br>
Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Hjelm,
</span><br>
<span class="quotelev1">&gt;Nathan T
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, March 04, 2014 2:34 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different
</span><br>
<span class="quotelev1">&gt;command lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There was a rounding issue in basesmuma. If the control data happened to be
</span><br>
<span class="quotelev1">&gt;less than a page then we were trying to allocate 0 bytes. It should be fixed on
</span><br>
<span class="quotelev1">&gt;the trunk and has been CMR'ed to 1.7.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please excuse the horrible Outlook-style quoting. OWA sucks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;________________________________________
</span><br>
<span class="quotelev1">&gt;From: devel [devel-bounces_at_[hidden]] on behalf of Mike Dubman
</span><br>
<span class="quotelev1">&gt;[miked_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, March 04, 2014 7:04 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different
</span><br>
<span class="quotelev1">&gt;command lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;coll/hcoll is Mellanox driven collective package.
</span><br>
<span class="quotelev1">&gt;coll/ml is managed/supported/developed by ORNL folks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Mar 4, 2014 at 1:06 PM, Ralph Castain &lt;rhc_at_open-
</span><br>
<span class="quotelev1">&gt;mpi.org&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;Ummm...the &quot;ml&quot; stands for Mellanox. This is a component you folks
</span><br>
<span class="quotelev1">&gt;contributed at some time. IIRC, the hcoll and/or bcol are meant to replace it,
</span><br>
<span class="quotelev1">&gt;but you folks would know best what to do with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Mar 4, 2014 at 12:12 AM, Elena Elkina
</span><br>
<span class="quotelev1">&gt;&lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Recently I often meet hangs and seg faults with different command lines and
</span><br>
<span class="quotelev1">&gt;there are &quot;ml&quot; functions in the stack trace.
</span><br>
<span class="quotelev1">&gt;When I just turn &quot;ml&quot; off by do -mca coll ^ml, problems disappear.
</span><br>
<span class="quotelev1">&gt;For example,
</span><br>
<span class="quotelev1">&gt;oshrun -np 4 --map-by node --display-map  ./ring_oshmem fails with seg fault
</span><br>
<span class="quotelev1">&gt;while oshrun -np 4 --map-by node --display-map -mca coll ^ml ./ring_oshmem
</span><br>
<span class="quotelev1">&gt;passes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The &quot;ml&quot; priority is low (27), but it could have issues during comm_query (it
</span><br>
<span class="quotelev1">&gt;does all initialization staff there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;Ml&quot; is unreliable component. So It may be reasonable do not to build this
</span><br>
<span class="quotelev1">&gt;component by default to avoid such problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best regards,
</span><br>
<span class="quotelev1">&gt;Elena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Searchable archives: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/03/date.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Searchable archives: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/03/date.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Searchable archives: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/03/index.php
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14293.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>Previous message:</strong> <a href="14291.php">Marco Atzeri: "[OMPI devel] Bad parameter in file  oob_tcp.c"</a>
<li><strong>In reply to:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
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
