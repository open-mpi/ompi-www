<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 17:36:56 2006" -->
<!-- isoreceived="20060207223656" -->
<!-- sent="Tue, 07 Feb 2006 14:37:13 -0800" -->
<!-- isosent="20060207223713" -->
<!-- name="Bill Saphir" -->
<!-- email="bsaphir_at_[hidden]" -->
<!-- subject="[O-MPI users] Multiply-defined munmap on OSX" -->
<!-- id="C00E6119.7D4%bsaphir_at_numenta.com" -->
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
<strong>From:</strong> Bill Saphir (<em>bsaphir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 17:37:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Previous message:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Brian Barrett: "Re: [O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>Reply:</strong> <a href="0613.php">Brian Barrett: "Re: [O-MPI users] Multiply-defined munmap on OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In an attempt to limit runtime dependencies, I am using static libraries
<br>
where possible. Under OSX (10.4.4) I get the following error when I try to
<br>
link my application:
<br>
<p>/usr/bin/ld: multiple definitions of symbol _munmap
<br>
/usr/lib/gcc/powerpc-apple-darwin8/4.0.1/../../../libSystem.dylib(munmap.So)
<br>
definition of _munmap
<br>
[path-to-mpi-libs]/libopal.a(memory_darwin_component.o) definition of
<br>
_munmap in section (__TEXT,__text)
<br>
<p>I have configured R8901 with --disable-shared and --enable-static
<br>
(I have also tried --with-memory-manager=none, with no effect).
<br>
<p>If I understand correctly, openmpi's munmap depends on munmap being a weak
<br>
symbol. But according to nm -mg, munmap is not a weak symbol in
<br>
libSystem.dylib (a.k.a. libc.dylib). In fact there aren't any weak symbols
<br>
in this library. 
<br>
<p>It would seem that this is technically a problem with shared libraries as
<br>
well, but it would only be detected at run time because there is so much
<br>
indirection (empirically, there is no problem problem with dynamic
<br>
libraries, though).
<br>
<p>Any ideas on a solution to this problem?
<br>
<p>Bill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Previous message:</strong> <a href="0594.php">Konstantin Kudin: "[O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Brian Barrett: "Re: [O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>Reply:</strong> <a href="0613.php">Brian Barrett: "Re: [O-MPI users] Multiply-defined munmap on OSX"</a>
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
