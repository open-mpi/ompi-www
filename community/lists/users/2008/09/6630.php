<?
$subject_val = "Re: [OMPI users] Mpirun don't execute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 18:50:47 2008" -->
<!-- isoreceived="20080919225047" -->
<!-- sent="Sat, 20 Sep 2008 00:50:43 +0200" -->
<!-- isosent="20080919225043" -->
<!-- name="Santolo Felaco" -->
<!-- email="ahuramazda10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun don't execute" -->
<!-- id="5f76eef60809191550h16893de6o2f0ded76f20f6681_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7E8FB1D5-D510-4103-86D7-F57A4081DFA6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun don't execute<br>
<strong>From:</strong> Santolo Felaco (<em>ahuramazda10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 18:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6631.php">Brian Harker: "[OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6629.php">Gabriele Fatigati: "[OMPI users] MPI Finalize"</a>
<li><strong>In reply to:</strong> <a href="6623.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I try to be clearer:
<br>
osa_at_libertas:~$ echo $LD_LIBRARY_PATH
<br>
/usr/local/lib:/home/osa/blcr/lib
<br>
osa_at_libertas:~$ echo $PATH
<br>
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/home/osa/blcr/bin
<br>
<p>I compile the file with mpicc, then:
<br>
osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1
<br>
<p>The comand is blocked. Don't run. CTRL+X  does not end the program.
<br>
<p>This is ps output:
<br>
<p>osa_at_libertas:~/prove/openmpi$ mpirun -np 2 es1 &amp;
<br>
[1] 6151
<br>
osa_at_libertas:~/prove/openmpi$ ps
<br>
&nbsp;&nbsp;PID TTY          TIME CMD
<br>
&nbsp;6135 pts/2    00:00:00 bash
<br>
&nbsp;6151 pts/2    00:00:00 mpirun
<br>
&nbsp;6153 pts/2    00:00:00 ssh
<br>
&nbsp;6161 pts/2    00:00:00 ps
<br>
<p>Thansk
<br>
<p><p><p>2008/9/19 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Could you send a little more detailed explanation of exactly what is going
</span><br>
<span class="quotelev1">&gt; wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember: the more information you include in your report, the better.
</span><br>
<span class="quotelev1">&gt; E-mails simply stating, &quot;It doesn't work!&quot; are not helpful; we need to know
</span><br>
<span class="quotelev1">&gt; as much information about your environment as possible in order to provide
</span><br>
<span class="quotelev1">&gt; meaningful assistance. The best way to get help is to provide a &quot;recipie&quot;
</span><br>
<span class="quotelev1">&gt; for reproducing the problem. This will allow the Open MPI developers to see
</span><br>
<span class="quotelev1">&gt; the error for themselves, and therefore be able to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 4:35 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The attachemente contains: config.log, output file of ompi_info --all and
</span><br>
<span class="quotelev2">&gt;&gt; output file of ipconfig.
</span><br>
<span class="quotelev2">&gt;&gt; I need of version 1.3 because I must use the checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/9/19 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>; this will help us
</span><br>
<span class="quotelev2">&gt;&gt; understand your problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also note that Open MPI v1.3 is not yet released.  If you have v1.3, it's
</span><br>
<span class="quotelev2">&gt;&gt; a pre-release version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2008, at 1:37 PM, Santolo Felaco wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I have installed OpenMpi 1.3, my OS il Linux Ubuntu 8.04.
</span><br>
<span class="quotelev2">&gt;&gt; When I invoke the comand mpirun -np 1 es2 the shell is blocked. The comand
</span><br>
<span class="quotelev2">&gt;&gt; CTRL+X is not catched.
</span><br>
<span class="quotelev2">&gt;&gt; I have set defaut hostfile and I set LD_LIBRARY_PATH with /usr/local/lib.
</span><br>
<span class="quotelev2">&gt;&gt; Help me, please
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev2">&gt;&gt;  **
</span><br>
<span class="quotelev2">&gt;&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev2">&gt;&gt;  **
</span><br>
<span class="quotelev2">&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;log.zip&gt;_______________________________________________
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6631.php">Brian Harker: "[OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6629.php">Gabriele Fatigati: "[OMPI users] MPI Finalize"</a>
<li><strong>In reply to:</strong> <a href="6623.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Reply:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
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
