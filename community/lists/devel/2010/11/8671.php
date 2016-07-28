<?
$subject_val = "[OMPI devel] More S/OMPI_/OPAL_/g m4 changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 23:53:00 2010" -->
<!-- isoreceived="20101110045300" -->
<!-- sent="Tue, 9 Nov 2010 18:58:40 -0500" -->
<!-- isosent="20101109235840" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] More S/OMPI_/OPAL_/g m4 changes" -->
<!-- id="9F8075E0-1575-4758-B994-06F19D95F136_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] More S/OMPI_/OPAL_/g m4 changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 18:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8672.php">Pascal Deveze: "[OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In digging through some configury to sort out some recent bugs, I found some more M4 macros and shell variables that are OMPI_&lt;foo&gt; when they really should be OPAL_&lt;foo&gt; (specifically: all the macros in opal/contrib/opal_functions.m4).
<br>
<p>I used the contrib/search_replace.pl script to ferret out all such definitions and usages of these macros, so I'm quite confident that I got them all.  However, I realize that others may have uses of these macros outside of the OMPI tree so I wanted to give a little heads up/warning before I committed.  Indeed, there's nothing urgent about committing this stuff; it just bugs me, so I would like to commit it at some point.
<br>
<p>Here are the macros that I renamed:
<br>
<p>OMPI_CONFIGURE_SETUP -&gt; OPAL_CONFIGURE_SETUP
<br>
OMPI_CONFIGURE_USER  -&gt; OPAL_CONFIGURE_USER
<br>
OMPI_CONFIGURE_DATE  -&gt; OPAL_CONFIGURE_DATE
<br>
OMPI_CONFIGURE_HOST  -&gt; OPAL_CONFIGURE_HOST
<br>
OMPI_BASIC_SETUP     -&gt; OPAL_BASIC_SETUP
<br>
OMPI_WANT_DIST       -&gt; OPAL_WANT_DIST
<br>
OMPI_LOG_MSG         -&gt; OPAL_LOG_MSG
<br>
OMPI_LOG_FILE        -&gt; OPAL_LOG_FILE
<br>
OMPI_LOG_COMMAND     -&gt; OPAL_LOG_COMMAND
<br>
OMPI_UNIQ            -&gt; OPAL_UNIQ
<br>
OMPI_WHICH           -&gt; OPAL_WHICH
<br>
OMPI_VAR_SCOPE_PUSH  -&gt; OPAL_VAR_SCOPE_PUSH
<br>
OMPI_VAR_SCOPE_POP   -&gt; OPAL_VAR_SCOPE_POP
<br>
<p>Patch attached, if anyone cares.
<br>
<p>Unless someone objects, I plan to commit this Friday COB, November 12, 2010.  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8671/diff.out">diff.out</a>
</ul>
<!-- attachment="diff.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8672.php">Pascal Deveze: "[OMPI devel] RFC: Bring the lastest ROMIO version from MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
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
