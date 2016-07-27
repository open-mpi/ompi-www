<?
$subject_val = "Re: [hwloc-devel] Hwloc perl binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 14:41:58 2010" -->
<!-- isoreceived="20101215194158" -->
<!-- sent="Wed, 15 Dec 2010 20:41:42 +0100" -->
<!-- isosent="20101215194142" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hwloc perl binding" -->
<!-- id="1292442102.2272.159.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D08C8F4.8050604_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hwloc perl binding<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 14:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-12-15 at 14:56 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 15/12/2010 14:45, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; The CPAN thing is the third implementation, which works with objects and
</span><br>
<span class="quotelev2">&gt; &gt; accessor methods. It is as fast as the first implementation, and perl
</span><br>
<span class="quotelev2">&gt; &gt; code looks almost like C code (except that it is not possible now to
</span><br>
<span class="quotelev2">&gt; &gt; compare the hwloc_obj perl representatives by value).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you add something like obj-&gt;id which would contain a unique id
</span><br>
<span class="quotelev1">&gt; (the original C pointer?) that could be used to compare objects?
</span><br>
<p>I added the global method hwloc_compare_objects($topo,$o1,$o2) with the
<br>
OO aliases $topo-&gt;compare_objects($o1,$o2) and $o1-&gt;is_same_obj($o2).
<br>
The method returns true or false, and also works with undef values. I
<br>
guess this is better than exposing the raw C pointer value as perl
<br>
integer.
<br>
<p>I'll collect ideas like that, and will post a next Sys::Hwloc version
<br>
via CPAN.
<br>
<p><span class="quotelev2">&gt; &gt; In summary I'm very satisfied with this implementation. There remains
</span><br>
<span class="quotelev2">&gt; &gt; the question how one should handle structs like hwloc_obj_memory_s and
</span><br>
<span class="quotelev2">&gt; &gt; the like. In my implementation these are represented by perl hashes.
</span><br>
<span class="quotelev2">&gt; &gt; SWIG code would map them to perl objects. The difference is:
</span><br>
<span class="quotelev2">&gt; &gt; my: $obj-&gt;memory-&gt;{total_memory}
</span><br>
<span class="quotelev2">&gt; &gt; OO: $obj-&gt;memory-&gt;total_memory
</span><br>
<span class="quotelev2">&gt; &gt; The first variant is uncoupled from the hwloc_obj struct, and allows to
</span><br>
<span class="quotelev2">&gt; &gt; change values or store additional things in the hash.
</span><br>
<span class="quotelev2">&gt; &gt; The second variant may allow manipulation of the hwloc_obj struct in the
</span><br>
<span class="quotelev2">&gt; &gt; memory of the C lib, but does not allow to store additional properties.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know which one is better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In addition I noticed a lot of hwloc API functions that need a topology
</span><br>
<span class="quotelev2">&gt; &gt; pointer in their parameter list, which is unused in the function. Will
</span><br>
<span class="quotelev2">&gt; &gt; this become cleaned up in the future?
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd say we have the topology parameter everywhere because the API looks
</span><br>
<span class="quotelev1">&gt; more consistent and because we may need it in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you actually referring to the main API, or to inline helpers such as
</span><br>
<span class="quotelev1">&gt; hwloc/helpers.h ? The latter are not strictly part of the API, and may
</span><br>
<span class="quotelev1">&gt; be changed easily since they are not in the ABI.
</span><br>
<p>It is not really clear to me what belongs to the main API, and what are
<br>
helpers. I'm referring to things like the following:
<br>
<p>int hwloc_obj_attr_snprintf(char * __hwloc_restrict string,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_t obj,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char * __hwloc_restrict separator,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int verbose);
<br>
<p>int hwloc_obj_snprintf(char * __hwloc_restrict string,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t topology,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_t obj,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char * __hwloc_restrict indexprefix,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int verbose);
<br>
<p>The prototypes are in hwloc.h (&quot;main&quot; API ?). The true source of these
<br>
are in src/traversal.c (&quot;helper&quot; API ?). There the topology parameter of
<br>
hwloc_obj_snprintf has attribute unused. Things like that.
<br>
<p>Bernd
<br>
<p><span class="quotelev1">&gt; Brice
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
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Previous message:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1712.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>Reply:</strong> <a href="1714.php">Brice Goglin: "Re: [hwloc-devel] Hwloc perl binding"</a>
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
