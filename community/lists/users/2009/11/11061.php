<?
$subject_val = "Re: [OMPI users] Question about checkpoint/restart protocol";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 06:47:21 2009" -->
<!-- isoreceived="20091105114721" -->
<!-- sent="Thu, 5 Nov 2009 13:46:42 +0200" -->
<!-- isosent="20091105114642" -->
<!-- name="Mohamed Adel" -->
<!-- email="Mohamed.Adel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about checkpoint/restart protocol" -->
<!-- id="00BA3BD8D13D7D4092596C9E6AECD9FE429F30DBA2_at_sexgw3k-h2040.local.bibalex.dom" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AF29D25.3020508_at_cesga.es" -->
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
<strong>From:</strong> Mohamed Adel (<em>Mohamed.Adel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 06:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11062.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076"</a>
<li><strong>Previous message:</strong> <a href="11060.php">Sergio D&#237;az: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>In reply to:</strong> <a href="11060.php">Sergio D&#237;az: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Reply:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sergio,
<br>
<p>Thank you for your reply. I've inserted the modules into the kernel and it all worked fine. But there is still a weired issue. I use the command &quot;mpirun -n 2 -am ft-enable-cr -H comp001 checkpoint-restart-test&quot; to start the an mpi job. I then use &quot;ompi-checkpoint PID&quot; to checkpoint a job, but the ompi-checkpoint didn't respond and the mpirun produces the following.
<br>
<p>--------------------------------------------------------------------------
<br>
An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.  
<br>
<p>The process that invoked fork was:
<br>
<p>&nbsp;&nbsp;Local host:          comp001.local (PID 23514)
<br>
&nbsp;&nbsp;MPI_COMM_WORLD rank: 0
<br>
<p>If you are *absolutely sure* that your application will successfully
<br>
and correctly survive a call to fork(), you may disable this warning
<br>
by setting the mpi_warn_on_fork MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
[login01.local:21425] 1 more process has sent help message help-mpi-runtime.txt / mpi_init:warn-fork
<br>
[login01.local:21425] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>Notice: if the -n option has a value more than 1, then this error occurs, but if the -n option has the value 1 then the ompi-checkpoint succeeds, mpirun produces the same message and ompi-restart fails with the message 
<br>
[login01:21417] *** Process received signal ***
<br>
[login01:21417] Signal: Segmentation fault (11)
<br>
[login01:21417] Signal code: Address not mapped (1)
<br>
[login01:21417] Failing at address: (nil)
<br>
[login01:21417] [ 0] /lib64/libpthread.so.0 [0x32df20de70]
<br>
[login01:21417] [ 1] /home/mab/openmpi-1.3.3/lib/openmpi/mca_crs_blcr.so [0x2b093509dfee]
<br>
[login01:21417] [ 2] /home/mab/openmpi-1.3.3/lib/openmpi/mca_crs_blcr.so(opal_crs_blcr_restart+0xd9) [0x2b093509d251]
<br>
[login01:21417] [ 3] opal-restart [0x401c3e]
<br>
[login01:21417] [ 4] /lib64/libc.so.6(__libc_start_main+0xf4) [0x32dea1d8b4]
<br>
[login01:21417] [ 5] opal-restart [0x401399]
<br>
[login01:21417] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 21417 on node login01.local exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Any help with that will be appreciated?
<br>
<p>Thanks in advance,
<br>
Mohamed Adel
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Sergio D&#237;az [sdiaz_at_[hidden]]
<br>
Sent: Thursday, November 05, 2009 11:38 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Question about checkpoint/restart protocol
<br>
<p>Hi,
<br>
<p>Did you load the BLCR modules before compiling OpenMPI?
<br>
<p>Regards,
<br>
Sergio
<br>
<p>Mohamed Adel escribi&#243;:
<br>
<span class="quotelev1">&gt; Dear OMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a new OpenMPI user. I've configured openmpi-1.3.3 with those options &quot;./configure --prefix=/home/mab/openmpi-1.3.3 --with-sge --enable-ft-thread --with-ft=cr --enable-mpi-threads --enable-static --disable-shared --with-blcr=/home/mab/blcr-0.8.2/&quot; then compiled and installed it successfully.
</span><br>
<span class="quotelev1">&gt; Now I'm trying to use the checkpoint/restart protocol. I run a program with the options &quot;mpirun -n 2 -am ft-enable-cr -H localhost prime/checkpoint-restart-test&quot; but I receive the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [madel:28896] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   opal_cr_init() failed failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [madel:28896] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't find the files mentioned in this post &quot;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10641.php">http://www.open-mpi.org/community/lists/users/2009/09/10641.php</a>&quot; (mca_crs_blcr.so, mca_crs_blcr.la). Could you please help me with that error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Mohamed Adel
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
Sergio D&#237;az Montes
Centro de Supercomputacion de Galicia
Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
------------------------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11062.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.076"</a>
<li><strong>Previous message:</strong> <a href="11060.php">Sergio D&#237;az: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>In reply to:</strong> <a href="11060.php">Sergio D&#237;az: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Reply:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
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
