<?
$subject_val = "Re: [OMPI users] using of MPI_Publish_name with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 03:47:57 2008" -->
<!-- isoreceived="20081211084757" -->
<!-- sent="Thu, 11 Dec 2008 09:47:50 +0100" -->
<!-- isosent="20081211084750" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bsecher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using of MPI_Publish_name with openmpi" -->
<!-- id="4940D3B6.8070405_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F26319A-BBC4-45A0-8320-5F1801043057_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] using of MPI_Publish_name with openmpi<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bsecher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 03:47:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7505.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>In reply to:</strong> <a href="7497.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7505.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Reply:</strong> <a href="7505.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use first 1.2.5 version then 1.2.8 version.
<br>
<p>When the 1.3 version will be available?
<br>
<p>Before i try to use svn version. Thanks to give me more details.
<br>
<p>Best regards
<br>
Bernard
<br>
<p>Aur&#233;lien Bouteiller a &#233;crit :
<br>
<span class="quotelev1">&gt; Bernard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give us more details on the version of Open MPI you are 
</span><br>
<span class="quotelev1">&gt; using ? I suppose from your message this is one of the 1.2 series, but 
</span><br>
<span class="quotelev1">&gt; mode details would be greatly helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An utility called orte-clean can be used to try to remove all the 
</span><br>
<span class="quotelev1">&gt; garbage left, should something go wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have fixed a number of bugs in the MPI-2 dynamics recently. The 
</span><br>
<span class="quotelev1">&gt; forthcoming 1.3 should be more robust to that aspect. You can have a 
</span><br>
<span class="quotelev1">&gt; preview of it by using the svn version of Open MPI. The concepts have 
</span><br>
<span class="quotelev1">&gt; changed a little since then as --persistent --seed have been replaced 
</span><br>
<span class="quotelev1">&gt; by an external name server called ompi-server. I can give you more 
</span><br>
<span class="quotelev1">&gt; details if you want to try the svn version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 10 d&#233;c. 08 &#224; 10:28, Bernard Secher - SFME/LGLS a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everybody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to use MPI_publish_name function to do communicaztion between 
</span><br>
<span class="quotelev2">&gt;&gt; two independant code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw on the web i must use the orted daemon with the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted --persistent --seed --scope public --universe foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The communication success, but when i close the communication  I have 
</span><br>
<span class="quotelev2">&gt;&gt; a dead-lock at the following function: MPI_Comm_disconnect();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a second question:
</span><br>
<span class="quotelev2">&gt;&gt; How can i stop the orted daemon?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7505.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>In reply to:</strong> <a href="7497.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7505.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Reply:</strong> <a href="7505.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
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
