<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 10:37:16 2007" -->
<!-- isoreceived="20070524143716" -->
<!-- sent="Thu, 24 May 2007 23:38:40 +0900" -->
<!-- isosent="20070524143840" -->
<!-- name="Jung, Soon-wook" -->
<!-- email="genius00_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Compilation Problem when linked with XOOPIC" -->
<!-- id="!~!UENERkVCMDkAAQACAAAAAAAAAAAAAAAAABgAAAAAAAAAie5xJOBgE0aKts3Ew5JnQ8KAAAAQAAAAtm1SQmRjyk2hE5kmnlhxhAEAAAAA_at_snu.ac.kr" -->
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
<strong>From:</strong> Jung, Soon-wook (<em>genius00_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 10:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3314.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] ethernet bonding"</a>
<li><strong>Previous message:</strong> <a href="3312.php">Rob: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Reply:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, users?
<br>
<p>Currently, I'm trying to compile XOOPIC (2D plasma simulation program, MPI
<br>
parallel operation available) in conjunction with MPI.
<br>
<p>I had no problem with XOOPIC compilation in single-machine operation mode;
<br>
however, when MPI mode is turned enabled, it generated about four or more
<br>
page error messages.
<br>
<p>Linux cluster that I'm using is supposed is under single-machine operation
<br>
due to some technical problems. (It means that only one node is currently
<br>
working.)
<br>
<p>&nbsp;
<br>
<p>The error shown below doesn't appear to originate from XOOPIC, but rather
<br>
from MPI linkage.
<br>
<p>(I've made a simple mpi-test c program, compiled with mpicc and run with
<br>
mpirun. It just worked fine.)
<br>
<p>&nbsp;
<br>
<p>* I have MPI version 1.2.7p1
<br>
<p>* gcc, g++ version 3.4.6 (both)
<br>
<p>* OS: centOS
<br>
<p>* Both MPICH &amp; MPICH2 are installed in the machine. (/usr/local/mpich,
<br>
/usr/local/mpich2)
<br>
<p>&nbsp;
<br>
<p>1.       This is PATH &amp; LD_LIBRARY_PATH
<br>
<p>---------------------------------------------
<br>
<p>Echo $PATH
<br>
<p>/usr/kerberos/sbin:/usr/local/mpich/bin:/usr/local/mpich2/bin:/usr/local/pbs
<br>
/sbin:/usr/local/pbs/bin:/usr/local/maui/sbin:/usr/local/maui/bin:/usr/local
<br>
/bwatch:/usr/local/hpc/bin:/opt/intel/compiler/9.1/bin:/opt/absoft/bin:/usr/
<br>
local/ldap/bin:/usr/local/ldap/sbin:/usr/kerberos/bin:/usr/local/mpich/bin:/
<br>
usr/local/mpich2/bin:/usr/local/pbs/sbin:/usr/local/pbs/bin:/usr/local/maui/
<br>
sbin:/usr/local/maui/bin:/usr/local/bwatch:/usr/local/hpc/bin:/opt/intel/com
<br>
piler/9.1/bin:/opt/absoft/bin:/usr/local/ldap/bin:/usr/local/ldap/sbin:/usr/
<br>
local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/local/ganglia/bin:/home/jooilyoo
<br>
n/bin:/usr/local/ganglia/bin:/usr/local/mpich:/usr/local/mpich2
<br>
<p>&nbsp;
<br>
<p>Echo $LD_LIBRARY_PATH
<br>
<p>/opt/intel/compiler/9.1/lib:/opt/intel/mkl/8.1.1/lib/em64t::/usr/local/mpich
<br>
/bin:/usr/local/mpich2/bin/:/usr/local/mpich:/usr/local/mpich2:/usr/local/mp
<br>
ich/lib:/usr/local/mpich2/lib
<br>
<p>------------------------------------------------
<br>
<p><p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>2. Below is a message relevant to MPI during configuration. (It seems no
<br>
problem occurs.)
<br>
<p>------------------------------------------------
<br>
<p>checking for mpicxx... /usr/local/mpich/bin/mpicxx
<br>
<p>checking for mpicc... /usr/local/mpich/bin/mpicc
<br>
<p>------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>3. Below is a message in config.log
<br>
<p>------------------------------------------------
<br>
<p>configure:7702: checking for mpicxx
<br>
<p>configure:7720: found /usr/local/mpich/bin/mpicxx
<br>
<p>configure:7732: result: /usr/local/mpich/bin/mpicxx
<br>
<p>configure:7833: checking for mpicc
<br>
<p>configure:7851: found /usr/local/mpich/bin/mpicc
<br>
<p>configure:7863: result: /usr/local/mpich/bin/mpicc
<br>
<p>-------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>4. This is a error message when make is executed.
<br>
<p>--------------------------------------------------
<br>
<p>g++  -Wall -Wno-unused  -g -DDEBUG   -DUNIX -DMPI_VERSION -DMPI_DEBUG     -o
<br>
xoopic  main.o xgmain.o -L../otools -lotools -L../advisor -ladvisor
<br>
-L../physics -lphysics -lotools -ladvisor -Wl,-rpath,. -L/usr/lib -ltk8.4
<br>
-L/usr/lib -ltcl8.4 -L/usr/local/xgrafix/lib
<br>
-Wl,-rpath,/usr/local/xgrafix/lib -lXGC250 -L/usr/X11R6/lib64
<br>
-Wl,-rpath,/usr/X11R6/lib64 -lXpm   -ldl -L/usr/lib  -lz -Wl,-rpath,/usr/lib
<br>
-lm 
<br>
<p>&nbsp;
<br>
<p>main.o(.text+0x18d): In function `main':
<br>
<p>/home/jooilyoon/xoopic2/xg/main.cpp:72: undefined reference to `MPI_Init'
<br>
<p>main.o(.text+0x19c):/home/jooilyoon/xoopic2/xg/main.cpp:76: undefined
<br>
reference to `MPI_Comm_group'
<br>
<p>main.o(.text+0x1b1):/home/jooilyoon/xoopic2/xg/main.cpp:77: undefined
<br>
reference to `MPI_Comm_create'
<br>
<p>main.o(.text+0x1c1):/home/jooilyoon/xoopic2/xg/main.cpp:78: undefined
<br>
reference to `MPI_Comm_rank'
<br>
<p>../otools/libotools.a(diagn.o)(.text+0x85de): In function
<br>
`Diagnostics::UpdatePreDiagnostics()':
<br>
<p>/home/jooilyoon/xoopic2/otools/diagn.cpp:867: undefined reference to
<br>
`lam_mpi_sum'
<br>
<p>../otools/libotools.a(diagn.o)(.text+0x85e3):/home/jooilyoon/xoopic2/otools/
<br>
diagn.cpp:867: undefined reference to `lam_mpi_float'
<br>
<p>../otools/libotools.a(diagn.o)(.text+0x85ed):/home/jooilyoon/xoopic2/otools/
<br>
diagn.cpp:867: undefined reference to `MPI_Reduce'
<br>
<p>../otools/libotools.a(diagn.o)(.gnu.linkonce.r._ZTVN3MPI2OpE+0x20):
<br>
undefined reference to `MPI::Op::Init(void (*)(void const*, void*, int,
<br>
MPI::Datatype const&amp;), bool)'
<br>
<p>../otools/libotools.a(diagn.o)(.gnu.linkonce.r._ZTVN3MPI2OpE+0x28):
<br>
undefined reference to `MPI::Op::Free()'
<br>
<p>../otools/libotools.a(diagn.o)(.gnu.linkonce.t._ZN4PMPI8Datatype8Set_nameEPK
<br>
c+0x1d): In function `PMPI::Datatype::Set_name(char const*)':
<br>
<p>/usr/include/mpi2cxx/datatype_inln.h:260: undefined reference to
<br>
`MPI_Type_set_name'
<br>
<p>../otools/libotools.a(diagn.o)(.gnu.linkonce.t._ZN4PMPI8Datatype8Set_attrEiP
<br>
Kv+0x23): In function `PMPI::Datatype::Set_attr(int, void const*)':
<br>
<p>/usr/include/mpi2cxx/datatype_inln.h:253: undefined reference to
<br>
`MPI_Type_set_attr'
<br>
<p>../otools/libotools.a(diagn.o)(.gnu.linkonce.t._ZNK4PMPI8Datatype8Get_nameEP
<br>
cRi+0x25): In function `PMPI::Datatype::Get_name(char*, int&amp;) const':
<br>
<p>/usr/include/mpi2cxx/datatype_inln.h:246: undefined reference to
<br>
`MPI_Type_get_name'
<br>
<p>../otools/libotools.a(diagn.o)(.gnu.linkonce.t._ZNK4PMPI8Datatype12Get_envel
<br>
opeERiS1_S1_S1_+0x3e): In function `PMPI::Datatype::Get_envelope(int&amp;, int&amp;,
<br>
int&amp;, int&amp;) const':
<br>
<p>...........
<br>
<p>(about a few pages of similar errors follow)
<br>
<p>............
<br>
<p>../otools/libotools.a(dump.o)(.text+0xd1a): In function `Quit':
<br>
<p>/home/jooilyoon/xoopic2/otools/dump.cpp:375: undefined reference to
<br>
`MPI_Finalize'
<br>
<p>collect2: ld returned 1 exit status
<br>
<p>make[2]: *** [xoopic] Error 1
<br>
<p>make[2]: Leaving directory `/home/jooilyoon/xoopic2/xg'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory `/home/jooilyoon/xoopic2'
<br>
<p>make: *** [all] Error 2
<br>
<p>[root_at_node1 xoopic2]#
<br>
<p>--------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>All messages shown during configure, make, make install + config.log files
<br>
are compressed into mpi-output.tar, attached in this e-mail.
<br>
<p>Can anybody please advise me on this problem? Any suggestion would be
<br>
sincerely appreciated.
<br>
<p>Thanks.
<br>
<p>&nbsp;
<br>
<p>Jung, Soon-Wook
<br>
<p><p><p>
<p>
<br><p>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3313/ompi-output.tar">ompi-output.tar</a>
</ul>
<!-- attachment="ompi-output.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3314.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] ethernet bonding"</a>
<li><strong>Previous message:</strong> <a href="3312.php">Rob: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Reply:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
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
