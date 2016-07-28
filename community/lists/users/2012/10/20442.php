<?
$subject_val = "[OMPI users] Problems with cuda when installing openmpi 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 00:35:46 2012" -->
<!-- isoreceived="20121010043546" -->
<!-- sent="Wed, 10 Oct 2012 04:23:34 +0000" -->
<!-- isosent="20121010042334" -->
<!-- name="Hodgess, Erin" -->
<!-- email="HodgessE_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with cuda when installing openmpi 1.6.2" -->
<!-- id="FF9DB805FC41CC4E95825A50F6806302F7EB_at_columbia.uhd.campus" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems with cuda when installing openmpi 1.6.2<br>
<strong>From:</strong> Hodgess, Erin (<em>HodgessE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 00:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20441.php">Z.Y.Qiu: "[OMPI users] An err in parallel computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>Reply:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I'm trying to install Open MPI 1.6.2.
<br>
<p>However, I'm getting the following error when running &quot;make all install&quot;
<br>
<p>make[5]: Entering directory `/home/erin/openmpi-1.6.2/ompi/contrib/vt/vt/vtlib'
<br>
&nbsp;&nbsp;CC     vt_gpu.lo
<br>
In file included from vt_gpu.h:97:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vt_gpu.c:13:
<br>
vt_cuda_driver_api.h:21:18: fatal error: cuda.h: No such file or directory
<br>
compilation terminated.
<br>
make[5]: *** [vt_gpu.lo] Error 1
<br>
make[5]: Leaving directory `/home/erin/openmpi-1.6.2/ompi/contrib/vt/vt/vtlib'
<br>
<p>Does this look familiar, please?
<br>
<p>Thanks for any help.
<br>
<p>Sincerely,
<br>
Erin
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20441.php">Z.Y.Qiu: "[OMPI users] An err in parallel computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>Reply:</strong> <a href="20443.php">Hodgess, Erin: "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
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
