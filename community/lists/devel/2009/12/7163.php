<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 07:48:39 2009" -->
<!-- isoreceived="20091201124839" -->
<!-- sent="Tue, 1 Dec 2009 07:48:35 -0500" -->
<!-- isosent="20091201124835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="19399162-EF2F-4A3A-A675-E62E0DEB58A0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="68E140CA-EFFE-40CF-AB12-C74A0863E486_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 07:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Previous message:</strong> <a href="7162.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7162.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not a bug, it's a feature.  :-)
<br>
<p>The MCA base automatically adds a priority MCA parameter for every  
<br>
component.
<br>
<p><p>On Dec 1, 2009, at 7:40 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid Sylvain is right, and we have a bug in ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;routed_binomial_priority&quot; (current value: &lt;0&gt;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_cm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;routed_direct_priority&quot; (current value: &lt;0&gt;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;routed_linear_priority&quot; (current value: &lt;0&gt;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_radix_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_slave_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those params do not exist in the code base. I think we -assume- that  
</span><br>
<span class="quotelev1">&gt; every component will have an MCA param for setting priority, but  
</span><br>
<span class="quotelev1">&gt; most of the ORTE ones do not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll need to review ompi_info and fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2009, at 5:22 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 30, 2009, at 10:48 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; About my previous e-mail, I was wrong about all components having  
</span><br>
<span class="quotelev1">&gt; a 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; priority : it was based on default parameters reported by  
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info -a |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; grep routed&quot;. It seems that the truth is not always in  
</span><br>
<span class="quotelev1">&gt; ompi_info ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info *does* always report the truth.  Those values are what  
</span><br>
<span class="quotelev1">&gt; the run-time thinks they are currently set to -- either via  
</span><br>
<span class="quotelev1">&gt; environment, file, or whatever other mechanism.  You might want to  
</span><br>
<span class="quotelev1">&gt; check your setup and see if they're being set via an unexpected  
</span><br>
<span class="quotelev1">&gt; mechanism...?  Try using the &quot;--parsable&quot; switch and grep for  
</span><br>
<span class="quotelev1">&gt; &quot;data_source&quot; to see where values are getting set from.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Previous message:</strong> <a href="7162.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7162.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
