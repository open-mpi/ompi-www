<?
$subject_val = "Re: [OMPI users] dead lock in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 15:27:18 2009" -->
<!-- isoreceived="20090122202718" -->
<!-- sent="Thu, 22 Jan 2009 15:27:12 -0500" -->
<!-- isosent="20090122202712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dead lock in MPI_Finalize" -->
<!-- id="7CDF97DC-6040-4C94-A8FA-E22FA7A8E800_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49787A4A.6000405_at_cea.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 15:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7769.php">Gijsbert Wiesenekker: "[OMPI users] MPIAbort and raise(SIGTERM)"</a>
<li><strong>Previous message:</strong> <a href="7767.php">Doug Reeder: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="7760.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7772.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7772.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per this note on the &quot;getting help&quot; page, we still need the following:
<br>
<p>&quot;A _detailed_ description of what is failing. The more details that  
<br>
you provide, the better. E-mails saying &quot;My application doesn't work!&quot;  
<br>
will inevitably be answered with requests for more information about  
<br>
exactly what doesn't work; so please include as much information  
<br>
detailed in your initial e-mail as possible.&quot;
<br>
<p>Additionally:
<br>
<p>&quot;The best way to get help is to provide a &quot;recipie&quot; for reproducing  
<br>
the problem.&quot;
<br>
<p>Thanks!
<br>
<p><p>On Jan 22, 2009, at 8:53 AM, Bernard Secher - SFME/LGLS wrote:
<br>
<p><span class="quotelev1">&gt; Hello Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I send you the information in join files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Mattox a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jan 21, 2009 at 8:58 AM, Bernard Secher - SFME/LGLS
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bernard.secher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a case wher i have a dead lock in MPI_Finalize() function  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openMPI v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can some body help me please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;        _\\|//_
</span><br>
<span class="quotelev1">&gt;       (' 0 0 ')
</span><br>
<span class="quotelev1">&gt; ____ooO  (_) Ooo______________________________________________________
</span><br>
<span class="quotelev1">&gt;  Bernard S&#233;cher  DEN/DM2S/SFME/LGLS    mailto : bsecher_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  CEA Saclay, B&#226;t 454, Pi&#232;ce 114        Phone  : 33 (0)1 69 08 73 78
</span><br>
<span class="quotelev1">&gt;  91191 Gif-sur-Yvette Cedex, France    Fax    : 33 (0)1 69 08 10 87
</span><br>
<span class="quotelev1">&gt; ------------Oooo---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        oooO (   )
</span><br>
<span class="quotelev1">&gt;        (   ) ) /
</span><br>
<span class="quotelev1">&gt;         \ ( (_/
</span><br>
<span class="quotelev1">&gt;          \_)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ce message &#233;lectronique et tous les fichiers attach&#233;s qu'il contient
</span><br>
<span class="quotelev1">&gt; sont confidentiels et destin&#233;s exclusivement &#224; l'usage de la personne
</span><br>
<span class="quotelev1">&gt; &#224; laquelle ils sont adress&#233;s. Si vous avez re&#231;u ce message par erreur,
</span><br>
<span class="quotelev1">&gt; merci d'en avertir imm&#233;diatement son &#233;metteur et de ne pas en  
</span><br>
<span class="quotelev1">&gt; conserver
</span><br>
<span class="quotelev1">&gt; de copie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail and any files transmitted with it are confidential and
</span><br>
<span class="quotelev1">&gt; intended solely for the use of the individual to whom they are  
</span><br>
<span class="quotelev1">&gt; addressed.
</span><br>
<span class="quotelev1">&gt; If you have received this e-mail in error please inform the sender
</span><br>
<span class="quotelev1">&gt; immediately, without keeping any copy thereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .log 
</span><br>
<span class="quotelev1">&gt; .tgz 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ifconfig 
</span><br>
<span class="quotelev1">&gt; .log 
</span><br>
<span class="quotelev1">&gt; .tgz 
</span><br>
<span class="quotelev2">&gt; &gt;&lt;ompi_info.log.tgz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7769.php">Gijsbert Wiesenekker: "[OMPI users] MPIAbort and raise(SIGTERM)"</a>
<li><strong>Previous message:</strong> <a href="7767.php">Doug Reeder: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="7760.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7772.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7772.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
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
