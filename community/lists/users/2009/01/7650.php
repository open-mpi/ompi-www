<?
$subject_val = "Re: [OMPI users] Open MPI and mpi-defaults";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 16:34:16 2009" -->
<!-- isoreceived="20090106213416" -->
<!-- sent="Tue, 06 Jan 2009 16:33:45 -0500" -->
<!-- isosent="20090106213345" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and mpi-defaults" -->
<!-- id="1231277625.13978.54.camel_at_workhorse" -->
<!-- inreplyto="18787.41473.561688.809797_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and mpi-defaults<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 16:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7651.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7649.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7655.php">Jeff Squyres: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7658.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and mpi-defaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-01-06 at 12:25 -0600, Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; I noticed that openmpi is now owner of a FTFBS against mpi-defaults because
</span><br>
<span class="quotelev1">&gt; the latter wants the former which is missing on Alpha.
</span><br>
<p>I'm sorry, I was supposed to let you know about this, as this openmpi
<br>
failure is keeping arpack++ out of Lenny.  The real problem is that
<br>
openmpi is FTBFS on alpha, see below.
<br>
<p><span class="quotelev1">&gt; Can anybody dive in there and sort this out?
</span><br>
<p>The openmpi buildd log on alpha [1] ends with:
<br>
[1] <a href="http://buildd.debian.org/fetch.cgi?pkg=openmpi;ver=1.2.8-3;arch=alpha;stamp=1225663211">http://buildd.debian.org/fetch.cgi?pkg=openmpi;ver=1.2.8-3;arch=alpha;stamp=1225663211</a>
<br>
<p>/bin/sh ../../../libtool --tag=CXX   --mode=link g++  -DNDEBUG -g -O2 -finline-functions -pthread  -export-dynamic   -o ompi_info components.o ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -lnsl  -lutil -lm 
<br>
libtool: link: g++ -DNDEBUG -g -O2 -finline-functions -pthread -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so /usr/lib/libibverbs.so -lpthread -lrt /build/buildd/openmpi-1.2.8/build/static/orte/.libs/libopen-rte.so /build/buildd/openmpi-1.2.8/build/static/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread -Wl,-rpath -Wl,/usr/lib/openmpi/lib
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `opal_sys_timer_get_cycles'
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [ompi_info] Error 1
<br>
make[3]: Leaving directory `/build/buildd/openmpi-1.2.8/build/static/ompi/tools/ompi_info'
<br>
<p>Earlier on we have:
<br>
<p>make[3]: Entering directory `/build/buildd/openmpi-1.2.8/build/basic/ompi/mca/btl/openib'
<br>
...
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../../../ompi/mca/btl/openib -DPKGDATADIR=\&quot;/usr/share/openmpi\&quot; -I../../../../../.. -I../../../.. -I../../../../../../opal/include -I../../../../../../orte/include -I../../../../../../ompi/include -DNDEBUG -Wall -g -O2 -finline-functions -fno-strict-aliasing -pthread -MT btl_openib_component.lo -MD -MP -MF .deps/btl_openib_component.Tpo -c ../../../../../../ompi/mca/btl/openib/btl_openib_component.c  -fPIC -DPIC -o .libs/btl_openib_component.o
<br>
../../../../../../ompi/mca/btl/openib/btl_openib_component.c: In function 'btl_openib_component_init':
<br>
../../../../../../ompi/mca/btl/openib/btl_openib_component.c:666: warning: implicit declaration of function 'opal_sys_timer_get_cycles'
<br>
<p>Okay, found it.  This function is inline assembly in timer.h, which
<br>
exists in opal/sys/amd64, ia32, ia64, powerpc and sparcv9 but not alpha,
<br>
mips, sparc or win32.  That said, timer.h in opal/sys has:
<br>
<p>#ifndef OPAL_HAVE_SYS_TIMER_GET_CYCLES
<br>
#define OPAL_HAVE_SYS_TIMER_GET_CYCLES 0
<br>
<p>which somehow is working on sparc (no reference to this function in the
<br>
buildd log) but not alpha.  (On mips, there are a bunch of assembler
<br>
errors of the form &quot;opcode not supported on this processor&quot;.)
<br>
<p>That's about what I have time for now.  Don't worry about mpi-defaults,
<br>
it's not trying to get into Lenny; but we should worry about OpenMPI not
<br>
building on alpha.  Does anyone on users_at_[hidden] have any ideas?
<br>
<p>-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7650/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7651.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7649.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7652.php">jody: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7655.php">Jeff Squyres: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7658.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and mpi-defaults"</a>
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
