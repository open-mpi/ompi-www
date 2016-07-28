<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 15:58:31 2007" -->
<!-- isoreceived="20070717195831" -->
<!-- sent="Tue, 17 Jul 2007 13:58:17 -0600" -->
<!-- isosent="20070717195817" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="C2C27B79.34F8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="121630.84138.qm_at_web57603.mail.re1.yahoo.com" -->
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
<strong>Date:</strong> 2007-07-17 15:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3700.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3698.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3697.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The correct options are --debug-daemons and --devel-debug
<br>
<p><p>On 7/17/07 12:46 PM, &quot;Bill Johnstone&quot; &lt;beejstone3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can start by adding --debug-daemons and --debug to your mpirun
</span><br>
<span class="quotelev2">&gt;&gt; command line. This will generate a lot of output related to the
</span><br>
<span class="quotelev2">&gt;&gt; operations done internally by the launcher. If you send this output
</span><br>
<span class="quotelev2">&gt;&gt; to the list we might be able to help you a little bit more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, I added those, but got a message about needing to supply a suitable
</span><br>
<span class="quotelev1">&gt; debugger.  If I supply the &quot;--debugger gdb&quot; argument, I just get dumped
</span><br>
<span class="quotelev1">&gt; into gdb.  I'm not sure what I need to do next to get the launcher
</span><br>
<span class="quotelev1">&gt; output you mentioned.  My knowledge of gdb is pretty rudimentary.  Do I
</span><br>
<span class="quotelev1">&gt; need to set mpirun as the executable, and the use the gdb &quot;run&quot; command
</span><br>
<span class="quotelev1">&gt; with the mpirun arguments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do I need to rebuild openmpi with --enable-debug?
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
<span class="quotelev1">&gt; Building a website is a piece of cake. Yahoo! Small Business gives you all the
</span><br>
<span class="quotelev1">&gt; tools to get online.
</span><br>
<span class="quotelev1">&gt; <a href="http://smallbusiness.yahoo.com/webhosting">http://smallbusiness.yahoo.com/webhosting</a>
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
<li><strong>Next message:</strong> <a href="3700.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3698.php">George Bosilca: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3697.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
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
