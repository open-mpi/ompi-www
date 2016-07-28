<?
$subject_val = "[OMPI devel] Check for show_help errors: contrib/check-help-strings.pl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:51:49 2014" -->
<!-- isoreceived="20140407155149" -->
<!-- sent="Mon, 7 Apr 2014 15:51:47 +0000" -->
<!-- isosent="20140407155147" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Check for show_help errors: contrib/check-help-strings.pl" -->
<!-- id="F7C7D77D-8DB4-4655-8EDC-C91C9C8980DC_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Check for show_help errors: contrib/check-help-strings.pl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<li><strong>Previous message:</strong> <a href="14462.php">Ralph Castain: "[OMPI devel] RFC: move sensor framework to ORCM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just committed a script named contrib/check-help-strings.pl.
<br>
<p>It can be used to check for simple show_help errors and warnings.  I used it to find/fix a bunch of warnings and errors in the opal tree and usnic BTL, but it still find 181 warnings and 60 errors in the orte, ompi, and oshmem trees.
<br>
<p>==&gt; Developers: please run this script on your portion of the code base and fix all warnings / errors.
<br>
<p>Here's some examples of the warnings/errors that are still in the tree:
<br>
<p>-----
<br>
*** WARNING: Empty help file (no topics)
<br>
&nbsp;&nbsp;Help file: help-ompi-crcp-base.txt
<br>
*** ERROR: Help file name collision:
<br>
&nbsp;&nbsp;File 1: ./orte/mca/oob/usock/help-oob-tcp.txt
<br>
&nbsp;&nbsp;File 2: ./orte/mca/oob/tcp/help-oob-tcp.txt
<br>
*** ERROR: Source-referenced help topic does not exist
<br>
&nbsp;&nbsp;Source file: ./ompi/mca/bcol/iboffload/bcol_iboffload_component.c
<br>
&nbsp;&nbsp;Help file referenced: help-mpi-btl-openib.txt
<br>
&nbsp;&nbsp;Help topic referenced: no-nics
<br>
*** WARNING: Possibly unused help topic
<br>
&nbsp;&nbsp;Help file: help-mca-op-base.txt
<br>
&nbsp;&nbsp;Help topic: op-unselect:failed-finalize
<br>
*** WARNING: Possibly unused help file (no topics used from this file)
<br>
&nbsp;&nbsp;Help file: help-mca-op-base.txt
<br>
-----
<br>
<p>This script can be run from any sub-tree in the OMPI code base.  It does several things:
<br>
<p>* Find all help-*txt files and index all the topics found in the sub-tree.
<br>
* Find all C/C++ source files (.c, .cc, .h) in the sub-tree, and look
<br>
&nbsp;&nbsp;for various flavors of the opal_show_help() function (e.g.,
<br>
&nbsp;&nbsp;including orte_show_help()) and search for hard-coded	filenames and
<br>
&nbsp;&nbsp;topics.
<br>
* Also look for special tokens (in comments) in the source code for
<br>
&nbsp;&nbsp;help topics that are not necessarily hard-coded (e.g., topics that
<br>
&nbsp;&nbsp;are snprintf'ed).
<br>
* For each filename/topic found, output a warning if a) the file does
<br>
&nbsp;&nbsp;not exist, or b) that the topic does not exist in that file.
<br>
* Output a warning for any topic that is not referenced in the source
<br>
&nbsp;&nbsp;code (i.e., orphaned/now-unused help messages).
<br>
* Output a warning for any help file that appears to be empty.
<br>
* Output a warning for any help file that appears to be unused (i.e.,
<br>
&nbsp;&nbsp;no topics in the help file are referenced in code).
<br>
<p>It finds simple hard-coded filenames and topics from calls to opal_show_help() (and friends).  You can use special comments to if you use variadic help filenames or topics.  For example, here's one I put in the usnic BTL (because we use a variadic topic):
<br>
<p>// For the show_help topic checker script
<br>
// SHOW_HELP:&quot;help-mpi-btl-usnic.txt&quot;,&quot;connectivity error: small ok, large bad&quot;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<li><strong>Previous message:</strong> <a href="14462.php">Ralph Castain: "[OMPI devel] RFC: move sensor framework to ORCM"</a>
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
