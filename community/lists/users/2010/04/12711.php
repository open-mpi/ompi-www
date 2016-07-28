<?
$subject_val = "Re: [OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 07:59:35 2010" -->
<!-- isoreceived="20100420115935" -->
<!-- sent="Tue, 20 Apr 2010 07:59:29 -0400" -->
<!-- isosent="20100420115929" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="74D705E6-94D8-4D12-B685-05568DE234FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1271717535.2800.11.camel_at_roo" -->
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
<strong>Subject:</strong> Re: [OMPI users] unresolved symbol mca_base_param_reg_int<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 07:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>In reply to:</strong> <a href="12705.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah!  I didn't look at your error message closely enough the first time -- sorry!
<br>
<p>Did you perchance upgrade an existing Open MPI installation in place?  I.e., have Open MPI 1.2.7 installed in /somewhere and the install Open MPI 1.3.x/1.4.x into the same /somewhere?
<br>
<p>If so, try a full uninstall of Open MPI 1.2.7 from /somewhere first -- or install Open MPI 1.4.x into /somewhere_else.
<br>
<p>The reason is that Open MPI has a set of plugins that are not necessarily compatible between versions, and are not necessarily removed if you just install a new version over an old version.
<br>
<p><p><p>On Apr 19, 2010, at 6:52 PM, Nev wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; I have tried --disable-visibility but get the same results. Any other
</span><br>
<span class="quotelev1">&gt; ideas? I am not able to remove the dlopen, but maybe able to move it to
</span><br>
<span class="quotelev1">&gt; directly dlopen the mpi library, instead of my library that is linked to
</span><br>
<span class="quotelev1">&gt; mpi. Is this likely to help?
</span><br>
<span class="quotelev1">&gt; Nev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 2010-04-19 at 09:21 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It could well be because of the additional dlopen in your application (we changed some things from the 1.2 series with regards to this kind of stuff).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try configuring Open MPI with the --disable-visibility switch and see if that helps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 17, 2010, at 9:05 PM, Nev wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am having a problem running application with OpenMpi version 1.4.1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The system works with version 1.2.7, but fails with version 1.3.4 and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.4.1. (These are the only version I have tried).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My application is linked against a shared library which does a dlopen of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a 2nd shared &quot;C&quot; library which is compiled and linked using mpicc. The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; application and first shared library are C++.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I rebuild and relink the 2nd shared library each time I change the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi build.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When MPI_init is called I get the following error
</span><br>
<span class="quotelev3">&gt; &gt; &gt; symbol lookup error: /opt/openmpi/lib/openmpi/mca_paffinity_linux.so:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This does NOT occur with OpenMpi version 1.2.7, Or if I build OpenMpi as
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a static library, and then link against this static library.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am building a default openmpi except for --prefix=/opt/openmpi and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --enable-static --disable-shared for static library build.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would link to be able to use non static openmpi build.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any suggestion on what I am doing wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks Nev
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>In reply to:</strong> <a href="12705.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
