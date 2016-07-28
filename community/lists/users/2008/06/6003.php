<?
$subject_val = "[OMPI users] Problem with gateway between 2 hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 11:30:01 2008" -->
<!-- isoreceived="20080630153001" -->
<!-- sent="Mon, 30 Jun 2008 17:29:55 +0200" -->
<!-- isosent="20080630152955" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with gateway between 2 hosts" -->
<!-- id="b4f9bf870806300829p4d147875v1ecc6521aa4985a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with gateway between 2 hosts<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-30 11:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6002.php">Kritiraj Sajadah: "[OMPI users] checkpoint file contains nothing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Reply:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6009.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Does anybody face problems running Openmpi on two hosts with different
<br>
networks (gateway to reach the other) ?
<br>
Let say compil02 ip adress is 172.3.9.10 and r009n001 is 10.160.4.1
<br>
<p>There is no problem with MPI_init free executables (for example hostname)
<br>
<p>compil02% /tmp/HALMPI/openmpi-1.2.2/bin/mpirun --prefix
<br>
/tmp/HALMPI/openmpi-1.2.2 -np 1 -host compil02 hostname : -np 1 -host
<br>
r009n001 hostname
<br>
r009n001
<br>
compil02
<br>
<p>But as soon as I try a simple hello world , it 's crashing with the
<br>
following error message.
<br>
Please note that when I try to run hello between r009n001 (10.160.4.1) and
<br>
r009n002 (10.160.4.2), it works fine
<br>
<p>Thanks in advance for your help.
<br>
Regards
<br>
<p>Geoffroy
<br>
<p><p>PS: same error with openmpi v1.2.5
<br>
<p><p>compil02% /tmp/HALMPI/openmpi-1.2.2/bin/mpirun --prefix
<br>
/tmp/HALMPI/openmpi-1.2.2 -np 1 -host compil02 /tmp/hello : -np 1 -host
<br>
r009n001 /tmp/hello
<br>
--------------------------------------------------------------------------
<br>
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
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
--------------------------------------------------------------------------
<br>
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
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
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6002.php">Kritiraj Sajadah: "[OMPI users] checkpoint file contains nothing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Reply:</strong> <a href="6004.php">Reuti: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6009.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
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
