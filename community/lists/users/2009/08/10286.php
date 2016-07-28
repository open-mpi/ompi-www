<?
$subject_val = "[OMPI users] problem configuring with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 00:36:39 2009" -->
<!-- isoreceived="20090811043639" -->
<!-- sent="Tue, 11 Aug 2009 00:36:32 -0400" -->
<!-- isosent="20090811043632" -->
<!-- name="Craig Plaisance" -->
<!-- email="cpp6f_at_[hidden]" -->
<!-- subject="[OMPI users] problem configuring with torque" -->
<!-- id="4A80F550.4010508_at_virginia.edu" -->
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
<strong>Subject:</strong> [OMPI users] problem configuring with torque<br>
<strong>From:</strong> Craig Plaisance (<em>cpp6f_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 00:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>Reply:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building openmpi on a cluster running rocks.  When I build using 
<br>
./configure --with-tm=/share/apps/torque 
<br>
--prefix=/share/apps/openmpi/intel I receive the warning
<br>
configure: WARNING: Unrecognized options: --with-tm, 
<br>
--enable-ltdl-convenience
<br>
After running make and make install, I run ompi-info | grep tm and don't 
<br>
see the entries
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.0, Component v1.0)
<br>
<p>Any idea what is happening?  Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10285.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>Reply:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
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
