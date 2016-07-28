<?
$subject_val = "Re: [OMPI users] libtool:line1128 gfortran command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 12:07:10 2013" -->
<!-- isoreceived="20130725160710" -->
<!-- sent="Thu, 25 Jul 2013 16:06:55 +0000" -->
<!-- isosent="20130725160655" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool:line1128 gfortran command not found" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F76C37E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2b844e23.1553f.140166e1352.Coremail.qsmeng_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libtool:line1128 gfortran command not found<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-25 12:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22385.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22393.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22393.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A guess: you probably need to export your PATH variable in your .bashrc, not just set it.
<br>
<p><p>On Jul 25, 2013, at 11:24 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph, 
</span><br>
<span class="quotelev1">&gt;          Thank you for the reply. I have added the path to gcc to .bashrc at $HOME directory and gfortran can run anywhere. 
</span><br>
<span class="quotelev1">&gt; But I did not know what environment  has PATH=/usr/bin:/bin. Maybe this is far from the correct way.    
</span><br>
<span class="quotelev1">&gt;   Regards,
</span><br>
<span class="quotelev1">&gt; meng
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 2013-07-25 21:58:16,&quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; you need to add the path to your gcc to your $PATH environment, and then re-run configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2013, at 5:36 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;     I am trying to install openmpi and come upone many problems. One is about the Fortran 77 compiler in configure stage, I solved it by editing .bashrc, changing from $GCCHOME/lib to $GCCHOME/lib64. Of course your os should be 64-bits. 
</span><br>
<span class="quotelev2">&gt;&gt;   After configure, when running make all install, the screen display:
</span><br>
<span class="quotelev2">&gt;&gt; ./scripts/mpi_imrecv_f90.f90.sh /home/greatnet/openmpi-1.7.2/ompi/mpi/fortran/use-mpi-tkr &gt; mpi_imrecv_f90.f90
</span><br>
<span class="quotelev2">&gt;&gt;  ../../../../libtool: line 1128: gfortran: command not found
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  However, I am sure that gfortran exists and can run in any directory. When I add   &quot;$PATH&quot; after line 1128 in libtool, and then remake, it display &quot;/usr/bin:/bin&quot;.  Yes, indeed my gcc is not in /usr/bin ,/bin. How to add gcc to that path or how to solve my problem?
</span><br>
<span class="quotelev2">&gt;&gt;  Thank you for your help.
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Meng
</span><br>
<span class="quotelev2">&gt;&gt;  
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22385.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22393.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22393.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
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
