<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan  7 21:44:36 2006" -->
<!-- isoreceived="20060108024436" -->
<!-- sent="Sat, 7 Jan 2006 21:44:26 -0500 (EST)" -->
<!-- isosent="20060108024426" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.GSO.4.62.0601072141190.24740_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0601061600520.360918_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-07 21:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Carsten,
<br>
&nbsp;&nbsp;ops, sorry!. There was a memory bug created by me misusing one my own 
<br>
collective topo functions.. which I think was corrupting the MPE logging 
<br>
buffers (and who knows what else). Anyway it should be fixed in the next 
<br>
nightly build/tarball.
<br>
<p>G
<br>
On Fri, 6 Jan 2006, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 6 Jan 2006, Graham E Fagg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like the problem is somewhere in the tuned collectives?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately I need a logfile with exactly those :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Carsten
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope not. Carsten can you send me your configure line (not the whole
</span><br>
<span class="quotelev2">&gt;&gt; log) and any other things your set in your .mca conf file. Is this with
</span><br>
<span class="quotelev2">&gt;&gt; the changed (custom) decision function or the standard one??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the problems with custom decision function as well as without. Today
</span><br>
<span class="quotelev1">&gt; I downloaded a clean tarball 1.1a1r8626 and changed nothing. I simply
</span><br>
<span class="quotelev1">&gt; configure with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/ckutzne/ompi1.1a1r8626-gcc331
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then make all install and that's it. I both tried gcc3.3.1 and gcc4.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I install MPE from mpe2.tar.gz with
</span><br>
<span class="quotelev1">&gt; ./configure MPI_CC=/home/ckutzne/ompi1.1a1r8626-gcc331/bin/mpicc \
</span><br>
<span class="quotelev1">&gt;              CC=/usr/bin/gcc \
</span><br>
<span class="quotelev1">&gt;              MPI_F77=/home/ckutzne/ompi1.1a1r8626-gcc331/bin/mpif77 \
</span><br>
<span class="quotelev1">&gt;              F77=/usr/bin/gcc \
</span><br>
<span class="quotelev1">&gt;              --prefix=/home/ckutzne/mpe2-ompi1.1a1r8626-gcc331
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt;    make install
</span><br>
<span class="quotelev1">&gt;    make installcheck --&gt; ok!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not set anything in an .mca conf file (do I have to?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Carsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0493.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0491.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
