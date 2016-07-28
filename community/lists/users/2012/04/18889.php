<?
$subject_val = "[OMPI users] Error while loading shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  1 23:27:22 2012" -->
<!-- isoreceived="20120402032722" -->
<!-- sent="Mon, 2 Apr 2012 11:27:18 +0800" -->
<!-- isosent="20120402032718" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] Error while loading shared libraries" -->
<!-- id="CAFAE9jh4skvS0aNnLYdxKX7CZz3wa_cqjLXaXC6r88To_7XY5Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-01 23:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18890.php">Rayson Ho: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="18888.php">anurag sharma: "Re: [OMPI users] Regarding the error while running an mpi program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2006/04/1027.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="../../2006/04/1027.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="../../2006/04/1046.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="../../2006/04/1050.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="18890.php">Rayson Ho: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,
<br>
<p>I have installed mpi successfully and I am able to compile the programs
<br>
using mpicc
<br>
<p>But when I run using mpirun, I get following error
<br>
<p>&nbsp;* error while loading shared libraries: libmpi.so.0: cannot open shared
<br>
object file no such object file: No such file or directory. *
<br>
<p>When I run using - mpirun -np 1 ldd hello the following libraries are not
<br>
found
<br>
&nbsp;&nbsp;1. *libmpi.so.0*
<br>
&nbsp;&nbsp;2.* libopen-rte.so.0*
<br>
&nbsp;&nbsp;3. *libopen.pal.so.0*
<br>
<p>I am using openmpi version *1.4.5. *Also PATH and LD_LIBRARY_PATH variables
<br>
are correctly set and 'which mpicc' returns correct path
<br>
*
<br>
*
<br>
Any help would be highly appreciated.
<br>
<p>Thanks
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-18889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18890.php">Rayson Ho: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="18888.php">anurag sharma: "Re: [OMPI users] Regarding the error while running an mpi program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2006/04/1027.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="../../2006/04/1027.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="../../2006/04/1046.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Maybe reply:</strong> <a href="../../2006/04/1050.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="18890.php">Rayson Ho: "Re: [OMPI users] Error while loading shared libraries"</a>
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
