<?
$subject_val = "Re: [OMPI docs] How to compile OpenMPI applications?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 10:05:51 2013" -->
<!-- isoreceived="20130826140551" -->
<!-- sent="Mon, 26 Aug 2013 14:05:50 +0000" -->
<!-- isosent="20130826140550" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] How to compile OpenMPI applications?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F834884_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130824203804.GA7597_at_slate" -->
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
<strong>Subject:</strong> Re: [OMPI docs] How to compile OpenMPI applications?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 10:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/09/0182.php">Kelly Black: "[OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Reuti: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0179.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Reuti: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the student-brush-off -- you'd be surprised at how many requests for &quot;do my homework for me&quot; we get, both on and off the Open MPI public lists.  Plus, this &quot;docs&quot; list is fairly abandoned, and your emails had markings typical of a student looking to get a quick answer.  Sorry we mis-categorized it.
<br>
<p>A few final notes to this thread: 
<br>
<p>0. Background: The reason we provide wrapper compilers is because the specific libraries and compile flags that OMPI uses can tend to change depending on how you configure / install Open MPI, and can also change between releases.  Hence, we hide all that gunk under the covers and reserve the right to change it from release to release.  As such, --showme, or some variant of it (see below), is really your safest bet to remain functional between multiple OMPI releases.
<br>
<p>1. You can actually give a full and complete compile/link command line and add --showme to it and see how mpicc will assemble the final command.  This may be a little more complete / topical than &quot;mpicc --showme&quot; by itself.
<br>
<p>&nbsp;&nbsp;# Full compile and link
<br>
&nbsp;&nbsp;$ mpicc my_mpi_app.c -o my_mpi_app --showme
<br>
&nbsp;&nbsp;# Just compile
<br>
&nbsp;&nbsp;$ mpicc my_mpi_app.c -c --showme
<br>
<p>You'll see the difference in the two outputs.
<br>
<p>2. See mpicc(1) for modifiers to the --showme CLI option.  I don't remember offhand if these are included in the 1.6 series, but they definitively exist in the 1.7 series.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--showme:compile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Output the compiler flags that would have been supplied  to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the C compiler.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--showme:link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Output  the  linker  flags that would have been supplied to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the C compiler.
<br>
<p>There's others; see mpicc(1) for details.
<br>
<p>3. OMPI also provides a pkg-config .pc file, if that's helpful to you.  I don't remember if we introduced that in the 1.6 or 1.7 series, but it's definitely in the 1.7 releases.  For example:
<br>
<p>-----
<br>
$ cd $my_ompi_install_tree
<br>
$ find . | fgrep .pc
<br>
./lib/pkgconfig/ompi.pc
<br>
./lib/pkgconfig/ompi-f77.pc
<br>
./lib/pkgconfig/ompi-c.pc
<br>
./lib/pkgconfig/ompi-f90.pc
<br>
./lib/pkgconfig/orte.pc
<br>
./lib/pkgconfig/ompi-fort.pc
<br>
./lib/pkgconfig/ompi-cxx.pc
<br>
$ export PKG_CONFIG_PATH=$my_ompi_install_tree/lib/pkgconfig
<br>
$ pkg-config ompi-c --cflags
<br>
-pthread -I/home/jsquyres/bogus/include -I/home/jsquyres/bogus/include/  
<br>
-----
<br>
<p>4. mpicc and friends actually draw their values from text files.  Feel free to read these yourself.  While the key=value format is internal to OMPI and may change at any time, it hasn't actually changed in years:
<br>
<p>-----
<br>
$ find . | fgrep mpicc-wrapper
<br>
./share/openmpi/mpicc-wrapper-data.txt
<br>
$ head share/openmpi/mpicc-wrapper-data.txt
<br>
# There can be multiple blocks of configuration data, chosen by
<br>
# compiler flags (using the compiler_args key to chose which block
<br>
# should be activated.  This can be useful for multilib builds.  See the
<br>
# multilib page at:
<br>
#    <a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a> 
<br>
# for more information.
<br>
<p>project=Open MPI
<br>
project_short=OMPI
<br>
version=1.7.3a1r29062
<br>
-----
<br>
<p>5. The FAQ describes what the wrapper compilers do, and how to override the build options.  This isn't exactly what you're asking, but it's related, and might be helpful to you.  See <a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a> for more details.  You'll notice, for example, that mpicc (and friends) 
<br>
<p>Hope that helps.
<br>
<p><p><p>On Aug 24, 2013, at 4:38 PM, &lt;manday_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, that about answers the question as far as my interest is
</span><br>
<span class="quotelev1">&gt; concerned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 24, 2013 at 02:59:11PM -0500, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt;&gt; manday_at_[hidden] writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can we simply conclude that there is no such documentation without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further questioning the question itsself?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is no stand-alone documentation.  You can equate 'mpicc -showme'
</span><br>
<span class="quotelev2">&gt;&gt; to a less structured pkg-config.  Some would say that the MPI standard
</span><br>
<span class="quotelev2">&gt;&gt; was negligent in not providing a structured way to determine how to
</span><br>
<span class="quotelev2">&gt;&gt; compile and link.  (Some would go further and say the binary interface
</span><br>
<span class="quotelev2">&gt;&gt; should have been standardized.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2013/09/0182.php">Kelly Black: "[OMPI docs] Jump starting the Open MPI documentation project"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Reuti: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<li><strong>In reply to:</strong> <a href="0179.php">manday_at_[hidden]: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Reuti: "Re: [OMPI docs] How to compile OpenMPI applications?"</a>
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
