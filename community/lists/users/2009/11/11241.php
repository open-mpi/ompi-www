<?
$subject_val = "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 15:05:02 2009" -->
<!-- isoreceived="20091119200502" -->
<!-- sent="Thu, 19 Nov 2009 15:03:28 -0500" -->
<!-- isosent="20091119200328" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="4B05A490.3050003_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3933.1258654912.7252.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 15:03:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A couple things to note.  First Sun MPI 8.2.1 is effectively OMPI 
<br>
1.3.4.  I also reproduced the below issue using a C code so I think this 
<br>
is a general issue with OMPI and not Fortran based.
<br>
<p>I did a pmap of a process and there were two anon spaces equal to the 
<br>
stack space set by ulimit.
<br>
<p>In one case (setting 102400) the anon spaces were next to each other 
<br>
prior to all the loadable libraries.  In another case (setting 1024000) 
<br>
one anon space was locate in the same area as the first case but the 
<br>
second space was deep into some memory used by ompi.
<br>
<p>Is any of this possibly related to the predefined handles?  Though I am 
<br>
not sure why it would expand based on stack size?.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Thu, 19 Nov 2009 19:21:46 +0100
</span><br>
<span class="quotelev1">&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] exceedingly virtual memory consumption of MPI
</span><br>
<span class="quotelev1">&gt; 	environment if higher-setting &quot;ulimit -s&quot;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4B058CBA.3000105_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi volks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we see an exeedingly *virtual* memory consumtion through MPI processes 
</span><br>
<span class="quotelev1">&gt; if &quot;ulimit -s&quot; (stack size)in profile configuration was setted higher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Furthermore we believe, every mpi process started, wastes about the 
</span><br>
<span class="quotelev1">&gt; double size of `ulimit -s` value which will be set in a fresh console 
</span><br>
<span class="quotelev1">&gt; (that is, the value is configurated in e.g.  .zshenv, *not* the value 
</span><br>
<span class="quotelev1">&gt; actually setted in the console from which the mpiexec runs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun MPI 8.2.1, an empty mpi-HelloWorld program
</span><br>
<span class="quotelev1">&gt; ! either if running both processes on the same host..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 10240   --&gt; VmPeak:    180072 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 102400  --&gt; VmPeak:    364392 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 1024000 --&gt; VmPeak:    2207592 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 2024000 --&gt; VmPeak:    4207592 kB
</span><br>
<span class="quotelev1">&gt; .zshenv: ulimit -s 20240000 --&gt; VmPeak:   39.7 GB!!!!
</span><br>
<span class="quotelev1">&gt; (see the attached files; the a.out binary is a mpi helloworld program 
</span><br>
<span class="quotelev1">&gt; running an never ending loop).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Normally, the stack size ulimit is set to some 10 MB by us, but we see a 
</span><br>
<span class="quotelev1">&gt; lot of codes which needs *a lot* of stack space, e.g. Fortran codes, 
</span><br>
<span class="quotelev1">&gt; OpenMP codes (and especially fortran OpenMP codes). Users tends to 
</span><br>
<span class="quotelev1">&gt; hard-code the setting-up the higher value for stack size ulimit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Normally, the using of a lot of virtual memory is no problem, because 
</span><br>
<span class="quotelev1">&gt; there is a lot of this thing :-) But... If more than one person is 
</span><br>
<span class="quotelev1">&gt; allowed to work on a computer, you have to divide the ressources in such 
</span><br>
<span class="quotelev1">&gt; a way that nobody can crash the box. We do not know how to limit the 
</span><br>
<span class="quotelev1">&gt; real RAM used so we need to divide the RAM by means of setting virtual 
</span><br>
<span class="quotelev1">&gt; memory ulimit (in our batch system e.g.. That is, for us
</span><br>
<span class="quotelev1">&gt; &quot;virtual memory consumption&quot; = &quot;real memory consumption&quot;.
</span><br>
<span class="quotelev1">&gt; And real memory is not that way cheap than virtual memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, why consuming the *twice* amount of stack size for each process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, why consuming the virtual memory at all? We guess this virtual 
</span><br>
<span class="quotelev1">&gt; memory is allocated for the stack (why else it will be related to the 
</span><br>
<span class="quotelev1">&gt; stack size ulimit). But, is such allocation really needed? Is there a 
</span><br>
<span class="quotelev1">&gt; way to avoid the vaste of virtual memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
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
