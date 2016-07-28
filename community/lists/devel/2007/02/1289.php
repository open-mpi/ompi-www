<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  3 23:41:38 2007" -->
<!-- isoreceived="20070204044138" -->
<!-- sent="Sat, 3 Feb 2007 21:41:23 -0700" -->
<!-- isosent="20070204044123" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted --seed and orte_init()" -->
<!-- id="459CD83A-C62A-48FE-AEBB-5113AD5EFA9C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1E9E164.1826%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-03 23:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1290.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Previous message:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>In reply to:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2007, at 6:51 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/2/07 8:44 AM, &quot;Greg Watson&quot; &lt;gwatson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We're launching a seed daemon so that we can get registry persistence
</span><br>
<span class="quotelev2">&gt;&gt; across multiple job launches. However, there is a race condition
</span><br>
<span class="quotelev2">&gt;&gt; between launching the daemon and the first call to orte_init() that
</span><br>
<span class="quotelev2">&gt;&gt; can result in a bus error. We set the OMPI_MCA_universe and
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_univ_exist environment variables prior to calling
</span><br>
<span class="quotelev2">&gt;&gt; orte_init() so that orte knows how to connect to the daemon, but if
</span><br>
<span class="quotelev2">&gt;&gt; the daemon hasn't started this causes a bus error in
</span><br>
<span class="quotelev2">&gt;&gt; orte_rds_base_close(). Stack trace below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exception:  EXC_BAD_ACCESS (0x0001)
</span><br>
<span class="quotelev2">&gt;&gt; Codes:      KERN_PROTECTION_FAILURE (0x0002) at 0x0000001c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev2">&gt;&gt; 0   libopen-rte.0.dylib  0x000c6d59 orte_rds_base_close + 66
</span><br>
<span class="quotelev2">&gt;&gt; 1   libopen-rte.0.dylib  0x000a3ba7 orte_system_finalize + 121
</span><br>
<span class="quotelev2">&gt;&gt; 2   libopen-rte.0.dylib  0x000d41f9
</span><br>
<span class="quotelev2">&gt;&gt; orte_sds_base_basic_contact_universe + 648
</span><br>
<span class="quotelev2">&gt;&gt; 3   libopen-rte.0.dylib  0x000a06ce orte_init_stage1 + 898
</span><br>
<span class="quotelev2">&gt;&gt; 4   libopen-rte.0.dylib  0x000a3c0b orte_system_init + 25
</span><br>
<span class="quotelev2">&gt;&gt; 5   libopen-rte.0.dylib  0x000a0190 orte_init + 81
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...can you tell me which version you are working with?  
</span><br>
<span class="quotelev1">&gt; Obviously, that
</span><br>
<span class="quotelev1">&gt; shouldn't happen. My best initial guess is that rds is being  
</span><br>
<span class="quotelev1">&gt; opened, but
</span><br>
<span class="quotelev1">&gt; hasn't selected components yet when we try to contact the universe.  
</span><br>
<span class="quotelev1">&gt; When
</span><br>
<span class="quotelev1">&gt; that fails and we call finalize, rds tries to &quot;close&quot; a component  
</span><br>
<span class="quotelev1">&gt; list that
</span><br>
<span class="quotelev1">&gt; is NULL. I can look into that.
</span><br>
<p>1.2b3
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1290.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Previous message:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>In reply to:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
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
