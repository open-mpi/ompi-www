<?
$subject_val = "[OMPI users] USE mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 14:09:22 2011" -->
<!-- isoreceived="20110507180922" -->
<!-- sent="Sat, 07 May 2011 20:09:14 +0200" -->
<!-- isosent="20110507180914" -->
<!-- name="Steph Bredenhann" -->
<!-- email="s.j.bredenhann_at_[hidden]" -->
<!-- subject="[OMPI users] USE mpi" -->
<!-- id="1304791754.2633.9.camel_at_sjb-linux" -->
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
<strong>Subject:</strong> [OMPI users] USE mpi<br>
<strong>From:</strong> Steph Bredenhann (<em>s.j.bredenhann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-07 14:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16474.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16474.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16474.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have compiled all my fortran source files successfully with openmpi
<br>
1.4.3 wrapper for ifort on Ubuntu 10.10, except the main progran file
<br>
that contains the &quot;include mpif.h&quot; statement. It seems that the &quot;include
<br>
mpif.h&quot; is deprecated and that one should now use &quot;USE mpi&quot;. However,
<br>
when compiling with this I get the following message:
<br>
<p>Compile...
<br>
3k-1.for(2): error #7002: Error in opening the compiled module file.
<br>
Check INCLUDE paths.   [MPI]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USE mpi
<br>
----------^
<br>
compilation aborted for 3k-1.for (code 1)
<br>
done
<br>
<p>&quot;/usr/include/mpi&quot; is included in the variable $INCLUDE
<br>
<p>Could someone please advise on the next step to take?
<br>
<p>Thanks
<br>
<p><p><p><pre>
-- 
Steph Bredenhann 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16474.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>Previous message:</strong> <a href="16472.php">Lee Eric: "Re: [OMPI users] Help: HPL Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16474.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
<li><strong>Reply:</strong> <a href="16474.php">Jeff Squyres: "Re: [OMPI users] USE mpi"</a>
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
