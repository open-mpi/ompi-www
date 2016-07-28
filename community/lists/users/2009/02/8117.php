<?
$subject_val = "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:51:42 2009" -->
<!-- isoreceived="20090219175142" -->
<!-- sent="Thu, 19 Feb 2009 18:51:37 +0100" -->
<!-- isosent="20090219175137" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probl&amp;#232;me d'ex&amp;#233;cution d'open-mpi sur un cluster de test" -->
<!-- id="9b0da5ce0902190951s4f35fc5fi18b33cbd7b7fbfdc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0902190948k74aebd73l14e7e76dbb575510_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 12:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Previous message:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>In reply to:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excuse - j'ai pas fini ma reponse:
<br>
A tu etabli que $PATH et $LD_LIBRARY_PATH contiennent les values correctes
<br>
quand tu fais une connexion ssh sans login?
<br>
Essaye:
<br>
&nbsp;&nbsp;ssh debian1 printenv
<br>
tu devrais voir dans $PATH quelquechose comme /opt/openmpi-1.3/bin
<br>
et $LD_LIBRARY_PATH avec /opt/openmpi-1.3/lib
<br>
<p>Jody
<br>
<p>2009/2/19 jody &lt;jody.xha_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; A tu etabli que $PATH et $LD_LIBRARY_PATH contiennent les values correctes
</span><br>
<span class="quotelev1">&gt; quand tu fais une connexion ssh sans login?
</span><br>
<span class="quotelev1">&gt; Essaye:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/2/19 Abderezak MEKFOULDJI &lt;amekfouldji_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt; mon cluster est compos&#233; (pour l'instant) de 2 machines amd64 contenant le
</span><br>
<span class="quotelev2">&gt;&gt; syst&#232;me debian 2.6 &quot;version etch&quot;, le compilateur fortran d'intel(ifort) et
</span><br>
<span class="quotelev2">&gt;&gt; l'outil Open-mpi 1.3.
</span><br>
<span class="quotelev2">&gt;&gt; La connexion entre les 2 h&#244;tes est bien &#233;tablie et s&#233;curis&#233;e gr&#226;ce &#224; ssh.
</span><br>
<span class="quotelev2">&gt;&gt; Sachant que j'ai mis le r&#233;pertoire &quot;openmpi-1.3&quot; -qui contient les fichiers
</span><br>
<span class="quotelev2">&gt;&gt; d'installation- sous opt avant de l'installer. Apr&#232;s la compilation avec
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpif&quot; du code d'essai et l'ex&#233;cution, j'obtient le message suivant:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; debian1:/home/toto/Desktop# mpirun --prefix /opt/openmpi-1.3 -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian1's password:
</span><br>
<span class="quotelev2">&gt;&gt; bash: /opt/openmpi-1.3/bin/orted: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 11250) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pour &#234;tre plus clair, vous trouverez ci-joints:
</span><br>
<span class="quotelev2">&gt;&gt; * le contenu du &quot;bash.bashrc&quot; comprenant la d&#233;claration des variables du
</span><br>
<span class="quotelev2">&gt;&gt; compilateur et du wrapper,
</span><br>
<span class="quotelev2">&gt;&gt; * le code  &#224; tester &quot;essai2.f90&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; * la proc&#233;dure que j'ai suivi pour configurer open-mpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cordialement
</span><br>
<span class="quotelev2">&gt;&gt; Abderezak
</span><br>
<span class="quotelev2">&gt;&gt; stagiaire de master r&#233;seaux et syst&#232;me au lpmtm/CNRS
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>Previous message:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<li><strong>In reply to:</strong> <a href="8116.php">jody: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8118.php">Jeff Squyres: "Re: [OMPI users] probl&#232;me d'ex&#233;cution d'open-mpi sur un cluster de test"</a>
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
