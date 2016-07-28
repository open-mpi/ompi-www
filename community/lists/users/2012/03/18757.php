<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 22:56:53 2012" -->
<!-- isoreceived="20120314025653" -->
<!-- sent="Tue, 13 Mar 2012 22:56:48 -0400 (EDT)" -->
<!-- isosent="20120314025648" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203132254200.27637_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98547763-CC01-4F7A-985D-29FD1E0CC52E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-03-13 22:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18758.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18756.php">George Bosilca: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18754.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18758.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Mar 2012 at 6:05pm, Ralph Castain wrote
<br>
<p><span class="quotelev1">&gt; I started playing with this configure line on my Centos6 machine, and 
</span><br>
<span class="quotelev1">&gt; I'd suggest a couple of things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. drop the --with-libltdl=external  ==&gt; not a good idea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. drop --with-esmtp   ==&gt; useless unless you really want pager messages notifying you of problems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. drop --enable-mpi-threads for now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm continuing to play with it, but thought I'd pass those along.
</span><br>
<p>After my first custom build of 1.4.5 didn't work, I built it again using 
<br>
an utterly minimal configure line:
<br>
<p>./configure --prefix=$HOME/ompi-1.4.5 --with-sge
<br>
<p>Runs with this library still failed, but the backtrace did change 
<br>
slightly:
<br>
<p>#0  0x00002b7bbc8681d0 in ?? ()
<br>
#1  &lt;signal handler called&gt;
<br>
#2  0x00002b7bbd2b8f6c in mca_btl_sm_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
<br>
#3  0x00002b7bb9b2feda in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
<br>
#4  0x00002b7bba9a98d5 in barrier ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
<br>
#5  0x00002b7bb965d426 in ompi_mpi_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
<br>
#6  0x00002b7bb967cba0 in PMPI_Init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
<br>
#7  0x0000000000400826 in main (argc=1, argv=0x7fff93634788)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpihello-long.c:11
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
<li><strong>Next message:</strong> <a href="18758.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18756.php">George Bosilca: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18754.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18758.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
