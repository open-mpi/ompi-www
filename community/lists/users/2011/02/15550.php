<?
$subject_val = "Re: [OMPI users] runtime error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 06:13:17 2011" -->
<!-- isoreceived="20110210111317" -->
<!-- sent="Thu, 10 Feb 2011 12:13:10 +0100" -->
<!-- isosent="20110210111310" -->
<!-- name="Marcela Castro Le&#243;n" -->
<!-- email="mcastrol_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error" -->
<!-- id="AANLkTik3S1CFPXFQA+S63-jzKK5uXWR-7Ptj0Vak5JQ__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinmnEoYwNfC6=4PvUBfD8Ghu15kbKQvGbN0DFbb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-02-10 06:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p><span class="quotelev1">&gt; I've a program that allways works fine, but i'm trying it on a new cluster
</span><br>
<span class="quotelev1">&gt; and fails when I execute it on more than one machine.
</span><br>
<span class="quotelev1">&gt; I mean, if I execute alone on each host, everything works fine.
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps/caso3-i1$ mpirun -np 3 ../test parcorto.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I execute
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps/caso3-i1$ mpirun -np 3 -machinefile
</span><br>
<span class="quotelev1">&gt; /home/radic/mfile ../test parcorto.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 2132 on
</span><br>
<span class="quotelev1">&gt; node santacruz exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though the machinefile (mfile) had only one machine, the programs fails.
</span><br>
<span class="quotelev1">&gt; This is the current content:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps/caso3-i1$ cat /home/radic/mfile
</span><br>
<span class="quotelev1">&gt; santacruz
</span><br>
<span class="quotelev1">&gt; chubut
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've debug the program and the error occurs after proc0 do an
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;nomproc,lennomproc,MPI_CHAR,i,tag,MPI_COMM_WORLD,&amp;Stat);
</span><br>
<span class="quotelev1">&gt; from the remote process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done several test I'll mention:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Change the order on machinefile
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps/caso3-i1$ cat /home/radic/mfile
</span><br>
<span class="quotelev1">&gt; chubut
</span><br>
<span class="quotelev1">&gt; santacruz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In that case, I get this error:
</span><br>
<span class="quotelev1">&gt; [chubut:2194] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [chubut:2194] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [chubut:2194] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [chubut:2194] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; and then
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 2194 on
</span><br>
<span class="quotelev1">&gt; node chubut exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) I've got the same error executing on host chubut intead of santacruz,
</span><br>
<span class="quotelev1">&gt; 3) a simple mpi programs like  MPI_Hello world are working fine, but I
</span><br>
<span class="quotelev1">&gt; suppose that are very simple program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps$ mpirun -np 3 -machinefile /home/radic/mfile
</span><br>
<span class="quotelev1">&gt; MPI_Hello
</span><br>
<span class="quotelev1">&gt; Hola Mundo Hola Marce 1
</span><br>
<span class="quotelev1">&gt; Hola Mundo Hola Marce 0
</span><br>
<span class="quotelev1">&gt; Hola Mundo Hola Marce 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the information you ask for tuntime problem.
</span><br>
<span class="quotelev1">&gt; a) radic_at_santacruz:~$ mpirun -version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.1
</span><br>
<span class="quotelev1">&gt; b) i'm using ubuntu 10,04. I'm installing the packages using apt-get
</span><br>
<span class="quotelev1">&gt; install, so, I don't have a config.log
</span><br>
<span class="quotelev1">&gt; c) The ompi_info --all is on the file ompi_info.zip
</span><br>
<span class="quotelev1">&gt; d) These are PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcela.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<li><strong>Previous message:</strong> <a href="15549.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
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
