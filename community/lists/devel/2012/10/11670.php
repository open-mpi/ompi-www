<?
$subject_val = "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 13:10:35 2012" -->
<!-- isoreceived="20121030171035" -->
<!-- sent="Tue, 30 Oct 2012 10:10:26 -0700" -->
<!-- isosent="20121030171026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path" -->
<!-- id="7ECA6054-25C9-4C9C-8CE8-21CB9997B606_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFC659FE55.A84C8274-ONC1257AA7.00443E1F-C1257AA7.0058EE8C_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 13:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11671.php">Sandra Guija: "[OMPI devel]  process kill signal 59"</a>
<li><strong>Previous message:</strong> <a href="11669.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<li><strong>In reply to:</strong> <a href="11669.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem - it isn't that slurm is not in a standard path, but rather that your slurm library subdir is named &quot;lib64&quot; instead of &quot;lib&quot;. The patch looks good to me - I'll submit it for 1.6 and 1.7, plus add it to the trunk.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p>On Oct 30, 2012, at 9:11 AM, Guillaume.Papaure_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; I'm building openmpi with pmi support but there is an error during configure. 
</span><br>
<span class="quotelev1">&gt; Currently slurm is not installed in standard /usr directory. 
</span><br>
<span class="quotelev1">&gt; The configure is giving an error like : 
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/home_nfs/papaureg/soft/openmpi-1.9a1hg155f02ad65ba --with-slurm=/homes/papaureg/soft/slurm/usr --with-pmi=/homes/papaureg/soft/slurm/usr 
</span><br>
<span class="quotelev1">&gt; ... 
</span><br>
<span class="quotelev1">&gt; checking if user requested PMI support... yes 
</span><br>
<span class="quotelev1">&gt; checking if PMI support installed... checking pmi.h usability... yes 
</span><br>
<span class="quotelev1">&gt; checking pmi.h presence... yes 
</span><br>
<span class="quotelev1">&gt; checking for pmi.h... yes 
</span><br>
<span class="quotelev1">&gt; checking for PMI_Init in -lpmi... no 
</span><br>
<span class="quotelev1">&gt; no 
</span><br>
<span class="quotelev1">&gt; configure: WARNING: PMI support requested (via --with-pmi) but not found. 
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A quick look at config.log points the problem : 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: warning: libslurm.so.25, needed by /homes/papaureg/soft/slurm/usr/lib64/libpmi.so, not found (try using -rpath or -rpath-link) 
</span><br>
<span class="quotelev1">&gt; /homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to `slurm_get_kvs_comm_set' 
</span><br>
<span class="quotelev1">&gt; /homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to `slurm_send_kvs_comm_set' 
</span><br>
<span class="quotelev1">&gt; /homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to `slurm_kill_job_step' 
</span><br>
<span class="quotelev1">&gt; /homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to `slurm_pmi_finalize' 
</span><br>
<span class="quotelev1">&gt; /homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to `slurm_free_kvs_comm_set' 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is, in attachement, a patch to orte_check_pmi.m4 that solved this issue for me. This patch can also be used on 1.6 branch. 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt; Guillaume 
</span><br>
<span class="quotelev1">&gt; &lt;pmi.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11671.php">Sandra Guija: "[OMPI devel]  process kill signal 59"</a>
<li><strong>Previous message:</strong> <a href="11669.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<li><strong>In reply to:</strong> <a href="11669.php">Guillaume.Papaure_at_[hidden]: "[OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
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
