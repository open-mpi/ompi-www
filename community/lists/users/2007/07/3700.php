<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 17:09:15 2007" -->
<!-- isoreceived="20070717210915" -->
<!-- sent="Tue, 17 Jul 2007 14:09:11 -0700 (PDT)" -->
<!-- isosent="20070717210911" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="445555.39476.qm_at_web57610.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="26E63C37-E8C6-4010-96F9-78F8E60420CE_at_cs.utk.edu" -->
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
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 17:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3701.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3699.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3698.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3701.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3701.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I run with --debug-daemons, I get:
<br>
<p>&lt;Begin mpirun output&gt;
<br>
<p>[node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init_stage1.c at line 626
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process
<br>
is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_system_init.c at line 42
<br>
[node5.x86-64:09920] [0,0,1] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 52
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
<p>&lt;End mpirun output&gt;
<br>
<p>Where would you suggest I look next?
<br>
<p>Also, if it makes any difference, /usr/local is on a read-only NFSROOT.
<br>
&nbsp;Only /tmp and /var are writeable per-node.
<br>
<p>Thank you very much for your help so far.
<br>
<p>--- George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry. The --debug was supposed to be --debug-devel. But I suspect  
</span><br>
<span class="quotelev1">&gt; that if you have a normal build then there will be not much output.  
</span><br>
<span class="quotelev1">&gt; However, --debug-daemons should give enough output so we can at least
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; have a starting point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2007, at 2:46 PM, Bill Johnstone wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can start by adding --debug-daemons and --debug to your mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command line. This will generate a lot of output related to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; operations done internally by the launcher. If you send this
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to the list we might be able to help you a little bit more.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OK, I added those, but got a message about needing to supply a  
</span><br>
<span class="quotelev2">&gt; &gt; suitable
</span><br>
<span class="quotelev2">&gt; &gt; debugger.  If I supply the &quot;--debugger gdb&quot; argument, I just get  
</span><br>
<span class="quotelev2">&gt; &gt; dumped
</span><br>
<span class="quotelev2">&gt; &gt; into gdb.  I'm not sure what I need to do next to get the launcher
</span><br>
<span class="quotelev2">&gt; &gt; output you mentioned.  My knowledge of gdb is pretty rudimentary.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do I
</span><br>
<span class="quotelev2">&gt; &gt; need to set mpirun as the executable, and the use the gdb &quot;run&quot;  
</span><br>
<span class="quotelev2">&gt; &gt; command
</span><br>
<span class="quotelev2">&gt; &gt; with the mpirun arguments?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do I need to rebuild openmpi with --enable-debug?
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Luggage? GPS? Comic books? 
<br>
Check out fitting gifts for grads at Yahoo! Search
<br>
<a href="http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz">http://search.yahoo.com/search?fr=oni_on_mail&amp;p=graduation+gifts&amp;cs=bz</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3701.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3699.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3698.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3701.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3701.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
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
