<?
$subject_val = "Re: [OMPI users] MPI defined macro";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 12:02:29 2011" -->
<!-- isoreceived="20110823160229" -->
<!-- sent="Tue, 23 Aug 2011 12:02:24 -0400" -->
<!-- isosent="20110823160224" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI defined macro" -->
<!-- id="DF7FB14C-F546-421C-8FA6-472E9330D6AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E53CCA1.1020404_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 12:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17090.php">Dick Kachuma: "[OMPI users] poll taking too long in open-mpi"</a>
<li><strong>Previous message:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, The MPI spec claims the entire &quot;MPI&quot; namespace -- so if an app defines their own &quot;MPI&quot; macro, technically, that's incorrect.  :-)
<br>
<p>On Aug 23, 2011, at 11:52 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gabrielle, Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if my interjection here may help,
</span><br>
<span class="quotelev1">&gt; but user-defined macros like this,
</span><br>
<span class="quotelev1">&gt; appear in many codes we use here, combined with #ifdef
</span><br>
<span class="quotelev1">&gt; pre-processor directives.
</span><br>
<span class="quotelev1">&gt; This is certainly not new.
</span><br>
<span class="quotelev1">&gt; BTW, the name convention varies, I've seen MPI, USE_MPI, SPMD, MPP, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sometimes this programming style can clutter the code quite a bit,
</span><br>
<span class="quotelev1">&gt; particularly when competing and nesting with other #ifdefs associated to
</span><br>
<span class="quotelev1">&gt; other macros (including _OPENMP, but certainly not only that one).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Normally the user-MPI macro is defined one step before compilation, in a Makefile or header file, or by configure-type scripts
</span><br>
<span class="quotelev1">&gt; that generate Makefiles, fool around with other directives
</span><br>
<span class="quotelev1">&gt; and header files, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To avoid the excess pre-processor #ifdefs on the main code,
</span><br>
<span class="quotelev1">&gt; some even dare to define a &quot;trivial MPI library&quot;, via wrappers
</span><br>
<span class="quotelev1">&gt; to the regular MPI routines, which presumably produce
</span><br>
<span class="quotelev1">&gt; serial code when the MPI macro is not defined.
</span><br>
<span class="quotelev1">&gt; This is perhaps reminiscent of the _OPENMP macro functionality
</span><br>
<span class="quotelev1">&gt; mentioned by Gabrielle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like this (I'm not claiming this one works!):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_MPI_Send_wrap(...)
</span><br>
<span class="quotelev1">&gt; #ifdef I_LOVE_MPI
</span><br>
<span class="quotelev1">&gt; MPI_Send(...)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; return
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if grand unified serial+parallel code is really
</span><br>
<span class="quotelev1">&gt; worth the effort, or if branching out a serial version is
</span><br>
<span class="quotelev1">&gt; less of a maintenance nightmare, but that may be out of the topic
</span><br>
<span class="quotelev1">&gt; of this discussion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would another macro, say now part of mpi.h, be really helpful?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it only replicate the functionality (and perhaps conflict with)
</span><br>
<span class="quotelev1">&gt; the user-defined macros I mentioned above, or would it be &quot;smarter&quot;
</span><br>
<span class="quotelev1">&gt; in some sense that I don't realize?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some codes and Makefiles break badly if one replaces the bare compiler
</span><br>
<span class="quotelev1">&gt; by the MPI compiler wrapper.
</span><br>
<span class="quotelev1">&gt; Instead, they set the includes and libraries separately.
</span><br>
<span class="quotelev1">&gt; This practice is not uncommon,
</span><br>
<span class="quotelev1">&gt; and may be there because in some MPI implementations
</span><br>
<span class="quotelev1">&gt; the compiler wrappers simply don't exist, as Jeff mentioned.
</span><br>
<span class="quotelev1">&gt; Would the new MPI macro help or harm in such cases?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I unfortunately won't be at the next Forum meeting, but you might want to ask someone to bring it up for you.
</span><br>
<span class="quotelev2">&gt;&gt; It might not give you exactly what you want, however, because not all platforms have &quot;mpicc&quot; (or similar) wrapper compilers.  I.e., to compile an MPI application on some platforms, you just &quot;cc ... -lmpi&quot;.  Hence, there's no way for the compiler to know whether to #define MPI or not.
</span><br>
<span class="quotelev2">&gt;&gt; Such a macro *could* be added to mpi.h (but not Fortran), but then you wouldn't get at least one of the use cases that you (assumedly :-) ) want:
</span><br>
<span class="quotelev2">&gt;&gt; #if MPI
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 23, 2011, at 7:46 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I suggest to insert this macro in next MPI 3 standard?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think It's very useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/8/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid not.  Sorry!  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have the OPEN_MPI macro -- it'll be defined to 1 if you compile with Open MPI, but that doesn't really help your portability issue.  :-\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 23, 2011, at 5:19 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OpenMPi users,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is there some portable MPI macro to check if a code is compiled with MPI compiler? Something like _OPENMP for OpenMP codes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it exist?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #ifdef MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC specialist
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; g.fatigati [AT] cineca.it           _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17090.php">Dick Kachuma: "[OMPI users] poll taking too long in open-mpi"</a>
<li><strong>Previous message:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
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
