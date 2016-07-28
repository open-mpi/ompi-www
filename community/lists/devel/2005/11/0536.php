<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 17:26:45 2005" -->
<!-- isoreceived="20051121222645" -->
<!-- sent="Mon, 21 Nov 2005 17:26:35 -0500" -->
<!-- isosent="20051121222635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  libtool question" -->
<!-- id="245e2ded1a022ef6413a10c478ef2158_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7D3D94E9-2C34-4DF5-8D99-C97C279FFF4D_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2005-11-21 17:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0537.php">Jeff Squyres: "1.0.1 in the works"</a>
<li><strong>Previous message:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<li><strong>In reply to:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There were a whole bunch of Makefile.am changes that changed where 
<br>
things got compiled in a recent update.  You might want to 
<br>
re-autogen/configure.
<br>
<p><p>On Nov 21, 2005, at 4:24 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Forget about this email, I found the answer by myself The problem
</span><br>
<span class="quotelev1">&gt; seems to be not with libtool but with the way the last update worked.
</span><br>
<span class="quotelev1">&gt; If I compile using VPATH I get the error. If I go in the respective
</span><br>
<span class="quotelev1">&gt; directory and first do make (not make install) then the problem does
</span><br>
<span class="quotelev1">&gt; not appear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2005, at 3:44 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I remember a discussion few weeks ago about the devel package
</span><br>
<span class="quotelev2">&gt;&gt; required by libtool in order to be able to compile Open MPI. But as
</span><br>
<span class="quotelev2">&gt;&gt; far as I remember the conclusion is that we will not require it as we
</span><br>
<span class="quotelev2">&gt;&gt; have our own ... I am wrong about that ? After updating to the latest
</span><br>
<span class="quotelev2">&gt;&gt; trunk on all of the clusters we have here at UT I get the following
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../../ompi-trunk/orte/mca/iof/base/
</span><br>
<span class="quotelev2">&gt;&gt; iof_base_select.c:24:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h:
</span><br>
<span class="quotelev2">&gt;&gt; 27:18: ltdl.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../../ompi-trunk/orte/mca/iof/base/
</span><br>
<span class="quotelev2">&gt;&gt; iof_base_select.c:24:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h:
</span><br>
<span class="quotelev2">&gt;&gt; 39: error: parse error before &quot;lt_dlhandle&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h:
</span><br>
<span class="quotelev2">&gt;&gt; 40: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Any clues ?
</span><br>
<span class="quotelev2">&gt;&gt;      george
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev2">&gt;&gt; half may reach you&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0537.php">Jeff Squyres: "1.0.1 in the works"</a>
<li><strong>Previous message:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
<li><strong>In reply to:</strong> <a href="0535.php">George Bosilca: "Re:  libtool question"</a>
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
