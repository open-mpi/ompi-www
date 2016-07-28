<?
$subject_val = "Re: [OMPI devel] IOF and scalability";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 07:30:02 2008" -->
<!-- isoreceived="20080828113002" -->
<!-- sent="Thu, 28 Aug 2008 07:29:58 -0400" -->
<!-- isosent="20080828112958" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF and scalability" -->
<!-- id="ea86ce220808280429x3f2e600aud5f036d2e57bb939_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="75485D8D-34B1-4B9B-A916-4409CDD7E161_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF and scalability<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 07:29:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4612.php">Jeff Squyres: "[OMPI devel] MPI 2.1"</a>
<li><strong>Previous message:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>In reply to:</strong> <a href="4609.php">Ralph Castain: "[OMPI devel] IOF and scalability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great find Ralph!
<br>
<p>On Wed, Aug 27, 2008 at 7:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As some of you may remember, I am in the process of rewriting the IOF
</span><br>
<span class="quotelev1">&gt; subsystem. While working my way through the revisions, I discovered
</span><br>
<span class="quotelev1">&gt; something about the current IOF that significantly impacts scalability.
</span><br>
<span class="quotelev1">&gt; Since I know some people retain interest in that area, I thought I would
</span><br>
<span class="quotelev1">&gt; pass the observations along.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When an orted fork/exec's an application process, it automatically wires up
</span><br>
<span class="quotelev1">&gt; the IOF for that process. In the current system, that entails sending a
</span><br>
<span class="quotelev1">&gt; minimum of three messages to mpirun for each process, each message in turn
</span><br>
<span class="quotelev1">&gt; generating an &quot;ack&quot; message back to the orted. Thus, during launch, the IOF
</span><br>
<span class="quotelev1">&gt; is sending more than 6*nprocs messages across the OOB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this is all done outside of our daemon collective system, so
</span><br>
<span class="quotelev1">&gt; every message is handled independently on both ends. As you can imagine,
</span><br>
<span class="quotelev1">&gt; mpirun gets somewhat deluged for large jobs. With the advent of the
</span><br>
<span class="quotelev1">&gt; orte_routed framework, at least these messages don't create new TCP
</span><br>
<span class="quotelev1">&gt; connections - but they do force mpirun to deal with a large number of
</span><br>
<span class="quotelev1">&gt; inbound messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lest someone think the original authors were &quot;stupid&quot;, let me hasten to
</span><br>
<span class="quotelev1">&gt; point out that they wrote this system to a clear set of requirements focused
</span><br>
<span class="quotelev1">&gt; on creating a generic RTE - i.e., one not tailored to OMPI's specific needs.
</span><br>
<span class="quotelev1">&gt; Thus, the system was designed to support capabilities we don't need, and
</span><br>
<span class="quotelev1">&gt; couldn't take advantage of any knowledge of the end-state OMPI was trying to
</span><br>
<span class="quotelev1">&gt; achieve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an example of the impact, on RoadRunner, the current IOF results in the
</span><br>
<span class="quotelev1">&gt; transmission of over 72,000 messages between procs and mpirun during startup
</span><br>
<span class="quotelev1">&gt; of a petaflop application - just to wireup the IOF.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the rewrite, I am taking advantage of knowing OMPI's desired final
</span><br>
<span class="quotelev1">&gt; configuration to eliminate -all- of these communications. Should improve
</span><br>
<span class="quotelev1">&gt; things considerably - hope to have it completed in a week or two, though it
</span><br>
<span class="quotelev1">&gt; won't come into the trunk until we release 1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4612.php">Jeff Squyres: "[OMPI devel] MPI 2.1"</a>
<li><strong>Previous message:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>In reply to:</strong> <a href="4609.php">Ralph Castain: "[OMPI devel] IOF and scalability"</a>
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
