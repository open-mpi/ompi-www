<?
$subject_val = "[OMPI users] compile crash with pathscale and openmpi-1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 20:53:17 2009" -->
<!-- isoreceived="20090124015317" -->
<!-- sent="Sat, 24 Jan 2009 02:53:11 +0100" -->
<!-- isosent="20090124015311" -->
<!-- name="Alain Miniussi" -->
<!-- email="alain.miniussi_at_[hidden]" -->
<!-- subject="[OMPI users] compile crash with pathscale and openmpi-1.3" -->
<!-- id="op.un8ncqgkc4mgsx_at_satch" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] compile crash with pathscale and openmpi-1.3<br>
<strong>From:</strong> Alain Miniussi (<em>alain.miniussi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 20:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7812.php">Sangamesh B: "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7810.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7828.php">Jeff Squyres: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<li><strong>Reply:</strong> <a href="7828.php">Jeff Squyres: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI:
<br>
<p>I get the following problem when compiling openmpi-1.3 at -O2 and beyond:
<br>
<p>[alainm_at_rossini vtfilter]$pwd
<br>
/misc/nice1/alainm/openmpi-1.3/ompi/contrib/vt/vt/tools/vtfilter
<br>
[alainm_at_rossini vtfilter]$make CXXFLAGS=-O2
<br>
pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib
<br>
-I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE -mp
<br>
-DVT_OMP -O2 -MT vtfilter-vt_tracefilter.o -MD -MP -MF
<br>
.deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o `test -f
<br>
'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
<br>
Signal: Segmentation fault in Global Optimization -- Dead Store
<br>
Elimination phase.
<br>
Error: Signal Segmentation fault in phase Global Optimization -- Dead
<br>
Store Elimination -- processing aborted
<br>
*** Internal stack backtrace:
<br>
pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
<br>
Please report this problem to &lt;support_at_[hidden]&gt;.
<br>
Problem report saved as /home/alainm/.ekopath-bugs/pathCC_error_15P2Vc.ii
<br>
Please review the above file and, if possible, attach it to your problem
<br>
report.
<br>
make: *** [vtfilter-vt_tracefilter.o] Error 1
<br>
[alainm_at_rossini vtfilter]$
<br>
<p>the problem disapear at -O1.
<br>
<p>I sent all the relevent informations to pathscale support.
<br>
<p>Best regards,
<br>
<p><pre>
-- 
Alain Miniussi
Equipe CRIMSON                          Mesocentre de Calcul SIGAMM
+33 492 00 30 09                        <a href="https://crimson.oca.eu">https://crimson.oca.eu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7812.php">Sangamesh B: "[OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7810.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7828.php">Jeff Squyres: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<li><strong>Reply:</strong> <a href="7828.php">Jeff Squyres: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
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
