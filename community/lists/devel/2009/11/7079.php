<?
$subject_val = "Re: [OMPI devel] orte_rml_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 12:38:35 2009" -->
<!-- isoreceived="20091103173835" -->
<!-- sent="Tue, 3 Nov 2009 10:38:29 -0700" -->
<!-- isosent="20091103173829" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_rml_base_select failed" -->
<!-- id="71d2d8cc0911030938t529acc49oc9341ccf97596e5e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00a301ca5c7a$ac1da570$ab925880_at_EC4HP167996" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_rml_base_select failed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 12:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>Previous message:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Reply:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No parameter will help - the issue is that we couldn't find a TCP interface
<br>
to use for wiring up the job. First thing you might check is that you have a
<br>
TCP interface alive and active - can be the loopback interface, but you need
<br>
at least something.
<br>
<p>If you do have an interface, then you might rebuild OMPI with --enable-debug
<br>
so you can get some diagnostics. Then run the job again with
<br>
<p>&nbsp;-mca rml_base_verbose 10 -mca oob_base_verbose 10
<br>
<p>and see what diagnostic error messages emerge.
<br>
<p><p>On Tue, Nov 3, 2009 at 4:42 AM, Amit Sharma &lt;amit.sharma5_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using open-mpi version 1.3.2. on SLES 11 machine. I have built it
</span><br>
<span class="quotelev1">&gt; simply like ./configure =&gt; make =&gt; make install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am facing the following error with mpirun on some machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Root # mpirun -np 2 ls
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at
</span><br>
<span class="quotelev1">&gt; line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can fail
</span><br>
<span class="quotelev1">&gt; during orte_init; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [host-desktop1:09127] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 42 [host-desktop1:09127] [NO-NAME]
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly. The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please guide me to resolve this issue. Is there any run time
</span><br>
<span class="quotelev1">&gt; environmental variable be set to get rid of this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in Advance,
</span><br>
<span class="quotelev1">&gt; Amit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to
</span><br>
<span class="quotelev1">&gt; this message are intended for the exclusive use of the addressee(s) and may
</span><br>
<span class="quotelev1">&gt; contain proprietary, confidential or privileged information. If you are not
</span><br>
<span class="quotelev1">&gt; the intended recipient, you should not disseminate, distribute or copy this
</span><br>
<span class="quotelev1">&gt; e-mail. Please notify the sender immediately and destroy all copies of this
</span><br>
<span class="quotelev1">&gt; message and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
<span class="quotelev1">&gt; should check this email and any attachments for the presence of viruses. The
</span><br>
<span class="quotelev1">&gt; company accepts no liability for any damage caused by any virus transmitted
</span><br>
<span class="quotelev1">&gt; by this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>Previous message:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Reply:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
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
