<?
$subject_val = "Re: [OMPI devel] configure broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 21:19:34 2009" -->
<!-- isoreceived="20091023011934" -->
<!-- sent="Thu, 22 Oct 2009 21:19:30 -0400" -->
<!-- isosent="20091023011930" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure broken" -->
<!-- id="ea86ce220910221819j6d7e307bm13540753eeff3a66_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1C1007F2-38E3-43C1-AB97-129E364C9731_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure broken<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 21:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7016.php">George Bosilca: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>In reply to:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7016.php">George Bosilca: "Re: [OMPI devel] configure broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just fixed it in r22130.
<br>
<p>On Thu, Oct 22, 2009 at 9:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Most interesting - I have been building on Mac OSX both yesterday and today
</span><br>
<span class="quotelev1">&gt; with those changes without problem. I am on Snow Leopard, but I checked and
</span><br>
<span class="quotelev1">&gt; &quot;true&quot; is indeed in /usr/bin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not seeing any warnings or problems. Perhaps a difference in
</span><br>
<span class="quotelev1">&gt; configuration? Though I did also test it with a completely empty ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=foo run, again with no problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2009, at 7:09 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There seems to be an issue with the latest changes on the configure
</span><br>
<span class="quotelev2">&gt;&gt; scripts. A careful reading of the output of configure on MAC OS X shows a
</span><br>
<span class="quotelev2">&gt;&gt; lot of errors/warnings, which leads to undefined AM_CONDITIONALS
</span><br>
<span class="quotelev2">&gt;&gt; (PROJECT_OMPI_*). This apparently comes from configure.ac line 62 where the
</span><br>
<span class="quotelev2">&gt;&gt; path to /bin/true is hardcoded! Of course /bin/true doesn't exist on MAC OS
</span><br>
<span class="quotelev2">&gt;&gt; X, instead it is locate in /usr/bin/.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev2">&gt;&gt; ../ompi/configure: line 5480: /bin/true: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ../ompi/configure: line 5488: /bin/true: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7016.php">George Bosilca: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>In reply to:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7016.php">George Bosilca: "Re: [OMPI devel] configure broken"</a>
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
