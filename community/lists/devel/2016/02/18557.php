<?
$subject_val = "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 10:08:47 2016" -->
<!-- isoreceived="20160205150847" -->
<!-- sent="Fri, 5 Feb 2016 15:08:45 +0000" -->
<!-- isosent="20160205150845" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="64A4B320-6D08-41FB-86F9-3BAB60D31D7D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5uq3aHRC+XGxs1CBDzzJPaLkyCf_RYtH9twuPjW+knX8A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 10:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18558.php">Justin Cinkelj: "[OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Previous message:</strong> <a href="18556.php">Gilles Gouaillardet: "[OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18556.php">Gilles Gouaillardet: "[OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 5, 2016, at 9:26 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  static inline opal_process_name_t ompi_proc_sentinel_to_name (intptr_t sentinel)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  sentinel &gt;&gt;= 1;
</span><br>
<span class="quotelev1">&gt;  sentinel &amp;= 0x7FFFFFFFFFFFFFFF;
</span><br>
<span class="quotelev1">&gt;  return *((opal_process_name_t *) &amp;sentinel);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>I don't have much of an opinion on any of the other stuff here, but I note that this is unsafe.  I know we don't really care about non-64 bit these days, but we shouldn't be knowingly breaking it.  Instead of ANDing with a fixed constant, shouldn't it be something like:
<br>
<p>intptr_t mask = ~1 &gt;&gt; 1;
<br>
sentinel &amp;= mask;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18558.php">Justin Cinkelj: "[OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Previous message:</strong> <a href="18556.php">Gilles Gouaillardet: "[OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18556.php">Gilles Gouaillardet: "[OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
