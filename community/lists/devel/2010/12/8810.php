<?
$subject_val = "Re: [OMPI devel] Connect/Accept and Disconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 10:45:45 2010" -->
<!-- isoreceived="20101221154545" -->
<!-- sent="Tue, 21 Dec 2010 08:45:34 -0700" -->
<!-- isosent="20101221154534" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Connect/Accept and Disconnect" -->
<!-- id="338F1EAA-3781-4718-B2F6-4EDC6C2EDC3B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D10BACF.4010907_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Connect/Accept and Disconnect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 10:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Previous message:</strong> <a href="8809.php">Terry Dontje: "[OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>In reply to:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could try configuring with --enable-debug and then set -mca dpm_base_verbose 5 on the cmd line of your two jobs that are trying to connect. Will provide some hopefully useful debug info.
<br>
<p><p>BTW: how did you configure OMPI?
<br>
<p>On Dec 21, 2010, at 7:33 AM, Suraj Prabhakaran wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/21/2010 03:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Are you using ompi-server for pub/sub, or just letting it default to mpirun?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might want to output the return value from lookup_name and publish_name to see if they match. If they are different, then you will definitely hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used ompi-server. I did print the ports and names and they all match!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Previous message:</strong> <a href="8809.php">Terry Dontje: "[OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>In reply to:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
