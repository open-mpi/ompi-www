<?
$subject_val = "Re: [OMPI users] Questions on MPI I/O and ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 19:31:16 2014" -->
<!-- isoreceived="20140214003116" -->
<!-- sent="Thu, 13 Feb 2014 16:30:59 -0800" -->
<!-- isosent="20140214003059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions on MPI I/O and ompi_info" -->
<!-- id="CE8A6AA6-DE8A-4204-8A82-E18F44B73B30_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB36A39_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions on MPI I/O and ompi_info<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 19:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23599.php">tmishima_at_[hidden]: "[OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23597.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>In reply to:</strong> <a href="23595.php">Blosch, Edwin L: "[OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Reply:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, a little digging says that we probably didn't do this as thoroughly as we should have :-/
<br>
<p>Basically, the &quot;MPI I/O Support&quot; line is tied solely to the disable-mpi-io flag. In the 1.6 series, you only had one option for MPI I/O support, and that was romio. So if you disable romio, then you'll get a &quot;failed&quot; reply to those APIs.
<br>
<p>What we should have done is automatically &quot;disable-mpi-io&quot; if no components were built - i.e., if you disable them all from building. In 1.7, that would mean disabling both romio and ompi-io. In 1.6, that would just mean disabling romio.
<br>
<p>I'll pass it along to Jeff to see if it can be done - we can certainly change the flag, but maybe not for the 1.6 series
<br>
<p><p>On Feb 13, 2014, at 12:01 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why does ompi_info &#150;c say &#147;MPI I/O Support: yes&#148; even though I configured using &#150;disable-io-romio?  If ompi_info is going to tell me MPI I/O is supported, then shouldn&#146;t I expect my test program (attached) to work correctly?  (it doesn&#146;t).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I didn&#146;t disable &#147;built-in&#148; mpi-io, only io-romio.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   --disable-mpi-io        Disable built-in support for MPI-2 I/O, likely
</span><br>
<span class="quotelev1">&gt;                           because an externally-provided MPI I/O package will
</span><br>
<span class="quotelev1">&gt;                           be used. Default is to use the internal component
</span><br>
<span class="quotelev1">&gt;                           system and its specially modified version of ROMIO
</span><br>
<span class="quotelev1">&gt;   --disable-io-romio      Disable the ROMIO MPI-IO component
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; configure options used:
</span><br>
<span class="quotelev1">&gt; + ./configure --prefix=/applocal/tools/mpi/intel/openmpi-1.6.4 --without-tm --without-sge --without-lsf --without-psm --without-portals --without-elan --without-slurm --without-loadleveler --with-mxm=/opt/mellanox/mxm --with-mxm-lib=/opt/mellanox/mxm/lib --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --disable-per-user-config-files --disable-io-romio --enable-static CXX=/applocal/intel/composer_xe_2013/bin/icpc CC=/applocal/intel/composer_xe_2013/bin/icc 'CFLAGS=  -O2' 'CXXFLAGS=  -O2' F77=/applocal/intel/composer_xe_2013/bin/ifort 'FFLAGS=-D_GNU_SOURCE -traceback  -O2' FC=/applocal/intel/composer_xe_2013/bin/ifort 'FCFLAGS=-D_GNU_SOURCE -traceback  -O2' 'LDFLAGS= -static-intel'
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ompi_info &#150;c output:
</span><br>
<span class="quotelev1">&gt;            Configured by: bloscel
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Jun 11 16:20:00 CDT 2013
</span><br>
<span class="quotelev1">&gt;           Configure host: mgmt1
</span><br>
<span class="quotelev1">&gt;                 Built by: bloscel
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Jun 11 16:35:12 CDT 2013
</span><br>
<span class="quotelev1">&gt;               Built host: mgmt1
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: /applocal/intel/composer_xe_2013/bin/icc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute:
</span><br>
<span class="quotelev1">&gt;   C compiler family name: INTEL
</span><br>
<span class="quotelev1">&gt;       C compiler version: 1310.20130514
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: /applocal/intel/composer_xe_2013/bin/icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: none
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: /applocal/intel/composer_xe_2013/bin/ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: /applocal/intel/composer_xe_2013/bin/ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt; Fort logical value true: -1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 8
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 8
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 16
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 1
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 1
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 1
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 1
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 1
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 1
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 1
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 1
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 1
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: 1
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -DNDEBUG -O2 -finline-functions -fno-strict-aliasing -restrict -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -DNDEBUG -O2 -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: -D_GNU_SOURCE -traceback  -O2
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -D_GNU_SOURCE -traceback  -O2
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  -static-intel
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lrt -lnsl  -lutil
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS: -ldl  -lm -lnuma  -Wl,--export-dynamic -lrt -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: no
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;mpifileout.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23599.php">tmishima_at_[hidden]: "[OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23597.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>In reply to:</strong> <a href="23595.php">Blosch, Edwin L: "[OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Reply:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
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
