<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 07:14:34 2007" -->
<!-- isoreceived="20070709111434" -->
<!-- sent="Mon, 9 Jul 2007 07:14:24 -0400" -->
<!-- isosent="20070709111424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Perl Wrap Error" -->
<!-- id="A96A744A-1EC5-48D4-BEC2-0F19992A4B2A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E608C833-3C79-4420-BFA2-98D7F5C457BF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-09 07:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>In reply to:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So do we know what caused the error?  Wrap.pm is not inside MTT  
<br>
(hopefully there's not a bug in it) -- are we calling it incorrectly  
<br>
in some cases?
<br>
<p><p>On Jul 6, 2007, at 4:39 PM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; That seemed to have done the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2007, at 3:04 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jul/06/2007 01:22:06PM, Joshua Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone seen the following error from MTT before? It looks like it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reporter stage.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;-------------------------&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ /spin/home/jjhursey/testing/mtt//client/mtt --mpi-install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --scratch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /spin/home/jjhursey/testing/scratch/20070706 --file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /spin/home/jjhursey/testing/etc/jaguar/simple-svn.ini --print-time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --verbose --debug 2&gt;&amp;1 1&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /spin/home/jjhursey/testing/scratch/20070706/output.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This shouldn't happen at /usr/lib/perl5/5.8.3/Text/Wrap.pm line 64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;-------------------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;This shouldn't happen at ...&quot; is the die message?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try this INI [Reporter: TextFile] section:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt;   [Reporter: text file backup]
</span><br>
<span class="quotelev2">&gt;&gt;   module = TextFile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   # User-defined report headers/footers
</span><br>
<span class="quotelev2">&gt;&gt;   textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt;   hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;   EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   textfile_summary_footer =
</span><br>
<span class="quotelev2">&gt;&gt;   textfile_detail_header  =
</span><br>
<span class="quotelev2">&gt;&gt;   textfile_detail_footer  =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   textfile_textwrap = 78
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The return code is: 6400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attached the output log incase that helps, and the INI file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0347.php">Tim Prins: "Re: [MTT users] Database insert errors"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
<li><strong>In reply to:</strong> <a href="0345.php">Joshua Hursey: "Re: [MTT users] Perl Wrap Error"</a>
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
