<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 18:40:39 2007" -->
<!-- isoreceived="20071023224039" -->
<!-- sent="Tue, 23 Oct 2007 18:40:29 -0400" -->
<!-- isosent="20071023224029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Perl Garbage Collection" -->
<!-- id="CA74AE04-29CC-43CE-B94F-11C9FB322716_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071023201211.GC5487_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-23 18:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0180.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0178.php">Ethan Mallove: "[MTT devel] Perl Garbage Collection"</a>
<li><strong>In reply to:</strong> <a href="0178.php">Ethan Mallove: "[MTT devel] Perl Garbage Collection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've personally never worried about it except deleting Very Large  
<br>
hash members (like stdout/stderr capturing).
<br>
<p>On Oct 23, 2007, at 4:12 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Open question: does MTT make good use of Perl's garbage
</span><br>
<span class="quotelev1">&gt; collector? E.g., is this good or bad Perl?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   use Foo;
</span><br>
<span class="quotelev1">&gt;   my bar;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   sub baz {
</span><br>
<span class="quotelev1">&gt;     my $bar = new Foo;
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   &amp;Foo::baz();
</span><br>
<span class="quotelev1">&gt;   &amp;Foo::baz();
</span><br>
<span class="quotelev1">&gt;   &amp;Foo::baz();
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When, if ever, is it best to reclaim memory using DESTROY?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0180.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0178.php">Ethan Mallove: "[MTT devel] Perl Garbage Collection"</a>
<li><strong>In reply to:</strong> <a href="0178.php">Ethan Mallove: "[MTT devel] Perl Garbage Collection"</a>
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
