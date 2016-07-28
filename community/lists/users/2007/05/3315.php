<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 11:45:11 2007" -->
<!-- isoreceived="20070524154511" -->
<!-- sent="Thu, 24 May 2007 11:44:54 -0400" -->
<!-- isosent="20070524154454" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC" -->
<!-- id="BA5402E3-D17F-4B11-AE63-06EE05F01911_at_cs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="!~!UENERkVCMDkAAQACAAAAAAAAAAAAAAAAABgAAAAAAAAAie5xJOBgE0aKts3Ew5JnQ8KAAAAQAAAAtm1SQmRjyk2hE5kmnlhxhAEAAAAA_at_snu.ac.kr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 11:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3316.php">Kees Verstoep: "[OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>Previous message:</strong> <a href="3314.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] ethernet bonding"</a>
<li><strong>In reply to:</strong> <a href="3313.php">Jung, Soon-wook: "[OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Reply:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are 2 problems. First, it look like you're using LAM and not  
<br>
Open MPI as there are some lam_ missing symbols. Second, please use  
<br>
mpicxx to link your application as it will add all the missing  
<br>
libraries.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 24, 2007, at 10:38 AM, Jung, Soon-wook wrote:
<br>
<p><span class="quotelev1">&gt; Hello, users?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, I&#146;m trying to compile XOOPIC (2D plasma simulation  
</span><br>
<span class="quotelev1">&gt; program, MPI parallel operation available) in conjunction with MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had no problem with XOOPIC compilation in single-machine  
</span><br>
<span class="quotelev1">&gt; operation mode; however, when MPI mode is turned enabled, it  
</span><br>
<span class="quotelev1">&gt; generated about four or more page error messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux cluster that I&#146;m using is supposed is under single-machine  
</span><br>
<span class="quotelev1">&gt; operation due to some technical problems. (It means that only one  
</span><br>
<span class="quotelev1">&gt; node is currently working.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error shown below doesn&#146;t appear to originate from XOOPIC, but  
</span><br>
<span class="quotelev1">&gt; rather from MPI linkage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I&#146;ve made a simple mpi-test c program, compiled with mpicc and run  
</span><br>
<span class="quotelev1">&gt; with mpirun. It just worked fine.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * I have MPI version 1.2.7p1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * gcc, g++ version 3.4.6 (both)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * OS: centOS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Both MPICH &amp; MPICH2 are installed in the machine. (/usr/local/ 
</span><br>
<span class="quotelev1">&gt; mpich, /usr/local/mpich2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.       This is PATH &amp; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Echo $PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/kerberos/sbin:/usr/local/mpich/bin:/usr/local/mpich2/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/pbs/sbin:/usr/local/pbs/bin:/usr/local/maui/sbin:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; maui/bin:/usr/local/bwatch:/usr/local/hpc/bin:/opt/intel/compiler/ 
</span><br>
<span class="quotelev1">&gt; 9.1/bin:/opt/absoft/bin:/usr/local/ldap/bin:/usr/local/ldap/sbin:/ 
</span><br>
<span class="quotelev1">&gt; usr/kerberos/bin:/usr/local/mpich/bin:/usr/local/mpich2/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/pbs/sbin:/usr/local/pbs/bin:/usr/local/maui/sbin:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; maui/bin:/usr/local/bwatch:/usr/local/hpc/bin:/opt/intel/compiler/ 
</span><br>
<span class="quotelev1">&gt; 9.1/bin:/opt/absoft/bin:/usr/local/ldap/bin:/usr/local/ldap/sbin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/local/ganglia/bin:/ 
</span><br>
<span class="quotelev1">&gt; home/jooilyoon/bin:/usr/local/ganglia/bin:/usr/local/mpich:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/mpich2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/compiler/9.1/lib:/opt/intel/mkl/8.1.1/lib/em64t::/usr/ 
</span><br>
<span class="quotelev1">&gt; local/mpich/bin:/usr/local/mpich2/bin/:/usr/local/mpich:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; mpich2:/usr/local/mpich/lib:/usr/local/mpich2/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Below is a message relevant to MPI during configuration. (It  
</span><br>
<span class="quotelev1">&gt; seems no problem occurs.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for mpicxx... /usr/local/mpich/bin/mpicxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for mpicc... /usr/local/mpich/bin/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Below is a message in config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:7702: checking for mpicxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:7720: found /usr/local/mpich/bin/mpicxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:7732: result: /usr/local/mpich/bin/mpicxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:7833: checking for mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:7851: found /usr/local/mpich/bin/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:7863: result: /usr/local/mpich/bin/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. This is a error message when make is executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g++  -Wall -Wno-unused  -g -DDEBUG   -DUNIX -DMPI_VERSION - 
</span><br>
<span class="quotelev1">&gt; DMPI_DEBUG     -o xoopic  main.o xgmain.o -L../otools -lotools -L../ 
</span><br>
<span class="quotelev1">&gt; advisor -ladvisor -L../physics -lphysics -lotools -ladvisor -Wl,- 
</span><br>
<span class="quotelev1">&gt; rpath,. -L/usr/lib -ltk8.4 -L/usr/lib -ltcl8.4 -L/usr/local/xgrafix/ 
</span><br>
<span class="quotelev1">&gt; lib -Wl,-rpath,/usr/local/xgrafix/lib -lXGC250 -L/usr/X11R6/lib64 - 
</span><br>
<span class="quotelev1">&gt; Wl,-rpath,/usr/X11R6/lib64 -lXpm   -ldl -L/usr/lib  -lz -Wl,-rpath,/ 
</span><br>
<span class="quotelev1">&gt; usr/lib -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main.o(.text+0x18d): In function `main':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/jooilyoon/xoopic2/xg/main.cpp:72: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `MPI_Init'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main.o(.text+0x19c):/home/jooilyoon/xoopic2/xg/main.cpp:76:  
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI_Comm_group'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main.o(.text+0x1b1):/home/jooilyoon/xoopic2/xg/main.cpp:77:  
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI_Comm_create'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main.o(.text+0x1c1):/home/jooilyoon/xoopic2/xg/main.cpp:78:  
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI_Comm_rank'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o)(.text+0x85de): In function  
</span><br>
<span class="quotelev1">&gt; `Diagnostics::UpdatePreDiagnostics()':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/jooilyoon/xoopic2/otools/diagn.cpp:867: undefined reference  
</span><br>
<span class="quotelev1">&gt; to `lam_mpi_sum'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o)(.text+0x85e3):/home/jooilyoon/ 
</span><br>
<span class="quotelev1">&gt; xoopic2/otools/diagn.cpp:867: undefined reference to `lam_mpi_float'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o)(.text+0x85ed):/home/jooilyoon/ 
</span><br>
<span class="quotelev1">&gt; xoopic2/otools/diagn.cpp:867: undefined reference to `MPI_Reduce'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o)(.gnu.linkonce.r._ZTVN3MPI2OpE+0x20):  
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Op::Init(void (*)(void const*, void*,  
</span><br>
<span class="quotelev1">&gt; int, MPI::Datatype const&amp;), bool)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o)(.gnu.linkonce.r._ZTVN3MPI2OpE+0x28):  
</span><br>
<span class="quotelev1">&gt; undefined reference to `MPI::Op::Free()'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev1">&gt; (.gnu.linkonce.t._ZN4PMPI8Datatype8Set_nameEPKc+0x1d): In function  
</span><br>
<span class="quotelev1">&gt; `PMPI::Datatype::Set_name(char const*)':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/include/mpi2cxx/datatype_inln.h:260: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `MPI_Type_set_name'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev1">&gt; (.gnu.linkonce.t._ZN4PMPI8Datatype8Set_attrEiPKv+0x23): In function  
</span><br>
<span class="quotelev1">&gt; `PMPI::Datatype::Set_attr(int, void const*)':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/include/mpi2cxx/datatype_inln.h:253: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `MPI_Type_set_attr'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev1">&gt; (.gnu.linkonce.t._ZNK4PMPI8Datatype8Get_nameEPcRi+0x25): In  
</span><br>
<span class="quotelev1">&gt; function `PMPI::Datatype::Get_name(char*, int&amp;) const':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/include/mpi2cxx/datatype_inln.h:246: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `MPI_Type_get_name'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev1">&gt; (.gnu.linkonce.t._ZNK4PMPI8Datatype12Get_envelopeERiS1_S1_S1_ 
</span><br>
<span class="quotelev1">&gt; +0x3e): In function `PMPI::Datatype::Get_envelope(int&amp;, int&amp;, int&amp;,  
</span><br>
<span class="quotelev1">&gt; int&amp;) const':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (about a few pages of similar errors follow)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../otools/libotools.a(dump.o)(.text+0xd1a): In function `Quit':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/jooilyoon/xoopic2/otools/dump.cpp:375: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `MPI_Finalize'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [xoopic] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/jooilyoon/xoopic2/xg'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/jooilyoon/xoopic2'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_node1 xoopic2]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All messages shown during configure, make, make install +  
</span><br>
<span class="quotelev1">&gt; config.log files are compressed into mpi-output.tar, attached in  
</span><br>
<span class="quotelev1">&gt; this e-mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody please advise me on this problem? Any suggestion would  
</span><br>
<span class="quotelev1">&gt; be sincerely appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jung, Soon-Wook
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3315/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3316.php">Kees Verstoep: "[OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>Previous message:</strong> <a href="3314.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] ethernet bonding"</a>
<li><strong>In reply to:</strong> <a href="3313.php">Jung, Soon-wook: "[OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Reply:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
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
