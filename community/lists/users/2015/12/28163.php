<?
$subject_val = "[OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 09:19:30 2015" -->
<!-- isoreceived="20151215141930" -->
<!-- sent="Tue, 15 Dec 2015 14:16:26 +0000 (UTC)" -->
<!-- isosent="20151215141626" -->
<!-- name="Kamal Hossain" -->
<!-- email="khossain65_at_[hidden]" -->
<!-- subject="[OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??" -->
<!-- id="729761151.2451796.1450188986965.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="729761151.2451796.1450188986965.JavaMail.yahoo.ref_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??<br>
<strong>From:</strong> Kamal Hossain (<em>khossain65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 09:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28164.php">Baban Gaigole: "[OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>Previous message:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28165.php">Gilles Gouaillardet: "Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
<li><strong>Reply:</strong> <a href="28165.php">Gilles Gouaillardet: "Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am trying to couple two programs running on two different machines usingopenMPI. Machine A is a 32-bit machine and machine B is a 64-bit machine. So,the configuration is like:&#194;&#160;IA32Machine A with 32-bit binary + x64 Machine B with 64-bit binary.&#194;&#160;Does openMPI allow such a communication? I was able to create32-bit and 64-bit binaries on both machines using openMPI. I can also run theexecutables on both machines separately. But, if I want to communicate betweentwo machines, it simply does not work. I receive the below messages:&#194;&#160;bash: orted: commandnot found--------------------------------------------------------------------------ORTE was unable toreliably start one or more daemons.This usually is causedby:&#194;&#160;* not finding therequired libraries and/or binaries on&#194;&#160; one or more nodes. Please check your PATH andLD_LIBRARY_PATH&#194;&#160; settings, or configure OMPI with--enable-orterun-prefix-by-default&#194;&#160;* lack of authority toexecute on one or more specified nodes.&#194;&#160; Please verify your allocation andauthorities.&#194;&#160;* the inability towrite startup files into /tmp (--tmpdir/orte_tmpdir_base).&#194;&#160; Please check with your sys admin to determinethe correct location to use.&#194;&#160;*&#194;&#160; compilation of the orted with dynamiclibraries when static are required&#194;&#160; (e.g., on Cray). Please check your configurecmd line and consider using&#194;&#160; one of the contrib/platform definitions foryour system type.&#194;&#160;* an inability tocreate a connection back to mpirun due to a&#194;&#160; lack of common network interfaces and/or noroute found between&#194;&#160; them. Please check network connectivity(including firewalls&#194;&#160; and network routing requirements).&#194;&#160;&#194;&#160;Thanks a lot in advance.
<br>
Regards,Kamal
<br>
<p><p>&#194;&#160;------------ Kamal Hossain Home: 0049 (0)9131 9248479 Mob : 0049 (0)179 7005360 ------------ &quot;Never argue with an idiot. They will drag you down to their level&quot;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28164.php">Baban Gaigole: "[OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>Previous message:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28165.php">Gilles Gouaillardet: "Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
<li><strong>Reply:</strong> <a href="28165.php">Gilles Gouaillardet: "Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
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
