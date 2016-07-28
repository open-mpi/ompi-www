<?
$subject_val = "Re: [OMPI users] Unterminated log buffer causes corrupt log messages";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 10:45:52 2013" -->
<!-- isoreceived="20131009144552" -->
<!-- sent="Wed, 9 Oct 2013 08:45:51 -0600" -->
<!-- isosent="20131009144551" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unterminated log buffer causes corrupt log messages" -->
<!-- id="20131009144551.GF16803_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6070DAA269E4F44967B5872A5022ADC6B24BA9D_at_OITMX1002.AD.UMD.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unterminated log buffer causes corrupt log messages<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 10:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Previous message:</strong> <a href="22777.php">Kevin M. Hildebrand: "[OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>In reply to:</strong> <a href="22777.php">Kevin M. Hildebrand: "[OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. From the hostname man page (emphasis ** added):
<br>
<p>The gethostname() function returns the standard host name for the current processor, as previously set by sethostname().  The namelen argument specifies the size of the name array.  The returned name is null-terminated, **unless** insufficient space is provided.
<br>
<p>-Nathan
<br>
HPC-3, LANL
<br>
<p>On Wed, Oct 09, 2013 at 02:40:28PM +0000, Kevin M. Hildebrand wrote:
<br>
<span class="quotelev1">&gt;    Hi, I just noticed a bug in the common logging code in both 1.6.5 and
</span><br>
<span class="quotelev1">&gt;    1.7.2.  For sites with hostnames longer than 32 characters, the
</span><br>
<span class="quotelev1">&gt;    terminating NULL is getting cut off the hostname string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Here's a simple patch to fix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    diff -c -r1.1 opal/util/output.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *** opal/util/output.c  2013/10/09 14:09:47     1.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --- opal/util/output.c  2013/10/09 14:12:06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ***************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *** 140,145 ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --- 140,146 ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      #endif  /* defined(__WINDOWS__) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          gethostname(hostname, sizeof(hostname));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    +     hostname[sizeof(hostname)-1] = '\0';
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          verbose.lds_want_stderr = true;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          asprintf(&amp;verbose.lds_prefix, &quot;[%s:%05d] &quot;, hostname, getpid());
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks!
</span><br>
<span class="quotelev1">&gt;    Kevin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Kevin Hildebrand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    University of Maryland, College Park
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Division of IT
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Previous message:</strong> <a href="22777.php">Kevin M. Hildebrand: "[OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>In reply to:</strong> <a href="22777.php">Kevin M. Hildebrand: "[OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
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
