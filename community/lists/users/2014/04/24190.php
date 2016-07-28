<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 16:28:01 2014" -->
<!-- isoreceived="20140414202801" -->
<!-- sent="Mon, 14 Apr 2014 16:27:39 -0400" -->
<!-- isosent="20140414202739" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDcLAOfxhV0a1eKtdcPuOVT9dH4pjpWr0M96cbg242z23Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534C4080.8020803_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-04-14 16:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<li><strong>Previous message:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24188.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24192.php">Elken, Tom: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24192.php">Elken, Tom: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK guys... Thanks for all this info. Frankly, I didn't know these
<br>
diferences between OpenMP and OpenMPI. The commands:
<br>
which mpirun
<br>
which mpif90
<br>
which mpicc
<br>
give,
<br>
/usr/bin/mpirun
<br>
/usr/bin/mpif90
<br>
/usr/bin/mpicc
<br>
respectively.
<br>
<p>A tutorial on how to compile WRF (
<br>
<a href="http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php">http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php</a>)
<br>
provides a test program to test MPI. I ran the program and it gave me the
<br>
output of successful run, which is:
<br>
---------------------------------------------
<br>
C function called by Fortran
<br>
Values are xx = 2.00 and ii = 1
<br>
status = 2
<br>
SUCCESS test 2 fortran + c + netcdf + mpi
<br>
---------------------------------------------
<br>
It uses mpif90 and mpicc for compiling. Below is the output of 'ldd
<br>
./wrf.exe':
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0
<br>
(0x00007f4d160ab000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgfortran.so.3 =&gt; /usr/lib/x86_64-linux-gnu/libgfortran.so.3
<br>
(0x00007f4d15d94000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f4d15a97000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc_s.so.1
<br>
(0x00007f4d15881000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f4d154c1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f4d162e8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libquadmath.so.0 =&gt; /usr/lib/x86_64-linux-gnu/libquadmath.so.0
<br>
(0x00007f4d1528a000)
<br>
<p><p><p>On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your WRF configure file seems to use mpif90 and mpicc (line 115 &amp;
</span><br>
<span class="quotelev1">&gt; following).
</span><br>
<span class="quotelev1">&gt; In addition, it also seems to have DISABLED OpenMP (NO TRAILING &quot;I&quot;)
</span><br>
<span class="quotelev1">&gt; (lines 109-111, where OpenMP stuff is commented out).
</span><br>
<span class="quotelev1">&gt; So, it looks like to me your intent was to compile with MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether it is THIS MPI (OpenMPI) or another MPI (say MPICH, or MVAPICH,
</span><br>
<span class="quotelev1">&gt; or Intel MPI, or Cray, or ...) only your environment can tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you get from these commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; which mpif90
</span><br>
<span class="quotelev1">&gt; which mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I never built WRF here (but other people here use it).
</span><br>
<span class="quotelev1">&gt; Which input do you provide to the command that generates the configure
</span><br>
<span class="quotelev1">&gt; script that you sent before?
</span><br>
<span class="quotelev1">&gt; Maybe the full command line will shed some light on the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/14/2014 03:11 PM, Djordje Romanic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to get help :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         If you didn't use Open MPI, then this is the wrong mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         for you.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         (this is the Open MPI users' support mailing list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Apr 14, 2014, at 2:58 PM, Djordje Romanic &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; This can also happen when you compile your application with
</span><br>
<span class="quotelev2">&gt;&gt;         one MPI implementation (e.g., Open MPI), but then mistakenly use
</span><br>
<span class="quotelev2">&gt;&gt;         the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI implementation
</span><br>
<span class="quotelev2">&gt;&gt;         (e.g., MPICH).
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; I compiled it with: x86_64 Linux, gfortran compiler with
</span><br>
<span class="quotelev2">&gt;&gt;         gcc   (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; Attached is the self-generated configuration file. The
</span><br>
<span class="quotelev2">&gt;&gt;         architecture specification settings start at line 107. I didn't
</span><br>
<span class="quotelev2">&gt;&gt;         use Open MPI (shared memory option).
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;dgoodell_at_[hidden] &lt;mailto:dgoodell_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;          &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; It could be that you compiled WRF with a different MPI
</span><br>
<span class="quotelev2">&gt;&gt;         implementation than you are using to run it (e.g., MPICH vs.
</span><br>
<span class="quotelev2">&gt;&gt;         Open MPI).
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; -Dave
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; &lt;configure.wrf&gt;_____________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; __
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;          &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<li><strong>Previous message:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24188.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24192.php">Elken, Tom: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24192.php">Elken, Tom: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
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
