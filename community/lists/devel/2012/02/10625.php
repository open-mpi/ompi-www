<?
$subject_val = "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 08:48:19 2012" -->
<!-- isoreceived="20120228134819" -->
<!-- sent="Tue, 28 Feb 2012 14:48:12 +0100" -->
<!-- isosent="20120228134812" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)" -->
<!-- id="OF3C5BDC85.09B36843-ONC12579B2.00487A30-C12579B2.004BD563_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00F2024C-09D7-496D-AB1D-B2134B2BCA7D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Problem%20with%20the%20openmpi-default-hostfile%20(on%20the%20trunk)"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-28 08:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10626.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10624.php">Leif Lindholm: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>In reply to:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10627.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Reply:</strong> <a href="10627.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] a &#233;crit sur 28/02/2012 10:54:15 :
<br>
<p><span class="quotelev1">&gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 28/02/2012 10:54
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] Problem with the openmpi-default-hostfile 
</span><br>
<span class="quotelev1">&gt; (on the trunk)
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll see what I can do when next I have access to a slurm machine - 
</span><br>
<span class="quotelev1">&gt; hopefully in a day or two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you sure you are at the top of the trunk? I reviewed the code, 
</span><br>
<span class="quotelev1">&gt; and it clearly detects that the default hostile is empty and ignores
</span><br>
<span class="quotelev1">&gt; it if so. Like I said, I'm not seeing this behavior, and neither are
</span><br>
<span class="quotelev1">&gt; the slurm machines on MTT.
</span><br>
<p>I ran with a version from Feb 12th (I had a synchronization problem).
<br>
Now with the latest patches (Feb 27th), by default I have no more problem.
<br>
<p>But, ... it is no more possible to change the mca parameter 
<br>
&quot;orte_default_hostfile&quot;.
<br>
For example in $HOME/.openmpi/mca-params.conf I put:
<br>
&nbsp;&nbsp;&nbsp;orte_default_hostfile=none
<br>
Then, even with ompi_info, I get a segfault:
<br>
<p>[xxxx:17426] *** Process received signal ***
<br>
[xxxx:17426] Signal: Segmentation fault (11)
<br>
[xxxx:17426] Signal code: Address not mapped (1)
<br>
[xxxx:17426] Failing at address: (nil)
<br>
[xxxx:17426] [ 0] /lib64/libpthread.so.0() [0x327220f490]
<br>
[xxxx:17426] [ 1] /lib64/libc.so.6() [0x3271f24676]
<br>
[xxxx:17426] [ 2] /..../lib/libopen-rte.so.0(orte_register_params+0xaac) 
<br>
[0x7fa46989677a]
<br>
[xxxx:17426] [ 3] mpirun(orterun+0xeb) [0x4039ed]
<br>
[xxxx:17426] [ 4] mpirun(main+0x20) [0x4034b4]
<br>
[xxxx:17426] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3271e1ec9d]
<br>
[xxxx:17426] [ 6] mpirun() [0x4033d9]
<br>
[xxxx:17426] *** End of error message ***
<br>
<p>After a look at orte/runtime/orte_mca_params.c, I propose the following 
<br>
patch :
<br>
--- a/orte/runtime/orte_mca_params.c    Mon Feb 27 15:53:14 2012 +0000
<br>
+++ b/orte/runtime/orte_mca_params.c    Tue Feb 28 14:44:11 2012 +0100
<br>
@@ -301,7 +301,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;orte_default_hostfile, 
<br>
&quot;%s/etc/openmpi-default-hostfile&quot;, opal_install_dirs.prefix);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* flag that nothing was given */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_default_hostfile_given = false;
<br>
-    } else if (0 == strcmp(orte_default_hostfile, &quot;none&quot;)) {
<br>
+    } else if (0 == strcmp(strval, &quot;none&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_default_hostfile = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* flag that it was given */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_default_hostfile_given = true;
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2012, at 1:25 AM, pascal.deveze_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; devel-bounces_at_[hidden] a &#233;crit sur 27/02/2012 15:53:06 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date : 27/02/2012 16:17 
</span><br>
<span class="quotelev2">&gt; &gt; Objet : Re: [OMPI devel] Problem with the openmpi-default-hostfile 
</span><br>
<span class="quotelev2">&gt; &gt; (on the trunk) 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That's strange - I run on slurm frequently and never have this 
</span><br>
<span class="quotelev2">&gt; &gt; problem, and my default hostfile is present and empty. Do you have 
</span><br>
<span class="quotelev2">&gt; &gt; anything in your default mca param file that might be telling us to 
</span><br>
<span class="quotelev2">&gt; &gt; use the hostfile? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The only way I can find to get that behavior is if your default mca 
</span><br>
<span class="quotelev2">&gt; &gt; param file includes the orte_default_hostfile value. In that case, 
</span><br>
<span class="quotelev2">&gt; &gt; you are telling us to use the default hostfile, and so we will enforce 
</span><br>
it. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my side, the default value of orte_default_hostfile is a pointer 
</span><br>
<span class="quotelev1">&gt; to etc/openmpi-default-hostfile. 
</span><br>
<span class="quotelev1">&gt; The command ompi_info -a gives : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &lt;..../
</span><br>
<span class="quotelev1">&gt; etc/openmpi-default-hostfile&gt;, data source: default value) 
</span><br>
<span class="quotelev1">&gt; Name of the default hostfile (relative or absolute path, &quot;none&quot; to 
</span><br>
<span class="quotelev1">&gt; ignore environmental or default MCA param setting) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following files are empty: 
</span><br>
<span class="quotelev1">&gt;  - .../etc/openmpi-mca-params.conf 
</span><br>
<span class="quotelev1">&gt;  - $HOME/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev1">&gt; Another solution for me is to put &quot;orte_default_hostfile=none&quot; in 
</span><br>
<span class="quotelev1">&gt; one of these files. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 27, 2012, at 5:57 AM, pascal.deveze_at_[hidden] wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have problems with the openmpi-default-hostfile since the 
</span><br>
<span class="quotelev2">&gt; &gt; following patch on the trunk 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; changeset:   19874:088fc6c84a9f 
</span><br>
<span class="quotelev2">&gt; &gt; user:        rhc 
</span><br>
<span class="quotelev2">&gt; &gt; date:        Wed Feb 01 17:40:44 2012 +0000 
</span><br>
<span class="quotelev2">&gt; &gt; summary:     In accordance with prior releases, we are supposed to 
</span><br>
<span class="quotelev2">&gt; &gt; default to looking at the openmpi-default-hostfile as a default 
</span><br>
<span class="quotelev2">&gt; &gt; hostfile. Restore that behavior, but ignore the file if it is empty.
</span><br>
<span class="quotelev2">&gt; &gt; Allow the user to ignore any MCA param setting pointing to a default
</span><br>
<span class="quotelev2">&gt; &gt; hostfile by setting the param to &quot;none&quot; (via cmd line or whatever) -
</span><br>
<span class="quotelev2">&gt; &gt; this allows them to override a setting in the system default MCA 
</span><br>
<span class="quotelev1">&gt; param file. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; According to the summary of this patch, the openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt; is ignored if it is empty. 
</span><br>
<span class="quotelev2">&gt; &gt; But, when I run my jobs with slurm + mpirun, I get the following 
</span><br>
message: 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
-------------------------------------------------------------------------- 
<br>
<p><span class="quotelev2">&gt; &gt; No nodes are available for this job, either due to a failure to 
</span><br>
<span class="quotelev2">&gt; &gt; allocate nodes to the job, or allocated nodes being marked 
</span><br>
<span class="quotelev2">&gt; &gt; as unavailable (e.g., down, rebooting, or a process attempting 
</span><br>
<span class="quotelev2">&gt; &gt; to be relocated to another node when none are available). 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
-------------------------------------------------------------------------- 
<br>
<p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am able to run my job if: 
</span><br>
<span class="quotelev2">&gt; &gt;  - either I put my node(s) in the file etc/openmpi-default-hostfile 
</span><br>
<span class="quotelev2">&gt; &gt;  - or use &quot;-mca orte_default_hostfile=none&quot; in the mpirun command line 
</span><br>
<p><span class="quotelev2">&gt; &gt;  - or &quot;export OMPI_MCA_orte_default_hostfile none&quot; in my environment 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It appears that an empty openmpi-default-hostfile is not ignored. 
</span><br>
<span class="quotelev2">&gt; &gt; This patch seems not be complete 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Or do I misunderstand something ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pascal Dev&#232;ze_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10625/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10626.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10624.php">Leif Lindholm: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>In reply to:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10627.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<li><strong>Reply:</strong> <a href="10627.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
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
