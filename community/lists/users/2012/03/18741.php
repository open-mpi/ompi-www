<?
$subject_val = "[OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 15:07:09 2012" -->
<!-- isoreceived="20120313190709" -->
<!-- sent="Tue, 13 Mar 2012 15:07:00 -0400 (EDT)" -->
<!-- isosent="20120313190700" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="[OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203131359080.11946_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 15:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18740.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I run a decent size (600+ nodes, 4000+ cores) heterogeneous (multiple 
<br>
generations of x86_64 hardware) cluster.  We use SGE (currently 6.1u4, 
<br>
which, yes, is pretty ancient) and just upgraded from CentOS 5.7 to 6.2. 
<br>
We had been using MPICH2 under CentOS 5, but I'd much rather use OpenMPI 
<br>
as packaged by RH/CentOS.  Our SGE queues are setup with a high priority 
<br>
queue, running un-niced, and a low priority queue running at nice 19, each 
<br>
with 1 slot per core on every node.
<br>
<p>I'm seeing consistent segfaults with OpenMPI when I submit jobs without 
<br>
specifying a queue (meaning some threads run niced, others run un-niced). 
<br>
This was initially reported to me by 2 users, each with their own code, 
<br>
but I can reproduce it with my own very simple test program.  The 
<br>
segfaults occur whether I'm using the default OpenMPI version of 1.5 or 
<br>
compat-openmpi-1.4.3.  I'll note that I did upgrade the distro RPM of 
<br>
openmpi-1.5.3 to 1.5.4 to get around the broken SGE integration 
<br>
&lt;<a href="https://bugzilla.redhat.com/show_bug.cgi?id=789150">https://bugzilla.redhat.com/show_bug.cgi?id=789150</a>&gt;.  I can't 
<br>
absolutely say that jobs run entirely in the high priority queue do 
<br>
not segfault.  But, if they do, it's not nearly as reproducible.  The 
<br>
segfaults also don't seem to occur if a job runs entirely on one node.
<br>
<p>The error logs of failed jobs contain a stanza like this for each thread 
<br>
which segfaulted:
<br>
[opt207:03766] *** Process received signal ***
<br>
[opt207:03766] Signal: Segmentation fault (11)
<br>
[opt207:03766] Signal code: Address not mapped (1)
<br>
[opt207:03766] Failing at address: 0x2b4e279e778c
<br>
[opt207:03766] [ 0] /lib64/libpthread.so.0() [0x37f940f4a0]
<br>
[opt207:03766] [ 1] /usr/lib64/openmpi/lib/openmpi/mca_btl_sm.so(+0x42fc) [0x2b17aa6002fc]
<br>
[opt207:03766] [ 2] /usr/lib64/openmpi/lib/libmpi.so.1(opal_progress+0x5a) [0x37fa0d1aba]
<br>
[opt207:03766] [ 3] /usr/lib64/openmpi/lib/openmpi/mca_grpcomm_bad.so(+0x24d5) [0x2b17a7d234d5]
<br>
[opt207:03766] [ 4] /usr/lib64/openmpi/lib/libmpi.so.1() [0x37fa04bd57]
<br>
[opt207:03766] [ 5] /usr/lib64/openmpi/lib/libmpi.so.1(MPI_Init+0x170) [0x37fa063c70]
<br>
[opt207:03766] [ 6] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.5-debug() [0x4006e6]
<br>
[opt207:03766] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd) [0x37f901ecdd]
<br>
[opt207:03766] [ 8] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.5-debug() [0x400609]
<br>
[opt207:03766] *** End of error message ***
<br>
<p>A backtrace of the core file looks like this:
<br>
#0  sm_fifo_read () at btl_sm.h:353
<br>
#1  mca_btl_sm_component_progress () at btl_sm_component.c:588
<br>
#2  0x00000037fa0d1aba in opal_progress () at runtime/opal_progress.c:207
<br>
#3  0x00002b17a7d234d5 in barrier () at grpcomm_bad_module.c:277
<br>
#4  0x00000037fa04bd57 in ompi_mpi_init (argc=1, argv=0x7fff253658f8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requested=&lt;value optimized out&gt;, provided=&lt;value optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at runtime/ompi_mpi_init.c:771
<br>
#5  0x00000037fa063c70 in PMPI_Init (argc=0x7fff253657fc, 
<br>
argv=0x7fff253657f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pinit.c:84
<br>
#6  0x00000000004006e6 in main (argc=1, argv=0x7fff253658f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpihello-long.c:11
<br>
<p>Those are both from a test with 1.5.  The 1.4 errors are essentially 
<br>
identical, with the differences mainly in line numbers.  I'm happy to post 
<br>
full logs, but I'm trying (albeit unsuccessfully) to keep this from 
<br>
turning into a novel.  I'm happy to do as much debugging as I can -- I'm 
<br>
pretty motivated to get this working.
<br>
<p>Thanks for any insights.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18740.php">Timothy Stitt: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
