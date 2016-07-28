<?
$subject_val = "Re: [OMPI users] libtool:line1128 gfortran command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 09:58:34 2013" -->
<!-- isoreceived="20130725135834" -->
<!-- sent="Thu, 25 Jul 2013 06:58:16 -0700" -->
<!-- isosent="20130725135816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool:line1128 gfortran command not found" -->
<!-- id="B8E1E38E-24C1-4CBC-ACCC-15C21EC60F9F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75a34c18.11093.14015d49672.Coremail.qsmeng_at_126.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-25 09:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Previous message:</strong> <a href="22381.php">meng: "[OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22381.php">meng: "[OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you need to add the path to your gcc to your $PATH environment, and then re-run configure
<br>
<p>On Jul 25, 2013, at 5:36 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;     I am trying to install openmpi and come upone many problems. One is about the Fortran 77 compiler in configure stage, I solved it by editing .bashrc, changing from $GCCHOME/lib to $GCCHOME/lib64. Of course your os should be 64-bits. 
</span><br>
<span class="quotelev1">&gt;   After configure, when running make all install, the screen display:
</span><br>
<span class="quotelev1">&gt; ./scripts/mpi_imrecv_f90.f90.sh /home/greatnet/openmpi-1.7.2/ompi/mpi/fortran/use-mpi-tkr &gt; mpi_imrecv_f90.f90
</span><br>
<span class="quotelev1">&gt;  ../../../../libtool: line 1128: gfortran: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  However, I am sure that gfortran exists and can run in any directory. When I add   &quot;$PATH&quot; after line 1128 in libtool, and then remake, it display &quot;/usr/bin:/bin&quot;.  Yes, indeed my gcc is not in /usr/bin ,/bin. How to add gcc to that path or how to solve my problem?
</span><br>
<span class="quotelev1">&gt;  Thank you for your help.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Meng
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Previous message:</strong> <a href="22381.php">meng: "[OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22381.php">meng: "[OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22383.php">meng : "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
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
