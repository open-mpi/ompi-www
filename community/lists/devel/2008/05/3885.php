<?
$subject_val = "Re: [OMPI devel] &quot;__printf__&quot; attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 10 06:57:48 2008" -->
<!-- isoreceived="20080510105748" -->
<!-- sent="Sat, 10 May 2008 12:53:12 +0200" -->
<!-- isosent="20080510105312" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;__printf__&amp;quot; attribute" -->
<!-- id="200805101253.12627.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44A6B554-F503-404F-8433-0300D9373387_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;__printf__&quot; attribute<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-10 06:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3886.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3867.php">Jeff Squyres: "Re: [OMPI devel] &quot;__printf__&quot; attribute"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
thanks; actually I have got still the __attribute__((hot)) / cold pending. 
<br>
Please see checkin r18421.
<br>
<p>I also updated the wiki.
<br>
<p>CU,
<br>
Rainer
<br>
<p><p><p><p>On Friday 09 May 2008 00:34, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Cool; I've updated the wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 8, 2008, at 6:29 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt; &gt; They refer to the parameters of the function. In the example linked, 2
</span><br>
<span class="quotelev2">&gt; &gt; means the fmt is the second argument of the function and 3 is the
</span><br>
<span class="quotelev2">&gt; &gt; first variadic arg related to the fmt string.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aurelien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 8 mai 08 &#224; 18:24, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rainer --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What do the numeric arguments refer to in the attribute format stuff?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The wiki page has only one example, and it doesn't explain what these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; numbers are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes">https://svn.open-mpi.org/trac/ompi/wiki/CompilerAttributes</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3886.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3867.php">Jeff Squyres: "Re: [OMPI devel] &quot;__printf__&quot; attribute"</a>
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
