<?
$subject_val = "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 12:55:33 2013" -->
<!-- isoreceived="20130830165533" -->
<!-- sent="Fri, 30 Aug 2013 17:55:02 +0100" -->
<!-- isosent="20130830165502" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation" -->
<!-- id="CAPqNE2WRimyRh5fNDYSdAbBZg30_sgiMiGb5Jg_CF0c5i=F2UQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPqNE2U76KBMv2Erayi4zNMwU2eBzSiFCwwepAVTG6jpC3FYtg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-30 12:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22582.php">Huangwei: "[OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="22580.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>In reply to:</strong> <a href="22580.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Serves me right for not reading your original mail.... you have SLES 11 SP2
<br>
<p>The openmpi RPMs are provided by the SuSE Software Development Kit DVD.
<br>
you can download SIO images of this from the SUSE website.
<br>
For SP! it is named  SLE-SP1-SDK-DVD-x86_64-GM-DVD1.iso
<br>
<p>So you should copy this .iso file onto your system - the SP2 version of
<br>
course.
<br>
Use YAST to enable it as a software repositoty, or use zypper -ar to add it
<br>
as a repository
<br>
<p>zypper search openmpi
<br>
zypper install openmpi
<br>
<p>I have bored this list enought with Suse stuff - send me an email if you
<br>
cannot get the above recipe to work.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22582.php">Huangwei: "[OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="22580.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<li><strong>In reply to:</strong> <a href="22580.php">John Hearns: "Re: [OMPI users] Trouble with Suse Linux Enterprise Server 11 Installation"</a>
<!-- nextthread="start" -->
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
