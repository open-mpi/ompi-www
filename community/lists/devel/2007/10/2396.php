<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 02:29:28 2007" -->
<!-- isoreceived="20071008062928" -->
<!-- sent="Mon, 8 Oct 2007 08:29:17 +0200" -->
<!-- isosent="20071008062917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI" -->
<!-- id="778AA617-4609-4FE6-8EC0-C2B77B63939E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 02:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2397.php">Jeff Squyres: "[OMPI devel] FYI: MorphMPI"</a>
<li><strong>Previous message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2406.php">Andreas Knüpfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2406.php">Andreas Knüpfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a look at the VT integration branch today.  I was surprised by  
<br>
a few things; I think we can do a little better on separation of VT  
<br>
from the rest of OMPI.  But this also touches on the larger general  
<br>
concept of how we want to bundle other software packages in Open  
<br>
MPI.  Here's a few recommendations:
<br>
<p>- VT is MPI-level tracing and therefore needs to be in the ompi/ tree  
<br>
(not the top-level tree).  That being said, we extensively discussed  
<br>
libnbc integration here in Paris this week and think that it falls in  
<br>
the same category as VT: they are both 3rd party MPI-level software  
<br>
packages that are being bundled in OMPI.  Hence, perhaps we should  
<br>
really have an ompi/contrib directory where both vt and libnbc should  
<br>
be placed (and any other 3rd-party/bundled MPI-related software  
<br>
should be placed).  More on this below.
<br>
<p>- I notice that the VT configure script calls &quot;wget&quot; to check if  
<br>
there is a more recent version of VT available, and if so, downloads/ 
<br>
expands/uses it.  This is a very, very bad idea for at least the  
<br>
following reasons:
<br>
&nbsp;&nbsp;&nbsp;- What if my system doesn't have wget? (OS X, Solaris)
<br>
&nbsp;&nbsp;&nbsp;- What if my system doesn't have / has broken internet access?
<br>
&nbsp;&nbsp;&nbsp;- What if I don't want the VT maintainers tracking which systems I  
<br>
install OMPI/VT on? (web server accesses generate log entries for the  
<br>
originating machines)
<br>
&nbsp;&nbsp;&nbsp;- What if I want to use exactly the version that is bundled in  
<br>
Open MPI and not another?  (this is very, very important for QA  
<br>
certification, for example)
<br>
&nbsp;&nbsp;&nbsp;- What if the VT web site is no longer available?
<br>
If the VT developers would like to keep the &quot;call home&quot; functionality  
<br>
in the production version of VT, fine -- but it needs to be  
<br>
guaranteed to be completely and totally deactivated when shipping  
<br>
with OMPI.  As you can probably tell, I feel very strongly about  
<br>
this.  :-)
<br>
<p>- I confess to having the subject of VT integration swapped out so  
<br>
many times that I don't remember exactly how we agreed to do it :-(.   
<br>
I see that the current integration added a .m4 file in config/,  
<br>
acinclude'd it, and then called a setup macro from the main  
<br>
configure.ac.  I was a little confused as to why some VT things were  
<br>
added in config/ompi_configure_options.m4 and others were added to  
<br>
the VT-specific .m4 file -- why not put them all in the same place?
<br>
<p>- I also found the mpi*-vt wrapper compilers in ompi/tools.  I guess  
<br>
I was surprised that VT had spread out over so many directories -- I  
<br>
had really thought it would be entirely self-contained in its own  
<br>
tree and only have a small top-level stub that tied it into the  
<br>
overall configure/build system.
<br>
<p>- Since we're now bundling two 3rd-party software packages to Open  
<br>
MPI, I think we need a general solution for how to add/maintain them  
<br>
(and others) over time.  OMPI already has a fairly nice find- 
<br>
configure-build system for components; it seems natural that 3rd  
<br>
party packages should use a similar system.
<br>
<p>- However, taking a brief look at autogen.sh and config/ompi_mca.m4,  
<br>
it looks like it would be a *major* undertaking to do this (i.e.,  
<br>
&quot;discover&quot; packages under ompi/contrib/ and set them up to configure/ 
<br>
build like we do with components).  I unfortunately do not have  
<br>
anything close to the cycles required to do this work.  If anyone  
<br>
else wants to do this work, I would caution you that this is  
<br>
extremely hairy bourne shell and m4 code that the whole of OMPI  
<br>
depends on -- I will be VERY picky about how it is modified :-) (not  
<br>
trying to be a jerk here, but this code is pretty close to the heart  
<br>
of OMPI's configure/build system -- breaking it will result in many  
<br>
unhappy developers!).
<br>
<p>- Therefore, I'm leaning towards filing a ticket to someday do this  
<br>
stuff properly, but in the meantime, have a pseudo-hardcoded setup  
<br>
for libnbc and VT in configure.ac.  That is, I envision (but have not  
<br>
thought out the details -- all of the following is subject to  
<br>
change...) that both VT and libnbc will have configure.m4 scripts  
<br>
that can be added to acinclude.m4 that AC_DEFUN well-known macros  
<br>
that can be directly called from configure.ac.  These macros can do  
<br>
whatever the package wants/needs up in the top-level OMPI configure  
<br>
script.  The top-level OMPI script will then invoke  
<br>
OMPI_CONFIG_SUBDIR to call the package's configure script.   
<br>
Specifically, the package will get 2 chances for configuration stuff:
<br>
<p>&nbsp;&nbsp;&nbsp;* their configure.m4 script for OMPI-bundling-level glue code  
<br>
(e.g., AC_CONFIG_FILES for the wrapper compiler data files)
<br>
&nbsp;&nbsp;&nbsp;* their configure script for configuring/setting up to build the  
<br>
real package when recursively invoked by top-level OMPI &quot;make&quot; targets
<br>
<p>- I imagine that the trees for these packages will look like this:
<br>
<p>&nbsp;&nbsp;&nbsp;ompi/contrib/&lt;pkg&gt;/ - top-level tree of OMPI bundling of the package
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/&lt;pkg&gt;/configure.m4 - acinclude'd in OMPI's configure.ac
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/&lt;pkg&gt;/... - any other relevant glue files (README,  
<br>
wrapper compiler template files, etc.)
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/&lt;pkg&gt;/&lt;pkg&gt;/ - expanded tarball of the package
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/&lt;pkg&gt;/&lt;pkg&gt;/configure - package's distribution configure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;script
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/&lt;pkg&gt;/&lt;pkg&gt;/... - rest of the files from the package
<br>
<p>Note the 2nd subdir -- contrib/&lt;pkg&gt;/&lt;pkg&gt;/ -- this is where the  
<br>
actual package distribution is placed (NOT in the top-level contrib/ 
<br>
&lt;pkg&gt;/ directory).  As I've mentioned before, this is for two  
<br>
reasons: a) allow a separate directory [namespace] for the OMPI- 
<br>
specific package configure.m4 script (and/or other files), and b) it  
<br>
*greatly* simplifies bringing in new versions if what is put in OMPI  
<br>
is *exactly* the same as what is distributed independently of OMPI.
<br>
<p>There is also precedent for this type of directory layout for a 3rd  
<br>
party package in OMPI already -- ROMIO (ompi/mca/io/romio).
<br>
<p>To be specific, here's an example with libnbc and vt:
<br>
<p>&nbsp;&nbsp;&nbsp;ompi/contrib/vt/
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/configure.m4
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/...other files (such as wrapper compiler data  
<br>
templates)
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/vt/
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/vt/configure
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/vt/vt/...other files (from VT tarball)
<br>
<p>&nbsp;&nbsp;&nbsp;ompi/contrib/libnbc/
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/libnbc/configure.m4
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/libnbc/...other files (such as wrapper compiler data  
<br>
templates)
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/libnbc/libnbc/
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/libnbc/libnbc/configure
<br>
&nbsp;&nbsp;&nbsp;ompi/contrib/libnbc/libnbc/...other files (from libnbc tarball)
<br>
<p>Make sense?
<br>
<p>I started the infrastructure work in /tmp/htor-nbc; I might be able  
<br>
to finish it by the end of this week.  This should make the VT/libnbc  
<br>
integration quite simple, I think.  The bulk of the work will be two  
<br>
things:
<br>
<p>1. create a configure.m4 that does whatever the VT integration needs/ 
<br>
wants (e.g., some AC_ARG_WITH / AC_ARG_ENABLE and AC_CONFIG_FILE  
<br>
statements, perhaps some AC_MSG_CHECKING's, or whatever) as part of  
<br>
the main OMPI configure script.
<br>
<p>2. untar the distribution tarball in ompi/contrib/&lt;pkg&gt;/&lt;pkg&gt;.   
<br>
Again, I want to emphasize the point that it *greatly* simplifies  
<br>
future version upgrades if what is in ompi/contrib/&lt;pkg&gt;/&lt;pkg&gt; is  
<br>
*exactly* the distribution tarball with zero modifications.  The best- 
<br>
case scenario/goal is to be able to do the following when importing a  
<br>
new version of libnbc into OMPI:
<br>
<p>shell$ cd ompi/contrib/libnbc
<br>
shell$ svn rm libnbc
<br>
shell$ svn ci -m &quot;Remove old version of libnbc&quot;
<br>
shell$ tar zxf /path/to/libNBC-1.2.3.tar.gz
<br>
shell$ mv libNBC-1.2.3 libnbc
<br>
shell$ svn add libnbc
<br>
shell$ svn ci libnbc -m &quot;Upgrade libnbc to v1.2.3&quot;
<br>
<p>That should be *all* that a 3rd party package (vt, libnbc) needs to  
<br>
do -- they should not need to modify any other files in the OMPI tree.
<br>
<p>How does this all sound?
<br>
<p>I realize that we have iterated on this a few times already and I'm  
<br>
sorry for the changes.  I think that this loose idea has been in my  
<br>
head all along, but I probably have not properly elucidated it until  
<br>
now.  My apologies.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2397.php">Jeff Squyres: "[OMPI devel] FYI: MorphMPI"</a>
<li><strong>Previous message:</strong> <a href="2395.php">Jeff Squyres: "Re: [OMPI devel] Consolidating some IB code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2406.php">Andreas Knüpfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2406.php">Andreas Knüpfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
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
