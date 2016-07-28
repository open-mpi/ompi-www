<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8 and PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 27 14:15:17 2014" -->
<!-- isoreceived="20140427181517" -->
<!-- sent="Sun, 27 Apr 2014 18:15:13 +0000" -->
<!-- isosent="20140427181513" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8 and PGI compilers" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8AD4F6_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ADC981242279AD408816CB7141A2789D7B8A2FEC_at_GROWLER.ern.nps.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8 and PGI compilers<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-27 14:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see nothing invalid about that line. It is setting a struct scif_portID from another struct scif_portID which is allowed in C99. The error might be misleading or a compiler bug (PGI has lots of them).
<br>
<p>-Nathan
<br>
<p>________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Andrus, Brian Contractor [bdandrus_at_[hidden]]
<br>
Sent: Friday, April 25, 2014 11:22 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] OpenMPI 1.8 and PGI compilers
<br>
<p>All,
<br>
<p>I have been unable to compile OpenMPI 1.8 using PGI compilers (13.6, 13.10 or 14.3)
<br>
<p>EVERY time, I get the error:
<br>
<p>PGC-S-0094-Illegal type conversion required (btl_scif_component.c: 215)
<br>
PGC/x86-64 Linux 14.3-0: compilation completed with severe errors
<br>
make[2]: *** [btl_scif_component.lo] Error 1
<br>
<p><p>Has anyone successfully built OpenMPI 1.8 with PGI?
<br>
<p>If so, how??
<br>
I have tried ./configure alone, using &quot;-fast&quot; options, setting -DNO_PGI_OFFSET all to no avail.
<br>
<p>Thanks in advance,
<br>
<p><p>Brian Andrus
<br>
ITACS/Research Computing
<br>
Naval Postgraduate School
<br>
Monterey, California
<br>
voice: 831-656-6238
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24264.php">Jeffrey A Cummings: "Re: [OMPI users] Deadlocks and warnings from libevent when using	MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24262.php">Markus Wittmann: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>Reply:</strong> <a href="24268.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
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
