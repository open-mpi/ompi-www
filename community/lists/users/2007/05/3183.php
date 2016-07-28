<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 11:37:18 2007" -->
<!-- isoreceived="20070502153718" -->
<!-- sent="Wed, 02 May 2007 17:37:07 +0200" -->
<!-- isosent="20070502153707" -->
<!-- name="Harald Servat" -->
<!-- email="harald_at_[hidden]" -->
<!-- subject="[OMPI users] issues with peruse MSG_ARRIVED events" -->
<!-- id="4638B023.70402_at_cepba.upc.edu" -->
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
<strong>From:</strong> Harald Servat (<em>harald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 11:37:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>Reply:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hello,
<br>
<p>&nbsp;&nbsp;I'm using the PERUSE API from OpenMPI in order to know when messages
<br>
arrive. I've executed some simple tests in three different machines
<br>
(FreeBSD/x86 1cpu, SGI Altix/IA64 128cpus, Linux/ppc 4cpus) always using
<br>
OpenMPI 1.2 and I see that sometimes I'm loosing such MSG_ARRIVED events.
<br>
<p>&nbsp;&nbsp;For example, from the 20 runs that I do, 5 at least, do not show that
<br>
every task but the root prints &quot;total_msg_arrived = 1&quot;, instead they
<br>
print some &quot;total_msg_arrived = 0&quot;.
<br>
<p>&nbsp;&nbsp;George Bosilca told me that this never should happen due to the code
<br>
implementation, but it's happening to me. So I'm wondering why is this
<br>
happening in all the machines. Any idea?
<br>
<p>&nbsp;&nbsp;I run the configure just with the --prefix option and with
<br>
- --enable-peruse. Shall I add any other option?
<br>
<p>Regards,
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.5 (FreeBSD)
<br>
<p>iD8DBQFGOLAjwMPeuqUCg9wRAiprAJ9N6fCJmQlKwvHCwx+zHj8vAp6t6QCfbOsu
<br>
uasthRat55g07BccQ8bBuEk=
<br>
=25PB
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>Reply:</strong> <a href="3188.php">Harald Servat: "Re: [OMPI users] issues with peruse MSG_ARRIVED events"</a>
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
