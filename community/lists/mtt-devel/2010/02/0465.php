<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 18:13:37 2010" -->
<!-- isoreceived="20100209231337" -->
<!-- sent="Tue, 9 Feb 2010 18:13:31 -0500" -->
<!-- isosent="20100209231331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="D828E470-C906-4A5B-8725-24FE02E641C5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="14085141-FE60-41A0-96A0-587CF4367792_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 18:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2010, at 5:34 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev2">&gt; &gt; 6. Could you send detail info about the issue (ini-file, mtt.log with verbose info and command line), we will look on that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me reproduce and simplify; I was using a fairly complex ini file... 
</span><br>
<p>Oh, I see what happened -- I ran MTT manually on the command line and stepped through each of the phases manually, just to watch what was happening in each phase.  Something like this
<br>
<p>mtt --file foo.ini --verbose --mpi-get
<br>
mtt --file foo.ini --verbose --mpi-install
<br>
mtt --file foo.ini --verbose --test-get
<br>
mtt --file foo.ini --verbose --test-build
<br>
mtt --file foo.ini --verbose --test-run
<br>
<p>If I run just a single mtt invocation, the submitting for mpi install and test build seems to work.  However, there seems to be some built-in assumption that analyze::performance must be called...?  I was just running the &quot;trivial&quot; suites and trying to submit that.  Here's the --verbose output (I added the &quot;GDS&quot; verbose lines):
<br>
<p>...lots of tests passing output
<br>
&nbsp;&nbsp;&nbsp;Test: cxx_ring, np=16, variant=8: Passed
<br>
&nbsp;&nbsp;&nbsp;Test: cxx_ring, np=16, variant=9: Passed
<br>
&nbsp;&nbsp;&nbsp;Test: cxx_ring, np=16, variant=10: Passed
<br>
&nbsp;&nbsp;&nbsp;Test: cxx_ring, np=16, variant=11: Passed
<br>
&nbsp;&nbsp;&nbsp;Test: cxx_ring, np=16, variant=12: Passed
<br>
&nbsp;&nbsp;&nbsp;### Test progress: 8 of 8 section test executables complete. Moving on.
<br>
<span class="quotelev2">&gt;&gt; Reporter MTTGDS: cached for later submit
</span><br>
*** Run test phase complete
<br>
*** Reporter finalizing
<br>
<span class="quotelev2">&gt;&gt; Submitted MPI Install to GDS
</span><br>
<span class="quotelev2">&gt;&gt; Submitted Test Build to GDS
</span><br>
*** WARNING: Could not load module MTT::Test::Analyze::Performance::: Can't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;locate MTT/Test/Analyze/Performance/.pm in @INC (@INC contains:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/jsquyres/svn/mtt/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/5.8.5/x86_64-linux-thread-multi /usr/lib/perl5/5.8.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/site_perl/5.8.5/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/site_perl/5.8.4/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/site_perl/5.8.3/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/site_perl/5.8.2/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/site_perl/5.8.1/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/site_perl/5.8.0/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/site_perl/5.8.5 /usr/lib/perl5/site_perl/5.8.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/site_perl/5.8.3 /usr/lib/perl5/site_perl/5.8.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/site_perl/5.8.1 /usr/lib/perl5/site_perl/5.8.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/site_perl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/vendor_perl/5.8.5/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/vendor_perl/5.8.4/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/vendor_perl/5.8.3/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/vendor_perl/5.8.2/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/vendor_perl/5.8.1/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib64/perl5/vendor_perl/5.8.0/x86_64-linux-thread-multi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/vendor_perl/5.8.5 /usr/lib/perl5/vendor_perl/5.8.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/vendor_perl/5.8.3 /usr/lib/perl5/vendor_perl/5.8.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/vendor_perl/5.8.1 /usr/lib/perl5/vendor_perl/5.8.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/perl5/vendor_perl .) at (eval 1089) line 3.
<br>
...and oodles more errors just like this
<br>
<span class="quotelev2">&gt;&gt; Submitted Test Run to GDS
</span><br>
*** Reporter finalized
<br>
<p>It looks like there is supposed to be some .pm file that I was supposed to have specified...?  I'm not quite sure why, though -- performance analyzers shouldn't be necessary for all tests.  We have oodles of correctness tests where performance isn't an issue, so that analysis is irrelevant.
<br>
<p>One further question -- the initial email from Michael said that both libYAML and Syck are necessary.  Why both?  yaml.org says that Syck is the &quot;old&quot; interface and libYAML is preferred these days.
<br>
<p>I'm testing bquery.pl -- unfortunately, I'm behind some proxies in the Cisco lab environment.  I'll see if I can add proxy support...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
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
