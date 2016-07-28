<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several	processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 16:00:19 2014" -->
<!-- isoreceived="20140414200019" -->
<!-- sent="Mon, 14 Apr 2014 16:00:19 -0400" -->
<!-- isosent="20140414200019" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several	processors" -->
<!-- id="534C3E53.3020501_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to several	processors<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 16:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24188.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24186.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24186.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/14/2014 03:02 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; If you didn't use Open MPI, then this is the wrong mailing list for you.  :-)
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
<span class="quotelev2">&gt;&gt; I didn't use OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 14, 2014 at 2:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This can also happen when you compile your application with one MPI implementation (e.g., Open MPI), but then mistakenly use the &quot;mpirun&quot; (or &quot;mpiexec&quot;) from a different MPI implementation (e.g., MPICH).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2014, at 2:32 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled it with: x86_64 Linux, gfortran compiler with gcc   (dmpar). dmpar - distributed memory option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is the self-generated configuration file.
</span><br>
The architecture specification settings start at line 107.
<br>
I didn't use Open MPI (shared memory option).
<br>
<p>NoNoNoNoNo!
<br>
<p>You are confusing yourself (and even Jeff) by mixing up
<br>
OpenMPI and OpenMP.
<br>
Well, everybody wants to be Open ... :)
<br>
<p>Note that OpenMP (no trailing &quot;I&quot;) is the WRF shared memory option,
<br>
which is different from OpenMPI (with trailing &quot;I&quot;) which
<br>
is the  MPI implementation of this mailing list
<br>
(distributed memory, so to speak, althouth intra-node it is shared mem).
<br>
<p>My guess is that your intent is to compile with MPI, right?
<br>
And actually with OpenMPI, i.e., with this implementation of MPI, right?
<br>
<p>What is the output of &quot;ldd ./wrf.exe&quot;?
<br>
This may show the MPI libraries.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any idea what might be the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It could be that you compiled WRF with a different MPI implementation than you are using to run it (e.g., MPICH vs. Open MPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Dave
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
<span class="quotelev3">&gt;&gt;&gt; &lt;configure.wrf&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="24188.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24186.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24183.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24186.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
