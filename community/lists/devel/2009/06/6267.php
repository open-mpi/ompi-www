<?
$subject_val = "Re: [OMPI devel] some question about OMPI communication infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 10:27:04 2009" -->
<!-- isoreceived="20090618142704" -->
<!-- sent="Thu, 18 Jun 2009 08:26:46 -0600" -->
<!-- isosent="20090618142646" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some question about OMPI communication infrastructure" -->
<!-- id="607C5CFA-CF93-4608-A458-DB6006CC129E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="627914.39222.qm_at_web8702.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some question about OMPI communication infrastructure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 10:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6268.php">David Robertson: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Previous message:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6273.php">Leo P.: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6273.php">Leo P.: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leo
<br>
<p>The MPI communications is contained in the ompi/mca/btl code area. The  
<br>
BTL's (Bit Transport Layer) actually moves the message data. Each BTL  
<br>
is responsible for opening its own connections - ORTE has nothing to  
<br>
do with it, except to transport out-of-band (OOB) messages to support  
<br>
creating the connection if that specific BTL requires it.
<br>
<p>If you are interested in TCP communications, you will find all of that  
<br>
code in ompi/mca/btl/tcp. It can be confusing down there, so expect to  
<br>
spend a little time trying to understand it. I believe Jeff has some  
<br>
documentation on the OMPI web site about it (perhaps a video?).
<br>
<p>The source/destination is embedded in the message, again done by each  
<br>
BTL since the receiver must be a BTL of the same type. Again, this has  
<br>
nothing to do with ORTE - it is purely up to the BTL. MPI  
<br>
communications are also coordinated by the PML, which is responsible  
<br>
for matching messages with posted receives. You might need to look at  
<br>
the ompi/mca/pml/ob1 code to understand how that works.
<br>
<p>Hope that gives you a starting point
<br>
Ralph
<br>
<p>On Jun 18, 2009, at 7:57 AM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to ask some questions about things I am having trouble  
</span><br>
<span class="quotelev1">&gt; understanding.
</span><br>
<span class="quotelev1">&gt; As far as my understanding of MPI_INIT function, I assumed MPI_INIT  
</span><br>
<span class="quotelev1">&gt; typically procedure resources required including the sockets. But  
</span><br>
<span class="quotelev1">&gt; now as I understand from the documentation that openMPI only  
</span><br>
<span class="quotelev1">&gt; allocated socket when the process has to send a message to a peer.  
</span><br>
<span class="quotelev1">&gt; If some one could let me where exactly in the code this is happening  
</span><br>
<span class="quotelev1">&gt; I would appreciate a lot. I guess this is happening in ORTE layer so  
</span><br>
<span class="quotelev1">&gt; I am spending time looking at it. But if some one could let me in  
</span><br>
<span class="quotelev1">&gt; which function this is happening it will help me a lot.
</span><br>
<span class="quotelev1">&gt; Also I think most of the MPI implementation embed source and  
</span><br>
<span class="quotelev1">&gt; destination address with the communication protocol. Am I right to  
</span><br>
<span class="quotelev1">&gt; assume openMPI does the same thing. Is this also happening in the  
</span><br>
<span class="quotelev1">&gt; ORTE layer.
</span><br>
<span class="quotelev1">&gt; Is there a documentation about this openMPI site? if there can  
</span><br>
<span class="quotelev1">&gt; someone please let me know the location of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Leo.P
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ICC World Twenty20 England '09 exclusively on YAHOO!  
</span><br>
<span class="quotelev1">&gt; CRICKET_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6268.php">David Robertson: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Previous message:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6273.php">Leo P.: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6273.php">Leo P.: "Re: [OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
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
