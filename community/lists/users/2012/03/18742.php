<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 15:21:37 2012" -->
<!-- isoreceived="20120313192137" -->
<!-- sent="Tue, 13 Mar 2012 19:20:19 +0000" -->
<!-- isosent="20120313192019" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="326267B7-B570-47C3-8384-475928E61BE7_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203131359080.11946_at_hogwarts.egr.duke.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 15:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18741.php">Joshua Baker-LePain: "[OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18741.php">Joshua Baker-LePain: "[OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Just to be clear, what specific version of Open MPI produced the provided backtrace?  This smells like a missing memory barrier problem.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 13, 2012, at 1:07 PM, Joshua Baker-LePain wrote:
&gt; I run a decent size (600+ nodes, 4000+ cores) heterogeneous (multiple generations of x86_64 hardware) cluster.  We use SGE (currently 6.1u4, which, yes, is pretty ancient) and just upgraded from CentOS 5.7 to 6.2. We had been using MPICH2 under CentOS 5, but I'd much rather use OpenMPI as packaged by RH/CentOS.  Our SGE queues are setup with a high priority queue, running un-niced, and a low priority queue running at nice 19, each with 1 slot per core on every node.
&gt; 
&gt; I'm seeing consistent segfaults with OpenMPI when I submit jobs without specifying a queue (meaning some threads run niced, others run un-niced). This was initially reported to me by 2 users, each with their own code, but I can reproduce it with my own very simple test program.  The segfaults occur whether I'm using the default OpenMPI version of 1.5 or compat-openmpi-1.4.3.  I'll note that I did upgrade the distro RPM of openmpi-1.5.3 to 1.5.4 to get around the broken SGE integration &lt;<a href="https://bugzilla.redhat.com/show_bug.cgi?id=789150">https://bugzilla.redhat.com/show_bug.cgi?id=789150</a>&gt;.  I can't absolutely say that jobs run entirely in the high priority queue do not segfault.  But, if they do, it's not nearly as reproducible.  The segfaults also don't seem to occur if a job runs entirely on one node.
&gt; 
&gt; The error logs of failed jobs contain a stanza like this for each thread which segfaulted:
&gt; [opt207:03766] *** Process received signal ***
&gt; [opt207:03766] Signal: Segmentation fault (11)
&gt; [opt207:03766] Signal code: Address not mapped (1)
&gt; [opt207:03766] Failing at address: 0x2b4e279e778c
&gt; [opt207:03766] [ 0] /lib64/libpthread.so.0() [0x37f940f4a0]
&gt; [opt207:03766] [ 1] /usr/lib64/openmpi/lib/openmpi/mca_btl_sm.so(+0x42fc) [0x2b17aa6002fc]
&gt; [opt207:03766] [ 2] /usr/lib64/openmpi/lib/libmpi.so.1(opal_progress+0x5a) [0x37fa0d1aba]
&gt; [opt207:03766] [ 3] /usr/lib64/openmpi/lib/openmpi/mca_grpcomm_bad.so(+0x24d5) [0x2b17a7d234d5]
&gt; [opt207:03766] [ 4] /usr/lib64/openmpi/lib/libmpi.so.1() [0x37fa04bd57]
&gt; [opt207:03766] [ 5] /usr/lib64/openmpi/lib/libmpi.so.1(MPI_Init+0x170) [0x37fa063c70]
&gt; [opt207:03766] [ 6] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.5-debug() [0x4006e6]
&gt; [opt207:03766] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd) [0x37f901ecdd]
&gt; [opt207:03766] [ 8] /netapp/sali/jlb/mybin/mpihello-long.ompi-1.5-debug() [0x400609]
&gt; [opt207:03766] *** End of error message ***
&gt; 
&gt; A backtrace of the core file looks like this:
&gt; #0  sm_fifo_read () at btl_sm.h:353
&gt; #1  mca_btl_sm_component_progress () at btl_sm_component.c:588
&gt; #2  0x00000037fa0d1aba in opal_progress () at runtime/opal_progress.c:207
&gt; #3  0x00002b17a7d234d5 in barrier () at grpcomm_bad_module.c:277
&gt; #4  0x00000037fa04bd57 in ompi_mpi_init (argc=1, argv=0x7fff253658f8,
&gt;    requested=&lt;value optimized out&gt;, provided=&lt;value optimized out&gt;)
&gt;    at runtime/ompi_mpi_init.c:771
&gt; #5  0x00000037fa063c70 in PMPI_Init (argc=0x7fff253657fc, argv=0x7fff253657f0)
&gt;    at pinit.c:84
&gt; #6  0x00000000004006e6 in main (argc=1, argv=0x7fff253658f8)
&gt;    at mpihello-long.c:11
&gt; 
&gt; Those are both from a test with 1.5.  The 1.4 errors are essentially identical, with the differences mainly in line numbers.  I'm happy to post full logs, but I'm trying (albeit unsuccessfully) to keep this from turning into a novel.  I'm happy to do as much debugging as I can -- I'm pretty motivated to get this working.
&gt; 
&gt; Thanks for any insights.
&gt; 
&gt; -- 
&gt; Joshua Baker-LePain
&gt; QB3 Shared Cluster Sysadmin
&gt; UCSF
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18741.php">Joshua Baker-LePain: "[OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18741.php">Joshua Baker-LePain: "[OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
