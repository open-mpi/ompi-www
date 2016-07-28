<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Critical bug notice";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 14:54:21 2009" -->
<!-- isoreceived="20090327185421" -->
<!-- sent="Fri, 27 Mar 2009 19:54:07 +0100" -->
<!-- isosent="20090327185407" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Critical bug notice" -->
<!-- id="1238180047.7005.4.camel_at_y-boda.ydc.se" -->
<!-- inreplyto="951015C3-0139-4E62-8C89-CCD6B90BA82E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Critical bug notice<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 14:54:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8619.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8617.php">Jeff Squyres: "[OMPI users] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="8617.php">Jeff Squyres: "[OMPI users] Critical bug notice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>Reply:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-03-27 at 11:34 -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The Open MPI team has uncovered a serious bug in Open MPI v1.3.0 and  
</span><br>
<span class="quotelev1">&gt; v1.3.1: when running on OpenFabrics-based networks, silent data  
</span><br>
<span class="quotelev1">&gt; corruption is possible in some cases.  There are two workarounds to  
</span><br>
<span class="quotelev1">&gt; avoid the issue -- please see the bug ticket that has been opened  
</span><br>
<span class="quotelev1">&gt; about this issue for further details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/1853">https://svn.open-mpi.org/trac/ompi/ticket/1853</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We strongly encourage all users who are using Open MPI v1.3.0 and/or  
</span><br>
<span class="quotelev1">&gt; v1.3.1 on OpenFabrics-based networks to read this ticket and use one  
</span><br>
<span class="quotelev1">&gt; of the workarounds described there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Open MPI team is working on a fix; it will be included in the  
</span><br>
<span class="quotelev1">&gt; v1.3.2 release.  Updates will be posted to the ticket.
</span><br>
<p>Will --with-memory-manager=none also work?
<br>
I guess it would but I'd like a confirmation of this.
<br>
<p>The reason is that I'm having problems with BLACS with the
<br>
memory-manager turned on.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8619.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8617.php">Jeff Squyres: "[OMPI users] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="8617.php">Jeff Squyres: "[OMPI users] Critical bug notice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>Reply:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
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
