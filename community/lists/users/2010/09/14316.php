<?
$subject_val = "Re: [OMPI users] How to know which process is running on which core?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 08:14:41 2010" -->
<!-- isoreceived="20100924121441" -->
<!-- sent="Fri, 24 Sep 2010 08:14:37 -0400" -->
<!-- isosent="20100924121437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to know which process is running on which core?" -->
<!-- id="D57346CD-F215-4F5B-B8A7-3561D13533C6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=U=Z6C3bkdGWjkcUiO47j0_T=VAOMAtowQB4S__at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to know which process is running on which core?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 08:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14317.php">Jeff Squyres: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>Previous message:</strong> <a href="14315.php">Reuti: "Re: [OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14308.php">Ralph Castain: "Re: [OMPI users] How to know which process is running on which core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14320.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>Reply:</strong> <a href="14320.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the OMPI SVN trunk, we have an &quot;Open MPI extension&quot; call named OMPI_Affinity_str().  Below is an excerpt from the man page.  If this is desirable, we can probably get it into 1.5.1.
<br>
<p>-----
<br>
<p>NAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_Affinity_str  -  Obtain  prettyprint strings of processor affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;information for this process
<br>
<p><p>SYNTAX
<br>
C Syntax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;mpi.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;mpi-ext.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int OMPI_Affinity_str(char ompi_bound[OMPI_AFFINITY_STRING_MAX],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char current_binding[OMPI_AFFINITY_STRING_MAX],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char exists[OMPI_AFFINITY_STRING_MAX])
<br>
<p>[snip]
<br>
OUTPUT PARAMETERS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_bound
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A prettyprint string describing what  processor(s)  Open  MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bound  this  process to, or a string indicating that Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;did not bind this process.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;current_binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A  prettyprint  string  describing  what  processor(s)   this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process  is  currently  bound to, or a string indicating that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the process is bound to  all  available  processors  (and  is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;therefore considered &quot;unbound&quot;).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exists    A  prettyprint  string  describing  the available sockets and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cores on this host.
<br>
<p><p><p><p>On Sep 23, 2010, at 11:10 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You mean via an API of some kind? Not through an MPI call, but you can do it (though your code will wind up OMPI-specific). Look at the OMPI source code in opal/mca/paffinity/paffinity.h and you'll see the necessary calls as well as some macros to help parse the results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depending upon what version you are using, there may also be a function in opal/mca/paffinity/base/base.h to pretty-print that info for you. I believe it may only be in the developer's trunk right now, or it may have made it into the 1.5.0 release candidate....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 23, 2010 at 11:24 AM, Fernando Saez &lt;saezfernando_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi all, I'm new in the list. I don't know if this post has been treated before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way in the OMPI library to report which process is running
</span><br>
<span class="quotelev1">&gt; on which core in a SMP system? I need to know processor affinity for optimizations issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fernando Saez
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14317.php">Jeff Squyres: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>Previous message:</strong> <a href="14315.php">Reuti: "Re: [OMPI users] Shared memory"</a>
<li><strong>In reply to:</strong> <a href="14308.php">Ralph Castain: "Re: [OMPI users] How to know which process is running on which core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14320.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>Reply:</strong> <a href="14320.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
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
