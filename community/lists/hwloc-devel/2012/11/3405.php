<?
$subject_val = "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 15:17:58 2012" -->
<!-- isoreceived="20121119201758" -->
<!-- sent="Mon, 19 Nov 2012 21:17:53 +0100" -->
<!-- isosent="20121119201753" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML" -->
<!-- id="50AA93F1.7000309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9DD9462C-0444-41A6-BF4B-E97E70EF3F36_at_cisco.com" -->
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
<strong>Date:</strong> 2012-11-19 15:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3406.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5063)"</a>
<li><strong>Previous message:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>In reply to:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works for me. I'll save all this in a &quot;wontfix&quot; trac ticket in case
<br>
somebody ever complains again.
<br>
<p>Brice
<br>
<p><p><p>Le 19/11/2012 21:14, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; It could also be that XML::Simple is just that -- simple...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at <a href="http://search.cpan.org/~grantm/XML-Simple-2.20/lib/XML/Simple.pm">http://search.cpan.org/~grantm/XML-Simple-2.20/lib/XML/Simple.pm</a>, it says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The use of this module in new code is discouraged. Other modules are available which provide more straightforward and consistent interfaces. In particular, XML::LibXML is highly recommended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So perhaps we should just ignore my report.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 19, 2012, at 2:59 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks related to these warnings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Warning: &lt;object&gt; element has non-unique value in 'name' key attribute: Intel Corporation I350 Gigabit Network Connection at ./topo.pl line 16
</span><br>
<span class="quotelev2">&gt;&gt; Warning: &lt;object&gt; element has non-unique value in 'name' key attribute: Intel Corporation I350 Gigabit Network Connection at ./topo.pl line 16
</span><br>
<span class="quotelev2">&gt;&gt; Warning: &lt;object&gt; element has non-unique value in 'name' key attribute: Intel Corporation I350 Gigabit Network Connection at ./topo.pl line 16
</span><br>
<span class="quotelev2">&gt;&gt; Warning: &lt;object&gt; element has non-unique value in 'name' key attribute: Cisco Systems Inc VIC PCIe Downstream Port at ./topo.pl line 16
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I replace name=... with foo=... in the XML, those go away and all your eth interfaces come back. So it looks like there may be something special with the &quot;name&quot; attribute of XML objects. What's strange is that it seems to only happen when two children have the same &quot;name&quot; XML attribute. We have quite a lot of same &quot;name&quot; attributes, but not always in sibling XML objects.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to find out whether we misrespect the XML specs, but I couldn't so far. Maybe it's a XML::Simple problem? libxml2 and xmllint never complained like this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 19/11/2012 19:01, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Odd.  On the SVN trunk, I'm running this code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open (LSTOPO, &quot;lstopo -.xml|&quot;) || die &quot;Can't open lstopo&quot;;                        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $lstopo;                                                                       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while (&lt;LSTOPO&gt;) {                                                                
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $lstopo .= $_;                                                                
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     print &quot;Read: $_&quot;;                                                             
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }                                                                                 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; close(LSTOPO);                                                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                                                   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $xml;                                                                          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $xml = XMLin($lstopo);                                                            
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print Dumper($xml);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In looking at the output, I see that lstopo's XML output includes all PCI devices, but when I look at the Dumper output of the parsed XML, some PCI devices are not listed.  In particular: both eth4 and eth5 are included in the &quot;lstopo -.xml&quot; output, but eth4 is not included in the Dumper output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same thing happens if I &quot;lstopo foo.xml&quot; and then &quot;XMLin(&quot;foo.xml&quot;)&quot;.  So it's not a problem with perl reading from lstopo's stdout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've attached foo.xml -- any ideas why this is happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3406.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5063)"</a>
<li><strong>Previous message:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>In reply to:</strong> <a href="3404.php">Jeff Squyres: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
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
