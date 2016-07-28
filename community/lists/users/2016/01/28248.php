<?
$subject_val = "Re: [OMPI users] Put/Get semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 13:54:04 2016" -->
<!-- isoreceived="20160111185404" -->
<!-- sent="Mon, 11 Jan 2016 18:54:01 +0000" -->
<!-- isosent="20160111185401" -->
<!-- name="Palmer, Bruce J" -->
<!-- email="Bruce.Palmer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Put/Get semantics" -->
<!-- id="61BD36C35043184BB5E9C6E07E2C74AB1A5D040E_at_EX10MBOX02.pnnl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Put/Get semantics" -->
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
<strong>From:</strong> Palmer, Bruce J (<em>Bruce.Palmer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-11 13:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28249.php">Jim Edwards: "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Maybe in reply to:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried replacing the MPI_Alloc_mem/MPI_Win_create pair with MPI_Win_allocate but it doesn't seem to have much of an effect. It may improve the overall success rate in some cases but overall, it seems a wash. I haven't done any timing, I've mostly been focusing on correctness, so I don't know if this replacement improved performance. I also tried using MPI_Win_flush_local paired with the standard MPI_Put/MPI_Get and again, did not see significant improvement in the success rate for this test.
<br>
<p>I'm not surprised that RM- based implementations work for applications, at least most of the time since the tests usually get though at least one loop before dying. Although the ordering of operations to the same remote processor is specified by ARMCI, it does not appear to occur in practical applications. I checked with one of the NWChem developers and he does not think it likely that this particular motif is used anywhere in NWChem. On the other hand, unless I'm doing something wrong, this should work according to the MPI-3 standard (at least in the case where an appropriate synchronization or flush operation is inserted between the put and get operations) and the fact that it does not is worrisome.
<br>
<p>I modified the test program so that MPI_Win_allocate is used and added code for using MPI_Put/MPI_Get plus an MPI_Win_flush_local operation. This can be turned on and off by defining a preprocessor flag at the top of the program. As far as I can tell, this matches the usage in theARMCI-MPI code. Running on an infiniband cluster using 2 processors on 2 separate nodes, I got the following results:
<br>
<p>OpenMPI-1.8.3
<br>
Request-based implementation without synchronization: 11 successes out of 20 tests
<br>
Request-based implementation with synchronization: 17 successes out of 20 tests
<br>
Flush local implementation without synchronization: 18 successes out of 20 tests
<br>
Flush local implementation with synchronization: 19 successes out of 20 tests
<br>
Lock-based implementation without synchronization: 7 successes out of 20 tests
<br>
Lock-based implementation with synchronization: 10 successes out of 20 tests
<br>
<p>OpenMPI-1.10.1
<br>
Request-based implementation without synchronization: 11 successes out of 20 tests
<br>
Request-based implementation with synchronization: 15 successes out of 20 tests
<br>
Flush local implementation without synchronization: 8 successes out of 20 tests
<br>
Flush local implementation with synchronization: 18 successes out of 20 tests
<br>
Lock-based implementation without synchronization: 6 successes out of 20 tests
<br>
Lock-based implementation with synchronization: 8 successes out of 20 tests
<br>
<p>Bruce
<br>
<p>Date: Fri, 8 Jan 2016 14:01:15 -0800
<br>
From: Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Put/Get semantics
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;CAGKz=u+JxMJpieQgUQix9ViTUPJmdV9Wc18wOVeVWXM82YxcJg_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;utf-8&quot;
<br>
<p>Instead of MPI_Alloc_mem and MPI_Win_create, you should use MPI_Win_allocate.  This will make it much easier for the implementation to optimize with interprocess shared memory and exploit scalability features such as symmetric globally addressable memory.  It also obviates the need to do both MPI_Win_free and MPI_Free_mem.
<br>
<p>Based upon what I've seen recently (
<br>
<a href="https://travis-ci.org/jeffhammond/armci-mpi">https://travis-ci.org/jeffhammond/armci-mpi</a>), using MPI_Win_allocate may fix some unresolved Open-MPI RMA bugs ( <a href="https://github.com/open-mpi/ompi/issues/1275">https://github.com/open-mpi/ompi/issues/1275</a>).
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
Request-based RMA entails some implementation overhead in some cases, and is more likely to be broken since it is not heavily tested. On the other hand, the non-request RMA has been tested extensively thanks to the thousands of NWChem jobs I've run using ARMCI-MPI on Cray, InfiniBand, and other systems.
<br>
<p>As I think I've said before on some list, one of the best ways to understand the mapping between ARMCI and MPI RMA is to look at ARMCI-MPI.
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
<span class="quotelev1">&gt; I?m trying to compare the semantics of MPI RMA with those of ARMCI. 
</span><br>
<span class="quotelev1">&gt; I?ve
</span><br>
written a small test program that writes data to a remote processor and then reads the data back to the original processor. In ARMCI, you should be able to do this since operations to the same remote processor are completed in the same order that they are requested on the calling processor. I?ve implemented this two different ways using MPI RMA. The first is to call MPI_Win_lock to create a shared lock on the remote processor, then MPI_Put/MPI_Get to initiate the data transfer and finally MPI_Win_unlock to force completion of the data transfer. My understanding is that this should allow you to write and then read data to the same process, since the first triplet
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
<span class="quotelev1">&gt; cannot start until the first triplet is done, so if both the put and 
</span><br>
<span class="quotelev1">&gt; the
</span><br>
get refer to the same data on the same remote processor, then it should work.
<br>
<span class="quotelev1">&gt; The second implementation uses request-based RMA and starts by calling
</span><br>
MPI_Win_lock_all collectively on the window when it is created and MPI_Win_unlock_all when it is destroy so that the window is always in a passive synchronization epoch. The put is implement by calling MPI_Rput followed by calling MPI_Wait on the handle returned from the MPI_Rput call.
<br>
Similarly, get is implemented by calling MPI_Rget followed by MPI_Wait. The wait call guarantees that the operation is completed locally and the data can then be used. However, from what I understand of the standard, it doesn?t say anything about the ordering of the operations so conceivably the put could execute remotely before the get. Inserting an MPI_Win_flush_all between the MPI_Rput and MPI_Rget should guarantee that the operations are ordered.
<br>
<span class="quotelev1">&gt; I?ve written the test program so that it can use either the lock or
</span><br>
request-based implementations and I?ve also included an option that inserts a fence/flush plus barrier operation between put and get. The different configurations can be set up by defining some preprocessor symbols at the top of the program.  The program loops over the test repeatedly and the current number of loops is set at 2000. The results I get running on a Linux cluster with an Infiniband network using OpenMPI-1.10.1 on 2 processors on 2 different SMP nodes are as follows:
<br>
<span class="quotelev1">&gt; Using OpenMPI-1.8.3:
</span><br>
<span class="quotelev1">&gt; Request-based implementation without synchronization: 9 successes out 
</span><br>
<span class="quotelev1">&gt; of
</span><br>
10 runs
<br>
<span class="quotelev1">&gt; Request-based implementation with synchronization: 19 successes out of 
</span><br>
<span class="quotelev1">&gt; 20
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation without synchronization: 1 success out of 10
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation with synchronization: 1 success out of 10 
</span><br>
<span class="quotelev1">&gt; runs Using OpenMPI-1.10.1 Request-based implementation without 
</span><br>
<span class="quotelev1">&gt; synchronization: 2 successes out of
</span><br>
10 runs
<br>
<span class="quotelev1">&gt; Request-based implementation with synchronization: 8 successes out of 
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation without synchronization: 4 successes out of 
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
runs
<br>
<span class="quotelev1">&gt; Lock-based implementation with synchronization: 2 successes out of 10 
</span><br>
<span class="quotelev1">&gt; runs Except for the request-based implementation without 
</span><br>
<span class="quotelev1">&gt; synchronization (in
</span><br>
this case a call to MPI_Win_flush_all), I would expect these to all succeed. Is there some fault to my thinking here? I?ve attached the test program
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
-------------- next part --------------
HTML attachment scrubbed and removed
------------------------------
Subject: Digest Footer
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
------------------------------
End of users Digest, Vol 3386, Issue 1
**************************************

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28248/testmpi.c">testmpi.c</a>
</ul>
<!-- attachment="testmpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28249.php">Jim Edwards: "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28247.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>Maybe in reply to:</strong> <a href="28216.php">Palmer, Bruce J: "[OMPI users] Put/Get semantics"</a>
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
