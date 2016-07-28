<?
$subject_val = "[OMPI users] undefined symbol: tm_init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 20:42:05 2009" -->
<!-- isoreceived="20090210014205" -->
<!-- sent="Tue, 10 Feb 2009 12:41:45 +1100" -->
<!-- isosent="20090210014145" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="[OMPI users] undefined symbol: tm_init" -->
<!-- id="4990DB59.2050909_at_vpac.org" -->
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
<strong>Subject:</strong> [OMPI users] undefined symbol: tm_init<br>
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 20:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8004.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>I've just installed OpenMPI 1.3 on our cluster, and am getting this 
<br>
issue on jobs &gt; 1 node.
<br>
<p>mpiexec: symbol lookup error: 
<br>
/usr/local/openmpi/1.3-pgi/lib/openmpi/mca_plm_tm.so: undefined symbol: 
<br>
tm_init
<br>
<p>As reported before, I saw someone saying that they solved this with: 
<br>
--enable-mca-static=plm:tm
<br>
<p>A new install using this configure option does work for me, but only for 
<br>
code recompiled with this new mpicc.  Existing code doesn't spawn properly.
<br>
<p>As such, I'd much rather get the existing install working again.
<br>
<p>It was suggested that I need the torque libraries on the compute nodes, 
<br>
which they are.  However adding them to ld.so.conf has not solved this, 
<br>
so I'm not sure what more needs to be done to solve this without 
<br>
recompiling openmpi.
<br>
<p>Thanks in advance for any help.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><pre>
-- 
Brett Pemberton - VPAC Senior Systems Administrator
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8003/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8004.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Previous message:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
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
