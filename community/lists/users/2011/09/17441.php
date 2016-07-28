<?
$subject_val = "[OMPI users] Role of ethernet interfaces of startup of openmpi job using IB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 06:36:03 2011" -->
<!-- isoreceived="20110927103603" -->
<!-- sent="Tue, 27 Sep 2011 12:35:05 +0200" -->
<!-- isosent="20110927103505" -->
<!-- name="Salvatore Podda" -->
<!-- email="salvatore.podda_at_[hidden]" -->
<!-- subject="[OMPI users] Role of ethernet interfaces of startup of openmpi job using IB" -->
<!-- id="7F9F9215-FCED-4F75-984A-7F466E5FE740_at_enea.it" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB<br>
<strong>From:</strong> Salvatore Podda (<em>salvatore.podda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 06:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17440.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Maybe reply:</strong> <a href="17476.php">Salvatore Podda: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We would like to know if the ethernet interfaces play any role in the  
<br>
startup phase of an opempi job using InfiniBand
<br>
&nbsp;&nbsp;In this case, where we can found some literature on this topic?
<br>
<p>This interest arises from some observations of a substantial time  
<br>
overhead on the startup of our openmpi jobs using IB.
<br>
Looking at  the `tcpdump' on the involved nodes we register a  
<br>
substained ARP traffic on the eth0/eth1 interfaces on the
<br>
nodes itself. Following the suggestions on
<br>
<p><a href="http://www.openfabrics.org/downloads/OFED/ofed-1.4/OFED-1.4-docs/ipoib_release_notes.txt">http://www.openfabrics.org/downloads/OFED/ofed-1.4/OFED-1.4-docs/ipoib_release_notes.txt</a>
<br>
<p>we filter the arp traffic on both the eth interfaces obtainig a  
<br>
drammatic reduction on the time overhead.
<br>
This depends also from the eth interface we decide to filter. We do  
<br>
realize to have some trouble
<br>
in our ethernet fabric and for a better understanding of the problems  
<br>
we would to know the role, if any,
<br>
of the eth interfaces.
<br>
<p>Regards
<br>
<p>Salvatore Podda
<br>
<p>ENEA UTICT-HPC
<br>
Department for Computer Science Development and ICT
<br>
Facilities Laboratory for Science and High Performace Computing
<br>
<p>C.R. Frascati
<br>
Via E. Fermi, 45
<br>
PoBox 65
<br>
00044 Frascati (Rome)
<br>
Italy
<br>
<p>Tel:  +39 06 9400 5342
<br>
Fax: +39 06 9400 5551
<br>
Fax: +39 06 9400 5735
<br>
E-mail: salvatore.podda_at_[hidden]
<br>
Home Page: www.cresco.enea.it
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17440.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Maybe reply:</strong> <a href="17476.php">Salvatore Podda: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
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
