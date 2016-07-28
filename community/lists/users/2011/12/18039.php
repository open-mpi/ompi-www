<?
$subject_val = "Re: [OMPI users] Installation of openmpi-1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 17:26:31 2011" -->
<!-- isoreceived="20111221222631" -->
<!-- sent="Wed, 21 Dec 2011 15:26:22 -0700" -->
<!-- isosent="20111221222622" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation of openmpi-1.4.4" -->
<!-- id="6595968E-D053-496B-8E13-56BE5763826C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHNB0nMK6_jVMG=h8tWnBXa4suwC9u2DBMgN+u4Vsz9vwPofMw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-12-21 17:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18040.php">Rushton Martin: "Re: [OMPI users] UC  Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18038.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18035.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18036.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 21, 2011, at 3:09 PM, amosleff_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;               Yes I did add to the LD_LIBRARY_PATH in the .bashrc file.
</span><br>
<p>That is fine, but did you source that .bashrc so it was in your current environment? It doesn't matter what is in the .bashrc file - what matters is the current environment when you execute the command.
<br>
<p><p><span class="quotelev1">&gt;                                                                                              Amos L.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 21, 2011 at 2:12 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Did you remember to set your LD_LIBRARY_PATH to include /opt/openmpi, per your configure line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2011, at 11:56 AM, amosleff_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear OMPI Users,
</span><br>
<span class="quotelev2">&gt; &gt;           I have just read the messages from Martin Rushton and Jeff Squyres and have been having the same problem trying to get openmp-1.4.4 to work.  My specs are below:
</span><br>
<span class="quotelev2">&gt; &gt;                            Xeon(R) CPU 5335 2.00 GHz
</span><br>
<span class="quotelev2">&gt; &gt;                            Linux  SUSE 11.4 (x86_64)
</span><br>
<span class="quotelev2">&gt; &gt;                            Linux 2.6.371-1.2 desktop x86_64
</span><br>
<span class="quotelev2">&gt; &gt; I go through the compilation process with the commands:
</span><br>
<span class="quotelev2">&gt; &gt;                           ./configure --prefix=/opt/openmpi CC=icc CXX=icpc F77=ifort F90=ifort &quot;FCFLAGS=-O3 -i8&quot; &quot;FFLAGS=-O3 -i8&quot; 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev2">&gt; &gt;                            make -j 4 all 2&gt;&amp;1 | tee make.out
</span><br>
<span class="quotelev2">&gt; &gt;                            make install 2&gt;&amp;1 | tee install.out.
</span><br>
<span class="quotelev2">&gt; &gt; The entire process seems to go properly but when I try to use an example it doesn't work properly.
</span><br>
<span class="quotelev2">&gt; &gt;                            mpicc hello_c.c -o hello_c
</span><br>
<span class="quotelev2">&gt; &gt; compiles properly.  However,
</span><br>
<span class="quotelev2">&gt; &gt;                            &quot;./hello_c&quot; gives an error message that it cannot find the file libmpi_so.0.    There are at least 3 copies of the file present as found by the search command but none of these are found.  I have checked the permissions and they seem to be OK so I am at the same point as Martin Rushton.  I hope that somebody comes up with an anser soon.
</span><br>
<span class="quotelev2">&gt; &gt;                                                                                                           Amos Leffler
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18040.php">Rushton Martin: "Re: [OMPI users] UC  Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18038.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18035.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18036.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
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
