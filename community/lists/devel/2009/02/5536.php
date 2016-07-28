<?
$subject_val = "Re: [OMPI devel] Minor patch for vtunify use of tolower()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 18:33:54 2009" -->
<!-- isoreceived="20090227233354" -->
<!-- sent="Fri, 27 Feb 2009 18:33:36 -0500" -->
<!-- isosent="20090227233336" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Minor patch for vtunify use of tolower()" -->
<!-- id="F18CB9AD-4795-4B6E-8DEC-031113BD8934_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A7AE5E.2000306_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Minor patch for vtunify use of tolower()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 18:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Previous message:</strong> <a href="5535.php">Eugene Loh: "[OMPI devel] PML Start error?"</a>
<li><strong>In reply to:</strong> <a href="5534.php">Number Cruncher: "[OMPI devel] Minor patch for vtunify use of tolower()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the VT guys have applied this fix to the OMPI trunk and  
<br>
filed for it to be moved to v1.3.
<br>
<p>Thanks for the patch!
<br>
<p><p>On Feb 27, 2009, at 4:11 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; I couldn't get Open MPI 1.3 to compile on RedHat 9 or CentOS3, due  
</span><br>
<span class="quotelev1">&gt; to vt_unify_stats.h using the tolower() function without including  
</span><br>
<span class="quotelev1">&gt; the relevant header.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is patch against 1.3 release to fix this minor bug.
</span><br>
<span class="quotelev1">&gt; diff -r -U 5 openmpi-1.3.orig/ompi/contrib/vt/vt/tools/vtunify/ 
</span><br>
<span class="quotelev1">&gt; vt_unify_stats.h openmpi-1.3/ompi/contrib/vt/vt/tools/vtunify/ 
</span><br>
<span class="quotelev1">&gt; vt_unify_stats.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.3.orig/ompi/contrib/vt/vt/tools/vtunify/ 
</span><br>
<span class="quotelev1">&gt; vt_unify_stats.h	2009-02-27 08:53:02.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.3/ompi/contrib/vt/vt/tools/vtunify/vt_unify_stats.h	 
</span><br>
<span class="quotelev1">&gt; 2009-02-27 09:01:55.000000000 +0000
</span><br>
<span class="quotelev1">&gt; @@ -17,10 +17,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;algorithm&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;map&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;cctype&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // instance of class Statistics
</span><br>
<span class="quotelev1">&gt; class Statistics;
</span><br>
<span class="quotelev1">&gt; extern Statistics * theStatistics;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -73,13 +74,13 @@
</span><br>
<span class="quotelev1">&gt; 	 {
</span><br>
<span class="quotelev1">&gt; 	    std::string _a = funcname, _b = a.funcname;
</span><br>
<span class="quotelev1">&gt; 	    uint32_t i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	    for( i = 0; i &lt; funcname.length(); i++ )
</span><br>
<span class="quotelev1">&gt; -	       _a[i] = tolower( funcname[i] );
</span><br>
<span class="quotelev1">&gt; +              _a[i] = std::tolower( funcname[i] );
</span><br>
<span class="quotelev1">&gt; 	    for( i = 0; i &lt; a.funcname.length(); i++ )
</span><br>
<span class="quotelev1">&gt; -	       _b[i] = tolower( a.funcname[i] );
</span><br>
<span class="quotelev1">&gt; +              _b[i] = std::tolower( a.funcname[i] );
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	    return _a &lt; _b;
</span><br>
<span class="quotelev1">&gt; 	 }
</span><br>
<span class="quotelev1">&gt; 	 else if( (flags &amp; STAT_SORT_FLAG_FUNCNAME) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; 		  (flags &amp; STAT_SORT_FLAG_DIR_DOWN ) )
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Previous message:</strong> <a href="5535.php">Eugene Loh: "[OMPI devel] PML Start error?"</a>
<li><strong>In reply to:</strong> <a href="5534.php">Number Cruncher: "[OMPI devel] Minor patch for vtunify use of tolower()"</a>
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
