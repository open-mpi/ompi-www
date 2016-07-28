<?
$subject_val = "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 00:30:51 2013" -->
<!-- isoreceived="20130503043051" -->
<!-- sent="Thu, 2 May 2013 21:30:44 -0700" -->
<!-- isosent="20130503043044" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?" -->
<!-- id="56F508D9-7818-4CB6-ADAA-13094069F5AD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51833A80.9010001_at_unimelb.edu.au" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 00:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12357.php">Brice Goglin: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12358.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12358.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 2, 2013, at 9:18 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,  very quick reply as I've got an SGI engineer waiting for
</span><br>
<span class="quotelev1">&gt; me.. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/05/13 12:21, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So the first problem is: how to know the Phi's are present, how
</span><br>
<span class="quotelev2">&gt;&gt; many you have on each node, etc? We could push that into something
</span><br>
<span class="quotelev2">&gt;&gt; like the hostfile, but that requires that someone build the file.
</span><br>
<span class="quotelev2">&gt;&gt; Still, it would only have to be built once, so maybe that's not too
</span><br>
<span class="quotelev2">&gt;&gt; bad - could have a &quot;wildcard&quot; entry if every node is the same,
</span><br>
<span class="quotelev2">&gt;&gt; etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're using Slurm, and it supports them already apparently, so I'm not
</span><br>
<span class="quotelev1">&gt; sure if that helps?
</span><br>
<p>It does - but to be clear: your saying that you can directly launch processes onto the Phi's via srun? If so, then this may not be a problem, assuming you can get confirmation that the Phi's have direct access to the interconnects.
<br>
<p>If the answer to both is &quot;yes&quot;, then just srun the MPI procs directly - we support direct launch and use PMI to wireup. Problem solved :-)
<br>
<p>And yes - that support is indeed in the 1.6 series...just configure --with-pmi. You may need to provide the path to where pmi.h is located under the slurm install, but probably not.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Next, we have to launch processes across the PCI bus. We had to do
</span><br>
<span class="quotelev2">&gt;&gt; an &quot;rsh&quot; launch of the MPI procs onto RR's cell processors as they
</span><br>
<span class="quotelev2">&gt;&gt; appeared to be separate &quot;hosts&quot;, though only visible on the local
</span><br>
<span class="quotelev2">&gt;&gt; node (i.e., there was a stripped-down OS running on the cell) -
</span><br>
<span class="quotelev2">&gt;&gt; Paul's cmd line implies this may also be the case here. If the same
</span><br>
<span class="quotelev2">&gt;&gt; method works here, then we have most of that code still available
</span><br>
<span class="quotelev2">&gt;&gt; (needs some updating). We would probably want to look at whether or
</span><br>
<span class="quotelev2">&gt;&gt; not binding could be supported on the Phi local OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that is the case - you can login via SSH to them is my
</span><br>
<span class="quotelev1">&gt; understanding.  We've not got that far with ours yet..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally, we have to wire everything up. This is where RR got a
</span><br>
<span class="quotelev2">&gt;&gt; little tricky, and we may encounter the same thing here. On RR, the
</span><br>
<span class="quotelev2">&gt;&gt; cell's didn't have direct access to the interconnects - any
</span><br>
<span class="quotelev2">&gt;&gt; messaging had to be relayed by a process running on the main cpu.
</span><br>
<span class="quotelev2">&gt;&gt; So we had to create the ability to &quot;route&quot; MPI messages from
</span><br>
<span class="quotelev2">&gt;&gt; processes running on the cells to processes residing on other
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gotcha.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Solving the first two is relatively straightforward. In my mind,
</span><br>
<span class="quotelev2">&gt;&gt; the primary issue is the last one - does anyone know if a process
</span><br>
<span class="quotelev2">&gt;&gt; on the Phi's can &quot;see&quot; interconnects like a TCP NIC or an
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband adaptor?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure, but I can tell you that the Intel RPMs include an OFED
</span><br>
<span class="quotelev1">&gt; install that looks like it's used on the Phi (if my reading is correct).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlGDOoAACgkQO2KABBYQAh/ZrQCgjwf5PDZWF7LYYcujxfLgiYP4
</span><br>
<span class="quotelev1">&gt; lLYAn1tMt4AQ0/Jz0o+gJMvudfEGjf99
</span><br>
<span class="quotelev1">&gt; =vQ5j
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12357.php">Brice Goglin: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12355.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12358.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="12358.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
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
