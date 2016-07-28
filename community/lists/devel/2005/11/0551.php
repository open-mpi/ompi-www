<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 26 14:24:40 2005" -->
<!-- isoreceived="20051126192440" -->
<!-- sent="Sat, 26 Nov 2005 14:24:33 -0500" -->
<!-- isosent="20051126192433" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  PGI configure failure.." -->
<!-- id="ffb8293aaa318be95696722b2ed20c08_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B18F12D5-7A3B-4386-9BD4-218EAFF635C2_at_cs.unm.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-26 14:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0552.php">Jeff Squyres: "Re:  [O-MPI svn-full] svn:open-mpi r8262 - trunk/opal/runtime"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Galen M. Shipman: "PGI configure failure.."</a>
<li><strong>In reply to:</strong> <a href="0550.php">Galen M. Shipman: "PGI configure failure.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/12/0577.php">Ralf Wildenhues: "Re:  PGI configure failure.."</a>
<li><strong>Reply:</strong> <a href="../../2005/12/0577.php">Ralf Wildenhues: "Re:  PGI configure failure.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All I did was re-run autogen for you with my own copies of the Auto 
<br>
tools.  I think the difference was that I had the most most most recent 
<br>
version of Libtool (i.e., I don't use the system-installed auto tools 
<br>
on odin).
<br>
<p><p>On Nov 25, 2005, at 4:03 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; On a fresh co of the trunk, after a successful autogen.sh I get the
</span><br>
<span class="quotelev1">&gt; following error with this configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --disable-io-romio -
</span><br>
<span class="quotelev1">&gt; with-mvapi=/usr/local/ib --enable-static --disable-shared --prefix=/u/
</span><br>
<span class="quotelev1">&gt; gshipman/myapps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Initialization, setup
</span><br>
<span class="quotelev1">&gt; configure: builddir: /u/gshipman/ompi_pgi
</span><br>
<span class="quotelev1">&gt; configure: srcdir: /u/gshipman/ompi_pgi
</span><br>
<span class="quotelev1">&gt; checking build system type... Invalid configuration `x86_64-unknown-
</span><br>
<span class="quotelev1">&gt; linux-': machine `x86_64-unknown-linux' not recognized
</span><br>
<span class="quotelev1">&gt; configure: error: /bin/sh ./config/config.sub x86_64-unknown-linux-
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure what is going on here, Jeff fixed this for me one other time
</span><br>
<span class="quotelev1">&gt; but I am not sure what magic he did, this is occurring on odin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0552.php">Jeff Squyres: "Re:  [O-MPI svn-full] svn:open-mpi r8262 - trunk/opal/runtime"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Galen M. Shipman: "PGI configure failure.."</a>
<li><strong>In reply to:</strong> <a href="0550.php">Galen M. Shipman: "PGI configure failure.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/12/0577.php">Ralf Wildenhues: "Re:  PGI configure failure.."</a>
<li><strong>Reply:</strong> <a href="../../2005/12/0577.php">Ralf Wildenhues: "Re:  PGI configure failure.."</a>
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
