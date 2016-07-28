<?
$subject_val = "[OMPI users] maximum value for count argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 20:19:49 2009" -->
<!-- isoreceived="20091111011949" -->
<!-- sent="Tue, 10 Nov 2009 17:19:45 -0800" -->
<!-- isosent="20091111011945" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] maximum value for count argument" -->
<!-- id="20091111011945.GA12890_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] maximum value for count argument<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 20:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem with sending/receiving large buffers when using
<br>
openmpi (version 1.3.3), e.g.,
<br>
<p>MPI_Allreduce(sbuf, rbuf, count, MPI_DOUBLE, MPI_SUM, MPI_COMM_WORLD);
<br>
<p>with count=180000000 (this problem does not appear to be unique for
<br>
Allreduce, but occurs with Reduce, Bcats as well; maybe more).
<br>
Initially I thought the maximum value for count would be 2^31-1
<br>
because count is an int. However, when using MPICH2 I receive a
<br>
segfault already when count=2^31/8 thus I suspect that they transfer
<br>
bytes instead of doubles internally and the count for the # of bytes
<br>
wraps around at that value. This I can deal with (it is not nice,
<br>
but I can wrap all calls such that as soon as count &gt; 268435456
<br>
several calls are made).
<br>
<p>Hwoever, with openmpi I just cannot figure out what the largest
<br>
permitted value is: in most cases the MPI calls hang for
<br>
count &gt; 176763240, but this is not completely reproducable. This
<br>
appears to depend on the history, i.e., what other MPI routines
<br>
have been called before that.
<br>
<span class="quotelev1">&gt;From looking at the code as far as I understand the MPICH2 problem
</span><br>
should not appear for openmpi: the allreduce call is split up into
<br>
several calls anyway - see the loop
<br>
<p>for (phase = 0; phase &lt; num_phases; phase ++) {
<br>
...
<br>
}
<br>
<p>in coll_tuned_allreduce.c. In fact that loop is executed just fine.
<br>
The &quot;hang&quot; occurs when ompi_coll_tuned_sendrecv is called
<br>
(line 839 of coll_tuned_allreduce.c). Here is the call of that function:
<br>
<p>(gdb) s
<br>
ompi_coll_tuned_sendrecv_actual (sendbuf=0x2aab2d539410, scount=90000000, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sdatatype=0x602530, dest=1, stag=-12, recvbuf=0x2aab02694010, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rcount=90000000, rdatatype=0x602530, source=1, rtag=-12, comm=0x602730, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=0x0) at coll_tuned_util.c:41
<br>
<p>and the program just hangs as soon as ompi_request_wait_all (line 55 of
<br>
coll_tuned_util.c) is executed.
<br>
<p>Any ideas how to fix this?
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
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
