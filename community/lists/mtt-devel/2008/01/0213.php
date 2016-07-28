<?
$subject_val = "Re: [MTT devel] [OMPI devel] Cisco MTT runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:32:40 2008" -->
<!-- isoreceived="20080110163240" -->
<!-- sent="Thu, 10 Jan 2008 11:32:37 -0500" -->
<!-- isosent="20080110163237" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [OMPI devel] Cisco MTT runs" -->
<!-- id="951E95BE-3FAE-4070-9D18-194B42A97D39_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C949F516-88F4-4256-B746-3DD772D50A29_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 11:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0214.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<li><strong>Reply:</strong> <a href="0214.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So we already have this implemented in the configuration file. Props  
<br>
to Jeff for the addition in r949. The $mtt_body_html_{prefix|suffix}  
<br>
variable seems to do the trick.
<br>
<p>I added a link to contribution graph to the bottom of the reporter. I  
<br>
moved where this graph lives from my osl.iu.edu space to the www.open-mpi.org/mtt/stats 
<br>
&nbsp;&nbsp;directory. The graph should be updated every night. I created a file  
<br>
that we can edit (body_suffix.html) so if we want to change this we  
<br>
don't have to keep changing the config.ini file.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><p>On Jan 8, 2008, at 10:58 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 8, 2008, at 10:45 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Switching to MTT devel, forgot that we were mailing to OMPI devel
</span><br>
<span class="quotelev2">&gt;&gt; before :/)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah. Yeah that makes sense we can allow folks to add some custom,
</span><br>
<span class="quotelev2">&gt;&gt; static text to the reporter page.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are we talking just a header and a footer for now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that would be sufficient.  I could have sworn that we had an
</span><br>
<span class="quotelev1">&gt; open MTT ticket on this, but now I can't find it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2008, at 8:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 7, 2008, at 2:03 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It should be easy enough to add some prefix/suffix/hook-like HTML
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; somewhere in the standard MTT config that can customize the output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HTML (i.e., put some additional information on the page, such as a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; link to this graph)...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure I understand what you are trying to say here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, *I* knew what I meant...  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I meant was that we could add a hook to the MTT server side
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config such that a site can add their own HTML to the reporter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without needing to modify the MTT code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0214.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Josh Hursey: "[MTT devel] MTT Visualization"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0214.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
<li><strong>Reply:</strong> <a href="0214.php">Jeff Squyres: "Re: [MTT devel] [OMPI devel] Cisco MTT runs"</a>
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
