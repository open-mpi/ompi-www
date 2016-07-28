<?
$subject_val = "Re: [OMPI devel] change in io_ompio.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 23:37:05 2015" -->
<!-- isoreceived="20150528033705" -->
<!-- sent="Thu, 28 May 2015 09:06:54 +0530" -->
<!-- isosent="20150528033654" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] change in io_ompio.c" -->
<!-- id="55668D56.40903_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55668BDB.1030902_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] change in io_ompio.c<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-27 23:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17461.php">Jeff Squyres (jsquyres): "[OMPI devel] README updates for new version number scheme"</a>
<li><strong>Previous message:</strong> <a href="17459.php">Gilles Gouaillardet: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>In reply to:</strong> <a href="17459.php">Gilles Gouaillardet: "Re: [OMPI devel] change in io_ompio.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry if I sounded too harsh, there was a real memory leak that you 
<br>
fixed, I agree to that.  I committed the correct version.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 5/28/2015 9:00 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am sorry about that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i fixed some memory leaks (some memory was leaking in some error cases).
</span><br>
<span class="quotelev1">&gt; i also moved (up) some malloc in order to group them and simplify the
</span><br>
<span class="quotelev1">&gt; handling
</span><br>
<span class="quotelev1">&gt; of error cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; per your comment, one move was incorrect indeed :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/28/2015 12:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ok, I see you moved the malloc up, the malloc was originally just for
</span><br>
<span class="quotelev2">&gt;&gt; the receiving side of the communication, you moved it up to cover
</span><br>
<span class="quotelev2">&gt;&gt; both. That is however unfortunately not correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will fix it in a couple of mins.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/28/2015 8:25 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw you a fixed a couple of the coverty warnings in ompio, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunately it also broke some things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question to you: in io_ompio.c line 2345, you introduced a malloc for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f_procs_in_group that was not there before. That array is allocated a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couple of lines earlier in the subroutine merge_groups
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since the values are not set, we segfault right away a couple of lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later in the subsequent isend, where f_procs_in_group[0] simply does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a value.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I ask what the problem was that you tried to fix?  Because purely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the logic perspective, that malloc needs to go.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17459.php">http://www.open-mpi.org/community/lists/devel/2015/05/17459.php</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17461.php">Jeff Squyres (jsquyres): "[OMPI devel] README updates for new version number scheme"</a>
<li><strong>Previous message:</strong> <a href="17459.php">Gilles Gouaillardet: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>In reply to:</strong> <a href="17459.php">Gilles Gouaillardet: "Re: [OMPI devel] change in io_ompio.c"</a>
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
