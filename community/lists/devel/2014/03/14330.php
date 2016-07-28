<?
$subject_val = "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 19:16:00 2014" -->
<!-- isoreceived="20140311231600" -->
<!-- sent="Tue, 11 Mar 2014 16:15:16 -0700" -->
<!-- isosent="20140311231516" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide" -->
<!-- id="1D684CB7-A62B-45AC-B64F-E5B7D0665EEB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="531F946E.7030505_at_cora.nwra.com" -->
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
<strong>Date:</strong> 2014-03-11 19:15:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14329.php">Orion Poplawski: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14329.php">Orion Poplawski: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....well, we appear to have a problem. According to our Forum reps, those functions were deprecated by the Forum and hence the standard was actually NOT updated with &quot;const&quot; declarations. For some odd reason, MPICH went ahead and updated them anyway - leaving MPICH out of compliance with the standard.
<br>
<p>So we aren't entirely sure what we should do here. We're going to discuss it tomorrow, but our initial decision was to follow the standard and just note that MPICH is out of compliance.
<br>
<p><p>On Mar 11, 2014, at 3:55 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 03/11/2014 11:30 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The safest thing for scoreP (and *any* MPI application/middleware) is to not wholly rely on the MPI_VERSION macros.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From a theoretical sense, the MPI_VERSION macro should be sufficient.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But in reality, the upgrade of an MPI implementation to support all of MPI-3 is a gradual thing and takes time.  Hence, OMPI 1.7.4 supports *part* of MPI-3, but not all of it.  There's simply no way to indicate this &quot;partial MPI-3 support&quot; with the simplistic MPI_VERSION macro -- that macro is pretty much an all-or-nothing value. Which simply doesn't reflect reality. Sorry.  :-\
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it helps, you might try an OMPI 1.7.5rc (I'm due to make rc2 later this afternoon).  1.7.5 should be full MPI-3 compliant -- if there are any const's missing, those are bugs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help.  However, with 1.7.5rc2 I'm still seeing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Misc.c:64:1: error: conflicting types for 'MPI_Address'
</span><br>
<span class="quotelev1">&gt; MPI_Address( SCOREP_MPI_CONST_DECL void* location, MPI_Aint* address )
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Misc.c:45:
</span><br>
<span class="quotelev1">&gt; /usr/include/openmpi-x86_64/mpi.h:1176:44: note: previous declaration of 'MPI_Address' was here
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int MPI_Address(void *location, MPI_Aint *address)
</span><br>
<span class="quotelev1">&gt;                                            ^
</span><br>
<span class="quotelev1">&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Misc.c:651:1: error: conflicting types for 'MPI_Info_set'
</span><br>
<span class="quotelev1">&gt; MPI_Info_set( MPI_Info info, SCOREP_MPI_CONST_DECL char* key, SCOREP_MPI_CONST_DECL char* value )
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Misc.c:45:
</span><br>
<span class="quotelev1">&gt; /usr/include/openmpi-x86_64/mpi.h:1512:44: note: previous declaration of 'MPI_Info_set' was here
</span><br>
<span class="quotelev1">&gt; OMPI_DECLSPEC  int MPI_Info_set(MPI_Info info, char *key, char *value);
</span><br>
<span class="quotelev1">&gt;                                            ^
</span><br>
<span class="quotelev1">&gt; The MPI-3 spec seems to side with Score-P here for MPI_Info_set.  I couldn't find a definition for MPI_Address in the MPI-3 spec.  Mpich appears to delare it const void *location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, to fully support OMPI 1.7.4, more fine-grained configure checks for const will likely be required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point I'm hoping to just skip 1.7.4 and move to 1.7.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (keep in mind that this same thing is going to happen for MPI 3.1, MPI 4.0, ...etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Orion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 11, 2014, at 1:14 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Looks like the mix of MPI 3 compliant and older declarations is causing a bit of an issue for Score-P support.  The current Score-P code bases adding the const qualifiers on MPI_VERSION &gt;= 3.  But openmpi 1.7.4 is still MPI_VERSION 2 (SUB 2).  If I change scorep to add the const qualifiers for openmpi 1.7.4, then it has trouble with some different routines that are missing the const qualifiers, for example MPI_Address and MPI_Info_set.  It's tough to support a mix like this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Orion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------- Original Message --------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [Score-P support] Compile errors of Fedora rawhide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 11 Mar 2014 14:16:46 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Daniel Lorenz &lt;d.lorenz_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Orion Poplawski &lt;orion_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC: Score-P Support &lt;support_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can reproduce the results with openmpi 1.7.4. It seems that openmpi 1.7.4 added const qualifiers to some MPI function parameters which cause this error. For MPI 3 many function arguments get such a const qualifier, and openmpi 1.7.4 added some MPI 3 features. However, not all function signatures in openmpi 1.7.4 are changed to the MPI 3 standard. Thus, there is a mixture of MPI 2 compliant functions and MPI 3 compliant functions.  To support such mixtures we need to add a couple of additional checks. If you want to use the current Score-P with openmpi 1.7.4, the easiest workaround you could try is to build Score-P with the mpi.h header from openmpi 1.7.3. However there is no guarantee that it works. Another option is to adapt the Score-P MPI function wrapper signatures to the openmpi 1.7.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daniel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11 Mar 2014, at 03:35, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scorep 1.2.3 is compiling fine on Fedora 20, but failing on Fedora
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rawhide during the openmpi build.  Full build log is here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://kojipkgs.fedoraproject.org//work/tasks/191/6620191/build.log">http://kojipkgs.fedoraproject.org//work/tasks/191/6620191/build.log</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors are like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:334:1: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conflicting types for 'MPI_Group_excl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Group_excl( MPI_Group group, int n, SCOREP_MPI_CONST_DECL int*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks, MPI_Group* newgroup )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:44:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/include/openmpi-i386/mpi.h:1451:20: note: previous declaration of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'MPI_Group_excl' was here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_DECLSPEC  int MPI_Group_excl(MPI_Group group, int n, const int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks[],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:371:1: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conflicting types for 'MPI_Group_incl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Group_incl( MPI_Group group, int n, SCOREP_MPI_CONST_DECL int*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks, MPI_Group* newgroup )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In file included from ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi.h:32:0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../build-mpi/../src/adapters/mpi/SCOREP_Mpi_Cg.c:44:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/include/openmpi-i386/mpi.h:1455:20: note: previous declaration of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'MPI_Group_incl' was here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_DECLSPEC  int MPI_Group_incl(MPI_Group group, int n, const int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks[],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one difference is openmpi 1.7.4 instead of 1.7.3.  Let me know what else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can provide.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Orion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NWRA/CoRA Division                    FAX: 303-415-9702
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3380 Mitchell Lane                  orion_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Support mailing list for Score-P
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://mailman.zih.tu-dresden.de/groups/listinfo/scorep-support">https://mailman.zih.tu-dresden.de/groups/listinfo/scorep-support</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14320.php">http://www.open-mpi.org/community/lists/devel/2014/03/14320.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14329.php">http://www.open-mpi.org/community/lists/devel/2014/03/14329.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14330/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14329.php">Orion Poplawski: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14329.php">Orion Poplawski: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
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
