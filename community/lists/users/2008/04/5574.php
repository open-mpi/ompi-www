<?
$subject_val = "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 16:17:18 2008" -->
<!-- isoreceived="20080429201718" -->
<!-- sent="Tue, 29 Apr 2008 16:17:11 -0400" -->
<!-- isosent="20080429201711" -->
<!-- name="Linwei Wang" -->
<!-- email="lxw4393_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Permission denied&amp;quot; during MPI installation" -->
<!-- id="ADEB3709-F7A0-405E-9D13-2D5434695430_at_rit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77253013-1A9E-405B-9099-03FC082378E0_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Permission denied&quot; during MPI installation<br>
<strong>From:</strong> Linwei Wang (<em>lxw4393_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 16:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5575.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5573.php">Doug Reeder: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5571.php">Alberto Giannetti: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Reply:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, it works.
<br>
Thank you all for the help.
<br>
<p><p>Best,
<br>
Linwei
<br>
<p>On Apr 29, 2008, at 4:00 PM, Alberto Giannetti wrote:
<br>
<p><span class="quotelev1">&gt; Linwei, are you running the command as root?
</span><br>
<span class="quotelev1">&gt; Try using sudo:
</span><br>
<span class="quotelev1">&gt; # sudo make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will ask you for an administrator password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2008, at 3:54 PM, Linwei Wang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to MPI... I'm trying to install open MPI on my mac  
</span><br>
<span class="quotelev2">&gt;&gt; (Leopard)..
</span><br>
<span class="quotelev2">&gt;&gt; But during the installation (with the command &quot;make install&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; it keeps generating errors of &quot;Permission denied&quot;.... Anyone has an
</span><br>
<span class="quotelev2">&gt;&gt; idea of the reasons?
</span><br>
<span class="quotelev2">&gt;&gt; Part of the output is like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt; Making install in etc
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/usr/local/etc&quot; || ../../config/install-sh -c -d &quot;/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/
</span><br>
<span class="quotelev2">&gt;&gt; etc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 openmpi-mca-params.conf /usr/local/etc/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; install: /usr/local/etc/openmpi-mca-params.conf: Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [install-data-local] Error 71
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linwei
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
<li><strong>Next message:</strong> <a href="5575.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5573.php">Doug Reeder: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5571.php">Alberto Giannetti: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Reply:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
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
