<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  3 08:51:22 2007" -->
<!-- isoreceived="20070203135122" -->
<!-- sent="Sat, 03 Feb 2007 06:51:16 -0700" -->
<!-- isosent="20070203135116" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted --seed and orte_init()" -->
<!-- id="C1E9E164.1826%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D0AD43FE-2EBE-462A-B691-95EE6F610364_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-03 08:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1286.php">Bernhard Fischer: "[OMPI devel] [patch] commentary typo fixes"</a>
<li><strong>Previous message:</strong> <a href="1284.php">Tim Mattox: "Re: [OMPI devel] Create success (r1.3a1r13481)"</a>
<li><strong>In reply to:</strong> <a href="1282.php">Greg Watson: "[OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/2/07 8:44 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We're launching a seed daemon so that we can get registry persistence
</span><br>
<span class="quotelev1">&gt; across multiple job launches. However, there is a race condition
</span><br>
<span class="quotelev1">&gt; between launching the daemon and the first call to orte_init() that
</span><br>
<span class="quotelev1">&gt; can result in a bus error. We set the OMPI_MCA_universe and
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_univ_exist environment variables prior to calling
</span><br>
<span class="quotelev1">&gt; orte_init() so that orte knows how to connect to the daemon, but if
</span><br>
<span class="quotelev1">&gt; the daemon hasn't started this causes a bus error in
</span><br>
<span class="quotelev1">&gt; orte_rds_base_close(). Stack trace below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exception:  EXC_BAD_ACCESS (0x0001)
</span><br>
<span class="quotelev1">&gt; Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x0000001c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev1">&gt; 0   libopen-rte.0.dylib  0x000c6d59 orte_rds_base_close + 66
</span><br>
<span class="quotelev1">&gt; 1   libopen-rte.0.dylib  0x000a3ba7 orte_system_finalize + 121
</span><br>
<span class="quotelev1">&gt; 2   libopen-rte.0.dylib  0x000d41f9
</span><br>
<span class="quotelev1">&gt; orte_sds_base_basic_contact_universe + 648
</span><br>
<span class="quotelev1">&gt; 3   libopen-rte.0.dylib  0x000a06ce orte_init_stage1 + 898
</span><br>
<span class="quotelev1">&gt; 4   libopen-rte.0.dylib  0x000a3c0b orte_system_init + 25
</span><br>
<span class="quotelev1">&gt; 5   libopen-rte.0.dylib  0x000a0190 orte_init + 81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hmmm...can you tell me which version you are working with? Obviously, that
<br>
shouldn't happen. My best initial guess is that rds is being opened, but
<br>
hasn't selected components yet when we try to contact the universe. When
<br>
that fails and we call finalize, rds tries to &quot;close&quot; a component list that
<br>
is NULL. I can look into that.
<br>
<p><span class="quotelev1">&gt; A related question, is there any way to check for the daemon other
</span><br>
<span class="quotelev1">&gt; than calling orte_init()? At the moment we just sleep for a few
</span><br>
<span class="quotelev1">&gt; seconds after launching the daemon, but this is obviously not a very
</span><br>
<span class="quotelev1">&gt; satisfactory solution. I can't see any places where this is done in
</span><br>
<span class="quotelev1">&gt; the source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>There is a &quot;setup_hnp&quot; function that is supposed to do what you describe,
<br>
but I cannot swear that it works right now - I doubt it has been tested in
<br>
some time. Getting that to work properly is on my &quot;to-do&quot; list for the next
<br>
go-around. Meantime, I don't have any immediate solutions other than
<br>
&quot;sleep&quot;.
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1286.php">Bernhard Fischer: "[OMPI devel] [patch] commentary typo fixes"</a>
<li><strong>Previous message:</strong> <a href="1284.php">Tim Mattox: "Re: [OMPI devel] Create success (r1.3a1r13481)"</a>
<li><strong>In reply to:</strong> <a href="1282.php">Greg Watson: "[OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
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
