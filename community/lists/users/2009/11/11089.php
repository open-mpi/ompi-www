<?
$subject_val = "Re: [OMPI users] Question about checkpoint/restart protocol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 09:21:15 2009" -->
<!-- isoreceived="20091106142115" -->
<!-- sent="Fri, 6 Nov 2009 07:21:10 -0700" -->
<!-- isosent="20091106142110" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about checkpoint/restart protocol" -->
<!-- id="B0DF0061-5DAE-4F16-BC0D-B16B8DC8DE08_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="00BA3BD8D13D7D4092596C9E6AECD9FE429F30DBA2_at_sexgw3k-h2040.local.bibalex.dom" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about checkpoint/restart protocol<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 09:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Previous message:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2009, at 4:46 AM, Mohamed Adel wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sergio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. I've inserted the modules into the kernel  
</span><br>
<span class="quotelev1">&gt; and it all worked fine. But there is still a weired issue. I use the  
</span><br>
<span class="quotelev1">&gt; command &quot;mpirun -n 2 -am ft-enable-cr -H comp001 checkpoint-restart- 
</span><br>
<span class="quotelev1">&gt; test&quot; to start the an mpi job. I then use &quot;ompi-checkpoint PID&quot; to  
</span><br>
<span class="quotelev1">&gt; checkpoint a job, but the ompi-checkpoint didn't respond and the  
</span><br>
<span class="quotelev1">&gt; mpirun produces the following.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process that invoked fork was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Local host:          comp001.local (PID 23514)
</span><br>
<span class="quotelev1">&gt;  MPI_COMM_WORLD rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev1">&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev1">&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [login01.local:21425] 1 more process has sent help message help-mpi- 
</span><br>
<span class="quotelev1">&gt; runtime.txt / mpi_init:warn-fork
</span><br>
<span class="quotelev1">&gt; [login01.local:21425] Set MCA parameter &quot;orte_base_help_aggregate&quot;  
</span><br>
<span class="quotelev1">&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice: if the -n option has a value more than 1, then this error  
</span><br>
<span class="quotelev1">&gt; occurs, but if the -n option has the value 1 then the ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint succeeds, mpirun produces the same message and ompi- 
</span><br>
<span class="quotelev1">&gt; restart fails with the message
</span><br>
<span class="quotelev1">&gt; [login01:21417] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [login01:21417] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [login01:21417] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [login01:21417] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [login01:21417] [ 0] /lib64/libpthread.so.0 [0x32df20de70]
</span><br>
<span class="quotelev1">&gt; [login01:21417] [ 1] /home/mab/openmpi-1.3.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_crs_blcr.so [0x2b093509dfee]
</span><br>
<span class="quotelev1">&gt; [login01:21417] [ 2] /home/mab/openmpi-1.3.3/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_crs_blcr.so(opal_crs_blcr_restart+0xd9) [0x2b093509d251]
</span><br>
<span class="quotelev1">&gt; [login01:21417] [ 3] opal-restart [0x401c3e]
</span><br>
<span class="quotelev1">&gt; [login01:21417] [ 4] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x32dea1d8b4]
</span><br>
<span class="quotelev1">&gt; [login01:21417] [ 5] opal-restart [0x401399]
</span><br>
<span class="quotelev1">&gt; [login01:21417] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 21417 on node  
</span><br>
<span class="quotelev1">&gt; login01.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help with that will be appreciated?
</span><br>
<p>I have not seen this behavior before. The first error is Open MPI  
<br>
warning you that one of your MPI processes is trying to use fork(), so  
<br>
you may want to make sure that your application is not using any system 
<br>
() or fork() function calls. Open MPI internally should not be using  
<br>
any of these functions from within the MPI library linked to the  
<br>
application.
<br>
<p>When you reloaded the BLCR module, did you rebuild Open MPI and  
<br>
install it in a clean directory (not over the top of the old directory)?
<br>
<p>Have you tried to checkpoint/restart an non-MPI process with BLCR on  
<br>
your system? This will help to rule out installation problems with BLCR.
<br>
<p>I suspect that Open MPI is not building correctly, or something in  
<br>
your build environment is confusing/corrupting the build. Can you send  
<br>
me your config.log, it may help me pinpoint the problem if it is build  
<br>
related.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Mohamed Adel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On  
</span><br>
<span class="quotelev1">&gt; Behalf Of Sergio D&#237;az [sdiaz_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 05, 2009 11:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Question about checkpoint/restart protocol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you load the BLCR modules before compiling OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Sergio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohamed Adel escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Dear OMPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm a new OpenMPI user. I've configured openmpi-1.3.3 with those  
</span><br>
<span class="quotelev2">&gt;&gt; options &quot;./configure --prefix=/home/mab/openmpi-1.3.3 --with-sge -- 
</span><br>
<span class="quotelev2">&gt;&gt; enable-ft-thread --with-ft=cr --enable-mpi-threads --enable-static  
</span><br>
<span class="quotelev2">&gt;&gt; --disable-shared --with-blcr=/home/mab/blcr-0.8.2/&quot; then compiled  
</span><br>
<span class="quotelev2">&gt;&gt; and installed it successfully.
</span><br>
<span class="quotelev2">&gt;&gt; Now I'm trying to use the checkpoint/restart protocol. I run a  
</span><br>
<span class="quotelev2">&gt;&gt; program with the options &quot;mpirun -n 2 -am ft-enable-cr -H localhost  
</span><br>
<span class="quotelev2">&gt;&gt; prime/checkpoint-restart-test&quot; but I receive the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [madel:28896] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  opal_cr_init() failed failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [madel:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's  
</span><br>
<span class="quotelev2">&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't find the files mentioned in this post &quot;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10641.php">http://www.open-mpi.org/community/lists/users/2009/09/10641.php</a> 
</span><br>
<span class="quotelev2">&gt;&gt; &quot; (mca_crs_blcr.so, mca_crs_blcr.la). Could you please help me with  
</span><br>
<span class="quotelev2">&gt;&gt; that error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Mohamed Adel
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sergio D&#237;az Montes
</span><br>
<span class="quotelev1">&gt; Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev1">&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
</span><br>
<span class="quotelev1">&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev1">&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11090.php">Nick Holway: "Re: [OMPI users] Segmentation fault whilst running RaXML-MPI"</a>
<li><strong>Previous message:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11061.php">Mohamed Adel: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
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
