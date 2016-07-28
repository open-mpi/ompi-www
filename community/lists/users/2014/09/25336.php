<?
$subject_val = "[OMPI users] still SIGSEGV with Java in openmpi-1.9a1r32738 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 12:20:03 2014" -->
<!-- isoreceived="20140916162003" -->
<!-- sent="Tue, 16 Sep 2014 18:19:34 +0200 (CEST)" -->
<!-- isosent="20140916161934" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] still SIGSEGV with Java in openmpi-1.9a1r32738 on Solaris" -->
<!-- id="201409161619.s8GGJYPn028723_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] still SIGSEGV with Java in openmpi-1.9a1r32738 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 12:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="25335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] oepnmpi-1.8.2 cann't complete configure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I still have a problem with mpijava on Solaris.
<br>
<p>tyr java 107 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32738
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
tyr java 108 mpijavac InitFinalizeMain.java 
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: 
<br>
no such file or directory
<br>
1 warning
<br>
tyr java 109 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28718, tid=2
<br>
#
<br>
...
<br>
<p>Can I provide any information to solve the problem?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="25335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] oepnmpi-1.8.2 cann't complete configure"</a>
<!-- nextthread="start" -->
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
