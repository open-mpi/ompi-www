<?
$subject_val = "[OMPI users] Compile problems with xlf and xlc on power";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 00:03:16 2009" -->
<!-- isoreceived="20090113050316" -->
<!-- sent="Tue, 13 Jan 2009 05:03:07 -0000" -->
<!-- isosent="20090113050307" -->
<!-- name="Salmon, Rene" -->
<!-- email="salmr0_at_[hidden]" -->
<!-- subject="[OMPI users] Compile problems with xlf and xlc on power" -->
<!-- id="7E8D27758D889B418F815F0BB9EA34B304DF230F_at_BP1XEUEX018-C.bp1.ad.bp.com" -->
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
<strong>Subject:</strong> [OMPI users] Compile problems with xlf and xlc on power<br>
<strong>From:</strong> Salmon, Rene (<em>salmr0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 00:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7688.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7686.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7688.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Reply:</strong> <a href="7688.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to compile openmpi-1.2.8 on an IBM Power6 box using the xlc
<br>
and xlf compilers.
<br>
Here is my configure line:
<br>
<p>./configure CC=xlc_r CXX=xlc++_r F77=xlf_r FC=xlf90_r --disable-shared
<br>
--enable-static
<br>
<p>When I type make the build stops with the following error.  Anyone have
<br>
any ideas as to what the problem might be?
<br>
<p>/ompi/include -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_F77_WRAPPERS=1
<br>
-I../../..
<br>
G -c test_constants_f.c -o test_constants_f.o
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link xlc_r  -O -DNDEBUG
<br>
-export-dy
<br>
ase.la  attr_fn_f.lo f90_accessors.lo strings.lo test_constants_f.lo
<br>
-lnsl  -lu
<br>
libtool: link: ar cru .libs/libmpi_f77_base.a  attr_fn_f.o
<br>
f90_accessors.o strin
<br>
libtool: link: ranlib .libs/libmpi_f77_base.a
<br>
libtool: link: creating libmpi_f77_base.la
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f77_base.la&quot; &amp;&amp; ln -s
<br>
&quot;../libmpi_f7
<br>
base.la&quot; )
<br>
make[4]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f77'
<br>
make[3]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f77'
<br>
Making all in f90
<br>
make[3]: Entering directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90'
<br>
./scripts/mpi-f90-interfaces.h.sh
<br>
/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90 &gt; mpi
<br>
make  all-recursive
<br>
make[4]: Entering directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90'
<br>
Making all in scripts
<br>
make[5]: Entering directory
<br>
`/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90/scripts'
<br>
make[5]: Nothing to be done for `all'.
<br>
make[5]: Leaving directory
<br>
`/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90/scripts'
<br>
make[5]: Entering directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90'
<br>
/bin/sh ../../../libtool   --mode=compile xlf90_r
<br>
-I../../../ompi/include -I../.
<br>
I. -I../../../ompi/mpi/f90   -c -o mpi.lo mpi.f90
<br>
libtool: compile:  xlf90_r -I../../../ompi/include
<br>
-I../../../ompi/include -I. -
<br>
f90 -c mpi.f90 -o mpi.o
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 264.1: 1514-170 (W) The dummy argument
<br>
&quot;function&quot;
<br>
&nbsp;with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTINE
<br>
ument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 275.1: 1514-170 (W) The dummy argument
<br>
&quot;comm_copy
<br>
ared only with the EXTERNAL attribute. It is unknown whether the
<br>
argument is a S
<br>
. The argument may not be used to determine the uniqueness of this
<br>
procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 493.1: 1514-170 (W) The dummy argument
<br>
&quot;function&quot;
<br>
&nbsp;with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTINE
<br>
ument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 580.1: 1514-170 (W) The dummy argument
<br>
&quot;function&quot;
<br>
&nbsp;with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTINE
<br>
ument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1020.1: 1514-170 (W) The dummy argument
<br>
&quot;query_fn
<br>
y with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTIN
<br>
gument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1371.1: 1514-170 (W) The dummy argument
<br>
&quot;copy_fn&quot;
<br>
&nbsp;with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTINE
<br>
ument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1394.1: 1514-170 (W) The dummy argument
<br>
&quot;function
<br>
y with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTIN
<br>
gument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1477.1: 1514-170 (W) The dummy argument
<br>
&quot;read_con
<br>
clared only with the EXTERNAL attribute. It is unknown whether the
<br>
argument is a
<br>
ON. The argument may not be used to determine the uniqueness of this
<br>
procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1543.1: 1514-699 (S) Procedure
<br>
&quot;mpi_sizeof0di4&quot; m
<br>
dummy argument that corresponds by position in the argument list to a
<br>
dummy argu
<br>
cedure &quot;mpi_sizeof0dl&quot;, present and type incompatible, present with
<br>
different ki
<br>
present with a different rank.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1627.1: 1514-699 (S) Procedure
<br>
&quot;mpi_sizeof1di4&quot; m
<br>
dummy argument that corresponds by position in the argument list to a
<br>
dummy argu
<br>
cedure &quot;mpi_sizeof1dl&quot;, present and type incompatible, present with
<br>
different ki
<br>
present with a different rank.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1711.1: 1514-699 (S) Procedure
<br>
&quot;mpi_sizeof2di4&quot; m
<br>
dummy argument that corresponds by position in the argument list to a
<br>
dummy argu
<br>
cedure &quot;mpi_sizeof2dl&quot;, present and type incompatible, present with
<br>
different ki
<br>
present with a different rank.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1795.1: 1514-699 (S) Procedure
<br>
&quot;mpi_sizeof3di4&quot; m
<br>
dummy argument that corresponds by position in the argument list to a
<br>
dummy argu
<br>
cedure &quot;mpi_sizeof3dl&quot;, present and type incompatible, present with
<br>
different ki
<br>
present with a different rank.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 1879.1: 1514-699 (S) Procedure
<br>
&quot;mpi_sizeof4di4&quot; m
<br>
dummy argument that corresponds by position in the argument list to a
<br>
dummy argu
<br>
cedure &quot;mpi_sizeof4dl&quot;, present and type incompatible, present with
<br>
different ki
<br>
present with a different rank.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 2213.1: 1514-170 (W) The dummy argument
<br>
&quot;type_cop
<br>
lared only with the EXTERNAL attribute. It is unknown whether the
<br>
argument is a
<br>
N. The argument may not be used to determine the uniqueness of this
<br>
procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 2652.1: 1514-170 (W) The dummy argument
<br>
&quot;function
<br>
y with the EXTERNAL attribute. It is unknown whether the argument is a
<br>
SUBROUTIN
<br>
gument may not be used to determine the uniqueness of this procedure.
<br>
&quot;./mpi-f90-interfaces.h&quot;, line 2663.1: 1514-170 (W) The dummy argument
<br>
&quot;win_copy
<br>
ared only with the EXTERNAL attribute. It is unknown whether the
<br>
argument is a S
<br>
. The argument may not be used to determine the uniqueness of this
<br>
procedure.
<br>
** mpi   === End of Compilation 1 ===
<br>
1501-511  Compilation failed for file mpi.f90.
<br>
make[5]: *** [mpi.lo] Error 1
<br>
make[5]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Thanks
<br>
Rene
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7688.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7686.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7688.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Reply:</strong> <a href="7688.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
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
