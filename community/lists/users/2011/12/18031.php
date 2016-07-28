<?
$subject_val = "Re: [OMPI users] Installation of openmpi-1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 14:12:27 2011" -->
<!-- isoreceived="20111221191227" -->
<!-- sent="Wed, 21 Dec 2011 12:12:17 -0700" -->
<!-- isosent="20111221191217" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation of openmpi-1.4.4" -->
<!-- id="8F8DCFF0-CD55-4E53-BF8F-A1860942ADA6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHNB0nO_2mcYUd_ToFyN9gEBKqSvgCDRgp866DxVDeF8n3R2FA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installation of openmpi-1.4.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 14:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18032.php">Prentice Bisbal: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18033.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18033.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18035.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18036.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you remember to set your LD_LIBRARY_PATH to include /opt/openmpi, per your configure line?
<br>
<p><p>On Dec 21, 2011, at 11:56 AM, amosleff_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI Users,
</span><br>
<span class="quotelev1">&gt;           I have just read the messages from Martin Rushton and Jeff Squyres and have been having the same problem trying to get openmp-1.4.4 to work.  My specs are below:
</span><br>
<span class="quotelev1">&gt;                            Xeon(R) CPU 5335 2.00 GHz
</span><br>
<span class="quotelev1">&gt;                            Linux  SUSE 11.4 (x86_64)
</span><br>
<span class="quotelev1">&gt;                            Linux 2.6.371-1.2 desktop x86_64
</span><br>
<span class="quotelev1">&gt; I go through the compilation process with the commands:
</span><br>
<span class="quotelev1">&gt;                           ./configure --prefix=/opt/openmpi CC=icc CXX=icpc F77=ifort F90=ifort &quot;FCFLAGS=-O3 -i8&quot; &quot;FFLAGS=-O3 -i8&quot; 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev1">&gt;                            make -j 4 all 2&gt;&amp;1 | tee make.out
</span><br>
<span class="quotelev1">&gt;                            make install 2&gt;&amp;1 | tee install.out.
</span><br>
<span class="quotelev1">&gt; The entire process seems to go properly but when I try to use an example it doesn't work properly.
</span><br>
<span class="quotelev1">&gt;                            mpicc hello_c.c -o hello_c
</span><br>
<span class="quotelev1">&gt; compiles properly.  However, 
</span><br>
<span class="quotelev1">&gt;                            &quot;./hello_c&quot; gives an error message that it cannot find the file libmpi_so.0.    There are at least 3 copies of the file present as found by the search command but none of these are found.  I have checked the permissions and they seem to be OK so I am at the same point as Martin Rushton.  I hope that somebody comes up with an anser soon.
</span><br>
<span class="quotelev1">&gt;                                                                                                           Amos Leffler
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18032.php">Prentice Bisbal: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18033.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18033.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18035.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18036.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
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
