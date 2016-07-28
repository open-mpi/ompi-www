<?
$subject_val = "Re: [OMPI users] MPI defined macro";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 11:52:16 2011" -->
<!-- isoreceived="20110823155216" -->
<!-- sent="Tue, 23 Aug 2011 11:52:01 -0400" -->
<!-- isosent="20110823155201" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI defined macro" -->
<!-- id="4E53CCA1.1020404_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 11:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Previous message:</strong> <a href="17086.php">Eugene Loh: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="17084.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Reply:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Reply:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabrielle, Jeff
<br>
<p>Not sure if my interjection here may help,
<br>
but user-defined macros like this,
<br>
appear in many codes we use here, combined with #ifdef
<br>
pre-processor directives.
<br>
This is certainly not new.
<br>
BTW, the name convention varies, I've seen MPI, USE_MPI, SPMD, MPP, etc.
<br>
<p>Sometimes this programming style can clutter the code quite a bit,
<br>
particularly when competing and nesting with other #ifdefs associated to
<br>
other macros (including _OPENMP, but certainly not only that one).
<br>
<p>Normally the user-MPI macro is defined one step before compilation, in a 
<br>
Makefile or header file, or by configure-type scripts
<br>
that generate Makefiles, fool around with other directives
<br>
and header files, etc.
<br>
<p>To avoid the excess pre-processor #ifdefs on the main code,
<br>
some even dare to define a &quot;trivial MPI library&quot;, via wrappers
<br>
to the regular MPI routines, which presumably produce
<br>
serial code when the MPI macro is not defined.
<br>
This is perhaps reminiscent of the _OPENMP macro functionality
<br>
mentioned by Gabrielle.
<br>
<p>Something like this (I'm not claiming this one works!):
<br>
<p>my_MPI_Send_wrap(...)
<br>
#ifdef I_LOVE_MPI
<br>
MPI_Send(...)
<br>
#else
<br>
return
<br>
#endif
<br>
<p>I wonder if grand unified serial+parallel code is really
<br>
worth the effort, or if branching out a serial version is
<br>
less of a maintenance nightmare, but that may be out of the topic
<br>
of this discussion.
<br>
<p>Anyway:
<br>
<p>Would another macro, say now part of mpi.h, be really helpful?
<br>
<p>Would it only replicate the functionality (and perhaps conflict with)
<br>
the user-defined macros I mentioned above, or would it be &quot;smarter&quot;
<br>
in some sense that I don't realize?
<br>
<p>Some codes and Makefiles break badly if one replaces the bare compiler
<br>
by the MPI compiler wrapper.
<br>
Instead, they set the includes and libraries separately.
<br>
This practice is not uncommon,
<br>
and may be there because in some MPI implementations
<br>
the compiler wrappers simply don't exist, as Jeff mentioned.
<br>
Would the new MPI macro help or harm in such cases?
<br>
<p>My two cents.
<br>
Gus Correa
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I unfortunately won't be at the next Forum meeting, 
</span><br>
<span class="quotelev1">&gt; but you might want to ask someone to bring it up for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might not give you exactly what you want, 
</span><br>
<span class="quotelev1">&gt; however, because not all platforms have &quot;mpicc&quot; (or similar) 
</span><br>
<span class="quotelev1">&gt; wrapper compilers.  
</span><br>
<span class="quotelev1">&gt; I.e., to compile an MPI application on some platforms, 
</span><br>
<span class="quotelev1">&gt; you just &quot;cc ... -lmpi&quot;.  Hence, there's no way for the compiler to know whether to #define MPI or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Such a macro *could* be added to mpi.h (but not Fortran), 
</span><br>
<span class="quotelev1">&gt; but then you wouldn't get at least one of the use cases that 
</span><br>
<span class="quotelev1">&gt; you (assumedly :-) ) want:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Previous message:</strong> <a href="17086.php">Eugene Loh: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="17084.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Reply:</strong> <a href="17088.php">damien_at_[hidden]: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Reply:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
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
