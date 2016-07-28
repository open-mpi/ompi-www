<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 21:15:45 2013" -->
<!-- isoreceived="20130717011545" -->
<!-- sent="Tue, 16 Jul 2013 18:15:38 -0700" -->
<!-- isosent="20130717011538" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="24718DBE-6E71-4DAA-8D71-1E8BA1134C44_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B7C1D578-B847-44B5-B84D-E2F430994175_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 21:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12635.php">Ralph Castain: "[OMPI devel] Warnings"</a>
<li><strong>Previous message:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12640.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2013, at 6:04 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I would like to question the choice for the new &#133; spartan ompi_info output?
</span><br>
<p>I won't debate the logic - I'll leave that to Jeff and Nathan
<br>
<p><span class="quotelev1">&gt; I would not mind restoring the default behavior, aka. have a verbose &quot;--all&quot;, instead of some [random] MCA params.
</span><br>
<p>I believe you need to add -level 9 to your ompi_info cmd and you should see everything?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, something is wrong i the following output. I have an &quot;btl = sm,self&quot; in my .openmpi/mca-params.conf so I should not even see the BTL TCP parameters.
</span><br>
<p>Param registration is now separate from &quot;open&quot;, so all components register their variables even if they will be later ignored.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ompi_info --param all all
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;,
</span><br>
<span class="quotelev1">&gt;                          data source: default, level: 1 user/basic, type:
</span><br>
<span class="quotelev1">&gt;                          string)
</span><br>
<span class="quotelev1">&gt;                          Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev1">&gt;                          notation of networks to use for MPI communication
</span><br>
<span class="quotelev1">&gt;                          (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive
</span><br>
<span class="quotelev1">&gt;                          with btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;                 MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt;                          &quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1
</span><br>
<span class="quotelev1">&gt;                          user/basic, type: string)
</span><br>
<span class="quotelev1">&gt;                          Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev1">&gt;                          notation of networks to NOT use for MPI
</span><br>
<span class="quotelev1">&gt;                          communication -- all devices not matching these
</span><br>
<span class="quotelev1">&gt;                          specifications will be used (e.g.,
</span><br>
<span class="quotelev1">&gt;                          &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default
</span><br>
<span class="quotelev1">&gt;                          value, it is mutually exclusive with
</span><br>
<span class="quotelev1">&gt;                          btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;                 MCA pml: performance &quot;pml_ob1_unexpected_msgq_length&quot; (type:
</span><br>
<span class="quotelev1">&gt;                          unsigned, class: size)
</span><br>
<span class="quotelev1">&gt;                          Number of unexpected messages received by each peer
</span><br>
<span class="quotelev1">&gt;                          in a communicator
</span><br>
<span class="quotelev1">&gt;                 MCA pml: performance &quot;pml_ob1_posted_recvq_length&quot; (type:
</span><br>
<span class="quotelev1">&gt;                          unsigned, class: size)
</span><br>
<span class="quotelev1">&gt;                          Number of unmatched receives posted for each peer
</span><br>
<span class="quotelev1">&gt;                          in a communicator
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12635.php">Ralph Castain: "[OMPI devel] Warnings"</a>
<li><strong>Previous message:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12640.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
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
