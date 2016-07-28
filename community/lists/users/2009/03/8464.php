<?
$subject_val = "Re: [OMPI users] tests for heterogenous installations?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 13:24:31 2009" -->
<!-- isoreceived="20090316172431" -->
<!-- sent="Mon, 16 Mar 2009 13:23:34 -0400" -->
<!-- isosent="20090316172334" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tests for heterogenous installations?" -->
<!-- id="3DDE72B2-0C7C-4379-9FD5-C3A6FCE68A60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49BD3BC4.3040904_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tests for heterogenous installations?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 13:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8455.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Reply:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2009, at 1:32 PM, Yury Tarasievich wrote:
<br>
<p><span class="quotelev1">&gt; Could you please elaborate? I'm not experienced
</span><br>
<span class="quotelev1">&gt; with MPI and I need to test a heterogenous
</span><br>
<span class="quotelev1">&gt; installation, to see whether the computational
</span><br>
<span class="quotelev1">&gt; task is actually broken down and computed in
</span><br>
<span class="quotelev1">&gt; collaborative manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It sounds like you're asking an application-specific question.   
<br>
Specifically, &quot;how will my application behave in a heterogeneous  
<br>
scenario?&quot;  That can really only be answered by your application.
<br>
<p>All that Open MPI gives you is the ability to start up/shut down  
<br>
processes and reliable messaging between them.  How your application  
<br>
decomposes the problem that it's solving and and distributes the load  
<br>
between different machines is up to the application.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8455.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Reply:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
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
