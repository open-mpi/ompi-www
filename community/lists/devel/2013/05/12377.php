<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 09:34:07 2013" -->
<!-- isoreceived="20130508133407" -->
<!-- sent="Wed, 8 May 2013 09:34:04 -0400 (EDT)" -->
<!-- isosent="20130508133404" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk" -->
<!-- id="alpine.OSX.2.01.1305071737440.5512_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CEE2F7C0-11EE-43E8-8ABE-A69E326492C3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 09:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12378.php">Aur�lien Bouteiller: "Re: [OMPI devel] June OMPI developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="12376.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>In reply to:</strong> <a href="12376.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>On Tue, 7 May 2013, Ralph Castain wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 2) Avoid adding &quot;ignored&quot; frameworks to the autogenerated &quot;frameworks.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    header file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This simply applies the same ignored() function that is used elsewhere in
</span><br>
<span class="quotelev2">&gt;&gt; the autogen.pl script for omitting &quot;ignored&quot; MCA directories from the
</span><br>
<span class="quotelev2">&gt;&gt; processing.  This just picks up the &quot;.ompi_ignore&quot; (and/or &quot;.ompi_unignore) 
</span><br>
<span class="quotelev2">&gt;&gt; files.   The intent being that if you ignore a component (subdir) that will
</span><br>
<span class="quotelev2">&gt;&gt; be removed from the list, but you could also remove an entire framework if
</span><br>
<span class="quotelev2">&gt;&gt; you put the ignore file in the top-level of the framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is new - I would suggest not doing that as it behaves differently than
</span><br>
<span class="quotelev1">&gt; you might expect. The .ompi_ignore in a component prevents that component
</span><br>
<span class="quotelev1">&gt; from building at all, so it won't ever be opened etc. However, the
</span><br>
<span class="quotelev1">&gt; framework *must* build the base code no matter what - and that means the
</span><br>
<span class="quotelev1">&gt; framework will be opened, selected, and closed at the minimum.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would prefer we keep ompi_ignore cleanly defined. You can ignore all 
</span><br>
<span class="quotelev1">&gt; components by simply putting --enable-mca-no-build=&lt;framework&gt; on your 
</span><br>
<span class="quotelev1">&gt; configure line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The intent being that if for whatever reason you ignore a framework in the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;${project}/mca/&quot; space, you will not have it automatically show up in the
</span><br>
<span class="quotelev2">&gt;&gt; project's &quot;frameworks.h&quot; file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 7 May 2013, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We use the frameworks.h file to &quot;discover&quot; the frameworks in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info.  Even if no components are built for that framework,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there still are MCA params relating to the base of that framework.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds silly, I know - but there may be reasons to access those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; params - e.g., to set verbosity to verify that no components are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being selected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think we need those frameworks to be listed...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I didn't realize the 'ompi_info' aspect.  Good to know.
</span><br>
<span class="quotelev2">&gt;&gt; However, I think honouring the ignore behavior is good in this case
</span><br>
<span class="quotelev2">&gt;&gt; b/c if you drop an ignore file in a framework, you won't get any
</span><br>
<span class="quotelev2">&gt;&gt; other autogen touches (i.e., no Makefile's are autogenerated).  So
</span><br>
<span class="quotelev2">&gt;&gt; it seems that having no Makefiles but including the framework in the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;framework.h&quot; would break regardless.  Again, this is more of a
</span><br>
<span class="quotelev2">&gt;&gt; safety guard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I disagree. As stated above, the framework will *always* build the
</span><br>
<span class="quotelev1">&gt; base code and be opened, selected, and closed - so you at least need
</span><br>
<span class="quotelev1">&gt; access to the verbosity parameter so you can verify those operations.
</span><br>
<span class="quotelev1">&gt; Keeping it in ompi_info is of value.
</span><br>
<p><p>I guess I misunderstood the scope of use for the &quot;.ompi_ignore&quot; file.  I
<br>
thought that it could be placed at the top of the framework and it would
<br>
ignore the entire directory.
<br>
<p>I just did a quick test with the earlier version of autogen.pl (r28241) and
<br>
it does indeed generate the Makefiles for that directory.  So it does seem
<br>
reasonable that if autogen.pl processes the directory for Makefile stuff*,
<br>
that it should process it for the &quot;frameworks.h&quot; entry.
<br>
<p>I'll revert that part of the changeset to previous functionality.
<br>
<p>Sorry, my bad,
<br>
--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12378.php">Aur�lien Bouteiller: "Re: [OMPI devel] June OMPI developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="12376.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>In reply to:</strong> <a href="12376.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
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
