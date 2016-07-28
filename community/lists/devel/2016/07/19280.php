<?
$subject_val = "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 21:26:25 2016" -->
<!-- isoreceived="20160726012625" -->
<!-- sent="Tue, 26 Jul 2016 10:26:12 +0900" -->
<!-- isosent="20160726012612" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PGI built Open MPI vs GNU built slurm" -->
<!-- id="e6fa0639-57bb-373b-e373-520bb8c8895f_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16kLYwDdFvy2_pKZ8ZsgOFtKYsNN-FgruDN8TX81QvTyw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 21:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19281.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>In reply to:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Reply:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>in my environment, libslurm.la contains
<br>
<p># Linker flags that can not go in dependency_libs.
<br>
inherited_linker_flags=' -pthread'
<br>
<p># Libraries that this one depends upon.
<br>
dependency_libs=' -ldl -lpthread'
<br>
<p><p>so bottom line, it invokes the compiler with both -pthread and -lpthread
<br>
<p><p>iirc, -pthread does two things :
<br>
<p>- invoke the compiler with -D_REENTRANT (so it uses the thread-safe 
<br>
errno and so on)
<br>
<p>- invoke the linker with -lpthread
<br>
<p>OpenMPI has its own way to pass -D_REENTRANT or similar anyway, and 
<br>
libslurm.la is used only for for linking.
<br>
<p>since -lpthread is pulled anyway from libslurm.la (or it was already set 
<br>
by OpenMPI), then yes, discarding -pthread should do the trick.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/26/2016 10:11 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My initial thought is that libslurm probably does require linking 
</span><br>
<span class="quotelev1">&gt; libpthread, either for for linking pthread_* symbols, or for proper 
</span><br>
<span class="quotelev1">&gt; *operation* (such as thread-safe versions of functions which override 
</span><br>
<span class="quotelev1">&gt; weak definitions in libc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, then neither omitting &quot;-pthread&quot; nor telling pgcc not to 
</span><br>
<span class="quotelev1">&gt; complain about &quot;-pthread&quot; is going to be a good solution.
</span><br>
<span class="quotelev1">&gt; Instead the &quot;-pthread&quot; needs to be replaced by &quot;-lpthread&quot;, or similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 25, 2016 at 6:03 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This is a followup of a thread that initially started at
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The user is trying to build Open MPI with PGI compiler and
</span><br>
<span class="quotelev1">&gt;     libslurm.la/libpmi.la &lt;<a href="http://libslurm.la/libpmi.la">http://libslurm.la/libpmi.la</a>&gt; support, and
</span><br>
<span class="quotelev1">&gt;     slurm was built with gcc compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     At first, it fails because the &quot;-pthread&quot; flag is pulled from
</span><br>
<span class="quotelev1">&gt;     libslurm.la/libpmi.la &lt;<a href="http://libslurm.la/libpmi.la">http://libslurm.la/libpmi.la</a>&gt;, but this
</span><br>
<span class="quotelev1">&gt;     flag is not supported by PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A workaround is to pass the -noswitcherror flag to the PGI
</span><br>
<span class="quotelev1">&gt;     compiler (so the -pthread flag is discarded and a warning message
</span><br>
<span class="quotelev1">&gt;     is issued, but PGI compiler does not fail). Unfortunatly, that
</span><br>
<span class="quotelev1">&gt;     does not work because libtool does does not pass this flag to the
</span><br>
<span class="quotelev1">&gt;     PGI compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Of course, one option is to tell the user to rebuild slurm with
</span><br>
<span class="quotelev1">&gt;     PGI, so libslurm.la/libpmi.la &lt;<a href="http://libslurm.la/libpmi.la">http://libslurm.la/libpmi.la</a>&gt; do
</span><br>
<span class="quotelev1">&gt;     not have the &quot;-pthread&quot; flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A nicer though arguable option is to hack libtool to silently drop
</span><br>
<span class="quotelev1">&gt;     the &quot;-pthread&quot; flag with PGI compiler is used (i made a proof of
</span><br>
<span class="quotelev1">&gt;     concept, and this is a two lines patch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     An other cleaner option is to hack libtool so it pass
</span><br>
<span class="quotelev1">&gt;     -noswitcherror to PGI compiler, but i do not know how to achieve this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19278.php">http://www.open-mpi.org/community/lists/devel/2016/07/19278.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19279.php">http://www.open-mpi.org/community/lists/devel/2016/07/19279.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19281.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>In reply to:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Reply:</strong> <a href="19287.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
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
