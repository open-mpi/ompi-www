<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 10:50:46 2007" -->
<!-- isoreceived="20070911145046" -->
<!-- sent="Tue, 11 Sep 2007 10:50:35 -0400" -->
<!-- isosent="20070911145035" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r998" -->
<!-- id="E5E70F06-1A94-445E-A734-C9D3C4A95CA4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200709071552.l87Fq4H2025121_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-09-11 10:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Reply:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>Could you show the use case that motivated this change?
<br>
<p>Thanks.
<br>
<p><p>On Sep 7, 2007, at 11:52 AM, emallove_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-07 11:52:04 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 998
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/998">https://svn.open-mpi.org/trac/mtt/changeset/998</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Escape the Perl regular expression quantifiers in
</span><br>
<span class="quotelev1">&gt; `&amp;MPI::OMPI::find_network` (for test names such as
</span><br>
<span class="quotelev1">&gt; `mpic++`).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm |     3 +++
</span><br>
<span class="quotelev1">&gt;    1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp/jms-new-parser/lib/MTT/Values/Functions/MPI/OMPI.pm	 
</span><br>
<span class="quotelev1">&gt; 2007-09-07 11:52:04 EDT (Fri, 07 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -98,6 +98,9 @@
</span><br>
<span class="quotelev1">&gt;      # Ignore argv[0]
</span><br>
<span class="quotelev1">&gt;      $str =~ s/^\s*\S+\s*(.+)$/\1/;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    # Escape the quantifiers (for test names such as &quot;mpi2c++&quot;)
</span><br>
<span class="quotelev1">&gt; +    $final =~ s/(\?|\*|\+|\{|\})/\\$1/g;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      # Ignore everything beyond $final
</span><br>
<span class="quotelev1">&gt;      $str =~ s/^(.+)\s*$final.+$/\1/;
</span><br>
<span class="quotelev1">&gt;      Debug(&quot;Examining: $str\n&quot;);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
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
<li><strong>Next message:</strong> <a href="0096.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Jeff Squyres: "Re: [MTT devel] Why does OMPI.pm do a Copytree before it installs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
<li><strong>Reply:</strong> <a href="0097.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r998"</a>
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
