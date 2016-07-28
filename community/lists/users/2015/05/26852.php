<?
$subject_val = "[OMPI users] libnuma with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 02:17:50 2015" -->
<!-- isoreceived="20150511061750" -->
<!-- sent="Mon, 11 May 2015 11:47:47 +0530" -->
<!-- isosent="20150511061747" -->
<!-- name="Chaitra Kumar" -->
<!-- email="chaitragkumar_at_[hidden]" -->
<!-- subject="[OMPI users] libnuma with openmpi" -->
<!-- id="CADB=1m91hrgqoXNnm+vqzpv1r=VXC8YLf3DTL08cUgRtMoxQmw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] libnuma with openmpi<br>
<strong>From:</strong> Chaitra Kumar (<em>chaitragkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 02:17:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Team,
<br>
<p>I am trying to test an application with libnuma on openmpi 1.8.1.  The code
<br>
compiles, but at runtime am getting libnuma warning and it dies with
<br>
segmentation fault.
<br>
<p>libnuma: Warning: cpu argument 8 is out of range
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 62744 on node test-1 exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>System information:
<br>
RHEL 6.6
<br>
GCC 4.4.7
<br>
open-mpi 1.8.1
<br>
<p>This code works perfectly on MVAPICH2.
<br>
<p>How can I enable libnuma on openmpi?
<br>
<p>Any help is greatly appreciated.
<br>
<p>Regards,
<br>
Chaitra
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26851.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
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
