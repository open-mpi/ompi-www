<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 15:47:11 2006" -->
<!-- isoreceived="20060628194711" -->
<!-- sent="Wed, 28 Jun 2006 15:46:58 -0400" -->
<!-- isosent="20060628194658" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Run MTT with pre-built ompi" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE98B3_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] Run MTT with pre-built ompi" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 15:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Jeff Squyres \(jsquyres\): "[MTT users] Perfbase and '"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<li><strong>Maybe in reply to:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/05/0800.php">Gilles Gouaillardet: "Re: [MTT users] Run MTT with pre-built ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 28, 2006 12:56 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] Run MTT with pre-built ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to skip the MPI Get and Install phases, and simply 
</span><br>
<span class="quotelev1">&gt; point MTT to 
</span><br>
<span class="quotelev1">&gt; my pre-built/installed Open MPI. Can this be done in the .ini 
</span><br>
<span class="quotelev1">&gt; file, or 
</span><br>
<span class="quotelev1">&gt; do I need to create a whole module to do this? I thought that just 
</span><br>
<span class="quotelev1">&gt; inserting &quot;installdir = /my/ompi/installation&quot; in the [MPI 
</span><br>
<span class="quotelev1">&gt; Install: foo] 
</span><br>
<span class="quotelev1">&gt; section would do that. I also created a Null.pm module that 
</span><br>
<span class="quotelev1">&gt; does nothing 
</span><br>
<span class="quotelev1">&gt; (contents: &quot;1;&quot;) so MTT would bark at me for not supplying a module 
</span><br>
<span class="quotelev1">&gt; parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I must be missing something.
</span><br>
<p>No, you're not missing anything.  :-)
<br>
<p>We had actually talked about this feature but not implemented it yet.
<br>
This is in the TODO file listed under:
<br>
<p>--developer switch - run MTT against a current install
<br>
<p>the intent of which was to do pretty much exactly what you described.
<br>
The pieces that are missing are that MTT pretty much needs the MPI Get
<br>
and Install phases, if for nothing other than installing the Right
<br>
meta-data in its data structures so that it &quot;knows&quot; about that OMPI
<br>
installation.  
<br>
<p>So we might want to add Get and Install modules that do nothing in terms
<br>
of the scratch tree, but end up providing enough meta information that
<br>
they can be added to the xml files.  These are not &quot;Null&quot; modules,
<br>
strictly speaking, because they need to extract name, version,
<br>
directory, etc. information (some of which is probably OMPI-specific).
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Jeff Squyres \(jsquyres\): "[MTT users] Perfbase and '"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<li><strong>Maybe in reply to:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/05/0800.php">Gilles Gouaillardet: "Re: [MTT users] Run MTT with pre-built ompi"</a>
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
