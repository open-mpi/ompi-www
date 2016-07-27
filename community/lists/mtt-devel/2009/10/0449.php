<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 15:41:13 2009" -->
<!-- isoreceived="20091007194113" -->
<!-- sent="Wed, 7 Oct 2009 15:41:08 -0400" -->
<!-- isosent="20091007194108" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="20091007194108.GB14465_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1254843052.3155.3.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [MTT devel] Analysis of hung jobs.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 15:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct/06/2009 04:30:52PM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Tue, 2009-10-06 at 11:25 -0400, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Oct/06/2009 10:23:48AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Further to the mail linked below, padb is able to perform diagnostics,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; including backtraces on hung jobs and integrates well into automated
</span><br>
<span class="quotelev3">&gt; &gt; &gt; testing environments.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can padb get a backtrace from a non-debuggable MPI (e.g., not compiled
</span><br>
<span class="quotelev2">&gt; &gt; with -g)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's gets what is available from the application, without -g it will
</span><br>
<span class="quotelev1">&gt; give you function names only, with -g it will also give you file names
</span><br>
<span class="quotelev1">&gt; and line numbers and optionally variables, their types and values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It can show the message queues regardless of the -g option.
</span><br>
<p>I got the following error doing a simple test:
<br>
<p>&nbsp;&nbsp;$ padb --config-option rmgr=mpirun --full-report=12480
<br>
&nbsp;&nbsp;Nested quantifiers in regex; marked by &lt;-- HERE in m/\A                    # Start of str.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;                    # Quote
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((?:[^&quot;\\]++ &lt;-- HERE |\\.)*+) # Anyting which isn't \&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;                    # Close quote
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,?                   # An optional comma.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(.*)                 # Rest of line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\z                   # end.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ at padb line 5044.
<br>
<p>&nbsp;&nbsp;$ perl --version
<br>
&nbsp;&nbsp;This is perl, v5.8.4 built for sun4-solaris-64int
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0448.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0450.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
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
