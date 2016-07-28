<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several	processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 17:04:37 2014" -->
<!-- isoreceived="20140414210437" -->
<!-- sent="Mon, 14 Apr 2014 21:04:10 +0000" -->
<!-- isosent="20140414210410" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several	processors" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7328E05BC_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CACWmqDcLAOfxhV0a1eKtdcPuOVT9dH4pjpWr0M96cbg242z23Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to several	processors<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 17:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>Previous message:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<li><strong>In reply to:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>Reply:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That&#226;&#128;&#153;s OK.  Many of us make that mistake, though often as a typo.
<br>
One thing that helps is that the correct spelling of Open MPI has a space in it, but OpenMP does not.
<br>
If not aware what OpenMP is, here is a link: <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
<br>

<br>
What makes it more confusing is that more and more apps. offer the option of running in a hybrid mode, such as WRF, with OpenMP threads running over MPI ranks with the same executable.  And sometimes that MPI is Open MPI.
<br>

<br>
Cheers,
<br>
-Tom
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Djordje Romanic
<br>
Sent: Monday, April 14, 2014 1:28 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] mpirun runs in serial even I set np to several processors
<br>

<br>
OK guys... Thanks for all this info. Frankly, I didn't know these diferences between OpenMP and OpenMPI. The commands:
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
A tutorial on how to compile WRF (<a href="http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php">http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php</a>) provides a test program to test MPI. I ran the program and it gave me the output of successful run, which is:
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
It uses mpif90 and mpicc for compiling. Below is the output of 'ldd ./wrf.exe':
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f4d160ab000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgfortran.so.3 =&gt; /usr/lib/x86_64-linux-gnu/libgfortran.so.3 (0x00007f4d15d94000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f4d15a97000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc_s.so.1 (0x00007f4d15881000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f4d154c1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f4d162e8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libquadmath.so.0 =&gt; /usr/lib/x86_64-linux-gnu/libquadmath.so.0 (0x00007f4d1528a000)
<br>

<br>
On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
<br>
Djordje
<br>

<br>
Your WRF configure file seems to use mpif90 and mpicc (line 115 &amp; following).
<br>
In addition, it also seems to have DISABLED OpenMP (NO TRAILING &quot;I&quot;)
<br>
(lines 109-111, where OpenMP stuff is commented out).
<br>
So, it looks like to me your intent was to compile with MPI.
<br>

<br>
Whether it is THIS MPI (OpenMPI) or another MPI (say MPICH, or MVAPICH,
<br>
or Intel MPI, or Cray, or ...) only your environment can tell.
<br>

<br>
What do you get from these commands:
<br>

<br>
which mpirun
<br>
which mpif90
<br>
which mpicc
<br>

<br>
I never built WRF here (but other people here use it).
<br>
Which input do you provide to the command that generates the configure
<br>
script that you sent before?
<br>
Maybe the full command line will shed some light on the problem.
<br>

<br>

<br>
I hope this helps,
<br>
Gus Correa
<br>

<br>
On 04/14/2014 03:11 PM, Djordje Romanic wrote:
<br>
to get help :)
<br>

<br>

<br>

<br>
On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic &lt;djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt;
<br>
&lt;mailto:djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt; wrote:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Yes, but I was hoping to get. :)
<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt; wrote:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you didn't use Open MPI, then this is the wrong mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for you.  :-)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(this is the Open MPI users' support mailing list)
<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Apr 14, 2014, at 2:58 PM, Djordje Romanic &lt;djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;mailto:djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt; wrote:
<br>

<br>
<span class="quotelev1">         &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres)
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt; wrote:
<br>
<span class="quotelev1">         &gt; This can also happen when you compile your application with
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one MPI implementation (e.g., Open MPI), but then mistakenly use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI implementation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e.g., MPICH).
<br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt; wrote:
<br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; I compiled it with: x86_64 Linux, gfortran compiler with
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc   (dmpar). dmpar - distributed memory option.
<br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; Attached is the self-generated configuration file. The
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;architecture specification settings start at line 107. I didn't
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use Open MPI (shared memory option).
<br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell)
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;dgoodell_at_[hidden]&lt;mailto:dgoodell_at_[hidden]&gt; &lt;mailto:dgoodell_at_[hidden]&lt;mailto:dgoodell_at_[hidden]&gt;&gt;&gt; wrote:
<br>
<span class="quotelev2">         &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt; &lt;mailto:djordje8_at_[hidden]&lt;mailto:djordje8_at_[hidden]&gt;&gt;&gt; wrote:
<br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev3">         &gt; &gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev3">         &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev3">         &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev3">         &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev3">         &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev3">         &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev3">         &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev3">         &gt; &gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev3">         &gt; &gt; &gt;
</span><br>
<span class="quotelev3">         &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; It could be that you compiled WRF with a different MPI
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implementation than you are using to run it (e.g., MPICH vs.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI).
<br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; -Dave
</span><br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">         &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">         &gt; &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>

<br>
<span class="quotelev2">         &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">         &gt; &gt;
</span><br>
<span class="quotelev2">         &gt; &gt; &lt;configure.wrf&gt;_______________________________________________
</span><br>
<span class="quotelev2">         &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">         &gt; &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>

<br>
<span class="quotelev2">         &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt; --
</span><br>
<span class="quotelev1">         &gt; Jeff Squyres
</span><br>
<span class="quotelev1">         &gt; jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>

<br>
<span class="quotelev1">         &gt; For corporate legal information go to:
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt; _______________________________________________
</span><br>
<span class="quotelev1">         &gt; users mailing list
</span><br>
<span class="quotelev1">         &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>

<br>
<span class="quotelev1">         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">         &gt;
</span><br>
<span class="quotelev1">         &gt; _______________________________________________
</span><br>
<span class="quotelev1">         &gt; users mailing list
</span><br>
<span class="quotelev1">         &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>

<br>
<span class="quotelev1">         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt; &lt;mailto:jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For corporate legal information go to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>Previous message:</strong> <a href="24191.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<li><strong>In reply to:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>Reply:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
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
