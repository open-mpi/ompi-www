<?
$subject_val = "Re: [MTT users] Help starting out with MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 11:02:21 2008" -->
<!-- isoreceived="20080128160221" -->
<!-- sent="Mon, 28 Jan 2008 11:01:53 -0500" -->
<!-- isosent="20080128160153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Help starting out with MTT" -->
<!-- id="EFB53FB1-3601-410F-9F49-ACED2ACFE96C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="005901c85f98$fb239520$bcf3a580_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [MTT users] Help starting out with MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 11:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0494.php">Tim Prins: "[MTT users] Reporter problems"</a>
<li><strong>Previous message:</strong> <a href="0492.php">Jennis Pruett: "[MTT users] Help starting out with MTT"</a>
<li><strong>In reply to:</strong> <a href="0492.php">Jennis Pruett: "[MTT users] Help starting out with MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2008, at 4:26 PM, Jennis Pruett wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to find something that is a beginner's guide/configure/ 
</span><br>
<span class="quotelev1">&gt; explanation to using MTT.
</span><br>
<span class="quotelev1">&gt; Anything like that out there? I've searched the website, finding  
</span><br>
<span class="quotelev1">&gt; nothing.
</span><br>
<p>All of our docs are on the wiki; unfortunately, we don't have much in  
<br>
the way of troubleshooting docs [yet].
<br>
<p><span class="quotelev1">&gt; I do have access to the mtt database now, and it ran along using
</span><br>
<span class="quotelev1">&gt; client/mtt --file samples/ompi-core-template.ini --debug
</span><br>
<span class="quotelev1">&gt; until it stopped with the following.
</span><br>
<p><span class="quotelev1">&gt; &lt;cut&gt;
</span><br>
<p>This looks like a quoting or parentheses problem.  Can you send your  
<br>
entire .ini file?
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.5rc2r16941] / [gcc  
</span><br>
<span class="quotelev1">&gt; warnings]
</span><br>
<span class="quotelev1">&gt; Found MPI details: [mpi details: open mpi]
</span><br>
<span class="quotelev1">&gt; Using [mpi details: open mpi] with [MPI Install: gcc warnings]
</span><br>
<span class="quotelev1">&gt; Evaluating: # We can exit if the test passed or was skipped (i.e.,  
</span><br>
<span class="quotelev1">&gt; there's
</span><br>
<span class="quotelev1">&gt;    no need
</span><br>
<span class="quotelev1">&gt;    # to cleanup).
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o  
</span><br>
<span class="quotelev1">&gt; &quot;$MTT_TEST_RUN_RESULT&quot; =
</span><br>
<span class="quotelev1">&gt;    &quot;skipped&quot;; then
</span><br>
<span class="quotelev1">&gt;        exit 0
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;        args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt;    elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;        args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev1">&gt;    mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostfile()&quot;)&quot;,             &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;-- 
</span><br>
<span class="quotelev1">&gt; host &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() &amp;enumerate(         &quot;--mca  
</span><br>
<span class="quotelev1">&gt; btl
</span><br>
<span class="quotelev1">&gt;    sm,tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;),       &quot;
</span><br>
<span class="quotelev1">&gt;    --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt;    btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;,         &quot;--mca btl
</span><br>
<span class="quotelev1">&gt;    tcp,self&amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;),   &quot; --mca
</span><br>
<span class="quotelev1">&gt;    btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt;    btl_openib_max_btls 1&quot;, &quot;&quot;)&quot;) --prefix &amp;test_prefix()  
</span><br>
<span class="quotelev1">&gt; &amp;test_executable()
</span><br>
<span class="quotelev1">&gt;    &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; chdir
</span><br>
<span class="quotelev1">&gt;    /usr/projects/hpctools/jennyp/ompi-core-testers/installs/3lYp/ 
</span><br>
<span class="quotelev1">&gt; tests/ones
</span><br>
<span class="quotelev1">&gt;    ided/onesided
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;    Simple
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted during require: MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;     Simple: syntax error at (eval 11095) line 4, near &quot;require
</span><br>
<span class="quotelev1">&gt;     MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt;     Simple
</span><br>
<span class="quotelev1">&gt;     &quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0494.php">Tim Prins: "[MTT users] Reporter problems"</a>
<li><strong>Previous message:</strong> <a href="0492.php">Jennis Pruett: "[MTT users] Help starting out with MTT"</a>
<li><strong>In reply to:</strong> <a href="0492.php">Jennis Pruett: "[MTT users] Help starting out with MTT"</a>
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
