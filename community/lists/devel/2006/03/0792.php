<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 10:37:47 2006" -->
<!-- isoreceived="20060331153747" -->
<!-- sent="Fri, 31 Mar 2006 10:37:47 -0500" -->
<!-- isosent="20060331153747" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="9A73D2E2-B6E3-4A62-8D81-714DC4353309_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060331153329.GS16388_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 10:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0791.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0791.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2006, at 10:33 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Mar 31, 2006 at 05:21:42PM +0200, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps it's a good idea to port any internal structure to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IPv6, as it is able to represent the whole v4 namespace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One can always determine whether it is a real v6 or only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a mapped v4 address (the common ::ffff: prefix)
</span><br>
<span class="quotelev2">&gt;&gt; I'm far from knowledgeable in this networking area, but I have a
</span><br>
<span class="quotelev2">&gt;&gt; maybe-naive question here: Won't you have to assume in this case that
</span><br>
<span class="quotelev2">&gt;&gt; the host operating system has IPv6 support, so that the corresponding
</span><br>
<span class="quotelev2">&gt;&gt; data structures are defined?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is true. I don't know of any modern OS without IPv6 support,
</span><br>
<span class="quotelev1">&gt; even Windows provides these structures ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is really a platform without sockaddr_in6, this should
</span><br>
<span class="quotelev1">&gt; be catched by configure (reverting to v4-only code, a little
</span><br>
<span class="quotelev1">&gt; tricky, yes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I know: All BSDs have v6, Linux has, HPUX, AIX, Solaris,
</span><br>
<span class="quotelev1">&gt; Windows (XP for sure, 2000 experimental, 9X/ME don't).
</span><br>
<p>Do you know which versions of these operating systems?  We have to  
<br>
support some fairly old platforms, so it would be good to at least  
<br>
know what we are getting into...  I think we actually do run on a  
<br>
couple without IPv6 support, but I could be wrong there.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0791.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0791.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
