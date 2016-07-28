<?
$subject_val = "Re: [OMPI devel] need help to add a module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 19:43:35 2011" -->
<!-- isoreceived="20110804234335" -->
<!-- sent="Thu, 4 Aug 2011 19:43:30 -0400" -->
<!-- isosent="20110804234330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] need help to add a module" -->
<!-- id="543F70C3-4A45-4A21-BC1B-E2362F4CDA8D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANyjTBPvzF=ZmfVaFm94oeZJZwm3sb+bP-q9MOS_6aq8yh=U9g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] need help to add a module<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 19:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9545.php">bin wang: "[OMPI devel] need help to add a module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2011, at 3:08 PM, bin wang wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to add a module into open-mpi MCA framework.
</span><br>
<span class="quotelev1">&gt; I hope the module could be conditionally compiled and linked. 
</span><br>
<span class="quotelev1">&gt; It should be disabled by default and enabled by certain flags at configure step.
</span><br>
<p>Sorry for the delay in replying -- I was on vacation last week and am only just now starting to get caught up with my INBOX...
<br>
<p>What you describe is very do-able.
<br>
<p><span class="quotelev1">&gt; When I make a dynamic module, everything is working fine.
</span><br>
<span class="quotelev1">&gt; The problem is that when I make a static compilation/link, 
</span><br>
<span class="quotelev1">&gt; the compiler would complain the component variable is not defined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my build log, I found something as following,
</span><br>
<span class="quotelev1">&gt; 1414 --- MCA component btl:mx (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; 1415 checking for MCA component btl:mx compile mode... static
</span><br>
<span class="quotelev1">&gt; 1416 checking --with-mx value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; 1417 checking --with-mx-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; 1418 checking myriexpress.h usability... no
</span><br>
<span class="quotelev1">&gt; 1419 checking myriexpress.h presence... no
</span><br>
<span class="quotelev1">&gt; 1420 checking for myriexpress.h... no
</span><br>
<span class="quotelev1">&gt; 1421 checking if MCA component btl:mx can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correspondingly the ompi/mca/btl/base/static-components.h had no
</span><br>
<span class="quotelev1">&gt; declaration of extern mca_btl_mx_component variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is the behavior I expect for my module. I checked the Makefile.am files
</span><br>
<span class="quotelev1">&gt; but found nothing special. 
</span><br>
<p>That is correct.  If your configure.m4 decides that the component cannot be built, then the upper-level Makefile.am's will skip your components altogether.  Hence, nothing special needs to be in your component's Makefile.ams to determine whether they need to be built or not.
<br>
<p><span class="quotelev1">&gt; I'm not familiar with those autotools, can anyone give me some detailed
</span><br>
<span class="quotelev1">&gt; guidance on what I should do?
</span><br>
<p>Did you have a look at the following wiki pages:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
<p>The latter one goes through what you can do in configure.m4 in detail.
<br>
<p>Note that the configure.m4 contents on the SVN trunk are slightly different than the v1.4 and v1.5 branches.  There's links on the wiki pages for the older v1.4/v1.5 build system stuff, too.
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
<li><strong>Next message:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9607.php">Jeff Squyres: "Re: [OMPI devel] Warnings within C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9545.php">bin wang: "[OMPI devel] need help to add a module"</a>
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
