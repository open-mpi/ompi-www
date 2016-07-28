<?
$subject_val = "Re: [OMPI users] libtool:line1128 gfortran command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 22:03:02 2013" -->
<!-- isoreceived="20130726020302" -->
<!-- sent="Fri, 26 Jul 2013 10:02:40 +0800 (CST)" -->
<!-- isosent="20130726020240" -->
<!-- name="meng " -->
<!-- email="qsmeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool:line1128 gfortran command not found" -->
<!-- id="7d35e2a1.174f5.14018b6b179.Coremail.qsmeng_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F76C37E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> meng  (<em>qsmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-25 22:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22394.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22392.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My problem is solved. As my program does not use fortran, by running 'configure --disable-mpi-f77 --disable-mpi-f90', I solved make  problem. and then set environment as in <a href="http://hi.baidu.com/yoghurt117/item/bc666233a7e8af302e0f81c0">http://hi.baidu.com/yoghurt117/item/bc666233a7e8af302e0f81c0</a>. i succeed in installing openmpi.
<br>
<p><p><p><p>At 2013-07-26 00:06:55,&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;A guess: you probably need to export your PATH variable in your .bashrc, not just set it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 25, 2013, at 11:24 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph, 
</span><br>
<span class="quotelev2">&gt;&gt;          Thank you for the reply. I have added the path to gcc to .bashrc at $HOME directory and gfortran can run anywhere. 
</span><br>
<span class="quotelev2">&gt;&gt; But I did not know what environment  has PATH=/usr/bin:/bin. Maybe this is far from the correct way.    
</span><br>
<span class="quotelev2">&gt;&gt;   Regards,
</span><br>
<span class="quotelev2">&gt;&gt; meng
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At 2013-07-25 21:58:16,&quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; you need to add the path to your gcc to your $PATH environment, and then re-run configure
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 25, 2013, at 5:36 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I am trying to install openmpi and come upone many problems. One is about the Fortran 77 compiler in configure stage, I solved it by editing .bashrc, changing from $GCCHOME/lib to $GCCHOME/lib64. Of course your os should be 64-bits. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   After configure, when running make all install, the screen display:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./scripts/mpi_imrecv_f90.f90.sh /home/greatnet/openmpi-1.7.2/ompi/mpi/fortran/use-mpi-tkr &gt; mpi_imrecv_f90.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ../../../../libtool: line 1128: gfortran: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  However, I am sure that gfortran exists and can run in any directory. When I add   &quot;$PATH&quot; after line 1128 in libtool, and then remake, it display &quot;/usr/bin:/bin&quot;.  Yes, indeed my gcc is not in /usr/bin ,/bin. How to add gcc to that path or how to solve my problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thank you for your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meng
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
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22394.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22392.php">Gus Correa: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
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
