<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 18:37:32 2007" -->
<!-- isoreceived="20070828223732" -->
<!-- sent="Tue, 28 Aug 2007 15:37:28 -0700" -->
<!-- isosent="20070828223728" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="[OMPI devel] UD BTL alltoall hangs" -->
<!-- id="46D4A3A8.1050201_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 18:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a problem with the UD BTL and hoping someone might have some 
<br>
input to help solve it.
<br>
<p>What I'm seeing is hangs when running alltoall benchmarks with nbcbench 
<br>
or an LLNL program called mpiBench -- both hang exactly the same way. 
<br>
With the code on the trunk running nbcbench on IU's odin using 32 nodes 
<br>
and a command line like this:
<br>
<p>mpirun -np 128 -mca btl ofud,self ./nbcbench -t MPI_Alltoall -p 128-128 
<br>
-s 1-262144
<br>
<p>hangs consistently when testing 256-byte messages.  There are two things 
<br>
I can do to make the hang go away until running at larger scale.  First 
<br>
is to increase the 'btl_ofud_sd_num' MCA param from its default value of 
<br>
128.  This allows you to run with more procs/nodes before hitting the 
<br>
hang, but AFAICT doesn't fix the actual problem.  What this parameter 
<br>
does is control the maximum number of outstanding send WQEs posted at 
<br>
the IB level -- when the limit is reached, frags are queued on an 
<br>
opal_list_t and later sent by progress as IB sends complete.
<br>
<p>The other way I've found is to play games with calling 
<br>
mca_btl_ud_component_progress() in mca_btl_ud_endpoint_post_send().  In 
<br>
fact I replaced the CHECK_FRAG_QUEUES() macro used around 
<br>
btl_ofud_endpoint.c:77 with a version that loops on progress until a 
<br>
send WQE slot is available (as opposed to queueing).  Same result -- I 
<br>
can run at larger scale, but still hit the hang eventually.
<br>
<p>It appears that when the job hangs, progress is being polled very 
<br>
quickly, and after spinning for a while there are no outstanding send 
<br>
WQEs or queued sends in the BTL.  I'm not sure where further up things 
<br>
are spinning/blocking, as I can't produce the hang at less than 32 nodes 
<br>
/ 128 procs and don't have a good way of debugging that (suggestions 
<br>
appreciated).
<br>
<p>Furthermore, both ob1 and dr PMLs result in the same behavior, except 
<br>
that DR eventually trips a watchdog timeout, fails the BTL, and 
<br>
terminates the job.
<br>
<p>Other collectives such as allreduce and allgather do not hang -- only 
<br>
alltoall.  I can also reproduce the hang on LLNL's Atlas machine.
<br>
<p>Can anyone else reproduce this (Torsten might have to make a copy of 
<br>
nbcbench available)?  Anyone have any ideas as to what's wrong?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2249.php">Jeff Squyres: "Re: [OMPI devel] Patch for reporter and friends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Reply:</strong> <a href="2251.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
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
