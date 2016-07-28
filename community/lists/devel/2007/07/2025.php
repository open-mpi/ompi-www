<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 06:54:59 2007" -->
<!-- isoreceived="20070727105459" -->
<!-- sent="Fri, 27 Jul 2007 06:54:39 -0400" -->
<!-- isosent="20070727105439" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661" -->
<!-- id="96C0DF87-422F-49F1-BC2A-37FDF28BDFE2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45912.212.144.65.200.1185530455.squirrel_at_merkur.informatik.uni-halle.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 06:54:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2024.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<li><strong>In reply to:</strong> <a href="2024.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2007, at 6:00 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Passing NULL to pthread_exit() is verbotten.
</span><br>
<span class="quotelev1">&gt; Why? I can't find anything in the standard or is it some OMPI  
</span><br>
<span class="quotelev1">&gt; internal?
</span><br>
<p>The man page for pthread_exit(1) on Linux does not specifically say  
<br>
that NULL is allowed.  Plus, on RHEL4 when using the TLS glibc and  
<br>
OMPI was compiled with the pathscale compiler, if you pass NULL to  
<br>
pthread_exit(), an abort is triggered deep within glibc.  I don't  
<br>
know why this doesn't show up with other compilers, though.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2024.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<li><strong>In reply to:</strong> <a href="2024.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
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
