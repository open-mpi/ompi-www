<?
$subject_val = "Re: [OMPI users] A problem with 'mpiexec -launch-agent'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 14 18:37:16 2010" -->
<!-- isoreceived="20100614223716" -->
<!-- sent="Tue, 15 Jun 2010 00:37:03 +0200" -->
<!-- isosent="20100614223703" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A problem with 'mpiexec -launch-agent'" -->
<!-- id="8B90113E-86B5-44DD-B934-F67A7AADCB7A_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="83C204CC-1AF8-4963-A9CD-8A27BA840EB8_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-06-14 18:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.06.2010 um 00:26 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Jeff and I are taking a look at the logic in that code now - I know  
</span><br>
<span class="quotelev1">&gt; we thought we understood it back when we wrote it, but somehow it  
</span><br>
<span class="quotelev1">&gt; just doesn't look right any more...
</span><br>
<p>To avoid confusion: I meant &quot;orted_prefix&quot; below which holds the name  
<br>
of the launch-agent and can't be used with this demonstration fix.
<br>
<p>Sorry for the typo.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2010, at 4:13 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 13.06.2010 um 09:02 schrieb Zhang Linbo:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm new to OpenMPI and have encountered a problem with mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I need to set up the execution environment for OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the execution nodes, I use the following command line to launch  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is: the above command works fine if I invoke 'mpiexec'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without an absolute path just like above (assuming the PATH variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is properly set), but if I prepend an absolute path to 'mpiexec',  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /OMPI_dir/bin/mpiexec -launch-agent /some_path/myscript ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using an absolute path is equivalent to use the --prefix option to  
</span><br>
<span class="quotelev2">&gt;&gt; `mpiexec`. Both ways lead obviously to the erroneous behavior you  
</span><br>
<span class="quotelev2">&gt;&gt; encounter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then I get the following error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: -c: line 0: ` PATH=/OMPI_dir/bin:$PATH ; export PATH ;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/OMPI_dir/lib:$LD_LIBRARY_PATH ; export  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH ; /some_path/myscript /OMPI_dir/bin/(null) -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemonize -mca ess env -mca orte_ess_jobid 1978662912 -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1978662912.0;tcp://180.0.14.12:54844;tcp://190.0.14.12:54844&quot;'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reason seems to be, that in case of a given prefix the assembly of  
</span><br>
<span class="quotelev2">&gt;&gt; the necessary command line includes some elements too much. I tried  
</span><br>
<span class="quotelev2">&gt;&gt; to circumvent this by a new case in &quot;orte/mca/plm/rsh/ 
</span><br>
<span class="quotelev2">&gt;&gt; plm_rsh_module.c&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           if (orted_prefix != NULL) {
</span><br>
<span class="quotelev2">&gt;&gt;           asprintf (&amp;final_cmd,
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;%s%s%s PATH=%s/%s:$PATH ; export PATH ; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;LD_LIBRARY_PATH=%s/%s:$LD_LIBRARY_PATH ;  
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH ; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                     (opal_prefix != NULL ? &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     (opal_prefix != NULL ? opal_prefix : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     (opal_prefix != NULL ? &quot; ; export  
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PREFIX;&quot; : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     prefix_dir, bin_base,
</span><br>
<span class="quotelev2">&gt;&gt;                     prefix_dir, lib_base,
</span><br>
<span class="quotelev2">&gt;&gt;                     orted_prefix );
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt;           else {
</span><br>
<span class="quotelev2">&gt;&gt;           asprintf (&amp;final_cmd,
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;%s%s%s PATH=%s/%s:$PATH ; export PATH ; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;LD_LIBRARY_PATH=%s/%s:$LD_LIBRARY_PATH ;  
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH ; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;                     &quot;%s %s/%s/%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                     (opal_prefix != NULL ? &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     (opal_prefix != NULL ? opal_prefix : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     (opal_prefix != NULL ? &quot; ; export  
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PREFIX;&quot; : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     prefix_dir, bin_base,
</span><br>
<span class="quotelev2">&gt;&gt;                     prefix_dir, lib_base,
</span><br>
<span class="quotelev2">&gt;&gt;                     (orted_prefix != NULL ? orted_prefix : &quot;&quot;),
</span><br>
<span class="quotelev2">&gt;&gt;                     prefix_dir, bin_base,
</span><br>
<span class="quotelev2">&gt;&gt;                     orted_cmd);
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The name of the agent is for sake of easiness stored in  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_prefix&quot; AFAICS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is of course not a clean solution (as &quot;opal_prefix&quot; can't be  
</span><br>
<span class="quotelev2">&gt;&gt; used any more), but more a proof of concept, as only sh-like shelle  
</span><br>
<span class="quotelev2">&gt;&gt; are handled. Sure there are better ways to solve it. Anyway, it's a  
</span><br>
<span class="quotelev2">&gt;&gt; bug and should be filed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to know what causes the above problem and how should I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deal with it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to use absolute pathname of mpiexec to avoid possible  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inteferences
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with other MPI installations. Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13322.php">Ralph Castain: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13324.php">Terry Frankcombe: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
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
