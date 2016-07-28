<?
$subject_val = "Re: [OMPI devel] change in io_ompio.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 23:14:32 2015" -->
<!-- isoreceived="20150528031432" -->
<!-- sent="Thu, 28 May 2015 08:44:21 +0530" -->
<!-- isosent="20150528031421" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] change in io_ompio.c" -->
<!-- id="5566880D.9030707_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55668392.7000905_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2015-05-27 23:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Previous message:</strong> <a href="17456.php">Edgar Gabriel: "[OMPI devel] change in io_ompio.c"</a>
<li><strong>In reply to:</strong> <a href="17456.php">Edgar Gabriel: "[OMPI devel] change in io_ompio.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17459.php">Gilles Gouaillardet: "Re: [OMPI devel] change in io_ompio.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, I see you moved the malloc up, the malloc was originally just for 
<br>
the receiving side of the communication, you moved it up to cover both. 
<br>
That is however unfortunately not correct.
<br>
<p>I will fix it in a couple of mins.
<br>
Thanks
<br>
Edgar
<br>
<p>On 5/28/2015 8:25 AM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw you a fixed a couple of the coverty warnings in ompio, but
</span><br>
<span class="quotelev1">&gt; unfortunately it also broke some things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Question to you: in io_ompio.c line 2345, you introduced a malloc for
</span><br>
<span class="quotelev1">&gt; f_procs_in_group that was not there before. That array is allocated a
</span><br>
<span class="quotelev1">&gt; couple of lines earlier in the subroutine merge_groups
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the values are not set, we segfault right away a couple of lines
</span><br>
<span class="quotelev1">&gt; later in the subsequent isend, where f_procs_in_group[0] simply does not
</span><br>
<span class="quotelev1">&gt; have a value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I ask what the problem was that you tried to fix?  Because purely
</span><br>
<span class="quotelev1">&gt; from the logic perspective, that malloc needs to go.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Previous message:</strong> <a href="17456.php">Edgar Gabriel: "[OMPI devel] change in io_ompio.c"</a>
<li><strong>In reply to:</strong> <a href="17456.php">Edgar Gabriel: "[OMPI devel] change in io_ompio.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17458.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17459.php">Gilles Gouaillardet: "Re: [OMPI devel] change in io_ompio.c"</a>
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
