<?
$subject_val = "Re: [MTT devel] MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 07:37:25 2009" -->
<!-- isoreceived="20090430113725" -->
<!-- sent="Thu, 30 Apr 2009 07:37:15 -0400" -->
<!-- isosent="20090430113715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT" -->
<!-- id="208FB850-B1E7-4B10-AB00-C7C2E5C07750_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F95CF2.8040604_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 07:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/05/0410.php">Jeff Squyres: "[MTT devel] Moving to Mercurial"</a>
<li><strong>Previous message:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<li><strong>In reply to:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing and I talked off-list and fixed the problem.  I committed to  
<br>
both trunk and the v3.0 branch.
<br>
<p><p>On Apr 30, 2009, at 4:10 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I just found out that &quot;-o&quot; option doesn't exist on OS X. But
</span><br>
<span class="quotelev1">&gt; problem is we don't have client or whatami on Cygwin, are they Linux
</span><br>
<span class="quotelev1">&gt; shell commands?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I figured out another way to get the system type with Perl,  
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev1">&gt; &quot;my $sys_type=$^O&quot; will give us the same result as using &quot;uname -o&quot;.  
</span><br>
<span class="quotelev1">&gt; I'm
</span><br>
<span class="quotelev1">&gt; not a Perl expert, so I don't know how it works, but here is a link  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; Perl dev-reference:
</span><br>
<span class="quotelev1">&gt; <a href="http://perl.devquickref.com/perl-get-current-operating-system.html">http://perl.devquickref.com/perl-get-current-operating-system.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be a solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Shiqing --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like the &quot;uname -o&quot; that was added into OMPI.pm is
</span><br>
<span class="quotelev2">&gt; &gt; problematic on OS X.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What does client/whatami/whatami return on the platforms that you  
</span><br>
<span class="quotelev1">&gt; care
</span><br>
<span class="quotelev2">&gt; &gt; about?  I.e., can we re-write this chunk of code in
</span><br>
<span class="quotelev2">&gt; &gt; MPI/Install/OMPI.pm to use whatami output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     my $sys_type=`uname -o`;
</span><br>
<span class="quotelev2">&gt; &gt;     if(($sys_type =~ /cygwin/i || $sys_type =~ /msys/i) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt;         $config-&gt;{compiler_name} eq &quot;microsoft&quot;) {
</span><br>
<span class="quotelev2">&gt; &gt;     $install = MTT::Common::Cmake::Install($gnu);
</span><br>
<span class="quotelev2">&gt; &gt;     } else {
</span><br>
<span class="quotelev2">&gt; &gt;         $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/05/0410.php">Jeff Squyres: "[MTT devel] Moving to Mercurial"</a>
<li><strong>Previous message:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<li><strong>In reply to:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
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
