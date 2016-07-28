<?
$subject_val = "Re: [OMPI users] OpenMPI and Rmpi/snow";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 18:42:39 2012" -->
<!-- isoreceived="20120726224239" -->
<!-- sent="Thu, 26 Jul 2012 15:42:32 -0700" -->
<!-- isosent="20120726224232" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Rmpi/snow" -->
<!-- id="65174098-2D4C-480A-9937-89C95854EF4F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6CCACA2E-D323-4DF8-818B-2FD35C6A5D00_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Rmpi/snow<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 18:42:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19839.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19839.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Reply:</strong> <a href="19839.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it looks like comm_spawn is working on 1.6. Afraid I don't know enough about Rmpi/snow to advise on what changed, but you could add some debug params to get an idea of where the problem is occurring:
<br>
<p>-mca plm_base_verbose 5 -mca dpm_base_verbose 5
<br>
<p>should tell you from an OMPI perspective. I can try to help debug that end, at least.
<br>
<p><p>On Jul 26, 2012, at 3:02 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Weird - looks like it has done a comm_spawn and having trouble connecting between the jobs. I can check the basic code and make sure it is working - I seem to recall someone else recently talking about Rmpi changes causing problems (different ones than this, IIRC), so you might want to search our user archives for rmpi to see what they ran into. Not sure what rmpi changed, or why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2012, at 2:41 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have ran into a problem using Rmpi with OpenMPI (trying to get snow running).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I built OpenMPI following another post where I built static:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$INSTALL/gcc-4.4.6-static --mandir=$INSTALL/gcc-4.4.6-static/man --with-tm=/usr/local/torque/ --with-openib --with-psm --enable-static CC=gcc CXX=g++ FC=gfortran F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rmpi/snow work fine when I run on a single node.  When I span more than one node I get nasty errors (pasted below).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tested this mpi install with a simple hello world and that works.  Any thoughts what is different about Rmpi/snow that could cause this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0400.engin.umich.edu:11927] [[48116,0],4] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0400.engin.umich.edu:11927] [[48116,0],4]:route_callback tried routing message from [[48116,2],16] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0405.engin.umich.edu:07707] [[48116,0],8] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0405.engin.umich.edu:07707] [[48116,0],8]:route_callback tried routing message from [[48116,2],32] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2b7e9209e0df]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(+0x9f77a) [0x2b7e9206577a]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(mca_oob_tcp_msg_recv_complete+0x27f) [0x2b7e920404af]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(+0x7bed2) [0x2b7e92041ed2]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_event_base_loop+0x238) [0x2b7e92087e38]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(orte_daemon+0x8d8) [0x2b7e92016768]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:orted(main+0x66) [0x400966]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/lib64/libc.so.6(__libc_start_main+0xfd) [0x3d39c1ecdd]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:orted() [0x400839]
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0397.engin.umich.edu:06959] [[48116,0],1] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0397.engin.umich.edu:06959] [[48116,0],1]:route_callback tried routing message from [[48116,2],7] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0401.engin.umich.edu:07782] [[48116,0],5] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0401.engin.umich.edu:07782] [[48116,0],5]:route_callback tried routing message from [[48116,2],23] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0406.engin.umich.edu:07743] [[48116,0],9] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0406.engin.umich.edu:07743] [[48116,0],9]:route_callback tried routing message from [[48116,2],39] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2ae2ad17d0df]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19839.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Previous message:</strong> <a href="19837.php">Damien: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<li><strong>In reply to:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19839.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Reply:</strong> <a href="19839.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
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
