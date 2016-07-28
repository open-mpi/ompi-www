<?
$subject_val = "[OMPI devel] Refactoring opal if.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 17:11:56 2010" -->
<!-- isoreceived="20100824211156" -->
<!-- sent="Tue, 24 Aug 2010 15:11:48 -0600" -->
<!-- isosent="20100824211148" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Refactoring opal if.c" -->
<!-- id="E8D90106-E9E6-493F-9A9F-E969F19469CB_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Refactoring opal if.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 17:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<li><strong>Previous message:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<li><strong>Reply:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the discussion on today's telecon, I've started working with Jeff on refactoring the opal/util/if.c code into something more understandable without changing the discovery logic. We are creating a framework that solely performs interface discovery, leaving all of the interface wrapper functions untouched. The various components are now configured in/out instead of being buried in multiple layers of #if.
<br>
<p>Jeff will be working on the configure logic in the near future. Meantime, the layout of the system is complete and everything builds as it should.
<br>
<p>Operation of the framework is straightforward. When framework open is called, it iterates through all available components and calls their open function. At that time, each component adds to the list of interfaces whatever it finds. The IPv4 interface discovery that was common across posix-based systems is located in a single component. The IPv6 discovery code, which tended to be highly system specific, is in separate components.
<br>
<p>As a result, there may be a change in the order in which interfaces are found on the list from where they appear today. However, this order was never guaranteed anyway, so any code that relied on it is incorrect and should be fixed.
<br>
<p>You are welcome to look at what is being done:
<br>
<p>hg clone <a href="https://rhc&#64;bitbucket.org/rhc/ompi-if">https://rhc&#64;bitbucket.org/rhc/ompi-if</a>
<br>
<p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<li><strong>Previous message:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
<li><strong>Reply:</strong> <a href="8316.php">Jeff Squyres: "Re: [OMPI devel] Refactoring opal if.c"</a>
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
