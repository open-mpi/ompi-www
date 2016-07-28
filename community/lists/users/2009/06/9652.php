<?
$subject_val = "Re: [OMPI users] mpirun fails on the host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 22:49:00 2009" -->
<!-- isoreceived="20090620024900" -->
<!-- sent="Fri, 19 Jun 2009 20:48:54 -0600" -->
<!-- isosent="20090620024854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on the host" -->
<!-- id="71d2d8cc0906191948g521fb825na14856e3740eb695_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c3fd201b0906191500t130f87b3p1a1ad27871fa0ad5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails on the host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 22:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe you will find a fairly complete discussion of firewall issues with
<br>
MPI on the OMPI mailing lists. Bottom line is that the firewall blocks both
<br>
the ssh port plus the TCP communication ports required to wireup the MPI
<br>
transports. If you are using the TCP transport, then those ports are also
<br>
blocked.
<br>
You can open specific ports in your firewall, and telling OMPI to use those
<br>
ports for both wireup and MPI transport. We don't necessarily recommend it,
<br>
though, as it leaves a security hole in your firewall.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p>On Fri, Jun 19, 2009 at 4:00 PM, Honest Guvnor
<br>
&lt;honestguvnor_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; The source of the problem has been determined, but not wholly understood,
</span><br>
<span class="quotelev1">&gt; by fully disabling the firewall on the host to the internal network.
</span><br>
<span class="quotelev1">&gt; Parallel jobs involving the host and nodes launched from a node were
</span><br>
<span class="quotelev1">&gt; successful while those launched on the host were apparently blocked by the
</span><br>
<span class="quotelev1">&gt; firewall. Would the former only involve the use of the ssh port on the host
</span><br>
<span class="quotelev1">&gt; while the latter involve other ports?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
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
