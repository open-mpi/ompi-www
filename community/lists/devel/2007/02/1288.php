<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  3 12:35:50 2007" -->
<!-- isoreceived="20070203173550" -->
<!-- sent="Sat, 03 Feb 2007 10:35:42 -0700" -->
<!-- isosent="20070203173542" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted --seed and orte_init()" -->
<!-- id="C1EA15FE.182E%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-03 12:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Previous message:</strong> <a href="1287.php">Bernhard Fischer: "Re: [OMPI devel] [patch] commentary typo fixes"</a>
<li><strong>In reply to:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1290.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1290.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something did occur to me that *might* help with the problem of detecting
<br>
when the seed is running. There is an option to orted &quot;-- report-uri pipe&quot;
<br>
that will cause the orted to write it's uri to the specified pipe. This
<br>
comes after the orted has completed orte_init, and so it *should* be ready
<br>
at that time for you to connect to it.
<br>
<p>So you might try using that option when you kickoff the seed, and then
<br>
reading from the pipe until you get the uri back. Or you can just wait to
<br>
see when the pipe closes since the orted closes the pipe immediately after
<br>
writing to it.
<br>
<p>There is still some stuff that the orted does before it accepts commands
<br>
send directly to it etc., but that shouldn't impact your ability to connect.
<br>
<p>Let me know how that goes. If we need to do so, we can shift the timing of
<br>
that report-uri output so it comes a little later in the orted's setup.
<br>
<p>Ralph
<br>
<p>On 2/3/07 6:51 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Hmmm...can you tell me which version you are working with? Obviously, that
</span><br>
<span class="quotelev1">&gt; shouldn't happen. My best initial guess is that rds is being opened, but
</span><br>
<span class="quotelev1">&gt; hasn't selected components yet when we try to contact the universe. When
</span><br>
<span class="quotelev1">&gt; that fails and we call finalize, rds tries to &quot;close&quot; a component list that
</span><br>
<span class="quotelev1">&gt; is NULL. I can look into that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A related question, is there any way to check for the daemon other
</span><br>
<span class="quotelev2">&gt;&gt; than calling orte_init()? At the moment we just sleep for a few
</span><br>
<span class="quotelev2">&gt;&gt; seconds after launching the daemon, but this is obviously not a very
</span><br>
<span class="quotelev2">&gt;&gt; satisfactory solution. I can't see any places where this is done in
</span><br>
<span class="quotelev2">&gt;&gt; the source.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a &quot;setup_hnp&quot; function that is supposed to do what you describe,
</span><br>
<span class="quotelev1">&gt; but I cannot swear that it works right now - I doubt it has been tested in
</span><br>
<span class="quotelev1">&gt; some time. Getting that to work properly is on my &quot;to-do&quot; list for the next
</span><br>
<span class="quotelev1">&gt; go-around. Meantime, I don't have any immediate solutions other than
</span><br>
<span class="quotelev1">&gt; &quot;sleep&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Previous message:</strong> <a href="1287.php">Bernhard Fischer: "Re: [OMPI devel] [patch] commentary typo fixes"</a>
<li><strong>In reply to:</strong> <a href="1285.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1290.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>Reply:</strong> <a href="1290.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
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
