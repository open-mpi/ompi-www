<?
$subject_val = "Re: [OMPI users] error when using mpiexec to launch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 06:00:10 2010" -->
<!-- isoreceived="20100323100010" -->
<!-- sent="Tue, 23 Mar 2010 11:00:17 +0100" -->
<!-- isosent="20100323100017" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error when using mpiexec to launch" -->
<!-- id="4BA89131.8010707_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="526247271003221621q6c0fe50ehd3a894ab7b0466ab_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error when using mpiexec to launch<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 06:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12400.php">Nicolas Niclausse: "[OMPI users] problem with  opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12398.php">Kshipra Singh: "[OMPI users] Author Open MPI books-Packt Publishing."</a>
<li><strong>In reply to:</strong> <a href="12396.php">Bloom Broker: "[OMPI users] error when using mpiexec to launch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>It has been fixed, could you update your source and do a clean build?
<br>
<p>Actually, mpiexec is the same as mpirun, and mpic++ is the wrapper for 
<br>
C++ applications. You could find more details in the OMPI documentations 
<br>
here: <a href="http://www.open-mpi.org/doc/v1.4/">http://www.open-mpi.org/doc/v1.4/</a>
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>Bloom Broker wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I finally managed to build openmpi in static library in visual studio 
</span><br>
<span class="quotelev1">&gt; ( thanks for your help), and then tried to run a program using
</span><br>
<span class="quotelev1">&gt; mpiexec -n 4 program.exe.
</span><br>
<span class="quotelev1">&gt; The answer to that was :
</span><br>
<span class="quotelev1">&gt; Cannot open configuration file 
</span><br>
<span class="quotelev1">&gt; C:/mpidist/installed/share/openmpi\mpiexec-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; Error parsing data file mpiexec: Not found
</span><br>
<span class="quotelev1">&gt; I checked and there are *-wrapper-data.txt for the compiler wrappers ( 
</span><br>
<span class="quotelev1">&gt; in the folder &quot;share&quot;) but nothing for mpiexec. In addition, I did not 
</span><br>
<span class="quotelev1">&gt; completely understand openmpi philosophy, mpic++ are supposed to be 
</span><br>
<span class="quotelev1">&gt; compiler wrapper, but when are they used in the process ? and what 
</span><br>
<span class="quotelev1">&gt; about exact mpiexec and mpirun roles ? I find it quite difficult to 
</span><br>
<span class="quotelev1">&gt; get a proper documentation and to understand the whole picture. Could 
</span><br>
<span class="quotelev1">&gt; you pls direct me to a good source of info or explain quickly how the 
</span><br>
<span class="quotelev1">&gt; project is structured ?
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12400.php">Nicolas Niclausse: "[OMPI users] problem with  opal_net_private_ipv4"</a>
<li><strong>Previous message:</strong> <a href="12398.php">Kshipra Singh: "[OMPI users] Author Open MPI books-Packt Publishing."</a>
<li><strong>In reply to:</strong> <a href="12396.php">Bloom Broker: "[OMPI users] error when using mpiexec to launch"</a>
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
