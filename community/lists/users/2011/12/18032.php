<?
$subject_val = "Re: [OMPI users] Installation of openmpi-1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 14:13:40 2011" -->
<!-- isoreceived="20111221191340" -->
<!-- sent="Wed, 21 Dec 2011 14:13:36 -0500" -->
<!-- isosent="20111221191336" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation of openmpi-1.4.4" -->
<!-- id="4EF22FE0.7010303_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 14:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18033.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18040.php">Rushton Martin: "Re: [OMPI users] UC  Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18040.php">Rushton Martin: "Re: [OMPI users] UC  Installation of openmpi-1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is the path to your opempi libraries in your LD_LIBRARY_PATH?
<br>
<p><pre>
--
Prentice
On 12/21/2011 01:56 PM, amosleff_at_[hidden] wrote:
&gt; Dear OMPI Users,
&gt;           I have just read the messages from Martin Rushton and Jeff
&gt; Squyres and have been having the same problem trying to get
&gt; openmp-1.4.4 to work.  My specs are below:
&gt;                            Xeon(R) CPU 5335 2.00 GHz
&gt;                            Linux  SUSE 11.4 (x86_64)
&gt;                            Linux 2.6.371-1.2 desktop x86_64
&gt; I go through the compilation process with the commands:
&gt;                           ./configure --prefix=/opt/openmpi CC=icc
&gt; CXX=icpc F77=ifort F90=ifort &quot;FCFLAGS=-O3 -i8&quot; &quot;FFLAGS=-O3 -i8&quot; 2&gt;&amp;1 |
&gt; tee config.out
&gt;                            make -j 4 all 2&gt;&amp;1 | tee make.out
&gt;                            make install 2&gt;&amp;1 | tee install.out.
&gt; The entire process seems to go properly but when I try to use an
&gt; example it doesn't work properly.
&gt;                            mpicc hello_c.c -o hello_c
&gt; compiles properly.  However,
&gt;                            &quot;./hello_c&quot; gives an error message that it
&gt; cannot find the file libmpi_so.0.    There are at least 3 copies of
&gt; the file present as found by the search command but none of these are
&gt; found.  I have checked the permissions and they seem to be OK so I am
&gt; at the same point as Martin Rushton.  I hope that somebody comes up
&gt; with an anser soon.
&gt;                                                                                                          
&gt; Amos Leffler
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18033.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18030.php">amosleff_at_[hidden]: "[OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18040.php">Rushton Martin: "Re: [OMPI users] UC  Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18040.php">Rushton Martin: "Re: [OMPI users] UC  Installation of openmpi-1.4.4"</a>
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
