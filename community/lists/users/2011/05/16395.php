<?
$subject_val = "Re: [OMPI users] OMPI vs. network socket communcation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 08:32:19 2011" -->
<!-- isoreceived="20110502123219" -->
<!-- sent="Mon, 02 May 2011 08:34:33 -0400" -->
<!-- isosent="20110502123433" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI vs. network socket communcation" -->
<!-- id="4DBEA4D9.1010102_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w9B3C4A9491AB74F9BEE7ACB9C0_at_phx.gbl" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 08:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16396.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16394.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="../../2011/04/16392.php">Jack Bryan: "[OMPI users] OMPI vs. network socket communcation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16400.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>Reply:</strong> <a href="16400.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/30/2011 08:52 PM, Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; Hi, All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the relationship between MPI communication and socket 
</span><br>
<span class="quotelev1">&gt; communication ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
MPI may use socket communications to do communications between two 
<br>
processes.  Aside from that they are used for different purposes.
<br>
<span class="quotelev1">&gt; Is the network socket programming better than MPI ?
</span><br>
Depends on what you are trying to do.  If you are writing a parallel 
<br>
program that may run in multiple environments with different types of 
<br>
performing protocols available for its use then MPI is probably better.  
<br>
If you are looking to do simple client/server type programming then 
<br>
socket program might have an advantage.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a newbie of network socket programming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know which one is better for parallel/distributed computing ?
</span><br>
IMO MPI.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that network socket is unix-based file communication between 
</span><br>
<span class="quotelev1">&gt; server and client.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If they can also be used for parallel computing, how MPI can work 
</span><br>
<span class="quotelev1">&gt; better than them ?
</span><br>
There is a lot of stuff that MPI does behind the curtain to make a 
<br>
parallel applications life a lot easier.  As far as performance MPI will 
<br>
not perform better than sockets if it is using sockets as the underlying 
<br>
model.  However, the performance difference should be negligible which 
<br>
makes all the other stuff MPI does for you a big win.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know MPI is for homogeneous cluster system and network socket is 
</span><br>
<span class="quotelev1">&gt; based on internet TCP/IP.
</span><br>
What do you mean by homogeneous cluster?  There are some MPIs that can 
<br>
work among different platforms and even different OSes (though some 
<br>
initial setup may be necessary).
<br>
<p>Hope this helps,
<br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-16395/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="../../att-16395/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16396.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16394.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="../../2011/04/16392.php">Jack Bryan: "[OMPI users] OMPI vs. network socket communcation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16400.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>Reply:</strong> <a href="16400.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
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
