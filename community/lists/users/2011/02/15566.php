<?
$subject_val = "Re: [OMPI users] runtime error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 06:11:22 2011" -->
<!-- isoreceived="20110211111122" -->
<!-- sent="Fri, 11 Feb 2011 12:11:15 +0100" -->
<!-- isosent="20110211111115" -->
<!-- name="Marcela Castro Le&#243;n" -->
<!-- email="mcastrol_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error" -->
<!-- id="AANLkTinwW3yi+dFRa67ujyVTzLYaamdu6aJWvkuT0f91_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6027EA63-8B75-412A-8279-11AADEC9691C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime error<br>
<strong>From:</strong> Marcela Castro Le&#243;n (<em>mcastrol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 06:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15567.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15567.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="15567.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>I've the same version ob Ubuntu 10.04. The original version was Ubuntu
<br>
Server 9.1 (64) and upgraded both of them to 10.04.
<br>
Yesterday I've updated and upgraded to the same level again. But I've got
<br>
the same error after that.
<br>
The machine are exactly the same, HP Compaq with inter Core I5.
<br>
<p>Anyway I've compared the version of openmpi and gcc, and are the same too:
<br>
1.4.1-2 and 4.4.4.3 respectly. I'm attaching the exit of the dpkg-l on the
<br>
two system.
<br>
<p>I would appreciate a lot any help to solve it.
<br>
Thank you.
<br>
<p>Marcela.
<br>
2011/2/10 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I typically see these kinds of errors when there's an Open MPI version
</span><br>
<span class="quotelev1">&gt; mismatch between the nodes, and/or if there are slightly different flavors
</span><br>
<span class="quotelev1">&gt; of Linux installed on each node (i.e., you're technically in a heterogeneous
</span><br>
<span class="quotelev1">&gt; situation, but you're trying to run a single application binary).  Can you
</span><br>
<span class="quotelev1">&gt; verify:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. that you have exactly the same version of Open MPI installed on all
</span><br>
<span class="quotelev1">&gt; nodes?  (and that your application was compiled against that exact version)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. that you have exactly the same OS/update level installed on all nodes
</span><br>
<span class="quotelev1">&gt; (e.g., same versions of glibc, etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2011, at 3:13 AM, Marcela Castro Le&#243;n wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt; I've a program that allways works fine, but i'm trying it on a new
</span><br>
<span class="quotelev1">&gt; cluster and fails when I execute it on more than one machine.
</span><br>
<span class="quotelev2">&gt; &gt; I mean, if I execute alone on each host, everything works fine.
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~/gaps/caso3-i1$ mpirun -np 3 ../test parcorto.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But when I execute
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~/gaps/caso3-i1$ mpirun -np 3 -machinefile
</span><br>
<span class="quotelev1">&gt; /home/radic/mfile ../test parcorto.txt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get this error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 0 with PID 2132 on
</span><br>
<span class="quotelev2">&gt; &gt; node santacruz exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Though the machinefile (mfile) had only one machine, the programs fails.
</span><br>
<span class="quotelev2">&gt; &gt; This is the current content:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~/gaps/caso3-i1$ cat /home/radic/mfile
</span><br>
<span class="quotelev2">&gt; &gt; santacruz
</span><br>
<span class="quotelev2">&gt; &gt; chubut
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've debug the program and the error occurs after proc0 do an
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv(&amp;nomproc,lennomproc,MPI_CHAR,i,tag,MPI_COMM_WORLD,&amp;Stat);
</span><br>
<span class="quotelev2">&gt; &gt; from the remote process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've done several test I'll mention:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Change the order on machinefile
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~/gaps/caso3-i1$ cat /home/radic/mfile
</span><br>
<span class="quotelev2">&gt; &gt; chubut
</span><br>
<span class="quotelev2">&gt; &gt; santacruz
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In that case, I get this error:
</span><br>
<span class="quotelev2">&gt; &gt; [chubut:2194] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; [chubut:2194] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [chubut:2194] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt; [chubut:2194] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; and then
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 0 with PID 2194 on
</span><br>
<span class="quotelev2">&gt; &gt; node chubut exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) I've got the same error executing on host chubut intead of santacruz,
</span><br>
<span class="quotelev2">&gt; &gt; 3) a simple mpi programs like  MPI_Hello world are working fine, but I
</span><br>
<span class="quotelev1">&gt; suppose that are very simple program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~/gaps$ mpirun -np 3 -machinefile /home/radic/mfile
</span><br>
<span class="quotelev1">&gt; MPI_Hello
</span><br>
<span class="quotelev2">&gt; &gt; Hola Mundo Hola Marce 1
</span><br>
<span class="quotelev2">&gt; &gt; Hola Mundo Hola Marce 0
</span><br>
<span class="quotelev2">&gt; &gt; Hola Mundo Hola Marce 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the information you ask for tuntime problem.
</span><br>
<span class="quotelev2">&gt; &gt; a) radic_at_santacruz:~$ mpirun -version
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; b) i'm using ubuntu 10,04. I'm installing the packages using apt-get
</span><br>
<span class="quotelev1">&gt; install, so, I don't have a config.log
</span><br>
<span class="quotelev2">&gt; &gt; c) The ompi_info --all is on the file ompi_info.zip
</span><br>
<span class="quotelev2">&gt; &gt; d) These are PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~$ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev2">&gt; &gt; radic_at_santacruz:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Marcela.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15567.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="15565.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15567.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="15567.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
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
