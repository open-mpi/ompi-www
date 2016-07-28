<?
$subject_val = "Re: [OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 18:52:25 2010" -->
<!-- isoreceived="20100419225225" -->
<!-- sent="Tue, 20 Apr 2010 08:52:15 +1000" -->
<!-- isosent="20100419225215" -->
<!-- name="Nev" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="1271717535.2800.11.camel_at_roo" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="73E21963-BA88-459C-9F04-E6E931222A21_at_cisco.com" -->
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
<strong>Date:</strong> 2010-04-19 18:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12706.php">long thai: "[OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Previous message:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>In reply to:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
I have tried --disable-visibility but get the same results. Any other
<br>
ideas? I am not able to remove the dlopen, but maybe able to move it to
<br>
directly dlopen the mpi library, instead of my library that is linked to
<br>
mpi. Is this likely to help?
<br>
Nev
<br>
<p>On Mon, 2010-04-19 at 09:21 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It could well be because of the additional dlopen in your application (we changed some things from the 1.2 series with regards to this kind of stuff).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try configuring Open MPI with the --disable-visibility switch and see if that helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2010, at 9:05 PM, Nev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I am having a problem running application with OpenMpi version 1.4.1.
</span><br>
<span class="quotelev2">&gt; &gt; The system works with version 1.2.7, but fails with version 1.3.4 and
</span><br>
<span class="quotelev2">&gt; &gt; 1.4.1. (These are the only version I have tried).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My application is linked against a shared library which does a dlopen of
</span><br>
<span class="quotelev2">&gt; &gt; a 2nd shared &quot;C&quot; library which is compiled and linked using mpicc. The
</span><br>
<span class="quotelev2">&gt; &gt; application and first shared library are C++.
</span><br>
<span class="quotelev2">&gt; &gt; I rebuild and relink the 2nd shared library each time I change the
</span><br>
<span class="quotelev2">&gt; &gt; openmpi build.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When MPI_init is called I get the following error
</span><br>
<span class="quotelev2">&gt; &gt; symbol lookup error: /opt/openmpi/lib/openmpi/mca_paffinity_linux.so:
</span><br>
<span class="quotelev2">&gt; &gt; undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This does NOT occur with OpenMpi version 1.2.7, Or if I build OpenMpi as
</span><br>
<span class="quotelev2">&gt; &gt; a static library, and then link against this static library.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am building a default openmpi except for --prefix=/opt/openmpi and
</span><br>
<span class="quotelev2">&gt; &gt; --enable-static --disable-shared for static library build.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would link to be able to use non static openmpi build.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestion on what I am doing wrong?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Nev
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<li><strong>Next message:</strong> <a href="12706.php">long thai: "[OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Previous message:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>In reply to:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
