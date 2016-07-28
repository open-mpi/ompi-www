<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 25 16:04:07 2005" -->
<!-- isoreceived="20051125210407" -->
<!-- sent="Fri, 25 Nov 2005 14:03:57 -0700" -->
<!-- isosent="20051125210357" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="PGI configure failure.." -->
<!-- id="B18F12D5-7A3B-4386-9BD4-218EAFF635C2_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-25 16:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0549.php">Andrew Friedley: "MPI_Probe_tag_c mvapi hand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Reply:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a fresh co of the trunk, after a successful autogen.sh I get the  
<br>
following error with this configure:
<br>
<p>&nbsp;&nbsp;./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --disable-io-romio - 
<br>
with-mvapi=/usr/local/ib --enable-static --disable-shared --prefix=/u/ 
<br>
gshipman/myapps
<br>
<p><p>*** Initialization, setup
<br>
configure: builddir: /u/gshipman/ompi_pgi
<br>
configure: srcdir: /u/gshipman/ompi_pgi
<br>
checking build system type... Invalid configuration `x86_64-unknown- 
<br>
linux-': machine `x86_64-unknown-linux' not recognized
<br>
configure: error: /bin/sh ./config/config.sub x86_64-unknown-linux-  
<br>
failed
<br>
<p><p>Not sure what is going on here, Jeff fixed this for me one other time  
<br>
but I am not sure what magic he did, this is occurring on odin.
<br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0549.php">Andrew Friedley: "MPI_Probe_tag_c mvapi hand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
<li><strong>Reply:</strong> <a href="0551.php">Jeff Squyres: "Re:  PGI configure failure.."</a>
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
