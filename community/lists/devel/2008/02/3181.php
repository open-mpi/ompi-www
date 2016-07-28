<?
$subject_val = "[OMPI devel] VT integration: make distclean problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 13:31:29 2008" -->
<!-- isoreceived="20080211183129" -->
<!-- sent="Mon, 11 Feb 2008 13:31:25 -0500" -->
<!-- isosent="20080211183125" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] VT integration: make distclean problem" -->
<!-- id="E54C4648-8263-419D-8FAD-B8A5FFC47149_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] VT integration: make distclean problem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 13:31:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3182.php">Cedric Desmoulin: "[OMPI devel] New Driver BTL"</a>
<li><strong>Previous message:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3183.php">Ralf Wildenhues: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3183.php">Ralf Wildenhues: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3196.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been noticing another problem with the VT integration. If you do  
<br>
a &quot;./configure --enable-contrib-no-build=vt&quot; a subsequent 'make  
<br>
distclean' will fail in contrib/vt. The 'make distclean' will succeed  
<br>
with VT enabled (default).
<br>
<p>-----------------------
<br>
&lt;snip&gt;
<br>
Making distclean in contrib/vt
<br>
make[2]: Entering directory `/san/homedirs/jjhursey/svn/ompi/ompi/ 
<br>
contrib/vt'
<br>
make[2]: *** No rule to make target `distclean'.  Stop.
<br>
make[2]: Leaving directory `/san/homedirs/jjhursey/svn/ompi/ompi/ 
<br>
contrib/vt'
<br>
make[1]: *** [distclean-recursive] Error 1
<br>
make[1]: Leaving directory `/san/homedirs/jjhursey/svn/ompi/ompi'
<br>
make: *** [distclean-recursive] Error 1
<br>
-----------------------
<br>
<p>I haven't looked at how to fix this, but maybe it is as simple as  
<br>
adding a flag to the Makefile.am in that directory.
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3182.php">Cedric Desmoulin: "[OMPI devel] New Driver BTL"</a>
<li><strong>Previous message:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3183.php">Ralf Wildenhues: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3183.php">Ralf Wildenhues: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3196.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
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
