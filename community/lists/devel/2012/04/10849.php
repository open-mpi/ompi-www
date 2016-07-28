<?
$subject_val = "Re: [OMPI devel] trunk regressions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 18:15:16 2012" -->
<!-- isoreceived="20120409221516" -->
<!-- sent="Mon, 9 Apr 2012 16:15:08 -0600" -->
<!-- isosent="20120409221508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk regressions" -->
<!-- id="7D5E2767-7793-432D-81D4-B675BB8FAED5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A6304EB9-97BA-4C4E-A242-4A3DA7D4AF11_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-04-09 18:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10848.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>In reply to:</strong> <a href="10848.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nobody stepped up, so I fixed this in r26257
<br>
<p>On Apr 9, 2012, at 9:21 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: this isn't a bug in orte_dpm, but in the MPI binding for comm_join. The problem is that both sides in the comm_join are setting &quot;send_first&quot; to true - i.e., both sides are trying to be the first to send on the handshake. We got away with this before because of a bug in orte_dpm that made the value of send_first irrelevant, but that has now been fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So someone needs to figure out how to properly set &quot;send_first&quot; in comm_join so that the two sides agree on who does what first. Looking at the code, it isn't obvious to me how one would do so as I don't see any rank info passed into the function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 9, 2012, at 8:31 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is totally not related to the bug report, but a neat trick in Trac.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question was &quot;what were the commits between r26240 and 26249&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; In the search box type:
</span><br>
<span class="quotelev2">&gt;&gt; log:@26240:26249
</span><br>
<span class="quotelev2">&gt;&gt; Or use the direct url:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/log/?revs=26240-26249">https://svn.open-mpi.org/trac/ompi/log/?revs=26240-26249</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; nifty...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 9, 2012 at 9:17 AM, TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After looking at Oracles MTT results there seem to be a (some??) regressions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between r26240 and 26249 detected by the ibm and intel tests suites.  An
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example of this is the failures in the comm_join, final and loop_spawn tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the ibm test suite as seen in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2055">http://www.open-mpi.org/mtt/index.php?do_redir=2055</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note, I've seen similar errors detected by IU runs too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll look further into this but I thought I would post this just in case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone else has seen this.
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>Previous message:</strong> <a href="10848.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<li><strong>In reply to:</strong> <a href="10848.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10850.php">Ralph Castain: "Re: [OMPI devel] trunk regressions"</a>
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
