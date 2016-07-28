<?
$subject_val = "[OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 16:33:19 2010" -->
<!-- isoreceived="20100806203319" -->
<!-- sent="Fri, 06 Aug 2010 14:33:07 -0600" -->
<!-- isosent="20100806203307" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="[OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround" -->
<!-- id="4C5C7183.7040607_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 16:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<li><strong>Reply:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi all,
<br>
<p>There's a small hiccup in building a Windows version of 1.5-rc5.  When 
<br>
you configure in the CMake GUI, you can ask for a Debug or Release 
<br>
project before you hit Generate.  If you ask for a Debug project, you 
<br>
can still change it to Release in Visual Studio, and it will build 
<br>
successfully.  BUT: the Install project will fail, because it tries to 
<br>
install libopen-pald.pdb (possibly others too, I didn't check).  It's a 
<br>
minor thing, only nuisance value.  If you set a Release project in 
<br>
CMake, everything works fine.
<br>
<p>Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13922.php">Randolph Pullen: "[OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13920.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
<li><strong>Reply:</strong> <a href="13933.php">Shiqing Fan: "Re: [OMPI users] minor glitch in 1.5-rc5 Windows build - has workaround"</a>
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
