<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 27 08:29:47 2007" -->
<!-- isoreceived="20070427122947" -->
<!-- sent="Fri, 27 Apr 2007 14:29:43 +0200" -->
<!-- isosent="20070427122943" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running hpcc with a threaded BLAS" -->
<!-- id="5711d990704270529p6e4e2c0fmc71583935c83f1d6_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-27 08:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3157.php">Götz Waschk: "[OMPI users] [PATCH] small build fix for gm btl"</a>
<li><strong>Previous message:</strong> <a href="3155.php">Jiming Jin: "[OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3246.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I'm testing my new cluster installation with the hpcc benchmark and
<br>
openmpi 1.2.1 on RHEL5 32 bit. I have some trouble with using a
<br>
threaded BLAS implementation. I have tried ATLAS 3.7.30 compiled with
<br>
pthread support. It crashes as reported here:
<br>
<a href="http://sourceforge.net/tracker/index.php?func=detail&amp;aid=1708575&amp;group_id=23725&amp;atid=379483">http://sourceforge.net/tracker/index.php?func=detail&amp;aid=1708575&amp;group_id=23725&amp;atid=379483</a>
<br>
<p>If I link to the ATLAS version without pthread support hpcc runs fine.
<br>
<p>I have a problem with Goto BLAS 1.14 too, the output of hpcc stops
<br>
before the HPL run, then the hpcc processes seem to do nothing,
<br>
consuming 100% CPU. If I set the maximum number of threads for Goto
<br>
BLAS to 1, hpcc is working fine again.
<br>
<p>openmpi was compiled without thread support.
<br>
<p>Can you give me a hint?
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3157.php">Götz Waschk: "[OMPI users] [PATCH] small build fix for gm btl"</a>
<li><strong>Previous message:</strong> <a href="3155.php">Jiming Jin: "[OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3246.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
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
