<?
$subject_val = "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 12:57:30 2008" -->
<!-- isoreceived="20080908165730" -->
<!-- sent="Mon, 8 Sep 2008 12:51:18 -0400" -->
<!-- isosent="20080908165118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths (only) for configuretion files?" -->
<!-- id="8DDA324C-1AC9-409B-8425-7A090E5823AA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48C4F159.4010401_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths (only) for configuretion files?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 12:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6474.php">Paul Kapinos: "[OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6474.php">Paul Kapinos: "[OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short answer: yes, we do compile in the prefix path into OMPI.  Check  
<br>
out this FAQ entry; I think it'll solve your problem:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
<br>
<p><p>On Sep 8, 2008, at 5:33 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are using OpenMPI on an variety of machines (running Linux,  
</span><br>
<span class="quotelev1">&gt; Solaris/Sparc and /Opteron) using couple of compilers (GCC, Sun  
</span><br>
<span class="quotelev1">&gt; Studio, Intel, PGI, 32 and 64 bit...) so we have at least 15  
</span><br>
<span class="quotelev1">&gt; versions of each release of OpenMPI (SUN Cluster Tools not included).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This shows, that we have to support an complete petting zoo of  
</span><br>
<span class="quotelev1">&gt; OpenMPI's. Sometimes we may need to move things around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If OpenMPI is being configured, the install path may be provided  
</span><br>
<span class="quotelev1">&gt; using --prefix keyword, say so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/my/love/path/for/openmpi/tmp1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After &quot;gmake all install&quot; in ...tmp1 an installation of OpenMPI may  
</span><br>
<span class="quotelev1">&gt; be found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, say, we need to *move* this Version to an another path, say / 
</span><br>
<span class="quotelev1">&gt; my/love/path/for/openmpi/blupp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course we have to set $PATH and $LD_LIBRARY_PATH accordingly (we  
</span><br>
<span class="quotelev1">&gt; can that ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if we tried to use OpenMPI from new location, we got error  
</span><br>
<span class="quotelev1">&gt; message like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./mpicc
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file /my/love/path/for/openmpi/tmp1/share/ 
</span><br>
<span class="quotelev1">&gt; openmpi/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note the old installation path used)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That looks for me, that the install path provided with --prefix in  
</span><br>
<span class="quotelev1">&gt; configuration step, is compiled into opal_wrapper executable file  
</span><br>
<span class="quotelev1">&gt; and opal_wrapper works iff the set of configuration files is in this  
</span><br>
<span class="quotelev1">&gt; path. But after move of the OpenMP installation directory the  
</span><br>
<span class="quotelev1">&gt; configuration files aren't there...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An side effect of this behaviour is the certainty that binary  
</span><br>
<span class="quotelev1">&gt; distributions of OpenMPI (RPM's) are not relocatable. That's  
</span><br>
<span class="quotelev1">&gt; uncomfortably. (Actually, this mail is initiated by the fact that  
</span><br>
<span class="quotelev1">&gt; Sun ClusterTools RPM's are not relocatable)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, does this behavior have an deeper sence I cannot recognise, or  
</span><br>
<span class="quotelev1">&gt; maybe  the configuring of global paths is not needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I mean, is that the paths for the configuration files, which  
</span><br>
<span class="quotelev1">&gt; opal_wrapper need, may be setted locally like ../share/openmpi/***  
</span><br>
<span class="quotelev1">&gt; without affectiong the integrity of OpenMPI. Maybe there were were  
</span><br>
<span class="quotelev1">&gt; more places where the usage of local paths may be needed to allowe  
</span><br>
<span class="quotelev1">&gt; movable (relocable) OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean about?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;kapinos.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6474.php">Paul Kapinos: "[OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6474.php">Paul Kapinos: "[OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
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
