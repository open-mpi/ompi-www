<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:36:28 2009" -->
<!-- isoreceived="20090408143628" -->
<!-- sent="Wed, 08 Apr 2009 11:36:05 -0300" -->
<!-- isosent="20090408143605" -->
<!-- name="Rafael Folco" -->
<!-- email="rfolco_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="1239201365.6617.39.camel_at_T42" -->
<!-- inreplyto="1239130429.6909.29.camel_at_T42" -->
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
<strong>Date:</strong> 2009-04-08 10:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0669.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I took a look at /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
<br>
<p>This piece of code looks wrong to me:
<br>
<p>&nbsp;if ($#{@$ret} &lt; 0) {
<br>
<p>$ret references an array
<br>
@$ret points to the first element of this array
<br>
$# returns the number of elements
<br>
<p>So this line is trying to count elements of the first element??! Doesn't
<br>
make sense. Correct me if I am wrong, what am I missing here ?
<br>
<p>&quot;if ($#{$ret} &lt; 0) {&quot; would be correct, without @. 
<br>
<p>I believe &quot;strict refs&quot; has been forced somewhere on SLES11... I also
<br>
tried on other distro and it works fine.
<br>
<p>Thanks,
<br>
<p>Rafael
<br>
<p>On Tue, 2009-04-07 at 15:53 -0300, Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run MTT on SLES11, but I am getting an error message
</span><br>
<span class="quotelev1">&gt; during the RUN phase and I can't figure out what is the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev1">&gt;     string (&quot;183&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev1">&gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I could see was that this error is nothing specific to any
</span><br>
<span class="quotelev1">&gt; particular test, it happens at certain points during the RUN phase.
</span><br>
<span class="quotelev1">&gt; Also, the BUILD phase has been completed successfully for all tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anybody have already seen this? Any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafael
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0669.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
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
