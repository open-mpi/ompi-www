<?
$subject_val = "Re: [OMPI users] dead lock in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 03:34:01 2009" -->
<!-- isoreceived="20090123083401" -->
<!-- sent="Fri, 23 Jan 2009 09:33:52 +0100" -->
<!-- isosent="20090123083352" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dead lock in MPI_Finalize" -->
<!-- id="497980F0.5080602_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7CDF97DC-6040-4C94-A8FA-E22FA7A8E800_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-23 03:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7771.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7768.php">Jeff Squyres: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>I don't understand what you mean by &quot;A _detailed_ description of what is 
<br>
failing&quot;.
<br>
The problem is a dead lock in MPI_Finalize() function. All processes are 
<br>
blocked in this MPI_Finalize() function.
<br>
<p>Bernard
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Per this note on the &quot;getting help&quot; page, we still need the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;A _detailed_ description of what is failing. The more details that 
</span><br>
<span class="quotelev1">&gt; you provide, the better. E-mails saying &quot;My application doesn't work!&quot; 
</span><br>
<span class="quotelev1">&gt; will inevitably be answered with requests for more information about 
</span><br>
<span class="quotelev1">&gt; exactly what doesn't work; so please include as much information 
</span><br>
<span class="quotelev1">&gt; detailed in your initial e-mail as possible.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The best way to get help is to provide a &quot;recipie&quot; for reproducing 
</span><br>
<span class="quotelev1">&gt; the problem.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2009, at 8:53 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 21, 2009 at 8:58 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a case wher i have a dead lock in MPI_Finalize() function with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openMPI v1.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can some body help me please?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
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
<span class="quotelev2">&gt;&gt; intended solely for the use of the individual to whom they are 
</span><br>
<span class="quotelev2">&gt;&gt; addressed.
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev2">&gt;&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.tgz&gt;&lt;ifconfig.log.tgz&gt;&lt;ompi_info.log.tgz&gt;_______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7771.php">Geoffroy Pignot: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>In reply to:</strong> <a href="7768.php">Jeff Squyres: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7773.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
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
