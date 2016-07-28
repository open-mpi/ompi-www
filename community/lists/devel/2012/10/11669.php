<?
$subject_val = "[OMPI devel] Linking with slurm pmi when slurm is not in a standard path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 12:11:31 2012" -->
<!-- isoreceived="20121030161131" -->
<!-- sent="Tue, 30 Oct 2012 17:11:26 +0100" -->
<!-- isosent="20121030161126" -->
<!-- name="Guillaume.Papaure_at_[hidden]" -->
<!-- email="Guillaume.Papaure_at_[hidden]" -->
<!-- subject="[OMPI devel] Linking with slurm pmi when slurm is not in a standard path" -->
<!-- id="OFC659FE55.A84C8274-ONC1257AA7.00443E1F-C1257AA7.0058EE8C_at_bull.net" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Linking with slurm pmi when slurm is not in a standard path<br>
<strong>From:</strong> <a href="mailto:Guillaume.Papaure_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Linking%20with%20slurm%20pmi%20when%20slurm%20is%20not%20in%20a%20standard%20path"><em>Guillaume.Papaure_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-10-30 12:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11670.php">Ralph Castain: "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<li><strong>Previous message:</strong> <a href="11668.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11670.php">Ralph Castain: "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<li><strong>Reply:</strong> <a href="11670.php">Ralph Castain: "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm building openmpi with pmi support but there is an error during 
<br>
configure.
<br>
Currently slurm is not installed in standard /usr directory.
<br>
The configure is giving an error like :
<br>
&nbsp;./configure --prefix=/home_nfs/papaureg/soft/openmpi-1.9a1hg155f02ad65ba 
<br>
--with-slurm=/homes/papaureg/soft/slurm/usr 
<br>
--with-pmi=/homes/papaureg/soft/slurm/usr
<br>
...
<br>
checking if user requested PMI support... yes
<br>
checking if PMI support installed... checking pmi.h usability... yes
<br>
checking pmi.h presence... yes
<br>
checking for pmi.h... yes
<br>
checking for PMI_Init in -lpmi... no
<br>
no
<br>
configure: WARNING: PMI support requested (via --with-pmi) but not found.
<br>
configure: error: Aborting.
<br>
<p>A quick look at config.log points the problem :
<br>
/usr/bin/ld: warning: libslurm.so.25, needed by 
<br>
/homes/papaureg/soft/slurm/usr/lib64/libpmi.so, not found (try using 
<br>
-rpath or -rpath-link)
<br>
/homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to 
<br>
`slurm_get_kvs_comm_set'
<br>
/homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to 
<br>
`slurm_send_kvs_comm_set'
<br>
/homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to 
<br>
`slurm_kill_job_step'
<br>
/homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to 
<br>
`slurm_pmi_finalize'
<br>
/homes/papaureg/soft/slurm/usr/lib64/libpmi.so: undefined reference to 
<br>
`slurm_free_kvs_comm_set'
<br>
<p>Here is, in attachement, a patch to orte_check_pmi.m4 that solved this 
<br>
issue for me. This patch can also be used on 1.6 branch.
<br>
Regards,
<br>
Guillaume
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11669/pmi.diff">pmi.diff</a>
</ul>
<!-- attachment="pmi.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11670.php">Ralph Castain: "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<li><strong>Previous message:</strong> <a href="11668.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11670.php">Ralph Castain: "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
<li><strong>Reply:</strong> <a href="11670.php">Ralph Castain: "Re: [OMPI devel] Linking with slurm pmi when slurm is not in a standard path"</a>
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
