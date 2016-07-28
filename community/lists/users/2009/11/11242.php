<?
$subject_val = "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 15:13:10 2009" -->
<!-- isoreceived="20091119201310" -->
<!-- sent="Fri, 20 Nov 2009 07:13:02 +1100" -->
<!-- isosent="20091119201302" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="4B05A6CE.8070507_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="13006_1258661141_4B05A515_13006_44739_1_4B05A490.3050003_at_sun.com" -->
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
<strong>Date:</strong> 2009-11-19 15:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11243.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Previous message:</strong> <a href="11241.php">Terry Dontje: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="11241.php">Terry Dontje: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depending on the setup, threads often get allocated a thread local
<br>
stack with size equal to the stacksize rlimit.  Two threads maybe?
<br>
<p>David
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; A couple things to note.  First Sun MPI 8.2.1 is effectively OMPI 
</span><br>
<span class="quotelev1">&gt; 1.3.4.  I also reproduced the below issue using a C code so I think this 
</span><br>
<span class="quotelev1">&gt; is a general issue with OMPI and not Fortran based.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did a pmap of a process and there were two anon spaces equal to the 
</span><br>
<span class="quotelev1">&gt; stack space set by ulimit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In one case (setting 102400) the anon spaces were next to each other 
</span><br>
<span class="quotelev1">&gt; prior to all the loadable libraries.  In another case (setting 1024000) 
</span><br>
<span class="quotelev1">&gt; one anon space was locate in the same area as the first case but the 
</span><br>
<span class="quotelev1">&gt; second space was deep into some memory used by ompi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is any of this possibly related to the predefined handles?  Though I am 
</span><br>
<span class="quotelev1">&gt; not sure why it would expand based on stack size?.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 19 Nov 2009 19:21:46 +0100
</span><br>
<span class="quotelev2">&gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] exceedingly virtual memory consumption of MPI
</span><br>
<span class="quotelev2">&gt;&gt;     environment if higher-setting &quot;ulimit -s&quot;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;4B058CBA.3000105_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi volks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we see an exeedingly *virtual* memory consumtion through MPI processes 
</span><br>
<span class="quotelev2">&gt;&gt; if &quot;ulimit -s&quot; (stack size)in profile configuration was setted higher.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore we believe, every mpi process started, wastes about the 
</span><br>
<span class="quotelev2">&gt;&gt; double size of `ulimit -s` value which will be set in a fresh console 
</span><br>
<span class="quotelev2">&gt;&gt; (that is, the value is configurated in e.g.  .zshenv, *not* the value 
</span><br>
<span class="quotelev2">&gt;&gt; actually setted in the console from which the mpiexec runs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sun MPI 8.2.1, an empty mpi-HelloWorld program
</span><br>
<span class="quotelev2">&gt;&gt; ! either if running both processes on the same host..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .zshenv: ulimit -s 10240   --&gt; VmPeak:    180072 kB
</span><br>
<span class="quotelev2">&gt;&gt; .zshenv: ulimit -s 102400  --&gt; VmPeak:    364392 kB
</span><br>
<span class="quotelev2">&gt;&gt; .zshenv: ulimit -s 1024000 --&gt; VmPeak:    2207592 kB
</span><br>
<span class="quotelev2">&gt;&gt; .zshenv: ulimit -s 2024000 --&gt; VmPeak:    4207592 kB
</span><br>
<span class="quotelev2">&gt;&gt; .zshenv: ulimit -s 20240000 --&gt; VmPeak:   39.7 GB!!!!
</span><br>
<span class="quotelev2">&gt;&gt; (see the attached files; the a.out binary is a mpi helloworld program 
</span><br>
<span class="quotelev2">&gt;&gt; running an never ending loop).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Normally, the stack size ulimit is set to some 10 MB by us, but we see 
</span><br>
<span class="quotelev2">&gt;&gt; a lot of codes which needs *a lot* of stack space, e.g. Fortran codes, 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMP codes (and especially fortran OpenMP codes). Users tends to 
</span><br>
<span class="quotelev2">&gt;&gt; hard-code the setting-up the higher value for stack size ulimit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Normally, the using of a lot of virtual memory is no problem, because 
</span><br>
<span class="quotelev2">&gt;&gt; there is a lot of this thing :-) But... If more than one person is 
</span><br>
<span class="quotelev2">&gt;&gt; allowed to work on a computer, you have to divide the ressources in 
</span><br>
<span class="quotelev2">&gt;&gt; such a way that nobody can crash the box. We do not know how to limit 
</span><br>
<span class="quotelev2">&gt;&gt; the real RAM used so we need to divide the RAM by means of setting 
</span><br>
<span class="quotelev2">&gt;&gt; virtual memory ulimit (in our batch system e.g.. That is, for us
</span><br>
<span class="quotelev2">&gt;&gt; &quot;virtual memory consumption&quot; = &quot;real memory consumption&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; And real memory is not that way cheap than virtual memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, why consuming the *twice* amount of stack size for each process?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And, why consuming the virtual memory at all? We guess this virtual 
</span><br>
<span class="quotelev2">&gt;&gt; memory is allocated for the stack (why else it will be related to the 
</span><br>
<span class="quotelev2">&gt;&gt; stack size ulimit). But, is such allocation really needed? Is there a 
</span><br>
<span class="quotelev2">&gt;&gt; way to avoid the vaste of virtual memory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11243.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Previous message:</strong> <a href="11241.php">Terry Dontje: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="11241.php">Terry Dontje: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11309.php">Jeff Squyres: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
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
