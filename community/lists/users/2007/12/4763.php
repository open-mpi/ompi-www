<?
$subject_val = "[OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 21:12:59 2007" -->
<!-- isoreceived="20080101021259" -->
<!-- sent="Mon, 31 Dec 2007 21:12:45 -0500" -->
<!-- isosent="20080101021245" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="[OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot; { #include mpi.h }" -->
<!-- id="1199153565.14209.78.camel_at_doorstop.home.net" -->
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
<strong>Subject:</strong> [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 21:12:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I'm trying to build the Salom&#233; engineering simulation tool, and am
<br>
having trouble compiling with OpenMPI.  The full text of the error is at
<br>
<a href="http://lyre.mit.edu/~powell/salome-error">http://lyre.mit.edu/~powell/salome-error</a> .  The crux of the problem can
<br>
be reproduced by trying to compile a C++ file with:
<br>
<p>extern &quot;C&quot;
<br>
{
<br>
#include &quot;mpi.h&quot;
<br>
}
<br>
<p>At the end of mpi.h, the C++ headers get loaded while in extern C mode,
<br>
and the result is a vast list of errors.
<br>
<p>It seems odd that one of the cplusplus variables is #defined while in
<br>
extern C mode, but that's what seems to be happening.
<br>
<p>I see that it should be possible (and verified that it is possible) to
<br>
avoid this by using -DOMPI_SKIP_MPICXX.  But something in me says that
<br>
shouldn't be necessary, that extern C code should only include C headers
<br>
and not C++ ones...
<br>
<p>This is using Debian lenny (testing) with gcc 4.2.1-6.
<br>
<p>Thanks,
<br>
-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
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
