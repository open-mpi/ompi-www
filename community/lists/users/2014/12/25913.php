<?
$subject_val = "[OMPI users] problems with openmpi-dev-428-g983bd49";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 11:06:31 2014" -->
<!-- isoreceived="20141204160631" -->
<!-- sent="Thu, 4 Dec 2014 17:06:05 +0100 (CET)" -->
<!-- isosent="20141204160605" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problems with openmpi-dev-428-g983bd49" -->
<!-- id="201412041606.sB4G65ED028356_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problems with openmpi-dev-428-g983bd49<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 11:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Previous message:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Reply:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Maybe reply:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to install openmpi-dev-428-g983bd49 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
<br>
x86_64) with gcc-4.9.2 and the new Solaris Studio 12.4 compilers.
<br>
I was able to build everything with gcc-4.9.2, but get the following
<br>
error for &quot;make check&quot; on both Solaris machines.
<br>
<p>Assertion failed: 0, file 
<br>
../../../openmpi-dev-428-g983bd49/test/datatype/opal_datatype_test.c,
<br>
&nbsp;line 163, function local_copy_ddt_count
<br>
<p><p>I still get the error for Sun C 5.13 that I reported before.
<br>
<p>tyr openmpi-dev-428-g983bd49-Linux.x86_64.64_cc 138 tail -15 
<br>
log.make.Linux.x86_64.64_cc
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
&quot;../../../../../openmpi-dev-428-g983bd49/ompi/mpi/fortran/use-mpi-f08/comm_creat
<br>
e_errhandler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
<br>
must be a procedure that is interoperable or a procedure pointer associated with 
<br>
an interoperable procedure.
<br>
<p>f90comp: 186 SOURCE LINES
<br>
f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [comm_create_errhandler_f08.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-428-g983bd49-Linux.x86_64.64_cc/ompi/mpi/f
<br>
ortran/use-mpi-f08'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-1.9/openmpi-dev-428-g983bd49-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-428-g983bd49-Linux.x86_64.64_cc 139 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Previous message:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Reply:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Maybe reply:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
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
