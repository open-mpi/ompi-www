<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 18:13:28 2010" -->
<!-- isoreceived="20100614221328" -->
<!-- sent="Tue, 15 Jun 2010 00:13:10 +0200" -->
<!-- isosent="20100614221310" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="77AC221D-A325-4FD1-8632-FDFC3BA40F1C_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C14827A.6070206_at_lsec.cc.ac.cn" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-14 18:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13320.php">Nguyen Toan: "[OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="13316.php">Zhang Linbo: "[OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 13.06.2010 um 09:02 schrieb Zhang Linbo:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to OpenMPI and have encountered a problem with mpiexec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I need to set up the execution environment for OpenMPI programs
</span><br>
<span class="quotelev1">&gt; on the execution nodes, I use the following command line to launch an
</span><br>
<span class="quotelev1">&gt; OMPI program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is: the above command works fine if I invoke 'mpiexec'
</span><br>
<span class="quotelev1">&gt; without an absolute path just like above (assuming the PATH variable
</span><br>
<span class="quotelev1">&gt; is properly set), but if I prepend an absolute path to 'mpiexec',  
</span><br>
<span class="quotelev1">&gt; e.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /OMPI_dir/bin/mpiexec -launch-agent /some_path/myscript ....
</span><br>
<p>using an absolute path is equivalent to use the --prefix option to  
<br>
`mpiexec`. Both ways lead obviously to the erroneous behavior you  
<br>
encounter.
<br>
<p><p><span class="quotelev1">&gt; then I get the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` PATH=/OMPI_dir/bin:$PATH ; export PATH ;  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/OMPI_dir/lib:$LD_LIBRARY_PATH ; export  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ; /some_path/myscript /OMPI_dir/bin/(null) -- 
</span><br>
<span class="quotelev1">&gt; daemonize -mca ess env -mca orte_ess_jobid 1978662912 -mca  
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri  
</span><br>
<span class="quotelev1">&gt; &quot;1978662912.0;tcp://180.0.14.12:54844;tcp://190.0.14.12:54844&quot;'
</span><br>
<p>Reason seems to be, that in case of a given prefix the assembly of the  
<br>
necessary command line includes some elements too much. I tried to  
<br>
circumvent this by a new case in &quot;orte/mca/plm/rsh/plm_rsh_module.c&quot;:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (orted_prefix != NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf (&amp;final_cmd,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s%s%s PATH=%s/%s:$PATH ; export PATH ; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;LD_LIBRARY_PATH=%s/%s:$LD_LIBRARY_PATH ;  
<br>
export LD_LIBRARY_PATH ; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_prefix != NULL ? &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_prefix != NULL ? opal_prefix : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_prefix != NULL ? &quot; ; export  
<br>
OPAL_PREFIX;&quot; : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir, bin_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir, lib_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted_prefix );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf (&amp;final_cmd,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s%s%s PATH=%s/%s:$PATH ; export PATH ; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;LD_LIBRARY_PATH=%s/%s:$LD_LIBRARY_PATH ;  
<br>
export LD_LIBRARY_PATH ; &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s %s/%s/%s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_prefix != NULL ? &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_prefix != NULL ? opal_prefix : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(opal_prefix != NULL ? &quot; ; export  
<br>
OPAL_PREFIX;&quot; : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir, bin_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir, lib_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(orted_prefix != NULL ? orted_prefix : &quot;&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix_dir, bin_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted_cmd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>The name of the agent is for sake of easiness stored in &quot;opal_prefix&quot;  
<br>
AFAICS.
<br>
<p>This is of course not a clean solution (as &quot;opal_prefix&quot; can't be used  
<br>
any more), but more a proof of concept, as only sh-like shelle are  
<br>
handled. Sure there are better ways to solve it. Anyway, it's a bug  
<br>
and should be filed
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I'd like to know what causes the above problem and how should I deal  
</span><br>
<span class="quotelev1">&gt; with it.
</span><br>
<span class="quotelev1">&gt; I want to use absolute pathname of mpiexec to avoid possible  
</span><br>
<span class="quotelev1">&gt; inteferences
</span><br>
<span class="quotelev1">&gt; with other MPI installations. Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LB
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13320.php">Nguyen Toan: "[OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="13316.php">Zhang Linbo: "[OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Reply:</strong> <a href="13329.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
