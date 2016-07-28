<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 22 20:46:15 2007" -->
<!-- isoreceived="20070423004615" -->
<!-- sent="Sun, 22 Apr 2007 17:46:03 -0700 (PDT)" -->
<!-- isosent="20070423004603" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you switch off paffinity?" -->
<!-- id="Pine.GSO.4.64.0704221737490.12775_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0704221620300.9303_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Date:</strong> 2007-04-22 20:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<li><strong>In reply to:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More information.
<br>
<p>--mca mpi_paffinity_alone 0
<br>
<p>still fails:
<br>
<p>...
<br>
OMPI_MCA_mpi_paffinity_alone=0
<br>
OMPI_MCA_mpi_paffinity_processor=3
<br>
...
<br>
<p>and it gets bound.
<br>
<p>May I ask I question about the code, which I scanned.
<br>
<p>I see in ompi/runtime/ompi_mpi_params.c you do a:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_int_name(&quot;mpi&quot;, &quot;paffinity_alone&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;If nonzero, assume that this job is the only (set of) process(es) r
<br>
unning on each node and bind processes to processors, starting with processor ID 0&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int) ompi_mpi_paffinity_alone, &amp;value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_paffinity_alone = OPAL_INT_TO_BOOL(value);
<br>
<p><p>and in opal/mca/base/mca_base_param.c
<br>
<p>/*
<br>
&nbsp;&nbsp;* Register an integer MCA parameter that is not associated with a
<br>
&nbsp;&nbsp;* component
<br>
&nbsp;&nbsp;*/
<br>
int mca_base_param_reg_int_name(const char *type,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *param_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *help_msg,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool internal,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool read_only,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int default_value,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *current_value)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_storage_t storage;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_storage_t lookup;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;storage.intval = default_value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = param_register(type, NULL, param_name, help_msg,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_PARAM_TYPE_INT, internal, read_only,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;storage, NULL, NULL, &amp;lookup);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret &gt;= 0 &amp;&amp; NULL != current_value) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*current_value = lookup.intval;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
}
<br>
<p><p>So, it appears that the &quot;current_value&quot; returned from lookup.intval may not happen
<br>
and you just get the &quot;ret&quot; value.
<br>
In the mca_base_param_reg_int_name call in ompi_mpi_params.c you don't check the
<br>
return code, so there may be junk in value? However, I don't see that explicitly
<br>
setting --mca mpi_paffinity_alone 0 would fail?
<br>
<p>Regards,
<br>
Mostyn
<br>
<p>P.S. I hope this doesn't seem too presumptious.
<br>
<p><p>On Sun, 22 Apr 2007, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Using a lateish SVN, 1.3a1r14155 (circa April 1st), on a SuSE SLES10
</span><br>
<span class="quotelev1">&gt; opteron system which has 2 dual core opterons per node, I can't seem
</span><br>
<span class="quotelev1">&gt; to disable processor affinity? I have a small test program which call
</span><br>
<span class="quotelev1">&gt; something else to detect CPU binding and whatever I've done it's still
</span><br>
<span class="quotelev1">&gt; bound?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_processor -1
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_processor -99
</span><br>
<span class="quotelev1">&gt; --mca mpi_paffinity_processor fred (desperation - still bound!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
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
<li><strong>Next message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<li><strong>In reply to:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
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
