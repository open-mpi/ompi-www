<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 10:21:43 2006" -->
<!-- isoreceived="20060103152143" -->
<!-- sent="Tue, 3 Jan 2006 07:21:35 -0800 (PST)" -->
<!-- isosent="20060103152135" -->
<!-- name="Enzo" -->
<!-- email="m_enzo69_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Rendezvous Question" -->
<!-- id="20060103152135.98149.qmail_at_web35414.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BA351674-8C0C-4EE7-BEDE-F6D946C0893E_at_open-mpi.org" -->
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
<strong>From:</strong> Enzo (<em>m_enzo69_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 10:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Previous message:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Brian Barrett: "Re: [O-MPI users] Rendezvous Question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--- Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 2, 2006, at 7:11 PM, Enzo wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There are several mentions of Rendezvous in
</span><br>
<span class="quotelev1">&gt; various places.  
</span><br>
<span class="quotelev2">&gt; &gt; However, I cannot find out how to start using it.
</span><br>
<span class="quotelev1">&gt; I am assuming  
</span><br>
<span class="quotelev2">&gt; &gt; that open-mpi's Rendezvous is the same as Zero
</span><br>
<span class="quotelev1">&gt; Config (a.k.a  
</span><br>
<span class="quotelev2">&gt; &gt; Bonjour in Apple speak)? If not, are there plans
</span><br>
<span class="quotelev1">&gt; to use Zero Config  
</span><br>
<span class="quotelev2">&gt; &gt; to find machines.resources?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI does not use Rendezvous / Zero Config /
</span><br>
<span class="quotelev1">&gt; Bonjour in any way.   
</span><br>
<span class="quotelev1">&gt; Mentions of rendezvous on the Open MPI web page
</span><br>
<span class="quotelev1">&gt; refer to a protocol  
</span><br>
<span class="quotelev1">&gt; used for transmitting messages between processes. 
</span><br>
<span class="quotelev1">&gt; The sending  
</span><br>
<span class="quotelev1">&gt; process sends a short header fragment to the
</span><br>
<span class="quotelev1">&gt; receiving process, which  
</span><br>
<span class="quotelev1">&gt; then sends an acknowledgment when the receiving
</span><br>
<span class="quotelev1">&gt; buffer is ready,  
</span><br>
<span class="quotelev1">&gt; allowing the sending process to send the rest of the
</span><br>
<span class="quotelev1">&gt; data.  The  
</span><br>
<span class="quotelev1">&gt; protocol saves the MPI implementation from copying
</span><br>
<span class="quotelev1">&gt; data for  
</span><br>
<span class="quotelev1">&gt; unexpected receives and provides the required
</span><br>
<span class="quotelev1">&gt; synchronization for  
</span><br>
<span class="quotelev1">&gt; MPI_Ssend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's probably possible to use Bonjour / Zero Config
</span><br>
<span class="quotelev1">&gt; for resource  
</span><br>
<span class="quotelev1">&gt; discovery for Open MPI, but it really only helps in
</span><br>
<span class="quotelev1">&gt; resource  
</span><br>
<span class="quotelev1">&gt; discovery -- scheduling and allocating resources
</span><br>
<span class="quotelev1">&gt; would still have to  
</span><br>
<span class="quotelev1">&gt; be done.  We do, however, support the use of Apple's
</span><br>
<span class="quotelev1">&gt; XGrid system for  
</span><br>
<span class="quotelev1">&gt; job startup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>Thanks that explains it and why it didn't look like
<br>
zero config (from the source code). I've been using
<br>
XGrid but the big problem with that is that I don't
<br>
know how many nodes are actually available under the
<br>
new version. Zero config can be used on various
<br>
systems and it might not be to hard to make some
<br>
simple daemon that receives requests and then spawns
<br>
the job. Security would not be the best however. 
<br>
<p>enzo
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________ 
<br>
Yahoo! for Good - Make a difference this year. 
<br>
<a href="http://brand.yahoo.com/cybergivingweek2005/">http://brand.yahoo.com/cybergivingweek2005/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Previous message:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0458.php">Brian Barrett: "Re: [O-MPI users] Rendezvous Question"</a>
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
