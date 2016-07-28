<?
$subject_val = "Re: [OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 18:16:32 2010" -->
<!-- isoreceived="20100420221632" -->
<!-- sent="Wed, 21 Apr 2010 08:16:23 +1000" -->
<!-- isosent="20100420221623" -->
<!-- name="Nev" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="1271801783.3054.0.camel_at_roo" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="74D705E6-94D8-4D12-B685-05568DE234FA_at_cisco.com" -->
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
<strong>From:</strong> Nev (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 18:16:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
I did the install to the &quot;same place&quot;. I always use /opt/openmpi, the
<br>
procedure I use when building is
<br>
configure --prefix=/opt/openmpi ...
<br>
rm -r /opt/openmpi/*
<br>
make clean
<br>
make all
<br>
make install
<br>
is this sufficient to un-install previous version, or is more required.
<br>
<p>On Tue, 2010-04-20 at 07:59 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Gah!  I didn't look at your error message closely enough the first time -- sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you perchance upgrade an existing Open MPI installation in place?  I.e., have Open MPI 1.2.7 installed in /somewhere and the install Open MPI 1.3.x/1.4.x into the same /somewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, try a full uninstall of Open MPI 1.2.7 from /somewhere first -- or install Open MPI 1.4.x into /somewhere_else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is that Open MPI has a set of plugins that are not necessarily compatible between versions, and are not necessarily removed if you just install a new version over an old version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2010, at 6:52 PM, Nev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; I have tried --disable-visibility but get the same results. Any other
</span><br>
<span class="quotelev2">&gt; &gt; ideas? I am not able to remove the dlopen, but maybe able to move it to
</span><br>
<span class="quotelev2">&gt; &gt; directly dlopen the mpi library, instead of my library that is linked to
</span><br>
<span class="quotelev2">&gt; &gt; mpi. Is this likely to help?
</span><br>
<span class="quotelev2">&gt; &gt; Nev
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2010-04-19 at 09:21 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It could well be because of the additional dlopen in your application (we changed some things from the 1.2 series with regards to this kind of stuff).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Try configuring Open MPI with the --disable-visibility switch and see if that helps.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 17, 2010, at 9:05 PM, Nev wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am having a problem running application with OpenMpi version 1.4.1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The system works with version 1.2.7, but fails with version 1.3.4 and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1.4.1. (These are the only version I have tried).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My application is linked against a shared library which does a dlopen of
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; a 2nd shared &quot;C&quot; library which is compiled and linked using mpicc. The
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; application and first shared library are C++.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I rebuild and relink the 2nd shared library each time I change the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; openmpi build.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; When MPI_init is called I get the following error
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; symbol lookup error: /opt/openmpi/lib/openmpi/mca_paffinity_linux.so:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This does NOT occur with OpenMpi version 1.2.7, Or if I build OpenMpi as
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; a static library, and then link against this static library.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am building a default openmpi except for --prefix=/opt/openmpi and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --enable-static --disable-shared for static library build.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I would link to be able to use non static openmpi build.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Any suggestion on what I am doing wrong?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks Nev
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
