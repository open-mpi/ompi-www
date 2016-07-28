<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 12:55:49 2010" -->
<!-- isoreceived="20101129175549" -->
<!-- sent="Mon, 29 Nov 2010 10:55:40 -0700" -->
<!-- isosent="20101129175540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="AF790098-1BAB-478F-A639-67EBA7390F6A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTikB7NrT_agqcQd6ajyk-S2C6-fOAoegKYBceDSf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-11-29 12:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14907.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14905.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14903.php">Maur&#237;cio Rodrigues: "[OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14907.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14907.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using the Intel compiler? The build system is looking for an &quot;icc&quot; command and not finding it. Perhaps something in your environment is defining CC to be &quot;icc&quot;?
<br>
<p><p>On Nov 29, 2010, at 10:43 AM, Maur&#237;cio Rodrigues wrote:
<br>
<p><span class="quotelev1">&gt; HI, I need to install opnmpi 1.4.2 in Ubuntu 4.10 64bit, and giving this error all the time ... I would like to help.
</span><br>
<span class="quotelev1">&gt; below follows the lines of the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/fjustino/fjustino/openmpi-1.4.2/libtool: line 7847: icc: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libopen-rte.la' with the above command before installing it
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/fjustino/fjustino/openmpi-1.4.2/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
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
<span class="quotelev1">&gt; Brazil
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14906/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14907.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14905.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14903.php">Maur&#237;cio Rodrigues: "[OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14907.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Reply:</strong> <a href="14907.php">Maurício Rodrigues: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
