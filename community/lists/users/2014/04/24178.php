<?
$subject_val = "[OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 13:16:06 2014" -->
<!-- isoreceived="20140414171606" -->
<!-- sent="Mon, 14 Apr 2014 13:15:45 -0400" -->
<!-- isosent="20140414171545" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDe19qMHdQ3PL9N4z_ZJPYeOSaL8yOj6bUJ__g_WMAWcgA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mpirun runs in serial even I set np to several processors<br>
<strong>From:</strong> Djordje Romanic (<em>djordje8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 13:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24186.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run WRF-ARW in parallel. This is configuration of my system:
<br>
-------------------------------------------------
<br>
Architecture:          x86_64
<br>
CPU op-mode(s):        32-bit, 64-bit
<br>
Byte Order:            Little Endian
<br>
CPU(s):                4
<br>
On-line CPU(s) list:   0-3
<br>
Thread(s) per core:    1
<br>
Core(s) per socket:    4
<br>
Socket(s):             1
<br>
NUMA node(s):          1
<br>
Vendor ID:             AuthenticAMD
<br>
CPU family:            16
<br>
Model:                 2
<br>
Stepping:              3
<br>
CPU MHz:               1150.000
<br>
BogoMIPS:              4587.84
<br>
Virtualization:        AMD-V
<br>
L1d cache:             64K
<br>
L1i cache:             64K
<br>
L2 cache:              512K
<br>
L3 cache:              2048K
<br>
NUMA node0 CPU(s):     0-3
<br>
-------------------------------------------------
<br>
<p>When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
<br>
-------------------------------------------------
<br>
&nbsp;starting wrf task            0  of            1
<br>
&nbsp;starting wrf task            0  of            1
<br>
&nbsp;starting wrf task            0  of            1
<br>
&nbsp;starting wrf task            0  of            1
<br>
-------------------------------------------------
<br>
This indicates that it is not using 4 processors, but 1.
<br>
<p>Any idea what might be the problem?
<br>
<p>Thanks,
<br>
Djordje
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24186.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
