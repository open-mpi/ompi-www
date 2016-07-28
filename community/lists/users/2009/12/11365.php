<?
$subject_val = "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 02:10:23 2009" -->
<!-- isoreceived="20091202071023" -->
<!-- sent="Wed, 02 Dec 2009 18:10:16 +1100" -->
<!-- isosent="20091202071016" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="4B1612D8.8010104_at_anu.edu.au" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 02:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11366.php">Joshua Hursey: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Previous message:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>In reply to:</strong> <a href="11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11395.php">Paul Kapinos: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the issue is that if you *dont* specifically use
<br>
pthread_attr_setstacksize the pthread library will (can?) give
<br>
each thread a stack of size equal to the stacksize rlimit.
<br>
<p>You are correct - this is not specifically an Open MPI issue
<br>
although if it is Open MPI spawning the threads, maybe it
<br>
should be actively setting pthread_attr_setstacksize.  But there
<br>
is an unfortunate tendency for users to set very large (or
<br>
unlimited) stacksize without realising these sort of repercussions.
<br>
Try catching/looking at the stacktrace of an application that is in
<br>
infinite recursion with a 1GB+ stacksize after it finally gets a
<br>
SEGV ...
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I can't think of what OMPI would be doing related to the predefined 
</span><br>
<span class="quotelev1">&gt; stack size -- I am not aware of anywhere in the code where we look up 
</span><br>
<span class="quotelev1">&gt; the predefine stack size and then do something with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I don't know what the OS and resource consumption 
</span><br>
<span class="quotelev1">&gt; effects are of setting 1GB+ stack size on *any* application...  Have you 
</span><br>
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
--------------------------------------------------------------------------
    Dr David Singleton               ANU Supercomputer Facility
    HPC Systems Manager              and NCI National Facility
    David.Singleton_at_[hidden]       Leonard Huxley Bldg (No. 56)
    Phone: +61 2 6125 4389           Australian National University
    Fax:   +61 2 6125 8199           Canberra, ACT, 0200, Australia
--------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11366.php">Joshua Hursey: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Previous message:</strong> <a href="11364.php">Terry Frankcombe: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>In reply to:</strong> <a href="11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11395.php">Paul Kapinos: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
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
