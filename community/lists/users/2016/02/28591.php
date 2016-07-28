<?
$subject_val = "[OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 11:21:31 2016" -->
<!-- isoreceived="20160226162131" -->
<!-- sent="Fri, 26 Feb 2016 17:21:31 +0100" -->
<!-- isosent="20160226162131" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="[OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAPLAFj59UOYQAgHGbtQ1+M+Ct9yycLH005VQLxO7H=LWVP+e0A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] wrong library version for dependent open-rte lib when libtool relinks<br>
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 11:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28592.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28590.php">Blosch, Edwin L: "[OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28592.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28592.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem with the build and install process of openmpi-1.10.2.
<br>
<p>I have here a machine running Debian GNU/Linux 8.2 ; this machine also
<br>
happens to have an openmpi-1.6.5 installation in /usr, as well as .
<br>
This should not matter, but here it does.
<br>
<p>The machine also has an Infiniband software stack installed (MOFED 3.1) in /usr
<br>
<p>I do the following:
<br>
<p>wget <a href="https://www.open-mpi.org/software/ompi/v1.10/downloads/openmpi-1.10.2.tar.bz2">https://www.open-mpi.org/software/ompi/v1.10/downloads/openmpi-1.10.2.tar.bz2</a>
<br>
tar xf openmpi-1.10.2.tar.bz2
<br>
cd openmpi-1.10.2
<br>
./configure --prefix=/tmp/test --disable-mpi-fortran --without-cuda
<br>
--disable-opencl
<br>
make -j8
<br>
make -j8 install
<br>
objdump -x /tmp/test/lib/libmpi.so | grep libopen
<br>
<p>The last line returns:
<br>
<p>&nbsp;&nbsp;NEEDED               libopen-rte.so.4
<br>
&nbsp;&nbsp;NEEDED               libopen-pal.so.13
<br>
<p>The requested version number for open-rte seems plain wrong, as it is
<br>
that of the library in /usr, not the one I should have (12).
<br>
<p>The furthest I've been able to dig points me to libtool's relinking
<br>
process. The pre-relinking version numbers for the requested libs are
<br>
correct in the .so files which get built
<br>
(./ompi/.libs/libmpi.so.12.0.2). It turns out that if I do:
<br>
<p>. &lt;(sed -e s/@inst_prefix_dir@// -e s/--silent// &lt; ./ompi/libmpi.la) ;
<br>
bash -c &quot;$relink_command&quot;
<br>
<p>libtool confesses that the command line it uses ends up with:
<br>
<p>&nbsp;-Wl,-rpath -Wl,/tmp/test/lib -L/tmp/openmpi-1.10.2/opal/.libs
<br>
-L/usr/lib -losmcomp -libumad -lpthread -libverbs -L/tmp/test/lib
<br>
-lopen-rte -lopen-pal -lnuma -ldl -lrt -lm -lutil  -O3 -pthread
<br>
-pthread -Wl,-soname -Wl,libmpi.so.12 -o .libs/libmpi.so.12.0.2
<br>
<p>Presumably, the -L/usr/lib is at fault here. I think it comes from
<br>
-losmcomp. One would expect to see a -L/tmp/openmpi-1.10.2/orte/.libs
<br>
somehow, although the -L/tmp/test/lib probably work if install timing
<br>
is right (libopen-rte first).
<br>
<p>It's not clear to me whether the problem is that libtool explicitly
<br>
inserts -L/usr/lib in the first place, or that the -lopen-rte is
<br>
brought too late in the command line (but why?). I'd be glad if this
<br>
issue could be fixed.
<br>
<p>Regards,
<br>
<p>E.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28592.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28590.php">Blosch, Edwin L: "[OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28592.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28592.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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
