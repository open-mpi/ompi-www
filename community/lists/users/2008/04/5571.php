<?
$subject_val = "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 16:00:56 2008" -->
<!-- isoreceived="20080429200056" -->
<!-- sent="Tue, 29 Apr 2008 16:00:34 -0400" -->
<!-- isosent="20080429200034" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Permission denied&amp;quot; during MPI installation" -->
<!-- id="77253013-1A9E-405B-9099-03FC082378E0_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B760F51-3433-41BE-9D5F-B9FB37AF1F4B_at_rit.edu" -->
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
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 16:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5572.php">Davi Vercillo C. Garcia: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Previous message:</strong> <a href="5570.php">Linwei Wang: "[OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5570.php">Linwei Wang: "[OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5574.php">Linwei Wang: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Reply:</strong> <a href="5574.php">Linwei Wang: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Linwei, are you running the command as root?
<br>
Try using sudo:
<br>
# sudo make install
<br>
<p>It will ask you for an administrator password.
<br>
<p>On Apr 29, 2008, at 3:54 PM, Linwei Wang wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to MPI... I'm trying to install open MPI on my mac (Leopard)..
</span><br>
<span class="quotelev1">&gt; But during the installation (with the command &quot;make install&quot;)
</span><br>
<span class="quotelev1">&gt; it keeps generating errors of &quot;Permission denied&quot;.... Anyone has an
</span><br>
<span class="quotelev1">&gt; idea of the reasons?
</span><br>
<span class="quotelev1">&gt; Part of the output is like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; Making install in etc
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/local/etc&quot; || ../../config/install-sh -c -d &quot;/usr/local/
</span><br>
<span class="quotelev1">&gt; etc&quot;
</span><br>
<span class="quotelev1">&gt; /usr/bin/install -c -m 644 openmpi-mca-params.conf /usr/local/etc/
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; install: /usr/local/etc/openmpi-mca-params.conf: Permission denied
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-data-local] Error 71
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linwei
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
<li><strong>Next message:</strong> <a href="5572.php">Davi Vercillo C. Garcia: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Previous message:</strong> <a href="5570.php">Linwei Wang: "[OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5570.php">Linwei Wang: "[OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5574.php">Linwei Wang: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>Reply:</strong> <a href="5574.php">Linwei Wang: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
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
