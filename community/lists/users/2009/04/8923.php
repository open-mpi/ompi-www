<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 16:54:31 2009" -->
<!-- isoreceived="20090414205431" -->
<!-- sent="Tue, 14 Apr 2009 13:54:11 -0700" -->
<!-- isosent="20090414205411" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E4F7F3.7070309_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E4E40B.4080105_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 16:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<li><strong>In reply to:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the other hand, I assume the memory imbalance we're talking 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about is rather severe.  Much more than 2500 bytes to be 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; noticeable, I would think.  Is that really the situation you're 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; imagining?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The memory imbalance is drastic. I'm expecting 2 GB of memory use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per process. The heaving processes (13/16) use the expected amount 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of memory; the remainder (3/16) misbehaving processes use more than 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; twice as much memory. The specifics vary from run to run of course. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, yes, there is gigs of unexpected memory use to track down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Umm, how big of a message imbalance do you think you might have?  
</span><br>
<span class="quotelev2">&gt;&gt; (The inflection in my voice doesn't come out well in e-mail.)  
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, that sounds like, um, &quot;lots&quot; of 2500-byte messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message imbalance could be very large. Each process is running 
</span><br>
<span class="quotelev1">&gt; pretty close to its memory capacity. If a backlog of messages causes a 
</span><br>
<span class="quotelev1">&gt; buffer to grow to the point where the process starts swapping, it will 
</span><br>
<span class="quotelev1">&gt; very quickly fall very far behind. There are some billion 25-byte 
</span><br>
<span class="quotelev1">&gt; operations being sent in total or tens of millions MPI_Send messages 
</span><br>
<span class="quotelev1">&gt; (at 100 operations per MPI_Send).
</span><br>
<p>Okay.  Attached is a &quot;little&quot; note I wrote up illustrating memory 
<br>
profiling with Sun tools.  (It's &quot;big&quot; because I ended up including a 
<br>
few screenshots.)  The program has a bunch of one-way message traffic 
<br>
and some user-code memory allocation.  I then rerun with the receiver 
<br>
sleeping before jumping into action.  The messages back up and OMPI ends 
<br>
up allocating a bunch of memory.  The tools show you who (user or OMPI) 
<br>
is allocating how much memory and how big of a message backlog develops 
<br>
and how the sender starts stalling out (which is a good thing!).  
<br>
Anyhow, a useful exercise for me and hopefully helpful for you.
<br>
<p>
<br><hr>
<ul>
<li>application/x-cpio attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8923/memory-profiling.tar.gz">memory-profiling.tar.gz</a>
</ul>
<!-- attachment="memory-profiling.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8922.php">Shaun Jackman: "Re: [OMPI users] Problem with MPI_File_read()"</a>
<li><strong>In reply to:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
