<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 13:41:02 2014" -->
<!-- isoreceived="20140825174102" -->
<!-- sent="Mon, 25 Aug 2014 13:41:01 -0400" -->
<!-- isosent="20140825174101" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="20140825134101.6d26e715_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E71F6A91-6A1F-4038-AF60-BEAE87DC1460_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 13:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15707.php">Gilles Gouaillardet: "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite"</a>
<li><strong>Previous message:</strong> <a href="15705.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="15699.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>My apologies for the delay in replying, I was flying back from the UK
<br>
to the States, but now I'm here and I can provide a more timely
<br>
response.
<br>
<p><span class="quotelev1">&gt; I confirm that the hwloc message you sent (and your posts to the
</span><br>
<span class="quotelev1">&gt; hwloc-users list) indicate that hwloc is getting confused by a buggy
</span><br>
<span class="quotelev1">&gt; BIOS, but it's only dealing with the L3 cache, and that shouldn't
</span><br>
<span class="quotelev1">&gt; affect the binding that OMPI is doing.
</span><br>
<p>Great, good to know. I'd still be interested in learning how to build a
<br>
hwloc-parsable xml as a workaround, especially if it fixes the bindings
<br>
(see below).
<br>
<p><span class="quotelev1">&gt; 1. Run with &quot;--report-bindings&quot; and send the output.  It'll
</span><br>
<span class="quotelev1">&gt; prettyprint-render where OMPI thinks it is binding each process.
</span><br>
<p>Please find it attached.
<br>
<p><span class="quotelev1">&gt; 2. Run with &quot;--bind-to none&quot; and see if that helps.  I.e., if, per
</span><br>
<span class="quotelev1">&gt; #1, OMPI thinks it is binding correctly (i.e., each of the 48
</span><br>
<span class="quotelev1">&gt; processes is being bound to a unique core), then perhaps hwloc is
</span><br>
<span class="quotelev1">&gt; doing something wrong in the actual binding (i.e., binding the 48
</span><br>
<span class="quotelev1">&gt; processes only among the lower 32 cores).
</span><br>
<p>BINGO! As soon as I did this, indeed all the cores went to 100%! Here's
<br>
the updated timing (compared to 13 minutes from before):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real	1m8.442s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user	0m0.077s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys	0m0.071s
<br>
<p>So I guess the conclusion is that hwloc is somehow messing things up on
<br>
this chipset?
<br>
<p>Thanks,
<br>
Andrej
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15706/test_report_bindings.stderr">test_report_bindings.stderr</a>
</ul>
<!-- attachment="test_report_bindings.stderr" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15707.php">Gilles Gouaillardet: "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite"</a>
<li><strong>Previous message:</strong> <a href="15705.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="15699.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
