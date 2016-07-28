<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 18 21:48:01 2007" -->
<!-- isoreceived="20070319014801" -->
<!-- sent="Sun, 18 Mar 2007 19:47:55 -0600" -->
<!-- isosent="20070319014755" -->
<!-- name="Mohammad Huwaidi" -->
<!-- email="mohammad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 531, Issue 3" -->
<!-- id="45FDEBCB.2000901_at_kelman.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="mailman.523.1174095315.26964.users_at_open-mpi.org" -->
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
<strong>From:</strong> Mohammad Huwaidi (<em>mohammad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-18 21:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2829.php">Robin Humble: "[OMPI users] quadrics"</a>
<li><strong>Previous message:</strong> <a href="2827.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<li><strong>Reply:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff.
<br>
<p>The kind of faults I was trying to trap are those of application/node 
<br>
faults/failures.  I literally kill the application on another node in 
<br>
hope to try to trap it and react accordingly.  This is similar to FT-MPI 
<br>
shrinking the size, etc.
<br>
<p>If you suggest a different implementation that will allow me to trap 
<br>
please let me know.
<br>
<p>Regards,
<br>
Mohammad Huwaidi
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. open-mpi 1.2 build failure under Mac OS X 10.3.9
</span><br>
<span class="quotelev1">&gt;       (Marius Schamschula)
</span><br>
<span class="quotelev1">&gt;    2. Re: OpenMPI 1.2 bug: segmentation violation in mpi_pack
</span><br>
<span class="quotelev1">&gt;       (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    3. Re: Fault Tolerance (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    4. Re: Signal 13 (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 16 Mar 2007 18:42:22 -0500
</span><br>
<span class="quotelev1">&gt; From: Marius Schamschula &lt;marius_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;82367DB0-EBC6-4438-BBC2-D7896318633E_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was building open-mpi 1.2 on my G4 running Mac OS X 10.3.9 and had  
</span><br>
<span class="quotelev1">&gt; a build failure with the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/ompi_mpi_preconnect.lo | sed 's|[^/]*$|.deps/ 
</span><br>
<span class="quotelev1">&gt; &amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H -I.  
</span><br>
<span class="quotelev1">&gt; -I. -I../opal/include -I../orte/include -I../ompi/include -I../ompi/ 
</span><br>
<span class="quotelev1">&gt; include   -I..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing  -MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot; -c -o runtime/ompi_mpi_preconnect.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
</span><br>
<span class="quotelev1">&gt; exit 1; fi
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I../opal/include -I../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../ompi/include -I../ompi/include -I.. -D_REENTRANT - 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c  -fno-common  
</span><br>
<span class="quotelev1">&gt; -DPIC -o runtime/.libs/ompi_mpi_preconnect.o
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c: In function  
</span><br>
<span class="quotelev1">&gt; `ompi_init_do_oob_preconnect':
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c:74: error: storage size of `msg' isn't  
</span><br>
<span class="quotelev1">&gt; known
</span><br>
<span class="quotelev1">&gt; make[2]: *** [runtime/ompi_mpi_preconnect.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.3 20030304 (Apple Computer, Inc. build 1495)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ g77 -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/local/lib/gcc/powerpc-apple-darwin7.3.0/3.5.0/ 
</span><br>
<span class="quotelev1">&gt; specs
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc/configure --enable-threads=posix --enable- 
</span><br>
<span class="quotelev1">&gt; languages=f77
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.5.0 20040429 (experimental)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (g77 from hpc.sf.net)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note: I had no such problem under Mac OS X 10.4.9 with my ppc and x86  
</span><br>
<span class="quotelev1">&gt; builds. However, I did notice that the configure script did not  
</span><br>
<span class="quotelev1">&gt; detect g95 from g95.org correctly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... no
</span><br>
<span class="quotelev1">&gt; checking for f95... no
</span><br>
<span class="quotelev1">&gt; checking for fort... no
</span><br>
<span class="quotelev1">&gt; checking for xlf95... no
</span><br>
<span class="quotelev1">&gt; checking for ifort... no
</span><br>
<span class="quotelev1">&gt; checking for ifc... no
</span><br>
<span class="quotelev1">&gt; checking for efc... no
</span><br>
<span class="quotelev1">&gt; checking for pgf95... no
</span><br>
<span class="quotelev1">&gt; checking for lf95... no
</span><br>
<span class="quotelev1">&gt; checking for f90... no
</span><br>
<span class="quotelev1">&gt; checking for xlf90... no
</span><br>
<span class="quotelev1">&gt; checking for pgf90... no
</span><br>
<span class="quotelev1">&gt; checking for epcf90... no
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure --help doesn't give any hint about specifying F95.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marius
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Marius Schamschula,  Alabama A &amp; M University, Department of Physics
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The Center for Hydrology Soil Climatology and Remote Sensing
</span><br>
<span class="quotelev1">&gt;     <a href="http://optics.physics.aamu.edu/">http://optics.physics.aamu.edu/</a> - <a href="http://www.physics.aamu.edu/">http://www.physics.aamu.edu/</a>
</span><br>
<span class="quotelev1">&gt;            <a href="http://wx.aamu.edu/">http://wx.aamu.edu/</a> - <a href="http://www.aamu.edu/hscars/">http://www.aamu.edu/hscars/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Fri, 16 Mar 2007 19:46:39 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in
</span><br>
<span class="quotelev1">&gt; 	mpi_pack
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;045DABAC-1369-4E45-8E0C-FD9FBA13C95F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem with both the f77 and f90 programs is that you forgot to  
</span><br>
<span class="quotelev1">&gt; put &quot;ierr&quot; as the last argument to MPI_PACK.  This causes a segv  
</span><br>
<span class="quotelev1">&gt; because neither of them are correct MPI programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it's always good to hear that we can deliver a smaller corefile  
</span><br>
<span class="quotelev1">&gt; in v1.2!  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2007, at 7:25 PM, Erik Deumens wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a small program in F77 that makes a SEGV crash with
</span><br>
<span class="quotelev2">&gt;&gt; a 130MB core file. It is true that the crash is much cleaner
</span><br>
<span class="quotelev2">&gt;&gt; in OpenMPI 1.2; nice improvement! The core file is 500 MB with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running on CentOS 4.4 with the latest patches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif77 -g -o bug bug.f
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./bug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also have a bug.f90 (which I made first) and it crashes
</span><br>
<span class="quotelev2">&gt;&gt; too with the Intel ifort compiler 9.1.039.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Erik Deumens
</span><br>
<span class="quotelev2">&gt;&gt; Interim Director
</span><br>
<span class="quotelev2">&gt;&gt; Quantum Theory Project
</span><br>
<span class="quotelev2">&gt;&gt; New Physics Building 2334                    deumens_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; University of Florida            <a href="http://www.qtp.ufl.edu/~deumens">http://www.qtp.ufl.edu/~deumens</a>
</span><br>
<span class="quotelev2">&gt;&gt; Gainesville, Florida 32611-8435                    (352)392-6980
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       program mainf
</span><br>
<span class="quotelev2">&gt;&gt; c     mpif77 -g -o bug bug.f
</span><br>
<span class="quotelev2">&gt;&gt; c     mpirun -np 2 ./bug
</span><br>
<span class="quotelev2">&gt;&gt;       implicit none
</span><br>
<span class="quotelev2">&gt;&gt;       include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;       character*80 inpfile
</span><br>
<span class="quotelev2">&gt;&gt;       integer l
</span><br>
<span class="quotelev2">&gt;&gt;       integer i
</span><br>
<span class="quotelev2">&gt;&gt;       integer stat
</span><br>
<span class="quotelev2">&gt;&gt;       integer cmdbuf(4)
</span><br>
<span class="quotelev2">&gt;&gt;       integer lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;       integer ierr
</span><br>
<span class="quotelev2">&gt;&gt;       integer ntasks
</span><br>
<span class="quotelev2">&gt;&gt;       integer taskid
</span><br>
<span class="quotelev2">&gt;&gt;       integer bufpos
</span><br>
<span class="quotelev2">&gt;&gt;       integer cmd
</span><br>
<span class="quotelev2">&gt;&gt;       integer ldata
</span><br>
<span class="quotelev2">&gt;&gt;       character*(mpi_max_processor_name) hostnm
</span><br>
<span class="quotelev2">&gt;&gt;       integer iuinp
</span><br>
<span class="quotelev2">&gt;&gt;       integer iuout
</span><br>
<span class="quotelev2">&gt;&gt;       integer lnam
</span><br>
<span class="quotelev2">&gt;&gt;       real*8 bcaststart
</span><br>
<span class="quotelev2">&gt;&gt;       iuinp = 5
</span><br>
<span class="quotelev2">&gt;&gt;       iuout = 6
</span><br>
<span class="quotelev2">&gt;&gt;       lcmdbuf = 16
</span><br>
<span class="quotelev2">&gt;&gt;       i = 0
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_comm_size (mpi_comm_world, ntasks, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_comm_rank (mpi_comm_world, taskid, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       hostnm = ' '
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_get_processor_name (hostnm, lnam, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
</span><br>
<span class="quotelev2">&gt;&gt;       if (taskid == 0) then
</span><br>
<span class="quotelev2">&gt;&gt;         inpfile = ' '
</span><br>
<span class="quotelev2">&gt;&gt;         do
</span><br>
<span class="quotelev2">&gt;&gt;           write (iuout,*) 'Enter .inp filename:'
</span><br>
<span class="quotelev2">&gt;&gt;           read (iuinp,*) inpfile
</span><br>
<span class="quotelev2">&gt;&gt;           if (inpfile /= ' ') exit
</span><br>
<span class="quotelev2">&gt;&gt;         end do
</span><br>
<span class="quotelev2">&gt;&gt;         l = len_trim(inpfile)
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,inpfile(1:l)
</span><br>
<span class="quotelev2">&gt;&gt;         bufpos = 0
</span><br>
<span class="quotelev2">&gt;&gt;         cmd = 1099
</span><br>
<span class="quotelev2">&gt;&gt;         ldata = 7
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,cmd,lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_pack (cmd, 1, MPI_INTEGER,
</span><br>
<span class="quotelev2">&gt;&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,ldata,lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_pack (ldata, 1, MPI_INTEGER,
</span><br>
<span class="quotelev2">&gt;&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;         bcaststart = mpi_wtime()
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;         call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev2">&gt;&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;       end if
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED,
</span><br>
<span class="quotelev2">&gt;&gt;      *     0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       stop
</span><br>
<span class="quotelev2">&gt;&gt;       end program mainf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program mainf
</span><br>
<span class="quotelev2">&gt;&gt;   ! ifort -g -I /share/local/lib/ompi/include -o bug bug.f90
</span><br>
<span class="quotelev2">&gt;&gt;   !       -L /share/local/lib/ompi/lib -lmpi_f77 -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;   ! mpirun -np 2 ./bug
</span><br>
<span class="quotelev2">&gt;&gt;   implicit none
</span><br>
<span class="quotelev2">&gt;&gt;   include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;   character(len=80) :: inpfile
</span><br>
<span class="quotelev2">&gt;&gt;   character(len=1), dimension(80) :: cinpfile
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: l
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: i
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: stat
</span><br>
<span class="quotelev2">&gt;&gt;   integer, dimension(4) :: cmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: ntasks
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: taskid
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: bufpos
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: cmd
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: ldata
</span><br>
<span class="quotelev2">&gt;&gt;   character(len=mpi_max_processor_name) :: hostnm
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: iuinp = 5
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: iuout = 6
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: lnam
</span><br>
<span class="quotelev2">&gt;&gt;   real(8) :: bcaststart
</span><br>
<span class="quotelev2">&gt;&gt;   lcmdbuf = 16
</span><br>
<span class="quotelev2">&gt;&gt;   i = 0
</span><br>
<span class="quotelev2">&gt;&gt;   call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   call mpi_comm_size (mpi_comm_world, ntasks, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   call mpi_comm_rank (mpi_comm_world, taskid, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   hostnm = ' '
</span><br>
<span class="quotelev2">&gt;&gt;   call mpi_get_processor_name (hostnm, lnam, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
</span><br>
<span class="quotelev2">&gt;&gt;   if (taskid == 0) then
</span><br>
<span class="quotelev2">&gt;&gt;      inpfile = ' '
</span><br>
<span class="quotelev2">&gt;&gt;      do
</span><br>
<span class="quotelev2">&gt;&gt;         write (iuout,*) 'Enter .inp filename:'
</span><br>
<span class="quotelev2">&gt;&gt;         read (iuinp,*) inpfile
</span><br>
<span class="quotelev2">&gt;&gt;         if (inpfile /= ' ') exit
</span><br>
<span class="quotelev2">&gt;&gt;      end do
</span><br>
<span class="quotelev2">&gt;&gt;      l = len_trim(inpfile)
</span><br>
<span class="quotelev2">&gt;&gt;      do i=1,l
</span><br>
<span class="quotelev2">&gt;&gt;         cinpfile(i) = inpfile(i:i)
</span><br>
<span class="quotelev2">&gt;&gt;      end do
</span><br>
<span class="quotelev2">&gt;&gt;      cinpfile(l+1) = char(0)
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,inpfile(1:l)
</span><br>
<span class="quotelev2">&gt;&gt;      bufpos = 0
</span><br>
<span class="quotelev2">&gt;&gt;      cmd = 1099
</span><br>
<span class="quotelev2">&gt;&gt;      ldata = 7
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;      ! The next two lines exhibit the bug
</span><br>
<span class="quotelev2">&gt;&gt;      ! Uncomment the first and the program works
</span><br>
<span class="quotelev2">&gt;&gt;      ! Uncomment the second and the program dies in mpi_pack
</span><br>
<span class="quotelev2">&gt;&gt;      ! and produces a 137 MB core file.
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,cmd,lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt; !     write (iuout,*) 'task',taskid,cmd
</span><br>
<span class="quotelev2">&gt;&gt;      call mpi_pack (cmd, 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,ldata,lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;      call mpi_pack (ldata, 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;      bcaststart = mpi_wtime()
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
</span><br>
<span class="quotelev2">&gt;&gt;      call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev2">&gt;&gt;   end if
</span><br>
<span class="quotelev2">&gt;&gt;   call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;        0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   stop
</span><br>
<span class="quotelev2">&gt;&gt; end program mainf
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Regards,
Mohammad Huwaidi
We can't resolve problems by using the same kind of thinking we used
when we created them.
                                                 --Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2829.php">Robin Humble: "[OMPI users] quadrics"</a>
<li><strong>Previous message:</strong> <a href="2827.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<li><strong>Reply:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
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
