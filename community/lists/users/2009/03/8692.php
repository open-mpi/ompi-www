<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 17:25:40 2009" -->
<!-- isoreceived="20090331212540" -->
<!-- sent="Tue, 31 Mar 2009 22:25:35 +0100" -->
<!-- isosent="20090331212535" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="20090331212535.GS23981_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6384F41-935B-495C-A084-42CD3556EEA8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem<br>
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 17:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8690.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 31, 2009 at 04:59:00PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; My goal in having you try that statement in a standalone shell script  
</span><br>
<span class="quotelev1">&gt; wasn't the success or failure of the uname command -- but rather to  
</span><br>
<span class="quotelev1">&gt; figure out if something in that statement itself was causing the  
</span><br>
<span class="quotelev1">&gt; syntax error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently it is not.  There's an errant character elsewhere that is  
</span><br>
<span class="quotelev1">&gt; causing the problem.  FWIW, you should be able to run ./config/ 
</span><br>
<span class="quotelev1">&gt; config.guess by itself and get a single line of output with no errors  
</span><br>
<span class="quotelev1">&gt; -- so you don't even have to test this in the larger context of Open  
</span><br>
<span class="quotelev1">&gt; MPI's configure process.  As you showed in an earlier mail, even that  
</span><br>
<span class="quotelev1">&gt; doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We get config.guess from git.savannah.gnu.org when we make OMPI  
</span><br>
<span class="quotelev1">&gt; tarballs.  FWIW, here's the md5 and sha1sums from the config.guess  
</span><br>
<span class="quotelev1">&gt; that I got from a 1.3.1 tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:57] svbu-mpi:/home/jsquyres/openmpi-1.3.1 % md5sum config/ 
</span><br>
<span class="quotelev1">&gt; config.guess
</span><br>
<span class="quotelev1">&gt; 6384bbc496ef6e69328a9a428c623cc5  config/config.guess
</span><br>
<span class="quotelev1">&gt; [13:58] svbu-mpi:/home/jsquyres/openmpi-1.3.1 % sha1sum config/ 
</span><br>
<span class="quotelev1">&gt; config.guess
</span><br>
<span class="quotelev1">&gt; 199adb16fc94e6cf62912be5fbb69a77214b33e5  config/config.guess
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be pretty surprised if yours don't match.  If they don't  
</span><br>
<span class="quotelev1">&gt; there's some larger issue going on (e.g., filesystem corruption?) that  
</span><br>
<span class="quotelev1">&gt; would also be pretty surprising.
</span><br>
<p>BINGO!!
<br>
<p>mine don't match but I have openmpi-1.3 not openmpi-1.3.1
<br>
just downloaded a fresh copy
<br>
checked md5 and sha1 match
<br>
run my build.sh without x86_64 - hurrah
<br>
<p>#!/bin/sh
<br>
<p>../configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=cc CXX=CC F77=f77 FC=f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm-libdir=/usr/lib64
<br>
<p>This runs until I get to...
<br>
<p>--- MCA component mtl:psm (m4 configuration macro)
<br>
checking for MCA component mtl:psm compile mode... static
<br>
checking --with-psm value... simple ok (unspecified)
<br>
checking --with-psm-libdir value... sanity check ok (/usr/lib64)
<br>
checking psm.h usability... no
<br>
checking psm.h presence... no
<br>
checking for psm.h... no
<br>
configure: error: PSM support requested but not found.  Aborting
<br>
<p>Which is an entirely different problem
<br>
<p>The lesson here seems to be that when things just don't make sense
<br>
there has to be a corruption someplace.
<br>
This is not the first time this week that I have seen undetected
<br>
bit level errors.
<br>
Now kicking myself for not checking the md5s earlier.
<br>
<p>Time for me to pursue the psm installs
<br>
Start by trawling the archives and FAQs :-)
<br>
<p>I think we should consider this thread closed
<br>
Many thanks to all who contributed.
<br>
<p><p>k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
<br>
--------------------------------------------------------------
<br>
Dr Kevin McManus                                Queen Mary 413
<br>
School of Computing &amp; Mathematical Sciences,
<br>
University of Greenwich,
<br>
Old Royal Naval College,
<br>
Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
<br>
London, SE10 9LS                       Fax +44 (0)208 331 8665
<br>
--------------------------------------------------------------
<br>
<p>University of Greenwich, a charity and company limited by
<br>
guarantee, registered in England (reg no. 986729)
<br>
Registered Office: Old Royal Naval College
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8691.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8690.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8693.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
