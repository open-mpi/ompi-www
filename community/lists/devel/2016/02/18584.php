<?
$subject_val = "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 06:42:03 2016" -->
<!-- isoreceived="20160211114203" -->
<!-- sent="Thu, 11 Feb 2016 11:41:56 +0000" -->
<!-- isosent="20160211114156" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM" -->
<!-- id="256862FD-7F62-4A04-9320-1FA5B804D587_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwA79hXhiA--E+1ha72ZX1QdLbFKNNY5oFzJQkNpHaY8Aw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 06:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18585.php">Lisandro Dalcin: "[OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<li><strong>Previous message:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18578.php">Lisandro Dalcin: "[OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>Reply:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, this is not on purpose.  I filed <a href="https://github.com/open-mpi/ompi/issues/1355">https://github.com/open-mpi/ompi/issues/1355</a> to track the issue.
<br>
<p>Thanks!
<br>
<p><p><span class="quotelev1">&gt; On Feb 11, 2016, at 3:15 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After writing some tests, I discovered Open MPI's MPI_Get_address()
</span><br>
<span class="quotelev1">&gt; fails if fed with MPI_BOTTOM. Is this on purpose of just an error
</span><br>
<span class="quotelev1">&gt; checking oversight?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat get_address.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Aint addr;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_address(MPI_BOTTOM, &amp;addr);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $ mpicc get_address.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:18815] *** An error occurred in MPI_Get_address
</span><br>
<span class="quotelev1">&gt; [kw2060:18815] *** reported by process [140737192329217,140655883976704]
</span><br>
<span class="quotelev1">&gt; [kw2060:18815] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [kw2060:18815] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [kw2060:18815] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:18815] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18578.php">http://www.open-mpi.org/community/lists/devel/2016/02/18578.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18585.php">Lisandro Dalcin: "[OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<li><strong>Previous message:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18578.php">Lisandro Dalcin: "[OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>Reply:</strong> <a href="18589.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
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
