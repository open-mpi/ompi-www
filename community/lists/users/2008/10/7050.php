<?
$subject_val = "[OMPI users] Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 10:09:56 2008" -->
<!-- isoreceived="20081020140956" -->
<!-- sent="Mon, 20 Oct 2008 10:09:51 -0400" -->
<!-- isosent="20081020140951" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="[OMPI users] Problems installing in Cygwin" -->
<!-- id="f79359b60810200709n6b9808acy96e8e8ded1e99d48_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems installing in Cygwin<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-20 10:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7049.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am trying to install OpenMPI in Cygwin. from a cygwin bash shell, I
<br>
configured OpenMPI with the command below:
<br>
<p>$ echo $MPI_HOME
<br>
/home/seabra/local/openmpi-1.2.7
<br>
$ ./configure --prefix=$MPI_HOME \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=&quot;g95&quot; FFLAGS=&quot;-O0  -fno-second-underscore&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=&quot;g++&quot;
<br>
<p>The configuration *seems* to be OK (it finishes with: &quot;configure: exit
<br>
0&quot;). However, when I try to install it, the installation finishes with
<br>
the error below. I wonder if anyone here could help me figure out what
<br>
is going wrong.
<br>
<p>Thanks a lot!
<br>
Gustavo.
<br>
<p>==============================
<br>
$ make clean
<br>
[...]
<br>
$ make install
<br>
[...]
<br>
Making install in mca/timer/windows
<br>
make[2]: Entering directory
<br>
`/home/seabra/local/openmpi-1.2.7/opal/mca/timer/windows'
<br>
depbase=`echo timer_windows_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include   -I../../../..
<br>
-D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
<br>
-MT timer_windows_component.lo -MD -MP -MF $depbase.Tpo -c -o
<br>
timer_windows_component.lo timer_windows_component.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include -I../../../..
<br>
-D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
<br>
timer_windows_component.lo -MD -MP -MF
<br>
.deps/timer_windows_component.Tpo -c timer_windows_component.c
<br>
-DDLL_EXPORT -DPIC -o .libs/timer_windows_component.o
<br>
timer_windows_component.c:22:60:
<br>
opal/mca/timer/windows/timer_windows_component.h: No such file or
<br>
directory
<br>
timer_windows_component.c:25: error: parse error before
<br>
&quot;opal_timer_windows_freq&quot;
<br>
timer_windows_component.c:25: warning: data definition has no type or
<br>
storage class
<br>
timer_windows_component.c:26: error: parse error before
<br>
&quot;opal_timer_windows_start&quot;
<br>
timer_windows_component.c:26: warning: data definition has no type or
<br>
storage class
<br>
timer_windows_component.c: In function `opal_timer_windows_open':
<br>
timer_windows_component.c:60: error: `LARGE_INTEGER' undeclared (first
<br>
use in this function)
<br>
timer_windows_component.c:60: error: (Each undeclared identifier is
<br>
reported only once
<br>
timer_windows_component.c:60: error: for each function it appears in.)
<br>
timer_windows_component.c:60: error: parse error before &quot;now&quot;
<br>
timer_windows_component.c:62: error: `now' undeclared (first use in
<br>
this function)
<br>
make[2]: *** [timer_windows_component.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/seabra/local/openmpi-1.2.7/opal/mca/timer/windows'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/seabra/local/openmpi-1.2.7/opal'
<br>
make: *** [install-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7051.php">Simone Giannerini: "Re: [OMPI users] Problems with OpenMPI running with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7049.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
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
