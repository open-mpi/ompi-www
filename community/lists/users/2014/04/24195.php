<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 20:22:19 2014" -->
<!-- isoreceived="20140415002219" -->
<!-- sent="Mon, 14 Apr 2014 20:21:57 -0400" -->
<!-- isosent="20140415002157" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDfq2VA+0FVhgAPQxuSFj_xdzs2sVWJFrpvQYzAey7W9PA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534C6A0C.7080105_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to several processors<br>
<strong>From:</strong> Djordje Romanic (<em>djordje8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 20:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24196.php">Muhammad Ansar Javed: "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24194.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>In reply to:</strong> <a href="24194.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for this guys. I think I might have two MPI implementations
<br>
installed because 'locate mpirun' gives (see bold lines) :
<br>
-----------------------------------------
<br>
/etc/alternatives/mpirun
<br>
/etc/alternatives/mpirun.1.gz
<br>
*/home/djordje/Build_WRF/LIBRARIES/mpich/bin/mpirun*
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/
<br>
4.1.1.036/linux-x86_64/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/
<br>
4.1.1.036/linux-x86_64/bin64/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/
<br>
4.1.1.036/linux-x86_64/ia32/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/intel/
<br>
4.1.1.036/linux-x86_64/intel64/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/1.4.3/linux-x86_64-2.3.4/gnu4.5/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/1.4.3/linux-x86_64-2.3.4/gnu4.5/share/man/man1/mpirun.1
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/1.6.4/linux-x86_64-2.3.4/gnu4.6/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/openmpi/1.6.4/linux-x86_64-2.3.4/gnu4.6/share/man/man1/mpirun.1
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.2.0.0/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/bin/mpirun.mpich2
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/bin/mpirun.mpich2
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_amd64/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/ia32/lib/linux_ia32/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_amd64/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/lib/linux_ia32/libmpirun.so
<br>
/home/djordje/StarCCM/Install/STAR-CCM+8.06.007/mpi/platform/
<br>
8.3.0.2/linux64_2.6-x86-glibc_2.3.4/share/man/man1/mpirun.1.gz
<br>
*/usr/bin/mpirun*
<br>
/usr/bin/mpirun.openmpi
<br>
/usr/lib/openmpi/include/openmpi/ompi/runtime/mpiruntime.h
<br>
/usr/share/man/man1/mpirun.1.gz
<br>
/usr/share/man/man1/mpirun.openmpi.1.gz
<br>
/var/lib/dpkg/alternatives/mpirun
<br>
-----------------------------------------
<br>
This is a single machine. I actually just got it... another user used it
<br>
for 1-2 years.
<br>
<p>Is this a possible cause of the problem?
<br>
<p>Regards,
<br>
Djordje
<br>
<p><p>On Mon, Apr 14, 2014 at 7:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Apologies for stirring even more the confusion by mispelling
</span><br>
<span class="quotelev1">&gt; &quot;Open MPI&quot; as &quot;OpenMPI&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;OMPI&quot; doesn't help either, because all OpenMP environment
</span><br>
<span class="quotelev1">&gt; variables and directives start with &quot;OMP&quot;.
</span><br>
<span class="quotelev1">&gt; Maybe associating the names to
</span><br>
<span class="quotelev1">&gt; &quot;message passing&quot; vs. &quot;threads&quot; would help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Djordje:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'which mpif90' etc show everything in /usr/bin.
</span><br>
<span class="quotelev1">&gt; So, very likely they were installed from packages
</span><br>
<span class="quotelev1">&gt; (yum, apt-get, rpm ...),right?
</span><br>
<span class="quotelev1">&gt; Have you tried something like
</span><br>
<span class="quotelev1">&gt; &quot;yum list |grep mpi&quot;
</span><br>
<span class="quotelev1">&gt; to see what you have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Dave, Jeff and Tom said, this may be a mixup of different
</span><br>
<span class="quotelev1">&gt; MPI implementations at compilation (mpicc mpif90) and runtime (mpirun).
</span><br>
<span class="quotelev1">&gt; That is common, you may have different MPI implementations installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other possibilities that may tell what MPI you have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpif90 --show
</span><br>
<span class="quotelev1">&gt; mpicc --show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; locate mpirun
</span><br>
<span class="quotelev1">&gt; locate mpif90
</span><br>
<span class="quotelev1">&gt; locate mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ldd didn't show any MPI libraries, maybe they are static libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An alternative is to install Open MPI from source,
</span><br>
<span class="quotelev1">&gt; and put it in a non-system directory
</span><br>
<span class="quotelev1">&gt; (not /usr/bin, not /usr/local/bin, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a single machine or a cluster?
</span><br>
<span class="quotelev1">&gt; Or perhaps a set of PCs that you have access to?
</span><br>
<span class="quotelev1">&gt; If it is a cluster, do you have access to a filesystem that is
</span><br>
<span class="quotelev1">&gt; shared across the cluster?
</span><br>
<span class="quotelev1">&gt; On clusters typically /home is shared, often via NFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/14/2014 05:15 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we should rename OpenMP to be something less confusing --
</span><br>
<span class="quotelev2">&gt;&gt; perhaps something totally unrelated, perhaps even non-sensical.
</span><br>
<span class="quotelev2">&gt;&gt; That'll end lots of confusion!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My vote: OpenMP --&gt; SharkBook
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's got a ring to it, doesn't it?  And it sounds fearsome!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2014, at 5:04 PM, &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  That&#226;&#128;&#153;s OK.  Many of us make that mistake, though often as a typo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing that helps is that the correct spelling of Open MPI has a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; space in it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but OpenMP does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If not aware what OpenMP is, here is a link: <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What makes it more confusing is that more and more apps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; offer the option of running in a hybrid mode, such as WRF,
</span><br>
<span class="quotelev1">&gt; with OpenMP threads running over MPI ranks with the same executable.
</span><br>
<span class="quotelev1">&gt; And sometimes that MPI is Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Djordje
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Romanic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, April 14, 2014 1:28 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] mpirun runs in serial even I set np to several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK guys... Thanks for all this info. Frankly, I didn't know these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diferences between OpenMP and OpenMPI. The commands:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A tutorial on how to compile WRF (<a href="http://www.mmm.ucar.edu/wrf/">http://www.mmm.ucar.edu/wrf/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OnLineTutorial/compilation_tutorial.php) provides a test program to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test MPI. I ran the program and it gave me the output of successful run,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C function called by Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Values are xx = 2.00 and ii = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUCCESS test 2 fortran + c + netcdf + mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It uses mpif90 and mpicc for compiling. Below is the output of 'ldd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./wrf.exe':
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007f4d160ab000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libgfortran.so.3 =&gt; /usr/lib/x86_64-linux-gnu/libgfortran.so.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007f4d15d94000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f4d15a97000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc_s.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007f4d15881000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f4d154c1000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /lib64/ld-linux-x86-64.so.2 (0x00007f4d162e8000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      libquadmath.so.0 =&gt; /usr/lib/x86_64-linux-gnu/libquadmath.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007f4d1528a000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Djordje
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your WRF configure file seems to use mpif90 and mpicc (line 115 &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition, it also seems to have DISABLED OpenMP (NO TRAILING &quot;I&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (lines 109-111, where OpenMP stuff is commented out).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it looks like to me your intent was to compile with MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Whether it is THIS MPI (OpenMPI) or another MPI (say MPICH, or MVAPICH,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or Intel MPI, or Cray, or ...) only your environment can tell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you get from these commands:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I never built WRF here (but other people here use it).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which input do you provide to the command that generates the configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script that you sent before?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe the full command line will shed some light on the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/14/2014 03:11 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get help :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          If you didn't use Open MPI, then this is the wrong mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          for you.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          (this is the Open MPI users' support mailing list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          On Apr 14, 2014, at 2:58 PM, Djordje Romanic &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; djordje8_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; This can also happen when you compile your application with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          one MPI implementation (e.g., Open MPI), but then mistakenly use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          (e.g., MPICH).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; I compiled it with: x86_64 Linux, gfortran compiler with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          gcc   (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; Attached is the self-generated configuration file. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          architecture specification settings start at line 107. I didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          use Open MPI (shared memory option).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;dgoodell_at_[hidden] &lt;mailto:dgoodell_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;           &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; It could be that you compiled WRF with a different MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          implementation than you are using to run it (e.g., MPICH vs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Open MPI).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; -Dave
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; &lt;configure.wrf&gt;_______________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;           &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;           &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24196.php">Muhammad Ansar Javed: "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24194.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>In reply to:</strong> <a href="24194.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
