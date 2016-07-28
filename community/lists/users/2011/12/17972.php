<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:21:52 2011" -->
<!-- isoreceived="20111214202152" -->
<!-- sent="Wed, 14 Dec 2011 15:21:47 -0500" -->
<!-- isosent="20111214202147" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="4EE9055B.90105_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKRSGb_HD9R55tXrNQzhx2-YbhrgfWyraoRnjMZTr=p8BEQAWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17961.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 12:21 PM, Micah Sklut wrote:
<br>
<span class="quotelev1">&gt; Hi Gustav,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did read Price's email:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I do &quot;which mpif90&quot;, i get:
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/intel/bin/mpif90
</span><br>
<span class="quotelev1">&gt; which is the desired directory/binary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned, the config log file indicated it was using ifort, and
</span><br>
<span class="quotelev1">&gt; had no mention of gfortran.
</span><br>
<span class="quotelev1">&gt; Below is the output from ompi_info. It shows reference to the correct
</span><br>
<span class="quotelev1">&gt; ifort compiler. But, yet the mpif90 compiler, still yeilds a gfortran
</span><br>
<span class="quotelev1">&gt; compiler.
</span><br>
<p>Micah,
<br>
<p>You are confusing the compilers users to build Open MPI  itself with the
<br>
compilers used by Open MPI to compile other codes with the proper build
<br>
environment.
<br>
<p>For example, your configure command,
<br>
<p>./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
<br>
<p>Doesn't tell Open MPI to use ifcort for mpif90 and mpif77. It tell the
<br>
build process to use ifort to compile the Fortran sections of the Open
<br>
MPI source code. To tell mpif90 and mpif77 which compilers you'd like to
<br>
use to compile Fortran programs that use Open MPI, you must set the
<br>
environment variables OMPI_F77 and OMPI_F90. To illustrate, when I want
<br>
to use the gnu compilers, I set the following in my .bashrc:
<br>
<p>export OMPI_CC=gcc
<br>
export OMPI_CXX=g++
<br>
export OMPI_F77=gfortran
<br>
export OMPI_FC=gfortran
<br>
<p>If I wanted to use Intel compilers, swap the above 4 lines for this:
<br>
<p>export OMPI_CC=pgcc
<br>
export OMPI_CXX=pgCC
<br>
export OMPI_F77=pgf77
<br>
export OMPI_FC=pgf95
<br>
<p>You can verify which compiler is set using the --showme switch to mpif90:
<br>
<p>$ mpif90 --showme
<br>
pgf95 -I/usr/local/openmpi-1.2.8/pgi-8.0/x86_64/include
<br>
-I/usr/local/openmpi-1.2.8/pgi-8.0/x86_64/lib -L/usr/lib64
<br>
-L/usr/local/openmpi-1.2.8/pgi/x86_64/lib
<br>
-L/usr/local/openmpi-1.2.8/pgi-8.0/x86_64/lib -lmpi_f90 -lmpi_f77 -lmpi
<br>
-lopen-rte -lopen-pal -libverbs -lrt -lnuma -ldl -Wl,--export-dynamic
<br>
-lnsl -lutil -lpthread -ldl
<br>
<p>I suspect if you run the command ' env | grep OMPI_FC', you'll see that
<br>
you have it set to gfortran. I can verify that mine is set to pgf97 this
<br>
way:
<br>
<p>$ env | grep OMPI_FC
<br>
OMPI_FC=pgf95
<br>
<p>Of course, a simple echo would work, too:
<br>
<p>$ echo $OMPI_FC
<br>
pgf95
<br>
<p>You can also change these setting by editing the file
<br>
mpif90-wrapper-data.txt in your Open MPI installation directory.
<br>
<p>Full details on setting these variables (and others) can be found in the
<br>
FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<p><pre>
--
Prentice
&gt; --&gt;
&gt; barells_at_ip-10-17-153-123:~&gt; ompi_info
&gt;                  Package: Open MPI barells_at_ip-10-17-148-204 Distribution
&gt;                 Open MPI: 1.4.4
&gt;    Open MPI SVN revision: r25188
&gt;    Open MPI release date: Sep 27, 2011
&gt;                 Open RTE: 1.4.4
&gt;    Open RTE SVN revision: r25188
&gt;    Open RTE release date: Sep 27, 2011
&gt;                     OPAL: 1.4.4
&gt;        OPAL SVN revision: r25188
&gt;        OPAL release date: Sep 27, 2011
&gt;             Ident string: 1.4.4
&gt;                   Prefix: /usr/lib64/mpi/gcc/openmpi
&gt;  Configured architecture: x86_64-unknown-linux-gnu
&gt;           Configure host: ip-10-17-148-204
&gt;            Configured by: barells
&gt;            Configured on: Wed Dec 14 14:22:43 UTC 2011
&gt;           Configure host: ip-10-17-148-204
&gt;                 Built by: barells
&gt;                 Built on: Wed Dec 14 14:27:56 UTC 2011
&gt;               Built host: ip-10-17-148-204
&gt;               C bindings: yes
&gt;             C++ bindings: yes
&gt;       Fortran77 bindings: yes (all)
&gt;       Fortran90 bindings: yes
&gt;  Fortran90 bindings size: small
&gt;               C compiler: gcc
&gt;      C compiler absolute: /usr/bin/gcc
&gt;             C++ compiler: g++
&gt;    C++ compiler absolute: /usr/bin/g++
&gt;       Fortran77 compiler: ifort
&gt;   Fortran77 compiler abs: /opt/intel/fce/9.1.040/bin/ifort
&gt;       Fortran90 compiler: ifort
&gt;   Fortran90 compiler abs: /opt/intel/fce/9.1.040/bin/ifort
&gt;              C profiling: yes
&gt;            C++ profiling: yes
&gt;      Fortran77 profiling: yes
&gt;      Fortran90 profiling: yes
&gt;           C++ exceptions: no
&gt;           Thread support: posix (mpi: no, progress: no)
&gt;            Sparse Groups: no
&gt;   Internal debug support: no
&gt;      MPI parameter check: runtime
&gt; Memory profiling support: no
&gt; Memory debugging support: no
&gt;          libltdl support: yes
&gt;    Heterogeneous support: no
&gt;  mpirun default --prefix: no
&gt;          MPI I/O support: yes
&gt;        MPI_WTIME support: gettimeofday
&gt; Symbol visibility support: yes
&gt;    FT Checkpoint support: no  (checkpoint thread: no)
&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.2)
&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component
&gt; v1.4.2)
&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.4.2)
&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.2)
&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.2)
&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.2)
&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.2)
&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA btl: udapl (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component
&gt; v1.4.2)
&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
&gt; v1.4.2)
&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.2)
&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.2)
&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.2)
&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.2)
&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.2)
&gt;
&gt;
&gt;
&gt;
&gt; On Wed, Dec 14, 2011 at 12:11 PM, Gustavo Correa
&gt; &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;     Hi Micah
&gt;
&gt;     Did you read Tim Prince's email to you?  Check it out.
&gt;
&gt;     Best thing is to set your environment variables [PATH,
&gt;     LD_LIBRARY_PATH, intel setup]
&gt;     in your initialization file, .profile/.bashrc or .[t]cshrc.
&gt;
&gt;     What is the output of 'ompi_info'? [From your ifort-built OpenMPI.]
&gt;     Does it show ifort or gfortran?
&gt;
&gt;     I hope this helps,
&gt;     Gus Correa
&gt;
&gt;     On Dec 14, 2011, at 11:21 AM, Micah Sklut wrote:
&gt;
&gt;     &gt; Thanks for your thoughts,
&gt;     &gt;
&gt;     &gt; It would certainly appear that it is a PATH issue, but I still
&gt;     haven't figured it out.
&gt;     &gt;
&gt;     &gt; When I type the ifort command, ifort does run.
&gt;     &gt; The intel path is in my PATH and is the first directory listed.
&gt;     &gt;
&gt;     &gt; Looking at the configure.log, there is nothing indicating use or
&gt;     mentioning of &quot;gfortran&quot;.
&gt;     &gt;
&gt;     &gt; gfortran is in the /usr/bin directory, which is in the PATH as well.
&gt;     &gt;
&gt;     &gt; Any other suggestions of things to look for?
&gt;     &gt;
&gt;     &gt; Thank you,
&gt;     &gt;
&gt;     &gt; On Wed, Dec 14, 2011 at 11:05 AM, Gustavo Correa
&gt;     &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
&gt;     &gt; Hi Micah
&gt;     &gt;
&gt;     &gt; Is  ifort in your PATH?
&gt;     &gt; If not, the OpenMPI configure script will use any fortran
&gt;     compiler it finds first, which may be gfortran.
&gt;     &gt; You need to run the Intel compiler startup script before you run
&gt;     the OpenMPI configure.
&gt;     &gt; The easy thing to do is to source the Intel script inside your
&gt;     .profile/.bashrc or .[t]cshrc file.
&gt;     &gt; I hope this helps,
&gt;     &gt;
&gt;     &gt; Gus Correa
&gt;     &gt;
&gt;     &gt; On Dec 14, 2011, at 9:49 AM, Micah Sklut wrote:
&gt;     &gt;
&gt;     &gt; &gt; Hi All,
&gt;     &gt; &gt;
&gt;     &gt; &gt; I have installed openmpi for gfortran, but am now attempting
&gt;     to install openmpi as ifort.
&gt;     &gt; &gt;
&gt;     &gt; &gt; I have run the following configuration:
&gt;     &gt; &gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++
&gt;     F77=ifort FC=ifort
&gt;     &gt; &gt;
&gt;     &gt; &gt; The install works successfully, but when I run
&gt;     /opt/openmpi/intel/bin/mpif90, it runs as gfortran.
&gt;     &gt; &gt; Oddly, when I am user: root, the same mpif90 runs as ifort.
&gt;     &gt; &gt;
&gt;     &gt; &gt; Can someone please alleviate my confusion as to why I mpif90
&gt;     is not running as ifort?
&gt;     &gt; &gt;
&gt;     &gt; &gt; Thank you for your suggestions,
&gt;     &gt; &gt;
&gt;     &gt; &gt; --
&gt;     &gt; &gt; Micah
&gt;     &gt; &gt;
&gt;     &gt; &gt;
&gt;     &gt; &gt; _______________________________________________
&gt;     &gt; &gt; users mailing list
&gt;     &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &gt;
&gt;     &gt;
&gt;     &gt; _______________________________________________
&gt;     &gt; users mailing list
&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &gt;
&gt;     &gt;
&gt;     &gt;
&gt;     &gt; --
&gt;     &gt; Micah Sklut
&gt;     &gt;
&gt;     &gt;
&gt;     &gt; _______________________________________________
&gt;     &gt; users mailing list
&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt;
&gt; -- 
&gt; Micah Sklut
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17971.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17961.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
