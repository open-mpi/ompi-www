<?
$subject_val = "Re: [OMPI users] runtime error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 08:29:42 2011" -->
<!-- isoreceived="20110210132942" -->
<!-- sent="Thu, 10 Feb 2011 05:29:46 -0800" -->
<!-- isosent="20110210132946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error" -->
<!-- id="6027EA63-8B75-412A-8279-11AADEC9691C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTik3S1CFPXFQA+S63-jzKK5uXWR-7Ptj0Vak5JQ__at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 08:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15552.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15550.php">Marcela Castro Le&#243;n: "Re: [OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="15550.php">Marcela Castro Le&#243;n: "Re: [OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15566.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="15566.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I typically see these kinds of errors when there's an Open MPI version mismatch between the nodes, and/or if there are slightly different flavors of Linux installed on each node (i.e., you're technically in a heterogeneous situation, but you're trying to run a single application binary).  Can you verify:
<br>
<p>1. that you have exactly the same version of Open MPI installed on all nodes?  (and that your application was compiled against that exact version)
<br>
<p>2. that you have exactly the same OS/update level installed on all nodes (e.g., same versions of glibc, etc.)
<br>
<p><p>On Feb 10, 2011, at 3:13 AM, Marcela Castro Le&#243;n wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; I've a program that allways works fine, but i'm trying it on a new cluster and fails when I execute it on more than one machine.
</span><br>
<span class="quotelev1">&gt; I mean, if I execute alone on each host, everything works fine.
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps/caso3-i1$ mpirun -np 3 ../test parcorto.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I execute
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps/caso3-i1$ mpirun -np 3 -machinefile /home/radic/mfile ../test parcorto.txt 
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
<span class="quotelev1">&gt; 3) a simple mpi programs like  MPI_Hello world are working fine, but I suppose that are very simple program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; radic_at_santacruz:~/gaps$ mpirun -np 3 -machinefile /home/radic/mfile MPI_Hello
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
<span class="quotelev1">&gt; b) i'm using ubuntu 10,04. I'm installing the packages using apt-get install, so, I don't have a config.log
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15552.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15550.php">Marcela Castro Le&#243;n: "Re: [OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="15550.php">Marcela Castro Le&#243;n: "Re: [OMPI users] runtime error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15566.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
<li><strong>Reply:</strong> <a href="15566.php">Marcela Castro León: "Re: [OMPI users] runtime error"</a>
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
