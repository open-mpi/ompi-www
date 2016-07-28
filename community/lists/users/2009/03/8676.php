<?
$subject_val = "[OMPI users] OpenMPI 1.3.1 + BLCR build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 11:44:25 2009" -->
<!-- isoreceived="20090331154425" -->
<!-- sent="Tue, 31 Mar 2009 16:44:20 +0100" -->
<!-- isosent="20090331154420" -->
<!-- name="M C" -->
<!-- email="m_c_001_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3.1 + BLCR build problem" -->
<!-- id="BAY142-W50BCFFCDC74429B299F2A8F08A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3.1 + BLCR build problem<br>
<strong>From:</strong> M C (<em>m_c_001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 11:44:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8675.php">PN: "[OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>This is my first foray into the world of OpenMPI (MPICH 1, 2 and LAM so far), and I'm keen to test checkpointing using the BLCR kernel modules. I get the BLCR components to build just fine (v0.8.1), but the OpenMPI build fails with:
<br>
<p>%  ./configure --with-blcr=/opt/blcr --with-blcr-libdir=/opt/blcr/lib --prefix=/opt/openmpi
<br>
<p>...
<br>
&lt;lots of stuff deleted&gt;
<br>
...
<br>
--- MCA component crs:blcr (m4 configuration macro)
<br>
checking for MCA component crs:blcr compile mode... dso
<br>
checking --with-blcr value... sanity check ok (/opt/blcr)
<br>
checking --with-blcr-libdir value... sanity check ok (/opt/blcr/lib)
<br>
configure: WARNING: BLCR support requested but not found.  Perhaps you need to specify the location of the BLCR libraries.
<br>
configure: error: Aborting.
<br>
<p>This is strange, as both /opt/blcr and /opt/blcr/lib are sensibly populated:
<br>
<p>% ls -F /opt/blcr
<br>
bin/  include/  lib/  man/
<br>
<p>% ls -F /opt/blcr/lib
<br>
blcr/         libcr_omit.la*        libcr_run.a      libcr_run.so.0.5.1*
<br>
libcr.a       libcr_omit.so@        libcr_run.la*    libcr.so@
<br>
libcr.la*     libcr_omit.so.0@      libcr_run.so@    libcr.so.0@
<br>
libcr_omit.a  libcr_omit.so.0.5.1*  libcr_run.so.0@  libcr.so.0.5.1*
<br>
<p>I'm using gcc 4.3.2 under Debian &quot;Lenny&quot; (kernel 2.6.26). Have I missed anything obvious?
<br>
<p>Thanks for any help,
<br>
m
<br>
<p>ps. Could this be related to the message posted last September: <a href="http://www.open-mpi.org/community/lists/users/2008/09/6669.php">http://www.open-mpi.org/community/lists/users/2008/09/6669.php</a>  ?
<br>
<p><p><p>_________________________________________________________________
<br>
All your Twitter and other social updates in one place 
<br>
<a href="http://clk.atdmt.com/UKM/go/137984870/direct/01/">http://clk.atdmt.com/UKM/go/137984870/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8676/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8675.php">PN: "[OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="8682.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
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
