<?
$subject_val = "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 09:30:13 2012" -->
<!-- isoreceived="20120228143013" -->
<!-- sent="Tue, 28 Feb 2012 07:30:04 -0700" -->
<!-- isosent="20120228143004" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)" -->
<!-- id="C6B03AE6-6F2A-45F4-8859-624C338DB86E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF3C5BDC85.09B36843-ONC12579B2.00487A30-C12579B2.004BD563_at_bull.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 09:30:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10628.php">Ralph Castain: "[OMPI devel] Trunk build problem"</a>
<li><strong>Previous message:</strong> <a href="10626.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>In reply to:</strong> <a href="10625.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - I'll fix that bug!
<br>
<p><p>On Feb 28, 2012, at 6:48 AM, pascal.deveze_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; devel-bounces_at_[hidden] a &#233;crit sur 28/02/2012 10:54:15 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date : 28/02/2012 10:54 
</span><br>
<span class="quotelev2">&gt; &gt; Objet : Re: [OMPI devel] Problem with the openmpi-default-hostfile 
</span><br>
<span class="quotelev2">&gt; &gt; (on the trunk) 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'll see what I can do when next I have access to a slurm machine - 
</span><br>
<span class="quotelev2">&gt; &gt; hopefully in a day or two. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure you are at the top of the trunk? I reviewed the code, 
</span><br>
<span class="quotelev2">&gt; &gt; and it clearly detects that the default hostile is empty and ignores
</span><br>
<span class="quotelev2">&gt; &gt; it if so. Like I said, I'm not seeing this behavior, and neither are
</span><br>
<span class="quotelev2">&gt; &gt; the slurm machines on MTT. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran with a version from Feb 12th (I had a synchronization problem). 
</span><br>
<span class="quotelev1">&gt; Now with the latest patches (Feb 27th), by default I have no more problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, ... it is no more possible to change the mca parameter &quot;orte_default_hostfile&quot;. 
</span><br>
<span class="quotelev1">&gt; For example in $HOME/.openmpi/mca-params.conf I put: 
</span><br>
<span class="quotelev1">&gt;    orte_default_hostfile=none 
</span><br>
<span class="quotelev1">&gt; Then, even with ompi_info, I get a segfault: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] *** Process received signal *** 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] Signal: Segmentation fault (11) 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] Signal code: Address not mapped (1) 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] Failing at address: (nil) 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 0] /lib64/libpthread.so.0() [0x327220f490] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 1] /lib64/libc.so.6() [0x3271f24676] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 2] /..../lib/libopen-rte.so.0(orte_register_params+0xaac) [0x7fa46989677a] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 3] mpirun(orterun+0xeb) [0x4039ed] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 4] mpirun(main+0x20) [0x4034b4] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3271e1ec9d] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] [ 6] mpirun() [0x4033d9] 
</span><br>
<span class="quotelev1">&gt; [xxxx:17426] *** End of error message *** 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After a look at orte/runtime/orte_mca_params.c, I propose the following patch : 
</span><br>
<span class="quotelev1">&gt; --- a/orte/runtime/orte_mca_params.c    Mon Feb 27 15:53:14 2012 +0000 
</span><br>
<span class="quotelev1">&gt; +++ b/orte/runtime/orte_mca_params.c    Tue Feb 28 14:44:11 2012 +0100 
</span><br>
<span class="quotelev1">&gt; @@ -301,7 +301,7 @@ 
</span><br>
<span class="quotelev1">&gt;          asprintf(&amp;orte_default_hostfile, &quot;%s/etc/openmpi-default-hostfile&quot;, opal_install_dirs.prefix); 
</span><br>
<span class="quotelev1">&gt;          /* flag that nothing was given */ 
</span><br>
<span class="quotelev1">&gt;          orte_default_hostfile_given = false; 
</span><br>
<span class="quotelev1">&gt; -    } else if (0 == strcmp(orte_default_hostfile, &quot;none&quot;)) { 
</span><br>
<span class="quotelev1">&gt; +    } else if (0 == strcmp(strval, &quot;none&quot;)) { 
</span><br>
<span class="quotelev1">&gt;          orte_default_hostfile = NULL; 
</span><br>
<span class="quotelev1">&gt;          /* flag that it was given */ 
</span><br>
<span class="quotelev1">&gt;          orte_default_hostfile_given = true; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 28, 2012, at 1:25 AM, pascal.deveze_at_[hidden] wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; devel-bounces_at_[hidden] a &#233;crit sur 27/02/2012 15:53:06 :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date : 27/02/2012 16:17 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Objet : Re: [OMPI devel] Problem with the openmpi-default-hostfile 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (on the trunk) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That's strange - I run on slurm frequently and never have this 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem, and my default hostfile is present and empty. Do you have 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; anything in your default mca param file that might be telling us to 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use the hostfile? 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The only way I can find to get that behavior is if your default mca 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; param file includes the orte_default_hostfile value. In that case, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you are telling us to use the default hostfile, and so we will enforce it. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On my side, the default value of orte_default_hostfile is a pointer 
</span><br>
<span class="quotelev2">&gt; &gt; to etc/openmpi-default-hostfile. 
</span><br>
<span class="quotelev2">&gt; &gt; The command ompi_info -a gives : 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &lt;..../
</span><br>
<span class="quotelev2">&gt; &gt; etc/openmpi-default-hostfile&gt;, data source: default value) 
</span><br>
<span class="quotelev2">&gt; &gt; Name of the default hostfile (relative or absolute path, &quot;none&quot; to 
</span><br>
<span class="quotelev2">&gt; &gt; ignore environmental or default MCA param setting) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The following files are empty: 
</span><br>
<span class="quotelev2">&gt; &gt;  - .../etc/openmpi-mca-params.conf 
</span><br>
<span class="quotelev2">&gt; &gt;  - $HOME/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev2">&gt; &gt; Another solution for me is to put &quot;orte_default_hostfile=none&quot; in 
</span><br>
<span class="quotelev2">&gt; &gt; one of these files. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pascal 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 27, 2012, at 5:57 AM, pascal.deveze_at_[hidden] wrote: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have problems with the openmpi-default-hostfile since the 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; following patch on the trunk 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; changeset:   19874:088fc6c84a9f 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; user:        rhc 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; date:        Wed Feb 01 17:40:44 2012 +0000 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; summary:     In accordance with prior releases, we are supposed to 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; default to looking at the openmpi-default-hostfile as a default 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hostfile. Restore that behavior, but ignore the file if it is empty.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Allow the user to ignore any MCA param setting pointing to a default
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hostfile by setting the param to &quot;none&quot; (via cmd line or whatever) -
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this allows them to override a setting in the system default MCA 
</span><br>
<span class="quotelev2">&gt; &gt; param file. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; According to the summary of this patch, the openmpi-default-hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is ignored if it is empty. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But, when I run my jobs with slurm + mpirun, I get the following message: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; No nodes are available for this job, either due to a failure to 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; allocate nodes to the job, or allocated nodes being marked 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as unavailable (e.g., down, rebooting, or a process attempting 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to be relocated to another node when none are available). 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am able to run my job if: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  - either I put my node(s) in the file etc/openmpi-default-hostfile 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  - or use &quot;-mca orte_default_hostfile=none&quot; in the mpirun command line 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  - or &quot;export OMPI_MCA_orte_default_hostfile none&quot; in my environment 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It appears that an empty openmpi-default-hostfile is not ignored. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This patch seems not be complete 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Or do I misunderstand something ? 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Pascal Dev&#232;ze_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10627/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10628.php">Ralph Castain: "[OMPI devel] Trunk build problem"</a>
<li><strong>Previous message:</strong> <a href="10626.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>In reply to:</strong> <a href="10625.php">pascal.deveze_at_[hidden]: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the trunk)"</a>
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
