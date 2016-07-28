<?
$subject_val = "Re: [OMPI users] Question on ssh search path";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 15:05:26 2012" -->
<!-- isoreceived="20121017190526" -->
<!-- sent="Wed, 17 Oct 2012 12:05:19 -0700" -->
<!-- isosent="20121017190519" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on ssh search path" -->
<!-- id="3577289E-EFA2-43EA-9666-4829EC7ADB8A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="507DD069.1040102_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on ssh search path<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 15:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20504.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20502.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>In reply to:</strong> <a href="20495.php">marco atzeri: "[OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20504.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Reply:</strong> <a href="20504.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely certain, but I don't believe we have ever supported cygwin - I believe we only support native Windows.
<br>
<p><p>On Oct 16, 2012, at 2:23 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am playing on OpenMpi(1.6.2) on cygwin platform, and
</span><br>
<span class="quotelev1">&gt; while compile and check were fine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the simple &quot;mpirun hello_c.exe&quot; is failing with the criptic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##################################################################
</span><br>
<span class="quotelev1">&gt; [MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file /pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/mca/plm/rsh/plm_rsh_module.c at line 197
</span><br>
<span class="quotelev1">&gt; [MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file /pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/mca/ess/hnp/ess_hnp_module.c at line 228
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_plm_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file /pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/runtime/orte_init.c at line 128
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MARCOATZERI:07440] [[15164,0],0] ORTE_ERROR_LOG: Not found in file /pub/devel/openmpi/openmpi-1.6.2-1/src/openmpi-1.6.2/orte/tools/orterun/orterun.c at line 694
</span><br>
<span class="quotelev1">&gt; #####################################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; trying to debug I notice a strange pattern on ssh search:
</span><br>
<span class="quotelev1">&gt; 1)  ssh is only searched on the PATH directories that end with &quot;bin&quot;
</span><br>
<span class="quotelev1">&gt;    other directories are skipped.
</span><br>
<span class="quotelev1">&gt; 2) //usr/bin/ssh is not on the PATH but is searched.
</span><br>
<span class="quotelev1">&gt;   Why and where is defined in the code ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  103  321183 [main] orterun 6304 normalize_posix_path: src /home/marco/bin/ssh
</span><br>
<span class="quotelev1">&gt;  100  324353 [main] orterun 6304 normalize_posix_path: src /usr/local/bin/ssh
</span><br>
<span class="quotelev1">&gt;   99  327381 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt;   36 1805679 [main] orterun 6304 normalize_posix_path: src /home/marco/bin/ssh
</span><br>
<span class="quotelev1">&gt;   34 1807010 [main] orterun 6304 normalize_posix_path: src /usr/local/bin/ssh
</span><br>
<span class="quotelev1">&gt;   34 1808236 [main] orterun 6304 normalize_posix_path: src /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt;   37 1810858 [main] orterun 6304 normalize_posix_path: src //usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as immediately after the &quot;//&quot; search mpirun crashes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 703 9508968 [WNetOpenEnum] orterun 8020 cygthread::stub: thread 'WNetOpenEnum', id 0x15A0, stack_ptr 0x28BAD40
</span><br>
<span class="quotelev1">&gt; --- Process 8020, exception 000006AB at 776BB9BC
</span><br>
<span class="quotelev1">&gt; 41286 9550254 [main] orterun 8020 fs_info::update: Cannot get volume attributes (\??\UNC), C0000010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect this search is the culprit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If someone is interested I put here
</span><br>
<span class="quotelev1">&gt; <a href="http://matzeri.altervista.org/works/ompi/">http://matzeri.altervista.org/works/ompi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all the config, check and make logs plus the ompi_info output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20504.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20502.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>In reply to:</strong> <a href="20495.php">marco atzeri: "[OMPI users] Question on ssh search path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20504.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Reply:</strong> <a href="20504.php">marco atzeri: "Re: [OMPI users] Question on ssh search path"</a>
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
