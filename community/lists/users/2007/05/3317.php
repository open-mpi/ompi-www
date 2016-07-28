<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 11:49:52 2007" -->
<!-- isoreceived="20070524154952" -->
<!-- sent="Thu, 24 May 2007 11:49:34 -0400" -->
<!-- isosent="20070524154934" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC" -->
<!-- id="205C7E25-6AD5-4A17-9040-77003657BD08_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="BA5402E3-D17F-4B11-AE63-06EE05F01911_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 11:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<li><strong>Previous message:</strong> <a href="3316.php">Kees Verstoep: "[OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>In reply to:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add to what George said -- it looks like you have multiple  
<br>
different implementations of MPI installed on your machine (LAM/MPI,  
<br>
MPICH, MPICH2, ...?).  Ensure that you completely compile and run  
<br>
your application with *one* implementation of MPI (they are not  
<br>
binary compatible).
<br>
<p>Keep in mind that each MPI implementation is a wholly separate  
<br>
project and code base.  This list can only provide help with Open MPI  
<br>
(not LAM/MPI, MPICH, or MPICH2).  Other MPI implementations have  
<br>
their own support mailing lists.
<br>
<p><p>On May 24, 2007, at 11:44 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There are 2 problems. First, it look like you're using LAM and not  
</span><br>
<span class="quotelev1">&gt; Open MPI as there are some lam_ missing symbols. Second, please use  
</span><br>
<span class="quotelev1">&gt; mpicxx to link your application as it will add all the missing  
</span><br>
<span class="quotelev1">&gt; libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2007, at 10:38 AM, Jung, Soon-wook wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, users?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, I&#146;m trying to compile XOOPIC (2D plasma simulation  
</span><br>
<span class="quotelev2">&gt;&gt; program, MPI parallel operation available) in conjunction with MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had no problem with XOOPIC compilation in single-machine  
</span><br>
<span class="quotelev2">&gt;&gt; operation mode; however, when MPI mode is turned enabled, it  
</span><br>
<span class="quotelev2">&gt;&gt; generated about four or more page error messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux cluster that I&#146;m using is supposed is under single-machine  
</span><br>
<span class="quotelev2">&gt;&gt; operation due to some technical problems. (It means that only one  
</span><br>
<span class="quotelev2">&gt;&gt; node is currently working.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error shown below doesn&#146;t appear to originate from XOOPIC, but  
</span><br>
<span class="quotelev2">&gt;&gt; rather from MPI linkage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I&#146;ve made a simple mpi-test c program, compiled with mpicc and  
</span><br>
<span class="quotelev2">&gt;&gt; run with mpirun. It just worked fine.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * I have MPI version 1.2.7p1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * gcc, g++ version 3.4.6 (both)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * OS: centOS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Both MPICH &amp; MPICH2 are installed in the machine. (/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt; mpich, /usr/local/mpich2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.       This is PATH &amp; LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/kerberos/sbin:/usr/local/mpich/bin:/usr/local/mpich2/bin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/pbs/sbin:/usr/local/pbs/bin:/usr/local/maui/sbin:/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt; maui/bin:/usr/local/bwatch:/usr/local/hpc/bin:/opt/intel/compiler/ 
</span><br>
<span class="quotelev2">&gt;&gt; 9.1/bin:/opt/absoft/bin:/usr/local/ldap/bin:/usr/local/ldap/sbin:/ 
</span><br>
<span class="quotelev2">&gt;&gt; usr/kerberos/bin:/usr/local/mpich/bin:/usr/local/mpich2/bin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/pbs/sbin:/usr/local/pbs/bin:/usr/local/maui/sbin:/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt; maui/bin:/usr/local/bwatch:/usr/local/hpc/bin:/opt/intel/compiler/ 
</span><br>
<span class="quotelev2">&gt;&gt; 9.1/bin:/opt/absoft/bin:/usr/local/ldap/bin:/usr/local/ldap/sbin:/ 
</span><br>
<span class="quotelev2">&gt;&gt; usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/local/ganglia/bin:/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/jooilyoon/bin:/usr/local/ganglia/bin:/usr/local/mpich:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/mpich2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/compiler/9.1/lib:/opt/intel/mkl/8.1.1/lib/em64t::/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/mpich/bin:/usr/local/mpich2/bin/:/usr/local/mpich:/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt; mpich2:/usr/local/mpich/lib:/usr/local/mpich2/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Below is a message relevant to MPI during configuration. (It  
</span><br>
<span class="quotelev2">&gt;&gt; seems no problem occurs.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for mpicxx... /usr/local/mpich/bin/mpicxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for mpicc... /usr/local/mpich/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Below is a message in config.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:7702: checking for mpicxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:7720: found /usr/local/mpich/bin/mpicxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:7732: result: /usr/local/mpich/bin/mpicxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:7833: checking for mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:7851: found /usr/local/mpich/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:7863: result: /usr/local/mpich/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. This is a error message when make is executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g++  -Wall -Wno-unused  -g -DDEBUG   -DUNIX -DMPI_VERSION - 
</span><br>
<span class="quotelev2">&gt;&gt; DMPI_DEBUG     -o xoopic  main.o xgmain.o -L../otools -lotools - 
</span><br>
<span class="quotelev2">&gt;&gt; L../advisor -ladvisor -L../physics -lphysics -lotools -ladvisor - 
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath,. -L/usr/lib -ltk8.4 -L/usr/lib -ltcl8.4 -L/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt; xgrafix/lib -Wl,-rpath,/usr/local/xgrafix/lib -lXGC250 -L/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; X11R6/lib64 -Wl,-rpath,/usr/X11R6/lib64 -lXpm   -ldl -L/usr/lib  - 
</span><br>
<span class="quotelev2">&gt;&gt; lz -Wl,-rpath,/usr/lib -lm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main.o(.text+0x18d): In function `main':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/jooilyoon/xoopic2/xg/main.cpp:72: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `MPI_Init'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main.o(.text+0x19c):/home/jooilyoon/xoopic2/xg/main.cpp:76:  
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `MPI_Comm_group'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main.o(.text+0x1b1):/home/jooilyoon/xoopic2/xg/main.cpp:77:  
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `MPI_Comm_create'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main.o(.text+0x1c1):/home/jooilyoon/xoopic2/xg/main.cpp:78:  
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `MPI_Comm_rank'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o)(.text+0x85de): In function  
</span><br>
<span class="quotelev2">&gt;&gt; `Diagnostics::UpdatePreDiagnostics()':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/jooilyoon/xoopic2/otools/diagn.cpp:867: undefined reference  
</span><br>
<span class="quotelev2">&gt;&gt; to `lam_mpi_sum'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o)(.text+0x85e3):/home/jooilyoon/ 
</span><br>
<span class="quotelev2">&gt;&gt; xoopic2/otools/diagn.cpp:867: undefined reference to `lam_mpi_float'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o)(.text+0x85ed):/home/jooilyoon/ 
</span><br>
<span class="quotelev2">&gt;&gt; xoopic2/otools/diagn.cpp:867: undefined reference to `MPI_Reduce'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o)(.gnu.linkonce.r._ZTVN3MPI2OpE 
</span><br>
<span class="quotelev2">&gt;&gt; +0x20): undefined reference to `MPI::Op::Init(void (*)(void  
</span><br>
<span class="quotelev2">&gt;&gt; const*, void*, int, MPI::Datatype const&amp;), bool)'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o)(.gnu.linkonce.r._ZTVN3MPI2OpE 
</span><br>
<span class="quotelev2">&gt;&gt; +0x28): undefined reference to `MPI::Op::Free()'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev2">&gt;&gt; (.gnu.linkonce.t._ZN4PMPI8Datatype8Set_nameEPKc+0x1d): In function  
</span><br>
<span class="quotelev2">&gt;&gt; `PMPI::Datatype::Set_name(char const*)':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/mpi2cxx/datatype_inln.h:260: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `MPI_Type_set_name'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev2">&gt;&gt; (.gnu.linkonce.t._ZN4PMPI8Datatype8Set_attrEiPKv+0x23): In  
</span><br>
<span class="quotelev2">&gt;&gt; function `PMPI::Datatype::Set_attr(int, void const*)':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/mpi2cxx/datatype_inln.h:253: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `MPI_Type_set_attr'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev2">&gt;&gt; (.gnu.linkonce.t._ZNK4PMPI8Datatype8Get_nameEPcRi+0x25): In  
</span><br>
<span class="quotelev2">&gt;&gt; function `PMPI::Datatype::Get_name(char*, int&amp;) const':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/mpi2cxx/datatype_inln.h:246: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `MPI_Type_get_name'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(diagn.o) 
</span><br>
<span class="quotelev2">&gt;&gt; (.gnu.linkonce.t._ZNK4PMPI8Datatype12Get_envelopeERiS1_S1_S1_ 
</span><br>
<span class="quotelev2">&gt;&gt; +0x3e): In function `PMPI::Datatype::Get_envelope(int&amp;, int&amp;,  
</span><br>
<span class="quotelev2">&gt;&gt; int&amp;, int&amp;) const':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (about a few pages of similar errors follow)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../otools/libotools.a(dump.o)(.text+0xd1a): In function `Quit':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/jooilyoon/xoopic2/otools/dump.cpp:375: undefined reference  
</span><br>
<span class="quotelev2">&gt;&gt; to `MPI_Finalize'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [xoopic] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/jooilyoon/xoopic2/xg'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/jooilyoon/xoopic2'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_node1 xoopic2]#
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All messages shown during configure, make, make install +  
</span><br>
<span class="quotelev2">&gt;&gt; config.log files are compressed into mpi-output.tar, attached in  
</span><br>
<span class="quotelev2">&gt;&gt; this e-mail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody please advise me on this problem? Any suggestion would  
</span><br>
<span class="quotelev2">&gt;&gt; be sincerely appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jung, Soon-Wook
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3318.php">Michael: "Re: [OMPI users] ethernet bonding"</a>
<li><strong>Previous message:</strong> <a href="3316.php">Kees Verstoep: "[OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>In reply to:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
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
