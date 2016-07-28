<?
$subject_val = "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 04:34:40 2008" -->
<!-- isoreceived="20080422083440" -->
<!-- sent="Tue, 22 Apr 2008 01:28:44 -0700" -->
<!-- isosent="20080422082844" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found" -->
<!-- id="E771FA40-98DA-4C39-84F5-CE5178FF5767_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080422065610.167400_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 04:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5434.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stephan,
<br>
<p>A couple things to try
<br>
<p>Put -np 2 after -hostfile /home/stephan/mpd.hosts
<br>
<p>put the command you want to run after -np 2
<br>
<p>Good luck,
<br>
<p>Doug Reeder
<br>
<p>On Apr 21, 2008, at 11:56 PM, gildo.rex_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to compare MPICH and OpenMPI. MPICH works fine. So I  
</span><br>
<span class="quotelev1">&gt; installed OpenMPI the same way (configure, make, make install). The  
</span><br>
<span class="quotelev1">&gt; commands are found in the OpenMPI installation directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to run programs I was a little bit confused, that  
</span><br>
<span class="quotelev1">&gt; there seems not to be a default hosts-file like in MPICH. I  
</span><br>
<span class="quotelev1">&gt; included it in the command with &quot;--hostfile&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I now want to run my first test with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the error-message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and  
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi- 
</span><br>
<span class="quotelev1">&gt; install. &quot;orted&quot; is also found by &quot;which orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What might be the problem? How does &quot;orted&quot; work? I'm not conscious  
</span><br>
<span class="quotelev1">&gt; about anything equivalent in MPICH...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ist Ihr Browser Vista-kompatibel? Jetzt die neuesten
</span><br>
<span class="quotelev1">&gt; Browser-Versionen downloaden: <a href="http://www.gmx.net/de/go/browser">http://www.gmx.net/de/go/browser</a>
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
<li><strong>Next message:</strong> <a href="5434.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
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
