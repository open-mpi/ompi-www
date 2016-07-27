<?
$subject_val = "Re: [MTT devel] MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 04:12:14 2009" -->
<!-- isoreceived="20090430081214" -->
<!-- sent="Thu, 30 Apr 2009 10:10:26 +0200" -->
<!-- isosent="20090430081026" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT" -->
<!-- id="49F95CF2.8040604_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B283A1E5-1037-46FA-BB64-ECD07C9BDDC1_at_cisco.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 04:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Jeff Squyres: "Re: [MTT devel] MTT"</a>
<li><strong>Previous message:</strong> <a href="0407.php">Jeff Squyres: "Re: [MTT devel] Check a v3.0 commit"</a>
<li><strong>In reply to:</strong> <a href="0405.php">Jeff Squyres: "[MTT devel] MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Jeff Squyres: "Re: [MTT devel] MTT"</a>
<li><strong>Reply:</strong> <a href="0409.php">Jeff Squyres: "Re: [MTT devel] MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Yes, I just found out that &quot;-o&quot; option doesn't exist on OS X. But 
<br>
problem is we don't have client or whatami on Cygwin, are they Linux 
<br>
shell commands?
<br>
<p>Anyway, I figured out another way to get the system type with Perl, just 
<br>
&quot;my $sys_type=$^O&quot; will give us the same result as using &quot;uname -o&quot;. I'm 
<br>
not a Perl expert, so I don't know how it works, but here is a link from 
<br>
Perl dev-reference: 
<br>
<a href="http://perl.devquickref.com/perl-get-current-operating-system.html">http://perl.devquickref.com/perl-get-current-operating-system.html</a>
<br>
<p>Could this be a solution?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Shiqing --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the &quot;uname -o&quot; that was added into OMPI.pm is 
</span><br>
<span class="quotelev1">&gt; problematic on OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does client/whatami/whatami return on the platforms that you care 
</span><br>
<span class="quotelev1">&gt; about?  I.e., can we re-write this chunk of code in 
</span><br>
<span class="quotelev1">&gt; MPI/Install/OMPI.pm to use whatami output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     my $sys_type=`uname -o`;
</span><br>
<span class="quotelev1">&gt;     if(($sys_type =~ /cygwin/i || $sys_type =~ /msys/i) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;         $config-&gt;{compiler_name} eq &quot;microsoft&quot;) {
</span><br>
<span class="quotelev1">&gt;     $install = MTT::Common::Cmake::Install($gnu);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         $install = MTT::Common::GNU_Install::Install($gnu);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Jeff Squyres: "Re: [MTT devel] MTT"</a>
<li><strong>Previous message:</strong> <a href="0407.php">Jeff Squyres: "Re: [MTT devel] Check a v3.0 commit"</a>
<li><strong>In reply to:</strong> <a href="0405.php">Jeff Squyres: "[MTT devel] MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Jeff Squyres: "Re: [MTT devel] MTT"</a>
<li><strong>Reply:</strong> <a href="0409.php">Jeff Squyres: "Re: [MTT devel] MTT"</a>
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
