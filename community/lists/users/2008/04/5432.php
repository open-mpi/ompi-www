<?
$subject_val = "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 04:18:50 2008" -->
<!-- isoreceived="20080422081850" -->
<!-- sent="Tue, 22 Apr 2008 10:18:40 +0200" -->
<!-- isosent="20080422081840" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found" -->
<!-- id="9b0da5ce0804220118g541a1bd0p11b5af634de11b9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 04:18:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried the command ompi_info?
<br>
What is its output?
<br>
<p>Furthermore, the command you gave
<br>
<span class="quotelev1"> &gt;   mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
is incomplete. There is no executable.
<br>
<p>Try to make sure wether your host file has the correct
<br>
format. If i remember correctly  Open-MPI does not use
<br>
the same format for hostfiles as MPICH.
<br>
See the FAQ for more info
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
<br>
<p>If you don't use a hostfile, mpirun will start
<br>
all processes on the local machine.
<br>
<p>jody
<br>
<p>On Tue, Apr 22, 2008 at 8:56 AM,  &lt;gildo.rex_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I wanted to compare MPICH and OpenMPI. MPICH works fine. So I installed OpenMPI the same way (configure, make, make install). The commands are found in the OpenMPI installation directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I tried to run programs I was a little bit confused, that there seems not to be a default hosts-file like in MPICH. I included it in the command with &quot;--hostfile&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I now want to run my first test with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I get the error-message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi-install. &quot;orted&quot; is also found by &quot;which orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What might be the problem? How does &quot;orted&quot; work? I'm not conscious about anything equivalent in MPICH...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks in advance for your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Kind Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Stephan
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Ist Ihr Browser Vista-kompatibel? Jetzt die neuesten
</span><br>
<span class="quotelev1">&gt;  Browser-Versionen downloaden: <a href="http://www.gmx.net/de/go/browser">http://www.gmx.net/de/go/browser</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="5431.php">gildo.rex_at_[hidden]: "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
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
