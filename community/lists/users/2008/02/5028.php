<?
$subject_val = "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 09:28:49 2008" -->
<!-- isoreceived="20080213142849" -->
<!-- sent="Wed, 13 Feb 2008 09:28:37 -0500" -->
<!-- isosent="20080213142837" -->
<!-- name="Hsieh, Pei-Ying (MED US)" -->
<!-- email="pei-ying.hsieh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
<!-- id="7AEC29D79CDD2646955922C34AFF197329E032_at_USMLVV1EXCTV06.ww005.siemens.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c84311bb0802121410v51e163f4p51bc689dfb25d4c7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS<br>
<strong>From:</strong> Hsieh, Pei-Ying (MED US) (<em>pei-ying.hsieh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 09:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Mark,
<br>
&nbsp;
<br>
When I installed HYPRE, I simply did &quot;./configure
<br>
--prefix=/usr/local/hypre2.0&quot;, then make, make install.  All libraries
<br>
seems to be static libraries.  
<br>
&nbsp;
<br>
As for openmpi, I did &quot;./configure --prefix=/usr/local/openmpi
<br>
--enable-static --disable-shared&quot;, then, make all install (elmer prefers
<br>
statically linked).  So, all openmpi static library should resides in
<br>
/usr/local/openmpi.  A simple hello_mpi.c (.f90) ran fine.
<br>
&nbsp;
<br>
During elmer configuration, one of the steps is to build blas/parpack
<br>
libraries.  Which was successful (I got libparpack.a under
<br>
ELMER_HOME/lib).  It is not clear to me why at the final step of elmer
<br>
configuration, it complains about not finding HYPRE and parpack.
<br>
&nbsp;
<br>
I also suspect about the /usr/lib64 business.  Trying to sort out
<br>
whether this is an openMPI issue (on 64 bit SuSE) or elmer issue.
<br>
&nbsp;
<br>
Thanks a lot!
<br>
&nbsp;
<br>
Best,
<br>
&nbsp;
<br>
Pei
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Mark Kosmowski
<br>
Sent: Tuesday, February 12, 2008 5:10 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS
<br>
<p><p>Are you pointing to the 64-bit build of HYPRE?  For that matter, like
<br>
Jeff asked, are you sure that each library path that you are defining
<br>
goes to a 64-bit library path?
<br>
&nbsp;
<br>
Good luck,
<br>
&nbsp;
<br>
Mark E. Kosmowski
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
LD_LIBRARY_PATH=/usr/local/openmpi/lib:/usr/local/hypre2.0/lib:$LD_LIBRA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RY_PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; ./configure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$ELMER_HOME --with-mpi-dir=$MPI_HOME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;
<br>
&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for Fortran 77 libraries of mpif90...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/usr/local/hypre2.0/lib -L/usr/local/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lHYPRE
<br>
-lmpi_f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for Fortran libraries of mpif90...
<br>
-L/usr/local/hypre2.0/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/usr/local/lib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/lib/../lib64 -L/usr/lib/../lib64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lHYPRE
<br>
-lmpi_f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for dseupd_ in -larpack... yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for pdneupd_ in -lparpack... no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: WARNING: No parallel arpack found.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for HYPRE_IJMatrixCreate in -lHYPRE... no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: WARNING: HYPRE not found, some functionaly will be
<br>
disabled.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for umf4def_ in -lumfpack... yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for mtc_init in -lmatc... yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for main in -lm... yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure: error: The MPI version needs parpack. Disabling MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pei-Ying Hsieh, Ph.D.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staff Product Engineer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siemens Healthcare Diagnostics Inc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;511 Benedict Ave., MS 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarrytown, NY 10591
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone: (914)524-3146
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fax:   (914)524-2580
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email: Pei-Ying.Hsieh_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.siemens.com/diagnostics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What puzzles me is that, on 32 bit OpenSUSE, I was able to
<br>
compile elmer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solver without any issue using the same script.  I am planning
<br>
to use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HYPRE library, but, configure file indicated that it cannot find
<br>
hypre
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;either which is another puzzle to me.  I will look into this
<br>
further.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Best,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pei
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is it possible that this could be a problem with /usr/lib64 as
<br>
opposed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to /usr/lib?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Just a thought...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff F. Pummill
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senior Linux Cluster Administrator
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of Arkansas
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p>----------------------------------------------------------------------------
<br>
This message and any included attachments are from Siemens Medical Solutions 
<br>
and are intended only for the addressee(s). 
<br>
The information contained herein may include trade secrets or privileged or 
<br>
otherwise confidential information. Unauthorized review, forwarding, printing, 
<br>
copying, distributing, or using such information is strictly prohibited and may 
<br>
be unlawful. If you received this message in error, or have reason to believe 
<br>
you are not authorized to receive it, please promptly delete this message and 
<br>
notify the sender by e-mail with a copy to Central.SecurityOffice_at_[hidden] 
<br>
<p>Thank you
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>In reply to:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5029.php">James A. Peltier: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
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
