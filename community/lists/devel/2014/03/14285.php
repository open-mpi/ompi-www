<?
$subject_val = "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 06:06:55 2014" -->
<!-- isoreceived="20140304110655" -->
<!-- sent="Tue, 4 Mar 2014 03:06:54 -0800" -->
<!-- isosent="20140304110654" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -mca coll &amp;quot;ml&amp;quot; cause segv or hangs with different command lines." -->
<!-- id="CAMD57ocHMicyn3T69iHjRNYbYxupFeuwmEKHjyfZfXu_Qc3a9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANhOtjYtZDCDWN7qPKra7yMz+Nz11yCX-L_p5kkX4m3kTUaS6g_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 06:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14284.php">Elena Elkina: "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14284.php">Elena Elkina: "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummm...the &quot;ml&quot; stands for Mellanox. This is a component you folks
<br>
contributed at some time. IIRC, the hcoll and/or bcol are meant to replace
<br>
it, but you folks would know best what to do with it.
<br>
<p><p><p>On Tue, Mar 4, 2014 at 12:12 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recently I often meet hangs and seg faults with different command lines
</span><br>
<span class="quotelev1">&gt; and there are &quot;ml&quot; functions in the stack trace.
</span><br>
<span class="quotelev1">&gt; When I just turn &quot;ml&quot; off by do -mca coll ^ml, problems disappear.
</span><br>
<span class="quotelev1">&gt; For example,
</span><br>
<span class="quotelev1">&gt; oshrun -np 4 --map-by node --display-map  ./ring_oshmem
</span><br>
<span class="quotelev1">&gt; fails with seg fault while
</span><br>
<span class="quotelev1">&gt; oshrun -np 4 --map-by node --display-map -mca coll ^ml ./ring_oshmem
</span><br>
<span class="quotelev1">&gt; passes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;ml&quot; priority is low (27), but it could have issues during comm_query
</span><br>
<span class="quotelev1">&gt; (it does all initialization staff there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Ml&quot; is unreliable component. So It may be reasonable do not to build this
</span><br>
<span class="quotelev1">&gt; component by default to avoid such problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elena
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14285/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Previous message:</strong> <a href="14284.php">Elena Elkina: "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>In reply to:</strong> <a href="14284.php">Elena Elkina: "[OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
<li><strong>Reply:</strong> <a href="14286.php">Mike Dubman: "Re: [OMPI devel] -mca coll &quot;ml&quot; cause segv or hangs with different command lines."</a>
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
