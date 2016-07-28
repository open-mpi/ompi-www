<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 20:06:05 2012" -->
<!-- isoreceived="20120314000605" -->
<!-- sent="Tue, 13 Mar 2012 18:05:56 -0600" -->
<!-- isosent="20120314000556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="98547763-CC01-4F7A-985D-29FD1E0CC52E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B6132279-5A29-4BCE-8ED6-024CA823F5B1_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 20:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18753.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18757.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18757.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I started playing with this configure line on my Centos6 machine, and I'd suggest a couple of things:
<br>
<p>1. drop the --with-libltdl=external  ==&gt; not a good idea
<br>
<p>2. drop --with-esmtp   ==&gt; useless unless you really want pager messages notifying you of problems
<br>
<p>3. drop --enable-mpi-threads for now
<br>
<p>I'm continuing to play with it, but thought I'd pass those along.
<br>
<p><p>On Mar 13, 2012, at 5:28 PM, Gutierrez, Samuel K wrote:
<br>
<p><span class="quotelev1">&gt; Can you rebuild without the &quot;--enable-mpi-threads&quot; option and try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2012, at 5:22 PM, Joshua Baker-LePain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 13 Mar 2012 at 10:57pm, Gutierrez, Samuel K wrote
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fooey.  What compiler are you using to build Open MPI and how are you configuring your build?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm using gcc as packaged by RH/CentOS 6.2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jlb_at_opt200 1.4.5-2]$ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.4.6 20110731 (Red Hat 4.4.6-3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I actually tried 2 custom builds of Open MPI 1.4.5.  For the first I tried to stick close to the options in RH's compat-openmpi SRPM:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$HOME/ompi-1.4.5 --enable-mpi-threads --enable-openib-ibcm --with-sge --with-libltdl=external --with-valgrind --enable-memchecker --with-psm=no --with-esmtp LDFLAGS='-Wl,-z,noexecstack'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That resulted in the backtrace I sent previously:
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002b0099ec4c4c in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002b00967737ca in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002b00975ef8d5 in barrier ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002b009628da24 in ompi_mpi_init ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002b00962b24f0 in PMPI_Init ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x0000000000400826 in main (argc=1, argv=0x7fff9fe113f8)
</span><br>
<span class="quotelev2">&gt;&gt;   at mpihello-long.c:11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For kicks, I tried a 2nd compile of 1.4.5 with a bare minimum of options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$HOME/ompi-1.4.5 --with-sge
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That resulted in a slightly different backtrace that seems to be missing a bit:
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002b7bbc8681d0 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002b7bbd2b8f6c in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002b7bb9b2feda in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002b7bba9a98d5 in barrier ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00002b7bb965d426 in ompi_mpi_init ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00002b7bb967cba0 in PMPI_Init ()
</span><br>
<span class="quotelev2">&gt;&gt;  from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x0000000000400826 in main (argc=1, argv=0x7fff93634788)
</span><br>
<span class="quotelev2">&gt;&gt;   at mpihello-long.c:11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you also run with a debug build of Open MPI so we can see the line numbers?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll do that first thing tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another question.  How reproducible is this on your system?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my testing today, it's been 100% reproducible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's surprising.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Heh.  You're telling me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for taking an interest in this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev2">&gt;&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev2">&gt;&gt; UCSF
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18755.php">Gustavo Correa: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18753.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18757.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18757.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
