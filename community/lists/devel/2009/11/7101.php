<?
$subject_val = "Re: [OMPI devel] orte_rml_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 00:17:19 2009" -->
<!-- isoreceived="20091106051719" -->
<!-- sent="Fri, 6 Nov 2009 10:46:33 +0530" -->
<!-- isosent="20091106051633" -->
<!-- name="Amit Sharma" -->
<!-- email="amit.sharma5_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_rml_base_select failed" -->
<!-- id="01ba01ca5ea0$4ef75210$ab925880_at_EC4HP167996" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] orte_rml_base_select failed" -->
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
<strong>Date:</strong> 2009-11-06 00:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Maybe in reply to:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>That is my mistake.
<br>
<p>I sent the wrong dump. Please see the screenshot. I am using mpirun version
<br>
1.3.2 and the shown error i am getting even with verbose option.
<br>
<p><p><p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>-----Original Message-----
<br>
<p>From: Jeff Squyres [ &lt;mailto:jsquyres_at_[hidden]&gt; mailto:jsquyres_at_[hidden]] 
<br>
<p>Sent: Thursday, November 05, 2009 6:55 PM
<br>
<p>To: amit.sharma5_at_[hidden]; Open MPI Developers
<br>
<p>Cc: Ralph Castain
<br>
<p>Subject: Re: [OMPI devel] orte_rml_base_select failed
<br>
<p>I think you must be accidentally mixing Open MPI versions -- the file
<br>
&quot;orte/runtime/orte_system_init.c&quot; does not exist in the Open MPI v1.3
<br>
series. It did exist, however, back in the Open MPI 1.2 series.
<br>
<p>Could you double check that the OMPI that is installed (and is being
<br>
<p>found/used) on host-desktop1 is the same version as all the others?
<br>
<p>&nbsp;
<br>
<p>On Nov 5, 2009, at 7:18 AM, Amit Sharma wrote:
<br>
<p><span class="quotelev1">&gt; I had built OMPI with &quot;-mca rml_base_verbose 10 -mca oob_base_verbose 
</span><br>
<p><span class="quotelev1">&gt; 10&quot; but still no luck. On some machine, where mpirun is working 
</span><br>
<p><span class="quotelev1">&gt; properly, it is giving correct debug messages as
</span><br>
<p><span class="quotelev1">&gt; below:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; # mpirun -mca rml_base_verbose 10 -mca oob_base_verbose 10 arch 
</span><br>
<p><span class="quotelev1">&gt; [linux] mca: base: components_open: Looking for rml components [linux] 
</span><br>
<p><span class="quotelev1">&gt; mca: base: components_open: opening rml components [linux] mca: base: 
</span><br>
<p><span class="quotelev1">&gt; components_open: found loaded component oob [linux] mca: base: 
</span><br>
<p><span class="quotelev1">&gt; components_open: component oob has no register function [linux] mca: 
</span><br>
<p><span class="quotelev1">&gt; base: components_open: Looking for oob components [linux] mca: base: 
</span><br>
<p><span class="quotelev1">&gt; components_open: opening oob components [linux] mca: base: 
</span><br>
<p><span class="quotelev1">&gt; components_open: found loaded component tcp [linux] mca: base: 
</span><br>
<p><span class="quotelev1">&gt; components_open: component tcp has no register function [linux] mca: 
</span><br>
<p><span class="quotelev1">&gt; base: components_open: component tcp open function successful [linux] 
</span><br>
<p><span class="quotelev1">&gt; mca: base: components_open: component oob open function successful 
</span><br>
<p><span class="quotelev1">&gt; [linux] orte_rml_base_select: initializing rml component oob [linux] 
</span><br>
<p><span class="quotelev1">&gt; [[55739,0],0] rml:base:update:contact:info got uri
</span><br>
<p><span class="quotelev1">&gt; 3652911104.0;tcp://128.88.143.227:39207
</span><br>
<p><span class="quotelev1">&gt; x86_64
</span><br>
<p><span class="quotelev1">&gt; [linux] mca: base: close: component tcp closed [linux] mca: base: 
</span><br>
<p><span class="quotelev1">&gt; close: unloading component tcp [linux] mca: base: close: component oob 
</span><br>
<p><span class="quotelev1">&gt; closed [linux] mca: base: close: unloading component oob #
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; But on the problem reported machine, still the problem is same. It is 
</span><br>
<p><span class="quotelev1">&gt; not showing the debug messages. Directly it is giving the error as 
</span><br>
<p><span class="quotelev1">&gt; below:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; # mpirun arch
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/ 
</span><br>
<p><span class="quotelev1">&gt; orte_init_stage1.c at line 182
</span><br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; ---- It looks like orte_init failed for some reason; your parallel 
</span><br>
<p><span class="quotelev1">&gt; process is likely to abort. There are many reasons that a parallel 
</span><br>
<p><span class="quotelev1">&gt; process can fail during orte_init; some of which are due to 
</span><br>
<p><span class="quotelev1">&gt; configuration or environment problems. This failure appears to be an 
</span><br>
<p><span class="quotelev1">&gt; internal failure; here's some additional information (which may only 
</span><br>
<p><span class="quotelev1">&gt; be relevant to an Open MPI
</span><br>
<p><span class="quotelev1">&gt; developer):
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; orte_rml_base_select failed
</span><br>
<p><span class="quotelev1">&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; ---- [host-desktop1:09127] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
</span><br>
<p><span class="quotelev1">&gt; runtime/orte_system_init.c at line 42 [host-desktop1:09127] [NO-NAME]
</span><br>
<p><span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
</span><br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; ---- Open RTE was unable to initialize properly. The error occured 
</span><br>
<p><span class="quotelev1">&gt; while attempting to orte_init(). Returned value -13 instead of 
</span><br>
<p><span class="quotelev1">&gt; ORTE_SUCCESS.
</span><br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; ---- Not getting the root cause of failure. Please guide.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Regards,
</span><br>
<p><span class="quotelev1">&gt; Amit Sharma
</span><br>
<p><span class="quotelev1">&gt; Sr. Software Engineer,
</span><br>
<p><span class="quotelev1">&gt; Wipro Technologies, Bangalore
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; From: rhc.openmpi_at_[hidden] [ &lt;mailto:rhc.openmpi_at_[hidden]&gt;
</span><br>
mailto:rhc.openmpi_at_[hidden]] On Behalf 
<br>
<p><span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<p><span class="quotelev1">&gt; Sent: Tuesday, November 03, 2009 11:08 PM
</span><br>
<p><span class="quotelev1">&gt; To: amit.sharma5_at_[hidden]; Open MPI Developers
</span><br>
<p><span class="quotelev1">&gt; Subject: Re: [OMPI devel] orte_rml_base_select failed
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; No parameter will help - the issue is that we couldn't find a TCP 
</span><br>
<p><span class="quotelev1">&gt; interface to use for wiring up the job. First thing you might check is 
</span><br>
<p><span class="quotelev1">&gt; that you have a TCP interface alive and active - can be the loopback 
</span><br>
<p><span class="quotelev1">&gt; interface, but you need at least something.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; If you do have an interface, then you might rebuild OMPI with -- 
</span><br>
<p><span class="quotelev1">&gt; enable-debug so you can get some diagnostics. Then run the job again 
</span><br>
<p><span class="quotelev1">&gt; with
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; -mca rml_base_verbose 10 -mca oob_base_verbose 10
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; and see what diagnostic error messages emerge.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; On Tue, Nov 3, 2009 at 4:42 AM, Amit Sharma &lt;amit.sharma5_at_[hidden]&gt;
</span><br>
<p><span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; I am using open-mpi version 1.3.2. on SLES 11 machine. I have built it
</span><br>
<p><span class="quotelev1">&gt; simply like ./configure =&gt; make =&gt; make install.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; I am facing the following error with mpirun on some machines.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Root # mpirun -np 2 ls
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/ 
</span><br>
<p><span class="quotelev1">&gt; orte_init_stage1.c at
</span><br>
<p><span class="quotelev1">&gt; line 182
</span><br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel 
</span><br>
<p><span class="quotelev1">&gt; process is
</span><br>
<p><span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can 
</span><br>
<p><span class="quotelev1">&gt; fail
</span><br>
<p><span class="quotelev1">&gt; during orte_init; some of which are due to configuration or 
</span><br>
<p><span class="quotelev1">&gt; environment
</span><br>
<p><span class="quotelev1">&gt; problems. This failure appears to be an internal failure; here's some
</span><br>
<p><span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<p><span class="quotelev1">&gt; developer):
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; orte_rml_base_select failed
</span><br>
<p><span class="quotelev1">&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; [host-desktop1:09127] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<p><span class="quotelev1">&gt; runtime/orte_system_init.c at line 42 [host-desktop1:09127] [NO-NAME]
</span><br>
<p><span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
</span><br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; Open RTE was unable to initialize properly. The error occured while
</span><br>
<p><span class="quotelev1">&gt; attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
</span><br>
<p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Can you please guide me to resolve this issue. Is there any run time
</span><br>
<p><span class="quotelev1">&gt; environmental variable be set to get rid of this issue?
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Thanks in Advance,
</span><br>
<p><span class="quotelev1">&gt; Amit
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; The information contained in this electronic message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of 
</span><br>
<p><span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or 
</span><br>
<p><span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you 
</span><br>
<p><span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please 
</span><br>
<p><span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message 
</span><br>
<p><span class="quotelev1">&gt; and any attachments.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The 
</span><br>
<p><span class="quotelev1">&gt; recipient should check this email and any attachments for the 
</span><br>
<p><span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage 
</span><br>
<p><span class="quotelev1">&gt; caused by any virus transmitted by this email.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;  &lt;outbind://429/www.wipro.com&gt; www.wipro.com
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; devel mailing list
</span><br>
<p><span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; The information contained in this electronic message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of 
</span><br>
<p><span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or 
</span><br>
<p><span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you 
</span><br>
<p><span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please 
</span><br>
<p><span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message 
</span><br>
<p><span class="quotelev1">&gt; and any attachments.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The 
</span><br>
<p><span class="quotelev1">&gt; recipient should check this email and any attachments for the 
</span><br>
<p><span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage 
</span><br>
<p><span class="quotelev1">&gt; caused by any virus transmitted by this email.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;  &lt;outbind://429/www.wipro.com&gt; www.wipro.com
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; devel mailing list
</span><br>
<p><span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>&nbsp;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
 
Regards,
Amit Sharma
Sr. Software Engineer,
Wipro Technologies, Bangalore
 
 
Please do not print this email unless it is absolutely necessary. 
The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
www.wipro.com
</pre>
<p>
<p>
<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7101/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-7101/Outlook.jpg" alt="Outlook.jpg">
<!-- attachment="Outlook.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Maybe in reply to:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
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
