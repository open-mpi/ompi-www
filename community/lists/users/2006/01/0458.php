<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  2 23:24:39 2006" -->
<!-- isoreceived="20060103042439" -->
<!-- sent="Mon, 2 Jan 2006 23:24:32 -0500" -->
<!-- isosent="20060103042432" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Rendezvous Question" -->
<!-- id="BA351674-8C0C-4EE7-BEDE-F6D946C0893E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060103001105.54874.qmail_at_web35413.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-02 23:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Enzo: "[O-MPI users] Rendezvous Question"</a>
<li><strong>In reply to:</strong> <a href="0457.php">Enzo: "[O-MPI users] Rendezvous Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>Reply:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 2, 2006, at 7:11 PM, Enzo wrote:
<br>
<p><span class="quotelev1">&gt; There are several mentions of Rendezvous in various places.  
</span><br>
<span class="quotelev1">&gt; However, I cannot find out how to start using it. I am assuming  
</span><br>
<span class="quotelev1">&gt; that open-mpi's Rendezvous is the same as Zero Config (a.k.a  
</span><br>
<span class="quotelev1">&gt; Bonjour in Apple speak)? If not, are there plans to use Zero Config  
</span><br>
<span class="quotelev1">&gt; to find machines.resources?
</span><br>
<p>Open MPI does not use Rendezvous / Zero Config / Bonjour in any way.   
<br>
Mentions of rendezvous on the Open MPI web page refer to a protocol  
<br>
used for transmitting messages between processes.  The sending  
<br>
process sends a short header fragment to the receiving process, which  
<br>
then sends an acknowledgment when the receiving buffer is ready,  
<br>
allowing the sending process to send the rest of the data.  The  
<br>
protocol saves the MPI implementation from copying data for  
<br>
unexpected receives and provides the required synchronization for  
<br>
MPI_Ssend.
<br>
<p>It's probably possible to use Bonjour / Zero Config for resource  
<br>
discovery for Open MPI, but it really only helps in resource  
<br>
discovery -- scheduling and allocating resources would still have to  
<br>
be done.  We do, however, support the use of Apple's XGrid system for  
<br>
job startup.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0457.php">Enzo: "[O-MPI users] Rendezvous Question"</a>
<li><strong>In reply to:</strong> <a href="0457.php">Enzo: "[O-MPI users] Rendezvous Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>Reply:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
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
