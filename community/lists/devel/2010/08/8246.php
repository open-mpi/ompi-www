<?
$subject_val = "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 12:51:23 2010" -->
<!-- isoreceived="20100803165123" -->
<!-- sent="Tue, 03 Aug 2010 12:51:20 -0400" -->
<!-- isosent="20100803165120" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:  Add new Solaris sysinfo component" -->
<!-- id="4C584908.8050404_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C87DC062.E4EF%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC:  Add new Solaris sysinfo component<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 12:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8247.php">Samuel K. Gutierrez: "[OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8245.php">Graham, Richard L.: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>In reply to:</strong> <a href="8245.php">Graham, Richard L.: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Graham, Richard L. wrote:
<br>
<span class="quotelev1">&gt; Why do we need an RFC for this sort of component ?  Seems self contained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Probably don't, just giving a heads up. 
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/3/10 6:59 AM, &quot;Terry Dontje&quot; &lt;terry.dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT:  Add new Solaris sysinfo component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY:  To allow OPAL access to chip type and model information when running on Solaris OS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: opal/mca/sysinfo/solaris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN:  for 1.5.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT:  Aug 10, 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MORE DETAILS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a sysinfo framework that has a component for Linux to expose the chip type and model information to OPAL.  This RFC is to propose the making of a Solaris component to expose the same information.  The Linux component also exposes number of processes and memory amount on a node, however the first instantiation of the Solaris component will not expose this information because it will be easier to do such with hwloc (which has not been integrated to provide such info, yet).
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8246/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8247.php">Samuel K. Gutierrez: "[OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8245.php">Graham, Richard L.: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
<li><strong>In reply to:</strong> <a href="8245.php">Graham, Richard L.: "Re: [OMPI devel] RFC:  Add new Solaris sysinfo component"</a>
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
