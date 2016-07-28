<?
$subject_val = "[OMPI devel] Adding (3rd party?) MCA modules to the build system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 04:14:34 2009" -->
<!-- isoreceived="20091103091434" -->
<!-- sent="Tue, 03 Nov 2009 10:14:16 +0100" -->
<!-- isosent="20091103091416" -->
<!-- name="Christian Bendele" -->
<!-- email="Christian.Bendele_at_[hidden]" -->
<!-- subject="[OMPI devel] Adding (3rd party?) MCA modules to the build system" -->
<!-- id="4AEFF468.3020705_at_informatik.tu-cottbus.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] Adding (3rd party?) MCA modules to the build system<br>
<strong>From:</strong> Christian Bendele (<em>Christian.Bendele_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 04:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>Reply:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good Morning,
<br>
<p>i am trying to compile some kind of 3rd party btl module into my 
<br>
openmpi. I got the 1.3.3 release tarball, and i can now successfully 
<br>
call autogen.sh, configure and build after downgrading autoconf and 
<br>
friends to the exact versions suggested on the hacking site (i had the 
<br>
most recent versions installed before, which would cause make to fail 
<br>
when autogen.sh was called before).
<br>
<p>The btl module directory I have here contains Makefile.am and 
<br>
Makefile.in whose contents look very similar to those in the mca/btl/tcp 
<br>
directory for example. Among other things the Makefile.am contains a 
<br>
automake &quot;if OMPI_BUILD_mybtlmodule_DSO&quot; (looks exactly the same in the 
<br>
tcp module directory).
<br>
<p>Copying my module directory into ompi/mca/btl and running autogen.sh 
<br>
would just ignore it. I am absolutely lost in all this autoconf and 
<br>
automake build chaos (as it seems to me), but trying to analyse 
<br>
autogen.sh i figured (from the process_framework() function) that a mca 
<br>
subdir has to contain one of configure.in, configure.params and 
<br>
configure.ac to be recognized. I copied configure.params as it is from 
<br>
the tcp directory, as it seems fitting (containing just one single line: 
<br>
&quot;PARAM_CONFIG_FILES=&quot;Makefile&quot;.
<br>
<p>Now running autogen.sh does indeed recognize the directory containing my 
<br>
btl module. It fails, however, with the line 
<br>
&quot;ompi/mca/btl/mybtlmodule/Makefile.am:40: OMPI_BUILD_btl_mymodule_DSO 
<br>
does not appear in AM_CONDITIONAL&quot;.
<br>
<p>I vaguely know what that means, and i was half expecting something like 
<br>
this, but I can not find where those AM_CONDITIONALs are defined. Since 
<br>
the Makefule.am in the tcp subdir does contain a line practically 
<br>
identical to the one failing above, I tried a recursive grep for 
<br>
&quot;OMPI_BUILD_btl_tcp_DSO&quot; from the root build directory. This didn't 
<br>
really turn up anything useful though (mainly lots of occurenced in 
<br>
.cache files which i think i can ignore, and the one in Makefile.am).
<br>
<p>Since i feel pretty stuck here after several hours of trying to grok 
<br>
what's going on in this huge build system, i would very much appreciate 
<br>
some hints :).
<br>
<p>Thanks for your patience and your help,
<br>
<p>Yours,
<br>
<p>Christian.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>Reply:</strong> <a href="7080.php">Jeff Squyres: "Re: [OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
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
