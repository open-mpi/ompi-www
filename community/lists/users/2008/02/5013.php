<?
$subject_val = "Re: [OMPI users] A beginer's question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 14:38:29 2008" -->
<!-- isoreceived="20080208193829" -->
<!-- sent="Fri, 8 Feb 2008 14:38:24 -0500" -->
<!-- isosent="20080208193824" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A beginer's question" -->
<!-- id="A5012801-20DB-4AC8-858A-FB876198B27B_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7AEC29D79CDD2646955922C34AFF197329D6F2_at_USMLVV1EXCTV06.ww005.siemens.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] A beginer's question<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 14:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<li><strong>Previous message:</strong> <a href="5012.php">Hsieh, Pei-Ying (MED US): "[OMPI users] A beginer's question"</a>
<li><strong>In reply to:</strong> <a href="5012.php">Hsieh, Pei-Ying (MED US): "[OMPI users] A beginer's question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<li><strong>Reply:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You have to update the ldcache each time you add some .so files to the  
<br>
directories it refers to. If you don't, any .so file you added since  
<br>
system bootup will not be found (even if they are in the filesystem).  
<br>
This is made by running ldconfig as root. If this does not solve your  
<br>
problem, please check that /usr/local/lib appears in the output of  
<br>
ldconfig -p.
<br>
<p>If it does not, you have to add this directory to /etc/ld.so.conf, or  
<br>
to the LD_LIBRARY_PATH shell variable, or to use the --enable-mpirun- 
<br>
prefix-by-default option in the Open MPI configure.
<br>
<p>Hope that helps,
<br>
Aurelien
<br>
<p><p>Le 8 f&#233;vr. 08 &#224; 14:28, Hsieh, Pei-Ying (MED US) a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI group:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry about this newbie question, but, I was not able to find the
</span><br>
<span class="quotelev1">&gt; answer so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI-1.2.5 from source on a OpenSUSE 10.3 64 bit OS.
</span><br>
<span class="quotelev1">&gt; Configure and installation seemed fine (using prefix=/usr/local).  I
</span><br>
<span class="quotelev1">&gt; installed openmpi as root.  But, when I ran a quick test program, I  
</span><br>
<span class="quotelev1">&gt; got
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; saturn:~/openmpi/openmpi-1.2.5 # mpicc -o hello_mpi.c hello_mpi.c
</span><br>
<span class="quotelev1">&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; saturn:~/openmpi/openmpi-1.2.5 #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, I found libopen-pal.so.0 in /usr/local/lib.  How to get
</span><br>
<span class="quotelev1">&gt; mpicc/mpif90 wraper to find libopen-pal.so in the correct directoy?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, on another workstation (OpenSUSE 10.2 64 bit OS), I installed  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2 rpm (and openmpi-1.2.2-devel rpm).  Libopen-pal.so was
</span><br>
<span class="quotelev1">&gt; laced in /usr/lib64/mpi/gcc/openmpi/lib64.  I has the same problem  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; executing mpicc/mpif90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone shed some light on this?  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pei
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; Pei-Ying Hsieh, Ph.D.
</span><br>
<span class="quotelev1">&gt; Staff Product Engineer
</span><br>
<span class="quotelev1">&gt; Siemens Healthcare Diagnostics Inc.
</span><br>
<span class="quotelev1">&gt; 511 Benedict Ave., MS 32
</span><br>
<span class="quotelev1">&gt; Tarrytown, NY 10591
</span><br>
<span class="quotelev1">&gt; USA
</span><br>
<span class="quotelev1">&gt; Phone: (914)524-3146
</span><br>
<span class="quotelev1">&gt; fax:   (914)524-2580
</span><br>
<span class="quotelev1">&gt; email: Pei-Ying.Hsieh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.siemens.com/diagnostics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This message and any included attachments are from Siemens Medical  
</span><br>
<span class="quotelev1">&gt; Solutions
</span><br>
<span class="quotelev1">&gt; and are intended only for the addressee(s).
</span><br>
<span class="quotelev1">&gt; The information contained herein may include trade secrets or  
</span><br>
<span class="quotelev1">&gt; privileged or
</span><br>
<span class="quotelev1">&gt; otherwise confidential information. Unauthorized review, forwarding,  
</span><br>
<span class="quotelev1">&gt; printing,
</span><br>
<span class="quotelev1">&gt; copying, distributing, or using such information is strictly  
</span><br>
<span class="quotelev1">&gt; prohibited and may
</span><br>
<span class="quotelev1">&gt; be unlawful. If you received this message in error, or have reason  
</span><br>
<span class="quotelev1">&gt; to believe
</span><br>
<span class="quotelev1">&gt; you are not authorized to receive it, please promptly delete this  
</span><br>
<span class="quotelev1">&gt; message and
</span><br>
<span class="quotelev1">&gt; notify the sender by e-mail with a copy to Central.SecurityOffice_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
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
Dr. Aur&#233;lien Bouteiller
Sr. Research Associate - Innovative Computing Laboratory
Suite 350, 1122 Volunteer Boulevard
Knoxville, TN 37996
865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<li><strong>Previous message:</strong> <a href="5012.php">Hsieh, Pei-Ying (MED US): "[OMPI users] A beginer's question"</a>
<li><strong>In reply to:</strong> <a href="5012.php">Hsieh, Pei-Ying (MED US): "[OMPI users] A beginer's question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<li><strong>Reply:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
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
