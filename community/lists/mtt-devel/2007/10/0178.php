<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 16:12:17 2007" -->
<!-- isoreceived="20071023201217" -->
<!-- sent="Tue, 23 Oct 2007 16:12:11 -0400" -->
<!-- isosent="20071023201211" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] Perl Garbage Collection" -->
<!-- id="20071023201211.GC5487_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 16:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Jeff Squyres: "Re: [MTT devel] Perl Garbage Collection"</a>
<li><strong>Previous message:</strong> <a href="0177.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Jeff Squyres: "Re: [MTT devel] Perl Garbage Collection"</a>
<li><strong>Reply:</strong> <a href="0179.php">Jeff Squyres: "Re: [MTT devel] Perl Garbage Collection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open question: does MTT make good use of Perl's garbage
<br>
collector? E.g., is this good or bad Perl?
<br>
<p>&nbsp;&nbsp;use Foo;
<br>
&nbsp;&nbsp;my bar;
<br>
<p>&nbsp;&nbsp;sub baz {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my $bar = new Foo;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&amp;Foo::baz();
<br>
&nbsp;&nbsp;&amp;Foo::baz();
<br>
&nbsp;&nbsp;&amp;Foo::baz();
<br>
&nbsp;&nbsp;...
<br>
<p>When, if ever, is it best to reclaim memory using DESTROY?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Jeff Squyres: "Re: [MTT devel] Perl Garbage Collection"</a>
<li><strong>Previous message:</strong> <a href="0177.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Jeff Squyres: "Re: [MTT devel] Perl Garbage Collection"</a>
<li><strong>Reply:</strong> <a href="0179.php">Jeff Squyres: "Re: [MTT devel] Perl Garbage Collection"</a>
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
