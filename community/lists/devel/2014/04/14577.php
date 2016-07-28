<?
$subject_val = "Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 19:48:06 2014" -->
<!-- isoreceived="20140422234806" -->
<!-- sent="Tue, 22 Apr 2014 17:48:04 -0600" -->
<!-- isosent="20140422234804" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED" -->
<!-- id="20140422234804.GC60777_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBPe+EiOeHmot3m+4xvh9BnqGU623j1jO21u2_bL8LpRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-22 19:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>Previous message:</strong> <a href="14576.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8[.2] CMRs this week"</a>
<li><strong>In reply to:</strong> <a href="14562.php">Lisandro Dalcin: "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the standard does not explicitly forbid that combination
<br>
of assertions so I will remove the check. Be aware that assertion will
<br>
effectively be a no-op because you are saying no operation proceed or
<br>
succeed the fence call making the call pointless.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 21, 2014 at 02:11:47PM +0300, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; Open MPI errors in Win_fence() when the assertion contains both
</span><br>
<span class="quotelev1">&gt; MPI_MODE_NOPRECEDE and MPI_MODE_NOSUCCEED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you explain me why the following code is wrong? Please note that
</span><br>
<span class="quotelev1">&gt; the fence call with assertion !=0 is issued before and after fence
</span><br>
<span class="quotelev1">&gt; calls with assertion=0, and I'm not making any modification to the
</span><br>
<span class="quotelev1">&gt; local window, nor issuing any RMA call. My understanding of MPI RMA
</span><br>
<span class="quotelev1">&gt; operations is quite limited, but I would say that my code is valid and
</span><br>
<span class="quotelev1">&gt; should not fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat win_fence.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Win win;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_create(MPI_BOTTOM, 0, 1, MPI_INFO_NULL, MPI_COMM_SELF, &amp;win);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_fence(0, win);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_fence(MPI_MODE_NOSTORE|MPI_MODE_NOPUT|MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED,
</span><br>
<span class="quotelev1">&gt; win);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_fence(0, win);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc win_fence.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw2060:19890] *** An error occurred in MPI_Win_fence
</span><br>
<span class="quotelev1">&gt; [kw2060:19890] *** reported by process [140737129086977,0]
</span><br>
<span class="quotelev1">&gt; [kw2060:19890] *** on win rdma window 3
</span><br>
<span class="quotelev1">&gt; [kw2060:19890] *** MPI_ERR_ASSERT: invalid assert argument
</span><br>
<span class="quotelev1">&gt; [kw2060:19890] *** MPI_ERRORS_ARE_FATAL (processes in this win will now abort,
</span><br>
<span class="quotelev1">&gt; [kw2060:19890] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14562.php">http://www.open-mpi.org/community/lists/devel/2014/04/14562.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14577/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>Previous message:</strong> <a href="14576.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8[.2] CMRs this week"</a>
<li><strong>In reply to:</strong> <a href="14562.php">Lisandro Dalcin: "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
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
