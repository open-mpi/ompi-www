<?
$subject_val = "[OMPI users] problem restarting multiprocess mpi application";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 13 15:58:01 2009" -->
<!-- isoreceived="20091213205801" -->
<!-- sent="Sun, 13 Dec 2009 12:57:56 -0800 (PST)" -->
<!-- isosent="20091213205756" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] problem restarting multiprocess mpi application" -->
<!-- id="905903.61489.qm_at_web31007.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem restarting multiprocess mpi application<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-13 15:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11526.php">Aleksej Saushev: "[OMPI users] OpenMPI status on NetBSD (works!)"</a>
<li><strong>Previous message:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11733.php">Josh Hursey: "Re: [OMPI users] problem restarting multiprocess mpi application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11733.php">Josh Hursey: "Re: [OMPI users] problem restarting multiprocess mpi application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am running a simple mpi application which looks as follows:
<br>
<p>######################################
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;signal.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
int rank,size;
<br>
<p>MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
printf(&quot;Hello\n&quot;); 
<br>
sleep(15);
<br>
printf(&quot;Hello again\n&quot; );
<br>
sleep(15);
<br>
printf(&quot;Final Hello\n&quot;); 
<br>
sleep(15);
<br>
printf(&quot;bye \n&quot;);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
#################################
<br>
<p>When I run my application as follows, it checkpoint correctly but when i try to restart it if gives the following errors:
<br>
<p>######################################
<br>
<p>ompi-restart ompi_global_snapshot_380.ckpt
<br>
Hello again
<br>
[sun06:00381] *** Process received signal ***
<br>
[sun06:00381] Signal: Bus error (7)
<br>
[sun06:00381] Signal code:  (2)
<br>
[sun06:00381] Failing at address: 0xae7cb054
<br>
[sun06:00381] [ 0] [0xb7f8640c]
<br>
[sun06:00381] [ 1] /home/raj/openmpisof/lib/libopen-pal.so.0(opal_progress+0x123) [0xb7b95456]
<br>
[sun06:00381] [ 2] /home/raj/openmpisof/lib/libopen-pal.so.0 [0xb7bcb093]
<br>
[sun06:00381] [ 3] /home/raj/openmpisof/lib/libopen-pal.so.0 [0xb7bcae97]
<br>
[sun06:00381] [ 4] /home/raj/openmpisof/lib/libopen-pal.so.0(opal_crs_blcr_checkpoint+0x187) [0xb7bca69b]
<br>
[sun06:00381] [ 5] /home/raj/openmpisof/lib/libopen-pal.so.0(opal_cr_inc_core+0xc3) [0xb7b970bd]
<br>
[sun06:00381] [ 6] /home/raj/openmpisof/lib/libopen-rte.so.0 [0xb7cab06f]
<br>
[sun06:00381] [ 7] /home/raj/openmpisof/lib/libopen-pal.so.0(opal_cr_test_if_checkpoint_ready+0x129) [0xb7b96fca]
<br>
[sun06:00381] [ 8] /home/raj/openmpisof/lib/libopen-pal.so.0 [0xb7b97698]
<br>
[sun06:00381] [ 9] /lib/libpthread.so.0 [0xb7ac4f3b]
<br>
[sun06:00381] [10] /lib/libc.so.6(clone+0x5e) [0xb7a4bbee]
<br>
[sun06:00381] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 399 on node sun06 exited on signal 7 (Bus error).
<br>
--------------------------------------------------------------------------
<br>
#####################################################################
<br>
<p>I am running it as follows:
<br>
<p>################################################################
<br>
mpirun -am ft-enable-cr -np 2 -mca btl ^openib -mca snapc_base_global_snapshot_dir /tmp mpisleepbas.
<br>
################################################################
<br>
<p>Once a checkpoint it taken, I have to copy it to the home directory and try to restart it.
<br>
<p>please not that if i used - np 1, it works fine when i restart it. The problem is mainly when the application has more than one process running.
<br>
<p><p>Any help will be very appreciated
<br>
<p><p>Raj
<br>
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11526.php">Aleksej Saushev: "[OMPI users] OpenMPI status on NetBSD (works!)"</a>
<li><strong>Previous message:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11733.php">Josh Hursey: "Re: [OMPI users] problem restarting multiprocess mpi application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11733.php">Josh Hursey: "Re: [OMPI users] problem restarting multiprocess mpi application"</a>
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
