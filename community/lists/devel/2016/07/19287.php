<?
$subject_val = "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 16:09:22 2016" -->
<!-- isoreceived="20160726200922" -->
<!-- sent="Tue, 26 Jul 2016 13:09:08 -0700" -->
<!-- isosent="20160726200908" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PGI built Open MPI vs GNU built slurm" -->
<!-- id="CAAvDA165rr-Wi8ff4-KvqWz9a9-7Gm0VJJJ2=FB62Z6E=M4WRw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="e6fa0639-57bb-373b-e373-520bb8c8895f_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-07-26 16:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19288.php">tmishima_at_[hidden]: "[OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19286.php">Pritchard Jr., Howard: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>In reply to:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>With the additional information you provided about &quot;dependency_libs&quot;, I
<br>
agree that that either of the fixes you propose sound safe.
<br>
<p>-Paul
<br>
<p>On Mon, Jul 25, 2016 at 6:26 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in my environment, libslurm.la contains
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Linker flags that can not go in dependency_libs.
</span><br>
<span class="quotelev1">&gt; inherited_linker_flags=' -pthread'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Libraries that this one depends upon.
</span><br>
<span class="quotelev1">&gt; dependency_libs=' -ldl -lpthread'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so bottom line, it invokes the compiler with both -pthread and -lpthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iirc, -pthread does two things :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - invoke the compiler with -D_REENTRANT (so it uses the thread-safe errno
</span><br>
<span class="quotelev1">&gt; and so on)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - invoke the linker with -lpthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI has its own way to pass -D_REENTRANT or similar anyway, and
</span><br>
<span class="quotelev1">&gt; libslurm.la is used only for for linking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since -lpthread is pulled anyway from libslurm.la (or it was already set
</span><br>
<span class="quotelev1">&gt; by OpenMPI), then yes, discarding -pthread should do the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/26/2016 10:11 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My initial thought is that libslurm probably does require linking
</span><br>
<span class="quotelev1">&gt; libpthread, either for for linking pthread_* symbols, or for proper
</span><br>
<span class="quotelev1">&gt; *operation* (such as thread-safe versions of functions which override weak
</span><br>
<span class="quotelev1">&gt; definitions in libc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, then neither omitting &quot;-pthread&quot; nor telling pgcc not to complain
</span><br>
<span class="quotelev1">&gt; about &quot;-pthread&quot; is going to be a good solution.
</span><br>
<span class="quotelev1">&gt; Instead the &quot;-pthread&quot; needs to be replaced by &quot;-lpthread&quot;, or similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 25, 2016 at 6:03 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a followup of a thread that initially started at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The user is trying to build Open MPI with PGI compiler and
</span><br>
<span class="quotelev2">&gt;&gt; libslurm.la/libpmi.la support, and slurm was built with gcc compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first, it fails because the &quot;-pthread&quot; flag is pulled from
</span><br>
<span class="quotelev2">&gt;&gt; libslurm.la/libpmi.la, but this flag is not supported by PGI compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A workaround is to pass the -noswitcherror flag to the PGI compiler (so
</span><br>
<span class="quotelev2">&gt;&gt; the -pthread flag is discarded and a warning message is issued, but PGI
</span><br>
<span class="quotelev2">&gt;&gt; compiler does not fail). Unfortunatly, that does not work because libtool
</span><br>
<span class="quotelev2">&gt;&gt; does does not pass this flag to the PGI compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, one option is to tell the user to rebuild slurm with PGI, so
</span><br>
<span class="quotelev2">&gt;&gt; libslurm.la/libpmi.la do not have the &quot;-pthread&quot; flag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A nicer though arguable option is to hack libtool to silently drop the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-pthread&quot; flag with PGI compiler is used (i made a proof of concept, and
</span><br>
<span class="quotelev2">&gt;&gt; this is a two lines patch).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An other cleaner option is to hack libtool so it pass -noswitcherror to
</span><br>
<span class="quotelev2">&gt;&gt; PGI compiler, but i do not know how to achieve this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19278.php">http://www.open-mpi.org/community/lists/devel/2016/07/19278.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19279.php">http://www.open-mpi.org/community/lists/devel/2016/07/19279.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19280.php">http://www.open-mpi.org/community/lists/devel/2016/07/19280.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19288.php">tmishima_at_[hidden]: "[OMPI devel] sm BTL performace of the openmpi-2.0.0"</a>
<li><strong>Previous message:</strong> <a href="19286.php">Pritchard Jr., Howard: "Re: [OMPI devel] tcp btl rendezvous performance question"</a>
<li><strong>In reply to:</strong> <a href="19280.php">Gilles Gouaillardet: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
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
