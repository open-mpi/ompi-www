<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 10 10:43:02 2006" -->
<!-- isoreceived="20060110154302" -->
<!-- sent="Tue, 10 Jan 2006 16:42:50 +0100 (MET)" -->
<!-- isosent="20060110154250" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601101628220.18749_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0601072141190.24740_at_enterprise" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-10 10:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>In reply to:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Graham,
<br>
<p>thanks for fixing it so fast! I have attached a 128 CPU (=32 nodes*4
<br>
CPUs) slog file that tests the OpenMPI tuned all-to-all for a message
<br>
size of 4096 floats (16384 bytes) where the execution times vary
<br>
between 0.12 and 0.43 seconds.
<br>
<p>Summary (25-run average, timer resolution 0.000001):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096 floats took 0.205353 (0.090916) seconds. Min: 0.129327  max: 0.430769
<br>
<p>Since the all-to-all works well for 256 and 512 floats with the changes in
<br>
the decision function there is only a minor problem for messages &gt;= 4096
<br>
floats remaining. One can probably live with that, however it would be
<br>
nice to figure out what exactly causes the delays. Do you see this
<br>
behaviour on other clusters as well? I tested on 3 different clusters
<br>
up to now but they all show the same behaviour (however, they actually
<br>
are all connected with a HP2848 switch). Could you perhaps get any hint
<br>
from the 32 CPU logfile I sent?
<br>
<p>Beste Gruesse,
<br>
&nbsp;&nbsp;Carsten
<br>
<p><p><p>On Sat, 7 Jan 2006, Graham E Fagg wrote:
<br>
<p><span class="quotelev1">&gt; Hi Carsten,
</span><br>
<span class="quotelev1">&gt;   ops, sorry!. There was a memory bug created by me misusing one my own
</span><br>
<span class="quotelev1">&gt; collective topo functions.. which I think was corrupting the MPE logging
</span><br>
<span class="quotelev1">&gt; buffers (and who knows what else). Anyway it should be fixed in the next
</span><br>
<span class="quotelev1">&gt; nightly build/tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; G
</span><br>
<span class="quotelev1">&gt; On Fri, 6 Jan 2006, Carsten Kutzner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 6 Jan 2006, Graham E Fagg wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Looks like the problem is somewhere in the tuned collectives?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Unfortunately I need a logfile with exactly those :(
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   Carsten
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I hope not. Carsten can you send me your configure line (not the whole
</span><br>
<span class="quotelev3">&gt; &gt;&gt; log) and any other things your set in your .mca conf file. Is this with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the changed (custom) decision function or the standard one??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the problems with custom decision function as well as without. Today
</span><br>
<span class="quotelev2">&gt; &gt; I downloaded a clean tarball 1.1a1r8626 and changed nothing. I simply
</span><br>
<span class="quotelev2">&gt; &gt; configure with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure --prefix=/home/ckutzne/ompi1.1a1r8626-gcc331
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then make all install and that's it. I both tried gcc3.3.1 and gcc4.0.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I install MPE from mpe2.tar.gz with
</span><br>
<span class="quotelev2">&gt; &gt; ./configure MPI_CC=/home/ckutzne/ompi1.1a1r8626-gcc331/bin/mpicc \
</span><br>
<span class="quotelev2">&gt; &gt;              CC=/usr/bin/gcc \
</span><br>
<span class="quotelev2">&gt; &gt;              MPI_F77=/home/ckutzne/ompi1.1a1r8626-gcc331/bin/mpif77 \
</span><br>
<span class="quotelev2">&gt; &gt;              F77=/usr/bin/gcc \
</span><br>
<span class="quotelev2">&gt; &gt;              --prefix=/home/ckutzne/mpe2-ompi1.1a1r8626-gcc331
</span><br>
<span class="quotelev2">&gt; &gt;    make
</span><br>
<span class="quotelev2">&gt; &gt;    make install
</span><br>
<span class="quotelev2">&gt; &gt;    make installcheck --&gt; ok!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did not set anything in an .mca conf file (do I have to?)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Carsten
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  	Graham.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
</span><br>
<span class="quotelev1">&gt; Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
</span><br>
<span class="quotelev1">&gt; Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
</span><br>
<span class="quotelev1">&gt; University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
</span><br>
<span class="quotelev1">&gt; Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
</span><br>
<span class="quotelev1">&gt; Broken complex systems are always derived from working simple systems
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br><hr>
<ul>
<li>APPLICATION/OCTET-STREAM attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0497/phasmpe.x.slog2">phasmpe.x.slog2</a>
</ul>
<!-- attachment="phasmpe.x.slog2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<li><strong>Previous message:</strong> <a href="0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>In reply to:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
