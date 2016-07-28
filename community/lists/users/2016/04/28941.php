<?
$subject_val = "[OMPI users] openib failover";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 17 15:24:46 2016" -->
<!-- isoreceived="20160417192446" -->
<!-- sent="Sun, 17 Apr 2016 15:24:40 -0400" -->
<!-- isosent="20160417192440" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] openib failover" -->
<!-- id="CAHXxYDj78YcpvfCWXzRMw7z0W-Vm+JXp9-smwpwTV83SycvFoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openib failover<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-17 15:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28942.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28940.php">dpchoudh .: "[OMPI users] Build on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib failover"</a>
<li><strong>Reply:</strong> <a href="28965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib failover"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>As I understand, the openib BTL supports NIC failover, but I am confused
<br>
about the scope of this support. Let me elaborate:
<br>
<p>1. Is the failover support part of MPI specification?
<br>
<p>2. Is it an openMPI-specific addition to MPI implementation?
<br>
<p>3. Is it a verb-API specification? Since the openib BTL uses only verbs
<br>
APIs under the hood, it should work on any NIC (e,g. iWARP or RoCE) that
<br>
support verbs, isn't it?
<br>
<p>4. Is it an Infiniband specification? Going through my old mail archive, it
<br>
seems that openMPI 1.2 release supported this without relying on the IB
<br>
automatic path migration functionality, so it seems to me that what openMPI
<br>
provides is independent of IB APM (that plus the openib BTL runs on link
<br>
types other than Infiniband)
<br>
<p>4.1 If it is based on infiniband APM, is this available if I chose to run a
<br>
MTL (e.g. PSM) instead of the openib BTL?
<br>
<p>5. If my understanding is correct on point #4 above (i.e. the openMPI
<br>
failover is independent of any link specific capability of Infiniband),
<br>
then why is a similar functionality not provided for other transport type?
<br>
The only non-verb transport that I currently have access to is TCP, and I
<br>
don't think the TCP transport provides auto-failover.
<br>
<p>Can someone with expertise on this please elaborate?
<br>
Thanks in advance
<br>
Durga
<br>
<p><p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28942.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28940.php">dpchoudh .: "[OMPI users] Build on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib failover"</a>
<li><strong>Reply:</strong> <a href="28965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib failover"</a>
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
