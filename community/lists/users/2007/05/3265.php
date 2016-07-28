<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 09:43:51 2007" -->
<!-- isoreceived="20070514134351" -->
<!-- sent="Mon, 14 May 2007 15:41:49 +0200" -->
<!-- isosent="20070514134149" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray" -->
<!-- id="200705141541.49960.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A452BF98-5486-4310-A12F-E4045CF35985_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 09:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3266.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3264.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>In reply to:</strong> <a href="3263.php">Jeff Squyres: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3266.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
On Monday 14 May 2007 14:59, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It doesn't give you stats about the underlying transport, though
</span><br>
<span class="quotelev1">&gt; (E.g., TCP-level stats).  For that, you would need to use PERUSE.
</span><br>
<span class="quotelev1">&gt; Rainer -- can you comment on how much info the tcp BTL reports via
</span><br>
<span class="quotelev1">&gt; PERUSE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 13, 2007, at 5:14 AM, Code Master wrote:
</span><br>
<span class="quotelev2">&gt; &gt; How can I profile the communication of MPI library such as number
</span><br>
<span class="quotelev2">&gt; &gt; of messages sent / received, UDP packet requested to receive and
</span><br>
<span class="quotelev2">&gt; &gt; sent and volume of data sent?
</span><br>
As Jeff noted, PERUSE will give You more MPI-internal information; 
<br>
<p>What You would like to see may be achieved with the 
<br>
PERUSE_COMM_REQ_XFER_CONTINUE event. The registered Event handler would be 
<br>
called by the ob1-pml upon every fragment being sent for a particular msg...
<br>
<p>However, this does not have to do with the amound of underlying data being 
<br>
send within the BTL (e.g. including overhead such as headers added)...
<br>
Is this, what You would be interested in?
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3266.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3264.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>In reply to:</strong> <a href="3263.php">Jeff Squyres: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3266.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
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
