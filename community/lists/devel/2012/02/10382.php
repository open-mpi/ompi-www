<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 13:00:31 2012" -->
<!-- isoreceived="20120210180031" -->
<!-- sent="Fri, 10 Feb 2012 13:00:21 -0500" -->
<!-- isosent="20120210180021" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="4F355B35.4010700_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25A160E6-CFAF-48B3-87E8-BDCF91CC5E30_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 13:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10383.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10381.php">Ralph Castain: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10383.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10383.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/10/2012 11:50 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This is an open question to OMPI developers...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like RHEL (and maybe others?) adds the &quot;virbr0&quot; IP interface when Xen is activated.  This IP interface is only used to communicate with the local Xen instance(s); it is not used to communicate over the real network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a case that I saw, the interface is created, set to &quot;up&quot;, and is given an IP address in the 192.168.1.x range.  This was done by default -- all the user had done was either say &quot;yes, I want Xen enabled&quot;, or he didn't say he wanted it *disabled* (I'm not sure which).
</span><br>
I've done the latter and hit the same problem.  There were instructions 
<br>
somewhere on the web that I found that told one how to disable vibr0.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This causes a problem if you have Xen enabled on multiple machines in an OMPI job.  OMPI will see the 192.168.1.x address and see that it's &quot;up&quot;, so it'll add it to the eligible subnets that can be used.  When OMPI sees that its peer processes also have 192.168.1.x, it'll try to use that network for OOB/BTL traffic -- which will fail, because these are local-only interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we add &quot;virbr0&quot; to the default value for [btl|oob]_tcp_if_exclude?
</span><br>
What happens to that value if you then set btl_tcp_if_exclude to some 
<br>
value on the mpirun command line?  So this brings me to something that 
<br>
has annoyed me for a bit.  It seems to me that maybe it would be nice to 
<br>
have a conf file that you can dump interface names to exclude but would 
<br>
not be interpreted as a btl_tcp_if_exclude options.  For example there 
<br>
were some interfaces on certain Sun machine (a long time ago) that went 
<br>
to the diagnostic processor and caused a similar issue as the virbr0 
<br>
issue.  So we started delivering a conf file that set btl_tcp_if_exclude 
<br>
but then this precluded anyone from being able to set 
<br>
btl_tcp_if_include.  If we had a file one could specify the set of 
<br>
interfaces to use or exclude but allow the user to operate on the result 
<br>
of that set it seems that would be nice.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or is there another way to detect that an interface is local-only and should not be used for OOB/BTL communication?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See this post on the user's list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2012/02/18432.php">http://www.open-mpi.org/community/lists/users/2012/02/18432.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10383.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10381.php">Ralph Castain: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10383.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10383.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
