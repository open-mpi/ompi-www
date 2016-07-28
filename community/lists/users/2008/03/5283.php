<?
$subject_val = "Re: [OMPI users] Spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 02:03:50 2008" -->
<!-- isoreceived="20080331060350" -->
<!-- sent="Mon, 31 Mar 2008 00:03:41 -0600" -->
<!-- isosent="20080331060341" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn problem" -->
<!-- id="d105ee120803302303i58662cdbuaf92eb2612256089_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2899306a0803302241i76f32f6bv8420380e2324cd07_at_mail.gmail.com" -->
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
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 02:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5284.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5281.php">Joao Vicente Lima: "[OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30/03/2008, Joao Vicente Lima &lt;joao.lima.mail_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  sorry bring this again ... but i hope use spawn in ompi someday :-D
</span><br>
<p>I believe it's crashing in MPI_Finalize because you have not closed
<br>
all communication paths between the parent and the child processes.
<br>
For the parent process, try calling MPI_Comm_free or
<br>
MPI_Comm_disconnect on each intercomm in your intercomm array before
<br>
calling finalize.  On the child, call free or disconnect on the parent
<br>
intercomm before calling finalize.
<br>
<p>Out of curiosity, why a loop of spawns?  Why not increase the value of
<br>
the maxprocs argument, or if you need to spawn different executables,
<br>
or use different arguments for each instance, why not
<br>
MPI_Comm_spawn_multiple?
<br>
<p>mch
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The execution of spawn in this way works fine:
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev1">&gt;  MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  but if this code go to a for I get a problem :
</span><br>
<span class="quotelev1">&gt;  for (i= 0; i &lt; 2; i++)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev1">&gt;   MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm[i], MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  and the error is:
</span><br>
<span class="quotelev1">&gt;  spawning ...
</span><br>
<span class="quotelev1">&gt;  child!
</span><br>
<span class="quotelev1">&gt;  child!
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] Failing at address: 0xc8
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 0] /lib/libpthread.so.0 [0x2ac71ca8bed0]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 1]
</span><br>
<span class="quotelev1">&gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_dpm_base_dyn_finalize+0xa3)
</span><br>
<span class="quotelev1">&gt;  [0x2ac71ba7448c]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 2] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71b9decdf]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71ba04765]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 4]
</span><br>
<span class="quotelev1">&gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Finalize+0x71)
</span><br>
<span class="quotelev1">&gt;  [0x2ac71ba365c9]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 5] ./spawn1(main+0xaa) [0x400ac2]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 6] /lib/libc.so.6(__libc_start_main+0xf4) [0x2ac71ccb7b74]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] [ 7] ./spawn1 [0x400989]
</span><br>
<span class="quotelev1">&gt;  [localhost:03892] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  mpirun noticed that process rank 0 with PID 3892 on node localhost
</span><br>
<span class="quotelev1">&gt;  exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  the attachments contain the ompi_info, config.log and program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  thanks for some check,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joao.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5284.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5281.php">Joao Vicente Lima: "[OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
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
