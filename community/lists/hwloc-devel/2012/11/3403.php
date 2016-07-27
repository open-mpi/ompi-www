<?
$subject_val = "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 14:59:59 2012" -->
<!-- isoreceived="20121119195959" -->
<!-- sent="Mon, 19 Nov 2012 20:59:49 +0100" -->
<!-- isosent="20121119195949" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML" -->
<!-- id="50AA8FB5.2080000_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE1DAC88-6B68-42C6-AC2C-6DE4F2303AA3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 14:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Previous message:</strong> <a href="3402.php">Jeff Squyres: "[hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>In reply to:</strong> <a href="3402.php">Jeff Squyres: "[hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Reply:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks related to these warnings:
<br>
<p>Warning: &lt;object&gt; element has non-unique value in 'name' key attribute:
<br>
Intel Corporation I350 Gigabit Network Connection at ./topo.pl line 16
<br>
Warning: &lt;object&gt; element has non-unique value in 'name' key attribute:
<br>
Intel Corporation I350 Gigabit Network Connection at ./topo.pl line 16
<br>
Warning: &lt;object&gt; element has non-unique value in 'name' key attribute:
<br>
Intel Corporation I350 Gigabit Network Connection at ./topo.pl line 16
<br>
Warning: &lt;object&gt; element has non-unique value in 'name' key attribute:
<br>
Cisco Systems Inc VIC PCIe Downstream Port at ./topo.pl line 16
<br>
<p><p>If I replace name=... with foo=... in the XML, those go away and all
<br>
your eth interfaces come back. So it looks like there may be something
<br>
special with the &quot;name&quot; attribute of XML objects. What's strange is that
<br>
it seems to only happen when two children have the same &quot;name&quot; XML
<br>
attribute. We have quite a lot of same &quot;name&quot; attributes, but not always
<br>
in sibling XML objects.
<br>
<p>I am trying to find out whether we misrespect the XML specs, but I
<br>
couldn't so far. Maybe it's a XML::Simple problem? libxml2 and xmllint
<br>
never complained like this.
<br>
<p>Brice
<br>
<p><p><p><p>Le 19/11/2012 19:01, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Odd.  On the SVN trunk, I'm running this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; open (LSTOPO, &quot;lstopo -.xml|&quot;) || die &quot;Can't open lstopo&quot;;                        
</span><br>
<span class="quotelev1">&gt; my $lstopo;                                                                       
</span><br>
<span class="quotelev1">&gt; while (&lt;LSTOPO&gt;) {                                                                
</span><br>
<span class="quotelev1">&gt;     $lstopo .= $_;                                                                
</span><br>
<span class="quotelev1">&gt;     print &quot;Read: $_&quot;;                                                             
</span><br>
<span class="quotelev1">&gt; }                                                                                 
</span><br>
<span class="quotelev1">&gt; close(LSTOPO);                                                                    
</span><br>
<span class="quotelev1">&gt;                                                                                   
</span><br>
<span class="quotelev1">&gt; my $xml;                                                                          
</span><br>
<span class="quotelev1">&gt; $xml = XMLin($lstopo);                                                            
</span><br>
<span class="quotelev1">&gt; print Dumper($xml);
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In looking at the output, I see that lstopo's XML output includes all PCI devices, but when I look at the Dumper output of the parsed XML, some PCI devices are not listed.  In particular: both eth4 and eth5 are included in the &quot;lstopo -.xml&quot; output, but eth4 is not included in the Dumper output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same thing happens if I &quot;lstopo foo.xml&quot; and then &quot;XMLin(&quot;foo.xml&quot;)&quot;.  So it's not a problem with perl reading from lstopo's stdout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached foo.xml -- any ideas why this is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Previous message:</strong> <a href="3402.php">Jeff Squyres: "[hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>In reply to:</strong> <a href="3402.php">Jeff Squyres: "[hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Reply:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
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
