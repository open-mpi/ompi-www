<?
$subject_val = "Re: [OMPI devel] Network atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 03:42:13 2016" -->
<!-- isoreceived="20160304084213" -->
<!-- sent="Fri, 4 Mar 2016 10:42:12 +0200" -->
<!-- isosent="20160304084212" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Network atomic operations" -->
<!-- id="CAAO1KyY+FPsjez0b=uOhfkuzzHd5WnCbyzzi=edf_RwtRZQciQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDjCL-i+Azzvz5razmLhO3PzK=7eiRBVh7SGwygUnRbcpg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Network atomic operations<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-04 03:42:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18670.php">dpchoudh .: "[OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Please check shmem.h for exposed API for hw atomics, and memory put/get
<br>
operations.
<br>
OMPI has plugin system, where every transport can expose what operations
<br>
are supported and OMPI will pick one which does for user-called API
<br>
requiring it.
<br>
<p>For hw which does not support hw atomics or remote memory operations -
<br>
OSHMEM API under OMPI package provides SW simulation layer for such
<br>
transports.
<br>
<p><p>On Fri, Mar 4, 2016 at 12:26 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a 101 level question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI supports many transports, out of the box, and can be extended to
</span><br>
<span class="quotelev1">&gt; support those which it does not. Some of these transports, such as
</span><br>
<span class="quotelev1">&gt; infiniband, provide hardware atomic operations on remote memory, whereas
</span><br>
<span class="quotelev1">&gt; others, such as iWARP, do not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: how (and where in the code base) does openMPI use this
</span><br>
<span class="quotelev1">&gt; feature, on those hardware that support it? What is the penalty, in terms
</span><br>
<span class="quotelev1">&gt; of additional code, runtime performance and all other considerations, on a
</span><br>
<span class="quotelev1">&gt; hardware that does not support it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18670.php">http://www.open-mpi.org/community/lists/devel/2016/03/18670.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18670.php">dpchoudh .: "[OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
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
