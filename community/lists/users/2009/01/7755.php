<?
$subject_val = "Re: [OMPI users] openmpi 1.3 and --wdir problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 13:40:39 2009" -->
<!-- isoreceived="20090121184039" -->
<!-- sent="Wed, 21 Jan 2009 11:40:28 -0700" -->
<!-- isosent="20090121184028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3 and --wdir problem" -->
<!-- id="B57EA438-1C8A-467C-B791-96EABE6031F4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="17CD69BB-10A5-4AE8-9E26-840A3B686425_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3 and --wdir problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 13:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>In reply to:</strong> <a href="7750.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is now fixed in the trunk and will be in the 1.3.1 release.
<br>
<p>Thanks again for the heads-up!
<br>
Ralph
<br>
<p>On Jan 21, 2009, at 8:45 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You are correct - that is a bug in 1.3.0. I'm working on a fix for  
</span><br>
<span class="quotelev1">&gt; it now and will report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for catching it!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 3:22 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I'm currently trying the new release but I cant reproduce the  
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.8 behaviour
</span><br>
<span class="quotelev2">&gt;&gt;   concerning --wdir option
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Then
</span><br>
<span class="quotelev2">&gt;&gt;   %% /tmp/openmpi-1.2.8/bin/mpirun -n 1 --wdir /tmp --host r003n030  
</span><br>
<span class="quotelev2">&gt;&gt; pwd :   --wdir /scr1 -n 1 --host r003n031 pwd
</span><br>
<span class="quotelev2">&gt;&gt;   /scr1
</span><br>
<span class="quotelev2">&gt;&gt;   /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   but
</span><br>
<span class="quotelev2">&gt;&gt;   %% /tmp/openmpi-1.3/bin/mpirun -n 1 --wdir /tmp --host r003n030  
</span><br>
<span class="quotelev2">&gt;&gt; pwd : --wdir  /scr1 -n 1 --host r003n031 pwd
</span><br>
<span class="quotelev2">&gt;&gt;   /scr1
</span><br>
<span class="quotelev2">&gt;&gt;   /scr1
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;   Regards
</span><br>
<span class="quotelev2">&gt;&gt;   Geoffroy
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
<li><strong>Next message:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>In reply to:</strong> <a href="7750.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
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
