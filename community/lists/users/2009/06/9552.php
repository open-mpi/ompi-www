<?
$subject_val = "Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 07:30:24 2009" -->
<!-- isoreceived="20090605113024" -->
<!-- sent="Fri, 5 Jun 2009 07:30:16 -0400" -->
<!-- isosent="20090605113016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?" -->
<!-- id="9ECE6725-37E0-45D8-9C35-C60E0F981F08_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8acca4520906040053x5e5c8800tc7494c27552a381b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to overlap computation and transfer using MPIover TCP/Ethernet?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 07:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9537.php">Lars Andersson: "[OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2009, at 3:53 AM, Lars Andersson wrote:
<br>
<p><span class="quotelev1">&gt; In my second test, I simply put a sleep(3) at point 2), and expected
</span><br>
<span class="quotelev1">&gt; the MPI_Wait() call at 3) to finish almost instantly, since I assumed
</span><br>
<span class="quotelev1">&gt; that the message would have been transferred during the sleep. To my
</span><br>
<span class="quotelev1">&gt; disappointment tough, it took more or less the same time to finish the
</span><br>
<span class="quotelev1">&gt; MPI_Wait as without any sleep.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>As you found by googling, and as Bogdan infers, Open MPI doesn't  
<br>
currently make much progress over TCP-based networks &quot;in the  
<br>
background.&quot;  And you're right that putting an MPI_WAIT in a progress  
<br>
thread would cause that thread to spin heavily, effectively taking  
<br>
much of your CPU cycles away from you, and possibly even having other  
<br>
bad effects (e.g., cache thrashing, context switching, etc.).
<br>
<p>I'd say that your own workaround here is to intersperse MPI_TEST's  
<br>
periodically.  This will trigger OMPI's pipelined protocol for large  
<br>
messages, and should allow partial bursts of progress while you're  
<br>
assumedly off doing useful work.  If this is difficult because the  
<br>
work is being done in library code that you can't change, then perhaps  
<br>
a pre-spawned &quot;work&quot; through could be used to call MPI_TEST  
<br>
periodically.  That way, it won't steal huge ammounts of CPU cycles  
<br>
(like MPI_WAIT would).  You still might get some cache thrashing,  
<br>
context switching, etc. -- YMMV.
<br>
<p>As for exactly how many / how often you should call MPI_TEST, that is  
<br>
going to be up to you. It's going to depend on a lot of factors -- how  
<br>
big the message is, how well synchronized you are with the receiver,  
<br>
what strategy you use to call MPI_TEST, etc.
<br>
<p>Open MPI may someday treat this better to either have a blocking form  
<br>
of MPI_WAIT (i.e., not spinning, or spinning considerably less) or  
<br>
have true TCP progress in the background.  But if I had to guess, I'd  
<br>
say that we'll likely do the former before the latter.
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
<li><strong>Next message:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>Previous message:</strong> <a href="9551.php">jody: "Re: [OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>In reply to:</strong> <a href="9537.php">Lars Andersson: "[OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
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
