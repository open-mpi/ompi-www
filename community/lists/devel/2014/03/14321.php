<?
$subject_val = "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 13:28:12 2014" -->
<!-- isoreceived="20140311172812" -->
<!-- sent="Tue, 11 Mar 2014 10:27:39 -0700" -->
<!-- isosent="20140311172739" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide" -->
<!-- id="0C2E2D5D-5AFD-4212-8B89-AF60069CBB68_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="531F4482.2080603_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 13:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
<li><strong>Previous message:</strong> <a href="14320.php">Orion Poplawski: "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14320.php">Orion Poplawski: "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't do much about 1.7.4, but fwiw 1.7.5 will not have this problem - nor will it be present in 1.8.0 - as we have fully converted to MPI-3 now (and the version will reflect it).
<br>
<p><p>On Mar 11, 2014, at 10:14 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FYI -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Looks like the mix of MPI 3 compliant and older declarations is causing a bit of an issue for Score-P support.  The current Score-P code bases adding the const qualifiers on MPI_VERSION &gt;= 3.  But openmpi 1.7.4 is still MPI_VERSION 2 (SUB 2).  If I change scorep to add the const qualifiers for openmpi 1.7.4, then it has trouble with some different routines that are missing the const qualifiers, for example MPI_Address and MPI_Info_set.  It's tough to support a mix like this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Orion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; Subject: Re: [Score-P support] Compile errors of Fedora rawhide
</span><br>
<span class="quotelev1">&gt; Date: Tue, 11 Mar 2014 14:16:46 +0100
</span><br>
<span class="quotelev1">&gt; From: Daniel Lorenz &lt;d.lorenz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Orion Poplawski &lt;orion_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; CC: Score-P Support &lt;support_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can reproduce the results with openmpi 1.7.4. It seems that openmpi 1.7.4 added const qualifiers to some MPI function parameters which cause this error. For MPI 3 many function arguments get such a const qualifier, and openmpi 1.7.4 added some MPI 3 features. However, not all function signatures in openmpi 1.7.4 are changed to the MPI 3 standard. Thus, there is a mixture of MPI 2 compliant functions and MPI 3 compliant functions.  To support such mixtures we need to add a couple of additional checks. If you want to use the current Score-P with openmpi 1.7.4, the easiest workaround you could try is to build Score-P with the mpi.h header from openmpi 1.7.3. However there is no guarantee that it works. Another option is to adapt the Score-P MPI function wrapper signatures to the openmpi 1.7.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11 Mar 2014, at 03:35, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; scorep 1.2.3 is compiling fine on Fedora 20, but failing on Fedora
</span><br>
<span class="quotelev2">&gt;&gt; Rawhide during the openmpi build.  Full build log is here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://kojipkgs.fedoraproject.org//work/tasks/191/6620191/build.log">http://kojipkgs.fedoraproject.org//work/tasks/191/6620191/build.log</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; errors are like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:334:1: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'MPI_Group_excl'
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Group_excl( MPI_Group group, int n, SCOREP_MPI_CONST_DECL int*
</span><br>
<span class="quotelev2">&gt;&gt; ranks, MPI_Group* newgroup )
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev2">&gt;&gt;                from
</span><br>
<span class="quotelev2">&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:44:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openmpi-i386/mpi.h:1451:20: note: previous declaration of
</span><br>
<span class="quotelev2">&gt;&gt; 'MPI_Group_excl' was here
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC  int MPI_Group_excl(MPI_Group group, int n, const int
</span><br>
<span class="quotelev2">&gt;&gt; ranks[],
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:371:1: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'MPI_Group_incl'
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Group_incl( MPI_Group group, int n, SCOREP_MPI_CONST_DECL int*
</span><br>
<span class="quotelev2">&gt;&gt; ranks, MPI_Group* newgroup )
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev2">&gt;&gt;                from
</span><br>
<span class="quotelev2">&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:44:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/openmpi-i386/mpi.h:1455:20: note: previous declaration of
</span><br>
<span class="quotelev2">&gt;&gt; 'MPI_Group_incl' was here
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_DECLSPEC  int MPI_Group_incl(MPI_Group group, int n, const int
</span><br>
<span class="quotelev2">&gt;&gt; ranks[],
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; one difference is openmpi 1.7.4 instead of 1.7.3.  Let me know what else
</span><br>
<span class="quotelev2">&gt;&gt; I can provide.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Orion
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Support mailing list for Score-P
</span><br>
<span class="quotelev2">&gt;&gt; support_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://mailman.zih.tu-dresden.de/groups/listinfo/scorep-support">https://mailman.zih.tu-dresden.de/groups/listinfo/scorep-support</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14320.php">http://www.open-mpi.org/community/lists/devel/2014/03/14320.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
<li><strong>Previous message:</strong> <a href="14320.php">Orion Poplawski: "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14320.php">Orion Poplawski: "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
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
