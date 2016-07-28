<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 19:06:55 2014" -->
<!-- isoreceived="20140414230655" -->
<!-- sent="Mon, 14 Apr 2014 19:06:52 -0400" -->
<!-- isosent="20140414230652" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to	several	processors" -->
<!-- id="534C6A0C.7080105_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="271D3755-2623-4768-95A9-4EEECE019CF6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to	several	processors<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 19:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>In reply to:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies for stirring even more the confusion by mispelling
<br>
&quot;Open MPI&quot; as &quot;OpenMPI&quot;.
<br>
&quot;OMPI&quot; doesn't help either, because all OpenMP environment
<br>
variables and directives start with &quot;OMP&quot;.
<br>
Maybe associating the names to
<br>
&quot;message passing&quot; vs. &quot;threads&quot; would help?
<br>
<p>Djordje:
<br>
<p>'which mpif90' etc show everything in /usr/bin.
<br>
So, very likely they were installed from packages
<br>
(yum, apt-get, rpm ...),right?
<br>
Have you tried something like
<br>
&quot;yum list |grep mpi&quot;
<br>
to see what you have?
<br>
<p>As Dave, Jeff and Tom said, this may be a mixup of different
<br>
MPI implementations at compilation (mpicc mpif90) and runtime (mpirun).
<br>
That is common, you may have different MPI implementations installed.
<br>
<p>Other possibilities that may tell what MPI you have:
<br>
<p>mpirun --version
<br>
mpif90 --show
<br>
mpicc --show
<br>
<p>Yet another:
<br>
<p>locate mpirun
<br>
locate mpif90
<br>
locate mpicc
<br>
<p>The ldd didn't show any MPI libraries, maybe they are static libraries.
<br>
<p>An alternative is to install Open MPI from source,
<br>
and put it in a non-system directory
<br>
(not /usr/bin, not /usr/local/bin, etc).
<br>
<p>Is this a single machine or a cluster?
<br>
Or perhaps a set of PCs that you have access to?
<br>
If it is a cluster, do you have access to a filesystem that is
<br>
shared across the cluster?
<br>
On clusters typically /home is shared, often via NFS.
<br>
<p>Gus Correa
<br>
<p>On 04/14/2014 05:15 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Maybe we should rename OpenMP to be something less confusing --
</span><br>
<span class="quotelev1">&gt; perhaps something totally unrelated, perhaps even non-sensical.
</span><br>
<span class="quotelev1">&gt; That'll end lots of confusion!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My vote: OpenMP --&gt; SharkBook
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's got a ring to it, doesn't it?  And it sounds fearsome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 5:04 PM, &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That&#146;s OK.  Many of us make that mistake, though often as a typo.
</span><br>
<span class="quotelev2">&gt;&gt; One thing that helps is that the correct spelling of Open MPI has a space in it,
</span><br>
but OpenMP does not.
<br>
<span class="quotelev2">&gt;&gt; If not aware what OpenMP is, here is a link: <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What makes it more confusing is that more and more apps.
</span><br>
offer the option of running in a hybrid mode, such as WRF,
<br>
with OpenMP threads running over MPI ranks with the same executable.
<br>
And sometimes that MPI is Open MPI.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; -Tom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, April 14, 2014 1:28 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mpirun runs in serial even I set np to several processors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK guys... Thanks for all this info. Frankly, I didn't know these diferences between OpenMP and OpenMPI. The commands:
</span><br>
<span class="quotelev2">&gt;&gt; which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; which mpif90
</span><br>
<span class="quotelev2">&gt;&gt; which mpicc
</span><br>
<span class="quotelev2">&gt;&gt; give,
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A tutorial on how to compile WRF (<a href="http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php">http://www.mmm.ucar.edu/wrf/OnLineTutorial/compilation_tutorial.php</a>) provides a test program to test MPI. I ran the program and it gave me the output of successful run, which is:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; C function called by Fortran
</span><br>
<span class="quotelev2">&gt;&gt; Values are xx = 2.00 and ii = 1
</span><br>
<span class="quotelev2">&gt;&gt; status = 2
</span><br>
<span class="quotelev2">&gt;&gt; SUCCESS test 2 fortran + c + netcdf + mpi
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It uses mpif90 and mpicc for compiling. Below is the output of 'ldd ./wrf.exe':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      linux-vdso.so.1 =&gt;  (0x00007fff584e7000)
</span><br>
<span class="quotelev2">&gt;&gt;      libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f4d160ab000)
</span><br>
<span class="quotelev2">&gt;&gt;      libgfortran.so.3 =&gt; /usr/lib/x86_64-linux-gnu/libgfortran.so.3 (0x00007f4d15d94000)
</span><br>
<span class="quotelev2">&gt;&gt;      libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f4d15a97000)
</span><br>
<span class="quotelev2">&gt;&gt;      libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc_s.so.1 (0x00007f4d15881000)
</span><br>
<span class="quotelev2">&gt;&gt;      libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f4d154c1000)
</span><br>
<span class="quotelev2">&gt;&gt;      /lib64/ld-linux-x86-64.so.2 (0x00007f4d162e8000)
</span><br>
<span class="quotelev2">&gt;&gt;      libquadmath.so.0 =&gt; /usr/lib/x86_64-linux-gnu/libquadmath.so.0 (0x00007f4d1528a000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 14, 2014 at 4:09 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Djordje
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your WRF configure file seems to use mpif90 and mpicc (line 115 &amp; following).
</span><br>
<span class="quotelev2">&gt;&gt; In addition, it also seems to have DISABLED OpenMP (NO TRAILING &quot;I&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; (lines 109-111, where OpenMP stuff is commented out).
</span><br>
<span class="quotelev2">&gt;&gt; So, it looks like to me your intent was to compile with MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whether it is THIS MPI (OpenMPI) or another MPI (say MPICH, or MVAPICH,
</span><br>
<span class="quotelev2">&gt;&gt; or Intel MPI, or Cray, or ...) only your environment can tell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you get from these commands:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; which mpif90
</span><br>
<span class="quotelev2">&gt;&gt; which mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I never built WRF here (but other people here use it).
</span><br>
<span class="quotelev2">&gt;&gt; Which input do you provide to the command that generates the configure
</span><br>
<span class="quotelev2">&gt;&gt; script that you sent before?
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the full command line will shed some light on the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/14/2014 03:11 PM, Djordje Romanic wrote:
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
<span class="quotelev2">&gt;&gt;      Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;      &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          If you didn't use Open MPI, then this is the wrong mailing list
</span><br>
<span class="quotelev2">&gt;&gt;          for you.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          (this is the Open MPI users' support mailing list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          On Apr 14, 2014, at 2:58 PM, Djordje Romanic &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; This can also happen when you compile your application with
</span><br>
<span class="quotelev2">&gt;&gt;          one MPI implementation (e.g., Open MPI), but then mistakenly use
</span><br>
<span class="quotelev2">&gt;&gt;          the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI implementation
</span><br>
<span class="quotelev2">&gt;&gt;          (e.g., MPICH).
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; I compiled it with: x86_64 Linux, gfortran compiler with
</span><br>
<span class="quotelev2">&gt;&gt;          gcc   (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; Attached is the self-generated configuration file. The
</span><br>
<span class="quotelev2">&gt;&gt;          architecture specification settings start at line 107. I didn't
</span><br>
<span class="quotelev2">&gt;&gt;          use Open MPI (shared memory option).
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;dgoodell_at_[hidden] &lt;mailto:dgoodell_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;           &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; It could be that you compiled WRF with a different MPI
</span><br>
<span class="quotelev2">&gt;&gt;          implementation than you are using to run it (e.g., MPICH vs.
</span><br>
<span class="quotelev2">&gt;&gt;          Open MPI).
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; -Dave
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; &lt;configure.wrf&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;           &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;          <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;           &gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;           &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          --
</span><br>
<span class="quotelev2">&gt;&gt;          Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;          jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;          <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;          users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;          users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<li><strong>In reply to:</strong> <a href="24193.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to	several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24195.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
