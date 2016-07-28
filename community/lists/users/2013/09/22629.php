<?
$subject_val = "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  9 23:23:27 2013" -->
<!-- isoreceived="20130910032327" -->
<!-- sent="Mon, 9 Sep 2013 20:23:21 -0700" -->
<!-- isosent="20130910032321" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to build a relocatable OpenMPI RPM ?" -->
<!-- id="F085DE97-C010-4A05-BDA0-63EB7CF7F8E5_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJZ1kLEv2U7-CoNFzDpR7+YvsB2QCshBWu06CusRwv4oyLMsWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to build a relocatable OpenMPI RPM ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-09 23:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22628.php">caohaijun: "[OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22628.php">caohaijun: "[OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to put prefix location in your path and ld_library_path
<br>
<p>Sent from my iPhone
<br>
<p>On Sep 9, 2013, at 8:02 PM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to build a relocatable OpenMPI RPM ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just use the following command to build a OpenMPI RPM from SRPM.
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define 'configure_options --with-devel-headers' openmpi-1.7.2-1.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It can successfully build the RPM. After installing with 'rpm -ivh --prefix=/somewhere  openmpi-1.7.2-1.x86_64.rpm',  I tried to run a MPI job, and then got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpirun -bynode -hostfile ./hostfile -np 40 ./mpi/hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /usr/share/openmpi/help-opal-runtime.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /usr/share/openmpi/help-orte-runtime: No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the directory 'share'  is supposed to be under /usr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone can help me? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Best Regards!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Jimmy Haijun Cao   (&#230;&#155;&#185;&#230;&#181;&#183;&#229;&#134;&#155;)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Tel:   +86-188 1787 9959
</span><br>
<span class="quotelev1">&gt; Email:amao.chj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22628.php">caohaijun: "[OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22628.php">caohaijun: "[OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
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
