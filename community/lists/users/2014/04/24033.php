<?
$subject_val = "[OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 02:17:44 2014" -->
<!-- isoreceived="20140403061744" -->
<!-- sent="Thu, 3 Apr 2014 11:47:43 +0530" -->
<!-- isosent="20140403061743" -->
<!-- name="Nisha Dhankher -M.Tech(CSE)" -->
<!-- email="nishadhankher-coaeseeit_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi query" -->
<!-- id="CAL8-kUAkHa4ui-BbqhW7EddtvSccp9d02X6tc5zLpnAH+FMsGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi query<br>
<strong>From:</strong> Nisha Dhankher -M.Tech(CSE) (<em>nishadhankher-coaeseeit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-03 02:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24034.php">James Horey: "[OMPI users] simple way to build OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24032.php">Tru Huynh: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24035.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24035.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;error btl_tcp_endpint.c: 638 connection failed due to error
<br>
113&lt;<a href="http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113">http://biosupport.se/questions/696/error-btl_tcp_endpintc-638-connection-failed-due-to-error-113</a>&gt;
<br>
<p>In openmpi: this error came when i run my mpiblast program on rocks
<br>
cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when
<br>
i run following command linux_shell$ perl -e 'die$!=113' this msg comes:
<br>
&quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun
<br>
--mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca btl_tcp_if_include
<br>
10.1.255.244 was also executed but it did nt recognized these
<br>
commands....nd aborted.... what should i do...? When i run my mpiblast
<br>
program for the frst time then it give mpi_abort error...bailing out of
<br>
signal -1 on rank 2 processor...then i removed my public ethernet
<br>
cable....and then give btl_tcp endpint error 113....
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24034.php">James Horey: "[OMPI users] simple way to build OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24032.php">Tru Huynh: "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24035.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24035.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
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
