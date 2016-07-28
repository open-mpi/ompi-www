<?
$subject_val = "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 30 15:52:50 2013" -->
<!-- isoreceived="20130630195250" -->
<!-- sent="Sun, 30 Jun 2013 14:52:45 -0500" -->
<!-- isosent="20130630195245" -->
<!-- name="Alan Wild" -->
<!-- email="alan_at_[hidden]" -->
<!-- subject="[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)" -->
<!-- id="CAATyho5oRaWEJdsjHPZs6D62XyMBBGeXw3AiV2i-rHOZ7SKpyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)<br>
<strong>From:</strong> Alan Wild (<em>alan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-30 15:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>Previous message:</strong> <a href="22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>Reply:</strong> <a href="22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm surprised that there are users still reporting issues getting this to
<br>
work, but as I'm still seeing notes in the digest I wanted to share (what I
<br>
believe the issue is) and how I've fixed it.
<br>
<p>If you don't take special measures, OpenMPI will be dynamically linked and
<br>
have runtime dependencies on several of Intel's .so files.  However,
<br>
passing LD_LIBRARY_PATH has an option on mpirun is often not sufficient
<br>
because the orted process itself has these dyanmic dependencies... so when
<br>
you invoke mpirun, it fires up and launches orted on the remote hosts (with
<br>
the intention of passing LD_LIBRARY_PATH or whatever to the remote process
<br>
but the remote process immediately fails because it cannot resolve its
<br>
dependencies (and LD_LIBRARY_PATH is never setup on the far side).
<br>
<p>So I see two options:
<br>
<p>1) linking orted statically.  (Not sure if I've ever done this)
<br>
<p>2) Passing an rpath in your openmpi link options so that oreted can resolve
<br>
its own dependencies without needing an LD_LIBRARY_PATH
<br>
<p>You can do #2 by using something similar to the following on your configure
<br>
line
<br>
<p>./configure --prefix=/path/to/where/to/install/openmpi
<br>
LDFLAGS=&quot;-Wl,--enable-new-dtags
<br>
-Wl,-rpath,/path/to/intel/compiler/lib_directory&quot;
<br>
<p><p><p>-Alan
<br>
<p><pre>
-- 
alan_at_[hidden] <a href="http://humbleville.blogspot.com">http://humbleville.blogspot.com</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>Previous message:</strong> <a href="22234.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>Reply:</strong> <a href="22236.php">Ralph Castain: "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
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
