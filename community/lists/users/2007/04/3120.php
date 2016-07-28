<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 23 21:22:47 2007" -->
<!-- isoreceived="20070424012247" -->
<!-- sent="Mon, 23 Apr 2007 18:22:25 -0700 (PDT)" -->
<!-- isosent="20070424012225" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you switch off paffinity?" -->
<!-- id="Pine.GSO.4.64.0704231820250.6911_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="04F2A50A-87FB-4463-8350-3EEAD499C241_at_cisco.com" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-23 21:22:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3119.php">Mostyn Lewis: "[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>In reply to:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried this on a humble PC and it works there.
<br>
I see in the --mca mpi_show_mca_params 1 print out that there is a
<br>
[bb17:06646] paffinity=
<br>
entry, so I expect that sets the value entry back to 0?
<br>
<p>I'll get to the SLES10 cluster when I can (other people doing
<br>
benchmarks) and see what I can. I see there's no stdbool.h there,
<br>
so maybe this is an artifact of defining the bool type on an
<br>
operton. I'll get back to you when I can.
<br>
<p>The test of boundness was a perl program invoked via system() in a
<br>
C MPI program. The /proc/&lt;pid&gt;/stat result shows the CPU you are
<br>
bound to (3rd number from the end) and a taskset call gets back the
<br>
mask to show if you are bound or not.
<br>
<p>Regards,
<br>
Mostyn
<br>
<p><p>On Mon, 23 Apr 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2007, at 8:46 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_paffinity_alone 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you describe how you're verifying that the process is actually
</span><br>
<span class="quotelev1">&gt; bound?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; May I ask I question about the code, which I scanned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see in ompi/runtime/ompi_mpi_params.c you do a:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mca_base_param_reg_int_name(&quot;mpi&quot;, &quot;paffinity_alone&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                  &quot;If nonzero, assume that this job
</span><br>
<span class="quotelev2">&gt;&gt; is the only (set of) process(es) r
</span><br>
<span class="quotelev2">&gt;&gt; unning on each node and bind processes to processors, starting with
</span><br>
<span class="quotelev2">&gt;&gt; processor ID 0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                  false, false,
</span><br>
<span class="quotelev2">&gt;&gt;                                  (int) ompi_mpi_paffinity_alone,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;value);
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_mpi_paffinity_alone = OPAL_INT_TO_BOOL(value);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right that we're not checking the return value here, which is
</span><br>
<span class="quotelev1">&gt; bad.  However, this is a pretty stable portion of the code -- I would
</span><br>
<span class="quotelev1">&gt; be surprised if it is failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you stepped through this with a debugger to verify if it is
</span><br>
<span class="quotelev1">&gt; actually failing or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3121.php">John Borchardt: "[OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3119.php">Mostyn Lewis: "[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>In reply to:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3123.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
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
