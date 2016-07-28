<?
$subject_val = "Re: [OMPI devel] orte_rml_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 07:18:54 2009" -->
<!-- isoreceived="20091105121854" -->
<!-- sent="Thu, 5 Nov 2009 17:48:10 +0530" -->
<!-- isosent="20091105121810" -->
<!-- name="Amit Sharma" -->
<!-- email="amit.sharma5_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_rml_base_select failed" -->
<!-- id="01a601ca5e12$0a37ece0$ab925880_at_EC4HP167996" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc0911030938t529acc49oc9341ccf97596e5e_at_mail.gmail.com" -->
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
<strong>From:</strong> Amit Sharma (<em>amit.sharma5_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 07:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>In reply to:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Reply:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had built OMPI with &quot;-mca rml_base_verbose 10 -mca oob_base_verbose 10&quot;
<br>
but still no luck. On some machine, where mpirun is working properly, it is
<br>
giving correct debug messages as below:
<br>
&nbsp;
<br>
# mpirun -mca rml_base_verbose 10 -mca oob_base_verbose 10 arch
<br>
[linux] mca: base: components_open: Looking for rml components
<br>
[linux] mca: base: components_open: opening rml components
<br>
[linux] mca: base: components_open: found loaded component oob
<br>
[linux] mca: base: components_open: component oob has no register function
<br>
[linux] mca: base: components_open: Looking for oob components
<br>
[linux] mca: base: components_open: opening oob components
<br>
[linux] mca: base: components_open: found loaded component tcp
<br>
[linux] mca: base: components_open: component tcp has no register function
<br>
[linux] mca: base: components_open: component tcp open function successful
<br>
[linux] mca: base: components_open: component oob open function successful
<br>
[linux] orte_rml_base_select: initializing rml component oob
<br>
[linux] [[55739,0],0] rml:base:update:contact:info got uri
<br>
3652911104.0;tcp://128.88.143.227:39207
<br>
x86_64
<br>
[linux] mca: base: close: component tcp closed
<br>
[linux] mca: base: close: unloading component tcp
<br>
[linux] mca: base: close: component oob closed
<br>
[linux] mca: base: close: unloading component oob
<br>
#
<br>
&nbsp;
<br>
But on the problem reported machine, still the problem is same. It is not
<br>
showing the debug messages. Directly it is giving the error as below:
<br>
&nbsp;
<br>
&nbsp;# mpirun arch
<br>
<p>[NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at
<br>
line 182
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can fail
<br>
during orte_init; some of which are due to configuration or environment
<br>
problems. This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>orte_rml_base_select failed
<br>
--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[host-desktop1:09127] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_system_init.c at line 42 [host-desktop1:09127] [NO-NAME]
<br>
ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly. The error occured while
<br>
attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Not getting the root cause of failure. Please guide.
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
Amit Sharma
<br>
Sr. Software Engineer,
<br>
Wipro Technologies, Bangalore
<br>
&nbsp;
<br>
&nbsp;
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p>From: rhc.openmpi_at_[hidden] [mailto:rhc.openmpi_at_[hidden]] On Behalf Of
<br>
Ralph Castain
<br>
Sent: Tuesday, November 03, 2009 11:08 PM
<br>
To: amit.sharma5_at_[hidden]; Open MPI Developers
<br>
Subject: Re: [OMPI devel] orte_rml_base_select failed
<br>
<p><p>No parameter will help - the issue is that we couldn't find a TCP interface
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
<p><p><p>On Tue, Nov 3, 2009 at 4:42 AM, Amit Sharma &lt;amit.sharma5_at_[hidden]&gt; wrote:
<br>
<p><p><p><p>Hi,
<br>
<p>I am using open-mpi version 1.3.2. on SLES 11 machine. I have built it
<br>
simply like ./configure =&gt; make =&gt; make install.
<br>
<p>I am facing the following error with mpirun on some machines.
<br>
<p>Root # mpirun -np 2 ls
<br>
<p>[NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at
<br>
line 182
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can fail
<br>
during orte_init; some of which are due to configuration or environment
<br>
problems. This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>orte_rml_base_select failed
<br>
--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[host-desktop1:09127] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_system_init.c at line 42 [host-desktop1:09127] [NO-NAME]
<br>
ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly. The error occured while
<br>
attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Can you please guide me to resolve this issue. Is there any run time
<br>
environmental variable be set to get rid of this issue?
<br>
<p><p>Thanks in Advance,
<br>
Amit
<br>
<p><p><p><p>Please do not print this email unless it is absolutely necessary.
<br>
<p>The information contained in this electronic message and any attachments to
<br>
this message are intended for the exclusive use of the addressee(s) and may
<br>
contain proprietary, confidential or privileged information. If you are not
<br>
the intended recipient, you should not disseminate, distribute or copy this
<br>
e-mail. Please notify the sender immediately and destroy all copies of this
<br>
message and any attachments.
<br>
<p>WARNING: Computer viruses can be transmitted via email. The recipient should
<br>
check this email and any attachments for the presence of viruses. The
<br>
company accepts no liability for any damage caused by any virus transmitted
<br>
by this email.
<br>
<p>www.wipro.com
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><p>Please do not print this email unless it is absolutely necessary. 
<br>
<p>The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
<br>
<p>WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
<br>
<p>www.wipro.com
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>In reply to:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Reply:</strong> <a href="7092.php">Jeff Squyres: "Re: [OMPI devel] orte_rml_base_select failed"</a>
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
