<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 16:35:46 2007" -->
<!-- isoreceived="20070510203546" -->
<!-- sent="Thu, 10 May 2007 15:35:36 -0500" -->
<!-- isosent="20070510203536" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4" -->
<!-- id="200705101535.36600.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="464349D8.6060603_at_idris.fr" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 16:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
<li><strong>Previous message:</strong> <a href="3236.php">Steve Wise: "[OMPI users] newbie question"</a>
<li><strong>In reply to:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 10 May 2007 11:35 am, Laurent Nguyen wrote:
<br>
<span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I thank you for all theses precisions. I also add &quot;static int
</span><br>
<span class="quotelev1">&gt; pls_poe_cancel_operation(void)&quot; similary to you, and I can continue the
</span><br>
<span class="quotelev1">&gt; compilation. But, I had another problem. In ompi/mpi/cxx/mpicxx.cc,
</span><br>
<span class="quotelev1">&gt; three variables are already defined. The preprocessor set them to the
</span><br>
<span class="quotelev1">&gt; constant of C. So, I put theses lines in comment:
</span><br>
<span class="quotelev1">&gt;    //const int SEEK_SET = MPI_SEEK_SET;
</span><br>
<span class="quotelev1">&gt;    //const int SEEK_CUR = MPI_SEEK_CUR;
</span><br>
<span class="quotelev1">&gt;    //const int SEEK_END = MPI_SEEK_END;
</span><br>
I remember there was a problem with these constants earlier. You should be 
<br>
able to disable them by passing --disable-mpi-cxx-seek to configure. 
<br>
<p>&lt;snip&gt;
<br>
<span class="quotelev1">&gt; I was interested for OpenMPI because it support MPI-2. Since OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.1.1, I install all the version on my SP4 for testing. My impressions are:
</span><br>
<span class="quotelev1">&gt; - it seems to be very difficult for developpers to implement OpenMPI on
</span><br>
<span class="quotelev1">&gt; SP4 and I hope one day they achieve it ;)
</span><br>
<span class="quotelev1">&gt; - in my context, my institution puts many restrictions on the use of our
</span><br>
<span class="quotelev1">&gt; machine, that's why my tests are incomplete. (On the same way, rsh
</span><br>
<span class="quotelev1">&gt; command is forbidden between our nodes...)
</span><br>
Note that the name 'rsh' is a bit of a misnomer. The rsh launcher actually 
<br>
uses ssh by default.
<br>
<p>Tim
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I really thank you for your explanations and precisions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; NGUYEN Anh-Khai Laurent
</span><br>
<span class="quotelev1">&gt; Equipe Support Utilisateur
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Email    :    laurent.nguyen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; T&#233;l      :    01.69.35.85.66
</span><br>
<span class="quotelev1">&gt; Adresse  :    IDRIS - Institut du D&#233;veloppement et des Ressources en
</span><br>
<span class="quotelev1">&gt;                Informatique Scientifique
</span><br>
<span class="quotelev1">&gt;                CNRS
</span><br>
<span class="quotelev1">&gt;                Batiment 506
</span><br>
<span class="quotelev1">&gt;                BP 167
</span><br>
<span class="quotelev1">&gt;                F - 91403 ORSAY Cedex
</span><br>
<span class="quotelev1">&gt; Site Web :    <a href="http://www.idris.fr">http://www.idris.fr</a>
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Prins a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Laurent,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, as far as I know, none of the current Open MPI developers
</span><br>
<span class="quotelev2">&gt; &gt; has access to a system with POE, so the POE process launcher has fallen
</span><br>
<span class="quotelev2">&gt; &gt; into disrepair. Attached is a patch that should allow you to compile
</span><br>
<span class="quotelev2">&gt; &gt; (however, you may also need to add #include &lt;signal.h&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; pls_poe_module.c).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Though this should allow the compile to succeed, launching with POE may
</span><br>
<span class="quotelev2">&gt; &gt; not work (it has not been tested for quite a while). If it doesn't work,
</span><br>
<span class="quotelev2">&gt; &gt; you should use the rsh launcher instead (pass -mca pls rsh on the command
</span><br>
<span class="quotelev2">&gt; &gt; line, or set the parameter using one of the methods here:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry about this. We have an IBM machine at my institution which I am
</span><br>
<span class="quotelev2">&gt; &gt; told will have POE on it 'soon', but I am not sure when. Once it does, we
</span><br>
<span class="quotelev2">&gt; &gt; will be working on getting POE well supported again.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I should mention that we do use LoadLeveler on one of our machines and
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI seems to work with it quite well. I would be interested in
</span><br>
<span class="quotelev2">&gt; &gt; hearing how it works for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps, let me know if this works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday 10 May 2007 02:57 am, Laurent Nguyen wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried to install OpenMPI 1.2 but I saw there some problems when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compiling files with POE. When OpenMPI 1.2.1 was released, I saw in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bug fixes that this problem was fixed. Then I tried, but it still
</span><br>
<span class="quotelev3">&gt; &gt;&gt; doesn't work. The problem comes from orte/mca/pls/poe/pls_poe_module.c.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A static function &quot;static int pls_poe_cancel_operation(void);&quot; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; declared but not defined in the files. I don't know if my configuration
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make it bug.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So, if someone achieved to install OpenMPI 1.2.1 on IBM, I would like to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have some advices.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you for your help,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PS: I attached some output files of my installation
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Index: orte/mca/pls/poe/pls_poe_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- orte/mca/pls/poe/pls_poe_module.c	(revision 14640)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ orte/mca/pls/poe/pls_poe_module.c	(working copy)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -37,6 +37,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  #include &quot;opal/util/argv.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  #include &quot;opal/util/opal_environ.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  #include &quot;orte/mca/gpr/gpr.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -69,7 +70,10 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  static int pls_poe_signal_job(orte_jobid_t jobid, int32_t signal,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_list_t *attrs); static int pls_poe_signal_proc(const
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte_process_name_t *name, int32_t signal); static int
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pls_poe_finalize(void);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -static int pls_poe_cancel_operation(void);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +static int pls_poe_cancel_operation(void) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    return ORTE_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +}
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  orte_pls_base_module_t orte_pls_poe_module = {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      pls_poe_launch_job,
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
<li><strong>Next message:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
<li><strong>Previous message:</strong> <a href="3236.php">Steve Wise: "[OMPI users] newbie question"</a>
<li><strong>In reply to:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
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
