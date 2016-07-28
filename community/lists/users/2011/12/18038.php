<?
$subject_val = "Re: [OMPI users] Installation of openmpi-1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 17:26:29 2011" -->
<!-- isoreceived="20111221222629" -->
<!-- sent="Wed, 21 Dec 2011 17:26:24 -0500" -->
<!-- isosent="20111221222624" -->
<!-- name="amosleff_at_[hidden]" -->
<!-- email="amosleff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation of openmpi-1.4.4" -->
<!-- id="CAHNB0nOi0+woZ8eNuzGPAcSW8hSZ6_QYT7g2jd6-7zGp6z9KEg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E751A08-0361-4AC6-AAB6-EB6435F2BAD9_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> <a href="mailto:amosleff_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Installation%20of%20openmpi-1.4.4"><em>amosleff_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-12-21 17:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18039.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18037.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18037.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18035.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attached is the output I got from using mpiexec.   Amos
<br>
<p>On Wed, Dec 21, 2011 at 5:17 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; When I pushed &quot;Send&quot; on this email
</span><br>
<span class="quotelev1">&gt; I thought immediately: &quot; ... hmm, Ralph or Jeff will say this is wrong ...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wow! Support to singletons!
</span><br>
<span class="quotelev1">&gt; I haven't read this word since long forgotten readings in Set Theory.
</span><br>
<span class="quotelev1">&gt; So, if you run a single process, you can do away with mpiexec,
</span><br>
<span class="quotelev1">&gt; and pretend that the code were serial, right?
</span><br>
<span class="quotelev1">&gt; Amazing. You guys think of all edge cases!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Happy Holidays!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; [standing corrected]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2011, at 4:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not  really - we support singletons, so that should work. The key is to
</span><br>
<span class="quotelev1">&gt; have LD_LIBRARY_PATH set correctly in the environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 21, 2011, at 1:08 PM, Gustavo Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You probably need also to launch the program with mpiexec (mpiexec -np
</span><br>
<span class="quotelev1">&gt; 4 ./hello_c),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not just ./hello_c as your email suggests you did.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 21, 2011, at 2:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did you remember to set your LD_LIBRARY_PATH to include /opt/openmpi,
</span><br>
<span class="quotelev1">&gt; per your configure line?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Dec 21, 2011, at 11:56 AM, amosleff_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Dear OMPI Users,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        I have just read the messages from Martin Rushton and Jeff
</span><br>
<span class="quotelev1">&gt; Squyres and have been having the same problem trying to get openmp-1.4.4 to
</span><br>
<span class="quotelev1">&gt; work.  My specs are below:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         Xeon(R) CPU 5335 2.00 GHz
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         Linux  SUSE 11.4 (x86_64)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         Linux 2.6.371-1.2 desktop x86_64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I go through the compilation process with the commands:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                        ./configure --prefix=/opt/openmpi CC=icc
</span><br>
<span class="quotelev1">&gt; CXX=icpc F77=ifort F90=ifort &quot;FCFLAGS=-O3 -i8&quot; &quot;FFLAGS=-O3 -i8&quot; 2&gt;&amp;1 | tee
</span><br>
<span class="quotelev1">&gt; config.out
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         make -j 4 all 2&gt;&amp;1 | tee make.out
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         make install 2&gt;&amp;1 | tee install.out.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The entire process seems to go properly but when I try to use an
</span><br>
<span class="quotelev1">&gt; example it doesn't work properly.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         mpicc hello_c.c -o hello_c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; compiles properly.  However,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                         &quot;./hello_c&quot; gives an error message that it
</span><br>
<span class="quotelev1">&gt; cannot find the file libmpi_so.0.    There are at least 3 copies of the
</span><br>
<span class="quotelev1">&gt; file present as found by the search command but none of these are found.  I
</span><br>
<span class="quotelev1">&gt; have checked the permissions and they seem to be OK so I am at the same
</span><br>
<span class="quotelev1">&gt; point as Martin Rushton.  I hope that somebody comes up with an anser soon.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                                  Amos Leffler
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18038/temp.out">temp.out</a>
</ul>
<!-- attachment="temp.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18039.php">Ralph Castain: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="18037.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<li><strong>In reply to:</strong> <a href="18037.php">Gustavo Correa: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18035.php">amosleff_at_[hidden]: "Re: [OMPI users] Installation of openmpi-1.4.4"</a>
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
