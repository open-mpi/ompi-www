<?
$subject_val = "Re: [OMPI users] dead lock in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:00:59 2009" -->
<!-- isoreceived="20090123110059" -->
<!-- sent="Fri, 23 Jan 2009 12:00:54 +0100" -->
<!-- isosent="20090123110054" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dead lock in MPI_Finalize" -->
<!-- id="4979A366.20200_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0901230240j3ab5333eo158d7e5cd54594fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] dead lock in MPI_Finalize<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bernard.secher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7779.php">Gabriele Fatigati: "[OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7777.php">Yongqi Sun: "[OMPI users] MCA base component file not found"</a>
<li><strong>In reply to:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7798.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No i didn't run this program whith Open-MPI 1.2.X because one said to me 
<br>
there were many changes between 1.2.X version and 1.3 version about 
<br>
MPI_publish_name, MPI_Lookup_name (new ompi-server, ...), and it was 
<br>
better to use 1.3 version.
<br>
<p>Yes i am sure all processes reach MPI_Finalize() function because i 
<br>
write message just before (it is the END_OF macro in my program), and i 
<br>
am sure all processes are locked in MPI_Finalize() function beacause i 
<br>
write message just after (it is the MESSAGE macro).
<br>
<p>May be all MPI_Sends are not matched  by corresponding MPI_Recvs,... It 
<br>
can be a possibility.
<br>
<p>Thanks
<br>
Bernard
<br>
<p><p><p>jody a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Bernard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The structure looks as far as i can see.
</span><br>
<span class="quotelev1">&gt; Did it run OK on Open-MPI 1.2.X?
</span><br>
<span class="quotelev1">&gt; So are you sure all processes reach the MPI_Finalize command?
</span><br>
<span class="quotelev1">&gt; Usually MPI_Finalize only completes when all processes reach it.
</span><br>
<span class="quotelev1">&gt; I think you should also make sure that all MPI_Sends are matched by
</span><br>
<span class="quotelev1">&gt; corresponding MPI_Recvs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 23, 2009 at 11:08 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev1">&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jody for your answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I launch 2 instances of my program on 2 processes each instance, on the same
</span><br>
<span class="quotelev2">&gt;&gt; machine.
</span><br>
<span class="quotelev2">&gt;&gt; I use MPI_Publish_name, MPI_Lookup_name  to create a global communicator on
</span><br>
<span class="quotelev2">&gt;&gt; the 4 processes.
</span><br>
<span class="quotelev2">&gt;&gt; Then the 4 processes exchange data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The main program is a CORBA server. I send you this program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance:
</span><br>
<span class="quotelev2">&gt;&gt; - how many processes on how many machines,
</span><br>
<span class="quotelev2">&gt;&gt; - what kind of computation
</span><br>
<span class="quotelev2">&gt;&gt; - perhaps minimal code which reproduces this failing
</span><br>
<span class="quotelev2">&gt;&gt; - configuration settings, etc.
</span><br>
<span class="quotelev2">&gt;&gt; See: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without any information except for &quot;it doesn't work&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; nobody can give you any help whatsoever.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 23, 2009 at 9:33 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand what you mean by &quot;A _detailed_ description of what is
</span><br>
<span class="quotelev2">&gt;&gt; failing&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; The problem is a dead lock in MPI_Finalize() function. All processes are
</span><br>
<span class="quotelev2">&gt;&gt; blocked in this MPI_Finalize() function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per this note on the &quot;getting help&quot; page, we still need the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;A _detailed_ description of what is failing. The more details that you
</span><br>
<span class="quotelev2">&gt;&gt; provide, the better. E-mails saying &quot;My application doesn't work!&quot; will
</span><br>
<span class="quotelev2">&gt;&gt; inevitably be answered with requests for more information about exactly what
</span><br>
<span class="quotelev2">&gt;&gt; doesn't work; so please include as much information detailed in your initial
</span><br>
<span class="quotelev2">&gt;&gt; e-mail as possible.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;The best way to get help is to provide a &quot;recipie&quot; for reproducing the
</span><br>
<span class="quotelev2">&gt;&gt; problem.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2009, at 8:53 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Tim,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I send you the information in join files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jan 21, 2009 at 8:58 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a case wher i have a dead lock in MPI_Finalize() function with
</span><br>
<span class="quotelev2">&gt;&gt; openMPI v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can some body help me please?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;       _\\|//_
</span><br>
<span class="quotelev2">&gt;&gt;      (' 0 0 ')
</span><br>
<span class="quotelev2">&gt;&gt; ____ooO  (_) Ooo______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev2">&gt;&gt;  91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev2">&gt;&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;       oooO (   )
</span><br>
<span class="quotelev2">&gt;&gt;       (   ) ) /
</span><br>
<span class="quotelev2">&gt;&gt;        \ ( (_/
</span><br>
<span class="quotelev2">&gt;&gt;         \_)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev2">&gt;&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
</span><br>
<span class="quotelev2">&gt;&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
</span><br>
<span class="quotelev2">&gt;&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
</span><br>
<span class="quotelev2">&gt;&gt; de copie.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev2">&gt;&gt; intended solely for the use of the individual to whom they are addressed.
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev2">&gt;&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.tgz&gt;&lt;ifconfig.log.tgz&gt;&lt;ompi_info.log.tgz&gt;_______________________________________________
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _\\|//_
</span><br>
<span class="quotelev2">&gt;&gt;       (' 0 0 ')
</span><br>
<span class="quotelev2">&gt;&gt; ____ooO  (_) Ooo______________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev2">&gt;&gt;  91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev2">&gt;&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;        oooO (   )
</span><br>
<span class="quotelev2">&gt;&gt;        (   ) ) /
</span><br>
<span class="quotelev2">&gt;&gt;         \ ( (_/
</span><br>
<span class="quotelev2">&gt;&gt;          \_)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev2">&gt;&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
</span><br>
<span class="quotelev2">&gt;&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
</span><br>
<span class="quotelev2">&gt;&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
</span><br>
<span class="quotelev2">&gt;&gt; de copie.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev2">&gt;&gt; intended solely for the use of the individual to whom they are addressed.
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev2">&gt;&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7779.php">Gabriele Fatigati: "[OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7777.php">Yongqi Sun: "[OMPI users] MCA base component file not found"</a>
<li><strong>In reply to:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7798.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
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
