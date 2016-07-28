<?
$subject_val = "[OMPI users] OSU_latency_mt is failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 04:17:05 2011" -->
<!-- isoreceived="20111206091705" -->
<!-- sent="Tue, 6 Dec 2011 14:47:00 +0530" -->
<!-- isosent="20111206091700" -->
<!-- name="bhimesh akula" -->
<!-- email="bhimesh.akula_at_[hidden]" -->
<!-- subject="[OMPI users] OSU_latency_mt is failing" -->
<!-- id="CAPOYHvaQ7kW4dMzon50g_YAaF6Ui6rxS-XOhH=_Apx6+MC+Ebg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OSU_latency_mt is failing<br>
<strong>From:</strong> bhimesh akula (<em>bhimesh.akula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 04:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<li><strong>Previous message:</strong> <a href="17891.php">Fernanda Oliveira: "[OMPI users] MPI_Comm_spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<li><strong>Reply:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried execute the Osu_latency_mt as mentioned below
<br>
<p>First build the openmpi with Multi-threaded support as Osu_latency_mt
<br>
needed
<br>
<p><span class="quotelev1">&gt; [root_at_localhost openmpi-1.4.3]# ./configure --with-threads=posix
</span><br>
--enable-mpi-threads
<br>
<p><span class="quotelev1">&gt; make &amp;&amp; make install
</span><br>
<p><p><span class="quotelev1">&gt; [root_at_localhost openmpi-1.4.3]# mpirun --prefix /usr/local/ -np 2 --mca
</span><br>
btl openib,self -H 192.168.0.174,192.168.0.175
<br>
/root/ramu/ofed_pkgs/osu_benchmarks-3.1.1/osu_latency_mt
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;Local host:            test2
<br>
&nbsp;&nbsp;Device name:           plx2_0
<br>
&nbsp;&nbsp;Device vendor ID:      0x10b5
<br>
&nbsp;&nbsp;Device vendor part ID: 4277
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[29990,1],0]) is on host: localhost.localdomain
<br>
&nbsp;&nbsp;Process 2 ([[29990,1],1]) is on host: 192
<br>
&nbsp;&nbsp;BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[localhost.localdomain:32216] Abort before MPI_INIT completed successfully;
<br>
not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 32216 on
<br>
node localhost.localdomain exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[test2:2104] Abort before MPI_INIT completed successfully; not able to
<br>
guarantee that all other processes were killed!
<br>
[localhost.localdomain:32214] 1 more process has sent help message
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
[localhost.localdomain:32214] Set MCA parameter &quot;orte_base_help_aggregate&quot;
<br>
to 0 to see all help / error messages
<br>
[localhost.localdomain:32214] 1 more process has sent help message
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
<p><p>Remaining all MPI cases executed well only this case creating problem ..
<br>
&quot;The MPI_Init_thread() function was called before MPI_INIT was invoked &quot;
<br>
<p>Please give suggestions to execute this.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<li><strong>Previous message:</strong> <a href="17891.php">Fernanda Oliveira: "[OMPI users] MPI_Comm_spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<li><strong>Reply:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
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
