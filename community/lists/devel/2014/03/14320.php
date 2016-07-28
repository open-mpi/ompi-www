<?
$subject_val = "[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 13:14:43 2014" -->
<!-- isoreceived="20140311171443" -->
<!-- sent="Tue, 11 Mar 2014 11:14:42 -0600" -->
<!-- isosent="20140311171442" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide" -->
<!-- id="531F4482.2080603_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="479657BF-0D61-439F-BA1C-51CB95A11F4C_at_grs-sim.de" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 13:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14321.php">Ralph Castain: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14319.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14321.php">Ralph Castain: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14321.php">Ralph Castain: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI -
<br>
<p>&nbsp;&nbsp;&nbsp;Looks like the mix of MPI 3 compliant and older declarations is causing a 
<br>
bit of an issue for Score-P support.  The current Score-P code bases adding 
<br>
the const qualifiers on MPI_VERSION &gt;= 3.  But openmpi 1.7.4 is still 
<br>
MPI_VERSION 2 (SUB 2).  If I change scorep to add the const qualifiers for 
<br>
openmpi 1.7.4, then it has trouble with some different routines that are 
<br>
missing the const qualifiers, for example MPI_Address and MPI_Info_set.  It's 
<br>
tough to support a mix like this.
<br>
<p>- Orion
<br>
<p>-------- Original Message --------
<br>
Subject: Re: [Score-P support] Compile errors of Fedora rawhide
<br>
Date: Tue, 11 Mar 2014 14:16:46 +0100
<br>
From: Daniel Lorenz &lt;d.lorenz_at_[hidden]&gt;
<br>
To: Orion Poplawski &lt;orion_at_[hidden]&gt;
<br>
CC: Score-P Support &lt;support_at_[hidden]&gt;
<br>
<p>Hi,
<br>
<p>I can reproduce the results with openmpi 1.7.4. It seems that openmpi 1.7.4 
<br>
added const qualifiers to some MPI function parameters which cause this error. 
<br>
For MPI 3 many function arguments get such a const qualifier, and openmpi 
<br>
1.7.4 added some MPI 3 features. However, not all function signatures in 
<br>
openmpi 1.7.4 are changed to the MPI 3 standard. Thus, there is a mixture of 
<br>
MPI 2 compliant functions and MPI 3 compliant functions.  To support such 
<br>
mixtures we need to add a couple of additional checks. If you want to use the 
<br>
current Score-P with openmpi 1.7.4, the easiest workaround you could try is to 
<br>
build Score-P with the mpi.h header from openmpi 1.7.3. However there is no 
<br>
guarantee that it works. Another option is to adapt the Score-P MPI function 
<br>
wrapper signatures to the openmpi 1.7.4.
<br>
<p>Regards,
<br>
Daniel
<br>
<p>On 11 Mar 2014, at 03:35, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; scorep 1.2.3 is compiling fine on Fedora 20, but failing on Fedora
</span><br>
<span class="quotelev1">&gt; Rawhide during the openmpi build.  Full build log is here:
</span><br>
<span class="quotelev1">&gt; <a href="http://kojipkgs.fedoraproject.org//work/tasks/191/6620191/build.log">http://kojipkgs.fedoraproject.org//work/tasks/191/6620191/build.log</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; errors are like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:334:1: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'MPI_Group_excl'
</span><br>
<span class="quotelev1">&gt; MPI_Group_excl( MPI_Group group, int n, SCOREP_MPI_CONST_DECL int*
</span><br>
<span class="quotelev1">&gt; ranks, MPI_Group* newgroup )
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:44:
</span><br>
<span class="quotelev1">&gt; /usr/include/openmpi-i386/mpi.h:1451:20: note: previous declaration of
</span><br>
<span class="quotelev1">&gt; 'MPI_Group_excl' was here
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int MPI_Group_excl(MPI_Group group, int n, const int
</span><br>
<span class="quotelev1">&gt; ranks[],
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:371:1: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'MPI_Group_incl'
</span><br>
<span class="quotelev1">&gt; MPI_Group_incl( MPI_Group group, int n, SCOREP_MPI_CONST_DECL int*
</span><br>
<span class="quotelev1">&gt; ranks, MPI_Group* newgroup )
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:44:
</span><br>
<span class="quotelev1">&gt; /usr/include/openmpi-i386/mpi.h:1455:20: note: previous declaration of
</span><br>
<span class="quotelev1">&gt; 'MPI_Group_incl' was here
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int MPI_Group_incl(MPI_Group group, int n, const int
</span><br>
<span class="quotelev1">&gt; ranks[],
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one difference is openmpi 1.7.4 instead of 1.7.3.  Let me know what else
</span><br>
<span class="quotelev1">&gt; I can provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Orion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Support mailing list for Score-P
</span><br>
<span class="quotelev1">&gt; support_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="https://mailman.zih.tu-dresden.de/groups/listinfo/scorep-support">https://mailman.zih.tu-dresden.de/groups/listinfo/scorep-support</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14321.php">Ralph Castain: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14319.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14321.php">Ralph Castain: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14321.php">Ralph Castain: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14322.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora	rawhide"</a>
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
