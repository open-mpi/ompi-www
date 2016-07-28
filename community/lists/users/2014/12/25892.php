<?
$subject_val = "[OMPI users] error building openmpi-v1.8.3-202-gb568b6e with Solaris Studio 12.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 04:02:43 2014" -->
<!-- isoreceived="20141201090243" -->
<!-- sent="Mon, 1 Dec 2014 10:02:14 +0100 (CET)" -->
<!-- isosent="20141201090214" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] error building openmpi-v1.8.3-202-gb568b6e with Solaris Studio 12.4" -->
<!-- id="201412010902.sB192EcY029843_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] error building openmpi-v1.8.3-202-gb568b6e with Solaris Studio 12.4<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 04:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25891.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to install openmpi-v1.8.3-202-gb568b6e on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with the new Solaris Studio 12.4 compilers and got the
<br>
same error on all three platforms that I reported Saturday for
<br>
openmpi-dev-373-gdee243c.
<br>
<p>linpc1 openmpi-v1.8.3-202-gb568b6e-Linux.x86_64.64_cc 125 tail -15 log.make.*
<br>
&nbsp;&nbsp;PPFC     comm_compare_f08.lo
<br>
&nbsp;&nbsp;PPFC     comm_connect_f08.lo
<br>
&nbsp;&nbsp;PPFC     comm_create_errhandler_f08.lo
<br>
<p>&nbsp;&nbsp;&nbsp;fn = c_funloc(comm_errhandler_fn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                   
<br>
&quot;../../../../../openmpi-v1.8.3-202-gb568b6e/ompi/mpi/fortran/use-mpi-f08/comm_cr
<br>
eate_errhandler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function 
<br>
argument must be a procedure that is interoperable or a procedure pointer 
<br>
associated with an interoperable procedure.
<br>
<p>f90comp: 186 SOURCE LINES
<br>
f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [comm_create_errhandler_f08.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.8.4/openmpi-v1.8.3-202-gb568b6e-Linux.x86_64.64_cc/ompi/
<br>
mpi/fortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.8.4/openmpi-v1.8.3-202-gb568b6e-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-v1.8.3-202-gb568b6e-Linux.x86_64.64_cc 126 
<br>
<p><p>I would be grateful. if somebody can fix the problem. Thank
<br>
you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25891.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
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
