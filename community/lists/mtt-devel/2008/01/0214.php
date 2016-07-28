<?
$subject_val = "Re: [MTT devel] [OMPI devel] Cisco MTT runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:55:26 2008" -->
<!-- isoreceived="20080110165526" -->
<!-- sent="Thu, 10 Jan 2008 11:42:53 -0500" -->
<!-- isosent="20080110164253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [OMPI devel] Cisco MTT runs" -->
<!-- id="6640E5CA-7505-4220-9712-5E38D1D9B516_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="951E95BE-3FAE-4070-9D18-194B42A97D39_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] [OMPI devel] Cisco MTT runs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 11:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Jeff Squyres: "[MTT devel] mtt reporter popups broken"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Josh Hursey: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Josh Hursey: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome -- thanks Josh!
<br>
<p>On Jan 10, 2008, at 11:32 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; So we already have this implemented in the configuration file. Props
</span><br>
<span class="quotelev1">&gt; to Jeff for the addition in r949. The $mtt_body_html_{prefix|suffix}
</span><br>
<span class="quotelev1">&gt; variable seems to do the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added a link to contribution graph to the bottom of the reporter. I
</span><br>
<span class="quotelev1">&gt; moved where this graph lives from my osl.iu.edu space to the www.open-mpi.org/mtt/stats
</span><br>
<span class="quotelev1">&gt;  directory. The graph should be updated every night. I created a file
</span><br>
<span class="quotelev1">&gt; that we can edit (body_suffix.html) so if we want to change this we
</span><br>
<span class="quotelev1">&gt; don't have to keep changing the config.ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2008, at 10:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2008, at 10:45 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Switching to MTT devel, forgot that we were mailing to OMPI devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before :/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah. Yeah that makes sense we can allow folks to add some custom,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static text to the reporter page.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are we talking just a header and a footer for now?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that would be sufficient.  I could have sworn that we had an
</span><br>
<span class="quotelev2">&gt;&gt; open MTT ticket on this, but now I can't find it...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 8, 2008, at 8:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 7, 2008, at 2:03 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It should be easy enough to add some prefix/suffix/hook-like HTML
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; somewhere in the standard MTT config that can customize the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTML (i.e., put some additional information on the page, such  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; link to this graph)...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure I understand what you are trying to say here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, *I* knew what I meant...  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I meant was that we could add a hook to the MTT server side
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config such that a site can add their own HTML to the reporter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without needing to modify the MTT code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0215.php">Jeff Squyres: "[MTT devel] mtt reporter popups broken"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Josh Hursey: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<li><strong>In reply to:</strong> <a href="0213.php">Josh Hursey: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
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
