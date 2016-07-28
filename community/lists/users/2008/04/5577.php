<?
$subject_val = "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 16:30:38 2008" -->
<!-- isoreceived="20080429203038" -->
<!-- sent="Tue, 29 Apr 2008 16:30:30 -0400" -->
<!-- isosent="20080429203030" -->
<!-- name="Linwei Wang" -->
<!-- email="lxw4393_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Permission denied&amp;quot; during MPI installation" -->
<!-- id="39B500B0-0D69-4527-8047-7A971F52EEA2_at_rit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B311310-5A23-4465-9562-92639B423807_at_cisco.com" -->
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
<strong>Date:</strong> 2008-04-29 16:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5578.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5572.php">Davi Vercillo C. Garcia: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the advice, Jeff.
<br>
<p>Best,
<br>
Linwei
<br>
<p>On Apr 29, 2008, at 4:26 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Alternatively, you can specify to install to a different location with
</span><br>
<span class="quotelev1">&gt; the --prefix option to configure (possibly somewhere you do have write
</span><br>
<span class="quotelev1">&gt; access).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2008, at 3:17 PM, Linwei Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, it works.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you all for the help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Linwei
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2008, at 4:00 PM, Alberto Giannetti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linwei, are you running the command as root?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try using sudo:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # sudo make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It will ask you for an administrator password.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 29, 2008, at 3:54 PM, Linwei Wang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm new to MPI... I'm trying to install open MPI on my mac
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Leopard)..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But during the installation (with the command &quot;make install&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it keeps generating errors of &quot;Permission denied&quot;.... Anyone has an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; idea of the reasons?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Part of the output is like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making install in etc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test -z &quot;/usr/local/etc&quot; || ../../config/install-sh -c -d &quot;/usr/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; etc&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/install -c -m 644 openmpi-mca-params.conf /usr/local/etc/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-mca-params.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install: /usr/local/etc/openmpi-mca-params.conf: Permission denied
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [install-data-local] Error 71
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linwei
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5578.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<li><strong>In reply to:</strong> <a href="5576.php">Jeff Squyres: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5572.php">Davi Vercillo C. Garcia: "Re: [OMPI users] &quot;Permission denied&quot; during MPI installation"</a>
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
