<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 15:36:03 2012" -->
<!-- isoreceived="20120313193603" -->
<!-- sent="Tue, 13 Mar 2012 15:35:57 -0400 (EDT)" -->
<!-- isosent="20120313193557" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203131528390.11946_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="326267B7-B570-47C3-8384-475928E61BE7_at_lanl.gov" -->
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
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 15:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Mar 2012 at 7:20pm, Gutierrez, Samuel K wrote
<br>
<p><span class="quotelev1">&gt; Just to be clear, what specific version of Open MPI produced the 
</span><br>
<span class="quotelev1">&gt; provided backtrace?  This smells like a missing memory barrier problem.
</span><br>
<p>The backtrace in my original post was from 1.5.4 -- I took the 1.5.4 
<br>
source and put it into the 1.5.3 SRPM provided by Red Hat.  Below is a 
<br>
backtrace from 1.4.3 as shipped by RH/CentOS:
<br>
<p>#0  sm_fifo_read () at btl_sm.h:267
<br>
#1  mca_btl_sm_component_progress () at btl_sm_component.c:391
<br>
#2  0x0000003e54a129ca in opal_progress () at runtime/opal_progress.c:207
<br>
#3  0x00002b00fa6bb8d5 in barrier () at grpcomm_bad_module.c:270
<br>
#4  0x0000003e55e37d04 in ompi_mpi_init (argc=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv=&lt;value optimized out&gt;, requested=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;provided=&lt;value optimized out&gt;) at runtime/ompi_mpi_init.c:722
<br>
#5  0x0000003e55e5bae0 in PMPI_Init (argc=0x7fff8588b1cc, argv=0x7fff8588b1c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pinit.c:80
<br>
#6  0x0000000000400826 in main (argc=1, argv=0x7fff8588b2c8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpihello-long.c:11
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18742.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18744.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
