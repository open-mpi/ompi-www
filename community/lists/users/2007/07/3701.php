<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 17:41:02 2007" -->
<!-- isoreceived="20070717214102" -->
<!-- sent="Tue, 17 Jul 2007 15:40:48 -0600" -->
<!-- isosent="20070717214048" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="C2C29380.3507%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="445555.39476.qm_at_web57610.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 17:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3700.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3700.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI needs to create a temporary directory structure that we call the
<br>
&quot;session directory&quot;. This error is telling you that Open MPI was unable to
<br>
create that directory, probably due to a permission issue.
<br>
<p>We decide on the root directory for the session directory using a
<br>
progression. You can direct where you want it to go by setting the TMPDIR
<br>
environment variable, or (to set it just for us) using -mca tmpdir_base foo
<br>
on the mpirun command (or you can set OMPI_MCA_tmpidir_base=foo in your
<br>
environment), where &quot;foo&quot; is the root of your tmp directory you want us to
<br>
use (e.g., /tmp).
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p><p>On 7/17/07 3:09 PM, &quot;Bill Johnstone&quot; &lt;beejstone3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When I run with --debug-daemons, I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Begin mpirun output&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 626
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_session_dir failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;End mpirun output&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where would you suggest I look next?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if it makes any difference, /usr/local is on a read-only NFSROOT.
</span><br>
<span class="quotelev1">&gt;  Only /tmp and /var are writeable per-node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help so far.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry. The --debug was supposed to be --debug-devel. But I suspect
</span><br>
<span class="quotelev2">&gt;&gt; that if you have a normal build then there will be not much output.
</span><br>
<span class="quotelev2">&gt;&gt; However, --debug-daemons should give enough output so we can at least
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; have a starting point.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 17, 2007, at 2:46 PM, Bill Johnstone wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can start by adding --debug-daemons and --debug to your mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command line. This will generate a lot of output related to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operations done internally by the launcher. If you send this
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the list we might be able to help you a little bit more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, I added those, but got a message about needing to supply a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suitable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debugger.  If I supply the &quot;--debugger gdb&quot; argument, I just get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dumped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into gdb.  I'm not sure what I need to do next to get the launcher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output you mentioned.  My knowledge of gdb is pretty rudimentary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to set mpirun as the executable, and the use the gdb &quot;run&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the mpirun arguments?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I need to rebuild openmpi with --enable-debug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; ______
</span><br>
<span class="quotelev1">&gt; Luggage? GPS? Comic books?
</span><br>
<span class="quotelev1">&gt; Check out fitting gifts for grads at Yahoo! Search
</span><br>
<span class="quotelev1">&gt; <a href="http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz">http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz</a>
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
<li><strong>Next message:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3700.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3700.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3702.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
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
