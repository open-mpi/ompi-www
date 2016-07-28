<?
$subject_val = "Re: [OMPI users] Put/Get semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 17:01:36 2016" -->
<!-- isoreceived="20160108220136" -->
<!-- sent="Fri, 8 Jan 2016 14:01:15 -0800" -->
<!-- isosent="20160108220115" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Put/Get semantics" -->
<!-- id="CAGKz=u+JxMJpieQgUQix9ViTUPJmdV9Wc18wOVeVWXM82YxcJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="61BD36C35043184BB5E9C6E07E2C74AB1A5CEC67_at_EX10MBOX02.pnnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Put/Get semantics<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-08 17:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28241.php">Ralph Castain: "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>In reply to:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28248.php">Palmer, Bruce J: "Re: [OMPI users] Put/Get semantics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Instead of MPI_Alloc_mem and MPI_Win_create, you should use
<br>
MPI_Win_allocate.  This will make it much easier for the implementation to
<br>
optimize with interprocess shared memory and exploit scalability features
<br>
such as symmetric globally addressable memory.  It also obviates the need
<br>
to do both MPI_Win_free and MPI_Free_mem.
<br>
<p>Based upon what I've seen recently (
<br>
<a href="https://travis-ci.org/jeffhammond/armci-mpi">https://travis-ci.org/jeffhammond/armci-mpi</a>), using MPI_Win_allocate may
<br>
fix some unresolved Open-MPI RMA bugs (
<br>
<a href="https://github.com/open-mpi/ompi/issues/1275">https://github.com/open-mpi/ompi/issues/1275</a>).
<br>
<p>As for your synchronization question, instead of
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Rget(b,1,dtype,rproc,displ,1,dtype,win,&amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request,&amp;status);
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Rput(a,1,dtype,rproc,displ,1,dtype,win,&amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request,&amp;status);
<br>
<p>you should use
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get(b,1,dtype,rproc,displ,1,dtype,win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_flush_local(1,win);
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Put(a,1,dtype,rproc,displ,1,dtype,win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_flush_local(1,win);
<br>
<p>as there is no need to create a request for this usage model.
<br>
Request-based RMA entails some implementation overhead in some cases, and
<br>
is more likely to be broken since it is not heavily tested. On the other
<br>
hand, the non-request RMA has been tested extensively thanks to the
<br>
thousands of NWChem jobs I've run using ARMCI-MPI on Cray, InfiniBand, and
<br>
other systems.
<br>
<p>As I think I've said before on some list, one of the best ways to
<br>
understand the mapping between ARMCI and MPI RMA is to look at ARMCI-MPI.
<br>
<p>Jeff
<br>
<p>On Wed, Jan 6, 2016 at 8:51 AM, Palmer, Bruce J &lt;Bruce.Palmer_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m trying to compare the semantics of MPI RMA with those of ARMCI. I&#226;&#128;&#153;ve
</span><br>
written a small test program that writes data to a remote processor and
<br>
then reads the data back to the original processor. In ARMCI, you should be
<br>
able to do this since operations to the same remote processor are completed
<br>
in the same order that they are requested on the calling processor. I&#226;&#128;&#153;ve
<br>
implemented this two different ways using MPI RMA. The first is to call
<br>
MPI_Win_lock to create a shared lock on the remote processor, then
<br>
MPI_Put/MPI_Get to initiate the data transfer and finally MPI_Win_unlock to
<br>
force completion of the data transfer. My understanding is that this should
<br>
allow you to write and then read data to the same process, since the first
<br>
triplet
<br>
<span class="quotelev1">&gt; MPI_Win_lock
</span><br>
<span class="quotelev1">&gt; MPI_Put
</span><br>
<span class="quotelev1">&gt; MPI_Win_unlock
</span><br>
<span class="quotelev1">&gt; must be completed both locally and remotely before the unlock call
</span><br>
completes. The calls in the second triplet
<br>
<span class="quotelev1">&gt; MPI_Win_lock
</span><br>
<span class="quotelev1">&gt; MPI_Get
</span><br>
<span class="quotelev1">&gt; MPI_Win_unlock
</span><br>
<span class="quotelev1">&gt; cannot start until the first triplet is done, so if both the put and the
</span><br>
get refer to the same data on the same remote processor, then it should
<br>
work.
<br>
<span class="quotelev1">&gt; The second implementation uses request-based RMA and starts by calling
</span><br>
MPI_Win_lock_all collectively on the window when it is created and
<br>
MPI_Win_unlock_all when it is destroy so that the window is always in a
<br>
passive synchronization epoch. The put is implement by calling MPI_Rput
<br>
followed by calling MPI_Wait on the handle returned from the MPI_Rput call.
<br>
Similarly, get is implemented by calling MPI_Rget followed by MPI_Wait. The
<br>
wait call guarantees that the operation is completed locally and the data
<br>
can then be used. However, from what I understand of the standard, it
<br>
doesn&#226;&#128;&#153;t say anything about the ordering of the operations so conceivably
<br>
the put could execute remotely before the get. Inserting an
<br>
MPI_Win_flush_all between the MPI_Rput and MPI_Rget should guarantee that
<br>
the operations are ordered.
<br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve written the test program so that it can use either the lock or
</span><br>
request-based implementations and I&#226;&#128;&#153;ve also included an option that inserts
<br>
a fence/flush plus barrier operation between put and get. The different
<br>
configurations can be set up by defining some preprocessor symbols at the
<br>
top of the program.  The program loops over the test repeatedly and the
<br>
current number of loops is set at 2000. The results I get running on a
<br>
Linux cluster with an Infiniband network using OpenMPI-1.10.1 on 2
<br>
processors on 2 different SMP nodes are as follows:
<br>
<span class="quotelev1">&gt; Using OpenMPI-1.8.3:
</span><br>
<span class="quotelev1">&gt; Request-based implementation without synchronization: 9 successes out of
</span><br>
10 runs
<br>
<span class="quotelev1">&gt; Request-based implementation with synchronization: 19 successes out of 20
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation without synchronization: 1 success out of 10
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation with synchronization: 1 success out of 10 runs
</span><br>
<span class="quotelev1">&gt; Using OpenMPI-1.10.1
</span><br>
<span class="quotelev1">&gt; Request-based implementation without synchronization: 2 successes out of
</span><br>
10 runs
<br>
<span class="quotelev1">&gt; Request-based implementation with synchronization: 8 successes out of 10
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation without synchronization: 4 successes out of 10
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation with synchronization: 2 successes out of 10 runs
</span><br>
<span class="quotelev1">&gt; Except for the request-based implementation without synchronization (in
</span><br>
this case a call to MPI_Win_flush_all), I would expect these to all
<br>
succeed. Is there some fault to my thinking here? I&#226;&#128;&#153;ve attached the test
<br>
program
<br>
<span class="quotelev1">&gt; Bruce Palmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/01/28216.php">http://www.open-mpi.org/community/lists/users/2016/01/28216.php</a>
<br>
<p><p><p><p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28241.php">Ralph Castain: "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>In reply to:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28248.php">Palmer, Bruce J: "Re: [OMPI users] Put/Get semantics"</a>
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
