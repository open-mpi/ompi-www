<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 08:40:03 2011" -->
<!-- isoreceived="20110614124003" -->
<!-- sent="Tue, 14 Jun 2011 08:39:57 -0400" -->
<!-- isosent="20110614123957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="9E61A00D-2906-4D3F-B04F-161FFCD11F9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DF6AB95.4020505_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-14 08:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2203.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2203.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2011, at 8:30 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Well oddly only one of the 2 locations had been built
</span><br>
<span class="quotelev1">&gt; (the one with the makelog), but just in case I've redone
</span><br>
<span class="quotelev1">&gt; it from scratch - compressed and attached.
</span><br>
<p>Ok, these seem consistent.  Thanks!
<br>
<p>It looks like our test might not be hitting the same corner case as the final executable:
<br>
<p>-----
<br>
configure:10145: checking for pci_init in -lpci
<br>
configure:10170: gcc -o conftest  -I/usr/local/rsync/3.0.7/include -I/usr/local/openmpi/1.4.2-intel/include -L/usr/local/rsync/3.0.7/lib -L/usr/local/openmpi/1.4.2-intel/lib conftest.c -lpci   &gt;&amp;5
<br>
configure:10170: $? = 0
<br>
configure:10179: result: yes
<br>
-----
<br>
<p>Meaning: we had no problem linking against libpci.a in configure.  So the hwloc build continued.
<br>
<p>I can only assume that we're invoking some other libpci function in the code base that eventually ends up invoking other internal libpci functions that end up needing the __res_query symbol.  Since linkers only pull in the relevant .o's from libraries (as determined by symbol-linking graphs), this seems like a plausible explanation.
<br>
<p>So I guess we need to add another test to configure -- to see if we need to explicitly link in -lresolv.  
<br>
<p>Chris -- can you try linking this simple app to see if it causes the linker error, and further try adding -lresolv to see if that fixes the error?
<br>
<p>------
<br>
#ifdef __cplusplus
<br>
extern &quot;C&quot;
<br>
#endif
<br>
char pci_lookup_name ();
<br>
int
<br>
main ()
<br>
{
<br>
return pci_lookup_name ();
<br>
&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>Try with:
<br>
<p>gcc -o conftest conftest.c -lpci
<br>
gcc -o conftest conftest.c -lpci -lresolv
<br>
<p>FWIW, on my RHEL 5 machine (with only libpci.a), both link commands seem to work (but my libpci.a doesn't have a __res_query symbol).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2203.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2203.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
