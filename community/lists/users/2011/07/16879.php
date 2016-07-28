<?
$subject_val = "Re: [OMPI users] Error installing OpenMPI 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 17:20:16 2011" -->
<!-- isoreceived="20110710212016" -->
<!-- sent="Mon, 11 Jul 2011 01:20:07 +0400" -->
<!-- isosent="20110710212007" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error installing OpenMPI 1.5.3" -->
<!-- id="CAGR4S9E-tOPh3jVQKPZ_tYx8AK1Y2azyXiPS-TnZ=HiPDjTF2A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGR4S9FAvKtKRbvcz5ivBuLGEYobVqTonpEgEH4T_1te1XxuaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error installing OpenMPI 1.5.3<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-10 17:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16880.php">BRADLEY, PETER C          PW: "[OMPI users] max entries in procgroup file for OpenMPI 1.5?"</a>
<li><strong>Previous message:</strong> <a href="16878.php">Dmitry N. Mikushin: "[OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16878.php">Dmitry N. Mikushin: "[OMPI users] Error installing OpenMPI 1.5.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, disregard this, the issue was created by my own buggy compiler wrapper.
<br>
<p>- D.
<br>
<p>2011/7/10 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe it would be useful to report the openmpi 1.5.3 archive currently
</span><br>
<span class="quotelev1">&gt; has a strange issue when installing on Fedora 15 x86_64 (gcc 4.6),
</span><br>
<span class="quotelev1">&gt; that *does not* happen with 1.4.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=/opt/openmpi_kgen-1.5.3 CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ sudo make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/opt/openmpi_kgen-1.5.3/lib&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; &quot;/opt/openmpi_kgen-1.5.3/lib&quot;
</span><br>
<span class="quotelev1">&gt; &#160;/bin/sh ../../../libtool &#160; --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_f90.la '/opt/openmpi_kgen-1.5.3/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_f90.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd
</span><br>
<span class="quotelev1">&gt; /home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90; /bin/sh
</span><br>
<span class="quotelev1">&gt; /home/marcusmae/Programming/openmpi-1.5.3/build/libtool &#160;--silent
</span><br>
<span class="quotelev1">&gt; --tag FC --mode=relink /usr/bin/gfortran -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I. -I../../../../ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/mpi/f90 -version-info 1:1:0 -export-dynamic -o
</span><br>
<span class="quotelev1">&gt; libmpi_f90.la -rpath /opt/openmpi_kgen-1.5.3/lib mpi.lo mpi_sizeof.lo
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_wtime_f90.lo ../../../ompi/mpi/f77/libmpi_f77.la -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; mv: cannot stat `libmpi_f90.so.1.0.1': No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libmpi_f90.la' with the above command
</span><br>
<span class="quotelev1">&gt; before installing it
</span><br>
<span class="quotelev1">&gt; make[5]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/marcusmae/Programming/openmpi-1.5.3/build/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/marcusmae/Programming/openmpi-1.5.3/build/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it a known problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16880.php">BRADLEY, PETER C          PW: "[OMPI users] max entries in procgroup file for OpenMPI 1.5?"</a>
<li><strong>Previous message:</strong> <a href="16878.php">Dmitry N. Mikushin: "[OMPI users] Error installing OpenMPI 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16878.php">Dmitry N. Mikushin: "[OMPI users] Error installing OpenMPI 1.5.3"</a>
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
