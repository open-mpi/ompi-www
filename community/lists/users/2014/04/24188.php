<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 16:09:36 2014" -->
<!-- isoreceived="20140414200936" -->
<!-- sent="Mon, 14 Apr 2014 16:09:36 -0400" -->
<!-- isosent="20140414200936" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="534C4080.8020803_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACWmqDdX9bo6Hs6K3FD+DkjY0JjHZBfxHS62MdLDXMJJBatOZQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 16:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="24187.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>In reply to:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Djordje
<br>
<p>Your WRF configure file seems to use mpif90 and mpicc (line 115 &amp; 
<br>
following).
<br>
In addition, it also seems to have DISABLED OpenMP (NO TRAILING &quot;I&quot;)
<br>
(lines 109-111, where OpenMP stuff is commented out).
<br>
So, it looks like to me your intent was to compile with MPI.
<br>
<p>Whether it is THIS MPI (OpenMPI) or another MPI (say MPICH, or MVAPICH,
<br>
or Intel MPI, or Cray, or ...) only your environment can tell.
<br>
<p>What do you get from these commands:
<br>
<p>which mpirun
<br>
which mpif90
<br>
which mpicc
<br>
<p>I never built WRF here (but other people here use it).
<br>
Which input do you provide to the command that generates the configure
<br>
script that you sent before?
<br>
Maybe the full command line will shed some light on the problem.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 04/14/2014 03:11 PM, Djordje Romanic wrote:
<br>
<span class="quotelev1">&gt; to get help :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 14, 2014 at 3:11 PM, Djordje Romanic &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Yes, but I was hoping to get. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         If you didn't use Open MPI, then this is the wrong mailing list
</span><br>
<span class="quotelev1">&gt;         for you.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         (this is the Open MPI users' support mailing list)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Apr 14, 2014, at 2:58 PM, Djordje Romanic &lt;djordje8_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;          &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;         &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;          &gt; This can also happen when you compile your application with
</span><br>
<span class="quotelev1">&gt;         one MPI implementation (e.g., Open MPI), but then mistakenly use
</span><br>
<span class="quotelev1">&gt;         the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI implementation
</span><br>
<span class="quotelev1">&gt;         (e.g., MPICH).
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic
</span><br>
<span class="quotelev1">&gt;         &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; I compiled it with: x86_64 Linux, gfortran compiler with
</span><br>
<span class="quotelev1">&gt;         gcc   (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; Attached is the self-generated configuration file. The
</span><br>
<span class="quotelev1">&gt;         architecture specification settings start at line 107. I didn't
</span><br>
<span class="quotelev1">&gt;         use Open MPI (shared memory option).
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev1">&gt;         &lt;dgoodell_at_[hidden] &lt;mailto:dgoodell_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic
</span><br>
<span class="quotelev1">&gt;         &lt;djordje8_at_[hidden] &lt;mailto:djordje8_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;          &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; It could be that you compiled WRF with a different MPI
</span><br>
<span class="quotelev1">&gt;         implementation than you are using to run it (e.g., MPICH vs.
</span><br>
<span class="quotelev1">&gt;         Open MPI).
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; -Dave
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;          &gt; &gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; &lt;configure.wrf&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;          &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; --
</span><br>
<span class="quotelev2">&gt;          &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;          &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;          &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;          &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;          &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;          &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;          &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="24187.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>In reply to:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
