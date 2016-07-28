<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 14:33:05 2014" -->
<!-- isoreceived="20140414183305" -->
<!-- sent="Mon, 14 Apr 2014 14:32:44 -0400" -->
<!-- isosent="20140414183244" -->
<!-- name="Djordje Romanic" -->
<!-- email="djordje8_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="CACWmqDeYGuL0RvOy2jD1j298yD+5hk-4KWOh3ArTtJsq9xOz8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D5DBF88-D3D0-482D-B219-341ABBE7EB47_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-14 14:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24181.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>In reply to:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24181.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24181.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I compiled it with: x86_64 Linux, gfortran compiler with gcc   (dmpar).
<br>
dmpar - distributed memory option.
<br>
<p>Attached is the self-generated configuration file. The architecture
<br>
specification settings start at line 107. I didn't use Open MPI (shared
<br>
memory option).
<br>
<p><p>On Mon, Apr 14, 2014 at 1:23 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Apr 14, 2014, at 12:15 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt; &gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea what might be the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It could be that you compiled WRF with a different MPI implementation than
</span><br>
<span class="quotelev1">&gt; you are using to run it (e.g., MPICH vs. Open MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24180/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24180/configure.wrf">configure.wrf</a>
</ul>
<!-- attachment="configure.wrf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24181.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>In reply to:</strong> <a href="24179.php">Dave Goodell (dgoodell): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24181.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Reply:</strong> <a href="24181.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
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
