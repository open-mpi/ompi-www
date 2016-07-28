<?
$subject_val = "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 09:13:16 2009" -->
<!-- isoreceived="20091201141316" -->
<!-- sent="Tue, 1 Dec 2009 09:13:11 -0500" -->
<!-- isosent="20091201141311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &amp;quot;ulimit -s&amp;quot;" -->
<!-- id="99A79798-5307-4C7E-A4F0-35D23EB7E9A9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B05A6CE.8070507_at_anu.edu.au" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 09:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11308.php">Jeff Squyres: "Re: [OMPI users] MTT trivial test is getting failed:"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="11395.php">Paul Kapinos: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't think of what OMPI would be doing related to the predefined  
<br>
stack size -- I am not aware of anywhere in the code where we look up  
<br>
the predefine stack size and then do something with it.
<br>
<p>That being said, I don't know what the OS and resource consumption  
<br>
effects are of setting 1GB+ stack size on *any* application...  Have  
<br>
you tried non-MPI examples, potentially with applications as large as  
<br>
MPI applications but without the complexity of MPI?
<br>
<p><p>On Nov 19, 2009, at 3:13 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on the setup, threads often get allocated a thread local
</span><br>
<span class="quotelev1">&gt; stack with size equal to the stacksize rlimit.  Two threads maybe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt; A couple things to note.  First Sun MPI 8.2.1 is effectively OMPI
</span><br>
<span class="quotelev2">&gt; &gt; 1.3.4.  I also reproduced the below issue using a C code so I  
</span><br>
<span class="quotelev1">&gt; think this
</span><br>
<span class="quotelev2">&gt; &gt; is a general issue with OMPI and not Fortran based.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did a pmap of a process and there were two anon spaces equal to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; stack space set by ulimit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In one case (setting 102400) the anon spaces were next to each other
</span><br>
<span class="quotelev2">&gt; &gt; prior to all the loadable libraries.  In another case (setting  
</span><br>
<span class="quotelev1">&gt; 1024000)
</span><br>
<span class="quotelev2">&gt; &gt; one anon space was locate in the same area as the first case but the
</span><br>
<span class="quotelev2">&gt; &gt; second space was deep into some memory used by ompi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is any of this possibly related to the predefined handles?  Though  
</span><br>
<span class="quotelev1">&gt; I am
</span><br>
<span class="quotelev2">&gt; &gt; not sure why it would expand based on stack size?.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Thu, 19 Nov 2009 19:21:46 +0100
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] exceedingly virtual memory consumption of MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     environment if higher-setting &quot;ulimit -s&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;4B058CBA.3000105_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi volks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; we see an exeedingly *virtual* memory consumtion through MPI  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if &quot;ulimit -s&quot; (stack size)in profile configuration was setted  
</span><br>
<span class="quotelev1">&gt; higher.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Furthermore we believe, every mpi process started, wastes about the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; double size of `ulimit -s` value which will be set in a fresh  
</span><br>
<span class="quotelev1">&gt; console
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (that is, the value is configurated in e.g.  .zshenv, *not* the  
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev3">&gt; &gt;&gt; actually setted in the console from which the mpiexec runs).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sun MPI 8.2.1, an empty mpi-HelloWorld program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ! either if running both processes on the same host..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .zshenv: ulimit -s 10240   --&gt; VmPeak:    180072 kB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .zshenv: ulimit -s 102400  --&gt; VmPeak:    364392 kB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .zshenv: ulimit -s 1024000 --&gt; VmPeak:    2207592 kB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .zshenv: ulimit -s 2024000 --&gt; VmPeak:    4207592 kB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .zshenv: ulimit -s 20240000 --&gt; VmPeak:   39.7 GB!!!!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (see the attached files; the a.out binary is a mpi helloworld  
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running an never ending loop).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Normally, the stack size ulimit is set to some 10 MB by us, but  
</span><br>
<span class="quotelev1">&gt; we see
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a lot of codes which needs *a lot* of stack space, e.g. Fortran  
</span><br>
<span class="quotelev1">&gt; codes,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMP codes (and especially fortran OpenMP codes). Users tends to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hard-code the setting-up the higher value for stack size ulimit.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Normally, the using of a lot of virtual memory is no problem,  
</span><br>
<span class="quotelev1">&gt; because
</span><br>
<span class="quotelev3">&gt; &gt;&gt; there is a lot of this thing :-) But... If more than one person is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allowed to work on a computer, you have to divide the ressources in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; such a way that nobody can crash the box. We do not know how to  
</span><br>
<span class="quotelev1">&gt; limit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the real RAM used so we need to divide the RAM by means of setting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; virtual memory ulimit (in our batch system e.g.. That is, for us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;virtual memory consumption&quot; = &quot;real memory consumption&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And real memory is not that way cheap than virtual memory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So, why consuming the *twice* amount of stack size for each  
</span><br>
<span class="quotelev1">&gt; process?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And, why consuming the virtual memory at all? We guess this virtual
</span><br>
<span class="quotelev3">&gt; &gt;&gt; memory is allocated for the stack (why else it will be related to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stack size ulimit). But, is such allocation really needed? Is  
</span><br>
<span class="quotelev1">&gt; there a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; way to avoid the vaste of virtual memory?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11308.php">Jeff Squyres: "Re: [OMPI users] MTT trivial test is getting failed:"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11242.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Reply:</strong> <a href="11395.php">Paul Kapinos: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
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
