<?
$subject_val = "[OMPI devel] autogen error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 10:27:34 2008" -->
<!-- isoreceived="20080619142734" -->
<!-- sent="Thu, 19 Jun 2008 16:29:30 +0200" -->
<!-- isosent="20080619142930" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] autogen error" -->
<!-- id="485A6D4A.7040601_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] autogen error<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 10:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4164.php">Leonardo Fialho: "Re: [OMPI devel] RML Send"</a>
<li><strong>Previous message:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4167.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4167.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Anybody knows what is this error?
<br>
<p>Yes, I think that I'm using last version of M4, autoconf, automake and 
<br>
libtool, I think...
<br>
<p>*** Running GNU tools
<br>
[Running] autom4te --language=m4sh ompi_get_version.m4sh -o 
<br>
ompi_get_version.sh
<br>
[Running] libtoolize --automake --copy --ltdl
<br>
** Adjusting libltdl for OMPI :-(
<br>
&nbsp;&nbsp;&nbsp;++ patching for argz bugfix in libtool 1.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;++ patching 64-bit OS X bug in ltmain.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- your libtool doesn't need this! yay!
<br>
&nbsp;&nbsp;&nbsp;++ RTLD_GLOBAL in libltdl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- your libltdl doesn't need this! yay!
<br>
grep: configure: No such file or directory
<br>
&nbsp;&nbsp;&nbsp;++ patching for ifort (LT 2.2.0-4)
<br>
[Running] aclocal -I config
<br>
/usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR: end of 
<br>
file in string
<br>
autom4te: /usr/local/bin/m4 failed with exit status: 1
<br>
aclocal: autom4te failed with exit status: 1
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;aclocal -I config&quot; has failed.  See 
<br>
above for
<br>
the specific error message that caused it to abort.
<br>
-------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4164.php">Leonardo Fialho: "Re: [OMPI devel] RML Send"</a>
<li><strong>Previous message:</strong> <a href="4162.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4167.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4167.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
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
