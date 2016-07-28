<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 12:49:06 2008" -->
<!-- isoreceived="20080130174906" -->
<!-- sent="Wed, 30 Jan 2008 18:48:54 +0100" -->
<!-- isosent="20080130174854" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="20080130174854.GX11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C54E934B-B80A-4C6A-8436-D56C4613FB70_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 12:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2008 at 12:05:50PM -0500, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; What is the real issue behind this whole discussion?
</span><br>
<p>Hanging connections. See
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1206">https://svn.open-mpi.org/trac/ompi/ticket/1206</a>
<br>
<p>The multi-address peer tries to connect, but btl_tcp_proc_accept denies
<br>
due to not matching addresses. (less btl_endpoints than possible source
<br>
addresses)
<br>
<p>r17331 and r17332 haven't fixed the issue. Don't code when leaving the
<br>
office ;) I'll have a look at it tomorrow.
<br>
<p>Sorry for all the noise in the trunk.
<br>
<p><span class="quotelev1">&gt; multiple IP addresses by interface the connection step will work. Now  
</span><br>
<span class="quotelev1">&gt; I can see a benefit of having multiple socket over the same link (and  
</span><br>
<span class="quotelev1">&gt; it's already implemented in Open MPI), but I don't see the interest of  
</span><br>
<span class="quotelev1">&gt; using multiple IP in this case.
</span><br>
<p>I have an easy to reproduce testcase for #1206. If you like, we can step
<br>
through the debugger in a shared screen (screen -x) or VNC session.
<br>
<p>Just mail me if you're interested. ;)
<br>
<p><p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3102.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
