<?
$subject_val = "Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  9 05:02:39 2007" -->
<!-- isoreceived="20071209100239" -->
<!-- sent="Sun, 9 Dec 2007 12:02:33 +0200" -->
<!-- isosent="20071209100233" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799" -->
<!-- id="20071209100233.GY3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220712051145r6c197ba8rac0f5f6f44e5fae1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 32-bit openib is broken on the trunk as of Nov	27th, r16799<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-09 05:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2767.php">Gleb Natapov: "[OMPI devel] Changes to all BTLs."</a>
<li><strong>Previous message:</strong> <a href="2765.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893"</a>
<li><strong>In reply to:</strong> <a href="2732.php">Tim Mattox: "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 05, 2007 at 02:45:17PM -0500, Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; It appears that sometime after r16777, and by r16799, that something
</span><br>
<span class="quotelev1">&gt; was broken on the trunk's openib support for 32-bit builds.
</span><br>
<span class="quotelev1">&gt; The 64-bit tests all seem normal, as well as the 32-bit &amp; 64-bit tests on
</span><br>
<span class="quotelev1">&gt; the 1.2 branch on the same machine (odin).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this MTT results page permalink showing the 32-bit odin runs:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=468">http://www.open-mpi.org/mtt/index.php?do_redir=468</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha &amp; Gleb, you both did a variety of checkins in that svn r# range.
</span><br>
<span class="quotelev1">&gt; Do either of you have time to investigate this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a snippet from one randomly picked failed test (out of thousands):
</span><br>
<span class="quotelev1">&gt; [1,1][btl_openib_component.c:1665:btl_openib_module_progress] from
</span><br>
<span class="quotelev1">&gt; odin001 to: odin001 error
</span><br>
<span class="quotelev1">&gt; polling LP CQ with status LOCAL PROTOCOL ERROR status number 4 for
</span><br>
<span class="quotelev1">&gt; wr_id 141733120 opcode 128
</span><br>
<span class="quotelev1">&gt; qp_idx 3
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 29761 on
</span><br>
<span class="quotelev1">&gt; node odin001 calling &quot;abort&quot;. This will have caused other processes
</span><br>
<span class="quotelev1">&gt; in the application to be terminated by signals sent by mpirun
</span><br>
<span class="quotelev1">&gt; (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, and happy bug hunting!
</span><br>
I know where the problem is. Will fix this week.
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2767.php">Gleb Natapov: "[OMPI devel] Changes to all BTLs."</a>
<li><strong>Previous message:</strong> <a href="2765.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16893"</a>
<li><strong>In reply to:</strong> <a href="2732.php">Tim Mattox: "[OMPI devel] 32-bit openib is broken on the trunk as of Nov 27th, r16799"</a>
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
