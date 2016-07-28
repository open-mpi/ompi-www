<?
$subject_val = "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 09:04:55 2014" -->
<!-- isoreceived="20140304140455" -->
<!-- sent="Tue, 4 Mar 2014 16:04:53 +0200" -->
<!-- isosent="20140304140453" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -mca coll &amp;quot;ml&amp;quot; cause segv or hangs with different command lines." -->
<!-- id="CAAO1KyY=XqGZVS_Bei+us2u4U=GTeTSxn4p9J9L6FVsU6ke+ow_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57ocHMicyn3T69iHjRNYbYxupFeuwmEKHjyfZfXu_Qc3a9g_at_mail.gmail.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 09:04:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14287.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>coll/hcoll is Mellanox driven collective package.
<br>
coll/ml is managed/supported/developed by ORNL folks.
<br>
<p><p>On Tue, Mar 4, 2014 at 1:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ummm...the &quot;ml&quot; stands for Mellanox. This is a component you folks
</span><br>
<span class="quotelev1">&gt; contributed at some time. IIRC, the hcoll and/or bcol are meant to replace
</span><br>
<span class="quotelev1">&gt; it, but you folks would know best what to do with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 4, 2014 at 12:12 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Recently I often meet hangs and seg faults with different command lines
</span><br>
<span class="quotelev2">&gt;&gt; and there are &quot;ml&quot; functions in the stack trace.
</span><br>
<span class="quotelev2">&gt;&gt; When I just turn &quot;ml&quot; off by do -mca coll ^ml, problems disappear.
</span><br>
<span class="quotelev2">&gt;&gt; For example,
</span><br>
<span class="quotelev2">&gt;&gt; oshrun -np 4 --map-by node --display-map  ./ring_oshmem
</span><br>
<span class="quotelev2">&gt;&gt; fails with seg fault while
</span><br>
<span class="quotelev2">&gt;&gt; oshrun -np 4 --map-by node --display-map -mca coll ^ml ./ring_oshmem
</span><br>
<span class="quotelev2">&gt;&gt; passes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;ml&quot; priority is low (27), but it could have issues during comm_query
</span><br>
<span class="quotelev2">&gt;&gt; (it does all initialization staff there).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Ml&quot; is unreliable component. So It may be reasonable do not to build
</span><br>
<span class="quotelev2">&gt;&gt; this component by default to avoid such problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Searchable archives:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/date.php">http://www.open-mpi.org/community/lists/devel/2014/03/date.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/date.php">http://www.open-mpi.org/community/lists/devel/2014/03/date.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14287.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14285.php">Ralph Castain: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14288.php">Hjelm, Nathan T: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
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
