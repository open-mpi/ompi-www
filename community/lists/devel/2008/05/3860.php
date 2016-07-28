<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 09:32:30 2008" -->
<!-- isoreceived="20080508133230" -->
<!-- sent="Thu, 8 May 2008 09:32:21 -0400" -->
<!-- isosent="20080508133221" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="FFE4B735-42E3-4D87-B0A0-6204E111EB03_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="80685D91-AC0E-4862-BC19-1E0414C141D4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] mca_base_open() NULL<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 09:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2008, at 8:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 8, 2008, at 8:06 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; If not intended to be used by users (i.e., it's an internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mechanism only), is there a reason why we're not using a zero-length
</span><br>
<span class="quotelev3">&gt;&gt;&gt; string (e.g., mpirun --mca foo &quot;&quot;)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think a zero length string might get confusing with the empty
</span><br>
<span class="quotelev2">&gt;&gt; string. The empty string is taken to mean auto-select from all
</span><br>
<span class="quotelev2">&gt;&gt; available components, which currently cannot be specified on the
</span><br>
<span class="quotelev2">&gt;&gt; command line as an -mca option. The 0 length string is close and
</span><br>
<span class="quotelev2">&gt;&gt; nearly indistinguishable in an (A)MCA file from a NULL string.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, right.  Should we introduce another keyword, &quot;all&quot;?  This would
</span><br>
<span class="quotelev1">&gt; then be symmetric to &quot;none&quot; and could be the default value.  An empty
</span><br>
<span class="quotelev1">&gt; string would then be an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per the larger issue, I wonder if we should simply disallow NULL
</span><br>
<span class="quotelev1">&gt; default string parameter values.  This might simplify a lot of  
</span><br>
<span class="quotelev1">&gt; things...
</span><br>
<p>I think 'all' would be a nice symmetric addition to complement 'none'  
<br>
and then this would allow users to specify the &quot;select best from all  
<br>
available&quot; option on the command line.
<br>
<p>Disallowing the NULL default string I think would have some  
<br>
repercussions throughout the code requiring a change in the way we use  
<br>
MCA parameters. For example, many component selection logics use the  
<br>
NULL value as the current 'select best from all' indicator. Other MCA  
<br>
parameters take the NULL value to indicate that the user did not set  
<br>
any value for this string parameter and thus it can be ignored. Maybe  
<br>
we can try to add a deprecation warning message when this happens to  
<br>
gauge it's frequency.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>In reply to:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3861.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
