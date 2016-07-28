<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 15:11:32 2014" -->
<!-- isoreceived="20140414191132" -->
<!-- sent="Mon, 14 Apr 2014 15:11:11 -0400" -->
<!-- isosent="20140414191111" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDeyg_wXtVefV=w4J4xFd7CkcQS9Q=5HoZ6m1t3RpC1W5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="25394F9F-D689-49C3-A1AF-8CF26E656F74_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-14 15:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>In reply to:</strong> <a href="24183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, but I was hoping to get. :)
<br>
<p><p>On Mon, Apr 14, 2014 at 3:02 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; If you didn't use Open MPI, then this is the wrong mailing list for you.
</span><br>
<span class="quotelev1">&gt;  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (this is the Open MPI users' support mailing list)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 2:58 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This can also happen when you compile your application with one MPI
</span><br>
<span class="quotelev1">&gt; implementation (e.g., Open MPI), but then mistakenly use the &quot;mpirun&quot; (or
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot;) from a different MPI implementation (e.g., MPICH).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I compiled it with: x86_64 Linux, gfortran compiler with gcc
</span><br>
<span class="quotelev1">&gt; (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Attached is the self-generated configuration file. The architecture
</span><br>
<span class="quotelev1">&gt; specification settings start at line 107. I didn't use Open MPI (shared
</span><br>
<span class="quotelev1">&gt; memory option).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell) &lt;
</span><br>
<span class="quotelev1">&gt; dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It could be that you compiled WRF with a different MPI implementation
</span><br>
<span class="quotelev1">&gt; than you are using to run it (e.g., MPICH vs. Open MPI).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Dave
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;configure.wrf&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>In reply to:</strong> <a href="24183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
