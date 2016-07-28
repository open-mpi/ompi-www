<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 13:38:55 2007" -->
<!-- isoreceived="20070215183855" -->
<!-- sent="Thu, 15 Feb 2007 11:37:36 -0700" -->
<!-- isosent="20070215183736" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem with 1.1.4" -->
<!-- id="4E36B04A-2BA6-45BA-8A6F-6A9B07C73DE8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45D430ED.6020204_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 13:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>Previous message:</strong> <a href="1305.php">Bert Wesarg: "[OMPI devel] v1.1/opal/event/poll.c:132: syntax error"</a>
<li><strong>In reply to:</strong> <a href="1300.php">Bert Wesarg: "[OMPI devel] build problem with 1.1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>Reply:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 15, 2007, at 3:07 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; I encounter a build problem with openmpi 1.1.4, which don't show up  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; version 1.1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a simple ./configure, the variable OPAL_DATADIR in
</span><br>
<span class="quotelev1">&gt; opal/include/opal/install_dirs.h shows this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep '^#define OPAL_DATADIR' openmpi-1.1.2/opal/include/opal/ 
</span><br>
<span class="quotelev1">&gt; install_dirs.h
</span><br>
<span class="quotelev1">&gt; #define OPAL_DATADIR &quot;/usr/local/share&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep '^#define OPAL_DATADIR' openmpi-1.1.4/opal/include/opal/ 
</span><br>
<span class="quotelev1">&gt; install_dirs.h
</span><br>
<span class="quotelev1">&gt; #define OPAL_DATADIR &quot;${prefix}/share&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this results in the problem, that the opal_wrapper can't find the  
</span><br>
<span class="quotelev1">&gt; wrapper
</span><br>
<span class="quotelev1">&gt; data files in /share/openmpi/.
</span><br>
<p>Is this with a SVN checkout or the release tarball?  The issue you  
<br>
are seeing is a known issue if you use Autoconf 2.60 or higher to  
<br>
create the build system for Open MPI 1.1.x.  The release tarball is  
<br>
built with Autoconf 2.59 and I just checked to verify that 1.1.4 was  
<br>
in fact using AC 2.59 and not creating the bad datadir defines.  You  
<br>
might want to make sure that some part of your build was not  
<br>
rerunning autoconf in the release source code.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>Previous message:</strong> <a href="1305.php">Bert Wesarg: "[OMPI devel] v1.1/opal/event/poll.c:132: syntax error"</a>
<li><strong>In reply to:</strong> <a href="1300.php">Bert Wesarg: "[OMPI devel] build problem with 1.1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>Reply:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
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
