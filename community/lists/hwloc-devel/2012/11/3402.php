<?
$subject_val = "[hwloc-devel] XML::Simple doesn't like lstopo's XML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 13:02:02 2012" -->
<!-- isoreceived="20121119180202" -->
<!-- sent="Mon, 19 Nov 2012 13:01:40 -0500" -->
<!-- isosent="20121119180140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] XML::Simple doesn't like lstopo's XML" -->
<!-- id="DE1DAC88-6B68-42C6-AC2C-6DE4F2303AA3_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] XML::Simple doesn't like lstopo's XML<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 13:01:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3403.php">Brice Goglin: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Previous message:</strong> <a href="3401.php">Jeff Squyres: "[hwloc-devel] Nightly v1.6 tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3403.php">Brice Goglin: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Reply:</strong> <a href="3403.php">Brice Goglin: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Odd.  On the SVN trunk, I'm running this code:
<br>
<p>-----
<br>
open (LSTOPO, &quot;lstopo -.xml|&quot;) || die &quot;Can't open lstopo&quot;;                        
<br>
my $lstopo;                                                                       
<br>
while (&lt;LSTOPO&gt;) {                                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$lstopo .= $_;                                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;print &quot;Read: $_&quot;;                                                             
<br>
}                                                                                 
<br>
close(LSTOPO);                                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
my $xml;                                                                          
<br>
$xml = XMLin($lstopo);                                                            
<br>
print Dumper($xml);
<br>
-----
<br>
<p>In looking at the output, I see that lstopo's XML output includes all PCI devices, but when I look at the Dumper output of the parsed XML, some PCI devices are not listed.  In particular: both eth4 and eth5 are included in the &quot;lstopo -.xml&quot; output, but eth4 is not included in the Dumper output.
<br>
<p>The same thing happens if I &quot;lstopo foo.xml&quot; and then &quot;XMLin(&quot;foo.xml&quot;)&quot;.  So it's not a problem with perl reading from lstopo's stdout.
<br>
<p>I've attached foo.xml -- any ideas why this is happening?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3402/svbu-mpi060.xml">svbu-mpi060.xml</a>
</ul>
<!-- attachment="svbu-mpi060.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3403.php">Brice Goglin: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Previous message:</strong> <a href="3401.php">Jeff Squyres: "[hwloc-devel] Nightly v1.6 tarballs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3403.php">Brice Goglin: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
<li><strong>Reply:</strong> <a href="3403.php">Brice Goglin: "Re: [hwloc-devel] XML::Simple doesn't like lstopo's XML"</a>
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
