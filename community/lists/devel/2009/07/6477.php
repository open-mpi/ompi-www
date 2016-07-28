<?
$subject_val = "[OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 18:35:03 2009" -->
<!-- isoreceived="20090721223503" -->
<!-- sent="Tue, 21 Jul 2009 18:34:58 -0400" -->
<!-- isosent="20090721223458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] autodetect broken" -->
<!-- id="5E4952FF-18D0-40FE-8693-C3928DB0AC9A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] autodetect broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 18:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6476.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm quite confused about what this component did to the base  
<br>
functions.  I haven't had a chance to digest it properly, but it  
<br>
&quot;feels wrong&quot;...  Iain -- can you please explain the workings of this  
<br>
component and its interactions with the base?
<br>
<p>Also, it seems broken:
<br>
<p>[15:31] svbu-mpi:~/svn/ompi4 % ompi_info | grep installd
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;developer warning: field too long
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/${datadir}/openmpi/help-ompi_info.txt: No such file or  
<br>
directory.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: autodetect (MCA v2.0, API v2.0, Component  
<br>
v1.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4)
<br>
[15:31] svbu-mpi:~/svn/ompi4 %
<br>
<p>The help file should have been found.  This is on Linux RHEL4, but I  
<br>
doubt it's a Linux-version-specific issue...
<br>
<p>I'm going to .ompi_ignore this component because 3 other people have  
<br>
complained to me in the last 15 minutes on IM that it breaks things  
<br>
for them.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6476.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
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
