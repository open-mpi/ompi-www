<?
$subject_val = "Re: [OMPI users] MPI defined macro";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 11:57:52 2011" -->
<!-- isoreceived="20110823155752" -->
<!-- sent="Tue, 23 Aug 2011 09:57:26 -0600" -->
<!-- isosent="20110823155726" -->
<!-- name="damien_at_[hidden]" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI defined macro" -->
<!-- id="4887bbc5-2eed-4626-8e0f-c094eaaca9ec_at_email.android.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> <a href="mailto:damien_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI%20defined%20macro"><em>damien_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-08-23 11:57:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Previous message:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys,
<br>
<p>Have a look at the MUMPS linear solver code. They define a dummy MPI interface for their serial version. That works well and it's enabled by changing an include path and compiling without mpicc.
<br>
<p>Damien
<br>
<pre>
-- 
Sent from my Android phone with K-9 Mail. Please excuse my brevity.
Gus Correa &lt;gus_at_[hidden]&gt; wrote:
Hi Gabrielle, Jeff
Not sure if my interjection here may help,
but user-defined macros like this,
appear in many codes we use here, combined with #ifdef
pre-processor directives.
This is certainly not new.
BTW, the name convention varies, I've seen MPI, USE_MPI, SPMD, MPP, etc.
Sometimes this programming style can clutter the code quite a bit,
particularly when competing and nesting with other #ifdefs associated to
other macros (including _OPENMP, but certainly not only that one).
Normally the user-MPI macro is defined one step before compilation, in a 
Makefile or header file, or by configure-type scripts
that generate Makefiles, fool around with other directives
and header files, etc.
To avoid the excess pre-processor #ifdefs on the main code,
some even dare to define a &quot;trivial MPI library&quot;, via wrappers
to the regular MPI routines, which presumably produce
serial code when the MPI macro is not defined.
This is perhaps reminiscent of the _OPENMP macro functionality
mentioned by Gabrielle.
Something like this (I'm not claiming this one works!):
my_MPI_Send_wrap(...)
#ifdef I_LOVE_MPI
MPI_Send(...)
#else
return
#endif
I wonder if grand unified serial+parallel code is really
worth the effort, or if branching out a serial version is
less of a maintenance nightmare, but that may be out of the topic
of this discussion.
Anyway:
Would another macro, say now part of mpi.h, be really helpful?
Would it only replicate the functionality (and perhaps conflict with)
the user-defined macros I mentioned above, or would it be &quot;smarter&quot;
in some sense that I don't realize?
Some codes and Makefiles break badly if one replaces the bare compiler
by the MPI compiler wrapper.
Instead, they set the includes and libraries separately.
This practice is not uncommon,
and may be there because in some MPI implementations
the compiler wrappers simply don't exist, as Jeff mentioned.
Would the new MPI macro help or harm in such cases?
My two cents.
Gus Correa
Jeff Squyres wrote:
&gt; I unfortunately won't be at the next Forum meeting, 
&gt; but you might want to ask someone to bring it up for you.
&gt; 
&gt; It might not give you exactly what you want, 
&gt; however, because not all platforms have &quot;mpicc&quot; (or similar) 
&gt; wrapper compilers. 
&gt; I.e., to compile an MPI application on some platforms, 
&gt; you just &quot;cc ... -lmpi&quot;. Hence, there's no way for the compiler to know whether to #define MPI or not.
&gt; 
&gt; Such a macro *could* be added to mpi.h (but not Fortran), 
&gt; but then you wouldn't get at least one of the use cases that 
&gt; you (assumedly :-) ) want:
&gt; 
&gt; #if MPI
&gt; #include &lt;mpi.h&gt;
&gt; #endif
&gt; 
&gt; 
&gt; On Aug 23, 2011, at 7:46 AM, Gabriele Fatigati wrote:
&gt; 
&gt;&gt; Can I suggest to insert this macro in next MPI 3 standard?
&gt;&gt;
&gt;&gt; I think It's very useful.
&gt;&gt;
&gt;&gt; 2011/8/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt; I'm afraid not. Sorry! :-(
&gt;&gt;
&gt;&gt; We have the OPEN_MPI macro -- it'll be defined to 1 if you compile with Open MPI, but that doesn't really help your portability issue. :-\
&gt;&gt;
&gt;&gt; On Aug 23, 2011, at 5:19 AM, Gabriele Fatigati wrote:
&gt;&gt;
&gt;&gt;&gt; Dear OpenMPi users,
&gt;&gt;&gt;
&gt;&gt;&gt; is there some portable MPI macro to check if a code is compiled with MPI compiler? Something like _OPENMP for OpenMP codes:
&gt;&gt;&gt;
&gt;&gt;&gt; #ifdef _OPENMP
&gt;&gt;&gt;
&gt;&gt;&gt; ....
&gt;&gt;&gt;
&gt;&gt;&gt; #endif
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; it exist?
&gt;&gt;&gt;
&gt;&gt;&gt; #ifdef MPI
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ....
&gt;&gt;&gt;
&gt;&gt;&gt; #endif
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Ing. Gabriele Fatigati
&gt;&gt;&gt;
&gt;&gt;&gt; HPC specialist
&gt;&gt;&gt;
&gt;&gt;&gt; SuperComputing Applications and Innovation Department
&gt;&gt;&gt;
&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
&gt;&gt;&gt;
&gt;&gt;&gt; www.cineca.it Tel: +39 051 6171722
&gt;&gt;&gt;
&gt;&gt;&gt; g.fatigati [AT] cineca.it
&gt;&gt;&gt;_____________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;_____________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Ing. Gabriele Fatigati
&gt;&gt;
&gt;&gt; HPC specialist
&gt;&gt;
&gt;&gt; SuperComputing Applications and Innovation Department
&gt;&gt;
&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
&gt;&gt;
&gt;&gt; www.cineca.it Tel: +39 051 6171722
&gt;&gt;
&gt;&gt; g.fatigati [AT] cineca.it 
&gt;&gt;_____________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
_____________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Previous message:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Gus Correa: "Re: [OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17089.php">Jeff Squyres: "Re: [OMPI users] MPI defined macro"</a>
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
