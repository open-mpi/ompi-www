<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 07:32:35 2007" -->
<!-- isoreceived="20070319113235" -->
<!-- sent="Mon, 19 Mar 2007 07:32:27 -0400" -->
<!-- isosent="20070319113227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 531, Issue 3" -->
<!-- id="B4B44829-31DD-4ABC-A172-F74E3AE21C99_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45FDEBCB.2000901_at_kelman.com" -->
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
<strong>Date:</strong> 2007-03-19 07:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2836.php">Jeff Squyres: "Re: [OMPI users] quadrics"</a>
<li><strong>Previous message:</strong> <a href="2834.php">Tim Prins: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2828.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're looking for true fault tolerance, OMPI doesn't have it  
<br>
yet.  An audit for the code base to ensure that errors are  
<br>
continuable is planned, but is not currently on the roadmap.
<br>
<p>The FT-MPI guys can comment on their timetable for bringing that  
<br>
technology in...
<br>
<p><p>On Mar 18, 2007, at 9:47 PM, Mohammad Huwaidi wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The kind of faults I was trying to trap are those of application/ 
</span><br>
<span class="quotelev1">&gt; node faults/failures.  I literally kill the application on another  
</span><br>
<span class="quotelev1">&gt; node in hope to try to trap it and react accordingly.  This is  
</span><br>
<span class="quotelev1">&gt; similar to FT-MPI shrinking the size, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you suggest a different implementation that will allow me to  
</span><br>
<span class="quotelev1">&gt; trap please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mohammad Huwaidi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;    1. open-mpi 1.2 build failure under Mac OS X 10.3.9
</span><br>
<span class="quotelev2">&gt;&gt;       (Marius Schamschula)
</span><br>
<span class="quotelev2">&gt;&gt;    2. Re: OpenMPI 1.2 bug: segmentation violation in mpi_pack
</span><br>
<span class="quotelev2">&gt;&gt;       (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;    3. Re: Fault Tolerance (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;    4. Re: Signal 13 (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 16 Mar 2007 18:42:22 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Marius Schamschula &lt;marius_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] open-mpi 1.2 build failure under Mac OS X  
</span><br>
<span class="quotelev2">&gt;&gt; 10.3.9
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;82367DB0-EBC6-4438-BBC2-D7896318633E_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I was building open-mpi 1.2 on my G4 running Mac OS X 10.3.9 and  
</span><br>
<span class="quotelev2">&gt;&gt; had  a build failure with the following:
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo runtime/ompi_mpi_preconnect.lo | sed 's|[^/]* 
</span><br>
<span class="quotelev2">&gt;&gt; $|.deps/ &amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev2">&gt;&gt; I.  -I. -I../opal/include -I../orte/include -I../ompi/include -I../ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/ include   -I..  -D_REENTRANT  -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno- strict-aliasing  -MT runtime/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_preconnect.lo -MD -MP -MF  &quot;$depbase.Tpo&quot; -c -o runtime/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_preconnect.lo runtime/ ompi_mpi_preconnect.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$depbase.Tpo&quot;;  exit 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I../opal/include - 
</span><br>
<span class="quotelev2">&gt;&gt; I../ orte/include -I../ompi/include -I../ompi/include -I.. - 
</span><br>
<span class="quotelev2">&gt;&gt; D_REENTRANT - O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev2">&gt;&gt; MT runtime/ ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/  
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c  -fno- 
</span><br>
<span class="quotelev2">&gt;&gt; common  -DPIC -o runtime/.libs/ompi_mpi_preconnect.o
</span><br>
<span class="quotelev2">&gt;&gt; runtime/ompi_mpi_preconnect.c: In function   
</span><br>
<span class="quotelev2">&gt;&gt; `ompi_init_do_oob_preconnect':
</span><br>
<span class="quotelev2">&gt;&gt; runtime/ompi_mpi_preconnect.c:74: error: storage size of `msg'  
</span><br>
<span class="quotelev2">&gt;&gt; isn't  known
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [runtime/ompi_mpi_preconnect.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc -v
</span><br>
<span class="quotelev2">&gt;&gt; Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 3.3 20030304 (Apple Computer, Inc. build 1495)
</span><br>
<span class="quotelev2">&gt;&gt; $ g77 -v
</span><br>
<span class="quotelev2">&gt;&gt; Reading specs from /usr/local/lib/gcc/powerpc-apple- 
</span><br>
<span class="quotelev2">&gt;&gt; darwin7.3.0/3.5.0/ specs
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../gcc/configure --enable-threads=posix --enable-  
</span><br>
<span class="quotelev2">&gt;&gt; languages=f77
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 3.5.0 20040429 (experimental)
</span><br>
<span class="quotelev2">&gt;&gt; (g77 from hpc.sf.net)
</span><br>
<span class="quotelev2">&gt;&gt; Note: I had no such problem under Mac OS X 10.4.9 with my ppc and  
</span><br>
<span class="quotelev2">&gt;&gt; x86  builds. However, I did notice that the configure script did  
</span><br>
<span class="quotelev2">&gt;&gt; not  detect g95 from g95.org correctly:
</span><br>
<span class="quotelev2">&gt;&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev2">&gt;&gt; checking for gfortran... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for f95... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for fort... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for xlf95... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for ifort... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for ifc... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for efc... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for pgf95... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for lf95... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for f90... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for xlf90... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for pgf90... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for epcf90... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev2">&gt;&gt; configure --help doesn't give any hint about specifying F95.
</span><br>
<span class="quotelev2">&gt;&gt; TIA,
</span><br>
<span class="quotelev2">&gt;&gt; Marius
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Marius Schamschula,  Alabama A &amp; M University, Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt;      The Center for Hydrology Soil Climatology and Remote Sensing
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://optics.physics.aamu.edu/">http://optics.physics.aamu.edu/</a> - <a href="http://www.physics.aamu.edu/">http://www.physics.aamu.edu/</a>
</span><br>
<span class="quotelev2">&gt;&gt;            <a href="http://wx.aamu.edu/">http://wx.aamu.edu/</a> - <a href="http://www.aamu.edu/hscars/">http://www.aamu.edu/hscars/</a>
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 16 Mar 2007 19:46:39 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in
</span><br>
<span class="quotelev2">&gt;&gt; 	mpi_pack
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;045DABAC-1369-4E45-8E0C-FD9FBA13C95F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt; The problem with both the f77 and f90 programs is that you forgot  
</span><br>
<span class="quotelev2">&gt;&gt; to  put &quot;ierr&quot; as the last argument to MPI_PACK.  This causes a  
</span><br>
<span class="quotelev2">&gt;&gt; segv  because neither of them are correct MPI programs.
</span><br>
<span class="quotelev2">&gt;&gt; But it's always good to hear that we can deliver a smaller  
</span><br>
<span class="quotelev2">&gt;&gt; corefile  in v1.2!  :-)
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2007, at 7:25 PM, Erik Deumens wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a small program in F77 that makes a SEGV crash with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a 130MB core file. It is true that the crash is much cleaner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in OpenMPI 1.2; nice improvement! The core file is 500 MB with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running on CentOS 4.4 with the latest patches.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif77 -g -o bug bug.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 ./bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also have a bug.f90 (which I made first) and it crashes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too with the Intel ifort compiler 9.1.039.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Erik Deumens
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interim Director
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quantum Theory Project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Physics Building 2334                    deumens_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Florida            <a href="http://www.qtp.ufl.edu/~deumens">http://www.qtp.ufl.edu/~deumens</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gainesville, Florida 32611-8435                    (352)392-6980
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       program mainf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c     mpif77 -g -o bug bug.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c     mpirun -np 2 ./bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       character*80 inpfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer l
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer i
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer stat
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer cmdbuf(4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer ntasks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer taskid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer ldata
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       character*(mpi_max_processor_name) hostnm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer iuinp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer iuout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       integer lnam
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       real*8 bcaststart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       iuinp = 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       iuout = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       lcmdbuf = 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       i = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call mpi_init(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call mpi_comm_size (mpi_comm_world, ntasks, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call mpi_comm_rank (mpi_comm_world, taskid, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       hostnm = ' '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call mpi_get_processor_name (hostnm, lnam, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (taskid == 0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         inpfile = ' '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           write (iuout,*) 'Enter .inp filename:'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           read (iuinp,*) inpfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           if (inpfile /= ' ') exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         l = len_trim(inpfile)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,inpfile(1:l)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         bufpos = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         cmd = 1099
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ldata = 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,cmd,lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         call mpi_pack (cmd, 1, MPI_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,ldata,lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         call mpi_pack (ldata, 1, MPI_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         bcaststart = mpi_wtime()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *       cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *     0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       stop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end program mainf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program mainf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ! ifort -g -I /share/local/lib/ompi/include -o bug bug.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   !       -L /share/local/lib/ompi/lib -lmpi_f77 -lmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ! mpirun -np 2 ./bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   include 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   character(len=80) :: inpfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   character(len=1), dimension(80) :: cinpfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: l
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: i
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: stat
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer, dimension(4) :: cmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: ierr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: ntasks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: taskid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: ldata
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   character(len=mpi_max_processor_name) :: hostnm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: iuinp = 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: iuout = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: lnam
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   real(8) :: bcaststart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   lcmdbuf = 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   i = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_init(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_comm_size (mpi_comm_world, ntasks, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_comm_rank (mpi_comm_world, taskid, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   hostnm = ' '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_get_processor_name (hostnm, lnam, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   write (iuout,*) 'task',taskid,'of',ntasks,'on ',hostnm(1:lnam)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (taskid == 0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      inpfile = ' '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         write (iuout,*) 'Enter .inp filename:'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         read (iuinp,*) inpfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (inpfile /= ' ') exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      l = len_trim(inpfile)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      do i=1,l
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         cinpfile(i) = inpfile(i:i)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      cinpfile(l+1) = char(0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,inpfile(1:l)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      bufpos = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      cmd = 1099
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ldata = 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ! The next two lines exhibit the bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ! Uncomment the first and the program works
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ! Uncomment the second and the program dies in mpi_pack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ! and produces a 137 MB core file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,cmd,lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !     write (iuout,*) 'task',taskid,cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call mpi_pack (cmd, 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,ldata,lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call mpi_pack (ldata, 1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      bcaststart = mpi_wtime()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,bcaststart,lcmdbuf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call mpi_pack (bcaststart, 1, MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           cmdbuf, lcmdbuf, bufpos, MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write (iuout,*) 'task',taskid,cmdbuf,bufpos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_bcast (cmdbuf, lcmdbuf, MPI_PACKED, &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_finalize(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   stop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end program mainf
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mohammad Huwaidi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can't resolve problems by using the same kind of thinking we used
</span><br>
<span class="quotelev1">&gt; when we created them.
</span><br>
<span class="quotelev1">&gt;                                                 --Albert Einstein
</span><br>
<span class="quotelev1">&gt; &lt;mohammad.vcf&gt;
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
<li><strong>Next message:</strong> <a href="2836.php">Jeff Squyres: "Re: [OMPI users] quadrics"</a>
<li><strong>Previous message:</strong> <a href="2834.php">Tim Prins: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2828.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 531, Issue 3"</a>
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
