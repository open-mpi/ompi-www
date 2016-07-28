<?
$subject_val = "[OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 11:10:27 2014" -->
<!-- isoreceived="20140423151027" -->
<!-- sent="Wed, 23 Apr 2014 15:10:25 +0000" -->
<!-- isosent="20140423151025" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE7C45B_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 11:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Previous message:</strong> <a href="24245.php">Mike Dubman: "Re: [OMPI users] no ikrit component of in oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Reply:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running IMB (Intel MPI Benchmarks), the MPI-1 benchmarks, which was built with Intel 12.1 compiler suite and OpenMPI 1.6.5 (and running w/ OMPI 1.6.5).  I decided to use the following for the mca parameters:
<br>
<p>--mca btl openib,tcp,self --mca btl_openib_receive_queues X,9216,256,128,32:X,65536,256,128,32
<br>
<p>where before, I always used &quot;--mca btl openib,tcp,self&quot;.  This is for performance analysis.  On the SendRecv benchmark at 32 processes, IMB hangs.  I then tried:
<br>
<p>--mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32
<br>
<p>and IMB also hangs on the SendRecv benchmark, though at 64 processes.
<br>
<p>No errors have been recorded, not even in any system log files but 'top' shows the MPI tasks running.  How can I go about troubleshooting this hang, as well as figuring out what (If any) MCA XRC-related parameters in btl_openib_receive_queues I have to specify to get IMB running properly?   I did verify the IB cards are ConnectX.
<br>
<p>--john
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Previous message:</strong> <a href="24245.php">Mike Dubman: "Re: [OMPI users] no ikrit component of in oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Reply:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
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
