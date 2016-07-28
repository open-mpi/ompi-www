<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 14:51:51 2007" -->
<!-- isoreceived="20070802185151" -->
<!-- sent="Thu, 02 Aug 2007 12:51:42 -0600" -->
<!-- isosent="20070802185142" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi daemon" -->
<!-- id="C2D783DE.A530%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1912A670-DB1C-4A1A-B4F5-461B6F0C9724_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-02 14:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3799.php">Glenn Carver: "[OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Previous message:</strong> <a href="3797.php">Reuti: "Re: [OMPI users] mpi daemon"</a>
<li><strong>In reply to:</strong> <a href="3797.php">Reuti: "Re: [OMPI users] mpi daemon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The daemon's name is &quot;orted&quot; - one will be launched on each remote node as
<br>
the application is started, but they only live for as long as the
<br>
application is executing. Then they go away.
<br>
<p><p>On 8/2/07 12:47 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 02.08.2007 um 18:32 schrieb Francesco Pietra:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compiled successfully the MD suite Amber9 on openmpi-1.2.3,
</span><br>
<span class="quotelev2">&gt;&gt; installed om
</span><br>
<span class="quotelev2">&gt;&gt; Debian Linux amd64 etch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Although all tests for parallel amber9 passed successfully, when I run
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ps -aux
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see any daemon referring to mpi. How is that daemon
</span><br>
<span class="quotelev2">&gt;&gt; identified, or how
</span><br>
<span class="quotelev2">&gt;&gt; should it be started?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps f -eo pid,ppid,pgrp,user,group,command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; might be more informative.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; francesco pietra
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ______________
</span><br>
<span class="quotelev2">&gt;&gt; Shape Yahoo! in your own image.  Join our Network Research Panel
</span><br>
<span class="quotelev2">&gt;&gt; today!   <a href="http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7">http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3799.php">Glenn Carver: "[OMPI users] values of mca parameters whilst running program"</a>
<li><strong>Previous message:</strong> <a href="3797.php">Reuti: "Re: [OMPI users] mpi daemon"</a>
<li><strong>In reply to:</strong> <a href="3797.php">Reuti: "Re: [OMPI users] mpi daemon"</a>
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
