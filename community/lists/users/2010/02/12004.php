<?
$subject_val = "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 11:59:26 2010" -->
<!-- isoreceived="20100204165926" -->
<!-- sent="Thu, 4 Feb 2010 09:58:59 -0700 (MST)" -->
<!-- isosent="20100204165859" -->
<!-- name="Marcus G. Daniels" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround" -->
<!-- id="49254.130.55.116.53.1265302739.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B6AB25E.5010902_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround<br>
<strong>From:</strong> Marcus G. Daniels (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 11:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Previous message:</strong> <a href="12003.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have another problem with building x86_64 on 64 bit Windows 7.  I set
<br>
CMAKE_CL_64 to true in cmake-gui, and and set the VS2008 config to x64
<br>
(`New' platform adapted from WIN32).   However, I get this during the
<br>
build:
<br>
<p>1&gt;------ Build started: Project: libopen-pal, Configuration: Debug x64 ------
<br>
1&gt;Linking...
<br>
1&gt;.\x64\Debug\keyval_lex.obj : fatal error LNK1112: module machine type
<br>
'x64' conflicts with target machine type 'X86'
<br>
1&gt;Build log was saved at
<br>
&quot;file://c:\cygwin\home\mdaniels\build\ompi-trunk-cmake\opal\x64\Debug\BuildLog.htm&quot;
<br>
1&gt;libopen-pal - 1 error(s), 0 warning(s)
<br>
========== Build: 0 succeeded, 1 failed, 0 up-to-date, 0 skipped ==========
<br>
<p>It's not obvious where X86 enters the picture..
<br>
<p>Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12005.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Previous message:</strong> <a href="12003.php">Damien Hocking: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12000.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>Reply:</strong> <a href="12007.php">Shiqing Fan: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
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
