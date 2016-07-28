<?
$subject_val = "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 00:18:35 2013" -->
<!-- isoreceived="20130503041835" -->
<!-- sent="Fri, 03 May 2013 14:18:08 +1000" -->
<!-- isosent="20130503041808" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?" -->
<!-- id="51833A80.9010001_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A068E5C-AECC-4211-A7EA-373854D81F44_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 00:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12354.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12354.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi Ralph,  very quick reply as I've got an SGI engineer waiting for
<br>
me.. ;-)
<br>
<p>On 03/05/13 12:21, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; So the first problem is: how to know the Phi's are present, how
</span><br>
<span class="quotelev1">&gt; many you have on each node, etc? We could push that into something
</span><br>
<span class="quotelev1">&gt; like the hostfile, but that requires that someone build the file.
</span><br>
<span class="quotelev1">&gt; Still, it would only have to be built once, so maybe that's not too
</span><br>
<span class="quotelev1">&gt; bad - could have a &quot;wildcard&quot; entry if every node is the same,
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<p>We're using Slurm, and it supports them already apparently, so I'm not
<br>
sure if that helps?
<br>
<p><span class="quotelev1">&gt; Next, we have to launch processes across the PCI bus. We had to do
</span><br>
<span class="quotelev1">&gt; an &quot;rsh&quot; launch of the MPI procs onto RR's cell processors as they
</span><br>
<span class="quotelev1">&gt; appeared to be separate &quot;hosts&quot;, though only visible on the local
</span><br>
<span class="quotelev1">&gt; node (i.e., there was a stripped-down OS running on the cell) -
</span><br>
<span class="quotelev1">&gt; Paul's cmd line implies this may also be the case here. If the same
</span><br>
<span class="quotelev1">&gt; method works here, then we have most of that code still available
</span><br>
<span class="quotelev1">&gt; (needs some updating). We would probably want to look at whether or
</span><br>
<span class="quotelev1">&gt; not binding could be supported on the Phi local OS.
</span><br>
<p>I believe that is the case - you can login via SSH to them is my
<br>
understanding.  We've not got that far with ours yet..
<br>
<p><span class="quotelev1">&gt; Finally, we have to wire everything up. This is where RR got a
</span><br>
<span class="quotelev1">&gt; little tricky, and we may encounter the same thing here. On RR, the
</span><br>
<span class="quotelev1">&gt; cell's didn't have direct access to the interconnects - any
</span><br>
<span class="quotelev1">&gt; messaging had to be relayed by a process running on the main cpu.
</span><br>
<span class="quotelev1">&gt; So we had to create the ability to &quot;route&quot; MPI messages from
</span><br>
<span class="quotelev1">&gt; processes running on the cells to processes residing on other
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; Solving the first two is relatively straightforward. In my mind,
</span><br>
<span class="quotelev1">&gt; the primary issue is the last one - does anyone know if a process
</span><br>
<span class="quotelev1">&gt; on the Phi's can &quot;see&quot; interconnects like a TCP NIC or an
</span><br>
<span class="quotelev1">&gt; Infiniband adaptor?
</span><br>
<p>I'm not sure, but I can tell you that the Intel RPMs include an OFED
<br>
install that looks like it's used on the Phi (if my reading is correct).
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlGDOoAACgkQO2KABBYQAh/ZrQCgjwf5PDZWF7LYYcujxfLgiYP4
<br>
lLYAn1tMt4AQ0/Jz0o+gJMvudfEGjf99
<br>
=vQ5j
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12354.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12354.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
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
