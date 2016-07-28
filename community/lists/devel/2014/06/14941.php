<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 05:03:52 2014" -->
<!-- isoreceived="20140602090352" -->
<!-- sent="Mon, 2 Jun 2014 18:03:50 +0900" -->
<!-- isosent="20140602090350" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="CAAkFZ5tsRji__cU0a=aGQsii0zKVfDTL55CkRpstCKyyOw9rPQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3604568B15E_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 05:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14942.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14940.php">Manuel Rodriguez Pascual: "[OMPI devel] already founded stay at your institution"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14908.php">Rolf vandeVaart: "[OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14942.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14942.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>i faced a bit different problem, but that is 100% reproductible :
<br>
- i launch mpirun (no batch manager) from a node with one IB port
<br>
- i use -host node01,node02 where node01 and node02 both have two IB port
<br>
on the
<br>
&nbsp;&nbsp;same subnet
<br>
<p>by default, this will hang.
<br>
if this is a &quot;feature&quot; (e.g. openmpi does not support this kind of
<br>
configuration) i am fine with it.
<br>
<p>when i run mpirun --mca btl_openib_if_exclude mlx4_1, then if the
<br>
application is a success, then it works just fine.
<br>
<p>if the application calls MPI_Abort() /* and even if all tasks call
<br>
MPI_Abort() */ then it will hang 100% of the time.
<br>
i do not see that as a feature but as a bug.
<br>
<p>in an other thread, Jeff mentionned that the usnic btl is doing stuff even
<br>
if there is no usnic hardware (this will be fixed shortly).
<br>
Do you still see intermittent hang without listing usnic as a btl ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Fri, May 30, 2014 at 12:11 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing cases where mpirun seems to hang when one of the applications
</span><br>
<span class="quotelev1">&gt; exits with non-zero.  For example, the intel test MPI_Cart_get_c will exit
</span><br>
<span class="quotelev1">&gt; that way if there are not enough processes to run the test.  In most cases,
</span><br>
<span class="quotelev1">&gt; mpirun seems to return fine with the error code, but sometimes it just
</span><br>
<span class="quotelev1">&gt; hangs.   I first started noticing this in my mtt runs.  It seems (but not
</span><br>
<span class="quotelev1">&gt; conclusive) that I see this when both the usnic and openib are built, even
</span><br>
<span class="quotelev1">&gt; though I am only using the openib (as I have no usnic hardware).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone else seeing something like this?  Note that I see this on both 1.8
</span><br>
<span class="quotelev1">&gt; and trunk, but I show trunk here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14942.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14940.php">Manuel Rodriguez Pascual: "[OMPI devel] already founded stay at your institution"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14908.php">Rolf vandeVaart: "[OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14942.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Reply:</strong> <a href="14942.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
