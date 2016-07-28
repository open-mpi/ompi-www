<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 20 04:04:19 2005" -->
<!-- isoreceived="20051020090419" -->
<!-- sent="Thu, 20 Oct 2005 13:04:10 +0400 (MSD)" -->
<!-- isosent="20051020090410" -->
<!-- name="Konstantin Karganov" -->
<!-- email="kostik_at_[hidden]" -->
<!-- subject="[O-MPI users] OpenMPI debugging support" -->
<!-- id="Pine.LNX.4.44.0510201258590.24726-100000_at_ispserv.ispras.ru" -->
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
<strong>From:</strong> Konstantin Karganov (<em>kostik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-20 04:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0208.php">Allan Menezes: "[O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;
<br>
I'm working on an MPI-debugger project and have questions on OpenMPI
<br>
support for debugger tools. Any info or links to docs would be
<br>
appreciated.
<br>
&nbsp;
<br>
At the moment, I'm interested in debug session startup implementation.
<br>
Currently I have a code, that starts MPI program under debugger for
<br>
MPICH, and it seems that OpenMPI is much different.
<br>
&nbsp;
<br>
1. MPICH program startup is implemented as a set of shell-scripts and all
<br>
I need is to put a debugger-specific startup script, that would be
<br>
called from mpirun. What do I need to add a custom debugger support to
<br>
OpenMPI? Do you plan to support several debuggers and how it is to be
<br>
implemented?
<br>
&nbsp;
<br>
2. MPICH (at least for ch_p4 device) launches one process from mpirun
<br>
and other processes are launched later inside MPI_Init. In
<br>
orte/tools/orterun/totalview.cpp it is said that the same model is
<br>
implemented, but in practice all processes start together long
<br>
before MPI_Init. (BTW: what is this - mpirun that is running as a
<br>
background process becomes &quot;stopped&quot; all the time I try to &quot;bg&quot; it?)
<br>
What is the &quot;correct&quot; way and how it is supposed to get a debugger
<br>
attached to all processes of the program?
<br>
<p>Best regards,
<br>
Konstantin Karganov.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0208.php">Allan Menezes: "[O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0210.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
