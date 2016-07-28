<?
$subject_val = "Re: [OMPI users] SIGSEGV on MPI_Test";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 07:37:01 2012" -->
<!-- isoreceived="20120128123701" -->
<!-- sent="Sat, 28 Jan 2012 07:36:56 -0500" -->
<!-- isosent="20120128123656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV on MPI_Test" -->
<!-- id="4F43CF38-9CD0-484D-BB80-3A81D04B59D7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1326384331.8226.YahooMailNeo_at_web29604.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV on MPI_Test<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 07:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18309.php">Jeff Squyres: "Re: [OMPI users] unknown af_family recieved errors..."</a>
<li><strong>Previous message:</strong> <a href="18307.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the long delay in replying -- this mail got lost in my usual INBOX overflow, etc.
<br>
<p><p>On Jan 12, 2012, at 11:05 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello Community:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running into a strange problem. I get a SIGSEGV when I try to execute MPI_Test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==21076== Process terminating with default action of signal 11 (SIGSEGV)
</span><br>
<span class="quotelev1">&gt; ==21076==  Bad permissions for mapped region at address 0x43AEE1
</span><br>
<span class="quotelev1">&gt; ==21076==    at 0x509B957: ompi_request_default_test (req_test.c:68)
</span><br>
<span class="quotelev1">&gt; ==21076==    by 0x50EDEBB: PMPI_Test (ptest.c:59)
</span><br>
<span class="quotelev1">&gt; ==21076==    by 0x44210D: InterProcessorTransmit::StartTransmission() (InterProcessorTransmit.cpp:111)
</span><br>
<p>The problem is in your code; see below.
<br>
<p><span class="quotelev1">&gt; Here is the relevant piece of code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        for ( this-&gt;dbIterator = localdb.begin( ) ; this-&gt;dbIterator != localdb.end( ); this-&gt;dbIterator++)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             this-&gt;TransmissionDetails = (this-&gt;dbIterator)-&gt;second;
</span><br>
<span class="quotelev1">&gt;             SendComplete = 0;
</span><br>
<span class="quotelev1">&gt;             UniqueIDtoSendto = std::get&lt;0&gt;(this-&gt;TransmissionDetails);
</span><br>
<span class="quotelev1">&gt;             RecepientNode = (this-&gt;dbIterator)-&gt;first;
</span><br>
<span class="quotelev1">&gt;               Isend_request = MPI::COMM_WORLD.Issend(this-&gt;transmitbuffer, this-&gt;transmissionsize, MPI_BYTE, (this-&gt;dbIterator)-&gt;first, std::get&lt;0&gt;(this-&gt;TransmissionDetails));
</span><br>
<span class="quotelev1">&gt; /*This is line 111 */MPI_Test(&amp;(this-&gt;Isend_request), &amp;(this-&gt;SendComplete), &amp;(this-&gt;ISend_status));
</span><br>
<p>You assigned the request to Isend_request, but then tested this-&gt;Isend_request.
<br>
<p>Those are two different variables.  Your debugger screenshot shows that this-&gt;Isend_request was NULL (i.e., had a value of 0), so when OMPI tried to dereference through it, it segv'ed.
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
<li><strong>Next message:</strong> <a href="18309.php">Jeff Squyres: "Re: [OMPI users] unknown af_family recieved errors..."</a>
<li><strong>Previous message:</strong> <a href="18307.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
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
