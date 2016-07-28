<?
$subject_val = "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 18:04:43 2009" -->
<!-- isoreceived="20090616220443" -->
<!-- sent="Tue, 16 Jun 2009 18:04:37 -0400" -->
<!-- isosent="20090616220437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="66FBD794-4275-4252-848B-8BE777145939_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6B0DF8B2-F7DE-48E7-9792-427BF9D9D8FF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 18:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6250.php">Brad Benton: "[OMPI devel] 1.3.3 Release Schedule"</a>
<li><strong>Previous message:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 12, 2009, at 3:56 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The firewall should already be solved. Basically, you have to define  
</span><br>
<span class="quotelev1">&gt; a set of ports in your firewall that will let TCP messages pass  
</span><br>
<span class="quotelev1">&gt; through, and then tell OMPI to use those ports for both the TCP BTL  
</span><br>
<span class="quotelev1">&gt; and the OOB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info --params btl tcp&quot; - will tell you the right param to set  
</span><br>
<span class="quotelev1">&gt; for the TCP BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info --params oob tcp&quot; will do the same for the OOB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, that -does- leave a hole in your firewall that any TCP  
</span><br>
<span class="quotelev1">&gt; message can exploit. :-/  You could look at more secure alternative  
</span><br>
<span class="quotelev1">&gt; ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how to solve the NAT problem as it boils down to how to  
</span><br>
<span class="quotelev1">&gt; specify the names/IP addresses of the nodes behind the NAT. Someone  
</span><br>
<span class="quotelev1">&gt; who understands NATs better can help you there - I know there is a  
</span><br>
<span class="quotelev1">&gt; way to do it, but I've never played with it.
</span><br>
<p>This sounds suspiciously like you want to route MPI messages (rather  
<br>
than just send them peer-to-peer).  Be warned that that's somewhat of  
<br>
a non-trivial exercise...
<br>
<p>Alternatively, if you can make outbound connections from behind your  
<br>
NAT to in front of your NAT, that may work.  You'll need to twonk  
<br>
around in ompi/mca/btl/tcp/ to make that happen.  There are likely  
<br>
ORTE implications as well -- twonking around in ore/mca/oob/tcp/.  But  
<br>
there may be deeper implications than just the connection scheme --  
<br>
how will you launch the MPI processes, for example?
<br>
<p>If you have multiple processes behind multiple different NATs, the  
<br>
connection scheme will become more complicated -- rendezvous, etc.
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
<li><strong>Next message:</strong> <a href="6250.php">Brad Benton: "[OMPI devel] 1.3.3 Release Schedule"</a>
<li><strong>Previous message:</strong> <a href="6248.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
<li><strong>Reply:</strong> <a href="6266.php">Leo P.: "[OMPI devel] some question about OMPI communication infrastructure"</a>
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
