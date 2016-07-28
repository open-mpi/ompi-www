<?
$subject_val = "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 21:11:39 2016" -->
<!-- isoreceived="20160726011139" -->
<!-- sent="Mon, 25 Jul 2016 18:11:34 -0700" -->
<!-- isosent="20160726011134" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PGI built Open MPI vs GNU built slurm" -->
<!-- id="CAAvDA16kLYwDdFvy2_pKZ8ZsgOFtKYsNN-FgruDN8TX81QvTyw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5cad5dac-5fe1-efe2-20c1-fd76c8d80636_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PGI built Open MPI vs GNU built slurm<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 21:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19278.php">Gilles Gouaillardet: "[OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>In reply to:</strong> <a href="19278.php">Gilles Gouaillardet: "[OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Reply:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>My initial thought is that libslurm probably does require linking
<br>
libpthread, either for for linking pthread_* symbols, or for proper
<br>
*operation* (such as thread-safe versions of functions which override weak
<br>
definitions in libc).
<br>
<p>If so, then neither omitting &quot;-pthread&quot; nor telling pgcc not to complain
<br>
about &quot;-pthread&quot; is going to be a good solution.
<br>
Instead the &quot;-pthread&quot; needs to be replaced by &quot;-lpthread&quot;, or similar.
<br>
<p>-Paul
<br>
<p>On Mon, Jul 25, 2016 at 6:03 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a followup of a thread that initially started at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The user is trying to build Open MPI with PGI compiler and
</span><br>
<span class="quotelev1">&gt; libslurm.la/libpmi.la support, and slurm was built with gcc compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At first, it fails because the &quot;-pthread&quot; flag is pulled from
</span><br>
<span class="quotelev1">&gt; libslurm.la/libpmi.la, but this flag is not supported by PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A workaround is to pass the -noswitcherror flag to the PGI compiler (so
</span><br>
<span class="quotelev1">&gt; the -pthread flag is discarded and a warning message is issued, but PGI
</span><br>
<span class="quotelev1">&gt; compiler does not fail). Unfortunatly, that does not work because libtool
</span><br>
<span class="quotelev1">&gt; does does not pass this flag to the PGI compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, one option is to tell the user to rebuild slurm with PGI, so
</span><br>
<span class="quotelev1">&gt; libslurm.la/libpmi.la do not have the &quot;-pthread&quot; flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A nicer though arguable option is to hack libtool to silently drop the
</span><br>
<span class="quotelev1">&gt; &quot;-pthread&quot; flag with PGI compiler is used (i made a proof of concept, and
</span><br>
<span class="quotelev1">&gt; this is a two lines patch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An other cleaner option is to hack libtool so it pass -noswitcherror to
</span><br>
<span class="quotelev1">&gt; PGI compiler, but i do not know how to achieve this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19278.php">http://www.open-mpi.org/community/lists/devel/2016/07/19278.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19278.php">Gilles Gouaillardet: "[OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>In reply to:</strong> <a href="19278.php">Gilles Gouaillardet: "[OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Reply:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
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
