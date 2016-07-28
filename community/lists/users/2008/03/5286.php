<?
$subject_val = "Re: [OMPI users] Spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 11:16:09 2008" -->
<!-- isoreceived="20080331151609" -->
<!-- sent="Mon, 31 Mar 2008 12:15:59 -0300" -->
<!-- isosent="20080331151559" -->
<!-- name="Joao Vicente Lima" -->
<!-- email="joao.lima.mail_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn problem" -->
<!-- id="2899306a0803310815y6a21b4d2n4c0d4c2379e58468_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2899306a0803310749y6dfb3499o8c0af15eded5bad5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn problem<br>
<strong>From:</strong> Joao Vicente Lima (<em>joao.lima.mail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 11:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5287.php">Will Portnoy: "[OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5316.php">Tim Prins: "Re: [OMPI users] Spawn problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
when I call MPI_Init_thread in the same program the error is:
<br>
<p>spawning ...
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
[localhost:07566] *** Process received signal ***
<br>
[localhost:07566] Signal: Aborted (6)
<br>
[localhost:07566] Signal code:  (-6)
<br>
[localhost:07566] [ 0] /lib/libpthread.so.0 [0x2abe5630ded0]
<br>
[localhost:07566] [ 1] /lib/libc.so.6(gsignal+0x35) [0x2abe5654c3c5]
<br>
[localhost:07566] [ 2] /lib/libc.so.6(abort+0x10e) [0x2abe5654d73e]
<br>
[localhost:07566] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2abe5528063b]
<br>
[localhost:07566] [ 4] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2abe55280559]
<br>
[localhost:07566] [ 5] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2abe552805e8]
<br>
[localhost:07566] [ 6] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2abe55280fff]
<br>
[localhost:07566] [ 7] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2abe55280f3d]
<br>
[localhost:07566] [ 8] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2abe55281f59]
<br>
[localhost:07566] [ 9] /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_proc_unpack+
<br>
0x204) [0x2abe552823cd]
<br>
[localhost:07566] [10] /usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2a
<br>
be58efb5f7]
<br>
[localhost:07566] [11] /usr/local/mpi/ompi-svn/lib/libmpi.so.0(MPI_Comm_spawn+0x
<br>
465) [0x2abe552b55cd]
<br>
[localhost:07566] [12] ./spawn1(main+0x9d) [0x400b05]
<br>
[localhost:07566] [13] /lib/libc.so.6(__libc_start_main+0xf4) [0x2abe56539b74]
<br>
[localhost:07566] [14] ./spawn1 [0x4009d9]
<br>
[localhost:07566] *** End of error message ***
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
[localhost:07567] *** Process received signal ***
<br>
[localhost:07567] Signal: Aborted (6)
<br>
[localhost:07567] Signal code:  (-6)
<br>
[localhost:07567] [ 0] /lib/libpthread.so.0 [0x2b48610f9ed0]
<br>
[localhost:07567] [ 1] /lib/libc.so.6(gsignal+0x35) [0x2b48613383c5]
<br>
[localhost:07567] [ 2] /lib/libc.so.6(abort+0x10e) [0x2b486133973e]
<br>
[localhost:07567] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b486006c63b]
<br>
[localhost:07567] [ 4] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b486006c559]
<br>
[localhost:07567] [ 5] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b486006c5e8]
<br>
[localhost:07567] [ 6] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b486006cfff]
<br>
[localhost:07567] [ 7] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b486006cf3d]
<br>
[localhost:07567] [ 8] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b486006df59]
<br>
[localhost:07567] [ 9] /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_proc_unpack+
<br>
0x204) [0x2b486006e3cd]
<br>
[localhost:07567] [10] /usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b
<br>
4863ce75f7]
<br>
[localhost:07567] [11] /usr/local/mpi/ompi-svn/lib/openmpi/mca_dpm_orte.so [0x2b
<br>
4863ce9c2b]
<br>
[localhost:07567] [12] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2b48600720d7]
<br>
[localhost:07567] [13] /usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Init_thread+
<br>
0x166) [0x2b48600ae4f2]
<br>
[localhost:07567] [14] ./spawn1(main+0x2c) [0x400a94]
<br>
[localhost:07567] [15] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b4861325b74]
<br>
[localhost:07567] [16] ./spawn1 [0x4009d9]
<br>
[localhost:07567] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 7566 on node localhost exited on sig
<br>
nal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>thank for some check,
<br>
Joao.
<br>
<p>On Mon, Mar 31, 2008 at 11:49 AM, Joao Vicente Lima
<br>
&lt;joao.lima.mail_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Really MPI_Finalize is crashing and calling MPI_Comm_{free,disconnect} works!
</span><br>
<span class="quotelev1">&gt;  I don't know if the free/disconnect must appear before a MPI_Finalize
</span><br>
<span class="quotelev1">&gt;  for this case (spawn processes)  .... some suggest ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I use loops in spawn:
</span><br>
<span class="quotelev1">&gt;  -  first for testing :)
</span><br>
<span class="quotelev1">&gt;  - and second because certain MPI applications don't know in advance
</span><br>
<span class="quotelev1">&gt;  the number of childrens needed to complete his work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The spawn works is creat ... I will made other tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  thanks,
</span><br>
<span class="quotelev1">&gt;  Joao
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mon, Mar 31, 2008 at 3:03 AM, Matt Hughes
</span><br>
<span class="quotelev1">&gt;  &lt;matt.c.hughes+ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; On 30/03/2008, Joao Vicente Lima &lt;joao.lima.mail_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; Hi,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  sorry bring this again ... but i hope use spawn in ompi someday :-D
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  I believe it's crashing in MPI_Finalize because you have not closed
</span><br>
<span class="quotelev2">&gt;  &gt;  all communication paths between the parent and the child processes.
</span><br>
<span class="quotelev2">&gt;  &gt;  For the parent process, try calling MPI_Comm_free or
</span><br>
<span class="quotelev2">&gt;  &gt;  MPI_Comm_disconnect on each intercomm in your intercomm array before
</span><br>
<span class="quotelev2">&gt;  &gt;  calling finalize.  On the child, call free or disconnect on the parent
</span><br>
<span class="quotelev2">&gt;  &gt;  intercomm before calling finalize.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  Out of curiosity, why a loop of spawns?  Why not increase the value of
</span><br>
<span class="quotelev2">&gt;  &gt;  the maxprocs argument, or if you need to spawn different executables,
</span><br>
<span class="quotelev2">&gt;  &gt;  or use different arguments for each instance, why not
</span><br>
<span class="quotelev2">&gt;  &gt;  MPI_Comm_spawn_multiple?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  mch
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  The execution of spawn in this way works fine:
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  but if this code go to a for I get a problem :
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  for (i= 0; i &lt; 2; i++)
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  {
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;   MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;   MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm[i], MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  }
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  and the error is:
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  spawning ...
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  child!
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  child!
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] Failing at address: 0xc8
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 0] /lib/libpthread.so.0 [0x2ac71ca8bed0]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 1]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_dpm_base_dyn_finalize+0xa3)
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [0x2ac71ba7448c]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 2] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71b9decdf]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71ba04765]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 4]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Finalize+0x71)
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [0x2ac71ba365c9]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 5] ./spawn1(main+0xaa) [0x400ac2]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 6] /lib/libc.so.6(__libc_start_main+0xf4) [0x2ac71ccb7b74]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] [ 7] ./spawn1 [0x400989]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  [localhost:03892] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  mpirun noticed that process rank 0 with PID 3892 on node localhost
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  the attachments contain the ompi_info, config.log and program.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  thanks for some check,
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt; Joao.
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5287.php">Will Portnoy: "[OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5316.php">Tim Prins: "Re: [OMPI users] Spawn problem"</a>
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
