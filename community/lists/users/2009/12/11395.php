<?
$subject_val = "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 03:56:13 2009" -->
<!-- isoreceived="20091203085613" -->
<!-- sent="Thu, 03 Dec 2009 09:56:08 +0100" -->
<!-- isosent="20091203085608" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="4B177D28.1090904_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="99A79798-5307-4C7E-A4F0-35D23EB7E9A9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 03:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11394.php">Katz, Jacob: "[OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, hi all,
<br>
<p><p><span class="quotelev1">&gt; I can't think of what OMPI would be doing related to the predefined 
</span><br>
<span class="quotelev1">&gt; stack size -- I am not aware of anywhere in the code where we look up 
</span><br>
<span class="quotelev1">&gt; the predefine stack size and then do something with it.
</span><br>
<p>I do not know OMPI code at all - but what I see is the consumption of 
<br>
virtual memory according to the twice stack size defaults by new login..
<br>
<p><p><p><p><span class="quotelev1">&gt; That being said, I don't know what the OS and resource consumption 
</span><br>
<span class="quotelev1">&gt; effects are of setting 1GB+ stack size on *any* application...  
</span><br>
<p>we defenitely have applications which *need* stack size of 500+MB.
<br>
<p>Users who use such codes, may trend to hard-code a *huge* stack size in 
<br>
their profile (you do not wanna to lose a day ot two of computing time 
<br>
just by forgitting to set a ulimit, right?). (Currently, I see *one* 
<br>
such user, but who knows how many there are...)
<br>
<p>nevertheless, also if the users do not use a huge stack size, the 
<br>
default stack size is some 20 MB. That's not much, but does this 
<br>
allocation-and-never-use of twice of the stack size really needed?
<br>
<p><p>Best wishes,
<br>
PK
<br>
<p><p><p><p>Have you
<br>
<span class="quotelev1">&gt; tried non-MPI examples, potentially with applications as large as MPI 
</span><br>
<span class="quotelev1">&gt; applications but without the complexity of MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 19, 2009, at 3:13 PM, David Singleton wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending on the setup, threads often get allocated a thread local
</span><br>
<span class="quotelev2">&gt;&gt; stack with size equal to the stacksize rlimit.  Two threads maybe?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A couple things to note.  First Sun MPI 8.2.1 is effectively OMPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1.3.4.  I also reproduced the below issue using a C code so I think 
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is a general issue with OMPI and not Fortran based.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I did a pmap of a process and there were two anon spaces equal to the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; stack space set by ulimit.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In one case (setting 102400) the anon spaces were next to each other
</span><br>
<span class="quotelev3">&gt;&gt; &gt; prior to all the loadable libraries.  In another case (setting 1024000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one anon space was locate in the same area as the first case but the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; second space was deep into some memory used by ompi.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is any of this possibly related to the predefined handles?  Though I am
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not sure why it would expand based on stack size?.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --td
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Date: Thu, 19 Nov 2009 19:21:46 +0100
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subject: [OMPI users] exceedingly virtual memory consumption of MPI
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     environment if higher-setting &quot;ulimit -s&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Message-ID: &lt;4B058CBA.3000105_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi volks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; we see an exeedingly *virtual* memory consumtion through MPI processes
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; if &quot;ulimit -s&quot; (stack size)in profile configuration was setted higher.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Furthermore we believe, every mpi process started, wastes about the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; double size of `ulimit -s` value which will be set in a fresh console
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (that is, the value is configurated in e.g.  .zshenv, *not* the value
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; actually setted in the console from which the mpiexec runs).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sun MPI 8.2.1, an empty mpi-HelloWorld program
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ! either if running both processes on the same host..
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .zshenv: ulimit -s 10240   --&gt; VmPeak:    180072 kB
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .zshenv: ulimit -s 102400  --&gt; VmPeak:    364392 kB
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .zshenv: ulimit -s 1024000 --&gt; VmPeak:    2207592 kB
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .zshenv: ulimit -s 2024000 --&gt; VmPeak:    4207592 kB
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .zshenv: ulimit -s 20240000 --&gt; VmPeak:   39.7 GB!!!!
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (see the attached files; the a.out binary is a mpi helloworld program
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; running an never ending loop).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Normally, the stack size ulimit is set to some 10 MB by us, but we see
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; a lot of codes which needs *a lot* of stack space, e.g. Fortran codes,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; OpenMP codes (and especially fortran OpenMP codes). Users tends to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; hard-code the setting-up the higher value for stack size ulimit.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Normally, the using of a lot of virtual memory is no problem, because
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; there is a lot of this thing :-) But... If more than one person is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; allowed to work on a computer, you have to divide the ressources in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; such a way that nobody can crash the box. We do not know how to limit
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the real RAM used so we need to divide the RAM by means of setting
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; virtual memory ulimit (in our batch system e.g.. That is, for us
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &quot;virtual memory consumption&quot; = &quot;real memory consumption&quot;.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; And real memory is not that way cheap than virtual memory.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; So, why consuming the *twice* amount of stack size for each process?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; And, why consuming the virtual memory at all? We guess this virtual
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; memory is allocated for the stack (why else it will be related to the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; stack size ulimit). But, is such allocation really needed? Is there a
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; way to avoid the vaste of virtual memory?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; best regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11395/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11394.php">Katz, Jacob: "[OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
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
