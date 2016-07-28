<?
$subject_val = "[OMPI users] Compiler Choice in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 23:47:56 2008" -->
<!-- isoreceived="20080511034756" -->
<!-- sent="Sun, 11 May 2008 12:00:53 +0800" -->
<!-- isosent="20080511040053" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="[OMPI users] Compiler Choice in openmpi" -->
<!-- id="OFFE417794.ECCCE86F-ON48257446.001121AF-48257446.0014EF90_at_cn.ibm.com" -->
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
<strong>Subject:</strong> [OMPI users] Compiler Choice in openmpi<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-11 00:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5650.php">Serdar AYDIN: "[OMPI users] My openmpi compiler doesnt work"</a>
<li><strong>Previous message:</strong> <a href="5648.php">Alberto Giannetti: "Re: [OMPI users] [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all:
<br>
<p>I have two questions to set openmpi compilers.
<br>
<p>1. How can I change/set Fortran compiler used after installing openmpi?
<br>
I installed openmpi-1.2.5-2 on RHEL5.2 Server with x86_32 arch. The rpm has
<br>
been shipped RHEL images. I directly installed the rpms without compiling
<br>
the source code. Now all mpi* compiler wrappers point to GNU compilers. I
<br>
need change to use Intel compilers by default. How should I do? I caught
<br>
one message about configuration files /etc/openmpi-mca-params.conf and
<br>
$HOME/.openmpi/mca-params.conf. Not sure whether these two files can help.
<br>
While I failed to find detailed explanation for them.
<br>
<p>2. Can I use Intel compiler and GNU compiler together?
<br>
I am not sure whether I can use two types of compiler to compile one
<br>
program. For example, use GNU c/c++ compiler and Intel Fortran compiler
<br>
together to compile my project.
<br>
<p>Thanks!
<br>
<p>Wen Hao Wang
<br>
Email: wangwhao_at_[hidden]
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5650.php">Serdar AYDIN: "[OMPI users] My openmpi compiler doesnt work"</a>
<li><strong>Previous message:</strong> <a href="5648.php">Alberto Giannetti: "Re: [OMPI users] [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
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
