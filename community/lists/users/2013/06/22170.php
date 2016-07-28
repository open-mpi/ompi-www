<?
$subject_val = "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 03:02:55 2013" -->
<!-- isoreceived="20130621070255" -->
<!-- sent="Fri, 21 Jun 2013 09:02:50 +0200" -->
<!-- isosent="20130621070250" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4" -->
<!-- id="OFE4071E48.1396DF08-ONC1257B91.00263DFC-C1257B91.0026B614_at_ulstein.com" -->
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
<strong>Subject:</strong> [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4<br>
<strong>From:</strong> <a href="mailto:thomas.forde_at_[hidden]?Subject=Re:%20[OMPI%20users]%20New%20Cluster%20Centos%206.4%20with%20Openmpi%201.6.4"><em>thomas.forde_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-06-21 03:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22171.php">Stefano Zaghi: "[OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Reply:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>im running into a strange problem when trying to start parallell 
<br>
processing with Numcea Fine Marine software for jobs.
<br>
<p>I have managed to setup openmpi 1.64 on qmaster and all nodes, so they all 
<br>
run the same version.
<br>
<p>Every time i try to start a job that requires more then 1 node the job 
<br>
dies with the following error:
<br>
<p>ORTE_ERROR_LOG: Data unpack had inadequate space in file 
<br>
base/odls_base_default_fns.c at line 528
<br>
ORTE_ERROR_LOG: Data unpack had inadequate space in file 
<br>
orted/orted_comm.c at line 292
<br>
<p>If i run the job with only 16 cores(1 node) the jobs runs fine.
<br>
<p>Im new to all this, so im trying hard to figoure out where the mistake may 
<br>
lie, but even trying to search th archives for what i might think be 
<br>
right, gives me so amny hits it takes forever to investigate.
<br>
<p>Any help would be appreciated.
<br>
<p>./THomas
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Denne e-posten kan innehalde informasjon som er konfidensiell 
<br>
og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har 
<br>
adgang 
<br>
til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. 
<br>
Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr 
<br>
e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og 
<br>
kopiar av den.
<br>
<p>This e-mail may contain confidential information, or otherwise 
<br>
be protected against unauthorised use. Any disclosure, distribution or 
<br>
other use of the information by anyone but the intended recipient is 
<br>
strictly prohibited. 
<br>
If you have received this e-mail in error, please advise the sender by 
<br>
immediate reply and destroy the received documents and any copies hereof.
<br>
<p><p>PBefore 
<br>
printing, think about the environment
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-22170/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22171.php">Stefano Zaghi: "[OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22169.php">Ralph Castain: "Re: [OMPI users] Detecting Node Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Reply:</strong> <a href="22189.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
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
