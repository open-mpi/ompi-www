<?
$subject_val = "[OMPI users] IMB-OpenMPI on Centos 6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 02:10:05 2012" -->
<!-- isoreceived="20120227071005" -->
<!-- sent="Mon, 27 Feb 2012 12:40:00 +0530" -->
<!-- isosent="20120227071000" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="[OMPI users] IMB-OpenMPI on Centos 6" -->
<!-- id="CACiOAODsJPp57zrNio9X50vaqqmmAnc2LEXo_h-B-tTJmFYD8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] IMB-OpenMPI on Centos 6<br>
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 02:10:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Previous message:</strong> <a href="18557.php">Tal Regev: "[OMPI users] OpenMPI at windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Reply:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Reply:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are facing a problem while running the IMB [Intel MPI Benchmark] tests
<br>
on Centos 6.0.
<br>
All the tests [PingPong, Exchange.. etc] stalls after some time with no
<br>
errors.
<br>
<p>Introduction:
<br>
Our's is a customized OFED stack[Our own Driver specific library and Kernel
<br>
drivers for the h/w], we use IMB tests for testing the same.
<br>
We have already tested the same stack on RHEL5.4 and it was fine.
<br>
<p>Observation:
<br>
Tests sends few packets and it is observed that acknowledgement for all
<br>
those packets are received. But no more Send Work Queue entries added for
<br>
the driver to process.
<br>
Test does not return at all, just stalls there after sending few packets.
<br>
Observed only in Centos 6/RHEL 6.
<br>
<p>Versions of packages installed :
<br>
OpenMPI     - 1.4.3
<br>
LibIbVerbs   - 1.1.4
<br>
LibIbUmad   - 1.3.6
<br>
IMB             - 3.2.2
<br>
<p>Please confirm if the versions are compatible with RHEL6. If not, Please
<br>
suggest the appropriate packages.
<br>
<p>Please respond ASAP. Any help will be appreciated.
<br>
<p><p><p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
Software Engineer,One Convergence Devices Pvt Ltd.,
Jubille Hills,Hyderabad.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Previous message:</strong> <a href="18557.php">Tal Regev: "[OMPI users] OpenMPI at windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Reply:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Reply:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
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
