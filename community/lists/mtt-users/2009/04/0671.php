<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:51:54 2009" -->
<!-- isoreceived="20090408145154" -->
<!-- sent="Wed, 08 Apr 2009 11:51:31 -0300" -->
<!-- isosent="20090408145131" -->
<!-- name="Rafael Folco" -->
<!-- email="rfolco_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="1239202291.6617.44.camel_at_T42" -->
<!-- inreplyto="1239201365.6617.39.camel_at_T42" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT Error on SLES11<br>
<strong>From:</strong> Rafael Folco (<em>rfolco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 10:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0672.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just forgot to mention that removing @ from &quot;if ($#{@$ret} &lt; 0) {&quot; it
<br>
worked fine.
<br>
<p><p><p>On Wed, 2009-04-08 at 11:36 -0300, Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; Well, I took a look at /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This piece of code looks wrong to me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if ($#{@$ret} &lt; 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ret references an array
</span><br>
<span class="quotelev1">&gt; @$ret points to the first element of this array
</span><br>
<span class="quotelev1">&gt; $# returns the number of elements
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So this line is trying to count elements of the first element??! Doesn't
</span><br>
<span class="quotelev1">&gt; make sense. Correct me if I am wrong, what am I missing here ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;if ($#{$ret} &lt; 0) {&quot; would be correct, without @. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe &quot;strict refs&quot; has been forced somewhere on SLES11... I also
</span><br>
<span class="quotelev1">&gt; tried on other distro and it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-04-07 at 15:53 -0300, Rafael Folco wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run MTT on SLES11, but I am getting an error message
</span><br>
<span class="quotelev2">&gt; &gt; during the RUN phase and I can't figure out what is the problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev2">&gt; &gt;     string (&quot;183&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev2">&gt; &gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What I could see was that this error is nothing specific to any
</span><br>
<span class="quotelev2">&gt; &gt; particular test, it happens at certain points during the RUN phase.
</span><br>
<span class="quotelev2">&gt; &gt; Also, the BUILD phase has been completed successfully for all tests.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Anybody have already seen this? Any thoughts ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rafael
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Rafael Folco
OpenHPC / Test Lead
IBM Linux Technology Center
E-Mail: rfolco_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0672.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
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
