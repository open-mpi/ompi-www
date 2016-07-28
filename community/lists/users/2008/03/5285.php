<?
$subject_val = "Re: [OMPI users] Spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 10:49:21 2008" -->
<!-- isoreceived="20080331144921" -->
<!-- sent="Mon, 31 Mar 2008 11:49:11 -0300" -->
<!-- isosent="20080331144911" -->
<!-- name="Joao Vicente Lima" -->
<!-- email="joao.lima.mail_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn problem" -->
<!-- id="2899306a0803310749y6dfb3499o8c0af15eded5bad5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d105ee120803302303i58662cdbuaf92eb2612256089_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-03-31 10:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5284.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5283.php">Matt Hughes: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5316.php">Tim Prins: "Re: [OMPI users] Spawn problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really MPI_Finalize is crashing and calling MPI_Comm_{free,disconnect} works!
<br>
I don't know if the free/disconnect must appear before a MPI_Finalize
<br>
for this case (spawn processes)  .... some suggest ?
<br>
<p>I use loops in spawn:
<br>
-  first for testing :)
<br>
- and second because certain MPI applications don't know in advance
<br>
the number of childrens needed to complete his work.
<br>
<p>The spawn works is creat ... I will made other tests.
<br>
<p>thanks,
<br>
Joao
<br>
<p>On Mon, Mar 31, 2008 at 3:03 AM, Matt Hughes
<br>
&lt;matt.c.hughes+ompi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 30/03/2008, Joao Vicente Lima &lt;joao.lima.mail_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Hi,
</span><br>
<span class="quotelev2">&gt;  &gt;  sorry bring this again ... but i hope use spawn in ompi someday :-D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I believe it's crashing in MPI_Finalize because you have not closed
</span><br>
<span class="quotelev1">&gt;  all communication paths between the parent and the child processes.
</span><br>
<span class="quotelev1">&gt;  For the parent process, try calling MPI_Comm_free or
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_disconnect on each intercomm in your intercomm array before
</span><br>
<span class="quotelev1">&gt;  calling finalize.  On the child, call free or disconnect on the parent
</span><br>
<span class="quotelev1">&gt;  intercomm before calling finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Out of curiosity, why a loop of spawns?  Why not increase the value of
</span><br>
<span class="quotelev1">&gt;  the maxprocs argument, or if you need to spawn different executables,
</span><br>
<span class="quotelev1">&gt;  or use different arguments for each instance, why not
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_spawn_multiple?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  The execution of spawn in this way works fine:
</span><br>
<span class="quotelev2">&gt;  &gt;  MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev2">&gt;  &gt;  MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  but if this code go to a for I get a problem :
</span><br>
<span class="quotelev2">&gt;  &gt;  for (i= 0; i &lt; 2; i++)
</span><br>
<span class="quotelev2">&gt;  &gt;  {
</span><br>
<span class="quotelev2">&gt;  &gt;   MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev2">&gt;  &gt;   MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm[i], MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt;  &gt;  }
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  and the error is:
</span><br>
<span class="quotelev2">&gt;  &gt;  spawning ...
</span><br>
<span class="quotelev2">&gt;  &gt;  child!
</span><br>
<span class="quotelev2">&gt;  &gt;  child!
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] Failing at address: 0xc8
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 0] /lib/libpthread.so.0 [0x2ac71ca8bed0]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 1]
</span><br>
<span class="quotelev2">&gt;  &gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_dpm_base_dyn_finalize+0xa3)
</span><br>
<span class="quotelev2">&gt;  &gt;  [0x2ac71ba7448c]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 2] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71b9decdf]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71ba04765]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 4]
</span><br>
<span class="quotelev2">&gt;  &gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Finalize+0x71)
</span><br>
<span class="quotelev2">&gt;  &gt;  [0x2ac71ba365c9]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 5] ./spawn1(main+0xaa) [0x400ac2]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 6] /lib/libc.so.6(__libc_start_main+0xf4) [0x2ac71ccb7b74]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] [ 7] ./spawn1 [0x400989]
</span><br>
<span class="quotelev2">&gt;  &gt;  [localhost:03892] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;  &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt;  mpirun noticed that process rank 0 with PID 3892 on node localhost
</span><br>
<span class="quotelev2">&gt;  &gt;  exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;  &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  the attachments contain the ompi_info, config.log and program.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;  thanks for some check,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Joao.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5284.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5283.php">Matt Hughes: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5286.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5316.php">Tim Prins: "Re: [OMPI users] Spawn problem"</a>
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
