<?
$subject_val = "Re: [OMPI users] default hostfile with 1.3 version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 09:48:11 2009" -->
<!-- isoreceived="20090106144811" -->
<!-- sent="Tue, 6 Jan 2009 07:48:03 -0700" -->
<!-- isosent="20090106144803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default hostfile with 1.3 version" -->
<!-- id="48BE1A6A-BD38-4F0C-AB67-EAA7CF9E7746_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49636D0D.7040107_at_cea.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 09:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7646.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>In reply to:</strong> <a href="7646.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just add a line:
<br>
<p>orte_default_hostfile = your_hostfile
<br>
<p>You might also want to look at the wiki page describing the changed  
<br>
behavior for hostfiles:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p>In addition, you might want to look at the mpirun man page as there is  
<br>
now a default-hostfile and a hostfile option to mpirun.
<br>
<p>Ralph
<br>
<p><p>On Jan 6, 2009, at 7:39 AM, Bernard Secher - SFME/LGLS wrote:
<br>
<p><span class="quotelev1">&gt; How can i do this in my etc/openmpi-mca-params.conf file ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid that the changes in how we handle hostfiles forced us to  
</span><br>
<span class="quotelev2">&gt;&gt; remove the default hostfile name. Beginning with 1.3, you will need  
</span><br>
<span class="quotelev2">&gt;&gt; to specify it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that you can do this in your etc/openmpi-mca-params.conf file,  
</span><br>
<span class="quotelev2">&gt;&gt; if you want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2009, at 4:36 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I take 1.3 version from svn base.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The default hostfile in etc/openmpi-default-hostfile is not taken.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I must give to mpirun the -hostfile option to take this file. Is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there any change in 1.3 version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bernard
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7646.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<li><strong>In reply to:</strong> <a href="7646.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] default hostfile with 1.3 version"</a>
<!-- nextthread="start" -->
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
