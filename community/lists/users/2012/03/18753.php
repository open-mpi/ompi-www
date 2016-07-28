<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 19:31:37 2012" -->
<!-- isoreceived="20120313233137" -->
<!-- sent="Tue, 13 Mar 2012 17:31:23 -0600" -->
<!-- isosent="20120313233123" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="1038A1CE-5952-4B55-977A-FD1EC29F6C04_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="alpine.LRH.2.02.1203131913460.11946_at_hogwarts.egr.duke.edu" -->
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
<strong>Date:</strong> 2012-03-13 19:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18754.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18751.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18759.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18759.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#133;.you might try removing the -enable-mpi-threads from the configure to be safe.
<br>
<p>FWIW: I have a Centos6 system myself, and I have no problems running OMPI on it (1.4 or 1.5). I can try building it the same way you do and see what happens.
<br>
<p><p>On Mar 13, 2012, at 5:22 PM, Joshua Baker-LePain wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 13 Mar 2012 at 10:57pm, Gutierrez, Samuel K wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fooey.  What compiler are you using to build Open MPI and how are you configuring your build?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using gcc as packaged by RH/CentOS 6.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jlb_at_opt200 1.4.5-2]$ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.6 20110731 (Red Hat 4.4.6-3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually tried 2 custom builds of Open MPI 1.4.5.  For the first I tried to stick close to the options in RH's compat-openmpi SRPM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/ompi-1.4.5 --enable-mpi-threads --enable-openib-ibcm --with-sge --with-libltdl=external --with-valgrind --enable-memchecker --with-psm=no --with-esmtp LDFLAGS='-Wl,-z,noexecstack'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That resulted in the backtrace I sent previously:
</span><br>
<span class="quotelev1">&gt; #0  0x00002b0099ec4c4c in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002b00967737ca in opal_progress ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002b00975ef8d5 in barrier ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002b009628da24 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002b00962b24f0 in PMPI_Init ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000400826 in main (argc=1, argv=0x7fff9fe113f8)
</span><br>
<span class="quotelev1">&gt;    at mpihello-long.c:11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For kicks, I tried a 2nd compile of 1.4.5 with a bare minimum of options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/ompi-1.4.5 --with-sge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That resulted in a slightly different backtrace that seems to be missing a bit:
</span><br>
<span class="quotelev1">&gt; #0  0x00002b7bbc8681d0 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #2  0x00002b7bbd2b8f6c in mca_btl_sm_component_progress ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; #3  0x00002b7bb9b2feda in opal_progress ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002b7bba9a98d5 in barrier ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/openmpi/mca_grpcomm_bad.so
</span><br>
<span class="quotelev1">&gt; #5  0x00002b7bb965d426 in ompi_mpi_init ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x00002b7bb967cba0 in PMPI_Init ()
</span><br>
<span class="quotelev1">&gt;   from /netapp/sali/jlb/ompi-1.4.5/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000400826 in main (argc=1, argv=0x7fff93634788)
</span><br>
<span class="quotelev1">&gt;    at mpihello-long.c:11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you also run with a debug build of Open MPI so we can see the line numbers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll do that first thing tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another question.  How reproducible is this on your system?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my testing today, it's been 100% reproducible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's surprising.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Heh.  You're telling me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for taking an interest in this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt; UCSF
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
<li><strong>Next message:</strong> <a href="18754.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18752.php">Gutierrez, Samuel K: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18751.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18759.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18759.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
