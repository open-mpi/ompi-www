<?
$subject_val = "Re: [OMPI devel] Bug";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 20:50:11 2015" -->
<!-- isoreceived="20150622005011" -->
<!-- sent="Mon, 22 Jun 2015 09:50:07 +0900" -->
<!-- isosent="20150622005007" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug" -->
<!-- id="55875BBF.4070807_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEcYPwBei5tFjPkZ732-==sz7t_PQtPSscUhcSdBVFYbtufwMA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-21 20:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17514.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi-release default branch"</a>
<li><strong>Previous message:</strong> <a href="17512.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0 branch has been created"</a>
<li><strong>In reply to:</strong> <a href="17509.php">Lisandro Dalcin: "[OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>there was a regression in 1.8.6 with NBC and zero size messages.
<br>
(ironically, the bug was introduced when silencing zero size malloc you 
<br>
reported
<br>
in <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17388.php">http://www.open-mpi.org/community/lists/devel/2015/05/17388.php</a>
<br>
<p>the attached patch fixes the issue
<br>
<p>in your initial report, you mentionned messages coming from
<br>
coll_libnbc_ireduce_scatter_block.c
<br>
<p>there might be a bug left in this area, but i was unable to reproduce it.
<br>
could you please post the code you used initially ?
<br>
<p>when all is fixed, i will make the PR for v1.8, v1.10 and v2.x/v2.0
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/21/2015 1:46 AM, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; This is with 1.8.6. Igatherv with zero counts and SIGNED_CHAR aborts
</span><br>
<span class="quotelev1">&gt; the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat igatherv.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Request request;
</span><br>
<span class="quotelev1">&gt;    signed char sbuf=0,rbuf=0;
</span><br>
<span class="quotelev1">&gt;    int rcounts[] = {0};
</span><br>
<span class="quotelev1">&gt;    int rdispl[] = {0};
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Igatherv(&amp;sbuf, 0, MPI_SIGNED_CHAR,
</span><br>
<span class="quotelev1">&gt;                 &amp;rbuf, rcounts, rdispl, MPI_SIGNED_CHAR,
</span><br>
<span class="quotelev1">&gt;                 0, MPI_COMM_SELF, &amp;request);
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;request, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc igatherv.c
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; MPI Error in MPI_Pack_size() (0:0)
</span><br>
<span class="quotelev1">&gt; Error in NBC_Copy() (49)
</span><br>
<span class="quotelev1">&gt; [kl-13999:50786] *** An error occurred in MPI_Igatherv
</span><br>
<span class="quotelev1">&gt; [kl-13999:50786] *** reported by process [1872822273,0]
</span><br>
<span class="quotelev1">&gt; [kl-13999:50786] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [kl-13999:50786] *** MPI_ERR_SIZE: invalid size
</span><br>
<span class="quotelev1">&gt; [kl-13999:50786] *** MPI_ERRORS_ARE_FATAL (processes in this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [kl-13999:50786] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17513/nbc_copy.patch">nbc_copy.patch</a>
</ul>
<!-- attachment="nbc_copy.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17514.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi-release default branch"</a>
<li><strong>Previous message:</strong> <a href="17512.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0 branch has been created"</a>
<li><strong>In reply to:</strong> <a href="17509.php">Lisandro Dalcin: "[OMPI devel] Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
<li><strong>Reply:</strong> <a href="17517.php">Lisandro Dalcin: "Re: [OMPI devel] Bug"</a>
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
