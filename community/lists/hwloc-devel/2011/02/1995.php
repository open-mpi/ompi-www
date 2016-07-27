<?
$subject_val = "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 02:49:14 2011" -->
<!-- isoreceived="20110223074914" -->
<!-- sent="Wed, 23 Feb 2011 08:49:07 +0100" -->
<!-- isosent="20110223074907" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1" -->
<!-- id="4D64BBF3.9060104_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7243DC1D-B6B5-44A6-9B5C-FB55523AB036_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 02:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1996.php">Samuel Thibault: "Re: [hwloc-devel] 1.1.2 and 1.2"</a>
<li><strong>Previous message:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1988.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that we may also get the same warning if the user gives a distance
<br>
matrix that conflicts with what the OS says. I don't know if we could
<br>
detect this conflict in advance to avoid the warning.
<br>
<p>Brice
<br>
<p><p><p>Le 23/02/2011 00:20, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 22, 2011, at 6:02 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Note the &quot;/* TODO: how to report? */&quot; comment in the code: we definitely
</span><br>
<span class="quotelev2">&gt;&gt; _want_ to get users to see the warning and report it.  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Ah, ok.  Could we make that message a little more clear, then?  Maybe something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: src/topology.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- src/topology.c	(revision 3200)
</span><br>
<span class="quotelev1">&gt; +++ src/topology.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -48,7 +48,24 @@
</span><br>
<span class="quotelev1">&gt;    return HWLOC_API_VERSION;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +static void hwloc_report_error(const char *msg, int line)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    static int reported = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    if (!reported) {
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;****************************************************************************\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;* Hwloc has encountered what looks like an error from the operating system.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;*\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;* %s\n&quot;, msg);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;* Error occurred in topology.c line %d\n&quot;, line);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;*\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;* Please report this error message to the hwloc user's mailing list,\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;* along with the output from the hwloc-gather-topology script.\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        fprintf(stderr, &quot;****************************************************************************\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        reported = 1;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  static void
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_clear (struct hwloc_topology *topology);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -704,7 +721,7 @@
</span><br>
<span class="quotelev1">&gt;        case HWLOC_OBJ_INCLUDED:
</span><br>
<span class="quotelev1">&gt;  	if (container) {
</span><br>
<span class="quotelev1">&gt;  	  /* TODO: how to report?  */
</span><br>
<span class="quotelev1">&gt; -	  fprintf(stderr, &quot;object included in several different objects!\n&quot;);
</span><br>
<span class="quotelev1">&gt; +          hwloc_report_error(&quot;object included in several different objects!&quot;, __LINE__);
</span><br>
<span class="quotelev1">&gt;  	  /* We can't handle that.  */
</span><br>
<span class="quotelev1">&gt;  	  return;
</span><br>
<span class="quotelev1">&gt;  	}
</span><br>
<span class="quotelev1">&gt; @@ -713,7 +730,7 @@
</span><br>
<span class="quotelev1">&gt;  	break;
</span><br>
<span class="quotelev1">&gt;        case HWLOC_OBJ_INTERSECTS:
</span><br>
<span class="quotelev1">&gt;  	/* TODO: how to report?  */
</span><br>
<span class="quotelev1">&gt; -	fprintf(stderr, &quot;object intersection without inclusion!\n&quot;);
</span><br>
<span class="quotelev1">&gt; +          hwloc_report_error(&quot;object intersection without inclusion!&quot;, __LINE__);
</span><br>
<span class="quotelev1">&gt;  	/* We can't handle that.  */
</span><br>
<span class="quotelev1">&gt;  	return;
</span><br>
<span class="quotelev1">&gt;        case HWLOC_OBJ_CONTAINS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1996.php">Samuel Thibault: "Re: [hwloc-devel] 1.1.2 and 1.2"</a>
<li><strong>Previous message:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1987.php">Jeff Squyres: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1988.php">Samuel Thibault: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
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
