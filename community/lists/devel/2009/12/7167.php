<?
$subject_val = "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 16:49:17 2009" -->
<!-- isoreceived="20091201214917" -->
<!-- sent="Tue, 01 Dec 2009 13:49:07 -0800" -->
<!-- isosent="20091201214907" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet" -->
<!-- id="4B158F53.6030501_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2A6F2E9-24B7-44AD-AF40-112EC8CD3E20_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 16:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7168.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Previous message:</strong> <a href="7166.php">David Singleton: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>In reply to:</strong> <a href="7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>I connection with Josh's question about mpirun arguments, I suggest you 
<br>
try setting
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPIRUN_CMD='mpirun -am ft-enable-cr -np %N %P %A'
<br>
in your environment before launching the GASNet application.  This will 
<br>
instruct GASNet's wrapper around mpirun to include the flag Josh mentioned.
<br>
<p>-Paul
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tried to use the checkpoint/restart feature with GASNet 
</span><br>
<span class="quotelev1">&gt; over MPI, so I cannot comment directly on how they interact. However, 
</span><br>
<span class="quotelev1">&gt; the combination should work as long as the proper arguments (-am 
</span><br>
<span class="quotelev1">&gt; ft-enable-cr) are passed along to the mpirun command, and Open MPI is 
</span><br>
<span class="quotelev1">&gt; configured properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message that you copied seems to indicate that the local 
</span><br>
<span class="quotelev1">&gt; daemon on one of the nodes failed to start a checkpoint of the target 
</span><br>
<span class="quotelev1">&gt; application. Often this is caused by one of two things:
</span><br>
<span class="quotelev1">&gt;  - Open MPI was not configured with the fault tolerance thread, and 
</span><br>
<span class="quotelev1">&gt; the application is waiting for a long time in a computation loop (not 
</span><br>
<span class="quotelev1">&gt; entering the MPI library).
</span><br>
<span class="quotelev1">&gt;  - The '-am ft-enable-cr' flag was not provided to the mpirun process, 
</span><br>
<span class="quotelev1">&gt; so the MPI application did not activate the C/R specific code paths 
</span><br>
<span class="quotelev1">&gt; and is therefore denying the request to checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me a bit more information:
</span><br>
<span class="quotelev1">&gt;  - What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;  - How did you configure Open MPI?
</span><br>
<span class="quotelev1">&gt;  - What arguments are being passed to 'mpirun' when running with GASNet?
</span><br>
<span class="quotelev1">&gt;  - Do you have any environment variables/MCA parameters set for Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2009, at 7:13 PM, Thomas CI Yoon wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to developers of OPEN-MPI for Fault-Tolerance, I can use the 
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart function very well for my MPI applications.
</span><br>
<span class="quotelev2">&gt;&gt; But its checkpoint does not work for my GASNet applications which use 
</span><br>
<span class="quotelev2">&gt;&gt; the MPI conduit.
</span><br>
<span class="quotelev2">&gt;&gt; Is here anyone else to help me?
</span><br>
<span class="quotelev2">&gt;&gt; I wrote some code with GASNet API (Global-Address Space Networking: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gasnet.cs.berkeley.edu/">http://gasnet.cs.berkeley.edu/</a>)    and used MPI conduit for my gasnet 
</span><br>
<span class="quotelev2">&gt;&gt; application, so my program ran well with open-mpirun. Thus I thought 
</span><br>
<span class="quotelev2">&gt;&gt; that I could also use the transparent checkpoint/restart function 
</span><br>
<span class="quotelev2">&gt;&gt; supported by BLCR in Open-mpi. As opposed to my idea, it does not 
</span><br>
<span class="quotelev2">&gt;&gt; work and show the following error message.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error: The process with PID 13896 is not checkpointable.
</span><br>
<span class="quotelev2">&gt;&gt;        This could be due to one of the following:
</span><br>
<span class="quotelev2">&gt;&gt;         - An application with this PID doesn't currently exist
</span><br>
<span class="quotelev2">&gt;&gt;         - The application with this PID isn't checkpointable
</span><br>
<span class="quotelev2">&gt;&gt;         - The application with this PID isn't an OPAL application.
</span><br>
<span class="quotelev2">&gt;&gt;        We were looking for the named files:
</span><br>
<span class="quotelev2">&gt;&gt;          /tmp/opal_cr_prog_write.13896
</span><br>
<span class="quotelev2">&gt;&gt;          /tmp/opal_cr_prog_read.13896
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 more process has sent help message help-opal-checkpoint.txt
</span><br>
<span class="quotelev2">&gt;&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help
</span><br>
<span class="quotelev2">&gt;&gt;  0] 13896) Step 53
</span><br>
<span class="quotelev2">&gt;&gt;  0] 15100) Step 53
</span><br>
<span class="quotelev2">&gt;&gt;  0] 13896) Step 54
</span><br>
<span class="quotelev2">&gt;&gt;  0] 15100) Step 54
</span><br>
<span class="quotelev2">&gt;&gt;  0] 13896) Step 55
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my application, the MPI_Initialized() says it is initialized.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reading and have a great day.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7168.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Previous message:</strong> <a href="7166.php">David Singleton: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>In reply to:</strong> <a href="7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="7183.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
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
