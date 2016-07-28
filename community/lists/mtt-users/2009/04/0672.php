<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 11:00:17 2009" -->
<!-- isoreceived="20090408150017" -->
<!-- sent="Wed, 8 Apr 2009 11:00:11 -0400" -->
<!-- isosent="20090408150011" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="20090408150010.GN26923_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1239202291.6617.44.camel_at_T42" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 11:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr/08/2009 11:51:31AM, Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just forgot to mention that removing @ from &quot;if ($#{@$ret} &lt; 0) {&quot; it
</span><br>
<span class="quotelev1">&gt; worked fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That might be masking a problem in your INI file, but it is hard to
<br>
know for sure without seeing your INI file.
<br>
<p><p><span class="quotelev1">&gt; On Wed, 2009-04-08 at 11:36 -0300, Rafael Folco wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Well, I took a look at /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This piece of code looks wrong to me:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  if ($#{@$ret} &lt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ret references an array
</span><br>
<span class="quotelev2">&gt; &gt; @$ret points to the first element of this array
</span><br>
<span class="quotelev2">&gt; &gt; $# returns the number of elements
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<p>?
<br>
<p>@$ret is the array, e.g.,
<br>
<p>$ perl -e 'use Data::Dumper; $x = [1,2,3]; print Dumper @$x;'
<br>
$VAR1 = 1;
<br>
$VAR2 = 2;
<br>
$VAR3 = 3;
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev2">&gt; &gt; So this line is trying to count elements of the first element??! Doesn't
</span><br>
<span class="quotelev2">&gt; &gt; make sense. Correct me if I am wrong, what am I missing here ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;if ($#{$ret} &lt; 0) {&quot; would be correct, without @. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe &quot;strict refs&quot; has been forced somewhere on SLES11... I also
</span><br>
<span class="quotelev2">&gt; &gt; tried on other distro and it works fine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rafael
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2009-04-07 at 15:53 -0300, Rafael Folco wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm trying to run MTT on SLES11, but I am getting an error message
</span><br>
<span class="quotelev3">&gt; &gt; &gt; during the RUN phase and I can't figure out what is the problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     string (&quot;183&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What I could see was that this error is nothing specific to any
</span><br>
<span class="quotelev3">&gt; &gt; &gt; particular test, it happens at certain points during the RUN phase.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, the BUILD phase has been completed successfully for all tests.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anybody have already seen this? Any thoughts ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rafael
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rafael Folco
</span><br>
<span class="quotelev1">&gt; OpenHPC / Test Lead
</span><br>
<span class="quotelev1">&gt; IBM Linux Technology Center
</span><br>
<span class="quotelev1">&gt; E-Mail: rfolco_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
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
