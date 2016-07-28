<?
$subject_val = "Re: [OMPI users] default hostfile with 1.3 version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 09:39:14 2009" -->
<!-- isoreceived="20090106143914" -->
<!-- sent="Tue, 06 Jan 2009 15:39:09 +0100" -->
<!-- isosent="20090106143909" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bsecher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default hostfile with 1.3 version" -->
<!-- id="49636D0D.7040107_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AFB7469A-DD9A-4638-86CA-9BFA39275D09_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] default hostfile with 1.3 version<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bsecher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 09:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7647.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>Previous message:</strong> <a href="7645.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>In reply to:</strong> <a href="7645.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7647.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>Reply:</strong> <a href="7647.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How can i do this in my etc/openmpi-mca-params.conf file ?
<br>
<p>Bernard
<br>
<p>Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm afraid that the changes in how we handle hostfiles forced us to 
</span><br>
<span class="quotelev1">&gt; remove the default hostfile name. Beginning with 1.3, you will need to 
</span><br>
<span class="quotelev1">&gt; specify it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that you can do this in your etc/openmpi-mca-params.conf file, if 
</span><br>
<span class="quotelev1">&gt; you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2009, at 4:36 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I take 1.3 version from svn base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The default hostfile in etc/openmpi-default-hostfile is not taken. I 
</span><br>
<span class="quotelev2">&gt;&gt; must give to mpirun the -hostfile option to take this file. Is there 
</span><br>
<span class="quotelev2">&gt;&gt; any change in 1.3 version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Bernard
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7647.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>Previous message:</strong> <a href="7645.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>In reply to:</strong> <a href="7645.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7647.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>Reply:</strong> <a href="7647.php">Ralph Castain: "Re: [OMPI users] default hostfile with 1.3 version"</a>
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
