<?
$subject_val = "Re: [OMPI devel] trunk regressions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 10 09:40:33 2012" -->
<!-- isoreceived="20120410134033" -->
<!-- sent="Tue, 10 Apr 2012 07:40:26 -0600" -->
<!-- isosent="20120410134026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk regressions" -->
<!-- id="C2F18555-D5F4-459B-B345-529A99B840CF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F840EFC.2080504_at_oracle.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-10 09:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10855.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>In reply to:</strong> <a href="10852.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10855.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Reply:</strong> <a href="10855.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked closer at the MTT output, Terry, and loop_spawn is actually behaving correctly. The problem is that (a) the test creates more children than allocated slots, and (b) the tests are being executed in a managed environment, and so we enforce the slot limit. The solution is to set the --oversubscribe flag so that ORTE knows it is okay to run more procs than allocated slots.
<br>
<p>Set that and it will run just fine.
<br>
<p>On Apr 10, 2012, at 4:44 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph the comm_join issue seems to be fix but the other issues mentioned still seem to persist.  I'll look at this later today unless someone else decides to fix them :-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/9/2012 6:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should all be fixed now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 9, 2012, at 7:17 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After looking at Oracles MTT results there seem to be a (some??) regressions between r26240 and 26249 detected by the ibm and intel tests suites.  An example of this is the failures in the comm_join, final and loop_spawn tests of the ibm test suite as seen in <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2055">http://www.open-mpi.org/mtt/index.php?do_redir=2055</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note, I've seen similar errors detected by IU runs too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll look further into this but I thought I would post this just in case someone else has seen this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10855.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10853.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>In reply to:</strong> <a href="10852.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10855.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Reply:</strong> <a href="10855.php">TERRY DONTJE: "Re: [OMPI devel] trunk regressions"</a>
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
