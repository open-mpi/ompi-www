<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 09:24:32 2007" -->
<!-- isoreceived="20071018132432" -->
<!-- sent="Thu, 18 Oct 2007 15:24:25 +0200" -->
<!-- isosent="20071018132425" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="[OMPI users] which alternative to OpenMPI should I choose?" -->
<!-- id="47175E89.5070703_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 09:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having troubles to run my software after our administrators changed 
<br>
the cluster configuration. It was working perfectly before, however now 
<br>
I get these errors:
<br>
<p>$ mpirun --hostfile ./../hostfile -np 10 ./src/smallTest
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.4 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
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
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
/
<br>
<p>/I assume this could be because of:
<br>
<p>$ /sbin/route
<br>
Kernel IP routing table
<br>
Destination     Gateway         Genmask         Flags Metric Ref    Use 
<br>
Iface
<br>
192.125.17.0    *               255.255.255.0   U     0      0        0 eth1
<br>
192.168.12.0    *               255.255.255.0   U     0      0        0 eth1
<br>
161.254.0.0     *               255.255.0.0     U     0      0        0 eth1
<br>
default         192.125.17.1    0.0.0.0         UG    0      0        0 eth1
<br>
<p>So &quot;narrowly scoped netmasks&quot; which (as it's written in the FAQ) are not 
<br>
supported in the OpenMPI. I asked for a workaround on this newsgroup 
<br>
some time ago - but no answer uptill now. So my question is: what 
<br>
alternative should I choose that will work in such configuration? Do you 
<br>
have some experience in other MPI implementations, for example LamMPI?
<br>
<p>Thank you for your support.
<br>
<p>regards, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4243.php">Jeff Squyres: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Reply:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
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
