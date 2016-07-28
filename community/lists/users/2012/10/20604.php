<?
$subject_val = "[OMPI users] tester for cygwin  openmpi-1.6.3 package";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 20:34:20 2012" -->
<!-- isoreceived="20121101003420" -->
<!-- sent="Thu, 01 Nov 2012 01:34:11 +0100" -->
<!-- isosent="20121101003411" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI users] tester for cygwin  openmpi-1.6.3 package" -->
<!-- id="5091C383.9010008_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] tester for cygwin  openmpi-1.6.3 package<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 20:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20605.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20603.php">Paul Kapinos: "[OMPI users] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20606.php">Omar Andrés Zapata Mesa: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20606.php">Omar Andrés Zapata Mesa: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I built and packaged openmpi-1.6.3 for cygwin.
<br>
Before deploying it as an official package, I would
<br>
like feedback from testers.
<br>
<p>Source and binary here:
<br>
<a href="http://matzeri.altervista.org/cygwin-1.7/openmpi/">http://matzeri.altervista.org/cygwin-1.7/openmpi/</a>
<br>
<p>To install using cygwin setup program
<br>
setup.exe -X -O -s <a href="http://matzeri.altervista.org">http://matzeri.altervista.org</a>
<br>
<p>Current configuration is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-nobuild= memory_mallopt, paffinity, 
<br>
installdirs-windows, timer-windows, shmem-sysv
<br>
<p>Only additional patch
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/27539">https://svn.open-mpi.org/trac/ompi/changeset/27539</a>
<br>
<p>C, C++ and Fortran pass basic tests
<br>
<p>$ time mpirun -n 4 ./hello_f90.exe
<br>
&nbsp;&nbsp;Hello, world, I am            0  of            4
<br>
&nbsp;&nbsp;Hello, world, I am            2  of            4
<br>
&nbsp;&nbsp;Hello, world, I am            1  of            4
<br>
&nbsp;&nbsp;Hello, world, I am            3  of            4
<br>
<p>real    1m9.607s
<br>
user    0m1.542s
<br>
sys     0m2.135s
<br>
<p>But I guess there is a long delay/timeout on startup.
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20605.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20603.php">Paul Kapinos: "[OMPI users] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20606.php">Omar Andrés Zapata Mesa: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20606.php">Omar Andrés Zapata Mesa: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
