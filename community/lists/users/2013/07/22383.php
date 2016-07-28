<?
$subject_val = "Re: [OMPI users] libtool:line1128 gfortran command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 25 11:24:26 2013" -->
<!-- isoreceived="20130725152426" -->
<!-- sent="Thu, 25 Jul 2013 23:24:07 +0800 (CST)" -->
<!-- isosent="20130725152407" -->
<!-- name="meng " -->
<!-- email="qsmeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libtool:line1128 gfortran command not found" -->
<!-- id="2b844e23.1553f.140166e1352.Coremail.qsmeng_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="B8E1E38E-24C1-4CBC-ACCC-15C21EC60F9F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-07-25 11:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Previous message:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for the reply. I have added the path to gcc to .bashrc at $HOME directory and gfortran can run anywhere.
<br>
But I did not know what environment  has PATH=/usr/bin:/bin. Maybe this is far from the correct way.   
<br>
&nbsp;&nbsp;Regards,
<br>
meng
<br>
<p><p><p><p><p><p>At 2013-07-25 21:58:16,&quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
you need to add the path to your gcc to your $PATH environment, and then re-run configure
<br>
<p><p>On Jul 25, 2013, at 5:36 AM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
<br>
<p><p>Hi all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am trying to install openmpi and come upone many problems. One is about the Fortran 77 compiler in configure stage, I solved it by editing .bashrc, changing from $GCCHOME/lib to $GCCHOME/lib64. Of course your os should be 64-bits.
<br>
&nbsp;&nbsp;After configure, when running make all install, the screen display:
<br>
<p>./scripts/mpi_imrecv_f90.f90.sh /home/greatnet/openmpi-1.7.2/ompi/mpi/fortran/use-mpi-tkr &gt; mpi_imrecv_f90.f90
<br>
&nbsp;../../../../libtool: line 1128: gfortran: command not found
<br>
<p>&nbsp;However, I am sure that gfortran exists and can run in any directory. When I add   &quot;$PATH&quot; after line 1128 in libtool, and then remake, it display &quot;/usr/bin:/bin&quot;.  Yes, indeed my gcc is not in /usr/bin ,/bin. How to add gcc to that path or how to solve my problem?
<br>
&nbsp;Thank you for your help.
<br>
Regards,
<br>
Meng
<br>
&nbsp;
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Previous message:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>In reply to:</strong> <a href="22382.php">Ralph Castain: "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
<li><strong>Reply:</strong> <a href="22384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool:line1128 gfortran command not found"</a>
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
