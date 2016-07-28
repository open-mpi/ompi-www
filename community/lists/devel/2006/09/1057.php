<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  8 09:27:46 2006" -->
<!-- isoreceived="20060908132746" -->
<!-- sent="Fri, 08 Sep 2006 09:27:14 -0400" -->
<!-- isosent="20060908132714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="C126E7F4.25E96%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C126125A.25D76%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-09-08 09:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/7/06 6:15 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All you have to do to get this define is #include &quot;ompi_config.h&quot;, which all
</span><br>
<span class="quotelev1">&gt; of the files should be doing already, anyway.
</span><br>
<p>Oops!  Ralph pointed out to me that this is not quite correct.
<br>
<p>In the OOB TCP component, you should *NOT* include &quot;ompi_config.h&quot; -- you
<br>
should include &quot;orte_config.h&quot; (and it should already be included, anyway).
<br>
<p>Short version: 
<br>
--------------
<br>
<p>both orte_config.h and ompi_config.h should have the appropriate #define's
<br>
in place.  I goofed in my original patch; see new version (attached) where
<br>
the macro has been renamed to OPAL_WANT_IPV6 (vs. OMPI_WANT_IPV6).  The new
<br>
patch wholly replaces the prior patch.
<br>
<p>Longer version:
<br>
---------------
<br>
<p>The stack has 3 layers:
<br>
<p>- opal: Open Portable Access Layer
<br>
- orte: Open Run Time Environment
<br>
- ompi: Open Message Passing Interface
<br>
<p>These are strictly layered on each other, so ORTE, for example, has zero
<br>
knowledge of OMPI.  We used to have one big tree and only informal layering
<br>
of these 3 sections of code, but now they're actually 3 different trees.
<br>
Hence, the code division is strict and absolute (e.g., by default, we make 3
<br>
libraries: libopal, liborte, libompi).  Abstractions violations are swiftly
<br>
punished by the linker.
<br>
<p>However, there are still a bunch of top-level names that are &quot;OMPI&quot; (mainly
<br>
stemming from configure), even though they're intended for OPAL and/or ORTE.
<br>
But that's no reason to continue the bad names.  The macro that I added
<br>
yesterday was OMPI_WANT_IPV6, but I really should have named it
<br>
OPAL_WANT_IPV (since OPAL is where most of the portability machinery is
<br>
supposed to go).  I've amended my previous patch -- see attached.  So
<br>
surround your code with:
<br>
<p>#if OPAL_WANT_IPV6
<br>
...
<br>
#endif
<br>
<p>I can't commit this to the trunk until tonight -- we have an informal policy
<br>
in the project to not make changes to configure and friends during the
<br>
Euro/US work day so as not to force developers to re-run autogen.sh during
<br>
the day.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1057/ipv6-2.patch">ipv6-2.patch</a>
</ul>
<!-- attachment="ipv6-2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1056.php">Ralph H Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
