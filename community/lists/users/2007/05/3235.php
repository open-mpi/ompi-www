<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 12:35:46 2007" -->
<!-- isoreceived="20070510163546" -->
<!-- sent="Thu, 10 May 2007 18:35:36 +0200" -->
<!-- isosent="20070510163536" -->
<!-- name="Laurent Nguyen" -->
<!-- email="laurent.nguyen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4" -->
<!-- id="464349D8.6060603_at_idris.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200705100911.19007.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Laurent Nguyen (<em>laurent.nguyen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 12:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3236.php">Steve Wise: "[OMPI users] newbie question"</a>
<li><strong>Previous message:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>In reply to:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Reply:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>Ok, I thank you for all theses precisions. I also add &quot;static int 
<br>
pls_poe_cancel_operation(void)&quot; similary to you, and I can continue the 
<br>
compilation. But, I had another problem. In ompi/mpi/cxx/mpicxx.cc, 
<br>
three variables are already defined. The preprocessor set them to the 
<br>
constant of C. So, I put theses lines in comment:
<br>
&nbsp;&nbsp;&nbsp;//const int SEEK_SET = MPI_SEEK_SET;
<br>
&nbsp;&nbsp;&nbsp;//const int SEEK_CUR = MPI_SEEK_CUR;
<br>
&nbsp;&nbsp;&nbsp;//const int SEEK_END = MPI_SEEK_END;
<br>
<p>After that, I can achieve to compile OpenMPI. I didn't try to launch it 
<br>
in rsh mode. But I tried to launch it with POE.
<br>
<p>But firstly I remind here my experience with OpenMPI 1.1.x on IBM. My 
<br>
machine has some restriction, but I have two ways for launching an 
<br>
application:
<br>
- interactive mode: OpenMPI didn't work in this mode. I have this error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ export MP_PROCS=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ mpiexec -n 2 myprog.exe
<br>
&nbsp;&nbsp;ERROR: 0031-125  Fewer nodes (1) specified in 
<br>
/tmpdir/inter/int.ssos181-130093928631562/a-UWUb than tasks (2).
<br>
<p>&nbsp;&nbsp;I think it is because of my machine configuration
<br>
<p>- batch mode (for queuing): OpenMPI worked, but some functions didn't 
<br>
work (like MPI_Comm_Spawn). And it seems that performances during 
<br>
communications are very bad. (But in intra-nodes, it has the same 
<br>
performance as MPI constructor)
<br>
<p>Then, I hope OpenMPI 1.2.xxx work on SP4, but I have the same problem in 
<br>
interactive mode. And in batch mode, I have the error:
<br>
[0,0,0] ORTE_ERROR_LOG: Not implemented in file errmgr_hnp.c at line 90
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to cleanly terminate the daemons for this job. 
<br>
Returned value Not implemented instead of ORTE_SUCCESS.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>I think it is like you said before, POE isn't yet implemented.
<br>
<p>I was interested for OpenMPI because it support MPI-2. Since OpenMPI 
<br>
1.1.1, I install all the version on my SP4 for testing. My impressions are:
<br>
- it seems to be very difficult for developpers to implement OpenMPI on 
<br>
SP4 and I hope one day they achieve it ;)
<br>
- in my context, my institution puts many restrictions on the use of our 
<br>
machine, that's why my tests are incomplete. (On the same way, rsh 
<br>
command is forbidden between our nodes...)
<br>
<p>So, I really thank you for your explanations and precisions.
<br>
<p>Best Regards,
<br>
<p><p>**************************************
<br>
NGUYEN Anh-Khai Laurent
<br>
Equipe Support Utilisateur
<br>
<p>Email    :    laurent.nguyen_at_[hidden]
<br>
T&#233;l      :    01.69.35.85.66
<br>
Adresse  :    IDRIS - Institut du D&#233;veloppement et des Ressources en
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Informatique Scientifique
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CNRS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batiment 506
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BP 167
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F - 91403 ORSAY Cedex
<br>
Site Web :    <a href="http://www.idris.fr">http://www.idris.fr</a>
<br>
**************************************
<br>
<p>Tim Prins a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Laurent,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, as far as I know, none of the current Open MPI developers has 
</span><br>
<span class="quotelev1">&gt; access to a system with POE, so the POE process launcher has fallen into 
</span><br>
<span class="quotelev1">&gt; disrepair. Attached is a patch that should allow you to compile (however, you 
</span><br>
<span class="quotelev1">&gt; may also need to add #include &lt;signal.h&gt; to pls_poe_module.c). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though this should allow the compile to succeed, launching with POE may not 
</span><br>
<span class="quotelev1">&gt; work (it has not been tested for quite a while). If it doesn't work, you 
</span><br>
<span class="quotelev1">&gt; should use the rsh launcher instead (pass -mca pls rsh on the command line, 
</span><br>
<span class="quotelev1">&gt; or set the parameter using one of the methods here: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry about this. We have an IBM machine at my institution which I am told 
</span><br>
<span class="quotelev1">&gt; will have POE on it 'soon', but I am not sure when. Once it does, we will be 
</span><br>
<span class="quotelev1">&gt; working on getting POE well supported again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should mention that we do use LoadLeveler on one of our machines and Open 
</span><br>
<span class="quotelev1">&gt; MPI seems to work with it quite well. I would be interested in hearing how it 
</span><br>
<span class="quotelev1">&gt; works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps, let me know if this works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 10 May 2007 02:57 am, Laurent Nguyen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to install OpenMPI 1.2 but I saw there some problems when
</span><br>
<span class="quotelev2">&gt;&gt; compiling files with POE. When OpenMPI 1.2.1 was released, I saw in the
</span><br>
<span class="quotelev2">&gt;&gt; bug fixes that this problem was fixed. Then I tried, but it still
</span><br>
<span class="quotelev2">&gt;&gt; doesn't work. The problem comes from orte/mca/pls/poe/pls_poe_module.c.
</span><br>
<span class="quotelev2">&gt;&gt; A static function &quot;static int pls_poe_cancel_operation(void);&quot; is
</span><br>
<span class="quotelev2">&gt;&gt; declared but not defined in the files. I don't know if my configuration
</span><br>
<span class="quotelev2">&gt;&gt; make it bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, if someone achieved to install OpenMPI 1.2.1 on IBM, I would like to
</span><br>
<span class="quotelev2">&gt;&gt; have some advices.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: I attached some output files of my installation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/mca/pls/poe/pls_poe_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/pls/poe/pls_poe_module.c	(revision 14640)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/pls/poe/pls_poe_module.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -37,6 +37,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/util/opal_environ.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte/mca/gpr/gpr.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -69,7 +70,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;  static int pls_poe_signal_job(orte_jobid_t jobid, int32_t signal, opal_list_t *attrs);
</span><br>
<span class="quotelev2">&gt;&gt;  static int pls_poe_signal_proc(const orte_process_name_t *name, int32_t signal);
</span><br>
<span class="quotelev2">&gt;&gt;  static int pls_poe_finalize(void);
</span><br>
<span class="quotelev2">&gt;&gt; -static int pls_poe_cancel_operation(void);
</span><br>
<span class="quotelev2">&gt;&gt; +static int pls_poe_cancel_operation(void) {
</span><br>
<span class="quotelev2">&gt;&gt; +    return ORTE_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +    
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  orte_pls_base_module_t orte_pls_poe_module = {
</span><br>
<span class="quotelev2">&gt;&gt;      pls_poe_launch_job,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3236.php">Steve Wise: "[OMPI users] newbie question"</a>
<li><strong>Previous message:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>In reply to:</strong> <a href="3234.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Reply:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
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
