<?
$subject_val = "Re: [OMPI users] Spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 11:07:58 2008" -->
<!-- isoreceived="20080404150758" -->
<!-- sent="Fri, 04 Apr 2008 11:07:57 -0400" -->
<!-- isosent="20080404150757" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn problem" -->
<!-- id="47F6444D.90508_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 11:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5317.php">Audet, Martin: "[OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>Previous message:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joao,
<br>
<p>Thanks for the bug report! You do not have to call free/disconnect 
<br>
before MPI_Finalize. If you do not, they will be called automatically. 
<br>
Unfortunately, there was a bug in the code that did the free/disconnect 
<br>
automatically. This is fixed in r18079.
<br>
<p>Thanks again,
<br>
<p>Tim
<br>
<p><p>Joao Vicente Lima wrote:
<br>
<span class="quotelev1">&gt; Really MPI_Finalize is crashing and calling MPI_Comm_{free,disconnect} works!
</span><br>
<span class="quotelev1">&gt; I don't know if the free/disconnect must appear before a MPI_Finalize
</span><br>
<span class="quotelev1">&gt; for this case (spawn processes)  .... some suggest ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use loops in spawn:
</span><br>
<span class="quotelev1">&gt; -  first for testing :)
</span><br>
<span class="quotelev1">&gt; - and second because certain MPI applications don't know in advance
</span><br>
<span class="quotelev1">&gt; the number of childrens needed to complete his work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The spawn works is creat ... I will made other tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Joao
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 31, 2008 at 3:03 AM, Matt Hughes
</span><br>
<span class="quotelev1">&gt; &lt;matt.c.hughes+ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 30/03/2008, Joao Vicente Lima &lt;joao.lima.mail_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  sorry bring this again ... but i hope use spawn in ompi someday :-D
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I believe it's crashing in MPI_Finalize because you have not closed
</span><br>
<span class="quotelev2">&gt;&gt;  all communication paths between the parent and the child processes.
</span><br>
<span class="quotelev2">&gt;&gt;  For the parent process, try calling MPI_Comm_free or
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_disconnect on each intercomm in your intercomm array before
</span><br>
<span class="quotelev2">&gt;&gt;  calling finalize.  On the child, call free or disconnect on the parent
</span><br>
<span class="quotelev2">&gt;&gt;  intercomm before calling finalize.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Out of curiosity, why a loop of spawns?  Why not increase the value of
</span><br>
<span class="quotelev2">&gt;&gt;  the maxprocs argument, or if you need to spawn different executables,
</span><br>
<span class="quotelev2">&gt;&gt;  or use different arguments for each instance, why not
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_spawn_multiple?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  The execution of spawn in this way works fine:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  but if this code go to a for I get a problem :
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  for (i= 0; i &lt; 2; i++)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;   MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;   MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm[i], MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  and the error is:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  spawning ...
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  child!
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  child!
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] Failing at address: 0xc8
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 0] /lib/libpthread.so.0 [0x2ac71ca8bed0]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_dpm_base_dyn_finalize+0xa3)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [0x2ac71ba7448c]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 2] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71b9decdf]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71ba04765]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  /usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Finalize+0x71)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [0x2ac71ba365c9]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 5] ./spawn1(main+0xaa) [0x400ac2]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 6] /lib/libc.so.6(__libc_start_main+0xf4) [0x2ac71ccb7b74]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] [ 7] ./spawn1 [0x400989]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  [localhost:03892] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  mpirun noticed that process rank 0 with PID 3892 on node localhost
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  the attachments contain the ompi_info, config.log and program.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  thanks for some check,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Joao.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5317.php">Audet, Martin: "[OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>Previous message:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
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
