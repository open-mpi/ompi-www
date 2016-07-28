<?
$subject_val = "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 01:53:47 2013" -->
<!-- isoreceived="20130503055347" -->
<!-- sent="Fri, 03 May 2013 15:53:39 +1000" -->
<!-- isosent="20130503055339" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?" -->
<!-- id="518350E3.5000601_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56F508D9-7818-4CB6-ADAA-13094069F5AD_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-05-03 01:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12359.php">Hugo Daniel Meyer: "[OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12357.php">Brice Goglin: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12351.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 03/05/13 14:30, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On May 2, 2013, at 9:18 PM, Christopher Samuel 
</span><br>
<span class="quotelev1">&gt; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're using Slurm, and it supports them already apparently, so I'm 
</span><br>
<span class="quotelev2">&gt;&gt; not sure if that helps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does - but to be clear: your saying that you can directly launch 
</span><br>
<span class="quotelev1">&gt; processes onto the Phi's via srun?
</span><br>
<p>Ah no, Slurm 2.5 supports them as coprocessors, allocated as GPUs are.
<br>
<p>I've been told Slurm 2.6 (under development) may support them as nodes
<br>
in their own right, but that's not something I've had time to look into
<br>
myself (yet).
<br>
<p><span class="quotelev1">&gt; If so, then this may not be a problem, assuming you can get
</span><br>
<span class="quotelev1">&gt; confirmation that the Phi's have direct access to the interconnects.
</span><br>
<p>I'll see what I can do.   There is a long README which will be my light
<br>
reading on the train home tonight here:
<br>
<p><a href="http://registrationcenter.intel.com/irc_nas/3047/readme-en.txt">http://registrationcenter.intel.com/irc_nas/3047/readme-en.txt</a>
<br>
<p>This seems to indicate how that works, but other parts imply that it
<br>
*may* require Intel True Scale InfiniBand adapters:
<br>
<p>3.4  Starting Intel(R) MPSS with OFED Support
<br>
<p>&nbsp;&nbsp;1) Start the Intel(R) MPSS service. Section 2.3, &quot;Starting Intel(R) MPSS 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services&quot; explains how.  Do not proceed any further if Intel(R) MPSS is not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;started.    
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;2) Start IB and HCA services. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service openibd start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service opensmd start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;3) Start The Intel(R) Xeon Phi(TM) coprocessor specific OFED service.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service ofed-mic start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;4) To start the experimental ccl-proxy service (see /etc/mpxyd.conf)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service mpxyd start
<br>
&nbsp;
<br>
3.5  Stopping Intel(R) MPSS with OFED Support 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;o If the installed version is earlier than 2.x.28xx unload the driver using:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo modprobe -r mic
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;o If the installed version is 2.x.28xx or later, unload the driver using:      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service ofed-mic stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service mpss stop        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service mpss unload        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service opensmd stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service openibd stop
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;o If the experimental ccl-proxy driver was started, unload the driver using:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_prompt&gt; sudo service mpxyd stop
<br>
<p><span class="quotelev1">&gt; If the answer to both is &quot;yes&quot;, then just srun the MPI procs
</span><br>
<span class="quotelev1">&gt; directly - we support direct launch and use PMI to wireup. Problem
</span><br>
<span class="quotelev1">&gt; solved :-)
</span><br>
<p>That would be ideal, I'll do more digging into Slurm 2.6 (we had
<br>
planned on starting off with that, but as coprocessors, but this
<br>
may be enough for us to change).
<br>
<p><span class="quotelev1">&gt; And yes - that support is indeed in the 1.6 series...just configure 
</span><br>
<span class="quotelev1">&gt; --with-pmi. You may need to provide the path to where pmi.h is 
</span><br>
<span class="quotelev1">&gt; located under the slurm install, but probably not.
</span><br>
<p>Brilliant, thanks!
<br>
<p>All the best,
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
<p>iEYEARECAAYFAlGDUOMACgkQO2KABBYQAh9lcQCeIp5KjX2PJ/2Cia6fc51hSjFW
<br>
26UAn1eKqTqjZil7S8xwJrDDL5wkGof/
<br>
=2A67
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12359.php">Hugo Daniel Meyer: "[OMPI devel] MPI_Comm_accept with multiple threads."</a>
<li><strong>Previous message:</strong> <a href="12357.php">Brice Goglin: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<li><strong>In reply to:</strong> <a href="12356.php">Ralph Castain: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12351.php">Christopher Samuel: "Re: [OMPI devel] Any plans to support Intel MIC (Xeon Phi) in Open-MPI?"</a>
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
