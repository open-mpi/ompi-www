<?
$subject_val = "[OMPI users] fail to link when looking in other directories containing other MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 11:52:40 2007" -->
<!-- isoreceived="20071108165240" -->
<!-- sent="Thu, 08 Nov 2007 17:52:20 +0100" -->
<!-- isosent="20071108165220" -->
<!-- name="Harald Servat" -->
<!-- email="harald_at_[hidden]" -->
<!-- subject="[OMPI users] fail to link when looking in other directories containing other MPI libraries" -->
<!-- id="47333EC4.3050601_at_cepba.upc.edu" -->
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
<strong>Subject:</strong> [OMPI users] fail to link when looking in other directories containing other MPI libraries<br>
<strong>From:</strong> Harald Servat (<em>harald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 11:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Reply:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p><p>Hello to all,
<br>
<p>&nbsp;&nbsp;I'm working on SGI Altix machine (IA64) which provides its own MPI
<br>
library. It is installed under /usr.
<br>
<p>&nbsp;&nbsp;I've installed OpenMPI 1.2 on my own user area in order to do some tests.
<br>
&nbsp;&nbsp;However, when I link the test application with the mpicc from OpenMPI
<br>
and the command line contains -L /usr/lib mpicc fails telling me that
<br>
it's unable to find some symbols from the OpenMPI lib (I suppose that it
<br>
tries to use /usr/lib/libmpi.* instead of $OMPI_HOME/lib/libmpi.*).
<br>
<p>&nbsp;&nbsp;Shouldn't mpicc force the usage of $OMPI_HOME/lib/libmpi* at the link
<br>
stage and avoid other MPI libraries?
<br>
<p>Thank you!,
<br>
<p>**
<br>
<p>harald_at_bscsmp01:~&gt;
<br>
/home/Computacional/harald/aplic/openmpi/1.2/bin/mpicc prova-mpi.c
<br>
harald_at_bscsmp01:~&gt;
<br>
/home/Computacional/harald/aplic/openmpi/1.2/bin/mpicc prova-mpi.c
<br>
- -L/usr/lib
<br>
/tmp/ccIsf1pD.o: In function `main':
<br>
prova-mpi.c:(.text+0x61): undefined reference to `ompi_mpi_comm_world'
<br>
prova-mpi.c:(.text+0x70): undefined reference to `ompi_mpi_comm_world'
<br>
collect2: ld returned 1 exit status
<br>
<p>and prova-mpi.c is like this
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int r;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = MPI_Barrier (MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = MPI_Finalize();
<br>
}
<br>
<p>Regards,
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.5 (FreeBSD)
<br>
<p>iD8DBQFHMz7EwMPeuqUCg9wRAlAjAJwIskAbJgu1q2smj7T6b/CHWJOf4ACeLcFW
<br>
1Qrf82rG54jvyeBjJ/RrI6I=
<br>
=Guy4
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Reply:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
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
