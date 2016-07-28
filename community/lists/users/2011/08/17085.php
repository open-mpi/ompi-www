<?
$subject_val = "Re: [OMPI users] MPI defined macro";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 10:48:57 2011" -->
<!-- isoreceived="20110823144857" -->
<!-- sent="Tue, 23 Aug 2011 09:48:52 -0500" -->
<!-- isosent="20110823144852" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI defined macro" -->
<!-- id="D502E5B9-AF73-41BE-9303-AFB6D0E3DBE0_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6F883FD-99CD-4AC4-BD5B-3AFB69EAE032_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI defined macro<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 10:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17086.php">Eugene Loh: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17084.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17084.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been discussed previously in the MPI Forum:
<br>
<p><a href="http://lists.mpi-forum.org/mpi-forum/2010/11/0838.php">http://lists.mpi-forum.org/mpi-forum/2010/11/0838.php</a>
<br>
<p>I think it resulted in this proposal, but AFAIK it was never pushed forward by a regular attendee of the Forum: <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ReqPPMacro">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ReqPPMacro</a>
<br>
<p>-Dave
<br>
<p>On Aug 23, 2011, at 6:59 AM CDT, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I unfortunately won't be at the next Forum meeting, but you might want to ask someone to bring it up for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might not give you exactly what you want, however, because not all platforms have &quot;mpicc&quot; (or similar) wrapper compilers.  I.e., to compile an MPI application on some platforms, you just &quot;cc ... -lmpi&quot;.  Hence, there's no way for the compiler to know whether to #define MPI or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Such a macro *could* be added to mpi.h (but not Fortran), but then you wouldn't get at least one of the use cases that you (assumedly :-) ) want:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if MPI
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2011, at 7:46 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can I suggest to insert this macro in next MPI 3 standard?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think It's very useful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/8/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid not.  Sorry!  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have the OPEN_MPI macro -- it'll be defined to 1 if you compile with Open MPI, but that doesn't really help your portability issue.  :-\
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 23, 2011, at 5:19 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPi users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is there some portable MPI macro to check if a code is compiled with MPI compiler? Something like _OPENMP for OpenMP codes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it exist?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC specialist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HPC specialist
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17086.php">Eugene Loh: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17084.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17084.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
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
