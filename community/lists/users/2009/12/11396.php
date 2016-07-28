<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 05:33:59 2009" -->
<!-- isoreceived="20091203103359" -->
<!-- sent="Thu, 03 Dec 2009 10:33:51 +0000" -->
<!-- isosent="20091203103351" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="1259836431.6352.106.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="05BC6B6E-76C4-4EF5-888D-8E39E70E8D73_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 05:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11397.php">Richard Treumann: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11395.php">Paul Kapinos: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11397.php">Richard Treumann: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11397.php">Richard Treumann: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-12-02 at 13:11 -0500, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; On Dec 1, 2009, at 11:15 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2009-12-01 at 10:46 -0500, Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached code, is an example where openmpi/1.3.2 will lock up, if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The code loops over recv from all processors on rank 0 and sends from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev3">&gt; &gt;&gt; why not.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note yes I know we can do the same thing with a gather, this is a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; simple case to demonstrate the issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the problem with this code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What are you increasing the eager limit from and too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same value as ethernet on our system,
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_eager_limit 655360 --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_max_send_size 655360 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Huge values compared to the defaults, but works,
</span><br>
<p>My understanding of the code is that each message will be 256k long and
<br>
the code pretty much guarantees that at some point there will be 46
<br>
messages in the queue in front of the one you are looking to receive
<br>
which makes a total of 11.5Mb, slightly less if you take shared memory
<br>
into account.
<br>
<p>If the MPI_SEND isn't blocking then each rank will send 50 messages to
<br>
rank zero and you'll have 2000 messages and 500Mb of data being received
<br>
with the message you want being somewhere towards the end of the queue.
<br>
<p>These numbers are far from huge but then compared to an eager limit of
<br>
64k they aren't small either.
<br>
<p>I suspect the eager limit is being reached on COMM_WORLD rank 0 and it's
<br>
not pulling any more messages off the network pending some of the
<br>
existing ones being out of the queue but they never will be because the
<br>
message being waited for is one that's stuck on the network.  As I say
<br>
the message queue for rank 0 when it's deadlocked would be interesting
<br>
to look at.
<br>
<p>In summary this code makes heavy use of unexpected messages and network
<br>
buffering, it's not surprising to me that it only works with eager
<br>
limits set fairly high.
<br>
<p>Ashley,
<br>
<pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11397.php">Richard Treumann: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11395.php">Paul Kapinos: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="11373.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11397.php">Richard Treumann: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11397.php">Richard Treumann: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
