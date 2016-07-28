<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 09:29:55 2009" -->
<!-- isoreceived="20091203142955" -->
<!-- sent="Thu, 3 Dec 2009 09:29:25 -0500" -->
<!-- isosent="20091203142925" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="OF0D315C2E.61A3807F-ON85257681.004B86AF-85257681.004F9900_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1259836431.6352.106.camel_at_alpha" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 09:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI standard compliant management of eager send requires that this program
<br>
work. There is nothing that says &quot;unless eager limit is set too high/low.&quot;
<br>
Honoring this requirement in an MPI implementation can be costly. There are
<br>
practical reasons to pass up this requirement because most applications do
<br>
not need it.
<br>
<p>I would like to see the MPI Forum find a way to relax this requirement and
<br>
I have made a proposal that would do so that would not invalidate any
<br>
current MPI program.
<br>
<p>&nbsp;I would consider simply removing this requirement if the MPI Forum decides
<br>
that it is OK for some valid MPI 2.2 programs to be invalid MPI 3.0
<br>
programs but I hope the Forum does not go the direction of breaking
<br>
existing valid MPI programs.
<br>
<p>Ashley says below:  &quot;If the MPI_SEND isn't blocking then each rank will
<br>
send 50 messages to rank zero and you'll have 2000 messages ....&quot;
<br>
<p>What the standard says is MPI_SEND must block before there are more
<br>
messages at the destination than it can manage.
<br>
<p>I do not think ignoring that the standard  requires this program to work is
<br>
a very good solution.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p><p>Here is what the standard says:
<br>
<p>Section 3.4 MPI 2.2 page 39:1..7
<br>
<p>The send call described in Section 3.2.1 uses the standard communication
<br>
mode. In this mode, it is up to MPI to decide whether outgoing messages
<br>
will be buffered. MPI may buffer outgoing messages. In such a case, the
<br>
send call may complete before a matching receive is invoked. On the other
<br>
hand, buffer space may be unavailable, or MPI may choose not to buffer
<br>
outgoing messages, for performance reasons. In this case, the send call
<br>
will not complete until a matching receive has been posted, and the data
<br>
has been moved to the receiver.
<br>
<p>Section 3.5 MPI 2.2 page 44:8..19
<br>
<p>A buffered send operation that cannot complete because of a lack of buffer
<br>
space is erroneous. When such a situation is detected, an error is
<br>
signalled that may cause the program to terminate abnormally. On the other
<br>
hand, a standard send operation that cannot complete because of lack of
<br>
buffer space will merely block, waiting for buffer space to become
<br>
available or for a matching receive to be posted. This behavior is
<br>
preferable in many situations. Consider a situation where a producer
<br>
repeatedly produces new values and sends them to a consumer. Assume that
<br>
the producer produces new values faster than the consumer can consume them.
<br>
If buffered sends are used, then a buffer overflow will result. Additional
<br>
synchronization has to be added to the program so as to prevent this from
<br>
occurring. If standard sends are used, then the producer will be
<br>
automatically throttled, as its send operations will block when buffer
<br>
space is unavailable.
<br>
<p>Note - in the paragraph above &quot;buffered send&quot; means MPI_BSEND, not eager
<br>
send.
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 12/03/2009 05:33:51 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Program deadlocks, on simple send/recv loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12/03/2009 05:35 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2009-12-02 at 13:11 -0500, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 1, 2009, at 11:15 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, 2009-12-01 at 10:46 -0500, Brock Palen wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The attached code, is an example where openmpi/1.3.2 will lock up,
</span><br>
if
<br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The code loops over recv from all processors on rank 0 and sends
</span><br>
from
<br>
<span class="quotelev4">&gt; &gt; &gt;&gt; all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; why not.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Note yes I know we can do the same thing with a gather, this is a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; simple case to demonstrate the issue.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the problem with this code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What are you increasing the eager limit from and too?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same value as ethernet on our system,
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca btl_openib_eager_limit 655360 --mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_max_send_size 655360 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Huge values compared to the defaults, but works,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding of the code is that each message will be 256k long and
</span><br>
<span class="quotelev1">&gt; the code pretty much guarantees that at some point there will be 46
</span><br>
<span class="quotelev1">&gt; messages in the queue in front of the one you are looking to receive
</span><br>
<span class="quotelev1">&gt; which makes a total of 11.5Mb, slightly less if you take shared memory
</span><br>
<span class="quotelev1">&gt; into account.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the MPI_SEND isn't blocking then each rank will send 50 messages to
</span><br>
<span class="quotelev1">&gt; rank zero and you'll have 2000 messages and 500Mb of data being received
</span><br>
<span class="quotelev1">&gt; with the message you want being somewhere towards the end of the queue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These numbers are far from huge but then compared to an eager limit of
</span><br>
<span class="quotelev1">&gt; 64k they aren't small either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect the eager limit is being reached on COMM_WORLD rank 0 and it's
</span><br>
<span class="quotelev1">&gt; not pulling any more messages off the network pending some of the
</span><br>
<span class="quotelev1">&gt; existing ones being out of the queue but they never will be because the
</span><br>
<span class="quotelev1">&gt; message being waited for is one that's stuck on the network.  As I say
</span><br>
<span class="quotelev1">&gt; the message queue for rank 0 when it's deadlocked would be interesting
</span><br>
<span class="quotelev1">&gt; to look at.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In summary this code makes heavy use of unexpected messages and network
</span><br>
<span class="quotelev1">&gt; buffering, it's not surprising to me that it only works with eager
</span><br>
<span class="quotelev1">&gt; limits set fairly high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11398.php">Brock Palen: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11400.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
