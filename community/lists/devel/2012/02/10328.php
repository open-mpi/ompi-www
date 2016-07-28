<?
$subject_val = "Re: [OMPI devel] RFC: Java MPI bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:47:39 2012" -->
<!-- isoreceived="20120207204739" -->
<!-- sent="Tue, 7 Feb 2012 15:47:34 -0500" -->
<!-- isosent="20120207204734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Java MPI bindings" -->
<!-- id="91D63874-F5FF-4059-9DEA-7E1EFBE2021E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4CA9104-A39A-404C-A25C-36EB1FB210AE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Java MPI bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10329.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10327.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10319.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10320.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2012, at 2:33 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This doesn't sound like a very good idea, despite a significant support from a lot of institutions. There is no standardization efforts in the targeted community, and championing a broader support in the Java world was not one of our main target.
</span><br>
<p>This is a bit of a chicken-and-egg issue.  
<br>
<p>You can't standardize something until you know what the good thing is to standardize.  We currently have no Java bindings -- there were several in the late 90s, but all of them have bit-rotted in one way or another.  Java -- as a performant technology -- has come a long way since then.
<br>
<p>Hence, this is an attempt by those in the MPI community to go get some real-world experience on what to standardize.
<br>
<p><span class="quotelev1">&gt; OMPI does not include the Boost bindings, despite the fact that it was developed at IU.
</span><br>
<p>Apples and oranges.
<br>
<p>Boost.mpi = class library
<br>
Boost.mpi != bindings
<br>
Boost.mpi has its own, separate community.
<br>
Boost.mpi hasn't been developed in quite a while.
<br>
<p>This effort = bindings (i.e., 1:1 mapping to the C MPI bindings)
<br>
This effort != class library
<br>
This effort has a group that is trying to join the MPI community
<br>
<p><span class="quotelev1">&gt; OMPI does not include Python nor R bindings despite their large user community.
</span><br>
<p>They've also:
<br>
<p>- never asked to be part of Open MPI
<br>
- support more than just Open MPI
<br>
<p>If all goes well, the Java bindings will someday support more than Open MPI.  But for today, the enterprise players are choosing to put efforts and resources only into the enterprise-class MPI implementation: Open MPI.
<br>
<p><span class="quotelev1">&gt; Why suddenly should we provide unstandardized Java bindings?
</span><br>
<p>Because multiple members of the Open MPI developer community would like to go explore this space.
<br>
<p>The way these bindings interact is basically additional stuff in configure (to find the java compiler and the like) and a new directory under ompi/mpi/java.
<br>
<p>It's the moral equivalent of a new component.
<br>
<p><span class="quotelev1">&gt; I think we should not tackle such inclusion before there is at least a beginning of a standardization effort in the targeted community.
</span><br>
<p>Chicken-and-egg issue.  You know as well as I do that the MPI Forum won't talk about Java bindings until a (sizeable) community can be identified who can demonstrate real-world use cases.
<br>
<p><span class="quotelev1">&gt; They have to step up and address their needs (if they are real), instead of relying on us to take a decision.
</span><br>
<p>Er... have you noticed Ralph's new employer?  He's at Greenplum now.  They're a hadoop company.
<br>
<p>They basically hired him to enable MPI in a Hadoop world.
<br>
<p>Sooo... I'd say that they *are* stepping up.  :-)
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
<li><strong>Next message:</strong> <a href="10329.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10327.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10319.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10320.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
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
