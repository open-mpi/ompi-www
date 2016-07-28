<?
$subject_val = "Re: [OMPI devel] Recommended tool to measure packet counters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 18:43:22 2013" -->
<!-- isoreceived="20131218234322" -->
<!-- sent="Wed, 18 Dec 2013 17:42:40 -0600" -->
<!-- isosent="20131218234240" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Recommended tool to measure packet counters" -->
<!-- id="CAPkf6e24AQG5R9ww0vK9wKWwoa9gX-6FreTbazoOOr17j5eZdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2AAA5173-FFD2-4D3C-B597-52BF3FB53F42_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Recommended tool to measure packet counters<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 18:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13478.php">Thomas Naughton: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Previous message:</strong> <a href="13476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah got it ! Thanks
<br>
<p>-- Sid
<br>
<p><p>On 18 December 2013 07:44, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 14, 2013, at 8:02 AM, Siddhartha Jana &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a preferred method/tool among developers of MPI-library for
</span><br>
<span class="quotelev1">&gt; checking the count of the packets transmitted by the network card during
</span><br>
<span class="quotelev1">&gt; two-sided communication?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the use of
</span><br>
<span class="quotelev2">&gt; &gt; iptables -I INPUT -i eth0
</span><br>
<span class="quotelev2">&gt; &gt; iptables -I OUTPUT -o eth0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; recommended ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're using an ethernet, non-OS-bypass transport (e.g., TCP), you
</span><br>
<span class="quotelev1">&gt; might also want to look at ethtool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that these counts will include control messages sent by Open MPI, too
</span><br>
<span class="quotelev1">&gt; -- not just raw MPI traffic.  They also will not include any traffic sent
</span><br>
<span class="quotelev1">&gt; across shared memory (or other transports).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13478.php">Thomas Naughton: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<li><strong>Previous message:</strong> <a href="13476.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>In reply to:</strong> <a href="13462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
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
