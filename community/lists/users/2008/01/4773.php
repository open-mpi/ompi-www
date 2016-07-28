<?
$subject_val = "Re: [OMPI users] No output from mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 10:15:40 2008" -->
<!-- isoreceived="20080102151540" -->
<!-- sent="Wed, 2 Jan 2008 10:15:24 -0500" -->
<!-- isosent="20080102151524" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No output from mpirun" -->
<!-- id="60C50A21-9CC3-46EA-9F6C-3D6933048F07_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="547db2260712310945h4a393967ha347e94796859e8a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No output from mpirun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 10:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4772.php">Ralph H Castain: "Re: [OMPI users] orte in persistent mode"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What did you name your executable?
<br>
<p>I believe that Open MPI and MPICH differ in how they find executables  
<br>
via mpirun -- for example, if you named your executable &quot;test&quot; and ran  
<br>
&quot;mpirun -np 4 test&quot;, Open MPI might very well have found /bin/test  
<br>
rather than the &quot;test&quot; executable in your pwd.  /bin/test will run and  
<br>
exit silently, which might be what you're seeing.  (I'm not sure how  
<br>
MPICH finds executables; I'm just guessing about this because other  
<br>
users have run into this same problem before and you said that MPICH  
<br>
works for you)
<br>
<p>In general, Open MPI tries to use the same PATH-searching semantics as  
<br>
the shell does.  For example, what runs when you do this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ test
<br>
<p>Is it your program, or /bin/test?  It may well be /bin/test if /bin is  
<br>
before . in the $PATH (or if . is not in your $PATH).  But:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ ./test
<br>
<p>will guarantee to run the &quot;test&quot; executable in your pwd.
<br>
<p>If this is the case, try forcing OMPI to use the &quot;test&quot; executable in  
<br>
your pwd:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun -np 4 ./test
<br>
<p>And see if that works for you.
<br>
<p><p><p>On Dec 31, 2007, at 12:45 PM, Amit Kumar Saha wrote:
<br>
<p><span class="quotelev1">&gt; On 12/31/07, Varun R &lt;nigen7_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the 'mpirun' is the one from OpenMPI. And btw mpich worked  
</span><br>
<span class="quotelev2">&gt;&gt; perfectly
</span><br>
<span class="quotelev2">&gt;&gt; for me. It's only ompi that's giving me these problems. Do I have  
</span><br>
<span class="quotelev2">&gt;&gt; to setup
</span><br>
<span class="quotelev2">&gt;&gt; ssh or something? Because I remember doing that for mpich.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to set up password less SSH login on each of the 'remote'
</span><br>
<span class="quotelev1">&gt; host you are planning to spawn your tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt; Amit
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Amit Kumar Saha
</span><br>
<span class="quotelev1">&gt; Writer, Programmer, Researcher
</span><br>
<span class="quotelev1">&gt; <a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4772.php">Ralph H Castain: "Re: [OMPI users] orte in persistent mode"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4762.php">Amit Kumar Saha: "Re: [OMPI users] No output from mpirun"</a>
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
