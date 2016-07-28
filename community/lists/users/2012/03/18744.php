<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 15:53:53 2012" -->
<!-- isoreceived="20120313195353" -->
<!-- sent="Tue, 13 Mar 2012 19:53:48 +0000" -->
<!-- isosent="20120313195348" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="CA78C203-22A4-4400-AA75-004E60B27A07_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203131528390.11946_at_hogwarts.egr.duke.edu" -->
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
<strong>Date:</strong> 2012-03-13 15:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18745.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18745.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18745.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The failure signature isn't exactly what we were seeing here at LANL, but there were misplaced memory barriers in Open MPI 1.4.3.  Ticket 2619 talks about this issue (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2619">https://svn.open-mpi.org/trac/ompi/ticket/2619</a>).  This doesn't explain, however, the failures that you are experiencing within Open MPI 1.5.4.  Can you give 1.4.4 a whirl and see if this fixes the issue?  Any more information surrounding your failures in 1.5.4 are greatly appreciated.
<br>
<p>Thanks,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 13, 2012, at 1:35 PM, Joshua Baker-LePain wrote:
On Tue, 13 Mar 2012 at 7:20pm, Gutierrez, Samuel K wrote
Just to be clear, what specific version of Open MPI produced the provided backtrace?  This smells like a missing memory barrier problem.
The backtrace in my original post was from 1.5.4 -- I took the 1.5.4 source and put it into the 1.5.3 SRPM provided by Red Hat.  Below is a backtrace from 1.4.3 as shipped by RH/CentOS:
#0  sm_fifo_read () at btl_sm.h:267
#1  mca_btl_sm_component_progress () at btl_sm_component.c:391
#2  0x0000003e54a129ca in opal_progress () at runtime/opal_progress.c:207
#3  0x00002b00fa6bb8d5 in barrier () at grpcomm_bad_module.c:270
#4  0x0000003e55e37d04 in ompi_mpi_init (argc=&lt;value optimized out&gt;,
   argv=&lt;value optimized out&gt;, requested=&lt;value optimized out&gt;,
   provided=&lt;value optimized out&gt;) at runtime/ompi_mpi_init.c:722
#5  0x0000003e55e5bae0 in PMPI_Init (argc=0x7fff8588b1cc, argv=0x7fff8588b1c0)
   at pinit.c:80
#6  0x0000000000400826 in main (argc=1, argv=0x7fff8588b2c8)
   at mpihello-long.c:11
Thanks!
--
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18745.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18743.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18745.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18745.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
