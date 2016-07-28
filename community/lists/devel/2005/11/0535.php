<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 16:29:54 2005" -->
<!-- isoreceived="20051121212954" -->
<!-- sent="Mon, 21 Nov 2005 16:24:18 -0500" -->
<!-- isosent="20051121212418" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  libtool question" -->
<!-- id="7D3D94E9-2C34-4DF5-8D99-C97C279FFF4D_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5730ECB4-E635-419D-B61D-A4A7232122B2_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 16:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
<li><strong>Previous message:</strong> <a href="0534.php">George Bosilca: "libtool question"</a>
<li><strong>In reply to:</strong> <a href="0534.php">George Bosilca: "libtool question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
<li><strong>Reply:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys,
<br>
<p>Forget about this email, I found the answer by myself The problem  
<br>
seems to be not with libtool but with the way the last update worked.  
<br>
If I compile using VPATH I get the error. If I go in the respective  
<br>
directory and first do make (not make install) then the problem does  
<br>
not appear.
<br>
<p>&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Nov 21, 2005, at 3:44 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I remember a discussion few weeks ago about the devel package
</span><br>
<span class="quotelev1">&gt; required by libtool in order to be able to compile Open MPI. But as
</span><br>
<span class="quotelev1">&gt; far as I remember the conclusion is that we will not require it as we
</span><br>
<span class="quotelev1">&gt; have our own ... I am wrong about that ? After updating to the latest
</span><br>
<span class="quotelev1">&gt; trunk on all of the clusters we have here at UT I get the following
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../ompi-trunk/orte/mca/iof/base/
</span><br>
<span class="quotelev1">&gt; iof_base_select.c:24:
</span><br>
<span class="quotelev1">&gt; ../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h:
</span><br>
<span class="quotelev1">&gt; 27:18: ltdl.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../ompi-trunk/orte/mca/iof/base/
</span><br>
<span class="quotelev1">&gt; iof_base_select.c:24:
</span><br>
<span class="quotelev1">&gt; ../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h:
</span><br>
<span class="quotelev1">&gt; 39: error: parse error before &quot;lt_dlhandle&quot;
</span><br>
<span class="quotelev1">&gt; ../../../../ompi-trunk/opal/mca/base/mca_base_component_repository.h:
</span><br>
<span class="quotelev1">&gt; 40: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Any clues ?
</span><br>
<span class="quotelev1">&gt;      george
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
<li><strong>Previous message:</strong> <a href="0534.php">George Bosilca: "libtool question"</a>
<li><strong>In reply to:</strong> <a href="0534.php">George Bosilca: "libtool question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
<li><strong>Reply:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
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
