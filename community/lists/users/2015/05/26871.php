<?
$subject_val = "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 07:57:42 2015" -->
<!-- isoreceived="20150515115742" -->
<!-- sent="Fri, 15 May 2015 13:57:13 +0200 (CEST)" -->
<!-- isosent="20150515115713" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons" -->
<!-- id="201505151157.t4FBvDW2029722_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 07:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Previous message:</strong> <a href="26870.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Reply:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe reply:</strong> <a href="26876.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe reply:</strong> <a href="26877.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe reply:</strong> <a href="26878.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I successfully installed openmpi-1.8.5 on my machines (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
<br>
gcc-4.9.2 and Sun C 5.13. I get the same error for both compilers,
<br>
if I use the following command and no errors if I change the order
<br>
of the first two machines. I also get no errors if I use
<br>
openmpi-dev-1708-g8497a6a for an arbitrary order of the machines.
<br>
<p><p>tyr hello_1 109 which mpicc
<br>
/usr/local/openmpi-1.8.5_64_cc/bin/mpicc
<br>
tyr hello_1 110 mpiexec -np 5 -host sunpc1,linpc1,tyr,rs0 hello_1_mpi
<br>
ld.so.1: ssh: fatal: relocation error: file /usr/bin/ssh: symbol 
<br>
SUNWcry_installed: referenced symbol not found
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Now the program hangs and &quot;top&quot; shows that &quot;orterun&quot; is very busy.
<br>
<p>&nbsp;&nbsp;&nbsp;PID USERNAME THR PR NCE  SIZE   RES STATE   TIME FLTS    CPU COMMAND
<br>
&nbsp;29550 fd1026     2  0   0 14.5M 8576K cpu01   1:06    0 47.72% orterun
<br>
<p><p><p><p>tyr hello_1 116 mpiexec -np 5 -host linpc1,sunpc1,tyr,rs0 hello_1_mpi
<br>
Process 2 of 5 running on sunpc1
<br>
Process 4 of 5 running on rs0.informatik.hs-fulda.de
<br>
Process 3 of 5 running on tyr.informatik.hs-fulda.de
<br>
Process 1 of 5 running on linpc1
<br>
Process 0 of 5 running on linpc1
<br>
...
<br>
<p><p><p>Everything works fine with openmpi-dev-1708-g8497a6a.
<br>
<p>tyr hello_1 120 which mpicc
<br>
/usr/local/openmpi-1.9.0_64_gcc/bin/mpicc
<br>
tyr hello_1 121 mpiexec -np 5 -host sunpc1,linpc1,tyr,rs0 hello_1_mpi
<br>
Process 2 of 5 running on linpc1
<br>
Process 0 of 5 running on sunpc1
<br>
Process 1 of 5 running on sunpc1
<br>
Process 4 of 5 running on rs0.informatik.hs-fulda.de
<br>
Process 3 of 5 running on tyr.informatik.hs-fulda.de
<br>
...
<br>
<p><p>Any ideas what's going wrong? I would be grateful if somebody can
<br>
fix the problem. Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>Previous message:</strong> <a href="26870.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Reply:</strong> <a href="26873.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe reply:</strong> <a href="26876.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe reply:</strong> <a href="26877.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe reply:</strong> <a href="26878.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
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
