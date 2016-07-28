<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 18:27:05 2010" -->
<!-- isoreceived="20100614222705" -->
<!-- sent="Mon, 14 Jun 2010 16:26:57 -0600" -->
<!-- isosent="20100614222657" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="83C204CC-1AF8-4963-A9CD-8A27BA840EB8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="77AC221D-A325-4FD1-8632-FDFC3BA40F1C_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] A problem with 'mpiexec -launch-agent'<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-14 18:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I are taking a look at the logic in that code now - I know we thought we understood it back when we wrote it, but somehow it just doesn't look right any more...
<br>
<p><p>On Jun 14, 2010, at 4:13 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 13.06.2010 um 09:02 schrieb Zhang Linbo:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to OpenMPI and have encountered a problem with mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since I need to set up the execution environment for OpenMPI programs
</span><br>
<span class="quotelev2">&gt;&gt; on the execution nodes, I use the following command line to launch an
</span><br>
<span class="quotelev2">&gt;&gt; OMPI program:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is: the above command works fine if I invoke 'mpiexec'
</span><br>
<span class="quotelev2">&gt;&gt; without an absolute path just like above (assuming the PATH variable
</span><br>
<span class="quotelev2">&gt;&gt; is properly set), but if I prepend an absolute path to 'mpiexec', e.g.:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  /OMPI_dir/bin/mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using an absolute path is equivalent to use the --prefix option to `mpiexec`. Both ways lead obviously to the erroneous behavior you encounter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; then I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` PATH=/OMPI_dir/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/OMPI_dir/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; /some_path/myscript /OMPI_dir/bin/(null) --daemonize -mca ess env -mca orte_ess_jobid 1978662912 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1978662912.0;tcp://180.0.14.12:54844;tcp://190.0.14.12:54844&quot;'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason seems to be, that in case of a given prefix the assembly of the necessary command line includes some elements too much. I tried to circumvent this by a new case in &quot;orte/mca/plm/rsh/plm_rsh_module.c&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            if (orted_prefix != NULL) {
</span><br>
<span class="quotelev1">&gt;            asprintf (&amp;final_cmd,
</span><br>
<span class="quotelev1">&gt;                      &quot;%s%s%s PATH=%s/%s:$PATH ; export PATH ; &quot;
</span><br>
<span class="quotelev1">&gt;                      &quot;LD_LIBRARY_PATH=%s/%s:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; &quot;
</span><br>
<span class="quotelev1">&gt;                      &quot;%s&quot;,
</span><br>
<span class="quotelev1">&gt;                      (opal_prefix != NULL ? &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      (opal_prefix != NULL ? opal_prefix : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      (opal_prefix != NULL ? &quot; ; export OPAL_PREFIX;&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      prefix_dir, bin_base,
</span><br>
<span class="quotelev1">&gt;                      prefix_dir, lib_base,
</span><br>
<span class="quotelev1">&gt;                      orted_prefix );
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;            else {
</span><br>
<span class="quotelev1">&gt;            asprintf (&amp;final_cmd,
</span><br>
<span class="quotelev1">&gt;                      &quot;%s%s%s PATH=%s/%s:$PATH ; export PATH ; &quot;
</span><br>
<span class="quotelev1">&gt;                      &quot;LD_LIBRARY_PATH=%s/%s:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; &quot;
</span><br>
<span class="quotelev1">&gt;                      &quot;%s %s/%s/%s&quot;,
</span><br>
<span class="quotelev1">&gt;                      (opal_prefix != NULL ? &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      (opal_prefix != NULL ? opal_prefix : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      (opal_prefix != NULL ? &quot; ; export OPAL_PREFIX;&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      prefix_dir, bin_base,
</span><br>
<span class="quotelev1">&gt;                      prefix_dir, lib_base,
</span><br>
<span class="quotelev1">&gt;                      (orted_prefix != NULL ? orted_prefix : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                      prefix_dir, bin_base,
</span><br>
<span class="quotelev1">&gt;                      orted_cmd);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The name of the agent is for sake of easiness stored in &quot;opal_prefix&quot; AFAICS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is of course not a clean solution (as &quot;opal_prefix&quot; can't be used any more), but more a proof of concept, as only sh-like shelle are handled. Sure there are better ways to solve it. Anyway, it's a bug and should be filed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to know what causes the above problem and how should I deal with it.
</span><br>
<span class="quotelev2">&gt;&gt; I want to use absolute pathname of mpiexec to avoid possible inteferences
</span><br>
<span class="quotelev2">&gt;&gt; with other MPI installations. Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13321.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13323.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
