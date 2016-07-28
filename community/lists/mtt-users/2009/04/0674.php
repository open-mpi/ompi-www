<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 14:50:48 2009" -->
<!-- isoreceived="20090408185048" -->
<!-- sent="Wed, 8 Apr 2009 14:50:41 -0400" -->
<!-- isosent="20090408185041" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="E7FD839BAFD8CA499213A6EE26F2368004CBA8_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[MTT users] MTT Error on SLES11" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 14:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Maybe in reply to:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Btw, I agree w ethan: the syntax looks good to me. @ tells how to cast the reference; it doesn't dereference to get the first element. 
<br>

<br>
But we need to see your ini file to be sure (I don't have the mtt code here w me to check it for sure). 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: mtt-users-bounces_at_[hidden] &lt;mtt-users-bounces_at_[hidden]&gt;
<br>
To: rfolco_at_[hidden] &lt;rfolco_at_[hidden]&gt;; General user list for the MPI Testing Tool &lt;mtt-users_at_[hidden]&gt;
<br>
Sent: Wed Apr 08 14:15:54 2009
<br>
Subject: Re: [MTT users] MTT Error on SLES11
<br>

<br>
On Wed, Apr/08/2009 11:36:05AM, Rafael Folco wrote:
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

<br>
How do perl -V differ between the two distros?
<br>

<br>
I can not reproduce the error on a SLES 10 machine.
<br>

<br>
Could you run MTT with the --debug option and send the output with the
<br>
line 75 perl error? That might help me determine which INI param is
<br>
responsible for the error.
<br>

<br>
-Ethan
<br>

<br>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
_______________________________________________
<br>
mtt-users mailing list
<br>
mtt-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Maybe in reply to:</strong> <a href="0668.php">Rafael Folco: "[MTT users] MTT Error on SLES11"</a>
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
