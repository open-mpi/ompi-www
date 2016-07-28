<?
$subject_val = "[OMPI users] Installation of openmpi-1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 13:56:13 2011" -->
<!-- isoreceived="20111221185613" -->
<!-- sent="Wed, 21 Dec 2011 13:56:08 -0500" -->
<!-- isosent="20111221185608" -->
<!-- name="amosleff_at_[hidden]" -->
<!-- email="amosleff_at_[hidden]" -->
<!-- subject="[OMPI users] Installation of openmpi-1.4.4" -->
<!-- id="CAHNB0nO_2mcYUd_ToFyN9gEBKqSvgCDRgp866DxVDeF8n3R2FA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Installation of openmpi-1.4.4<br>
<strong>From:</strong> <a href="mailto:amosleff_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Installation%20of%20openmpi-1.4.4"><em>amosleff_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-12-21 13:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18032.php">Prentice Bisbal: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI Users,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have just read the messages from Martin Rushton and Jeff
<br>
Squyres and have been having the same problem trying to get openmp-1.4.4 to
<br>
work.  My specs are below:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xeon(R) CPU 5335 2.00 GHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linux  SUSE 11.4 (x86_64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linux 2.6.371-1.2 desktop x86_64
<br>
I go through the compilation process with the commands:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/opt/openmpi CC=icc CXX=icpc
<br>
F77=ifort F90=ifort &quot;FCFLAGS=-O3 -i8&quot; &quot;FFLAGS=-O3 -i8&quot; 2&gt;&amp;1 | tee config.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make -j 4 all 2&gt;&amp;1 | tee make.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make install 2&gt;&amp;1 | tee install.out.
<br>
The entire process seems to go properly but when I try to use an example it
<br>
doesn't work properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc hello_c.c -o hello_c
<br>
compiles properly.  However,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;./hello_c&quot; gives an error message that it
<br>
cannot find the file libmpi_so.0.    There are at least 3 copies of the
<br>
file present as found by the search command but none of these are found.  I
<br>
have checked the permissions and they seem to be OK so I am at the same
<br>
point as Martin Rushton.  I hope that somebody comes up with an anser soon.
<br>
<p>Amos Leffler
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18029.php">Rushton Martin: "Re: [OMPI users] UC  UC  UC   Clean install fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18031.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Reply:</strong> <a href="18032.php">Prentice Bisbal: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
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
