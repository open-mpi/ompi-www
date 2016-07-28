<?
$subject_val = "[OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 19:01:42 2008" -->
<!-- isoreceived="20080507230142" -->
<!-- sent="Thu, 08 May 2008 01:01:34 +0200" -->
<!-- isosent="20080507230134" -->
<!-- name="Ingo Josopait" -->
<!-- email="ingo.josopait_at_[hidden]" -->
<!-- subject="[OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH" -->
<!-- id="482234CE.6080609_at_gmx.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH<br>
<strong>From:</strong> Ingo Josopait (<em>ingo.josopait_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 19:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5640.php">Wen Hao Wang: "[OMPI users] mpif77 report Old-style type declaration"</a>
<li><strong>Previous message:</strong> <a href="5638.php">David Bruun: "[OMPI users] Unsubscribe."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that mpirun adds /usr/lib64 at the beginning of the
<br>
LD_LIBRARY_PATH environment variable (/usr/lib64 usually corresponds to
<br>
/usr/lib on non-amd64 systems):
<br>
<p>$ env | grep LIB
<br>
LD_LIBRARY_PATH=/home/ingo/opt/lib:/home/ingo/opt32/lib:/home/ingo/opt/gcc/lib64
<br>
<p>$ mpirun env | grep LIB
<br>
LD_LIBRARY_PATH=/usr/lib64:/home/ingo/opt/lib:/home/ingo/opt32/lib:/home/ingo/opt/gcc/lib64
<br>
<p>This would normally not be a problem, but I am trying to overload some
<br>
libraries in the /usr/lib64 directory in order to use the debugging STL
<br>
of gcc.
<br>
<p>Why is /usr/lib64 added to the library path? Is there a reason for it?
<br>
Or is it some configuration error on my system?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5640.php">Wen Hao Wang: "[OMPI users] mpif77 report Old-style type declaration"</a>
<li><strong>Previous message:</strong> <a href="5638.php">David Bruun: "[OMPI users] Unsubscribe."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
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
