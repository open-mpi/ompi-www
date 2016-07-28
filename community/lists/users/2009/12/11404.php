<?
$subject_val = "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 14:56:40 2009" -->
<!-- isoreceived="20091203195640" -->
<!-- sent="Thu, 03 Dec 2009 14:56:23 -0500" -->
<!-- isosent="20091203195623" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library" -->
<!-- id="DB9D408FA0D8F144B7F6B12AF454A97A7C23A260_at_WS-BCO-MBX1.milky-way.battelle.org" -->
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
<strong>Subject:</strong> [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library<br>
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 14:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Previous message:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Reply:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having an issue with the MPI version of application and the dynamic relocation of symbols from plugin shared libraries.
<br>
<p>There are duplicate symbols in both the main executable (Engine) and a shared library that opened at runtime using dlopen (Plugin).  The plugin is opened with the command dlopen(pFilepath, RTLD_LAZY | RTLD_LOCAL).  When I run the entry point function that I get using dlsym, there is a segmentation violation that occurs during the execution of that function.  The mpirun outputs the backtrace of the segfault, and in it I can see that execution goes from the engine to the plugin and back to the engine.  The plugin is statically linked to a class library that is also statically linked to the engine (but a different version) and contains a couple of files found in the engine (again a different version).  The plugin should be completely self sufficient, meaning it has everything it needs to function independently of the engine, and should never need to have symbols dynamically linked to the engine.
<br>
<p>When I run the single (non-MPI) version of the application, it runs fine (apparently without plugin symbol relocation).  When I run the MPI version, I get the segfault.  The code that handles plugins is the same in both versions, and doesn't rely on any MPI functionality.
<br>
<p>Is there some way to change how the MPI runtime uses the executable so it doesn't export the symbols?  Or any way to prevent the dynamical symbol relocation when loading the shared library?  Or linker flags that I could use with plugin shared library so it does list its internal symbols?
<br>
<p>I have a Stack Overflow question on this here:
<br>
<a href="http://stackoverflow.com/questions/1821153/segfault-on-c-plugin-library-with-duplicate-symbols">http://stackoverflow.com/questions/1821153/segfault-on-c-plugin-library-with-duplicate-symbols</a>
<br>
<p>Thanks!
<br>
Matt
<br>
<p>______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Previous message:</strong> <a href="11403.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Reply:</strong> <a href="11405.php">Jeff Squyres: "Re: [OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
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
