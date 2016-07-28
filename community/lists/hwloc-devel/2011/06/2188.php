<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 05:12:07 2011" -->
<!-- isoreceived="20110613091207" -->
<!-- sent="Mon, 13 Jun 2011 19:11:58 +1000" -->
<!-- isosent="20110613091158" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DF5D45E.3070700_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DF45264.1030502_at_unimelb.edu.au" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 05:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2187.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2186.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 12/06/11 15:45, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; I *suspect* it's being pulled in by libpci - here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm /usr/lib/libpci.a | grep res_query
</span><br>
<span class="quotelev1">&gt;          U __res_query
</span><br>
<p>OK, looks like libpci may well be the culprit.  Linking
<br>
with the default libtool command line includes the symbol:
<br>
<p>$ /bin/sh ../libtool  --tag=CC   --mode=link gcc -g -fvisibility=hidden
<br>
&nbsp;-I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2
<br>
&nbsp;-I/tmp/HWLOC/hwloc-1.3a1r3511/include    -no-undefined  -version-number
<br>
0:0:0 -lxml2 -lz -lm    -lpci -o libhwloc.la -rpath /usr/local/lib
<br>
topology.lo traversal.lo distances.lo topology-synthetic.lo bind.lo
<br>
cpuset.lo misc.lo topology-xml.lo topology-libpci.lo  topology-linux.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;topology-x86.lo
<br>
libtool: link: rm -fr  .libs/libhwloc.la .libs/libhwloc.lai
<br>
.libs/libhwloc.so .libs/libhwloc.so.0 .libs/libhwloc.so.0.0.0
<br>
libtool: link: gcc -g -shared  .libs/topology.o .libs/traversal.o
<br>
.libs/distances.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o
<br>
.libs/misc.o .libs/topology-xml.o .libs/topology-libpci.o
<br>
.libs/topology-linux.o .libs/topology-x86.o   -lxml2 -lz -lm -lpci
<br>
- -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.0.0
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libhwloc.so.0&quot; &amp;&amp; ln -s
<br>
&quot;libhwloc.so.0.0.0&quot; &quot;libhwloc.so.0&quot;)
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libhwloc.so&quot; &amp;&amp; ln -s
<br>
&quot;libhwloc.so.0.0.0&quot; &quot;libhwloc.so&quot;)
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libhwloc.la&quot; &amp;&amp; ln -s
<br>
&quot;../libhwloc.la&quot; &quot;libhwloc.la&quot; )
<br>
<p>$ grep -R __res_query .
<br>
Binary file ./.libs/libhwloc.so matches
<br>
Binary file ./.libs/libhwloc.so.0.0.0 matches
<br>
Binary file ./.libs/libhwloc.so.0 matches
<br>
<p><p>Removing the -lpci results in a library which no longer
<br>
references it..
<br>
<p>$ /bin/sh ../libtool  --tag=CC   --mode=link gcc -g -fvisibility=hidden
<br>
&nbsp;-I/usr/include/libxml2   -fvisibility=hidden  -I/usr/include/libxml2
<br>
&nbsp;-I/tmp/HWLOC/hwloc-1.3a1r3511/include    -no-undefined  -version-number
<br>
0:0:0 -lxml2 -lz -lm   -o libhwloc.la -rpath /usr/local/lib topology.lo
<br>
traversal.lo distances.lo topology-synthetic.lo bind.lo cpuset.lo
<br>
misc.lo topology-xml.lo topology-libpci.lo  topology-linux.lo
<br>
topology-x86.lo
<br>
libtool: link: rm -fr  .libs/libhwloc.la .libs/libhwloc.lai
<br>
.libs/libhwloc.so .libs/libhwloc.so.0 .libs/libhwloc.so.0.0.0
<br>
libtool: link: gcc -g -shared  .libs/topology.o .libs/traversal.o
<br>
.libs/distances.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o
<br>
.libs/misc.o .libs/topology-xml.o .libs/topology-libpci.o
<br>
.libs/topology-linux.o .libs/topology-x86.o   -lxml2 -lz -lm
<br>
- -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.0.0
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libhwloc.so.0&quot; &amp;&amp; ln -s
<br>
&quot;libhwloc.so.0.0.0&quot; &quot;libhwloc.so.0&quot;)
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libhwloc.so&quot; &amp;&amp; ln -s
<br>
&quot;libhwloc.so.0.0.0&quot; &quot;libhwloc.so&quot;)
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libhwloc.la&quot; &amp;&amp; ln -s
<br>
&quot;../libhwloc.la&quot; &quot;libhwloc.la&quot; )
<br>
$ grep -R __res_query .
<br>
$
<br>
<p><p>So it's a system library issue - over to you folks! :-)
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk311F4ACgkQO2KABBYQAh/iIgCffHbQkshfPPBOo+ls2JwXB2pO
<br>
jSgAnjZqBtDsHZBJNVkmrxq6uJ9KRonv
<br>
=ZC4K
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2187.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2186.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
