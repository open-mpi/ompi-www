<?
$subject_val = "Re: [OMPI devel] orte_rml_base_select failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 08:25:31 2009" -->
<!-- isoreceived="20091105132531" -->
<!-- sent="Thu, 5 Nov 2009 08:25:26 -0500" -->
<!-- isosent="20091105132526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_rml_base_select failed" -->
<!-- id="C54609E3-7FB5-43A4-BE36-3E38EC730C18_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="01a601ca5e12$0a37ece0$ab925880_at_EC4HP167996" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 08:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7093.php">Jeff Squyres: "[OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released"</a>
<li><strong>Previous message:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7101.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you must be accidentally mixing Open MPI versions -- the file  
<br>
&quot;orte/runtime/orte_system_init.c&quot; does not exist in the Open MPI v1.3  
<br>
series.  It did exist, however, back in the Open MPI 1.2 series.
<br>
<p>Could you double check that the OMPI that is installed (and is being  
<br>
found/used) on host-desktop1 is the same version as all the others?
<br>
<p><p>On Nov 5, 2009, at 7:18 AM, Amit Sharma wrote:
<br>
<p><span class="quotelev1">&gt; I had built OMPI with &quot;-mca rml_base_verbose 10 -mca  
</span><br>
<span class="quotelev1">&gt; oob_base_verbose 10&quot; but still no luck. On some machine, where  
</span><br>
<span class="quotelev1">&gt; mpirun is working properly, it is giving correct debug messages as  
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -mca rml_base_verbose 10 -mca oob_base_verbose 10 arch
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: Looking for rml components
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: component oob has no register  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: component tcp has no register  
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: component tcp open function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: components_open: component oob open function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [linux] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; [linux] [[55739,0],0] rml:base:update:contact:info got uri  
</span><br>
<span class="quotelev1">&gt; 3652911104.0;tcp://128.88.143.227:39207
</span><br>
<span class="quotelev1">&gt; x86_64
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [linux] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But on the problem reported machine, still the problem is same. It  
</span><br>
<span class="quotelev1">&gt; is not showing the debug messages. Directly it is giving the error  
</span><br>
<span class="quotelev1">&gt; as below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # mpirun arch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at
</span><br>
<span class="quotelev1">&gt; line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can  
</span><br>
<span class="quotelev1">&gt; fail
</span><br>
<span class="quotelev1">&gt; during orte_init; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
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
<span class="quotelev1">&gt; Not getting the root cause of failure. Please guide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Amit Sharma
</span><br>
<span class="quotelev1">&gt; Sr. Software Engineer,
</span><br>
<span class="quotelev1">&gt; Wipro Technologies, Bangalore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: rhc.openmpi_at_[hidden] [mailto:rhc.openmpi_at_[hidden]] On Behalf  
</span><br>
<span class="quotelev1">&gt; Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 03, 2009 11:08 PM
</span><br>
<span class="quotelev1">&gt; To: amit.sharma5_at_[hidden]; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No parameter will help - the issue is that we couldn't find a TCP  
</span><br>
<span class="quotelev1">&gt; interface to use for wiring up the job. First thing you might check  
</span><br>
<span class="quotelev1">&gt; is that you have a TCP interface alive and active - can be the  
</span><br>
<span class="quotelev1">&gt; loopback interface, but you need at least something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do have an interface, then you might rebuild OMPI with -- 
</span><br>
<span class="quotelev1">&gt; enable-debug so you can get some diagnostics. Then run the job again  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -mca rml_base_verbose 10 -mca oob_base_verbose 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see what diagnostic error messages emerge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 3, 2009 at 4:42 AM, Amit Sharma &lt;amit.sharma5_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init_stage1.c at
</span><br>
<span class="quotelev1">&gt; line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can  
</span><br>
<span class="quotelev1">&gt; fail
</span><br>
<span class="quotelev1">&gt; during orte_init; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
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
<span class="quotelev1">&gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
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
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7093.php">Jeff Squyres: "[OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released"</a>
<li><strong>Previous message:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7101.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
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
