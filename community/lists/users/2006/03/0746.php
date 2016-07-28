<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 17:43:40 2006" -->
<!-- isoreceived="20060301224340" -->
<!-- sent="Wed, 01 Mar 2006 15:14:30 -0700" -->
<!-- isosent="20060301221430" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90" -->
<!-- id="op.s5q46mdyies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200603011955.18289.b.nachtwey_at_tu-bs.de" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 17:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0747.php">Brignone, Sergio: "[OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0745.php">Xiaoning (David) Yang: "[OMPI users] tcsh: orted: Not Found"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0750.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0750.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 01 Mar 2006 11:55:16 -0700, Bjoern Nachtwey &lt;b.nachtwey_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to compile OpenMPI using the PortzlandGroup compiler Suite, but  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; configure-script tells me, my fortran compiler cannot compile .f or .f90
</span><br>
<span class="quotelev1">&gt; files. I'm sure it can ;-)
</span><br>
<p>The first thing I check for is that the PGI Compiler /is/ able to compile  
<br>
f or .f90 files.  I don't mean to imply that it's not capable; but if  
<br>
there's something wrong with the compiler licenses, and the PGI compiler  
<br>
is therefore /refusing/ to compile anything.
<br>
<p>After that, I've been able to get Open MPI 1.0.1 to compile with PGI 6.0:   
<br>
Here's what I do:
<br>
<p>#/bin/bash
<br>
export CC=pgcc
<br>
export FC=pgf90
<br>
export F77=pgf77
<br>
export CXX=pgCC
<br>
export CFLAGS=&quot;-Msignextend -fPIC&quot;
<br>
export CXXFLAGS=$CFLAGS
<br>
export FFLAGS=&quot;-Mnosecond_underscore&quot;
<br>
<p>/configure
<br>
make
<br>
<p>(There's actually a bit more to it than that, but most of the differences  
<br>
have to do with the installation prefix, for package management purposes)
<br>
<p>That being said, I have been unable to get OpenMPI to compile with PGI 6.1  
<br>
(but it does finish ./configure; it breaks during 'make').
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0747.php">Brignone, Sergio: "[OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0745.php">Xiaoning (David) Yang: "[OMPI users] tcsh: orted: Not Found"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0750.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0750.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
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
