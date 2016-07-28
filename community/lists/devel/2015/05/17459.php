<?
$subject_val = "Re: [OMPI devel] change in io_ompio.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 23:30:39 2015" -->
<!-- isoreceived="20150528033039" -->
<!-- sent="Thu, 28 May 2015 12:30:35 +0900" -->
<!-- isosent="20150528033035" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] change in io_ompio.c" -->
<!-- id="55668BDB.1030902_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5566880D.9030707_at_cs.uh.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-27 23:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17460.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Previous message:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>In reply to:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17460.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17460.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar,
<br>
<p>i am sorry about that.
<br>
<p>i fixed some memory leaks (some memory was leaking in some error cases).
<br>
i also moved (up) some malloc in order to group them and simplify the 
<br>
handling
<br>
of error cases.
<br>
<p>per your comment, one move was incorrect indeed :-(
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/28/2015 12:14 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; ok, I see you moved the malloc up, the malloc was originally just for 
</span><br>
<span class="quotelev1">&gt; the receiving side of the communication, you moved it up to cover 
</span><br>
<span class="quotelev1">&gt; both. That is however unfortunately not correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will fix it in a couple of mins.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/28/2015 8:25 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw you a fixed a couple of the coverty warnings in ompio, but
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately it also broke some things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Question to you: in io_ompio.c line 2345, you introduced a malloc for
</span><br>
<span class="quotelev2">&gt;&gt; f_procs_in_group that was not there before. That array is allocated a
</span><br>
<span class="quotelev2">&gt;&gt; couple of lines earlier in the subroutine merge_groups
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the values are not set, we segfault right away a couple of lines
</span><br>
<span class="quotelev2">&gt;&gt; later in the subsequent isend, where f_procs_in_group[0] simply does not
</span><br>
<span class="quotelev2">&gt;&gt; have a value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I ask what the problem was that you tried to fix?  Because purely
</span><br>
<span class="quotelev2">&gt;&gt; from the logic perspective, that malloc needs to go.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17460.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Previous message:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>In reply to:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17460.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17460.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
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
