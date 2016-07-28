<?
$subject_val = "Re: [OMPI users] UC  Installation of openmpi-1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 22 05:37:21 2011" -->
<!-- isoreceived="20111222103721" -->
<!-- sent="Thu, 22 Dec 2011 10:37:03 -0000" -->
<!-- isosent="20111222103703" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UC  Installation of openmpi-1.4.4" -->
<!-- id="201112221037.pBMAbGRf022225_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EF22FE0.7010303_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] UC  Installation of openmpi-1.4.4<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-22 05:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18041.php">Roger Martin: "[OMPI users] OMPI_C_DEF_PRE not set for MinGW build setup"</a>
<li><strong>Previous message:</strong> <a href="18039.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18032.php">Prentice Bisbal: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SuSE supports an application mpi-selector which installs when you load
<br>
the (broken) SuSE version of OpenMPI.  According to your choice of mpi
<br>
implementation it will correctly set PATH, MANPATH and LD_LIBRARY_PATH
<br>
for you.
<br>
<p>The initial installation drops the usual pair (.sh, .csh) of scripts
<br>
into /etc/login.d.  When one of them runs it locates the appropriate
<br>
default (set at system or user level) and includes an appropriate script
<br>
from /var/mpi-selector/data.  If you manually create an instance of
<br>
openmpi you will have to create the relevant scripts.  We currently
<br>
have:
<br>
<p>openmpi-1.3.csh   openmpi-1.3.sh   openmpi-1.4.1.csh   openmpi-1.4.1.sh
<br>
<p>The selector program will gives the coice of &quot;openmpi-1.3&quot; or
<br>
&quot;openmpi-1.4.1&quot; and sets the default for the NEXT login.
<br>
<p>It's a little simplistic, but it seems to work fine.
<br>
<p>Martin Rushton
<br>
HPC System Manager, Weapons Technologies
<br>
Tel: 01959 514777, Mobile: 07939 219057
<br>
email: jmrushton_at_[hidden]
<br>
www.QinetiQ.com
<br>
QinetiQ - Delivering customer-focused solutions
<br>
<p>Please consider the environment before printing this email.
<br>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Prentice Bisbal
<br>
Sent: 21 December 2011 19:14
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Installation of openmpi-1.4.4
<br>
<p>Is the path to your opempi libraries in your LD_LIBRARY_PATH?
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
&gt;                            Linux 2.6.371-1.2 desktop x86_64 I go 
&gt; through the compilation process with the commands:
&gt;                           ./configure --prefix=/opt/openmpi CC=icc 
&gt; CXX=icpc F77=ifort F90=ifort &quot;FCFLAGS=-O3 -i8&quot; &quot;FFLAGS=-O3 -i8&quot; 2&gt;&amp;1 |
&gt; tee config.out
&gt;                            make -j 4 all 2&gt;&amp;1 | tee make.out
&gt;                            make install 2&gt;&amp;1 | tee install.out.
&gt; The entire process seems to go properly but when I try to use an 
&gt; example it doesn't work properly.
&gt;                            mpicc hello_c.c -o hello_c compiles 
&gt; properly.  However,
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
This email and any attachments to it may be confidential and are
intended solely for the use of the individual to whom it is 
addressed. If you are not the intended recipient of this email,
you must neither take any action based upon its contents, nor 
copy or show it to anyone. Please contact the sender if you 
believe you have received this email in error. QinetiQ may 
monitor email traffic data and also the content of email for 
the purposes of security. QinetiQ Limited (Registered in England
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18041.php">Roger Martin: "[OMPI users] OMPI_C_DEF_PRE not set for MinGW build setup"</a>
<li><strong>Previous message:</strong> <a href="18039.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18032.php">Prentice Bisbal: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
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
