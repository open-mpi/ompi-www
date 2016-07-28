<?
$subject_val = "Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 00:41:48 2012" -->
<!-- isoreceived="20121010044148" -->
<!-- sent="Wed, 10 Oct 2012 04:41:39 +0000" -->
<!-- isosent="20121010044139" -->
<!-- name="Hodgess, Erin" -->
<!-- email="HodgessE_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2" -->
<!-- id="FF9DB805FC41CC4E95825A50F6806302F815_at_columbia.uhd.campus" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FF9DB805FC41CC4E95825A50F6806302F7EB_at_columbia.uhd.campus" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with cuda when installing openmpi 1.6.2<br>
<strong>From:</strong> Hodgess, Erin (<em>HodgessE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 00:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20444.php">Victor Vysotskiy: "[OMPI users] Is MPI_Accumulate compatible with an user-defined derived datatype?"</a>
<li><strong>Previous message:</strong> <a href="20442.php">Hodgess, Erin: "[OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20442.php">Hodgess, Erin: "[OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found it...I had uninstalled CUDA but did not re-run ./configure.
<br>
<p>Thanks,
<br>
Erin
<br>
<p>________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Hodgess, Erin
<br>
Sent: Tuesday, October 09, 2012 11:23 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Problems with cuda when installing openmpi 1.6.2
<br>
<p>Hello!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20444.php">Victor Vysotskiy: "[OMPI users] Is MPI_Accumulate compatible with an user-defined derived datatype?"</a>
<li><strong>Previous message:</strong> <a href="20442.php">Hodgess, Erin: "[OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20442.php">Hodgess, Erin: "[OMPI users] Problems with cuda when installing openmpi 1.6.2"</a>
<!-- nextthread="start" -->
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
