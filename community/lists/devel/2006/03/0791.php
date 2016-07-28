<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 10:32:40 2006" -->
<!-- isoreceived="20060331153240" -->
<!-- sent="Fri, 31 Mar 2006 17:33:29 +0200" -->
<!-- isosent="20060331153329" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331153329.GS16388_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060331152142.GB26769_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 10:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0792.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0792.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0792.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 31, 2006 at 05:21:42PM +0200, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Perhaps it's a good idea to port any internal structure to
</span><br>
<span class="quotelev2">&gt; &gt; IPv6, as it is able to represent the whole v4 namespace.
</span><br>
<span class="quotelev2">&gt; &gt; One can always determine whether it is a real v6 or only
</span><br>
<span class="quotelev2">&gt; &gt; a mapped v4 address (the common ::ffff: prefix)
</span><br>
<span class="quotelev1">&gt; I'm far from knowledgeable in this networking area, but I have a
</span><br>
<span class="quotelev1">&gt; maybe-naive question here: Won't you have to assume in this case that
</span><br>
<span class="quotelev1">&gt; the host operating system has IPv6 support, so that the corresponding
</span><br>
<span class="quotelev1">&gt; data structures are defined?
</span><br>
<p>This is true. I don't know of any modern OS without IPv6 support,
<br>
even Windows provides these structures ;)
<br>
<p>If there is really a platform without sockaddr_in6, this should
<br>
be catched by configure (reverting to v4-only code, a little
<br>
tricky, yes).
<br>
<p>As far as I know: All BSDs have v6, Linux has, HPUX, AIX, Solaris,
<br>
Windows (XP for sure, 2000 experimental, 9X/ME don't).
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
  Schlecht: Dein Mann zieht gerne Frauenkleider an.
  Panik: Er sieht darin besser aus als du.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0792.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0790.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0792.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0792.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0793.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
