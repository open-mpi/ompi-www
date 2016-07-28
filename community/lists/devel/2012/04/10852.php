<?
$subject_val = "Re: [OMPI devel] trunk regressions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 10 06:44:21 2012" -->
<!-- isoreceived="20120410104421" -->
<!-- sent="Tue, 10 Apr 2012 06:44:12 -0400" -->
<!-- isosent="20120410104412" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk regressions" -->
<!-- id="4F840EFC.2080504_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F5E8B683-4622-4665-9346-4F0377B2CD08_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk regressions<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-10 06:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10851.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
<li><strong>In reply to:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Reply:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Reply:</strong> <a href="10854.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph the comm_join issue seems to be fix but the other issues 
<br>
mentioned still seem to persist.  I'll look at this later today unless 
<br>
someone else decides to fix them :-).
<br>
<p>--td
<br>
<p>On 4/9/2012 6:45 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Should all be fixed now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 9, 2012, at 7:17 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After looking at Oracles MTT results there seem to be a (some??) 
</span><br>
<span class="quotelev2">&gt;&gt; regressions between r26240 and 26249 detected by the ibm and intel 
</span><br>
<span class="quotelev2">&gt;&gt; tests suites.  An example of this is the failures in the comm_join, 
</span><br>
<span class="quotelev2">&gt;&gt; final and loop_spawn tests of the ibm test suite as seen in 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2055">http://www.open-mpi.org/mtt/index.php?do_redir=2055</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, I've seen similar errors detected by IU runs too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll look further into this but I thought I would post this just in 
</span><br>
<span class="quotelev2">&gt;&gt; case someone else has seen this.
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10851.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26243"</a>
<li><strong>In reply to:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Reply:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Reply:</strong> <a href="10854.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
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
