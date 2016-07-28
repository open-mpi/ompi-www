<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:21:17 2010" -->
<!-- isoreceived="20101129192117" -->
<!-- sent="Mon, 29 Nov 2010 12:21:08 -0700" -->
<!-- isosent="20101129192108" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="F5AF2B2A-5ACA-422A-BD4E-03034E19C2A9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTin8cQw3q8y_jeTJobydTAQkW_Oc2VVUvLuvObj7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14912.php">David Robertson: "[OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="14908.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14915.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would guess that the problem is that your path and ld_library_path aren't correctly pointing to the Intel compiler. Try ensuring they are and then rebuild.
<br>
<p><p>On Nov 29, 2010, at 11:07 AM, Maur&#237;cio Rodrigues wrote:
<br>
<p><span class="quotelev1">&gt; I'm using Intel &#174; C + + 2011 Composer XE for Linux, I have no idea how to solve this problem.
</span><br>
<span class="quotelev1">&gt; I would like to help if possible.
</span><br>
<span class="quotelev1">&gt; Thank you from the already
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Em 29 de novembro de 2010 16:06, Maur&#237;cio Rodrigues &lt;mauriciopaulorodrigues_at_[hidden]&gt; escreveu:
</span><br>
<span class="quotelev1">&gt;  usando o Intel&#174;  C++ Composer XE 2011 for Linux, nao tenho nenhuma id&#233;ia de como resolver este problema.
</span><br>
<span class="quotelev1">&gt; gostaria de ajuda se possivel.
</span><br>
<span class="quotelev1">&gt; obrigado desde de j&#225;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/11/29 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using the Intel compiler? The build system is looking for an &quot;icc&quot; command and not finding it. Perhaps something in your environment is defining CC to be &quot;icc&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 10:43 AM, Maur&#237;cio Rodrigues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HI, I need to install opnmpi 1.4.2 in Ubuntu 4.10 64bit, and giving this error all the time ... I would like to help.
</span><br>
<span class="quotelev2">&gt;&gt; below follows the lines of the error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/fjustino/fjustino/openmpi-1.4.2/libtool: line 7847: icc: command not found
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: error: relink `libopen-rte.la' with the above command before installing it
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Maur&#237;cio Paulo Rodrigues
</span><br>
<span class="quotelev2">&gt;&gt; Bacharelando em F&#237;sica 
</span><br>
<span class="quotelev2">&gt;&gt; Universidade Federal de Vi&#231;osa
</span><br>
<span class="quotelev2">&gt;&gt; Mobile- (32)-9972 2239
</span><br>
<span class="quotelev2">&gt;&gt; e-mail alternativo mauricio.paulo_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; Brazil
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Maur&#237;cio Paulo Rodrigues
</span><br>
<span class="quotelev1">&gt; Bacharelando em F&#237;sica 
</span><br>
<span class="quotelev1">&gt; Universidade Federal de Vi&#231;osa
</span><br>
<span class="quotelev1">&gt; Mobile- (32)-9972 2239
</span><br>
<span class="quotelev1">&gt; e-mail alternativo mauricio.paulo_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Maur&#237;cio Paulo Rodrigues
</span><br>
<span class="quotelev1">&gt; Bacharelando em F&#237;sica 
</span><br>
<span class="quotelev1">&gt; Universidade Federal de Vi&#231;osa
</span><br>
<span class="quotelev1">&gt; Mobile- (32)-9972 2239
</span><br>
<span class="quotelev1">&gt; e-mail alternativo mauricio.paulo_at_[hidden] 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14912.php">David Robertson: "[OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="14908.php">Maur&#237;cio Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14915.php">Gus Correa: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
