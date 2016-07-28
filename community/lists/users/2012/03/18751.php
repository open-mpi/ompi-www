<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 19:22:40 2012" -->
<!-- isoreceived="20120313232240" -->
<!-- sent="Tue, 13 Mar 2012 19:22:36 -0400 (EDT)" -->
<!-- isosent="20120313232236" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203131913460.11946_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7F41D80D-5610-4D33-85E0-529599F1FAE3_at_lanl.gov" -->
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
<strong>Date:</strong> 2012-03-13 19:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18753.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Mar 2012 at 10:57pm, Gutierrez, Samuel K wrote
<br>
<p><span class="quotelev1">&gt; Fooey.  What compiler are you using to build Open MPI and how are you 
</span><br>
<span class="quotelev1">&gt; configuring your build?
</span><br>
<p>I'm using gcc as packaged by RH/CentOS 6.2:
<br>
<p>[jlb_at_opt200 1.4.5-2]$ gcc --version
<br>
gcc (GCC) 4.4.6 20110731 (Red Hat 4.4.6-3)
<br>
<p>I actually tried 2 custom builds of Open MPI 1.4.5.  For the first I tried 
<br>
to stick close to the options in RH's compat-openmpi SRPM:
<br>
<p>./configure --prefix=$HOME/ompi-1.4.5 --enable-mpi-threads --enable-openib-ibcm --with-sge --with-libltdl=external --with-valgrind --enable-memchecker --with-psm=no --with-esmtp LDFLAGS='-Wl,-z,noexecstack'
<br>
<p>That resulted in the backtrace I sent previously:
<br>
#0  0x00002b0099ec4c4c in mca_btl_sm_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002b00967737ca in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
<br>
#2  0x00002b00975ef8d5 in barrier ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
<br>
#3  0x00002b009628da24 in ompi_mpi_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
<br>
#4  0x00002b00962b24f0 in PMPI_Init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
<br>
#5  0x0000000000400826 in main (argc=1, argv=0x7fff9fe113f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpihello-long.c:11
<br>
<p>For kicks, I tried a 2nd compile of 1.4.5 with a bare minimum of options:
<br>
<p>./configure --prefix=$HOME/ompi-1.4.5 --with-sge
<br>
<p>That resulted in a slightly different backtrace that seems to be missing 
<br>
a bit:
<br>
#0  0x00002b7bbc8681d0 in ?? ()
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
<p><span class="quotelev1">&gt; Can you also run with a debug build of Open MPI 
</span><br>
<span class="quotelev1">&gt; so we can see the line numbers?
</span><br>
<p>I'll do that first thing tomorrow.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Another question.  How reproducible is this on your system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my testing today, it's been 100% reproducible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's surprising.
</span><br>
<p>Heh.  You're telling me.
<br>
<p>Thanks for taking an interest in this.
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
<li><strong>Next message:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18750.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18748.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18753.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
