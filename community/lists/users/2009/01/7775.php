<?
$subject_val = "Re: [OMPI users] dead lock in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 05:08:14 2009" -->
<!-- isoreceived="20090123100814" -->
<!-- sent="Fri, 23 Jan 2009 11:08:08 +0100" -->
<!-- isosent="20090123100808" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dead lock in MPI_Finalize" -->
<!-- id="49799708.5040402_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0901230152i2c9f7787od3368ebe94f16cbd_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-01-23 05:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7774.php">Andrea Iob: "[OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>In reply to:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jody for your answer.
<br>
<p>I launch 2 instances of my program on 2 processes each instance, on the 
<br>
same machine.
<br>
I use MPI_Publish_name, MPI_Lookup_name  to create a global communicator 
<br>
on the 4 processes.
<br>
Then the 4 processes exchange data.
<br>
<p>The main program is a CORBA server. I send you this program.
<br>
<p>Bernard
<br>
<p>jody a &#233;crit :
<br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt; - how many processes on how many machines,
</span><br>
<span class="quotelev1">&gt; - what kind of computation
</span><br>
<span class="quotelev1">&gt; - perhaps minimal code which reproduces this failing
</span><br>
<span class="quotelev1">&gt; - configuration settings, etc.
</span><br>
<span class="quotelev1">&gt; See: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without any information except for &quot;it doesn't work&quot;,
</span><br>
<span class="quotelev1">&gt; nobody can give you any help whatsoever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 23, 2009 at 9:33 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev1">&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
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
<span class="quotelev3">&gt;&gt;&gt; Per this note on the &quot;getting help&quot; page, we still need the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;A _detailed_ description of what is failing. The more details that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide, the better. E-mails saying &quot;My application doesn't work!&quot; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inevitably be answered with requests for more information about exactly what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't work; so please include as much information detailed in your initial
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail as possible.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;The best way to get help is to provide a &quot;recipie&quot; for reproducing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 22, 2009, at 8:53 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Tim,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I send you the information in join files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim Mattox a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, Jan 21, 2009 at 8:58 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a case wher i have a dead lock in MPI_Finalize() function with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openMPI v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can some body help me please?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       _\\|//_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      (' 0 0 ')
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ____ooO  (_) Ooo______________________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       oooO (   )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       (   ) ) /
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        \ ( (_/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         \_)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; de copie.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intended solely for the use of the individual to whom they are addressed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;config.log.tgz&gt;&lt;ifconfig.log.tgz&gt;&lt;ompi_info.log.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<p><p><pre>
-- 
       _\\|//_
      (' 0 0 ')
____ooO  (_) Ooo______________________________________________________
 Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
 CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
 91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
------------Oooo---------------------------------------------------
       oooO (   )
       (   ) ) /
        \ ( (_/
         \_)
Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
&#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en conserver
de copie.
This e-mail and any files transmitted with it are confidential and
intended solely for the use of the individual to whom they are addressed.
If you have received this e-mail in error please inform the sender
immediately, without keeping any copy thereof.
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7775/SALOME_MPIContainer.cxx">SALOME_MPIContainer.cxx</a>
</ul>
<!-- attachment="SALOME_MPIContainer.cxx" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7774.php">Andrea Iob: "[OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>In reply to:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7776.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
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
