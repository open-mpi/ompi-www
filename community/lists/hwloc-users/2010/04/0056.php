<?
$subject_val = "Re: [hwloc-users] Creating a D wrapper around hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 14:19:09 2010" -->
<!-- isoreceived="20100417181909" -->
<!-- sent="Sat, 17 Apr 2010 20:19:03 +0200" -->
<!-- isosent="20100417181903" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Creating a D wrapper around hwloc" -->
<!-- id="6BBB3100-7A3E-4DCB-A3EC-2221033001AE_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="m2tb3ec41ba1004161317vef583711oa9245dda296dbbd2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Creating a D wrapper around hwloc<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 14:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0057.php">Jirka Hladky: "[hwloc-users] hwloc RPM spec file"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Jim Burnes: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Jim Burnes: "[hwloc-users] Creating a D wrapper around hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim Burnes,
<br>
<p>if D is Digital Mars D 1.0 you might want to know that I already did a  
<br>
wrapper, and I am using it since quite some it is part of blip which  
<br>
is available with an apache 2.0 license.
<br>
<p><a href="http://dsource.org/projects/blip">http://dsource.org/projects/blip</a>
<br>
<p>ciao
<br>
Fawzi
<br>
On 16-apr-10, at 22:17, Jim Burnes wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm creating a D wrapper around hwloc and so far it's going well, but
</span><br>
<span class="quotelev1">&gt; I need some advice...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the last issues I running into is at link time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since a number of functions (especially in helper.h) are define as
</span><br>
<span class="quotelev1">&gt; &quot;static __inline&quot; they are essentially macros.  This is why they don't
</span><br>
<span class="quotelev1">&gt; appear in the compiled libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can make these available to D in several different ways, but I need
</span><br>
<span class="quotelev1">&gt; to know the true intent of marking them as &quot;static __inline&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Are they marked that way simply to increase performance?
</span><br>
<span class="quotelev1">&gt; 2. Are they marked that way to avoid some sort of thread safety issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the answer is (1) then I can safely remove their &quot;static __inline&quot;
</span><br>
<span class="quotelev1">&gt; markup and compile them into the library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the answer is closer to (2) and you truly need them inlined into
</span><br>
<span class="quotelev1">&gt; the source code where they are referenced then I can create a template
</span><br>
<span class="quotelev1">&gt; mixin in D for them and include them like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a cool library.  Thanks for the extensive work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J Burnes
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0057.php">Jirka Hladky: "[hwloc-users] hwloc RPM spec file"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Jim Burnes: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Jim Burnes: "[hwloc-users] Creating a D wrapper around hwloc"</a>
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
