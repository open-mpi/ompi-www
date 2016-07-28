<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug  3 00:10:28 2007" -->
<!-- isoreceived="20070803041028" -->
<!-- sent="Fri, 3 Aug 2007 14:10:08 +1000" -->
<!-- isosent="20070803041008" -->
<!-- name="Juan Carlos Guzman" -->
<!-- email="Juan.Guzman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions" -->
<!-- id="66D36659-646D-4928-B7E5-E395BFD70103_at_csiro.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8E73CEE-A5AF-4C87-BEF6-E690405A5462_at_cs.utk.edu" -->
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
<strong>From:</strong> Juan Carlos Guzman (<em>Juan.Guzman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-03 00:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Previous message:</strong> <a href="3802.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3802.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p><span class="quotelev1">&gt; Allocating memory is one thing. Being able to use it it's a
</span><br>
<span class="quotelev1">&gt; completely different story. Once you allocate the 8GB array can you
</span><br>
<span class="quotelev1">&gt; fill it with some random values ? This will force the kernel to
</span><br>
<span class="quotelev1">&gt; really give you the 8GB of memory. If this segfault, then that's the
</span><br>
<span class="quotelev1">&gt; problem. If not ... the problem come from Open MPI I guess.
</span><br>
Yes I can fill the buffer entirely with dummy value to ensure that  
<br>
the memory allocated is actually used, so I don't think the problem  
<br>
is in the OS.
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;&nbsp;Juan-Carlos.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 2, 2007, at 6:59 PM, Juan Carlos Guzman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jelena, George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your replies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is possible that the problem is not in MPI - I've seen similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on some of our workstations some time ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Juan, are you sure you can allocate more than 2x 4GB memory of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-mpi program on your system?
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I did a small program that can allocate more than 8 GB of memory
</span><br>
<span class="quotelev2">&gt;&gt; (using malloc()).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;    Juan-Carlos.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jelena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 1 Aug 2007, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Juan,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have to check to see what's wrong there. We build Open MPI with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; full support for data transfer up to sizeof(size_t) bytes. so you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case should be covered. However, there are some known problems with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI interface for data larger than sizeof(int). As an example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _count field in the MPI_Status structure will be truncated ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 30, 2007, at 1:47 AM, Juan Carlos Guzman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anyone know the maximum buffer size I can use in MPI_Send()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (MPI_Recv) function?. I was doing some testing using two nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster to measure the point-to-point MPI message rate  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; depending on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; size. The test program exchanges MPI_FLOAT datatypes between two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes. I was able to send up to 4 GB of data (500 Mega MPI_FLOATs)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before the process crashed with a segmentation fault message.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is the maximum size of the message limited by the sizeof(int) *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sizeof
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (MPI data type) used in the MPI_Send()/MPI_Recv() functions?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My cluster has openmpi 1.2.3 installed. Each node has 2 x dual  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; AMD Opteron and 12 GB RAM.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Juan-Carlos.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jelena Pjesivac-Grbovic, Pjesa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Graduate Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Claxton Complex 350
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (865) 974 - 6722
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (865) 974 - 6321
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;The only difference between a problem and a solution is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   people understand the solution.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                        -- Charles Kettering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Wed, 1 Aug 2007 15:06:56 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Adams, Samuel D Contr AFRL/HEDR&quot; &lt;Samuel.Adams_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] torque and openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;8BF06A36E7AD424197195998D9A0B8E1D7724F_at_FBRMLBR01.Enterprise.afmc.ds 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f.mil&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain;	charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I reran the configure script with the --with-tm flag this time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the info.  It was working before for clients with ssh properly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configured (i.e. my account only).  But now it is working without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use ssh for all accounts (i.e. biologist and physicists users).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam Adams
</span><br>
<span class="quotelev3">&gt;&gt;&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, July 27, 2007 2:58 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] torque and openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 27, 2007, at 2:48 PM, Galen Shipman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I set up ompi before I configured Torque.  Do I need to recompile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with appropriate torque configure options to get better
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; integration?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If libtorque wasn't present on the machine at configure then yes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to run:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --with-tm=&lt;path&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You don't *have* to do this, of course.  If you've got it working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with ssh, that's fine.  But the integration with torque can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - you can disable ssh for non-root accounts (assuming no other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; services need rsh/ssh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - users don't have to setup ssh keys to run MPI jobs (a small thing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but sometimes nice when the users aren't computer scientists)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - torque knows about all processes on all nodes (not just the mother
</span><br>
<span class="quotelev3">&gt;&gt;&gt; superior) and can therefore both track and kill them if necessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just my $0.02...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Wed, 1 Aug 2007 20:58:44 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] unable to compile open mpi using pgf90 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	AMD	opteron system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;5453C030-B7C9-48E1-BBA7-F04BCC43C9CB_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 1, 2007, at 11:38 AM, S.Sundar Raman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dear openmpi users,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i m trying to compile openmpi with pgf90 compiler in AMD opteron
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i followed the procedure given in the mailer archives.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What procedure are you referring to, specifically?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i found the following problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please kindly help me in this regard and i m eagerly waiting for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your reply
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/usr/local/openmpi-1.2.3/ompi/mpi/f90'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --mode=link pgf90 -I../../../ompi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90 -export-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dynamic -o libmpi_f90.la -rpath /usr/local/mpi/lib mpi.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_wtick_f90.lo mpi_wtime_f90.lo -lnsl -lutil -lm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: pgf90 -shared -fPIC -Mnomain .libs/mpi.o .libs/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_wtick_f90.o .libs/mpi_wtime_f90.o -lnsl -lutil -lm -Wl,- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; soname -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ld: .libs/mpi.o: relocation R_X86_64_PC32 against
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `__pgio_ini' can not be used when making a shared object; recompile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with -fPIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can usually compile with the PGI compilers without needing to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything special (PGI v6.2-5 and 7.0-2), although I usually do add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following option to configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	--with-wrapper-cxxflags=-fPIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This puts &quot;-fPIC&quot; in the flags that the mpiCC wrapper compiler will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically insert when compiling MPI C++ applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 657, Issue 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *************************************
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
<p>----------
<br>
Juan Carlos Guzman
<br>
Software Engineer
<br>
CSIRO Australia Telescope National Facility (ATNF)
<br>
P.O.Box 76, Epping NSW 1710, Australia
<br>
Phone: +61 2 9372 4457
<br>
Fax: +61 2 9372 4310
<br>
Email: Juan.Guzman_at_[hidden]
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3804.php">Don Kerr: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Previous message:</strong> <a href="3802.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3802.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
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
