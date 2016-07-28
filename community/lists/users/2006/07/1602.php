<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 12:23:26 2006" -->
<!-- isoreceived="20060711162326" -->
<!-- sent="Tue, 11 Jul 2006 12:23:16 -0400" -->
<!-- isosent="20060711162316" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0" -->
<!-- id="507769B7-8495-478B-B9A8-18982665346B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060711155302.GA15018_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-07-11 12:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1603.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1601.php">Abhishek Agarwal: "[OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1599.php">Daryl W. Grunau: "[OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using the Intel compiler 9.0 on several platforms to compile Open  
<br>
MPI. I never get such kind of errors. I look into the attached file  
<br>
and I notice 2 things. First, there is a -m64 flag on the command  
<br>
line, and icc complain about not knowing anything about it (and it's  
<br>
right). Second, at the end of the file, it complain about a missing  
<br>
symbol (gxx_personality). I doubt that icc should know anything about  
<br>
the gxx_personality. In fact it look like icc is trying to use some  
<br>
libraries compiled with g++. Can you check the library path used by  
<br>
your compiler ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 11, 2006, at 11:53 AM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build version 1.1 with Intel 9.0 compilers and  
</span><br>
<span class="quotelev1">&gt; getting an
</span><br>
<span class="quotelev1">&gt; error at the very end in the tools directory: ompi/tools/ 
</span><br>
<span class="quotelev1">&gt; ompi_info.  The
</span><br>
<span class="quotelev1">&gt; build appears to die with undefined references to things that  
</span><br>
<span class="quotelev1">&gt; belong to the
</span><br>
<span class="quotelev1">&gt; C++ string class (see long attachment).  Strange thing is that this  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; code compiles fine with the GNU compilers (FC3), PGI (6.1) and  
</span><br>
<span class="quotelev1">&gt; Pathscale (2.4).
</span><br>
<span class="quotelev1">&gt; FWIW, my arch is x86_64 ...  I wrote a simple hello.cc program that  
</span><br>
<span class="quotelev1">&gt; used
</span><br>
<span class="quotelev1">&gt; the string class and it also compiled/linked/executed fine with icc.
</span><br>
<span class="quotelev1">&gt; Anyone else seeing this problem or is my compiler not installed  
</span><br>
<span class="quotelev1">&gt; correctly?
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.s.  Here's my configure line from config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ ./configure --build=x86_64-redhat-linux-gnu --host=x86_64- 
</span><br>
<span class="quotelev1">&gt; redhat-linux-gnu --target=x86_64-redhat-linux-gnu --program-prefix=  
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/OpenMPI/openmpi-intel-1.1/ib --exec-prefix=/opt/ 
</span><br>
<span class="quotelev1">&gt; OpenMPI/openmpi-intel-1.1/ib --bindir=/opt/OpenMPI/openmpi- 
</span><br>
<span class="quotelev1">&gt; intel-1.1/ib/bin --sbindir=/opt/OpenMPI/openmpi-intel-1.1/ib/sbin -- 
</span><br>
<span class="quotelev1">&gt; sysconfdir=/etc --datadir=/opt/OpenMPI/openmpi-intel-1.1/ib/share -- 
</span><br>
<span class="quotelev1">&gt; includedir=/opt/OpenMPI/openmpi-intel-1.1/ib/include --libdir=/opt/ 
</span><br>
<span class="quotelev1">&gt; OpenMPI/openmpi-intel-1.1/ib/lib64 --libexecdir=/opt/OpenMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-intel-1.1/ib/libexec --localstatedir=/var --sharedstatedir=/ 
</span><br>
<span class="quotelev1">&gt; opt/OpenMPI/openmpi-intel-1.1/ib/com --mandir=/usr/share/man -- 
</span><br>
<span class="quotelev1">&gt; infodir=/usr/share/info --prefix=/opt/OpenMPI/openmpi-intel-1.1/ib  
</span><br>
<span class="quotelev1">&gt; --sysconfdir=/opt/OpenMPI/openmpi-intel-1.1/ib/etc --mandir=/opt/ 
</span><br>
<span class="quotelev1">&gt; OpenMPI/openmpi-intel-1.1/ib/man --disable-shared --enable-static -- 
</span><br>
<span class="quotelev1">&gt; with-bproc --with-openib=/opt/IB/ibgd-2.0.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make.log&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1603.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1601.php">Abhishek Agarwal: "[OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1599.php">Daryl W. Grunau: "[OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1615.php">Greg Lindahl: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
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
